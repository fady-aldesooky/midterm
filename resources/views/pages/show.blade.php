
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD App - Midterm Exam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>CRUD app</h1>
        <div><i class="fa fa-fw fa-plus-circle"></i>
            <strong>Add User</strong>
            <a href="add_edit.html" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</a>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Sr#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th class="text-center">Record Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lina</td>
                        <td>lina@hotmail.com</td>
                        <td>(346) 325 7637</td>
                        <td align="center">2020-04-14</td>
                        <td align="center">
                            <a href="edit-users.php?editId=5015" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                            <a href="delete.php?delId=5015" class="text-danger" onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hassan</td>
                        <td>hassan@hotmail.com</td>
                        <td>(346) 325 7637</td>
                        <td align="center">2020-04-14</td>
                        <td align="center">
                            <a href="edit-users.php?editId=5014" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                            <a href="delete.php?delId=5014" class="text-danger" onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ahmed Mahmoud</td>
                        <td>amahmd@test.com</td>
                        <td>(888) 888-8888</td>
                        <td align="center">2020-04-14</td>
                        <td align="center">
                            <a href="edit-users.php?editId=5011" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                            <a href="delete.php?delId=5011" class="text-danger" onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>