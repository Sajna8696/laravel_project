<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('style.css') }}">
<script src="{{ asset('script.js') }}"></script>
</head>
<body>

    <center><b>
    <form  class=" text-light col-md-4"  action="{{ route('form') }}"  method="POST"  id="addfrom">
        @csrf
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSLU5_eUUGBfxfxRd4IquPiEwLbt4E_6RYMw&usqp=CAU" alt="" id="profile-pic">

        <div class="col-md-8">
          <label for="uname" class="form-label">NAME:</label>
          <input type="text" class="form-control" id="uname" placeholder="NAME" name="name" required>
        </div><br>
        <div class="col-md-8">
            <label for="uname" class="form-label">EMAIL:</label>
            <input type="email" class="form-control"name="email" placeholder="ENTER EMAIL" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
          </div><br>
        <div class="col-md-8">
            <label for="pwd" class="form-label">PASSWORD:</label>
          <div class="input-group col-md-4">
            <input type="password" class="form-control" id="password"name="pass"placeholder="PASSWORD" aria-label="Password" aria-describedby="password-toggle">
            <button class="btn btn-outline-light" required="required"type="button" id="password-toggle" onclick="togglePasswordVisibility()">
              <i class="bi bi-eye-slash"></i>
                </button>
            </div>
            </div>
    <br>
          <div class="col-md-8">
            <label class="form-label">COMFIRM PASSWORD:</label>
          <div class="input-group col-md-4">
            <input type="password" class="form-control" id="test"name="cpass"placeholder="COMFIRM PASSWORD" aria-label="Password" aria-describedby="test-toggle">
            <button class="btn btn-outline-light" required="required"type="button" id="password-toggle" onclick="box()">
              <i class="bi bi-eye-slash"></i>
                </button>
            </div>
          </div>

          </div>
          <br>
        <button type="submit" onclick="submitdata(event)" id="submitbtn" class="btn btn-outline-light">SUBMIT  </button>
        <button type="reset" class="btn btn-outline-light">  RESET</button>

        <br>
        </form>

        <b> <a href="{{ '/login' }}">ALLREDY ACCCOUNT? CLICK HERE</a></b>
    </b></center>
</body>
</html>

