<?php
$servername="localhost";
$dbname="login1";
$conn=new mysqli($servername,"root","",$dbname);
if($conn->connect_error)
{
    die("connection failed:".$connect->connect_error);
}
else
{
    extract($_POST);
}
if(isset($_POST['submit']))
{
    $terms=$_POST['terms1'];
    $t1="";
    foreach($terms as $t)
    {
        $t1.=$t.",";
    }
}
$name=$_POST["name"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$subject=$_POST["subject"];date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$d=date('Y-m-d');
$t= date('H:i:s');
$sql="INSERT INTO feedback(name, number, city, subject, date, time)VALUES('$name','$phone','$city','$subject','$d','$t')";
if($conn->query($sql) == TRUE)
{
    header('Location:afterlogin.html');
    echo "success";
    exit();
}
else{
    header("Location:feedback.php?msg=failed");
    exit();
}
$conn->close();
?>