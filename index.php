<!DOCTYPE html>
<html>
<head>

<?php
$servername = "localhost";
$user = "root";
$password = "gent04041973";
$databank = "classicmodels";


$connectie=mysqli_connect($servername,$user,$password,$databank);


$query=$connectie->query("SELECT * FROM employees;");
$resultaat=$query->fetch_all();

?>

<title>Tawfik-php</title>

</head>
<body>

<h1>Employees</h1>

<table>
<thead>
<tr>

<th>Lastname</th>
<th>Firstname</th>
<th>Email</th>

</tr>
</thead>
<tbody>
<?php
foreach ($resultaat as $row){ ?>
<tr>
<td><?php echo $row[1] ?></td>
<td><?php echo $row[2] ?></td>
<td><?php echo $row[4] ?></td>
</tr>
<?php } ?>
</tbody>
</table>



</body>
</html>
