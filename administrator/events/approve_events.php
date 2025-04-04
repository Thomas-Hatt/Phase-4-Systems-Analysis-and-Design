<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Approve Events</title>
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
            height: 250%;
        }

        .hidden {
            display: none;
        }

        .main_header {
            text-decoration: underline;
            text-underline-position: under;
            margin-bottom: 1.5em;
        }
    </style>
</head>

<body>
    <?php
    $output = ''; // Initialize variable
    $inputValue = htmlspecialchars($_POST['value'] ?? '');

    // Submit button clicked, display message
    if (isset($_POST['submitBtn'])) {
        $message = "Event Approved!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // Cancel button clicked, display message
    if (isset($_POST['cancelBtn'])) {
        $message = "Event cancelled!";
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
                    <li class="active"><a href="events_landing_page.html">Events</a></li>
                    <li><a href="../rms/rms_landing_page.html">Rooms</a></li>
                    <li><a href="../equipment/eqpmt_landing_page.html">Equipment</a></li>
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
                        <h1 class="main_header">Approve / Deny Event Requests</h1>
                        <hr>

                        <!-- Current Requests -->
                        <!-- Example Request #1 -->
                        <h2 style="margin-bottom: 1.5em;">Current Request #1:</h2>
                        <p>
                            <strong>Requested By:</strong> John Smith<br>
                            <strong>Date Requested:</strong> August 16th, 2025 (2 days ago)<br>
                            <strong>Time Frame:</strong> 11:30 A.M. - 2:30 P.M. <br>
                            <strong>Event Title:</strong> More Than Pink Walk <br>

                            <strong>Event Description</strong> <br>
                        <p>The MORE THAN PINK Walk® is Komen’s signature fundraising event. It’s a day where we can all
                            can put aside everything else in our lives and share our space, our stories, our laughter,
                            and our tears to raise money that saves lives. When we come together, we’re more than one
                            person living with breast cancer, and instead, part of a community of people ready to take
                            action. Find a walk.
                        </p>


                        <!-- Warning just above the buttons -->
                        <p class="warning_message" style="width: 50%; font-size: 14px; margin-top: 1.2em;">Warning!
                            Clicking
                            "Deny Event Request" is unrecoverable.</p> <br>

                        <!-- Approve Event Button -->
                        <form method="POST" action="">
                            <div class="col-sm-6">
                                <input type="submit" type="submit" class="submit_button" value="Approve Event"
                                    name="submitBtn" style="padding: 0.5em; width: 60%; margin-top: 1.5em;">
                            </div>
                        </form>

                        <!-- Deny Event Button -->
                        <form method="POST" action="">
                            <div class="col-sm-6">
                                <input type="submit" type="submit" class="cancel_button" value="Cancel Event"
                                    name="cancelBtn" style="padding: 0.5em; width: 60%; margin-top: 1.5em;">
                            </div>
                        </form>
                        <hr>
                        <br>
                        <br>

                        <!-- Dummy <h2> because of some glitches -->
                        <h2 style="margin-bottom: 1.5em;"></h2>

                        <!-- Past Event Requests -->
                        <hr>
                        <h2 style="margin-bottom: 1.5em;">Past Event Requests</h2>
                        <!-- Example Request #2 -->
                        <h2 style="margin-bottom: 1.5em;">Past Request #1:</h2>
                        <p>
                            <strong>Requested By:</strong> Sally Brooks<br>
                            <strong>Date Requested:</strong> August 14th, 2025 (4 days ago)<br>
                            <strong>Time Frame:</strong> 12:00 P.M. - 1:30 P.M. <br>
                            <strong>Event Title:</strong> Computer Programmers Event <br>

                            <strong>Event Description</strong> <br>
                        <p>Get ready to embark on thrilling coding projects that
                            challenge your problem-solving skills and ignite your imagination. From creating
                            interactive websites to
                            developing mobile apps and exploring artificial intelligence, our club offers a wide
                            range of projects designed
                            to keep you engaged and inspired.
                        </p>

                        <strong>Status: Approved</strong> <br>
                        <hr>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 sidenav">
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