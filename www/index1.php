<?php

error_reporting(0);
include("dbconnect1.php");
$note=$_REQUEST['note'];

if (isset($_REQUEST['name']))
{
$name=$_REQUEST['name'];
}


// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")  
{
  if (empty($_POST["name"]))
	  {
    $nameErr = "Name is required";
  }
  else {
    $name = test_input($_POST["name"]);
  }
}
  
  function test_input($data)  {
	  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}

 
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
	
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title id="rtu"> rtu.ac.in</title>
	
	
	
</head>

<body>            
        <!--header-->
        
        <div id="header">
            
            <div id="imag">
                
       <a href="http://www.rtu.ac.in/RTU/" target="_blank" alt="RTU"> <img src="\wamp64\www\Untitled.png" width=100px height=100px/></a>
            </div>
            
           <div id="logo" >
       <a href="#" target="_self" alt="Home" >
           <h2 class="dee">Research Website<br/>
        Rajasthan Technical University, Kota</h2>
           </a>
               </div>
          </div>  

    
    
	<div class="formo">
        
  <form action="user_process.php" method="post" enctype="multipart/form-data">
  
  
  
  


      
      
  <h2>Personal details</h2>
      
      <!--name -->
    <label for="name">Name:</label>
      
    <input type="text" id="name" name="name"  placeholder="Your name.." required="required"> <br>
      
      
        <!--father -->
	 <label for="fname">Father's Name:</label>
      
    <input type="text" id="fname" name="fname" placeholder="Your Father's Name.." required="required"><br>
      
        <!-- mother-->
	<label for="mname">Mother's Name:</label>
    <input type="text" id="mname" name="mname" placeholder="Your Mother's Name.." required="required"><br>
      
        <!-- enrollment no.-->
	<label for="enrollno">Enrollment No.(if any):</label>
    <input type="text" id="enrollno" name="enrollno"><br>

      
        <!-- gender-->
      <label for="sex">Sex:</label>
<select id="sex" value="sex" name="sex" required="required">

<option <?php if ($sex == male ); ?> value="male">Male</option>
<option <?php if ($sex == female ); ?> value="female">Female</option>
<option <?php if ($sex == other ); ?> value="other">Other</option>
</select>

      
        <!--nationality-->
		
  <label for="nation">Nationality:</label>
<select id="nation" value="nation" name="nation" required="required">
<option <?php if ($nation == indian ); ?> value="indian">Indian</option>
<option <?php if ($nation == foreign ); ?> value="foreign">Foreign</option>

</select>
  
        <!--category -->
      <label for="category">category:</label>
 <select id="category" value="category" name="category" required="required">
<option <?php if ($category == general ); ?> value="general">General</option>
<option <?php if ($category == obc ); ?> value="obc">OBC</option>
<option <?php if ($category == sc ); ?> value="sc">SC</option>
<option <?php if ($category == st ); ?> value="st">ST</option>
<option <?php if ($category == sbc ); ?> value="sbc">SBC</option>

</select>
      
        <!--physical condition -->
	  <label for="ph">Physically Handicapped:</label>
<select id="ph" value="ph" name="ph" required="required">

<option <?php if ($ph == no ); ?> value="no">No</option>
<option <?php if ($ph == yes ); ?> value="yes">Yes</option>


</select>
      
      <!--exservice -->
	   <label for="ex serviceman">Ex-Serviceman:</label>
<select id="ex" value="ex" name="ex" required="required">
<option <?php if ($ex == no ); ?> value="no">No</option>
  <option <?php if ($ex == yes ); ?> value="yes">Yes</option>



</select>
      
      <!-- dob-->
	<label for="date of birth">Date Of Birth</label>
    <input type="date" id="dob" name="dob" required="required"><br>
      <br>
	  
      <!-- address-->
	 <h2> Permanent Adress </h2>
	 
	
	<label for="adress1">Adress Line 1:</label>
    <input type="text" id="address1" name="address1" required="required"><br>
	
		<label for="adress2">Adress Line 2:</label>
    <input type="text" id="address2" name="address2"><br>
	
		<label for="adress3">Adress Line 3:</label>
    <input type="text" id="address3" name="address3"><br>
	
		<label for="district">District:</label>
    <input type="text" id="district" name="district"  required="required"><br>
	
	 <label for="state">State:</label>
    <input type="text" id="state" name="state"  required="required"><br>
	


