<html>

<head>
    <title>Change User Level</title>

</head>

<body class="bg-light text-dark">
    <?php
include 'header.php';


?>
    <div class="container mt-3">
        <div class="row justify-content-center mt-3">
            <h2>Change User Level</h2>
        </div>
        <div class="row justify-content-center mt-3">
            <form>
                <div class="form-group w-100">
                    <lable>Employee Name</lable>
                    <select class="form-control">
                        <option></option>


                    </select>
                </div>
                <div class="form-group w-100">
                    <lable>User Level</lable>
                    <select class="form-control">
                        <option>Temporary</option>
                        <option>Permanent</option>

                    </select>
                </div>
                <div>
                    <a href="#" data-dismiss="modal" class="btn btn-primary">Change</a>
                </div>
            </form>


        </div>

    </div>
</body>

</html>