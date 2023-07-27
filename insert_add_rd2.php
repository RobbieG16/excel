<?php
// Make sure you include the database connection file (conn.php) here
include_once("conn.php");

/*if(!isset($_SESSION)){
    session_start();
  }


if(!isset($_SESSION)){
      session_start();

error_reporting(0);

}
include_once("conn.php");

if(isset($_SESSION['UserLogin'])){

}


if(isset($_POST["jobseeker_fname"]))
{
    
  $tasks = $_POST["task"]; // Assuming "task" is the name of the input field for the tasks in the submitted form.

  $query = '';
  for($count = 0; $count < count($tasks); $count++)  {
$login_user_clean = mysqli_real_escape_string($connect, $login_user[$count]);
$task_clean = mysqli_real_escape_string($connect, $tasks[$count]);
  
  if($task != '' && $task && $login_user != '') {
    $query .= ' INSERT INTO to_do_list(task) VALUES("'.$task_clean.'",  "'.$login_user_clean.'" ); ';
  }
  }
  if($query != '')
  {
  if(mysqli_multi_query($connect, $query)){
    echo 'Item Data Inserted';
  } else {
    echo 'Error';
  }
  } else {
  echo 'All Fields are Required';
  }
}*/


// insert_add_rd2.php



// Check if the request is sent using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the required field is present in the POST data
  if (isset($_POST["jobseeker_fname"])) {
    $jobseeker_fname = $_POST["jobseeker_fname"]; // Assuming "jobseeker_fname" contains an array of jobseeker first names.


    // Validate and sanitize the data (you can perform additional validation as needed)
    foreach ($jobseeker_fname as $index => $fname) {
      $jobseeker_fname[$index] = trim(mysqli_real_escape_string($connection, $fname));
  }

  
    // Assuming you have the $connect variable to the database already defined (using mysqli_connect or PDO)

    // Prepare the insert query
    $query = "INSERT INTO per_user_uploads (jobseeker_fname) VALUES ";

    $values = array();
    foreach ($jobseeker_fname as $fname) {
        $values[] = "('$fname')";
    }

    // Combine all the values into the query
    $query .= implode(", ", $values);

    // Perform the database insertion query using prepared statement
    $stmt = mysqli_prepare($connection, $query);
    if ($stmt) {
      mysqli_stmt_execute($stmt);
      // Data insertion successful
      echo "Data Inserted Successfully";
    } else {
        // Data insertion failed
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // Required field not present in the POST data
    echo "Error: Missing Required Field";
}
} else {
// Invalid request method
echo "Error: Invalid Request Method";
}
?>