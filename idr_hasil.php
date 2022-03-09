<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Pythagoras</title>
    <style>
        body {
            color: white;
            font-family: sans-serif;
            
            width: 50%;
            padding: 40px 65px;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5.8px);
            -webkit-backdrop-filter: blur(5.8px);
            border: 1px solid rgba(255, 255, 255, 0.27);
            margin: auto;
            margin-top: 125px;
            background-image: url(Assets/bg-rupiah.jpg);
            background-size:cover;
        }

        .konten {
            display: block;
            text-align: center;
        }

        .konten h1 {
            margin-bottom: 50px;
        }

        .calculator {
            text-align: left;
        }

        .button-hitung {
            color: black;
            text-decoration: none;
            font-weight: bold;
            text-transform:uppercase;
            background-color: white;
            border-radius: 6px;
            padding: 10px 100px;
            margin-bottom: 30px;
            margin-top: 20px;
            transition: 0.5s;
        }

        .button {
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 9pt;
            text-transform:uppercase;
            background-color: white;
            border-radius: 6px;
            padding: 5px 60px;
            margin-bottom: 30px;
            margin-top: 10px;
            transition: 0.5s;
        }

        .kiri {
            width: 550px;
            padding-bottom: 10px;
        }

        p {
            background-color: black;
            margin: 0;
            display: inline;
            padding: 2px 5px;
        }

        #hasil {
            font-size: 20pt;
        }
    </style>
</head>
<?php
    $idr = $_COOKIE['nilai_IDR'];

    $req_url = "https://v6.exchangerate-api.com/v6/83f54bd7660e6210fec2b2c7/latest/IDR";
    $response_json = file_get_contents($req_url);

    if(false != $response_json) {
        try {
            $response = json_decode($response_json);

            if('success' === $response->result) {
                $awal = $idr;
                $usd2 = round(($awal * $response->conversion_rates->USD),2);
            }
        }
        catch(Exception $e){
            
        }
    }
?>
<body>
    <div class="konten">
        <h1>Konversi Mata Uang Rupiah ke Dollar</h1>

        <div class="calculator">
                <table>
                    <tr>
                        <td> <p id="hasil"> Rp. <?php echo $idr; ?> = $ <?php echo $usd2 ?> </p> </td>
                        <td rowspan="6"><img src="Assets/rupiah.jpg" height="218" alt="Rupiah"></td>
                    </tr>
                    <tr>
                        <td class="kiri"><a href="idr_usd.php" class="button-hitung">Hitung Kembali</a></td>
                    </tr>
                </table>

                <a href="index.php" class="button">Kembali ke menu utama</a>
        </div>
    </div>
</body>


</html>