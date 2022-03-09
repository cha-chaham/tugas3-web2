<?php
    if(empty($_GET['nilai_A']) && empty($_GET['nilai_B'])) {
        header("Location:pythagoras.php");
    } else {
        $a = $_GET['nilai_A'];
        $b = $_GET['nilai_B'];

        setcookie('nilai_A',$a);
        setcookie('nilai_B',$b);
        header("Location:pythagoras_hasil.php");
    }
?>