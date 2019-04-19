<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

     class formValidation {
        // var $saname;
        // var $saphone;
        // var $saemail;
        
        //function or method declaration. 
        function sagetData(){
            //$saname = "".$_POST['Name'];
            
           // echo "Name you entered is  : ".$saname;
            
   
            // Validate the name:
    // if (!empty($_REQUEST['Name'])) {
    //      $name = $_REQUEST['Name'];
    //     echo "<br>";
    //     echo "<br>";
    //     echo "<br>";
    //      echo "Name you entered is  : ".$saname;
         
    // } else {
    //      $name = NULL;
    //     echo "<br>";
    //     echo "<br>";
    //    echo "<br>";
    //     echo "<br>";
    //     echo '<p class="error" style="color:red;">You forgot to enter your name!</p>';
    // }
    if (empty($_REQUEST['Name'])) {
        $nameError = 'Name should be filled';
        echo $nameError;
        echo"<br>";
	} else {
        $name = $_REQUEST['Name'];
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameError = 'Name can only contain letters, white spaces';
            echo $nameError;
            echo"<br>";
		}

    }
}
function sagetDataPhone() {
    //$saphone = "".$_REQUEST['phone']; //I used $_REQUEST here.
   
    
    // Both $_POST[''] and $_REQUEST[''] works alike. 
    
    // Validate the phone:
//    if (!empty($_REQUEST['phone'])) {
//  $phone = $_REQUEST['phone'];
//   echo "<br>";
//      echo "Phone you entered is  : ".$saphone;
//   } else {
//  $phone = NULL;
//  echo '<p class="error" style="color:red;">You forgot to enter your phone number!</p>';
// }
if(empty($_REQUEST['phone'])){
    $error1="phone no cant be empty";

    echo $error1;
    echo"<br>";
}
elseif(!preg_match('/^\d{10}$/',$_REQUEST['phone'])){
    $error1="enter valid phone no";
    echo $error1;
    echo "<br>";
}
else{
    $phoneNumber =$_POST['phone'];
    echo $phoneNumber;
    echo"<br>";
} 
} // end of function. 

function sagetEmail() {
//     $saemail = "".$_REQUEST['EmailId'];
    
    
//    //Validating email.
     
//     if (!empty($_REQUEST['EmailId'])) {
//  $phone = $_REQUEST['EmailId'];
// echo "<br>";
//      echo "Email you entered is  : " .$saemail;
// } else {
//  $email = NULL;
// echo '<p class="error" style="color:red;">You forgot to enter your Email!</p>';
// }
if (empty($_REQUEST['EmailId'])) {
    $emailError = 'Please enter your email';
    echo $emailError;
    echo"<br>";
} else {
    $email = $_REQUEST['EmailId'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Invalid Email';
        echo $emailError;
        echo"<br>";
    }
}
    
    
}// end of function


function check_address(){
    if(empty($_REQUEST['MailingaddressLine1'])){
        $addressError='please enter yor address';
        echo $addressError;
        echo"<br>";

    }else{
        $address=$_REQUEST['MailingaddressLine1'];
        if (strlen($address) < 10) {
           $addressError = 'Address should be maximun 10 characters';
           echo $addressError;
           echo"<br>";
    }
}
}

// $address = !empty($_REQUEST['MailingaddressLine1']) ? validate($_REQUEST['MailingaddressLine1']) : "";
//     if (strlen($address) < 10) {
//         $addressError = 'Address should be maximun 10 characters';
//         echo $addressError;

function check_state(){
    if (empty($_REQUEST['state'])) {
        $stateError = 'State should be filled';
        echo $stateError;
        echo"<br>";
	} else {
        $state = $_REQUEST['state'];
		if (!preg_match("/^[a-zA-Z ]*$/", $state)) {
            $stateError = 'State can only contain letters, white spaces';
            echo $stateError;
            echo"<br>";
        }else{
                echo $state;
                echo"<br>";
            }
		}

    }

function check_panNo(){
    if(empty($_REQUEST['PanNumber'])){
        $panError='PanNumber should be filled';
        echo $panError;
        echo"<br>";

    }
    else{
        $pan=$_REQUEST['PanNumber'];
        if(!preg_match("/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/",$pan)){
            $panError="pan format is wrong Please fill it carefully";
            echo $panError;
            echo"<br>";
        }
    }
}

function check_city(){
    if (empty($_REQUEST['city'])) {
        $cityError = 'City should be filled';
        echo $cityError;
        echo"<br>";
	} else {
        $city = $_REQUEST['city'];
		if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
            $cityError = 'City can only contain letters, white spaces';
            echo $cityError;
            echo"<br>";
		}

    }
}

