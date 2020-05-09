<?php



$day = $_POST['day'];
$date = $_POST['date'];
$done=$_POST['done'];


if($done=="Type Here..!")
{
    
    header('location:index.php?msg=err');

    exit();

}
else
{



require('db.php');

$sql_qry="INSERT INTO daily (`day`,`date`,`done`) VALUES ('$day','$date','$done')";
$run_qry=mysqli_query($con,$sql_qry);

header('location:index.php?msg=suc');
}
?>