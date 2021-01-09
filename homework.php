<?php

include './libs/session.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>ZEDDERP | Best School Management Solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="css/theme-style.css">
    <link rel="stylesheet" href="css/app-style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/addons.css">

    <style>

    </style>
</head>

<body class="overlay-scrollbar">

    <!-- nav bar  -->

    <?php include 'includes/navbar.php'; ?>

    <!-- sidebar -->

    <?php
    include 'includes/sidebar.php';
    ?>

    <!-- main content area  -->

    <div class="wrapper">

        <!-- alert  -->

        <div class="row animate__animated animate__bounceInDown alert">
            <div class="col-m-12 col-sm-12">
                <i class="fas alert-icon"></i> &nbsp; <span class="alert-text"></span>
                <i class="fas fa-times float-right close-alert" onclick="closeAlert()"></i>
            </div>
        </div>

        <!-- end alert -->


        <!-- dialogs confirmations -->
        <!-- ========================== -->
        <!-- class delete dialog prompt -->

        <?php include './libs/class-delete-prompt.php'; ?>

        <!-- end class delete dialog prompt -->
        <!-- ===============================-->
        <!-- Empty class data prompt -->

        <?php include './libs/class-data-prompt.php';  ?>

        <!-- ===========================-->
        <!-- End Empty class data prompt-->

        <div class="row">

            <!-- Homework Table --->
            <!-- ================-->

            <div class="col-8 col-m-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Homework
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content section-table table-card">

                    </div>
                </div>
            </div>

            <!-- End Homework Table -->
            <!-- ================== -->

            <div class="col-4 col-m-12 col-sm-12">

                <!-- Add Homework form -->
                <!-- ============== -->

                <div class="card">
                    <div class="card-header">
                        <h3>
                            Add Homework
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <form action="#" method="post" id="class-form">
                            <div class="form-group">
                                <label for="class" id="class">
                                    Class :
                                </label>
                                <select name="class" id="class_select" class="selector">
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="class" id="class">
                                    Section :
                                </label>
                                <select name="section" id="section_select" class="selector">
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="bg-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Homework Form -->
                <!-- ================= -->
            </div>
        </div>

        <!-- footer -->
        <!-- =======-->

        <div class="col-12 footer">
            <center>
                <p>Copyright &copy; 2017 - <?php echo date('Y'); ?> | ZeddLabz</p>
            </center>
        </div>

        <!-- ========== -->
        <!-- end footer -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/alert.js"></script>

    <script>
        // set current menu item active in side bar

        $('.homework').addClass('active');

        // class save form function

        // $('#class-form').submit(e => {
        //     e.preventDefault();
        //     let form_data = new FormData(document.getElementById('class-form'));
        //     $.ajax({
        //         url: "php/set-class.php",
        //         data: form_data,
        //         type: "POST",
        //         processData: false,
        //         contentType: false,
        //         cache: false,
        //         success: response => {
        //             if (response == 1) {
        //                 setAlert(success, "Class added", true)
        //                 $('#class-form').trigger("reset")
        //                 $('#class-form input[type="text"]').focus()
        //             }
        //             if (response == 0) {
        //                 setAlert(danger, "Class cannot be added", true)

        //             }
        //             if (response == 2) {
        //                 setAlert(primary, "Class already exist", true)

        //             }
        //             getClasses()
        //         }
        //     })

        // })


        // adding section functionality

        // get classes from database


        $.ajax({
            url: "php/get_class_in_array.php",
            success: response => {
                $.each(JSON.parse(response), function(index, element) {
                    $('#class_select').append("<option value=" + element['id'] + ">" + element['class_name'] + "</option>")
                })
            }
        })

        $.ajax({
            url: "php/get_section_in_array.php",
            success: response => {
                $.each(JSON.parse(response), function(index, element) {
                    $('#section_select').append("<option value=" + element['id'] + ">" + element['section_name'] + "</option>")
                })
            }
        })
    </script>

</body>

</html>