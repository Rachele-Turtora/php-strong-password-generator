<?php
session_start();
?>

<?php if (!empty($_SESSION['pass_length']) && isset($_SESSION['repetition']) && isset($_SESSION['check'])) : ?>
    <p><strong>Password:</strong> <?php echo $_SESSION['password'] ?> </p>
<?php endif ?>