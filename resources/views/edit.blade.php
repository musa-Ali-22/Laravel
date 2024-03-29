<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="{{url('update/'.$data->id)}}" enctype="multipart/form-data">
  <div class="mb-3">
    @csrf
    @method('put')
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$data->name}}" aria-describedby="emailHelp">
    @error('name')
      <p>{{$message}}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" value="{{$data->email}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <p>{{$message}}</p>
      @enderror
    </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">passowrd</label>
    <input type="password" class="form-control" value="{{$data->password}}" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('password')
    <p>{{$message}}</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">phone Number</label>
    <input type="Number" class="form-control" name="phonenumber" value="{{$data->phonenumber}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('phonenumber')
    <p>{{$message}}</p>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <!-- <input type="text" name="" value="{{$data->file}}" id=""> -->
  <div class="mb-3 form-check">
    
  <input type="file" name="imagefile" id="">
  
  
    <img src="asset({{$data->file}})" alt="Image">


  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
</body>
</html>