<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title font-weight-bold">Employee List</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered mt-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Created</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->empNumber}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>