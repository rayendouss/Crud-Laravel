<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $errors }} </li>
        @endforeach
    </ul>
@endif
    <form action="/register" method="post" role="form" enctype="multipart/form-data">
     {{csrf_field() }}
      <legend>Form title </legend>
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" value="{{old('username')}}"  required  >
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password"  required >
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email"  value="{{old('email')}}" required  >
         
          <label for="image"><b>Image</b></label>
          <input type="file" placeholder="Enter File" name="image" >
         
          <button type="submit">Login</button>
        

          
        </div>
      
    </form>
</body>
</html>