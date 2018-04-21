<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method=post action='/login' id="f1">
            email <br><input type="text" name='uid'><br>
            password<br><input type="password" name='pass'><br>
            <button form="f1" type="submit" value="Log In" name="login"  >Log In</button><br>
            {{csrf_field()}}
    <form>
  </body>
</html>
