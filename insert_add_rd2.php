<?php
include_once("connections/connection.php");
include_once("conn.php");
if(!isset($_SESSION))
  {
   session_start();
  }


if(!isset($_SESSION)){
     session_start();

error_reporting(0);

}


if(isset($_SESSION['UserLogin'])){

}

include_once("connections/connection.php");
$con = connection();



//insert.php
$connect = mysqli_connect("localhost", "root", "", "phr_infosys");



if(isset($_POST["jobseeker_fname"]))
{
    
 $task = 'task';
 $query = '';
 for($count = 0; $count<count($task); $count++)
 {
$login_user_clean = mysqli_real_escape_string($connect, $login_user[$count]);
$task = mysqli_real_escape_string($connect, $task[$count]);
  
  if($task != '' && $task && $login_user != '')
  {
   $query .= '
   INSERT INTO to_do_list(task) 
   VALUES("'.$task_clean.'",  "'.$login_user.'" ); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
