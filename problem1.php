<html>
<head>
</head>
<body>  
<?php

// define variables and set to empty values

//$no_server = $fnumber = $Snumber = $Tnumber = $fourthnumber = $fifthnumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$no_server = $_POST["no_server"];
	$temp =	$_POST["no_server"];
	
    $fnumber = $_POST["fnumber"];
  
    $Snumber = $_POST["Snumber"];
  
    $Tnumber = $_POST["Tnumber"];
  
    $fourthnumber = $_POST["fourthnumber"];
  
    $fifthnumber = $_POST["fifthnumber"];
}

?>

<?php

$arr = array($fnumber,$Snumber,$Tnumber,$fourthnumber,$fifthnumber);

	for($i=0;$i<5;$i++)
	{
		if($arr[$i] < 50)
			{
				$no_server=(int)$no_server/2;
			}
        else
			{
			   $no_server= ($no_server*2) + 1;
			
			}				
	}
echo "<br><br><b>INPUT :</b><br>" ;	
echo $temp."<br>" ;
echo $fnumber."<br>" ;
echo $fnumber."<br>" ;
echo $Snumber."<br>" ;
echo $Tnumber."<br>" ;
echo $fourthnumber."<br>" ; 
echo $fifthnumber."<br>" ;

echo "<br><br><b>OUTPUT : Number of Server Running" ;
echo "<br>".(int)$no_server."<br><br>" ;

?>


