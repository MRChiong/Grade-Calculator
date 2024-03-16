<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form action="output.php" method="post">
        <label for="score">Enter your score (out of 100):</label><br>
        <input type="number" id="score" name="score" min="0" max="100" required><br><br>
        <button type="submit" name="submit">Calculate Grade</button>
    </form>
</body>
</html>