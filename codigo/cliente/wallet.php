<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Billetera Electronica</title>
	<link rel="stylesheet" href="wallet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once("menu.php");?>

<div class="container" align="center" style="padding-top: 40px;">

		<div class="amount-box text-center"><br>
<div class="estilo_div">
			<img src="../images/wallet.png" alt="wallet">
			<p class="amount">Tokens</p>
			<p class="amount">10</p>
			</div>
			</div>
        <div align="center">
			<button type="submit" class="btn btn-primary" href="index.php" onclick = "location='qr.php'">Escanear</button><br><br>
            <button type="submit" class="btn btn-primary" href="index.php" onclick = "location='pack.php'">Comprar Tokens</button>
            
			</div>
	
			<!--<div class="txn-history">
				<p class="test"><b>Historial de Juegos</b></p>
				<p class="txn-list">Gusanito<span class="debit-amount"></span></p>

				<p class="txn-list">Montaña Rusa<span class="debit-amount"></span></p>

				<p class="txn-list">Zipper<span class="credit-amount"></span></p>

				<p class="txn-list">Rueda de la fortuna<span class="credit-amount"></span></p>
			</div>-->

			
				</div></div>
</body>
</html>