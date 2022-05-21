<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Employess</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
        <div>
            <h1 class="mb-4 mt-4">Employees</h1>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
            <a class="btn btn-primary float-right" href="{{ url('Employees/create') }}">Add Employee</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Action</th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->FirstName }}</td>
                        <td>{{ $employee->LastName }}</td>
                        <td>{{ $employee->Gender}}</td>
                        <td>{{ $employee->Birthday}}</td>
                        <td><a class="btn btn-primary mr-md-2" href="{{ url('Employees/edit/'.$employee->id) }}">Edit</a>
                        </td>
                        <div>
                            <td><a type="submit" class="btn btn-info btn-danger" href="{{ url('Employees/delete/'.$employee->id) }}">Delete</a></td>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>

</body>

</html>