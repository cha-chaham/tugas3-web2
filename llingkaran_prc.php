<?php
    if(empty($_GET['nilai_R'])) {
        header("Location:l_lingkaran.php");
    } else {
        $r = $_GET['nilai_R'];

        setcookie('nilai_R',$r);
        header("Location:llingkaran_hasil.php");
    }
?>