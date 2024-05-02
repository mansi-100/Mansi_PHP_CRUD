<?php
$con=mysqli_connect("localhost","id20526708_mansi","Mansi@100..","id20526708_android_emp");
if($con)
{
    echo "connected";
}

$nm=$_POST['name'];
$em=$_POST['email'];
$pas=$_POST['password'];

$sql="insert into emp (name,email,password) values('$nm','$em','$pas')";
if(mysqli_query($con,$sql))
{
   echo "data inserted";
}
else
{
    echo "failed";
}
mysqli_close($con);

?>