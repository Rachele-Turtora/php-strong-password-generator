<?php
$pass_length = $_GET['password_length'];
$characters = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), str_split('!@#$%^&*()_+-=[]{}|;:,.<>/?'));

include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="index.php" method="GET">
            <input type="text" name="password_length" placeholder="Lunghezza password">
        </form>
        <p><strong>Password:</strong> <?php echo generatePassword($pass_length, $characters); ?> </p>
    </div>
</body>

</html>