<?php

//we need to have a root account in order for us to access, and change other user's account.
$servername = "localhost"; //the mysql host
$dbname = "mysql";  //we are accessing the mysql table which contain all the details
$dbusername = "root"; //default root account
$dbpassword = ""; // depends the root account has password or not

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
//  echo "success";
}

if(isset($_POST['submit'])){
  if($_POST['username'] == "" || $_POST['password'] == ""){
    echo "<script>alert('Please enter all mandatory fields')</script>";
  }else{
    $userID = mysqli_real_escape_string($conn,$_POST['username']);
    $userPassword = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "UPDATE user SET Password = PASSWORD('$userPassword') WHERE User='$userID'";
    $result = mysqli_query($conn,$sql);
    print_r($result);
    if($result){
      echo "<script>alert('Database password changed successfully');window.location.href='changepass.php';</script>";
    }else{
      echo "<script>alert('Error Occured. Refer to developer.')</script>";
    }
  }

}

if(isset($_POST['submitTest'])){
  if($_POST['username1'] == ""){
    echo "<script>alert('Please enter all mandatory fields')</script>";
  }else{

    $servername1 = "localhost"; //the mysql host
    $dbname1 = "mysql";  //we are accessing the mysql table which contain all the details or database name
    $dbusername1 = $_POST['username1']; //default root account
    $dbpassword1 = $_POST['password1']; // depends the root account has password or not
    $conn1 = mysqli_connect($servername1, $dbusername1, $dbpassword1, $dbname1);
    if (mysqli_connect_errno())
    {
    echo "<script> alert('Failed to connect to MySQL');</script>";
  }else{
    echo "<script> alert('Success to connect to MySQL');</script>";
  }



  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Change Database Password</title>

<style type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;

}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
</style>
</head>
<body>
  <center><p>List of mysql database users</p></center>
  <?php
  $sql1 = "SELECT User FROM user";
  $finale = mysqli_query($conn,$sql1);
  $resultArray = array();

  while($row = mysqli_fetch_assoc($finale)){
    $resultArray[] = $row;
  }
  $number = count($resultArray);
  for($x=0;$x<$number;$x++){
    echo "<center>";
    echo "$x "+1;
    echo '.';
    echo "    ";
    print_r($resultArray[$x]['User']);
    echo "</center><br>";
  }
  ?>
  <div class="form-style-5">
  <form action="#" method="post">
  <fieldset>
  <legend>Change Database Password</legend>
  <input type="text" name="username" placeholder="Database Username">
  <input type="text" name="password" placeholder="Database Password">


  </fieldset>

  <input type="submit" value="Apply Now" name="submit"/>
  </form>
  </div>

  <div class="form-style-5">
  <form action="#" method="post">
  <fieldset>
  <legend>Test Database Connection</legend>
  <input type="text" name="username1" placeholder="Database Username">
  <input type="text" name="password1" placeholder="Database Password">


  </fieldset>

  <input type="submit" value="Apply Now" name="submitTest"/>
  </form>
  </div>
</body>
</html>