<label for="pin">PIN:</label>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="number" id="pin" name="pin" required="required">
      <br>
      
      <!-- contact-->
	<label for="mobileno">Mobile no.:</label>
    <input type="number" id="mobileno" name="mobileno" placeholder="e.g. 9928799001" required="required">
      <br>
	<label for="email">E-mail:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" id="email" name="email" required="required"><br><br>
            
            
      <!--preferences -->
      
	 <h2>Choose your preference</h2>
	 
<legend for="preference1"> preference 1: </legend> 
	  <input type="text" name="preference1" id="preference1" placeholder="First Preference"></br>
	  
	  <legend for="preference2"> preference 2: </legend> 
	  <input type="text" name="preference2" id="preference2" placeholder="Second Preference"></br>
	
	
    <label for="insti_name"> Instituiton Name:</label>
	<input type="text" id="insti_name" Name="insti_name"><br>
        
        <!--applied program -->
	 <label for="programme">Programme Applied For:</label>
	 


<table>
<tr>
    <td>
	
        
        <input type="radio" name="fulltime" id="fulltime" class="css-checkbox" <?php if (isset($programme) && $programme=="fulltime") echo "checked";?>
        value="fulltime"/>
        <label for="fulltime" class="css-label radGroup2">Full-time</label></td>
    
	<td>
	<input type="radio" name="fulltime" id="parttime" class="css-checkbox" <?php if (isset($programme) && $programme=="parttime") echo "checked";?>
        value="parttime"/>
        <label for="parttime" class="css-label radGroup2">Part-time</label>
	
	</td>
    
	



    </tr></table>



<br>



<!--subcategory -->


	 <legend>Choose Any One Sub Category:</legend>
	
<select id="sub_cat" value="sub_cat" name="sub_cat">

 <option <?php if ($sub_cat == ft1 ); ?> value="ft1">FT-1 University Fellowship</option>
	<option <?php if ($sub_cat == ft2 ); ?> value="ft2"> FT-2 Fellowship Of Another Organization</option>
<option <?php if ($sub_cat == ft3 ); ?> value="ft3">FT-3 Sponsored</option>
<option <?php if ($sub_cat == ft4 ); ?> value="ft4">FT-4 Self Financed</option>
<option <?php if ($sub_cat == ft5 ); ?> value="ft5">FT-5 Self Financed (Foreign)</option>

<option <?php if ($sub_cat == pt1 ); ?> value="pt1">PT-1 Rajasthan Technical University Faculty</option>
<option <?php if ($sub_cat == pt2 ); ?> value="pt2"> PT-2 Rajasthan Technical University Staff</option>
<option <?php if ($sub_cat == pt3 ); ?> value="pt3">PT-3 Project Staff Of Rajasthan Technical University</option>
<option <?php if ($sub_cat == pt4 ); ?> value="pt4"> PT-4 Self Financed</option>

	
	 
	 </select>
        
		
		
	
        <!-- work experience-->
        
	 <h2> Work Experience </h2>
	 <label for="desi_of_emp">Designation Of Employer:</label>
	 <input type="text" id="desi_of_emp" name="desi_of_emp"><br>
	 

	 
	 <label for="desig_of_applicant">Designation Of Applicant:</label>
	 <input type="text" id="desig_of_applicant" name="desig_of_applicant"><br>
	 
	  <legend>Experience:</legend>
	  
	   <label for="exp_from">From :</label>&nbsp;&nbsp;&nbsp;
	   <input type="date" id="exp_from" name="exp_from">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
	   <label for="exp_to">To:</label>
	   <input type="date" id="exp_to" name="exp_to"><br>
	   
        
        <!-- dd details-->
        
	   <h2>Fee Details Of DD</h2>
	   
	   <label for="dd">DD no.:</label>
	   <input type="number" id="dd" name="dd">
	   
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <label for="dd_date">Date:</label>
	   <input type="date" id="dd_date" name="dd_date"><br><br>
	   
	   <!-- name of bank-->
	   
	   <label for="bank">Name of Bank:</label>
	   <select id="bank" value="bank" name="bank">
	   
	   
	   
	   
	   <option <?php if ($bank == sbi ); ?> value="sbi">SBI</option>
           
	<option <?php if ($bank == pnb ); ?> value="pnb"> PUNJAB NATIONAL BANK</option>
           
