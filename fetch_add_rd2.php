<?php

//fetch.php
$connect = mysqli_connect("localhost", "root", "phrwe.xyz2021", "phr_infosys");
$output = '';


$query = "SELECT * FROM per_user_uploads WHERE app_status='Manpool' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h5 align="center">Recent Manpool entry:</h5>
<table class="table table-bordered table-striped">
 <tr>
      <th width="8%">RD Status</th>
      <th width="8%">First Name</th>
      <th width="8%">Middle Name</th>
      <th width="8%">Last Name</th>
      <th width="8%">Jobtitle</th>
      <th width="8%">Jobtitle 2</th>
      <th width="2%">Contact</th>
      <th width="2%">Contact 2</th>
      <th width="8%">Address</th>
      <th width="8%">Email</th>
      <th width="8%">Passport</th>
      <th width="8%">Total Work Exp.</th>
      <th width="8%">Eligibility</th>
      <th width="8%">Skype ID</th>
      <th width="8%">Date Encoded</th>
       <th width="8%">Recruiter</th>

 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["app_status"].'</td>
  <td>'.$row["jobseeker_fname"].'</td>
  <td>'.$row["jobseeker_mname"].'</td>
  <td>'.$row["jobseeker_lname"].'</td>
  <td>'.$row["jobtitle"].'</td>
  <td>'.$row["jobtitle2"].'</td>
  <td>'.$row["contact"].'</td>
  <td>'.$row["contact2"].'</td>
  <td>'.$row["address"].'</td>
  <td>'.$row["email"].'</td>
  <td>'.$row["passport"].'</td>
  <td>'.$row["exp_years"].'</td>
  <td>'.$row["eligibility"].'</td>
  <td>'.$row["skype_id"].'</td>
  <td>'.$row["date_encoded"].'</td>
  <td>'.$row["recruiter"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
