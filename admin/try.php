<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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
    <link rel="stylesheet" type="text/css" href="side.css">

    <? include 'adsart/admin/adminhome.php'; ?>
</head>




<div class="left">

    <div class="item active">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#customerSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Customer</a>

            <ul class="collapse lisst-unstyled" id="customerSubmenu">
                <li class="list-unstyled">
                    <a href="#">New Customer</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">View Customer</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Event</a>

            <ul class="collapse lisst-unstyled" id="employeeSubmenu">
                <li class="list-unstyled">
                    <a href="#">New Event</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">View Event</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#empSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Employee</a>

            <ul class="collapse lisst-unstyled" id="empSubmenu">
                <li class="list-unstyled">
                    <a href="#">New Employee</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">Viwe Employee</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#teamSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Team</a>

            <ul class="collapse lisst-unstyled" id="teamSubmenu">
                <li class="list-unstyled">
                    <a href="#">Manage Team</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#noticeSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Notice</a>

            <ul class="collapse lisst-unstyled" id="noticeSubmenu">
                <li class="list-unstyled">
                    <a href="#">New Notice</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">View Notice</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#usersSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Users</a>

            <ul class="collapse lisst-unstyled" id="usersSubmenu">
                <li class="list-unstyled">
                    <a href="#">Change User Level</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">Change Password</a>
                </li>
            </ul>
        </i>
    </div>

    <div class="item">
        <i class="fas fa-fw fa-map-marked-alt"><a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="fales"
                class="dropdown"> Reports</a>

            <ul class="collapse lisst-unstyled" id="reportsSubmenu">
                <li class="list-unstyled">
                    <a href="#">Event Reports</a>
                </li>
                <li class="list-unstyled">
                    <a href="#">Employee Event Reports</a>
                </li>
            </ul>
        </i>
    </div>
</div>
</body>

</html>



.left {
top: 50%;
float: left;
}

.left {
background: #337ab7;
display: inline-block;
white-space: nowrap;
width: 50px;
height: 100%;

}
.left:hover {
width: 250px;

}

.item:hover {
background-color: rgb(111, 144, 206);
height: 90px;
}

.left .fas {
margin: 15px;
width: 20px;
color: #fff;
}

i.fas {
font-size: 17px;
vertical-align: middle !important;
}

.item {
height: 90px;
overflow: hidden;
color: #fff;
}
a,
.dropdown{
padding-left: 15px;

color: white;

}
a:hover,
.dropdown:hover{
text-decoration: none;
color: rgb(42, 57, 192);
margin-bottom: 10px;
}

li:not(:last-child){
margin-bottom: 10px;
margin-top: 10px;
}