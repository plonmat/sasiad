<html>
  <head>
      <title>Register</title>
      <meta charset=UTF-8>
  </head>
  <body>
      <p>REGISTER FORM</P>
        <form method="POST" action="registerACTION.php">
          <table>
            <tr><td>Name</td><td><input type="text" name="name"></td></tr>
            <tr><td>Surname</td><td><input type="text" name="surname"></td></tr>
            <tr><td>Email</td><td><input type="email" name="email"></td></tr>
            <tr><td>Password</td><td><input type="password" name="password"></td>
            <tr><td>Repassword</td><td><input type="password" name="repassword"></td></tr>
            <tr><td><input type="submit"></td><td><input type="reset"></td></tr>
          </table>

          <a href="login.php">LOGOWANIE</a>

  </body>
</html>
