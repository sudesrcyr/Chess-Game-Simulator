<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Players</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    </style>
</head>
<body>
<h1 style="background-color: #006400; text-align: center; color:white">SS Chess Game Simulator</h1>
<p style="text-align:center;">Score table for chess competition</p>
<p style="text-align:center;">HTML, CSS, Javascript, PHP</p>

<?php
if (isset($_POST['numPlayers']) && is_numeric($_POST['numPlayers']) && $_POST['numPlayers'] > 0) {
    $numPlayers = $_POST['numPlayers'];
?>
    <form action="page3.php" method="POST">
        <label for="numPlayers">The number of chess players:</label>
        <input type="text" name="numPlayers" value="<?php echo $numPlayers; ?>" readonly>
        <br>
        <div style="margin-bottom: 10px;"></div> 
        <table border="3" style="background-color: #F0FFF0; color:black;">
            <tr><th>Index</th><th>Player Name</th></tr>
            <?php for ($i = 1; $i <= $numPlayers; $i++) { ?>
                <tr><td><?php echo $i; ?></td><td><input type="text" name="player_<?php echo $i; ?>"></td></tr>
            <?php } ?>
        </table>
        <div style="margin-bottom: 10px;"></div>
        <button  style="background-color: #006400; color: white; "  type="submit">Generate Tournament</button>
    </form>
<?php
} else {
    echo "Error: Invalid number of players.";
}
?>
</body>
</html>

