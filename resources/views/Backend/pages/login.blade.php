<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{url('/backend/css/login.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <img src="backend/bprofile.png" alt="">
    
    </div>

    <!-- Login Form -->
    <form action="{{route('do.login')}}" method="post">
      @csrf
      <input required type="text" id="login" class="fadeIn second" name="email" placeholder="Enter email">
      <input required type="password" id="password" class="fadeIn third" name="password" placeholder="Enter password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
</body>
</html>