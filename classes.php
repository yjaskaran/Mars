<?php
//include './libs/session.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>ZEDDERP | Best School Management Solution</title>

    <link rel="stylesheet" href="css/theme-style.css">
    <link rel="stylesheet" href="css/app-style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/addons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <style>
        
    </style>
</head>

<body class="overlay-scrollbar">

    <!-- nav bar  -->

    <?php include 'includes/navbar.php'; ?>

    <!-- sidebar -->

    <?php include 'includes/sidebar.php'; ?>

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

        <?php include './libs/class-data-prompt.php'; ?>

        <!-- ===========================-->
        <!-- End Empty class data prompt-->

        <div class="row">

            <!-- classes table -->
            <!-- ==============-->

            <div class="col-4 col-m-6 col-sm-6">
                <div class="card overlay-scrollbar">
                    <div class="card-header">
                        <h3>
                            Classes
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content classes-table table-card">

                    </div>
                </div>
            </div>


            <!-- section table --->
            <!-- ================-->
            <div class="col-4 col-m-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Section
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content section-table table-card">
                        
                    </div>
                </div>
            </div>

            <div class="col-4 col-m-12 col-sm-12">

                <!-- add class form -->
                <!-- ============== -->

                <div class="card">
                    <div class="card-header">
                        <h3>
                            Add New Classes
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <form action="#" method="post" id="class-form">
                            <div class="form-group">
                                <label for="class" id="class">
                                    Class Name :
                                </label>
                                <input type="text" name="class" id="class" placeholder="Enter Class Name">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="bg-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- add sections form -->
                <!-- ================= -->

                <div class="card">
                    <div class="card-header">
                        <h3>
                            Add New Section
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <form action="#" method="post" id="section-form">
                            <div class="form-group">
                                <label for="section" id="section">
                                    Section Name :
                                </label>
                                <input type="text" name="section" id="section" placeholder="Enter Section Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="bg-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <!-- =======-->

        <div class="col-12 footer">
            <center>
                <p>Copyright &copy; 2017 - <?php echo date(
                    'Y'
                ); ?> | ZeddLabz</p>
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

        $('.classes').addClass('active');

        // class save form function

        $('#class-form').submit(e => {
            e.preventDefault();
            let form_data = new FormData(document.getElementById('class-form'));
            $.ajax({
                url: "php/set-class.php",
                data: form_data,
                type: "POST",
                processData: false,
                contentType: false,
                cache: false,
                success: response => {
                    if (response == 1) {
                        setAlert(success, "Class added", true)
                        $('#class-form').trigger("reset")
                        $('#class-form input[type="text"]').focus()
                    }
                    if (response == 0) {
                        setAlert(danger, "Class cannot be added", true)
                        
                    }
                    if (response == 2) {
                        setAlert(primary, "Class already exist", true)

                    }
                    getClasses()
                }
            })

        })


        // adding section functionality

        $('#section-form').submit(e => {
            e.preventDefault();
            let form_data = new FormData(document.getElementById('section-form'));
            $.ajax({
                url: "php/set-section.php",
                data: form_data,
                type: "POST",
                processData: false,
                contentType: false,
                cache: false,
                success: response => {
                   
                    if (response == 1) {
                        setAlert(success, "Section added", true)
                        $('#class-form').trigger("reset")
                        $('#section-form input[type="text"]').focus()
                    }
                    if (response == 0) {
                        setAlert(danger, "Section cannot be added", true)
                        
                    }
                    if (response == 2) {
                        setAlert(primary, "Section already exist", true)

                    }
                    getSections()
                }
            })

        })


        // get classes from database

        getClasses = () => {
            $.ajax({
                url: "php/get-classes.php",
                success: response => {
                    $('.classes-table').html(response);
                }
            })
        }


        // get sections from database 

        getSections = () => {
            $.ajax({
                url: "php/get-sections.php",
                success: response => {
                
                    $('.section-table').html(response);
                }
            })
        }

        // deleting a class

        deleteClass = id => {
            $.ajax({
                url: "php/delete-class.php",
                method: "POST",
                data: {
                    'id': id
                },
                success: response => {
                  
                    getClasses()
                }
            })
            
        }

        // delete a section 

        deleteSection = id => {
            $.ajax({
                url: "php/delete-section.php",
                method: "POST",
                data: {
                    'id': id
                },
                success: response => {
                   
                    getSections()
                }
            })
            
        }

        $('.cancel-prompt').click(() => {
            $('.prompt-for-delete').fadeOut(50);

        })


        delete_class_confirm = id => {
          
        }
        getClasses()
        getSections()
    </script>

</body>

</html>