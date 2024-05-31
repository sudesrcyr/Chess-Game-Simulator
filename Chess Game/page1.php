<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page 1</title>
<style>
    h1 {
        background-color: #006400; 
        text-align: center; 
        color:white;
    }
    p {
        text-align: center;
    }
</style>
<script>
function validateForm() {
    var numPlayers = document.getElementById("numPlayers").value;
    if (numPlayers === "" || isNaN(numPlayers) || parseInt(numPlayers) <= 0) {
        alert("Please enter a valid number of players.");
        return false;
    }
    return true;
}
</script>
</head>
<body>
<h1>SS Chess Game Simulator</h1>
<p>Score table for chess competition</p>
<p>HTML, CSS, PHP, Javascript</p>
<form action="page2.php" method="post" onsubmit="return validateForm()">
    <label for="numPlayers">Enter number of chess players:</label>
    <input type="text" name="numPlayers" id="numPlayers" />
    <input style="background-color: #006400; color: white;" type="submit" value="Start" />
</form>
</body>
</html>

