<?php
// PHP to read the JSON file
$resultsFile = 'poll_results.json';
$resultsData = file_exists($resultsFile) ? json_decode(file_get_contents($resultsFile), true) : [];
// If the reset button is clicked, reset the poll results
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
    file_put_contents($resultsFile, json_encode([])); // Empty the JSON file
    exit; // Terminate after reset
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xant&eacute; Poll Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .container {
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #c00;
            margin-top: 0;
        }
        .results-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        .result-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .result-card:hover {
            transform: scale(1.05);
        }
        .question-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }
        .answer {
            font-size: 16px;
            /* margin-bottom: 10px; */
            color: #555;
        }
        .percentage {
            font-weight: bold;
            color: green;
        }
        .highlight {
            background-color: green;
            padding: 5px;
            border-radius: 5px;
            color: #fff;
        }
        .bar-container {
            width: 100%;
            background-color: #ddd;
            height: 20px;
            border-radius: 5px;
            /* margin-top: 5px; */
        }
        .bar {
            height: 100%;
            border-radius: 5px;
        }
        .thank-you {
            text-align: center;
            font-size: 18px;
            color: green;
            display: none;
        }
        .reset-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .reset-button:hover {
            background-color: #e03e3e;
        }
        @media (max-width: 1024px) {
            .results-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .results-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Poll Results</h1>
        <div class="results-grid" id="resultsGrid">
            <!-- Dynamic results cards will be inserted here -->
        </div>
        <div class="thank-you" id="thankYou">Thank you for completing the poll!</div>
        <button class="reset-button" onclick="resetResults()">Reset Results</button>
    </div>
    <script>
        // Function to fetch and update the poll results
        function fetchResults() {
            fetch('poll_results.json')
                .then(response => response.json())
                .then(data => {
                    const resultsGrid = document.getElementById('resultsGrid');
                    const questions = Object.keys(data);
                    // Clear previous results before adding new ones
                    resultsGrid.innerHTML = '';
                    questions.forEach(question => {
                        const answers = data[question];
                        const totalVotes = Object.values(answers).reduce((sum, count) => sum + count, 0);
                        const mostSelectedAnswer = Object.entries(answers).reduce((a, b) => b[1] > a[1] ? b : a);
                        // Create a result card for each question
                        const card = document.createElement('div');
                        card.classList.add('result-card');
                        // Add question title
                        const questionTitle = document.createElement('div');
                        questionTitle.classList.add('question-title');
                        questionTitle.textContent = question.replace(/_/g, ' ').toUpperCase();
                        card.appendChild(questionTitle);
                        // Add answers and percentages as bar graphs
                        Object.entries(answers).forEach(([answer, count]) => {
                            const percentage = ((count / totalVotes) * 100).toFixed(1);
                            const answerElement = document.createElement('div');
                            answerElement.classList.add('answer');
                            answerElement.innerHTML = `${answer}: <span class="percentage">${percentage}%</span>`;
                            // Create the bar container and fill it based on percentage
                            const barContainer = document.createElement('div');
                            barContainer.classList.add('bar-container');
                            const bar = document.createElement('div');
                            bar.classList.add('bar');
                            bar.style.width = `${percentage}%`;
                            bar.style.backgroundColor = (answer === mostSelectedAnswer[0]) ? 'green' : '#4caf50'; // Green bar for most selected
                            barContainer.appendChild(bar);
                            card.appendChild(answerElement);
                            card.appendChild(barContainer);
                        });
                        // Append the card to the grid
                        resultsGrid.appendChild(card);
                    });
                })
                .catch(error => console.error('Error loading poll results:', error));
        }
        // Initial fetch on page load
        fetchResults();
        // Auto-refresh every 20 seconds
        setInterval(fetchResults, 20000);
        // Reset the results (or clear data from the file)
        function resetResults() {
            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'reset=true'
                })
                .then(response => response.json())
                .then(() => {
                    document.getElementById('resultsGrid').innerHTML = '';
                    alert('Results have been reset.');
                })
                .catch(error => console.error('Error resetting results:', error));
        }
    </script>
</body>
</html>