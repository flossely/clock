<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Clocks</title>
<link rel="shortcut icon" href="sys.clock.png?rev=<?=time();?>" type="image/x-icon">
<link href="system.css?rev=<?=time();?>" rel="stylesheet">
<?php include 'base.incl.php'; ?>
<?php include 'time.incl.php'; ?>
</head>
<body onload="display_ct();">
<p align=center><span class='large' id='ct'></span></p>
<p align=center><canvas id="canvas" width="380%" height="380%" style="background-color:#333"></canvas></p>
<script src="clock.js"></script>
</body>
</html>
