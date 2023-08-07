<h1>USER DETAILS</h1>

@foreach ($data as $id => $viewuser)
  <h3>  NAME : {{ $viewuser->name }}</h3>
  <h3>  EMAIL : {{ $viewuser->email }}</h3>
  <h3>  PASSWORD : {{ $viewuser->pass }}</h3>
  <h3>   CONFIRM PASSWORD : {{ $viewuser->cpass }}</h3>
@endforeach
