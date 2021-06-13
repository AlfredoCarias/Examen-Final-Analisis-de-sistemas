<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="wallet.css">
    <title>Paquetes</title>
</head>
<body>
<?php require_once("menu.php");?>

<div class="container">
<div class="amount-box text-center"><br>
			<img src="../images/money.png" alt="wallet">
		</div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basico</h1>
        </div>
        <div class="panel-body">
          <p><strong>10</strong> Tokens</p>
        </div>
        <div class="panel-footer">
          <h3>Q50</h3>
          <button class="btn btn-lg" href="index.php" onclick = "location='compra.php'">Comprar</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Tokens</p>

        </div>
        <div class="panel-footer">
          <h3>Q100</h3>
          <button class="btn btn-lg" href="index.php" onclick = "location='compra.php'">Comprar</button>
        </div>
      </div>
    </div>
   <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>VIP</h1>
        </div>
        <div class="panel-body">
          <p><strong>Sin limites</strong></p>

        </div>
        <div class="panel-footer">
          <h3>Q150</h3>
          <button class="btn btn-lg" href="index.php" onclick = "location='compra.php'">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>