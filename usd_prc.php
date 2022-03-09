<?php
    if(empty($_GET['nilai_USD'])) {
        header("Location:usd_idr.php");
    } else {
        $usd = $_GET['nilai_USD'];

        setcookie('nilai_USD',$usd);
        header("Location:usd_hasil.php");
    }
?>