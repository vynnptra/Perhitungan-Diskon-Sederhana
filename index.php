<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="   font-family: Verdana, Geneva, Tahoma, sans-serif;"> 

    <?php
        function diskon($totalbelanjaan){
            if ($totalbelanjaan >= 100 && $totalbelanjaan > 0) {
                $diskon = $totalbelanjaan * 0.1;
                $totalakhir = $totalbelanjaan - $diskon;

                echo "<h3> ANDA MENDAPATKAN DISKON 10%</h3>Total belanjaan anda : $" . $totalbelanjaan . "<br>anda mendapat potongan sebesar : $" . $diskon . " <br>anda hanya perlu membayar sebesar : $" . $totalakhir;
            } elseif( $totalbelanjaan < 100 && $totalbelanjaan > 0) {
                echo "<h3> Anda tidak memenuhi syarat diskon </h3>
                total belanjaan : $" . $totalbelanjaan;
            } else {
                echo "Anda belum membeli apapun";
            }
        }

        diskon(1930);
    ?>
</body>
</html>