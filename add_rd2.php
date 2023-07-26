<?php
 error_reporting(0);

?>


<!DOCTYPE html>
<html>
 <head>
  <title>PHR_INFOSYS</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>



<style>



body {
 background: #011B31;
  font: 12px Tahoma, Verdana, sans-serif;
  font-size: 12px; 
  color: gray;
  /*background-image: url("background.jpg");*/
  min-height: 380px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  margin: 0;
  padding: 0;
  height: 100

}



thead {

  margin-top: 40px;

}


table {

margin: 0 auto;
margin-top: 15px;
padding-top: 0px;
color: white;   
border-spacing: 0px;
background-color: #2b220f;

}


table thead {
color: green;

}

.table2 {
background-color: #1b256f;

}

#table tr:nth-child(even){background-color: #064425;}
#table tr:nth-child(odd){background-color: #064425;}


.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #064425;}

 a {
      text-decoration: none;
      }
      a:link {
      color: white;
      /*border-bottom: 1px solid #ff0000;*/
      }
      a:visited {
      color: white;
      /*border-bottom: 1px solid #b3b3b3;*/
      }
      a:hover {
      color: blue;
      /*border-bottom: 1px solid #000099;*/
      }
p{
  color:gold;
}

section {

      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url(background.jpg);
      background-attachment: fixed;
      height: 30vh;


}

section .box{
      
      position: relative;
      max-width: 900px;
      padding:120px;
      box-shadow: 0 5px 15px rgba(0,0,0, .5);
      overflow: hidden;
      color: #b4c0e2;
}



#cssmenu ul {
  background: #8c070d; //red
}




.backlink2{
color: gray;
text-decoration: none;
}



div.agency {
  position: relative;
  top: 20px;
  right: 0;
  text-align: center;
  width: 1350px;
  height: 50px;
  border: 3px solid #DBD1D1;

}

.example1 {
 height: 35px;  
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 1.5em;
 color: white;
 position: absolute;
 width: 70%;
 height: 80%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);    
 transform:translateX(100%);
 /* Apply animation to this element */  
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%);       
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>



 <body>


  <div class="example1"><h3>PHR-INFORMATION SYSTEM V1.0</h3></div>

<br>
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This page is an alternative to "Add Worker". You may entry data here just like you do in MS Excel.&nbsp;&nbsp;RD status for the worker is set to Manpool by default.&nbsp; Uploading of CV is not possible here.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click the plus sign(+) located at the right corner to add more rows. &nbsp;&nbsp; Note: &nbsp;&nbsp;All fields requires entry by default, so just entry arbitrary words for successful encoding, and just update at Manpool tab later.</p>




  <br /><br />
  <div class="container">
   <br />
  
   <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="8%">First Name</th>
      <th width="8%">Middle Name</th>
      <th width="8%">Last Name</th>
      <th width="8%">Jobtitle</th>
      <th width="8%">Jobtitle 2</th>
      <th width="8%">Contact</th>
      <th width="8%">Contact 2</th>
      <th width="8%">Address</th>
      <th width="8%">Email</th>
      <th width="8%">Passport</th>
      <th width="8%">Total Work Exp.</th>
      <th width="8%">Eligibility</th>
      <th width="8%">Skype ID</th>
      <th width="8%">Encoder</th>
      
      <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="jobseeker_fname"></td>
      <td contenteditable="true" class="jobseeker_mname"></td>
      <td contenteditable="true" class="jobseeker_lname"></td>
      <td contenteditable="true" class="jobtitle"></td>
      <td contenteditable="true" class="jobtitle2"></td>
      <td contenteditable="true" class="contact"></td>
      <td contenteditable="true" class="contact2"></td>
      <td contenteditable="true" class="address"></td>
      <td contenteditable="true" class="email"></td>
      <td contenteditable="true" class="passport"></td>
      <td contenteditable="true" class="exp_years"></td>
      <td contenteditable="true" class="eligibility"></td>
      <td contenteditable="true" class="skype_id"></td>
      <td contenteditable="true" class="recruiter"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
  <br><br><br><br><br><br><br><br>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='jobseeker_fname'></td>";
   html_code += "<td contenteditable='true' class='jobseeker_mname'></td>";
   html_code += "<td contenteditable='true' class='jobseeker_lname'></td>";
   html_code += "<td contenteditable='true' class='jobtitle'></td>";
   html_code += "<td contenteditable='true' class='jobtitle2'></td>";
   html_code += "<td contenteditable='true' class='contact' ></td>";
   html_code += "<td contenteditable='true' class='contact2'></td>";
   html_code += "<td contenteditable='true' class='address'></td>";
   html_code += "<td contenteditable='true' class='email'></td>";
   html_code += "<td contenteditable='true' class='passport'></td>";
   html_code += "<td contenteditable='true' class='exp_years'></td>";
   html_code += "<td contenteditable='true' class='eligibility'></td>";
   html_code += "<td contenteditable='true' class='skype_id'></td>";
   html_code += "<td contenteditable='true' class='recruiter'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var jobseeker_fname = [];
  var jobseeker_mname = [];
  var jobseeker_lname = [];
  var jobtitle = [];
  var jobtitle2 = [];
  var contact = [];
  var contact2 = [];
  var address = [];
  var email = [];
  var passport = [];
  var exp_years = [];
  var eligibility = [];
  var skype_id = [];
  var recruiter = [];
  $('.jobseeker_fname').each(function(){
   jobseeker_fname.push($(this).text());
  });
  $('.jobseeker_mname').each(function(){
   jobseeker_mname.push($(this).text());
  });
  $('.jobseeker_lname').each(function(){
   jobseeker_lname.push($(this).text());
  });
  $('.jobtitle').each(function(){
   jobtitle.push($(this).text());
  });
  $('.jobtitle2').each(function(){
   jobtitle2.push($(this).text());
  });
  $('.contact').each(function(){
   contact.push($(this).text());
  });
  $('.contact2').each(function(){
   contact2.push($(this).text());
  });
  $('.address').each(function(){
   address.push($(this).text());
  });
  $('.email').each(function(){
   email.push($(this).text());
  });
  $('.passport').each(function(){
   passport.push($(this).text());
  });
  $('.exp_years').each(function(){
   exp_years.push($(this).text());
  });
  $('.eligibility').each(function(){
   eligibility.push($(this).text());
  });
  $('.skype_id').each(function(){
   skype_id.push($(this).text());
  });
   $('.recruiter').each(function(){
   recruiter.push($(this).text());
  });
  $.ajax({
   url:"insert_add_rd2.php",
   method:"POST",
   data:{jobseeker_fname:jobseeker_fname, jobseeker_mname:jobseeker_mname, jobseeker_lname:jobseeker_lname, jobtitle:jobtitle, jobtitle2:jobtitle2, contact:contact, contact2:contact2, address:address, email:email, passport:passport, exp_years:exp_years, eligibility:eligibility, skype_id:skype_id, recruiter:recruiter},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch_add_rd2.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
});
</script>
