<?php 
$user = "mitchcon_clients";  
$password = "YesuBa2020";  
$host = "localhost";  
$dbase = "mitchcon_clients";  
$table = "newsletter";  
 
 
$email= $_POST['email']; 
  
  
// Connection to DBase  
$conn= new mysqli('localhost','mitchcon_clients', 'YesuBa2020', 'newsletter');  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 
 
?>