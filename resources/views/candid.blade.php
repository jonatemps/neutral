<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pagination Get Next Page Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Laravel Pagination Get Next Page Example</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
        </tr>
        @endforeach
    </table>

   <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a></li>
        <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">Previous</a></li>
    </ul>
</div>

</body>
</html>