function check_date()
{
 if(empty($_REQUEST['date'])){
     $dateError='Date should be filled';
     echo $dateError;
     echo"<br>";
 }   else{
     $date=$_REQUEST['date'];
     if(!preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/",$date)){
         $dateError='Date must comply with this mask: YYYY-MM-DD ';
         echo $dateError;
         echo"<br>";
     }

 }
}
 function check_tax(){
    if(empty($_REQUEST['tax']))
    {
    $tax_error ="Please select a tax from the list";
    $error=true;
    echo $tax_error;
    echo "<br>";
    }
     else
    {
    $tax= $_REQUEST['tax'];
    echo $tax;
    echo "<br>";
    }
 }
function check_maritalstatus(){
    if(empty($_REQUEST['maritalstatus'])){
        $maritalstatus_error="please select a marital status from the list";
        $error=true;
        echo $maritalstatus_error;
        echo "<br>";
    }
    else{
        $maritalstatus=$_REQUEST['maritalstatus'];
        echo $maritalstatus;
        echo"<br>";
    }
}







function check_pin(){
    if(empty($_REQUEST['Pincode'])){
        $pinError='pincode should be filled';
        echo $pinError;
        echo "<br>";
    }else{
        $pincode=$_REQUEST['Pincode'];
        if(!preg_match("/^[0-9]{6}$/D",$pincode)){
            $pinError='pincode is incorrect Fill it correctly';
            echo $pinError;
            echo "<br>";
        }
    }
}

function check_residentialstatus(){
    if(empty($_REQUEST['residentialstatus'])){
        $residentialstatus_error="please select a residential status from the list";
        $error=true;
        echo $residentialstatus_error;
        echo "<br>";
    }
    else{
        $residentialstatus=$_REQUEST['residentialstatus'];
        echo $residentialstatus;
        echo"<br>";
    }
}





















    }
    $x = new formValidation();
	 //phpinfo(); This code displays php information. 
	 
	 //calling method
     $x->sagetData();  
     $x->sagetDataPhone();
     $x->sagetEmail();
     $x->check_address();
     $x->check_state();
     $x->check_panNo();
     $x->check_city();
     $x->check_date();
     $x->check_tax();
     $x->check_pin();
     $x->check_maritalstatus();
     $x->check_residentialstatus();

     function directory_check(){
        $directory ="employeedata";
        if(!is_dir($directory)){
            $diri = mkdir($directory);
            echo 'directory created';
            }else{
            echo "directory exists";
            }
        }
        function employeedata_json(){
           $user = $_POST['phone'];
           $file = "employeedata/$user.json";
           if (file_exists($file)) {
              echo "The file $file exists";
          } else {
              echo "The file $file does not exist";
          }
        }
     
    //if(($nameError=="")&&($emailError=="")&&($error1=="")&&($genderError=="")&&($addressError=="")&&($dojError=="")&&($department_error=="")&&$submited=="true"){
       
    //      echo '<table border="1" style="border-collapse: collapse;">';
    
    //     foreach ($_POST as $key=>$value){
    //         echo '<tr>';
    //         echo '<td>'.$key.'</td>';
    //         echo '<td>'.$value.'</td>';
    //         echo '</tr>';
    //     }
    //  echo '</table>';
     directory_check();   
         $array_data =$_POST;
         array_pop($array_data);
         $Json_data =json_encode($array_data);
         echo $Json_data;
         $user = $_POST['phone'];
         employeedata_json();
         $fp = fopen("employeedata/$user.json", 'w');
         fwrite($fp,$Json_data);
         fclose($fp);









// class Validation
// {
//     public function check_empty($data, $fields)
//     {
//         $msg = null;
//         foreach ($fields as $value) {
//             if (empty($data[$value])) {
//                 $msg = "$value field empty <br />";
//                 echo $msg;
//             }
//         }
//         return $msg;
//     }
//     public function check_email($param)
//     {
          
//             if(filter_var($param, FILTER_VALIDATE_EMAIL)) {
//                 return true;
//             }
//          else{
//             echo "please provide valid email";
//         }
//     }
//     public function check_panNo($param)
//     {
//         if (strlen($param) == 5) {
//             return true;
//         } else {
//             echo "please provide valid PAN number";
//         }
//     }
//     public function check_pincode($param)
//     {
//         if (strlen($param) == 6) {
//             return true;
//         } else {
//             echo "please provide valid pincode";
//         }
//     }
//     public function check_mobile($param)
//     {
//         if (strlen($param) == 10) {
//             return true;
//         } else {
//             echo "please provide valid Mobileno.";
//         }
//     }

    


// }
// $validation = new Validation();
// if (isset($_POST['Submit'])) {
//     $msg = $validation->check_empty($_POST, array('Name', 'lname', 'maritalstatus','Father','residentialstatus','phone','tax','MailingaddressLine1','state','city','Pincode','EmailId','edu_qualification','occupation','NameofTheOrganization','title','FullName','Date','percentageEntittlemen'));
//     $validation->check_email($_POST['email']);
//     $validation->check_panNo($_POST['pannumber']);
//     $validation->check_mobile($_POST['mobile']);
// }
































?>