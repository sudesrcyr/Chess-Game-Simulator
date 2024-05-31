<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Competition Table</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        background: #006400;
        color:white;
    }
    td{
        background: #F0FFF0;
        color:black;
    }

    .winner {
        font-weight: bold;
    }
    .draw {
        font-style: italic;
    }
</style>
</head>
<body>
<h1 style="background-color: #006400; text-align: center; color: white;">SS Chess Game Simulator</h1>
<p style="text-align:center;">Score table for chess competition</p>
<p style="text-align:center;">HTML, CSS, Javascript, PHP</p>
<?php
function generateScore() {
    $scores = ["1-0", "0-1", "1/2-1/2"];
    return $scores[array_rand($scores)];
}

if (isset($_POST['numPlayers']) && is_numeric($_POST['numPlayers']) && $_POST['numPlayers'] > 0) {
    $numPlayers = $_POST['numPlayers'];
?>
    <form action="page2.php" method="post" onsubmit="return validateForm()">
        <label for="numPlayers">Enter number of chess players:</label>
        <input type="text" name="numPlayers" id="numPlayers" value="<?php echo $numPlayers; ?>" readonly>
    </form>
    <br>
        <div style="margin-bottom: 10px;"></div> 
<?php
?>

    <table>
        <tr>
            <th>Index</th>
            <th>Player 1</th>
            <th>Score</th>
            <th>Player 2</th>
        </tr>
        <?php
    for ($i = 1; $i < $numPlayers; $i++) {
        for ($j = $i + 1; $j <= $numPlayers; $j++) {
            $player1 = $_POST["player_" . $i]; 
            $player2 = $_POST["player_" . $j]; 
            $score = generateScore();
?>
        <tr>
            <td><?php echo "$i-$j"; ?></td>
            <td <?php if ($score == "1-0") echo 'class="winner"'; ?>><?php echo $player1; ?></td>
            <td <?php if ($score == "1-0" || $score == "0-1") echo 'class="winner"'; elseif ($score == "1/2-1/2") echo 'class="draw"'; ?>><?php echo $score; ?></td>
            <td <?php if ($score == "0-1") echo 'class="winner"'; ?>><?php echo $player2; ?></td>
        </tr>
<?php
        }
    }
?>
    </table>

<?php
}else {
    echo "Error: Invalid number of players.";
}
?>
</body>
</html>








