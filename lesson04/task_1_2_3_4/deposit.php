<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<?php include "js/homework-2.2.html"; ?>
</head>
<body>

<div class="content">
	<div class="header">	
        <?php include "menu.php"; ?>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Депозит</h1>

			<div class="box">
                <div id="deposit" style="padding: 5px; color: green"></div>
				<a href="#" onClick="deposit();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

</div>
<div class="footer">
	<?php include "footer.php"; ?>
<div>

</body>
</html>