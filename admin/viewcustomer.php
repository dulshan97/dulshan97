<html>


<head>

    <title>View customer</title>


</head>

<body class="bg-light text-dark">
    <?php
include 'header.php';
?>
    <div class="row justify-content-center mt-3">
        <div>
            <h2 class="row">Customer Details</h2>
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

    <div class="container">
        <div class="row justify-content-center mt-3">

            <table class=" table table-striped w-100">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
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
    </div>


</body>

</html>