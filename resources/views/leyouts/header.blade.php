<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<title></title>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="text-align: center;">
        <li><a href="{{url('user/login')}}">Login</a></li>
        <li><a href="{{url('user/signup')}}">Register</a></li>
      </ul>
    </div>
  </nav>
  @yield('container')
  @yield('login')
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</html>