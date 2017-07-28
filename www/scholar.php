<?php
session_start();
include_once('dbcon.php');

$error = false;
if(isset($_POST['btn-login'])){
    $email = trim($_POST['email']);
    $email = htmlspecialchars(strip_tags($email));

    $password = trim($_POST['password']);
    $password = htmlspecialchars(strip_tags($password));

    if(empty($email)){
        $error = true;
        $errorEmail = 'Please input email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please enter a valid email address';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please enter password';
    }elseif(strlen($password)< 6){
        $error = true;
        $errorPassword = 'Password at least 6 character';
    }

    if(!$error){
        $password = md5($password);
        $sql = "select * from tbl_users where email='$email' ";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($count==1 && $row['password'] == $password){
            $_SESSION['username'] = $row['username'];
            header('location: home.php');
        }else{
            $errorMsg = 'Invalid Username or Password';
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
            <link rel="stylesheet" href="bootstrapm.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="scholar.css" type="text/css" rel=stylesheet>
      <title id="rtu"> rtu.ac.in</title>
        
    </head>
    
    <body>
           <!--header-->
        
        <div id="header">
            <div id="imag">
       <a href="http://www.rtu.ac.in/RTU/" target="_blank" alt="RTU"> <img   width=100px height=100px src="Untitled.png"  /></a>
            </div>
            
           <div id="logo" >
       <a href="\wamp64\www\home.html" target="_self" alt="Home" ><h2 class="dee">Research Department<br/>
        Rajasthan Technical University, Kota</h2>
           </a>
               </div>
          </div>  
        
        
     <!--navigation bar-->  
        <ul class="navg">
            
  <li class="dropdown"><a href="\wamp64\www\home.html">Home</a></li>
            
            <li class="dropdown">
      
    <a href="javascript:void(0)" class="dropbtn">Administration</a>
    <div class="dropdown-content">
      <a href="dean.html">Dean</a>
      <a href="asso dean.html">Associate Dean</a>
      <a href="assis dean.html">Assistant Dean</a>
    </div>
  </li>
 
            
  <li class="dropdown">
      
    <a href="http://127.0.0.1/ordinance.html" class="dropbtn">Ordinance</a>
    
    
  </li>
            
            <li class="dropdown">
      
    <a href="regulations.html" class="dropbtn">Regulations</a>
    
  </li>
            
        <div class="cent">      
            
            <li class="dropdown">
      
    <a href="researchcenter.html" class="dropbtn">Research Center</a>
  
      
   
  </li>
    </div>         


            
            <li class="dropdown">
      
    <a href="http://127.0.0.1/scholar.php" class="dropbtn">Scholars</a>
                
   
  </li>
                 

            
            <li class="dropdown">
      
    <a href="contact.html" class="dropbtn">Contact</a>
  
  </li>
            
            
                    <li class="dropdown"><form>
        <input type="text" name="siri" placeholder="Search">
        </form></li>


</ul>
        


<!-- copy -->
        
        
        <div class="container">
        <div style="width: 500px; margin: 50px auto;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <center><h2>Login</h2></center>
                <hr/>
                <?php
                    if(isset($errorMsg)){
                        ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <?php echo $errorMsg; ?>
                        </div>
                        <?php
                    }
                ?>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                    <span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
                </div>
                <div class="form-group">
                    <center><input type="submit" name="btn-login" value="Login" class="btn btn-primary"></center>
                </div>
                <hr/>
                <a href="register.php">Register</a>
            </form>
        </div>
    </div>






       <!-- footer --> 
       
       <footer>
      
        
              <div class="foot">
           <table>
               <tr>
                  <th>Organizations</th>
                   <th>General rules</th>
                   <th>Supervisor</th>
                   <th>Research center</th>
                   <th>Scholars</th>
                   <th>Other</th>
                  </tr>
              
   
<!--FIRST ROW-->
  
                  <tr>
               <td><a href="http://www.ugc.ac.in/" target="_blank" alt="UGC">UGC</a></td>
                      
               <td><a href="\wamp64\www\footer documents\general guidelines.pdf">General Guidelines</a></td>
                      
                      <td><a href="\wamp64\www\Research_supervisor.html">List of research<br> supervisors</a></td>
                      
                      <td><a href="\wamp64\www\researchcenter.html">List of research centers</a></td>
                      
                      <td><a href="\wamp64\www\footer documents\Ph.DFeesOrder.jpg">PhD fee structure</a></td>
                      
               <td><a href="\wamp64\www\footer documents\PhD-Oral-Defence-Evaluation-Form.pdf">Oral defense <br>evaluation form</a></td>
               </tr>
               
               <!--SECOND ROW-->
                  <tr>
               <td><a href="\wamp64\www\aicte.html">AICTE</a></td>
               <td><a href="\wamp64\www\footer documents\CGP_CONV.pdf">CGPA to % Rule</a></td>
                      <td><a href="\wamp64\www\footer documents\Application-for-Registration-of-external-Research-Supervisor.pdf" target="_blank">Registration form<br> for supervisor</a></td>
               <td><a href="\wamp64\www\footer documents\Applic-modifd-reserch-cent.pdf">Application form <br>for research center</a></td>
               <td><a href="\wamp64\www\footer documents\Format-For-Annual-Performance-Review-APR.pdf">Format for annual <br>performance review</a></td>
               <td><a href="\wamp64\www\footer documents\Ph.D.-Pre-synopsis-Seminar-Examination-Report.pdf">PhD pre sysnopsis <br>examination report</a></td></tr>
               
               <!--THIRD ROW-->
               <tr><td> <a href="\wamp64\www\dst.html">DST</a></td>
               <td><a href="\wamp64\www\footer documents\refund of excess fee.pdf">Refund for excess fee</a></td>
                  
                  <td><a href="\wamp64\www\footer documents\RESEARCH-SUPERVISOR-DETAILS-FORM-1-1.pdf">Research supervisor<br> detail form</a></td>
               <td></td>
               <td><a href="\wamp64\www\footer documents\Second-Sem-Registration-form-_To-be-filled-from-Second-semester-onward_-1-1.pdf">Application form for<br> II sem registration</a></td>
                   
               </tr>
               <!--FOURTH ROW-->
               <tr>
               <td><a href="\wamp64\www\isro.html">ISRO</a></td>
                   
               <td></td>
                   
               <td><a href=></a></td>
                   <td></td>
                   <td><a href="\wamp64\www\footer documents\Research-Proposal-Format-RTU.pdf">Research proposal format</a></td>
                   <td></td>
                   
              </tr>
              
               <!--FIFTH ROW-->
               <tr>
               <td><a href="\wamp64\www\csir.html">CSIR</a></td>
               <td></td>
               <td></td>
                   <td></td>
                   <td><a href="\wamp64\www\footer documents\PhD-thesis-Format-and-Guidelines.pdf">Thesis format <br>and guidelines</a></td>
               <td></td></tr>
               
               
                  </table>
           </div>
             </footer>

        
        <footer class="secfoot">

                <table>
                    <tr>
                    <th>
        <p class="cop">Copyright ©&nbsp;&nbsp;&nbsp;Research Department.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All rights Reserverd<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rajasthan Technical University,Kota</p>
     </th>
           
      <div class="social">
           <th id="soc">
       <img src="\wamp64\www\footerfb.png" width="50px" height="50px" /></th>
        
         <th id="soc">  <img src="\wamp64\www\footerlinkedin.png" width="50px" height="50px"/>
             </th>
          </div>
                    </tr>
             </table>   
               
          </footer>
        