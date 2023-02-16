<?php
$insert = false;
if (isset($_POST['name_T'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";

    // Collect post variables


    $name_T = $_POST['name_T'];
    $name_D = $_POST['name_D'];
    $name_ist_c1 = $_POST['name_ist_c1'];
    $number_ist_c = $_POST['number_ist_c'];
    $name_b_n_ist = $_POST['name_b_n_ist'];
    $name_2nd_c1 = $_POST['name_2nd_c1'];
    $number_2nd_c = $_POST['number_2nd_c'];
    $name_2nd_c2 = $_POST['name_2nd_c2'];
    $name_3rd_c1 = $_POST['name_3rd_c1'];
    $number_3rd_c = $_POST['number_3rd_c'];
    $name_3rd_c2 = $_POST['name_3rd_c2'];
    $Contest_type = $_POST['Contest_type'];


    $sql = "INSERT INTO `it_fest`.`it_fest` (`name_T`, `name_D`, `name_ist_c1`, `number_ist_c`, `name_b_n_ist`, `name_2nd_c1`, `number_2nd_c`, `name_2nd_c2`, `name_3rd_c1`, `number_3rd_c`, `name_3rd_c2`,`Contest_type`,`dt`) VALUES ('$name_T', '$name_D', '$name_ist_c1', '$number_ist_c', '$name_b_n_ist', '$name_2nd_c1', '$number_2nd_c', '$name_2nd_c2', '$name_3rd_c1', '$number_3rd_c', '$name_3rd_c2','$Contest_type',current_timestamp());";

    //  echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>


    <section>

        <div class="container">

            <h1 style="color:#063c62">Welcome to pabna univarsity of science and technology</h3>
                <h2 style="color:#7e5611">Intra University IT Fair<br> Organized by PUST CSE</h2>
                <p>Enter your details and submit this form to confirm your Contest Registration </p>


                <div>
                    <?php
                    if ($insert == true) {
                        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you.</p>";
                    }
                    ?>
                </div>




        </div>



        <form action="index.php" method="post">



    </section>

    <section>

        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-sm-12 col-md-12">

                    <div class="team_details">

                        <h1 style="color:#063c62">Team Details</h3>

                            <input type="text" name="name_T" id="name_T" placeholder="Team Name">
                            <input type="text" name="name_D" id="name_D" placeholder="Team Department">


                    </div>

                </div>

            </div>

        </div>


    </section>

    <section>

        <div class="container">

            <div class="row">
                <div class=" col-lg-4 col-sm-12 col-md-4">

                    <div class=" First_contesttent">
                        <h1 style="color:#063c62">First Member</h3>
                            <input type="text" name="name_ist_c1" id="name_ist_c1" placeholder="Enter your name">
                            <input type="text" name="number_ist_c" id="number_ist_c"
                                placeholder="Enter your Roll Number">
                            <input type="text" name="name_b_n_ist" id="name_b_n_ist" placeholder="Enter your Batch">
                    </div>

                </div>

                <div class=" col-lg-4 col-sm-12 col-md-4">

                    <div class=" First_contesttent">
                        <h1 style="color:#063c62">Second Member</h3>
                            <input type="text" name="name_2nd_c1" id="name_2nd_c1" placeholder="Enter your name">
                            <input type="text" name="number_2nd_c" id="number_2nd_c"
                                placeholder="Enter your Roll Number">
                            <input type="text" name="name_2nd_c2" id="name_2nd_c2" placeholder="Enter your Batch">
                    </div>

                </div>


                <div class=" col-lg-4 col-sm-12 col-md-4">

                    <div class=" First_contesttent">
                        <h1 style="color:#063c62">Third Member</h3>
                            <input type="text" name="name_3rd_c1" id="name_3rd_c1" placeholder="Enter your name">
                            <input type="text" name="number_3rd_c" id="number_3rd_c"
                                placeholder="Enter your Roll Number">
                            <input type="text" name="name_3rd_c2" id="name_3rd_c2" placeholder="Enter your Batch">
                    </div>

                </div>

            </div>


            <div class="container">

                <label for="cars" class="moshiur">Contest type</label>

                <select name="Contest_type" id="Contest_type">
                    <option value="Programming Contest">Programming Contest</option>
                    <option value="Project Exhibition">Project Exhibition</option>
                </select>
            </div>

        </div>

    </section>

    <button class="btn">Submit</button>
    </form>

    <script src="index.js"></script>

</body>

</html>