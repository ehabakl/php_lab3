<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      span{ 
    color : red;
    font-size:large;
}
table{ 
    font-size: large;
}
h1{ text-align: center;}
    </style>

    
</head>
<body >
<?php
$nameErr = $emailErr = $genderErr = $subErr = "";
$name = $email = $gender = $submit  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["submit"])) {
    $subErr= "You must agree to terms";
  } else {
    $submit = test_input($_POST["submit"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"  >
    <table align="center" >
        <thead ><h1>Applications name : AAST_BIS class registration</h1></thead>
        <tbody>
            <th ><span>* Required field </span></th>
            <tr><td>Name:</td><td><input type="text" name="fname"><span>*<?php echo $nameErr;?></span></span></td></tr>
            <tr><td>Email:</td><td><input type="email" name="email"><span>*<?php echo $emailErr;?></span></span></td></tr>
            <tr><td>Group#</td><td><input type="text" name="group"></td></tr>
            <tr><td>Class details</td><td><textarea name="textarea" cols="50" rows="5"></textarea></td></tr>
            <tr><td>Gender</td><td><label for="male">Male</label><input value="Male" name="gender" type="radio">
                <label for="female">Female</label><input value="Female" name="gender" type="radio"><span>*<?php echo $genderErr;?></span></span></td>
            </tr>
            <tr><td>Select Courses :</td>
                <td><select multiple="multiple" name="multiselec[]">
                    <option value="PHP">PHP</option>
                    <option value="CSS">CSS</option>
                    <option value="HTML">HTML</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="MySQL">MySQL</option>
                </select></td></tr>
        <tfoot><td>Agree<br><input type="submit" name="submit"></td><td><input type="checkbox"><span>*<?php echo $subErr;?></span></span></td></tfoot>
        </tbody>
    </table>
</form> 

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
  echo "Name : ".$_POST["fname"]."<br>" ;
  echo "E-mail : ".$_POST["email"]."<br>" ;
  echo "Group # : ".$_POST["group"]."<br>" ;
  echo "Class details : ".$_POST["textarea"]."<br>" ;
  echo "Gender : ".$_POST["gender"]."<br>" ;
  if(isset($_POST['multiselec'])) {
    echo "Your Courses :" ;
    foreach ($_POST['multiselec'] as $selectedOption) {
        echo $selectedOption." ";
    }
  }
?>
</body>
</html>
