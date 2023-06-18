<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    {{ __('You are logged in!') }}
    <table class="table table-responsive">
        <tr><th>Username</th><th>:</th><td>{{ $user->Username }}</td></tr>
        <tr><th>Name</th><th>:</th><td>{{ $user->Name }}</td></tr>
        <tr><th>Email</th><th>:</th><td>{{ $user->Email }}</td></tr>
        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
    </table>
  </div>
</body>
</html>
