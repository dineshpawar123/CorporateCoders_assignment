<html>
<head>
</head>
<body>  
<?php

// define variables and set to empty values

$breads = $vadas = $samosa = $vadapav = $samosapav = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$breads = $_POST["breads"];
	$vadas =$_POST["vadas"];
	$samosa = $_POST["samosa"];
	$vadapav = $_POST["vadapav"];
	$samosapav = $_POST["samosapav"];
  }

echo "<br><br><b>INPUT :</b><br>" ;	
echo "Number of breads".$breads."<br>" ;
echo "Number of vadas".$vadas."<br>" ;
echo "Number of samosa".$samosa."<br>" ;
echo "price of vadapav".$vadapav."<br>" ;
echo "price of samosapav".$samosapav."<br>" ;

?>

<?php
//$breadstemp=$breads;
$price = 0;

	while($samosa >=1)
	{
		if($breads >=2)
		{
			$price=$price+15;
			$breads=$breads-2;
		}
		else
		{
			break;
		}
		
		$samosa=$samosa-1;
		
	}
	
	if($breads >= 2)
	{
		while($vadas >=0)
		{
			if($breads>=2)
			{
				$price=$price+10;
				$breads=$breads-2;
			}				
			else
			{
				break;
			}
			$vadas = $vadas - 1;
		}
	}

echo "<br><br><b>After processing:</b><br>" ;	
echo "Number of breads".$breads."<br>" ;
echo "Number of vadas".$vadas."<br>" ;
echo "Number of samosa".$samosa."<br>" ;

echo "<br><br><b>OUTPUT : Maximum profit possible is Rs." ;
echo "<br>".$price."<br><br>" ;

?>


