<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        $sql = "delete from `employee` where id=$id";
        $result=mysqli_query($con,$sql);

        if($result){

            header('location:emp_view.php');

        }
        else{
            die(mysqli_error($con));

        }
    }
?>

<html>

<!-- <button class = "btn btn-primary" my-1>
                            <a href="display.php" class="text-light">redirect</a>
                        </button> -->

</html>