<?php  
$con = @mysqli_connect('localhost', 'root', '', 'comentarios');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}

$come=$_POST['coment'];

ini_set('date.timezone','America/Santiago');
$time=date('Y-m-d H:i:s',time());

if (empty($come)) 
    {
        header('Location: welcome.blade.php');
    }
    else{
        $sql    = "INSERT INTO `comen` (`name`, `com`, `date`) VALUES ('', '$come', '$time');";
		$query  = mysqli_query($con, $sql);

		header('Location: welcome.blade.php');
    }
?>