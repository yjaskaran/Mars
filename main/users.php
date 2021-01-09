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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/alert.css">
    <link rel="stylesheet" href="css/toolbar.css">


    <style>
        .alert {
            margin: 0px;
            padding: 5px 5px;
            position: fixed;
            top: 60px;
            right: 10px;
            width: auto;
            z-index: 999;
            display: none;
            border-radius: 10px 10px 10px 10px;
        }

        .alert-danger {
            background: var(--danger-color);
            color: white;
        }

        .alert-success {
            background: var(--success-color);
            color: white;
        }

        .alert-primary {
            background: var(--primary-color);
            color: white;
        }

        .alert-warning {
            background: var(--warning-color);
            color: white;
        }

        .close-alert {
            padding-left: 30px;
            font-size: 20px;
            cursor: pointer;
        }

        .overlay-scrollbar::-webkit-scrollbar {
            width: 9px;
            height: 9px;
            display: block;
            transition: ease-in-out;
        }

        .fab {
            position: absolute;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            padding-top: 10px;
            border-radius: 50%;
            background-color: var(--danger-color);
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.2);

        }

        .fab img {
            width: 60%;
        }

        .button {

            height: 40px;
            padding: 10px 20px;
            align-items: center;
            justify-content: center;
            border: 0px;
            color: white;
            border-radius: 20px;
        }

        .button img {
            height: 100%;
        }

        .hide {
            display: none;
        }

        .show-flex {
            display: flex;
        }

        .progress {
            display: flex;
            width: 30%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            height: 30vh;
            background-color: var(--main-bg-color);
            align-items: center;
            box-shadow: 0px 0px 1px 4px rgba(0, 0, 0, 0.2);
            justify-content: center;
            flex-direction: column;
        }

        .loading {
            display: block;
        }

        input[type="checkbox"] {
            width: 20px;
            /*Desired width*/
            height: 20px;
            /*Desired height*/
            cursor: pointer;
            color: var(--danger-color);
            /* -webkit-appearance: none; */
            /* appearance: none; */
        }

        .newrow {
            display: none;
        }
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

    <div class="wrapper" style="height:100vh">
        <div class="row animate__animated animate__bounceInDown alert">
            <div class="col-m-12 col-sm-12">
                <i class="fas alert-icon"></i> &nbsp; <span class="alert-text"></span>
                <i class="fas fa-times float-right close-alert" onclick="closeAlert()"></i>
            </div>
        </div>

        <div class="progress">
            <div class="progress-loading">
                <img src="assets/page-loading.svg" alt="" />

            </div>
            <div class="row loading">
                <h1>Loading..</h1>
            </div>
        </div>
        <!-- <div class="row fab" id="button">
            <div class="col-md-12">
                <span>
                    <center><img src="libs/icons/settings-cogs.svg" alt="" ></center> 
                </span>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12">
                <span>
                    <i class="fas fa-home"></i> Home / Users
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <form id="userform" method="post">
                        <div class="card-header">
                            <h3>

                                <button class="button bg-primary" id="add">
                                    <img src="libs/icons/plus-white.svg" alt="" /> &nbsp; <span class="float-right"> &nbsp; Add </span>
                                </button>
                                <button class="button bg-danger" id="delete">
                                    <img src="libs/icons/trash-2-white.svg" alt="" /> &nbsp; <span class="float-right"> &nbsp; Delete </span>
                                </button>
                            </h3>
                            <i class="fas fa-ellipsis-h"></i>

                        </div>
                        <!-- <div id="toolbar-options" data-toolbar-style="warning" class="hidden bg-warning">
                        <a href="#"><i class="fa fa-plane"></i></a>
                        <a href="#"><i class="fa fa-car"></i></a>
                        <a href="#"><i class="fa fa-bicycle"></i></a>
                    </div> -->

                        <div class="card-content data-table">

                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <!-- <script src="js/chart.js"></script> -->
    <script src="js/main.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/toolbar.js"></script>

    <script>
        $('.user').addClass('active');

        $('.progress').css("display", "none");
        $('#userform').submit((e) => {
            e.preventDefault();
        })

        getClientData = () => {

            $('.progress').fadeIn();
            $.ajax({
                url: "php/get-users.php",
                success: (data) => {
                    $('.progress').fadeOut(50);
                    $('.data-table').html(data);
                }
            });
        }
        setNewClient = el => {
            const col_name = $(el).attr('col_name');
            const val = $(el)[0].innerText;
            $.ajaxSetup({
                cache: false
            });
            $.ajax({
                url: "php/add-client.php",
                type: "POST",
                cache: false,
                data: {
                    col_name: col_name,
                    value: val
                },
                success: (response) => {
                    console.log(response);
                    if (response == 1) {
                        getClientData();
                    }
                }
            });
        }



        $('#add').click(() => {

            $('.newrow').show();

        });


        $('#delete').click(() => {

            $('#userform').submit((e) => {

                e.preventDefault();
                // $('.progress').removeClass('hide');
                $('.progress').fadeIn(50);



                var ids = [];
                $.each($("input[name='id']:checked"), function() {

                    ids.push($(this).val());
                });
                $.ajax({
                    url: "php/delete-client.php",
                    data: {
                        "ids": ids
                    },
                    type: "POST",
                    success: (response) => {
                        console.log(response)
                        if (response > 0) {
                            setAlert(success, 'School Deleted Succesfuly', true);
                            // $('.progress').addClass('hide');
                            getClientData();


                        }
                    }
                })
            });

        });

        editClient = el => {
            $('.progress').fadeIn(50);
            
            const col_name = $(el).attr('col_name');
            const rowid = $(el).attr('rowid');

            const val = $(el)[0].innerText;

            $.ajax({
                url: "php/update-client.php",
                type: "POST",
                async: true,
                data: {
                    col_name: col_name,
                    rowid: rowid,
                    value: val
                },
                success: (response) => {
                    console.log(response);
                    if (response == 1) {
                        getClientData();
                    }
                }
            });

        }
        getClientData();
    </script>

</body>

</html>