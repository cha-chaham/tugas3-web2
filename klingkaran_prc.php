<?php
    if(empty($_GET['nilai_R'])) {
        header("Location:k_lingkaran.php");
    } else {
        $a = $_GET['nilai_R'];

        setcookie('nilai_R',$a);
        header("Location:klingkaran_hasil.php");
    }
?>