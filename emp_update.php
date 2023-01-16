<?php

include 'connect.php';

$id =NULL;
$id = $_GET['updateid'];
$sql = "Select * from `employee` where `id`='$id' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$empno1=$row['empno'];
$empname1= $row['name'];
$dob1= $row['dob'];
$address1= $row['address'];


if(isset($_POST['submit'])){
  $id = $_POST['empid'];
  $empno= $_POST['empno'];
  $empname= $_POST['empname'];
  $dob= $_POST['dob'];
  $address= $_POST['address'];


 $sql = "UPDATE `employee` SET `empno`= '$empno',`name`= '$empname',`dob`= '$dob',`address`= '$address' WHERE `id` = '$id'";
 $result = mysqli_query($con,$sql);

  if($result){
    header('location:emp_view.php');
  }
  else{
    die(mysqli_error($con));
  
  }

}
$id = $_GET['updateid'];
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employee Update</title>
  </head>
  <body>
  
    <?php include_once 'nav.php';?>
    <div class ="container">
        <h1> Update Employee</h1><br>
        <form method = "post" action="emp_update.php">
            <div class="form-group">
                <label >Employee Number</label>
                <input type="text" value="<?php echo $id; ?>"  class ="form-control"  name="empid" style="Display:none">
                <input type="text" value="<?php echo $empno1; ?>"  class ="form-control"  name="empno" >
            </div>
            
            <div class="form-group">
                <label >Employee Name</label>
                <input type="text" value="<?php echo $empname1; ?>" class ="form-control"  name="empname" >
                
            </div>

            <div class="form-group">
                <label >Date of Birth</label>
                <input type="date" value="<?php echo $dob1; ?>" class ="form-control"   name="dob" >
                
            </div>

            <div class="form-group">
                <label >Address</label>
                <input type="text" value="<?php echo $address1; ?>" class ="form-control"   name="address" >
                
            </div>
            
            <button type="submit" class="btn btn-primary" name ="submit" >Update</button>
              <button class ="btn btn-primary my-5">
               <a href = "emp_view.php" class="text-light ">Display All Employees</a>
             </button>
        </form>

    </div>
  


    
  </body>
</html>