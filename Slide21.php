<html>
    <head>
        <title>Contoh Script HTML</title>
    </head>
    <body>
        <?php
            $nilai = 85;
            $nama = "Amir";
            if ($nilai >= 80){
                echo $nama. " Predikat A";
            }
            else if ($nilai >= 70){
                echo $nama. " Predikat B";
            }
            else if ($nilai >= 60){
                echo $nama. " Predikat C";
            }
            else{
                echo $nama. " Predikat D";
            }
        ?>
    </body>
</html>