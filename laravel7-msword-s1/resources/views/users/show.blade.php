<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">User's Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="/users/wordeksport/{{ $user->id }}" class="btn btn-sm btn-primary">Eksport Word</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