<option <?php if ($bank == icici ); ?> value="icici">ICICI BANK</option>
           
<option <?php if ($bank == hdfc ); ?> value="hdfc">HDFC BANK</option>
           
<option <?php if ($bank == canera ); ?> value="canera">CANERA BANK</option>

<option <?php if ($sub_cat == bob ); ?> value="bob">BANK 0F BARODA</option>
	   </select>
        
         <!-- documents-->
	   <h3>Kindly upload these documents else your form will not be submitted</h3>
        
    
        <div class="docu">
            
            <table class="docum">
                
                
                <tr>
	 <td>  <label for="marksheet10">Secondary Class marksheet:</label>
       </td>
                    
        <td>
            
	  <input type="file" name="sec_certi" id="sec_certi" />
        </td>            
        
        </tr>
                
                <tr>
                    <td>
	   <label for="marksheet12">10+2 Class marksheet:</label>
           </td> 
	  <td> <input type="file" name= "inter_certi"  id="inter_certi" />      </td>
                    </tr>
                
                <tr>
                    <td>
	   <label for="ugdegree">Under Graduate Degree Marksheet:</label></td>
                    <td>
        
	   <input type="file" name="ug_certi" id="ug_certi"></td>
            </tr>
                
                <tr>
                    <td>
	   <label for="pgdegree">Post Graduate Marksheet:</label>
        </td>
                    <td>
        
	   <input type="file" name="pg_certi" id="pg_certi">
                </td></tr>
                
	   <tr>
           <td><label for="migration">Migration Certificate:</label></td>
           <td>
        
       
	   <input type="file" name="mig_certi" id="mig_certi"></td></tr>
        <tr>    
            <td>
	   <label for="caste">Caste Certificate(if any):</label>
</td>
            <td>
        
	   <input type="file" name="caste_certi" id="caste_certi"></td>
            </tr>
           <tr> 
               <td>  <label for="PHcerti">Category Certificate For Physically handicapped:</label>
        </td>
	 <td>
	   <input type="file" name="ph_certi" id="ph_certi">
         </td>
            </tr>
                <tr>
                    <td>	   <label for="excerti">Category Certificate For EX Serviceman:</label></td>

<td>
	   <input type="file" name="ex_certi" id="ex_certi"></td></tr>
                
                <tr>
                    
                    <td>
	   <label for="noc">N.O.C. From Employer:</label></td>
                   
                    <td>

	   <input type="file" name="noc_certi" id="noc_certi">
                    </td>
                    </tr>
                
                <tr>
	  <td> <label for="other">Other Certificates(if Any):</label>
                    </td>
                    <td>
	   <input type="file" name="other_certi" id="other_certi">
                    </td></tr>
                <tr>
                    <td>
                        
	   <label for="idcard">Identification Card(AADhaar Card Or Any Other):</label>
                    </td>
                    
                    <td>
                        
	   <input type="file" name="id_certi" id="id_certi">
                    </td>
                </tr>
                <tr>
                    <td>
	 <label for="photo">upload your photograph:</label>
                    </td>
                    
                    <td>
	 <input type="file" name="photo" id="photo"></td>
                
                </tr>
	 
                <tr>
                    <td>
                        <label for="sign">Upload your signature:</label></td>
                    
                    <td>
	   <input type="file" name="sign" id="sign">
               
                    </td>  
                </tr>
            </table>
            
            <input type="submit" name="submit" value="submit">
			
			  
	  </div> 
	  </form>
</div>

    
    

	
	</body>
	</html>