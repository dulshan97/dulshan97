<?php
?>
<html>


<head>

    <title>adminhome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/brands.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="header.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <style>

        </style>
        <div class="container">
            <a class="navbar-brand" href="#"><img src="image/logo.png" height="40"> ADS ART Event Management System</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="left">

        <div class="item active">
            <i class="fas fa-fw fa-user-alt"><a href="#customerSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Customer</a>

                <ul class="collapse lisst-unstyled" id="customerSubmenu">
                    <li class="list-unstyled">
                        <a href="newcustomer.php">New Customer</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="viewcustomer.php">View Customer</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-tasks"><a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Event</a>

                <ul class="collapse lisst-unstyled" id="employeeSubmenu">
                    <li class="list-unstyled">
                        <a href="newevent.php">New Event</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="viewevent.php">View Event</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-id-card-alt"><a href="#empSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Employee</a>

                <ul class="collapse lisst-unstyled" id="empSubmenu">
                    <li class="list-unstyled">
                        <a href="newemployee.php">New Employee</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="viewemployee.php">View Employee</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-sliders-h"><a href="#teamSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Team</a>

                <ul class="collapse lisst-unstyled" id="teamSubmenu">
                    <li class="list-unstyled">
                        <a href="manageteam.php">Manage Team</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-envelope"><a href="#noticeSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Notice</a>

                <ul class="collapse lisst-unstyled" id="noticeSubmenu">
                    <li class="list-unstyled">
                        <a href="newnotice.php">New Notice</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="viewnotice.php">View Notice</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-address-card"><a href="#usersSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Users</a>

                <ul class="collapse lisst-unstyled" id="usersSubmenu">
                    <li class="list-unstyled">
                        <a href="changeuserlevel.php">Change User Level</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="changepassword.php">Change Password</a>
                    </li>
                </ul>
            </i>
        </div>

        <div class="item">
            <i class="fas fa-fw fa-columns"><a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="fales"
                    class="dropdown"> Reports</a>

                <ul class="collapse lisst-unstyled" id="reportsSubmenu">
                    <li class="list-unstyled">
                        <a href="eventreport.php">Event Reports</a>
                    </li>
                    <li class="list-unstyled">
                        <a href="employeeeventreport.php">Employee Event Reports</a>
                    </li>
                </ul>
            </i>
        </div>
    </div>

</body>



</html>