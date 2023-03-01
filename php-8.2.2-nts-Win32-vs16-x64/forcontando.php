<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Fazer for até: <input type="rumber" name="number" /><br />
        <input type="submit" name="submit" value="Calcular" />
</form>
<?php
if (isset($_GET["number"])) {
    $qtdfors = $_GET["number"];
    for($i = 1; $i <= $qtdfors; $i ++){
     if($i % 2 == 0) {
         echo 'Par ';
     }
     if($i % 2 == 1) {
         echo 'Impar ';
     }
       echo ' valor é '.$i. '<br />' . PHP_EOL;
    }

}
?>
</body>
</html>