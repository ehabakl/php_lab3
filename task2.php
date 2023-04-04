<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            width:130px;
        }
        table{ 
            text-align: center ;}

    </style>
</head>
<body>
    <h1>Application Name : PHP class registration </h1>
<?php
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
?>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
  </tr>
  <?php foreach ($students as $student) { ?>
    <tr <?php if ($student['status'] == 'CMS') { echo 'style="color: red;"'; }
            elseif ($student['status'] == 'OS') { echo 'style="color: blue;"'; } ?> >  
      <td><?php echo $student['name']; ?></td>
      <td><?php echo $student['email']; ?></td>
      <td><?php echo $student['status']; ?></td>
    </tr>
  <?php } ?>
</table> 
</body>
</html>