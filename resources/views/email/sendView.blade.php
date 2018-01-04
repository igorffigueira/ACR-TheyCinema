<!DOCTYPE html>
<html>

<head>
<head>
<body>
<h1> Hello!!! </h1>
<br>

<h2>Help us secure your TheyCinema account by verifying your email.<br>This lets you access all of TheyCinema's features. </h2>

<h1>  To verify email  <a href="{{route('sendEmailDone',["email"=>$user->email,"verifyToken"=>$user->verifyToken])}}"><strong>CLICK HERE</strong></a></h1>
<br><br><br>
You’re receiving this email because you recently created a new Theycinema  account. If this wasn’t you, please ignore this email.
</body>

</html>
