<?php
session_start();

include 'functions.php';

$characters = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), str_split('!@#$%^&*()_+-=[]{}|;:,.<>/?'));
$_SESSION['pass_length'] = $_GET['password_length'];
$_SESSION['repetition'] = $_GET['repetitions'];
$_SESSION['password'] = generatePassword($_SESSION['pass_length'], $characters);

if (isset($_SESSION['pass_length']) && isset($_SESSION['repetition'])) {
    header('Location: ./password.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>

<body>
    <div class="container h-75">
        <div class="header text-center">
            <h1>Strong Password Generator</h1>
            <h2 class="text-light">Genera una password sicura</h2>
        </div>
        <div class="d-flex flex-column align-items-center">
            <?php if (!isset($_SESSION['pass_length']) || !isset($_SESSION['repetition'])) : ?>
                <div class="alert alert-info w-75 p-4" role="alert">
                    Inserisci i parametri
                </div>
            <?php endif ?>
            <div class="sm-container w-75 p-4 my-3 bg-light rounded">
                <form action="index.php" method="GET">
                    <div class="d-flex justify-content-between">
                        <label for="password_length">Lunghezza password: </label>
                        <input type="text" name="password_length" placeholder="Lunghezza password" id="password_length">
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <label class="form-check-label" for="flexRadio"> Consenti ripetizioni di uno o più caratteri: </label>
                        <div class="d-flex flex-column">
                            <div>
                                <input class="form-check-input" type="radio" name="repetitions" value="yes" id="flexRadio">
                                <label>Si</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="repetitions" value="no" id="flexRadio">
                                <label>No</label>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="btn btn-primary">Invio</button>
                        <button class="btn btn-secondary">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'password.php' ?>
    </div>
</body>

</html>