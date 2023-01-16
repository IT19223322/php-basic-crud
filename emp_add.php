<?php

include 'connect.php';



if(isset($_POST['submit'])){
  $empid= $_POST['empno'];
  $empname= $_POST['empname'];
  $dob= $_POST['dob'];
  $address= $_POST['address'];

  $sql = "insert into `employee` (empno,name,dob,address) values('$empid','$empname','$dob','$address')";
  $result = mysqli_query($con,$sql);

  if($result){
    echo "data inserted successfully"; 
  }
  else{
    die(mysqli_error($con));
  
  }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employee add</title>
    <script defer src ="script.js"></script>
  </head>
  <body>

  <!--navigation bar-->

  <?php include_once 'nav.php';?>


    <div class ="container">
        <h1> Add Employee</h1><br>
        <form method = "post" action="emp_add.php">
            <div class="form-group ">
                <label >Employee Number</label>
                <input type="number" class ="form-control"  placeholder="enter your emp. number" name="empno" id = "emp_id">
                
            </div>
            
            <div class="form-group">
                <label >Employee Name</label>
                <input type="text" class ="form-control"  placeholder="enter your name" name="empname" id = "emp_name>
                
            </div>

            <div class="form-group">
                <label >Date of Birth</label>
                <input type="date" class ="form-control"  placeholder="enter your dob" name="dob" id = "emp_dob">
                
            </div>

            <div class="form-group">
                <label >Address</label>
                <input type="text" class ="form-control"  placeholder="enter your address" name="address" id = "address_">
                
            </div>
            
            <button type="submit" class="btn btn-primary" name ="submit" >Submit</button>
              <button class ="btn btn-primary my-5">
               <a href = "emp_view.php" class="text-light ">Display All Employees</a>
             </button>
        </form>

    </div>
  


    
  </body>
</html>