<html>
<?php
require_once('inc/db.php');
$no = $_GET['item'];
$r=mysqli_query($db,"SELECT * FROM car WHERE no=".$no."") or die(mysql_error()); 
$q=mysqli_fetch_array($r);
echo "<title>".$q['name']."</title>";
?>
<body>
<?php
echo "<img src='".$q['image']."' width='640' height='480'>";
echo '<h3>'.$q['brand'].'</h3>';
echo '<h2>'.$q['price'].'</h2>';
?>
<table border="1" cellpadding="10">
<tr>
	<th>Body Type</th>
	<td><?php echo $q['type']; ?></td>
</tr>
<tr>
	<th>Fuel Type</th>
	<td><?php echo $q['fuel']; ?></td>
</tr>	
<tr>
	<th>Description</th>
	<td><?php echo $q['descr'] ;?></td>
</tr>
<tr>
	<th></th>
	<td><?php ?></td>
</tr>
<tr>
	<th></th>
	<td><?php ?></td>
</tr>
<tr>
	<th></th>
	<td><?php ?></td>
</tr>
<tr>
	<th></th>
	<td><?php ?></td>
</tr>
</table>

</html>