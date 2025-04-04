<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Request Equipment Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 17px;
        }

        #title {
            font-size: 2em;
            padding-bottom: 1.5em;
        }

        h1 {
            font-size: 2em;
        }

        .upcoming-body,
        #output {
            margin-top: 1em;
            min-width: fit-content;
            justify-content: center;
        }

        h3 {
            font-size: 18px;
        }

        input,
        button,
        submit {
            border: none;
            min-width: 35px;
            text-align: center;
        }

        /* PHP Contact Form */
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .col-sm-2.sidenav {
            position: relative;
            height: 380%;
        }

        .hidden {
            display: none;
        }

        .main_header {
            text-decoration: underline;
            text-underline-position: under;
            margin-bottom: 1.5em;
        }



        .checkbox-wrapper-64 input[type="checkbox"] {
            visibility: hidden;
            display: none;
        }

        .checkbox-wrapper-64 *,
        .checkbox-wrapper-64 ::after,
        .checkbox-wrapper-64 ::before {
            box-sizing: border-box;
        }

        /* The switch - the box around the slider */
        .checkbox-wrapper-64 .switch {
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 2em;
        }

        /* Hide default HTML checkbox */
        .checkbox-wrapper-64 .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .checkbox-wrapper-64 .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            border: 1px solid #adb5bd;
            transition: .4s;
            border-radius: 30px;
        }

        .checkbox-wrapper-64 .slider:before {
            position: absolute;
            content: "";
            height: 1.4em;
            width: 1.4em;
            border-radius: 20px;
            left: 0.27em;
            bottom: 0.25em;
            background-color: #adb5bd;
            transition: .4s;
        }

        .checkbox-wrapper-64 input:checked+.slider {
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        .checkbox-wrapper-64 input:focus+.slider {
            box-shadow: 0 0 1px #007bff;
        }

        .checkbox-wrapper-64 input:checked+.slider:before {
            transform: translateX(1.4em);
            background-color: #fff;
        }
    </style>
</head>

<body>

    <?php
    $output = ''; // Initialize variable
    $inputValue = htmlspecialchars($_POST['value'] ?? '');

    // Submit button clicked, display message
    if (isset($_POST['submitBtn'])) {
        $message = "Equipment request submitted! Awaiting review.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Futura University</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../events/events_landing_page.html">Events</a></li>
                    <li><a href="../rms/rms_landing_page.html">Rooms</a></li>
                    <li class="active"><a href="../equipment/eqpmt_landing_page.html">Equipment</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Jacob James</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Viewpoint Perspective -->
    <div class="position-absolute" id="viewpoint_perspective">
        <h1>Administrator View</h1>
        <a href="../index.html">Return Home</a>
    </div>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
            </div>

            <!-- Main Content -->
            <div class="col-sm-8 text-left">

                <div class="upcoming-body">
                    <div id="output">
                        <h1 class="main_header">Equipment Request Form</h1>

                        <!-- Available Equipment -->
                        <!-- Checkbox wrapper found at https://getcssscan.com/css-checkboxes-examples -->
                        <h2 style="margin-bottom: 1.5em;">Available Equipment:</h2>

                        <!-- First Row of Available Equipment -->
                        <div class="row three-columns" style="margin-top: 2.5em; padding: 1.25em;">
                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <p>Autoclave (83 available out of 125)</p>
                                        <br>
                                    </div>
                                    <input type="number" class="quantity_updown" name="quantity" min="0" max="83"
                                        step="1" value="0">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <p>Canon MegaTank MAXIFY GX4020 Printer (20 available out of 215)</p>
                                    </div>
                                    <input type="number" class="quantity_updown" name="quantity" min="0" max="20"
                                        step="1" value="0">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <p>HP 15.6" Laptop (50 available out of 612)</p>
                                    </div>
                                    <input type="number" class="quantity_updown" name="quantity" min="0" max="50"
                                        step="1" value="0">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Second Row of Available Equipment -->
                        <div class="row three-columns" style="margin-top: 2.5em; padding: 1.25em;">
                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <p>Bulletin Boards (100 available out of 500)</p>
                                    </div>
                                    <input type="number" class="quantity_updown" name="quantity" min="0" max="100"
                                        step="1" value="0">
                                    <hr>
                                </div>
                            </div>

                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <p>Office Chairs (360 available out of 1852)</p>
                                    </div>
                                    <input type="number" class="quantity_updown" name="quantity" min="0" max="360"
                                        step="1" value="0">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="row">

                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <p>Projectors (163 available out of 680)</p>
                                        <br>
                                    </div>

                                    <div class="col-sm text-center">
                                        <div class="checkbox-wrapper-64">
                                            <input type="number" class="quantity_updown" name="quantity" min="0"
                                                max="163" step="1" value="0">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <br>
                        <br>

                        <!-- Unavailable Equipment -->
                        <!-- Checkbox wrapper found at https://getcssscan.com/css-checkboxes-examples -->
                        <h2 style="margin-bottom: 1.5em; color: gray;">Unavailable Equipment:</h2>

                        <!-- First Row of Unavailable Equipment -->
                        <div class="row three-columns" style="margin-top: 2.5em; color: #A9A9A9; padding: 1.25em;">
                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </div>
                                    <div class="col-sm">
                                        <p>Petri Dish (0 available, 85 in circulation)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </div>
                                    <div class="col-sm">
                                        <p>Microscopes (0 available, 26 in circulation)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 text-center">
                                <div class="row">
                                    <div class="col-sm text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </div>
                                    <div class="col-sm">
                                        <p>Documenting Cameras (0 available, 68 in circulation)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- Contact Form / Contact Information -->

                        <form action="" method="POST">
                            <!-- First Name -->
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Enter first name...">

                            <!-- Last Name -->
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Enter last name...">

                            <!-- Employee ID -->
                            <label for="empID">Employee ID</label>
                            <input type="text" id="empID" name="employeeID" placeholder="Enter your Employee ID...">

                            <!-- Need for Equipment Request -->
                            <label for="eventDesc">Need for Equipment Request</label>
                            <textarea id="subject" name="eventDesc"
                                placeholder="Write about the reason for your request!..."
                                style="height:150px; resize: none;"></textarea>

                            <!-- Submit User Information -->
                            <input type="submit" class="submit_button" value="Submit Request" name="submitBtn">

                        </form>
                        </p>

                    </div>
                    <hr>
                </div>




            </div>
            <div class="col-sm-2 sidenav">
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid text-center">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap"
                viewBox="0 0 16 16">
                <path
                    d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z" />
            </svg>
            Futura University CRMS
        </p>
    </footer>

</body>

</html>