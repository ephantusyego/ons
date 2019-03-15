<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php 
extract($_POST);
if(isset($save))
{
$conn=mysqli_connect("localhost","root","","ons");
$q=mysqli_query($conn,"select * from st_login ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No students in that category!!</h2>";
}
else
{
?>

<h2 style="color:#00FFCC">Student list</h2>

<table class="">
	<tr>
	</tr>
	<Tr class="success">
		<th>no.</th>
		<th>id</th>
		<th>Username</th>
		<th>Email</th>
		<th>Adm no</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['email']."</td>";


?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>
</body>
</html>