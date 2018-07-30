<?php


function getUpderType($userid){
  include('db-connect.php');
  $query = "SELECT type FROM `b2b_users` WHERE id = '".$userid."'";
  $result = mysqli_query($con,$query);
  $num = @mysqli_num_rows ($result);
  if ($num==1) 
  {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $usertype=$row['type'];
    return $usertype;
  } 
  else {
    return 0;
  }
}

function adminLogin($username,$password)
{
	include('db-connect.php');
  $query = "SELECT * FROM b2b_users WHERE username='".$username."' AND pwd='".$password."'";
  $result = mysqli_query($con,$query);
  $num = @mysqli_num_rows ($result);
  if ($num==1) 
  {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $id=$row['id'];
    return $id;
  } 
  else {
    return 0;
  }
}

function checkUsername($username){
  include('db-connect.php');
  $query = "SELECT id FROM `b2b_users` WHERE username = '".$username."'";
  $result = mysqli_query($con,$query);
  $num = @mysqli_num_rows ($result);
  if ($num) 
  {
    return false;
  } 
  else {
    return true;
  }
}

function getSalesmanCount()
{
  include('db-connect.php');
  $query = "SELECT count(1) id FROM b2b_users WHERE isdeleted = 'N' AND isblocked = 'N' AND type = 'user'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $num = $row['id'];
  return $num;
}



function getItemCount(){
  include('db-connect.php');
  $query = "SELECT count(1) id FROM b2b_item";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $num = $row['id'];
  return $num;
}



function addSalesman($name,$address,$email,$phone)
{
  $today = date("y.m.d");
  include('db-connect.php');
  $query = "INSERT INTO `users` (`id`, `name`, `address`,`email`, `mobile`, `created_on`, `isdeleted`) VALUES (NULL, '".$name."','".$address."', '".$email."', '".$phone."','".$today."', 'N');";

  if (mysqli_query($con,$query)) {
    return true;
  } 
  else {
    return false;
  }
}

function getSalesmans()
{ 
  include ("db-connect.php");
  $query = "SELECT * FROM `users` WHERE isdeleted = 'N'";
  $result = mysqli_query($con,$query);
  $values = array();
  $i=0;
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
  {
    $values[] = $row;
  }
  return $values;
}


function getSalesmansDetails($id){
  include ("db-connect.php");
  $query = "SELECT * FROM `users` WHERE id = '".$id."'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  return $row;
}


function editSalesmanDetails($id,$name,$address,$email,$phone)
{
  include ("db-connect.php");
  $query = "UPDATE users SET name = '".$name."',address = '".$address."', email = '".$email."', mobile = '".$phone."' WHERE id = '".$id."'";

  if (mysqli_query($con,$query)) {
    return true;
  } 
  else {
    return false;
  }
}


function deleteSalesman($id)
{
  include ("db-connect.php");
  $query = "UPDATE `users` SET `isdeleted` = 'Y' WHERE `users`.`id` = '".$id."';";
  if (mysqli_query($con,$query)) {
    return true;
  } 
  else {
    return false;
  }
}



?>