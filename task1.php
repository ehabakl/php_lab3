<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $subErr = "";
$name = $email = $gender = $submit  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["agree"])) {
    $subErr= "You must agree to terms";
  } else {
    $submit = test_input($_POST["agree"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>

<form action="<?php $_PHP_SELF ?>" method="post" >   
            <table align="center" >
                
                    <tr>
                        <td><p><span style="color:red">*</span> required field</p></th>
                    </tr>
                    <tr>
                        <td><label for="">name</label></th>
                        <td><input type="text" name="name"><span style="color:red">*<?php echo $nameErr ?></span></th>
                        
                    </tr>
                    <tr>
                        <td><label for="">email</label></td>
                        <td><input type="email" name="email"><span style="color:red">*<?php echo $emailErr ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="">Group #</label></td>
                        <td><input type="text" name ="group"></td>
                    </tr>
                    <tr>
                        <td><label for="">class details :</label></td>
                        <td><textarea name="class_details" id="" cols="30" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="">gender</label></td>
                        <td><input type="radio" name="gender" value="female">female <input type="radio" name="gender" value = "male">male <span style="color:red">*<?php echo $genderErr ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="">select courses</label></td>
                        <td> 
                            <select size="4" multiple name="courses">
                                <option value='php'>php</option>
                                <option value='javascript'>javascript</option>
                                <option value='mysql'>mysql</option>
                                <option value='html'>html</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">agree</label></td>
                        <td><input type="checkbox" name ="agree"> <span style="color:red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name ="submit"></td>
                    </tr>
            </table>
        </form> 
</body>
</html>

           
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }


    echo "Name:".$_POST['name']."<br>";
    echo "Email:".$_POST['email']."<br>";
    echo "Group #:".$_POST['group']."<br>";
    echo "Class details:".$_POST['class_details']."<br>";
    echo "gender:".$_POST['gender']."<br>";
    echo "your courses are:".$_POST['courses']."<br>";



?>
