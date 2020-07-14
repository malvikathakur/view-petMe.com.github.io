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
/*{
    $terms=$_POST['terms1'];
    $t1="";
    foreach($terms as $t)
    {
        $t1.=$t.",";
    }
}*/
$name=$_POST["usrnm"];
$pass=$_POST["pswd"];

$query ="SELECT * FROM signup WHERE username='" . $name . "' and newpass='" . $pass . "' ";
if(!$result = mysqli_query($conn, $query))
	{
		exit(mysqli_error($conn));
	}

	if(!mysqli_num_rows($result) == 1)
	{
        // username is already exist 
       // echo '<script type="text/javascript">';
       // echo ' alert("Already in use") ';//<div style="color: red;"> <b>'.$username.' or '.$email.'</b> is already in use! </div>';
       // echo '</script>';

       $message = "Incorrect username or Password";
       echo "<script type='text/javascript'>alert('$message');</script>";
       
	}
	else
	{
        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
        $t= date('H:i:s');
        $d=date('Y-m-d');
		// username is avaialable to use.
		//echo '<div style="color: green;"> <b>'.$username.'</b> is avaialable! </div>';
        $sql="INSERT INTO log(Username, Password, date, time)VALUES('$name','$pass','$d','$t')";



        if($conn->query($sql) == TRUE)
        {
            header('Location:afterlogin.html');
            echo "success";
            exit();
        }
        else{
            header("Location:login.php?msg=failed");
            exit();
        }
    }
$conn->close();
?>


