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
$email=$_POST["email"];
$phone=$_POST["phone"];
$username=$_POST["usrnm"];
$npass=$_POST["pswd"];
$cpass=$_POST["pswd1"];
$query ="SELECT * FROM signup WHERE username='" . $username . "' or email='" . $email . "' or phone='" . $phone . "' ";
if(!$result = mysqli_query($conn, $query))
	{
		exit(mysqli_error($conn));
	}

	if(mysqli_num_rows($result) > 0)
	{
        // username is already exist 
       // echo '<script type="text/javascript">';
       // echo ' alert("Already in use") ';//<div style="color: red;"> <b>'.$username.' or '.$email.'</b> is already in use! </div>';
       // echo '</script>';

       $message = "Username or Email or Phone Number already in use";
       echo "<script type='text/javascript'>alert('$message');</script>";
       
	}
	else
	{
		// username is avaialable to use.
		//echo '<div style="color: green;"> <b>'.$username.'</b> is avaialable! </div>';
        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
        $a= date('Y-m-d H:i:s');
        $sql="INSERT INTO signup(name, email, phone, username, newpass, confpass, Date_and_time)VALUES('$name','$email','$phone','$username','$npass','$cpass','$a')";
    
        if($conn->query($sql) == TRUE)
        {
            header('Location:homepage.html');
            echo "success";
            exit();
        }
        else{
            header("Location:signup.php?msg=failed");
            exit();
        }
    }

$conn->close();
?>