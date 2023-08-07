<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <h1>
        <center>
            <div class="border border 2px bg-dark text-light">ALL USERS DATA</div>
        </center>
    </h1>
    <td><a href="{{ route('form') }}"class="btn btn-outline-warning">ADD NEW</a></td><br><br>
    <table class="table table-bordered border-primary ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col"> CONFIRM PASSWORD</th>
            <th scope="col">VIEW</th>
            <th scope="col">UPDATE</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
   @foreach ($data as $id => $user)
   <tr>
    <th>{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->pass }}</td>
    <td>{{ $user->cpass }}</td>
    <td><a href="{{ route('view', $user->id) }}" class="btn btn-outline-secondary btn-sm">view</a></td>
    <td><a href="{{ route('updatepage',$user->id) }}"class="btn btn-outline-danger btn-sm">update</a></td>
    <td><a href="{{ route('delete',$user->id) }}"class="btn btn-outline-success btn-sm">delete</a></td>
  </tr>
   @endforeach
        </tbody>
      </table>
      <a href="{{ route('login') }}"class="btn btn-outline-primary">LOG OUT</a>
</body>
</html>
