<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Employee</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<?php include_once 'nav.php';?>

    <div class ="container">

    <button class ="btn btn-primary my-5">
        <a href = "emp_add.php" class="text-light ">Add Employee</a>
    </button>

    <button class ="btn btn-primary my-5">
        <a href = "emp_select.php" class="text-light ">Select Employee</a>
    </button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Number</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

  <?php
    
    $sql = "Select * FROM `employee`";
    $result = mysqli_query($con,$sql);

    if($result){
       

        while($row = mysqli_fetch_assoc($result)){
            //empno,name,dob and address are column names of the employee table.
            $id = $row['id'];
            $empid = $row['empno'];
            $empname = $row['name'];
            $dob = $row['dob'];
            $address = $row['address'];

            echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <th>'.$empid.'</th>
                    <td>'.$empname.'</td>
                    <td>'.$dob.'</td>
                    <td>'.$address.'</td>
                    <td>
                        <button class = "btn btn-primary" my-1>
                            <a href="emp_update.php?updateid='.$id.'" class="text-light">Update</a>
                        </button>

                        <button class = "btn btn-danger" my-1>
                            <a href="emp_delete.phpdelet?eid='.$id.'" class="text-light">Delete</a>
                        </button>
                    </td>
                </tr>';
        }

    }

  ?>
  
  

  </tbody>
</table>

</div>



</body>
</html>