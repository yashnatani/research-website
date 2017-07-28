<?php
ob_start();
include("dbconnect1.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$enrollno=$_POST['enrollno'];
$sex=$_POST['sex'];
$nation=$_POST['nation'];
$category=$_POST['category'];
$ph=$_POST['ph'];
$ex=$_POST['ex'];
$dob=$_POST['dob'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
$district=$_POST['district'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$preference1=$_POST['preference1'];
$preference2=$_POST['preference2'];
$insti_name=$_POST['insti_name'];
$programme=$_POST['fulltime'];
$sub_cat=$_POST['sub_cat'];
$desi_of_emp=$_POST['desi_of_emp'];
$desig_of_applicant=$_POST['desig_of_applicant'];
$exp_from=$_POST['exp_from'];
$exp_to=$_POST['exp_to'];
$dd=$_POST['dd'];
$dd_date=$_POST['dd_date'];
$bank=$_POST['bank'];

$dob=strtotime($dob);
$date_of_birth=date('Y-m-d',$dob);


/*
 * Inserting data to form
 * */
 
 if (!file_exists("uploads/".$name."/")) {
  mkdir("uploads/".$name."/",777,true);  
}
 
 //for 12 marksheet //

 $target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["sec_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["sec_certi"]["tmp_name"]);
    if($check !== false) {
        echo "" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["sec_certi"]["size"] > 10000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["sec_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["sec_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// intermediate
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["inter_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["inter_certi"]["tmp_name"]);
    if($check !== false) {
        echo "" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["inter_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["inter_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["inter_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// ug
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["ug_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["ug_certi"]["tmp_name"]);
    if($check !== false) {
        echo " " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["ug_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ug_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["ug_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// pg
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["pg_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pg_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["pg_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pg_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pg_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	
	
	
	
	// migration
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["mig_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["mig_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["mig_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["mig_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["mig_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// cast certificate
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["caste_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["caste_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["caste_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["caste_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["caste_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





// physically handicapped
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["ph_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["ph_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["ph_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ph_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["ph_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





// ex serviceman
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["ex_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["ex_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["ex_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ex_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["ex_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




// noc certificate
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["noc_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["noc_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["noc_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["noc_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["noc_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// othercertificate
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["other_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["other_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["other_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["other_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["other_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// id
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["id_certi"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["id_certi"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["id_certi"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["id_certi"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["id_certi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





// photo
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["photo"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// sign
$target_dir = "uploads/".$name."/";
$target_file = $target_dir . basename($_FILES["sign"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["sign"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["sign"]["size"] > 1000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["sign"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





$query=mysqli_query($db_connect,"INSERT INTO user(`name`, `father name` , `mother name` , `enrollment no` , `sex` ,`nation` ,`category`, 
`physically handicapped` , `ex serviceman` ,`date of birth`, `address1` , `address2` , `address3` , `district` , `state`,`pin` ,`mobileno` , `email`,
`preference1` , `preference2` ,`insti_name` , `programme` , `desi_of_emp` , `desig_of_applicant` , `exp_from` , `exp_to` ,`dd` ,`dd_date`,
`sub_cat`,`bank`) 
VALUES('$name','$fname','$mname','$enrollno' , '$sex' ,'$nation' , '$category', '$ph' ,'$ex','$date_of_birth' ,'$address1' , '$address2' , '$address3' , 
'$district' ,
 '$state' , '$pin' ,'$mobileno' , '$email' ,'$preference1' , '$preference2' , '$insti_name','$programme' ,'$desi_of_emp' , '$desig_of_applicant'
 ,'$exp_from' ,'$exp_to' , '$dd' , '$dd_date','$sub_cat','$bank' )") or die(mysqli_error($db_connect));

mysqli_close($db_connect);


    
    echo "<div class=\"success\">Form successfully submitted!</div>";
    
?>




<html>
<head>
<title>PHP Login & Register</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
       <a href="logout.php" class="btn btn-primary">Logout</a>
        
    </div>
           
</body>
</html>
