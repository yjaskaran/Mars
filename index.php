
<!-- DUMMY CODE FOR VISUALS ONLY -->


<!-- UNCOMMENT WHEN USING DYNAMICALLY WITH DATA -->
<!-- <?php
// include './libs/session.php';
?> -->


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
        <div class="row animate__animated animate__bounceInDown alert">
            <div class="col-m-12 col-sm-12">
                <i class="fas alert-icon"></i> &nbsp; <span class="alert-text"></span>
                <i class="fas fa-times float-right close-alert" onclick="closeAlert()"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="counter bg-primary">
                    <p>
                        <i class="fas fa-graduation-cap "></i>
                    </p>
                    <h3>100+</h3>
                    <p>Students</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="counter bg-warning">
                    <p>
                        <i class="fas fa-users"></i>
                    </p>
                    <h3>90+</h3>
                    <p>Present</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="counter bg-success">
                    <p>
                        <i class="fas fa-bus"></i>
                    </p>
                    <h3>9+</h3>
                    <p>Absent</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="counter bg-danger">
                    <p>
                        <i class="fas fa-hand-paper"></i>
                    </p>
                    <h3>100+</h3>
                    <p>Leave</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Table
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project</th>
                                    <th>Manager</th>
                                    <th>Status</th>
                                    <th>Due date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>React</td>
                                    <td>Jaskaran</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-success"></i>
                                            Completed
                                        </span>
                                    </td>
                                    <td>17/07/2020</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vue</td>
                                    <td>Jashan</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-warning"></i>
                                            In progress
                                        </span>
                                    </td>
                                    <td>18/07/2020</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Laravel</td>
                                    <td>Harjeet</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-warning"></i>
                                            In progress
                                        </span>
                                    </td>
                                    <td>17/07/2020</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Django</td>
                                    <td>Kushwant</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-danger"></i>
                                            Delayed
                                        </span>
                                    </td>
                                    <td>07/07/2020</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MEAN</td>
                                    <td>John Cena</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-primary"></i>
                                            Pending
                                        </span>
                                    </td>
                                    <td>20/08/2020</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>MERN</td>
                                    <td>Dean Ambrose</td>
                                    <td>
                                        <span class="dot">
                                            <i class="bg-primary"></i>
                                            Pending
                                        </span>
                                    </td>
                                    <td>20/08/2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Progress bar
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <div class="progress-wrapper">
                            <p>
                                Less than 1 hour
                                <span class="float-right">50%</span>
                            </p>
                            <div class="progress">
                                <div class="bg-success" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <p>
                                1 - 3 hours
                                <span class="float-right">60%</span>
                            </p>
                            <div class="progress">
                                <div class="bg-primary" style="width:60%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <p>
                                More than 3 hours
                                <span class="float-right">40%</span>
                            </p>
                            <div class="progress">
                                <div class="bg-warning" style="width:40%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <p>
                                More than 6 hours
                                <span class="float-right">20%</span>
                            </p>
                            <div class="progress">
                                <div class="bg-danger" style="width:20%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Chartjs
                        </h3>
                    </div>
                    <div class="card-content">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/main.js"></script>
    <script src="js/alert.js"></script>

    <script>
          $('.index').addClass('active');
    </script>

</body>

</html>