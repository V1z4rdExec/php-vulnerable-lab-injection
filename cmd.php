<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
    display: flex;
    justify-content: center; 
    align-items: center;     
    height: 100vh;           
    margin: 0;
    font-family: Arial;
}
.container {
    text-align: center;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Painel de Status de Conectividade</h2>

<form method="GET">
  <input type="text" name="ip" placeholder="Digite um IP">
  <button type="submit">Ping</button>
</form>
</body>
</html>
<pre>
<?php
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    system("ping -c 1 " . $ip);
}
?>