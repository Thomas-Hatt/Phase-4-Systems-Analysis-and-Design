<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faculty | Rooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

        a {
            text-decoration: none;
        }

        #viewpoint_perspective {
            padding-top: 0.05em;
            padding-bottom: 0.5em;
            font-family: "Times New Roman", Times, serif;
            font-size: 13px;
            color: white;
            text-align: center;
            background-color: #212529;
        }

        #viewpoint_perspective a {
            color: #0000EE;
            font-size: 15px;
        }

        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        .calendar {
            width: 300px;
            padding-top: 1em;
            background-color: #fff;
            box-shadow: 0 5px 50px rgba(#000, 0.5);
            border-radius: 8px;
        }

        .calendar__picture {
            position: relative;
            height: 200px;
            padding: 20px;
            color: #fff;
            background: #262626 url("https://th.bing.com/th/id/OIP.aBM_2jn3Ar-ACQHK7oyb-wHaFP?rs=1&pid=ImgDetMain") no-repeat center / cover;
            text-shadow: 0 2px 2px rgba(#000, 0.2);
            box-sizing: border-box;

            &::before {
                content: "";
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                position: absolute;
                background: linear-gradient(to top, rgba(#000, 0.25), rgba(#000, 0.1));
            }

        }

        .calendar__date {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
            grid-gap: 10px;
            box-sizing: border-box;
        }

        .calendar__day {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 25px;
            font-weight: 600;
            color: #262626;

            &:nth-child(7) {
                color: #ff685d;
            }
        }

        .calendar__number {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 25px;
            color: #262626;

            &:nth-child(7n) {
                color: #ff685d;
                font-weight: 700;
            }
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
    </style>
</head>

<body>
    <?php
    $output = ''; // Initialize variable
    $inputValue = htmlspecialchars($_POST['value'] ?? '');
    $hideForm = false;

    if (isset($_POST['submitBtn'])) {
        $message = "Room request submitted! Awaiting review.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // Removed redundant `if-else` logic and simplified `$style` assignment
    $style = $hideForm ? "display: none;" : "";

    // Use the switch block to determine $output and update $hideForm
    switch ($inputValue) {
        // Example unavailable day
        case "23":
            $output = "All rooms are booked for November 23rd, 2025!\nPlease select a new date.";
            $hideForm = true;
            break;
        // Example unavailable day
        case "27":
            $output = "All rooms are booked for November 27th, 2025!\nPlease select a new date.";
            break;
        // User clicks submit in the form after filling out information
        case "Submit":
            $message = "Room request submitted!\nAwaiting review.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        default:
            $output = "All rooms are available today! Please select a time you'd like to reserve.";
            break;
    }

    // Reassign `$style` after `$hideForm` is potentially updated
    $style = $hideForm ? "display: none;" : "";
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li class="active"><a href="#">Rooms</a></li>
                    <li><a href="equipment.php">Equipment</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Jane Doe</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Viewpoint Perspective -->
    <div class="position-absolute" id="viewpoint_perspective">
        <h1>Faculty View</h1>
        <a href="../index.html">Return Home</a>
    </div>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
            </div>

            <!-- Main Content -->
            <div class="col-sm-8 text-left">
                <div class="row">

                    <!-- Calendar Source: https://codepen.io/corvus-007/pen/MzEKyJ -->
                    <div class="col-sm-4">
                        <div class="calendar">
                            <div class="calendar__picture">
                                <h2>November 14th,</h2>
                                <h3>2025</h3>
                            </div>
                            <form method="POST" action="">
                                <div class="calendar__date">
                                    <div class="calendar__day">M</div>
                                    <div class="calendar__day">T</div>
                                    <div class="calendar__day">W</div>
                                    <div class="calendar__day">T</div>
                                    <div class="calendar__day">F</div>
                                    <div class="calendar__day">S</div>
                                    <div class="calendar__day">S</div>
                                    <div class="calendar__number"></div>
                                    <div class="calendar__number"></div>
                                    <div class="calendar__number"></div>

                                    <div class="calendar__number"><input type="submit" value="1" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="2" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="3" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="4" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="5" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="6" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="7" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="8" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="9" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="10" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="11" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="12" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="13" name="value"></div>
                                    <div class="calendar__number" style="background-color: aliceblue;"><input
                                            type="submit" value="14" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="15" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="16" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="17" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="18" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="19" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="20" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="21" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="22" name="value"></div>
                                    <div class="calendar__number" style="color: gray; text-decoration: line-through;">
                                        <input type="submit" value="23" name="value">
                                    </div>
                                    <div class="calendar__number"><input type="submit" value="24" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="25" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="26" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="27" name="value"
                                            style="color: gray; text-decoration: line-through;"></div>
                                    <div class="calendar__number" style="background-color: paleturquoise;"><input
                                            type="submit" value="28" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="29" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="30" name="value"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events Body -->
                <div class="col-sm-8">
                    <div clas="upcoming-body">
                        <div id="output">

                            <!-- PHP Output -->

                            <p>
                                <?php echo $output;
                                ?>

                            <div style="<?php echo $style; ?>">
                                <form action="" method="POST">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="Enter first name...">

                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lastname" placeholder="Enter last name...">

                                    <label for="time">Time</label>
                                    <select id="time" name="time">
                                        <option value="time_val_1">10:30 A.M. - 11:30 A.M.</option>
                                        <option value="time_val_2">12:00 P.M. - 1:00 P.M.</option>
                                        <option value="time_val_3">2:00 P.M. - 3:00 P.M.</option>
                                        <option value="time_val_4">3:30 P.M. - 4:15 P.M.</option>
                                        <option value="time_val_5">5:00 P.M. - 7:15 P.M.</option>
                                    </select>
                                    <input type="submit" value="Submit" name="submitBtn">
                                </form>
                                </p>
                            </div>
                            <!-- End of PHP Output -->

                        </div>
                        <hr>
                    </div>
                </div>
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