<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h2>You are registered successfully.</h2>
<br/><h2>Click here to <a href='login.php'>Login</a></h2></div>";
        }
    }else{
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
<link rel="shortcut icon" type="image/png" href="asset/Pesona-Gorontalo-Icon.png"/>
</head>
<body>

<div class="form">
<h1 style="margin-left: 90px;">Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required style="margin-left: 30px;"/>
<input type="email" name="email" placeholder="Email" required style="margin-left: 30px;"/>
<input type="password" name="password" placeholder="Password" required style="margin-left: 30px;"/>
<input type="submit" name="submit" value="Register" />
</form>
<h2 style="margin-left: 22px;">Sudah punya akun? <a href='login.php'>Login Di Sini</a></h2>
</div>
<?php } ?>
</body>
</html>

<style>
    body {
     font-family:Arial, Sans-Serif;
     background: #384047;
     font-size: 10px;
     background-image: url('asset/Pulo-Cinta-Header-Background.jpg');
}
.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}

a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     background: #fff;
     padding: 4em 4em 2em;
     max-width: 400px;
     margin: 50px auto 0;
     box-shadow: 0 0 1em #222;
  border-radius: 2px;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color:   #0067ab;
     text-shadow: rgba(231,208,58,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: #222;
     border: 1px solid  #222; 
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
     margin-left: 90px;
}
input[type='submit']:hover {
     background-color: f0df74;
}
</style>