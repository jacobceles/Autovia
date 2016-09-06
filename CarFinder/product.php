<html>
<?php
require_once('inc/db.php');
$f = 0;
$query="SELECT * FROM car WHERE";
if (isset($_GET['price']))
{
	$price=$_GET['price'];
	if($price==3)
	{
	$query=$query. " price < 300000";
	}	
	else if($price==7)
	{
	$query=$query. " price > 300000 AND price < 700000";
	}
	else if($price==10)
	{
	$query=$query. " price > 700000 AND price < 1000000";
	}
	else if($price==11)
	{
	$query=$query. " price > 1000000";
	}
}
$query=$query. " AND";
if (isset($_GET['brand1']))
{
    $a=$_GET['brand1'];
	if($f>0)
	{
		$query=$query." OR brand='$h'";
	}
	else
	{
		$query=$query." brand='$h'";
		$f++;
	}
}
if (isset($_GET['brand2']))
{
	$b=$_GET['brand2'];
	
	if($f>0)
	{
		$query=$query." OR brand='$b'";
	}
	else
	{
		$query=$query." brand='$b'";
		$f++;
	}
}
if (isset($_GET['brand3']))
{
	$c=$_GET['brand3'];
	if($f>0)
	{
		$query=$query." OR brand='$c'";
	}
	else
	{
		$query=$query." brand='$c'";
		$f++;
	}
}
if (isset($_GET['brand4']))
{
	$d=$_GET['brand4'];
	
	if($f>0)
	{
		$query=$query." OR brand='$d'";
		
	}
	else
	{
		$query=$query." brand='$d'";
		$f++;
	}
}
if (isset($_GET['brand5']))
{
    $e=$_GET['brand5'];
	
	if($f>0)
	{
		$query=$query." OR brand='$e'";
	
	}
	else
	{
		$query=$query." brand='$e'";
		$f++;
	}
}
if (isset($_GET['brand6']))
{
	$h=$_GET['brand6'];
	if($f>0)
	{
		$query=$query." OR brand='$h'";
	}
	else
	{
		$query=$query." brand='$h'";
		$f++;
	}
}
if (isset($_GET['brand7']))
{
	$g=$_GET['brand7'];
	
	if($f>0)
	{
		$query=$query." OR brand='$g'";
		
	}
	else
	{
		$query=$query." brand='$g'";
		$f++;
	}
}
if (isset($_GET['brand8']))
{
	$h=$_GET['brand8'];
	
	if($f>0)
	{
		$query=$query." OR brand='$h'";
		
	}
	else
	{
		$query=$query." brand='$h'";
		$f++;
	}
}
if (isset($_GET['fuel']))
{
	$fuel=$_GET['fuel'];
	$query=$query." AND fuel='$fuel'";
}
if (isset($_GET['mile']))
{
	$mile=$_GET['mile'];
}
if (isset($_GET['type']))
{
	$type=$_GET['type'];
	$query=$query." AND type='$type'";
}
echo $query;
$result=mysqli_query($db,$query);
$n=mysqli_num_rows($result);
if($n >=1)
{
	while($i= mysqli_fetch_assoc($result))
	{   
        echo "<img src='".$i['image']."' width='320' height='240'>";
        echo '<h2><a href="car.php?item='.$i['no'].'">'.$i['brand'].'</a></h2>';
		echo '<h3>'.$i['price'].'</h3>';
	    echo "<br>";
	}		
}
else
{
	echo "No Results Found";
}
?>

</html>
