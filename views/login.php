<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login to glitcholotl</title>
  <style>
    form {
      width: 250px;
      margin: 0 auto;
      margin-top: 5em;
    }

    input {
      width: 100%;
      display: block;
      margin: 0.5em;
      padding: 0.5em;
    }
    input[type=submit] {
      width: 50%;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <form method="post">
    <input type="text" name="username" placeholder="Username" max="32" />
    <input type="password" name="password" placeholder="Password" max="32" />
    <input type="submit" />
  </form>
</body>
</html>