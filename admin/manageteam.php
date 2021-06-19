<html>

<head>
    <title> Manege Team</title>
</head>

<body class="bg-light text-dark">
    <?php
include 'header.php';
?>
    <?php
include 'footer.php';
?>
    <div class="row justify-content-center mt-3">
        <div>
            <h2 class="row">Event Details</h2>
        </div>
        <div class="col-12">

            <div class="row">
                <div class="col-9">
                    Show <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>75</option>
                    </select> entries
                </div>
                <div>
                    Search <input type="search">
                </div>
            </div>
        </div>



    </div>
    <div class="container ">
        <div class="row justify-content-center mt-3">
            <table class=" table table-striped w-100">
                <thead>
                    <tr>
                        <th>Event Id</th>
                        <th>Event Name</th>
                        <th>Date-Time</th>
                        <th>Location</th>
                        <th>No of cameras</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="selectpositions.php">status</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>