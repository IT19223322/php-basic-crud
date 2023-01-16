<?php
include'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php include_once 'nav.php';?>

    <?php
    
    $result = mysqli_query($con, "SELECT * FROM employee");
    
    ?>
    <br>
    <div class="container">
        <form action="#" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Empno</th>
                        <th>Name</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //records as in an array

                    foreach ($result as $data) : ?>

                        <tr>
                            <td><?php echo $data['empno'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td>
                                <input type="checkbox" name="selectedid[]" id="" value=<?php echo $data['id'] ?>>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <button type="submit" value="Submit" name="submit" class="btn btn-outline-primary">Submit</button>
        </form>

<br>

<br>



        <table class="table table-striped">
            <thead>
                <tr>
                    <th>EMployee Number</th>
                    <th>EMployee Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Age</th>

                </tr>
            </thead>
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['selectedid'])) {
                    foreach ($_POST['selectedid'] as $id) {
                        $resulttwo = mysqli_query($con, "SELECT * FROM employee where id= $id");
                        foreach ($resulttwo as $datatwo) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $datatwo['empno'] ?></td>
                                    <td><?php echo $datatwo['name'] ?></td>
                                    <td><?php echo $datatwo['dob'] ?></td>
                                    <td><?php echo $datatwo['address'] ?></td>
                                    <td><?php $dateOfBirth = $datatwo['dob']; 
                                        $today = date("Y-m-d");
                                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                        echo ' <b>Age is</b> '.$diff->format('%y Years %m Months %d Days')." "?> 
                                    </td>

                                </tr>
                            </tbody>
                   <?php endforeach; ?>
       
<?php
                    }
                }
            }
?>
 </table>
    </div>


    <!--  -->
</body>

</html>