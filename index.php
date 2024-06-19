<?php
$pass_length = $_GET['password_length'];
$characters = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), str_split('!@#$%^&*()_+-=[]{}|;:,.<>/?'));

function generatePassword($length, $characters)
{
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $character_index = rand(0, count($characters) - 1);
        $password .= $characters[$character_index];
    }
    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <h1>Password Generator</h1>
    <form action="index.php" method="GET">
        <input type="text" name="password_length">
    </form>
    <p><strong>Password:</strong> <?php echo generatePassword($pass_length, $characters); ?> </p>
</body>

</html>