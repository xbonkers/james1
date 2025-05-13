<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xant&eacute; Christmas Poll</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
            font-size: 1.3rem;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1,
        h2 {
            text-align: center;
        }
        .question {
            margin-bottom: 15px;
        }
        .question label {
            display: inline-block;
            margin-left: 5px;
            /* Adds space between the radio button and label */
        }
        .question input[type="radio"] {
            display: inline-block;
            margin-right: 10px;
            /* Adds space between radio buttons */
        }
        .submit {
            text-align: center;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .thank-you {
            text-align: center;
            font-size: 18px;
            color: green;
        }
        .blabel {
            font-weight: bold;
            margin-top: 22px;
        }
        label {
            padding: 6px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Xant&eacute; Christmas Poll</h2>
        <form id="pollForm" method="POST" action="poll_results.php">
            <!-- Questions -->
            <div class="question">
                <label class="blabel">Which of these is the BEST Christmas movie?</label><br>
                <input type="radio" id="elf" name="Which of these is the BEST Christmas movie?" value="Elf" required>
                <label for="elf">Elf</label><br>
                <input type="radio" id="grinch" name="Which of these is the BEST Christmas movie?" value="The Grinch">
                <label for="grinch">The Grinch</label><br>
                <input type="radio" id="charlieBrown" name="Which of these is the BEST Christmas movie?" value="A Charlie Brown Christmas">
                <label for="charlieBrown">A Charlie Brown Christmas</label><br>
                <input type="radio" id="christmasStory" name="Which of these is the BEST Christmas movie?" value="A Christmas Story">
                <label for="christmasStory">A Christmas Story</label><br>
                <input type="radio" id="christmasVacation" name="Which of these is the BEST Christmas movie?" value="Christmas Vacation">
                <label for="christmasVacation">Christmas Vacation</label>
            </div>
            <div class="question">
                <label class="blabel">Which of these is the WORST Christmas movie?</label><br>
                <input type="radio" id="worstElf" name="Which of these is the WORST Christmas movie?" value="Elf" required>
                <label for="worstElf">Elf</label><br>
                <input type="radio" id="worstGrinch" name="Which of these is the WORST Christmas movie?" value="The Grinch">
                <label for="worstGrinch">The Grinch</label><br>
                <input type="radio" id="worstCharlieBrown" name="Which of these is the WORST Christmas movie?" value="A Charlie Brown Christmas">
                <label for="worstCharlieBrown">A Charlie Brown Christmas</label><br>
                <input type="radio" id="worstChristmasStory" name="Which of these is the WORST Christmas movie?" value="A Christmas Story">
                <label for="worstChristmasStory">A Christmas Story</label><br>
                <input type="radio" id="worstChristmasVacation" name="Which of these is the WORST Christmas movie?" value="Christmas Vacation">
                <label for="worstChristmasVacation">Christmas Vacation</label>
            </div>
            <div class="question">
                <label class="blabel">Sid is a better salesperson than John</label><br>
                <input type="radio" id="sidTrue" name="Sid is a better salesperson than John" value="True" required>
                <label for="sidTrue">True</label><br>
                <input type="radio" id="sidFalse" name="Sid is a better salesperson than John" value="False">
                <label for="sidFalse">False</label>
            </div>
            <div class="question">
                <label class="blabel">How many towns in America are named “Christmas”?</label><br>
                <input type="radio" id="towns1" name="How many towns in America are named “Christmas”?" value="1" required>
                <label for="towns1">1</label><br>
                <input type="radio" id="towns2" name="How many towns in America are named “Christmas”?" value="2">
                <label for="towns2">2</label><br>
                <input type="radio" id="towns6" name="How many towns in America are named “Christmas”?" value="6">
                <label for="towns6">6</label><br>
                <input type="radio" id="towns9" name="How many towns in America are named “Christmas”?" value="9">
                <label for="towns9">9</label><br>
                <input type="radio" id="towns11" name="How many towns in America are named “Christmas”?" value="11">
                <label for="towns11">11</label>
            </div>
            <div class="question">
                <label class="blabel">How many reindeer does Santa Claus have?</label><br>
                <input type="radio" id="reindeer7" name="How many reindeer does Santa Claus have?" value="7" required>
                <label for="reindeer7">7</label><br>
                <input type="radio" id="reindeer8" name="How many reindeer does Santa Claus have?" value="8">
                <label for="reindeer8">8</label><br>
                <input type="radio" id="reindeer9" name="How many reindeer does Santa Claus have?" value="9">
                <label for="reindeer9">9</label><br>
                <input type="radio" id="reindeer10" name="How many reindeer does Santa Claus have?" value="10">
                <label for="reindeer10">10</label><br>
                <input type="radio" id="reindeer11" name="How many reindeer does Santa Claus have?" value="11">
                <label for="reindeer11">11</label>
            </div>
            <div class="question">
                <label class="blabel">What does mistletoe mean in German?</label><br>
                <input type="radio" id="mistletoeHollyBush" name="What does mistletoe mean in German?" value="Holly Bush" required>
                <label for="mistletoeHollyBush">Holly Bush</label><br>
                <input type="radio" id="mistletoeHollyBranch" name="What does mistletoe mean in German?" value="Holly Branch">
                <label for="mistletoeHollyBranch">Holly Branch</label><br>
                <input type="radio" id="mistletoeHollyBerry" name="What does mistletoe mean in German?" value="Holly Berry">
                <label for="mistletoeHollyBerry">Holly Berry</label><br>
                <input type="radio" id="mistletoeHolyBerry" name="What does mistletoe mean in German?" value="Holy Berry">
                <label for="mistletoeHolyBerry">Holy Berry</label><br>
                <input type="radio" id="mistletoeHalleBerry" name="What does mistletoe mean in German?" value="Halle Berry">
                <label for="mistletoeHalleBerry">Halle Berry</label>
            </div>
            <div class="question">
                <label class="blabel">At which real-life department store does Miracle on 34th Street take place?</label><br>
                <input type="radio" id="miracleMacy" name="At which real-life department store does Miracle on 34th Street take place?" value="Macy's" required>
                <label for="miracleMacy">Macy's</label><br>
                <input type="radio" id="miracleJCPenny" name="At which real-life department store does Miracle on 34th Street take place?" value="JC Penny">
                <label for="miracleJCPenny">JC Penny</label><br>
                <input type="radio" id="miracleBloomingdales" name="At which real-life department store does Miracle on 34th Street take place?" value="Bloomingdale's">
                <label for="miracleBloomingdales">Bloomingdale's</label><br>
                <input type="radio" id="miracleBergdorfGoodman" name="At which real-life department store does Miracle on 34th Street take place?" value="Bergdorf Goodman">
                <label for="miracleBergdorfGoodman">Bergdorf Goodman</label><br>
                <input type="radio" id="miracleDollarTree" name="At which real-life department store does Miracle on 34th Street take place?" value="Dollar Tree">
                <label for="miracleDollarTree">Dollar Tree</label>
            </div>
            <div class="question">
                <label class="blabel">Sock shoe sock shoe OR sock sock shoe shoe?</label><br>
                <input type="radio" id="sockBetterTrue" name="Sock shoe sock shoe OR sock sock shoe shoe?" value="Sock shoe sock shoe" required>
                <label for="sockBetterTrue">Sock shoe sock shoe</label><br>
                <input type="radio" id="sockBetterFalse" name="Sock shoe sock shoe OR sock sock shoe shoe?" value="Sock sock shoe shoe">
                <label for="sockBetterFalse">Sock sock shoe shoe</label>
            </div>
            <div class="question">
                <label class="blabel">Which of these is the BEST Christmas food?</label><br>
                <input type="radio" id="bestEggnog" name="Which of these is the BEST Christmas food?" value="Eggnog" required>
                <label for="bestEggnog">Eggnog</label><br>
                <input type="radio" id="bestFruitcake" name="Which of these is the BEST Christmas food?" value="Fruitcake">
                <label for="bestFruitcake">Fruitcake</label><br>
                <input type="radio" id="bestCandyCanes" name="Which of these is the BEST Christmas food?" value="Candy Canes">
                <label for="bestCandyCanes">Candy Canes</label><br>
                <input type="radio" id="bestGreenBeanCasserole" name="Which of these is the BEST Christmas food?" value="Green Bean Casserole">
                <label for="bestGreenBeanCasserole">Green Bean Casserole</label><br>
                <input type="radio" id="bestSalad" name="Which of these is the BEST Christmas food?" value="Salad (of any kind)">
                <label for="bestSalad">Salad (of any kind)</label>
            </div>
            <div class="question">
                <label class="blabel">Which of these is the WORST Christmas food?</label><br>
                <input type="radio" id="worstEggnog" name="Which of these is the WORST Christmas food?" value="Eggnog" required>
                <label for="worstEggnog">Eggnog</label><br>
                <input type="radio" id="worstFruitcake" name="Which of these is the WORST Christmas food?" value="Fruitcake">
                <label for="worstFruitcake">Fruitcake</label><br>
                <input type="radio" id="worstCandyCanes" name="Which of these is the WORST Christmas food?" value="Candy Canes">
                <label for="worstCandyCanes">Candy Canes</label><br>
                <input type="radio" id="worstGreenBeanCasserole" name="Which of these is the WORST Christmas food?" value="Green Bean Casserole">
                <label for="worstGreenBeanCasserole">Green Bean Casserole</label><br>
                <input type="radio" id="worstSalad" name="Which of these is the WORST Christmas food?" value="Salad (of any kind)">
                <label for="worstSalad">Salad (of any kind)</label>
            </div>
            <div class="submit">
                <button type="submit">Submit</button>
            </div>
        </form>
        <div id="thankYou" class="thank-you" style="display: none;">Thank you for completing the poll!</div>
    </div>
</body>
</html>