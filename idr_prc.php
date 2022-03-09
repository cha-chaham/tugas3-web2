<?php
    if(empty($_GET['nilai_IDR'])) {
        header("Location:idr_usd.php");
    } else {
        $idr = $_GET['nilai_IDR'];

        setcookie('nilai_IDR',$idr);
        header("Location:idr_hasil.php");
    }
?>