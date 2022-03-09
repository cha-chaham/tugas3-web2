<?php
    if(empty($_GET['nilai_T']) && empty($_GET['nilai_R'])) {
        header("Location:v_tabung.php");
    } else {
        $t = $_GET['nilai_T'];
        $r = $_GET['nilai_R'];

        setcookie('nilai_T',$t);
        setcookie('nilai_R',$r);
        header("Location:vtabung_hasil.php");
    }
?>