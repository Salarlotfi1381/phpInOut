<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="process_form.php" method="POST">
            <label for="userCount">Number of Users:</label>
            <input type="number" id="userCount" name="userCount" required>
            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
