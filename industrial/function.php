<?php
include 'dbfunc.php';


function signup($email, $password){
  $hashpass = password_hash($password, PASSWORD_DEFAULT);

  if(checkExist($email)){
    if(register($email,$hashpass)){
       return 1;
    }else{
      return 2;
    }

  }else{
    return 3;
  }

}

function login($email, $password){
   $loginCheck = login_db($email, $password);
   if($loginCheck){
      return 1;
   }else{
      return 2;
   }
}


function getMemberInfo($email){
  $member = getMemberInfo_db($email);
  return $member;
}

function updateData($lname, $fname, $address, $contact,$username){

  $updateStatus = updateData_db($lname, $fname, $address, $contact, $username);
  return $updateStatus;
}

?>
