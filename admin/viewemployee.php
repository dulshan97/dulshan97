<html>

<head>
    <title> View Employee</title>
</head>

<body class="bg-light text-dark">
    <?php
include 'header.php';
?>
    <div class="row justify-content-center mt-3">
        <div>
            <h2 class="row">Employe Details</h2>
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
    <div class=" row justify-content-center mt-3 w-90">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Employee No</th>
                    <th>Employee Name</th>
                    <th>Status</th>
                    <th>User Level</th>
                    <th>Contact Number</th>
                    <th>Positions</th>
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
                    <td></td>
                    <td>
                        <ul class="list-inline m-0">

                            <li class="list-inline-item">
                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                            </li>
                            <li class="list-inline-item">
                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>