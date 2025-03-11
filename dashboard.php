<?php   
    session_start();

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <?php include "layout/header.html" ?>

    <h3>Selamat datang <?= $_SESSION["username"]; ?></h3>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>
