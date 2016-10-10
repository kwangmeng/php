<?php


if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}


function checkExist($email){
  include 'db.php';
  $sql = "SELECT email from users where email='$email'";
  $result = mysqli_query($conn, $sql);
   $rowcount = mysqli_num_rows($result);
  if($rowcount == 0 ){
    return true;
  }else{
    return false;
  }
}

function register($email, $hashpass){
  include 'db.php';
  $email = mysqli_real_escape_string($conn, $email);
  $date = time();
  $username = "username";
  $fname = "your first name";
  $lname = "your last name";
  $contact = "your phone number";
  $address = "your house address";
  $sql = "INSERT INTO users (email, password, reg_date, role, f_name, l_name, contact, address, username) VALUES ( '$email', '$hashpass', '$date', 'user','$fname','$lname','$contact','$address','$username')";
  $result = mysqli_query($conn, $sql);
  if($result){
    return true;
  }else{
    return false;
  }

}

function login_db($email, $pass){
  include 'db.php';
  $email = mysqli_real_escape_string($conn, $email);
  $sql = "SELECT password FROM users where email='$email'";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_assoc($result);
  if(password_verify($pass, $rows['password'])){
    return true;
  }else{
    return false;
  }



}

function getMemberInfo_db($email){
  include 'db.php';
  $sql = "SELECT * FROM users where email ='$email'";
  $result = mysqli_query($conn, $sql);
  $rows = mysqli_fetch_assoc($result);
  return $rows;
}

function updateData_db($lname, $fname, $address, $contact, $userID){
    include 'db.php';
    $email = $_SESSION["email"];
    $userID = mysqli_real_escape_string($conn, $userID);
    $lname = mysqli_real_escape_string($conn, $lname);
    $fname = mysqli_real_escape_string($conn, $fname);
    $address = mysqli_real_escape_string($conn, $address);
    $contact = mysqli_real_escape_string($conn, $contact);
    $sql = "UPDATE users SET l_name='$lname',f_name='$fname',address='$address',contact='$contact', username='$userID' WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if($result){
      $message = "Profile Updated.";
    }else{
      $message = "Error Occured.";
    }
    return $message;
}


?>
