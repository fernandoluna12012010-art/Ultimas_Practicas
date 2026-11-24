<!DOCTYPE html>
<html>
<head>
	<title>Matriz</title>
</head>
<body>

<?php
echo"<h2>Suma de matrices (3x3)</h2>";
echo"<style>
table{border-collapse:collapse;margin-bottom:20px;}
td{border:1px solid #000;padding:8px 14px; text-align:center;}
</style>";
$MatrizA=[];
$MatrizB=[];
$MatrizC=[];

$ValA=100;
$ValB=500;

for ($i=0; $i <3 ; $i++) { 
	for ($j=0; $j <3 ; $j++) { 
		$MatrizA[$i][$j]=$ValA;
		$MatrizB[$i][$j]=$ValB;
		$MatrizC[$i][$j]=$MatrizA[$i][$j]+$MatrizB[$i][$j];
		$ValA+=10;
		$ValB+=20;

	}
}

echo "<h3> MatrizA </h3>";
echo "<table>";
for ($i=0; $i <3 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j <3 ; $j++) { 
		echo "<td>".$MatrizA[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "<h3> MatrizB </h3>";
echo "<table>";
for ($i=0; $i <3 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j <3 ; $j++) { 
		echo "<td>".$MatrizB[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "<h3> MatrizC </h3>";
echo "<table>";
for ($i=0; $i <3 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j <3 ; $j++) { 
		echo "<td>".$MatrizC[$i][$j]."</td>";
	}
	echo "</tr>";
}
?>
</body>
</html>