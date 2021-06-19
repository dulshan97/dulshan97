<html>

<head>
    <title>Change Password</title>

</head>

<body class="bg-light text-dark">
    <?php
include 'header.php';


?>

    <body>

        <div class="container mt-3">
            <div class="row justify-content-center mt-3">
                <h2>Change Password</h2>
            </div>
            <div class="row justify-content-center mt-3">
                <form>
                    <div class="form-group w-100">
                        <lable>Current Password</lable>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group w-100">
                        <lable>New Password</lable>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group w-100">
                        <lable>Confirm Password</lable>
                        <input type="text" class="form-control">
                    </div>

                    <div>
                        <a href="#" data-dismiss="modal" class="btn btn-primary">Reset Password</a>
                    </div>
                </form>


            </div>

        </div>

    </body>

</html>