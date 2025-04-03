<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faculty | Rooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
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
            height: 160%;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $output = ''; // Initialize variable
    $inputValue = htmlspecialchars($_POST['value'] ?? '');

    // Display information
    $displaySubmitBtn = true;
    $displayModifyBtn = false;

    // Submit button clicked, display message
    if (isset($_POST['submitBtn'])) {
        $message = "Event information submitted! Awaiting review.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // Modify button clicked, display message
    if (isset($_POST['modifyBtn'])) {
        $message = "Event information modified! Awaiting review.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    // Use the switch block to determine $output and update $changeSubmitBtn
    switch ($inputValue) {

        // Example "normally" unavailable day, modify button added
        case "23":
            $output = "An event is already booked on November 23rd, 2025!\nPlease select a new date, or edit the event here.";
            $displayModifyBtn = true;
            $displaySubmitBtn = false;
            break;

        // Example "normally" unavailable day, modify button added
        case "28":
            $output = "An event is already booked on November 28th, 2025!\nPlease select a new date, or edit the event here.";
            $displayModifyBtn = true;
            $displaySubmitBtn = false;
            break;

        // User clicks 'Submit' button that submits information for a new event
        case "Submit":
            $message = "Event request submitted!\nAwaiting review from Admin.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            break;

        // User clicks 'Modify Event' button, which modifies an event and notifies an Admin (not included in this code)
        case "Modify":
            $message = "Event modification submitted!\nAwaiting review from Admin.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            break;

        // All events are available for the selected date
        default:
            $output = "All event times are available today! Please fill out your event information.";

            $displaySubmitBtn = true;
            $displayModifyBtn = false;
            break;
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
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#">Events</a></li>
                    <li><a href="rms.php">Rooms</a></li>
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

                                    <div class="calendar__number">
                                        <input type="submit" value="23" name="value" style="background-color: blue;">
                                    </div>
                                    <div class="calendar__number"><input type="submit" value="24" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="25" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="26" name="value"></div>
                                    <div class="calendar__number"><input type="submit" value="27" name="value" "></div>

                                    <div class=" calendar__number"><input type="submit" value="28" name="value"
                                            style="background-color: blue;"></div>
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

                                <label for="eventTitle">Event Title</label>
                                <input type="text" id="eventTitle" name="eventTitle"
                                    placeholder="Write a title for your event...">

                                <label for="eventDesc">Event Description</label>
                                <textarea id="subject" name="eventDesc" placeholder="Write about your event!..."
                                    style="height:150px; resize: none;"></textarea>

                                <!-- Submit Event Information -->
                                <div class="<?php echo $displaySubmitBtn ? '' : 'hidden'; ?>">
                                    <input type="submit" class="submit_button" value="Submit Request" name="submitBtn">
                                </div>

                                <!-- (hidden unless an occupied date is selected) -->
                                <div class="<?php echo $displayModifyBtn ? '' : 'hidden'; ?>">

                                    <!-- Warning just above the "Modify Event" button -->
                                    <p class="warning_message">Warning! You are modifying an event. Clicking
                                        "Modify
                                        Event" will request an admin to review this modification.</p>

                                    <!-- Modify Event Button -->
                                    <div class="col-sm-6">
                                        <input type="submit" type="submit" class="modify_button" value="Modify Event"
                                            name="modifyBtn">
                                    </div>
                                </div>

                            </form>
                            </p>
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