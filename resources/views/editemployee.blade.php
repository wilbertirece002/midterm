<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div>
        <h1 class="mb-4 mt-4">Edit Employee</h1>
    </div>
    <form class="row g-3" method="post" action="{{ url('Employees/'.$employee->id) }}">
        {{ csrf_field() }}

        <div class="col-md-6">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" value="{{ old('FirstName') ?? $employee->FirstName }}"
                class="form-control">
        </div>
        <div class="col-md-6">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="firstname" value="{{ old('LastName') ?? $employee->LastName }}"
                class="form-control">
        </div>
        <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" name="gender" value="{{ old('Gender') ?? $employee->Gender }}"
                class="form-control">
        </div>
        <div class="col-mt-4 col-md-6 ">
            <label for="birthday" class="form-label" >Birthday</label>
            <input type="date" class="form-control" value="{{ old('Birthday') ?? $employee->Birthday }}"  name="birthday">
        </div>
        <div class="col-12  ">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</body>

</html>
