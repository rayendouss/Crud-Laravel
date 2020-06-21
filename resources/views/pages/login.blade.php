<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
    <form action="/login" method="post" role="form">
     {{csrf_field() }}
      <legend>Form title </legend>
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required  >
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required >
      
          <button type="submit">Login</button>
        
        </div>
      
    </form>
</body>
</html>