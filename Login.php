<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ffffff 50%, #8a2be2 50%);
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #000000;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 25px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            border: none;
            border-radius: 25px;
            background-color: #c084fc;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: #b06dfc;
        }

        .signup-link {
            color: #1e90ff;
            text-decoration: none;
            font-size: 14px;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="connect.php" method="POST">
            <input type="text" class="input-field" name="email" placeholder="Email Address" required>
            <input type="password" class="input-field" name="password" placeholder="Password" required>
            <input type="submit" class="btn" value="Login">
        </form>
        <a href="register.php" class="signup-link">Don't have an account? Sign Up</a>
    </div>
</body>
</html>

<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e0e0ff;
            font-family: Arial, sans-serif;
        }

        .signup-container {
            background-color: #7d7dc1;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .signup-container h2 {
            color: white;
            margin-bottom: 20px;
        }

        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .signup-container input[type="checkbox"] {
            margin-right: 5px;
        }

        .signup-container label {
            color: white;
            font-size: 12px;
        }

        .signup-container button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 20px;
            background-color: #a0a0a0;
            color: #7d7dc1;
            font-size: 16px;
            cursor: pointer; /* Enable the button */
        }

        .signup-container p {
            color: white;
            font-size: 12px;
            margin-top: 20px;
        }

        .signup-container a {
            color: #d0d0ff;
            text-decoration: none;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="connect.php" method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <div>
                <input type="checkbox" required>
                <label>I accept the Terms of Use & Privacy Policy</label>
            </div>
            <input type="submit" name="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
        <p>Copyright © Hamza Riaz029</p>
    </div>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$showalert = false;
include 'partials/_dbconnect.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists=false;
if(($password == $cpassword) && $exists==false)
{
$sql = "INSERT INTO 'form' VALUES ('first_name','last_name','email','password','cpassword')";
$result = mysqli_query($conn, $sql);
if($result)
{
    $showalert=true   ;

}

}
}

?>

<?php
//$servername = "localhost";
//$username = "root";
//$password = ""; 
//$dbname = "storage"; 

// Create connection
$conn =new mysqli ("localhost", "root", "", "storage");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}//else{  
 //   echo"Connecton Established";
//}
?>
