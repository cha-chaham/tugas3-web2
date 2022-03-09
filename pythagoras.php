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
            background-image: url(Assets/bg-pythagoras.jpg);
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
            font-size: 14pt;
            text-transform:uppercase;
            background-color: white;
            border-radius: 6px;
            padding: 20px 100px;
            margin-bottom: 30px;
            margin-top: 10px;
            transition: 0.5s;
        }

        .kiri {
            width: 550px;
            padding-bottom: 10px;
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
    </style>
</head>
<body>
    <div class="konten">
        <h1>Menghitung Pythagoras</h1>

        <div class="calculator">
            <form action="pythagoras_prc.php" method="GET">
                <table>
                    <tr>
                        <td>Masukan Nilai A</td>
                        <td rowspan="6"><img src="Assets/pythagoras.jpg" alt="Segitiga"></td>
                    </tr>
                    <tr>
                        <td class="kiri"><input type="text" name="nilai_A" size="50"  autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Masukan Nilai B</td>
                    </tr>
                    <tr>
                        <td class="kiri"><input type="text" name="nilai_B" size="50"  autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td class="kiri"><input type="submit" value="Hitung" name="hitung" class="button-hitung"></td>
                    </tr>
                </table>
            </form>

            <a href="index.php" class="button">Kembali ke menu utama</a>
        </div>
    </div>
</body>


</html>