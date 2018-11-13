<?php 
$con = @mysqli_connect('localhost', 'root', '', 'comentarios');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
} 

$Come = $_POST['coment'];


ini_set('date.timezone', 'America/Santiago');

$Tim=date('Y-m-d H:i:s', time());

$sql    = "INSERT INTO `comen` (`com`, `date`) VALUES ('$Come', '$Tim');";
$sql    = "INSERT INTO `comen` (`name`, `com`, `date`) VALUES ('', '$Come', '$Tim');";
$query  = mysqli_query($con, $sql);
header('Location: welcome.blade.php');
?>