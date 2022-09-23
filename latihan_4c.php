<?php
$nama = ["Indonesia : D.K.I. Jakarta","Singapura : Singapura","malaysia: Kuala Lumpur","Brunei : Bandar Seri Begawan","Thailand : Bangkok","Laos : Vientine","Filipina : Manila","Myanmar : Naypyidaw"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>looping for array</title>
    </head>
    <body>
    <p><font size="5"><strong>Daftar Negara dan Ibukota :</Strong></font></p> 
        <?php
            foreach ($nama as $absen) {
                echo "<li>$absen</li>";
            }
        ?>
    </body>
</html>