<html>

<head>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/popper.min.js"></script>
  <script src="../bootstrap/jquery.min.js"></script>
  <style>
    body,
    html {
      height: 100%;
    }

    body {
      font-weight: 100;
      display: flex;
      overflow: hidden;
      background-color: black;
    }

    #form {
      min-height: 10rem;
      margin: auto;
      max-width: 50%;
      padding: .5rem;
    }

    .form-content {
      background: transparent;
      border: 1px solid white;
      color: white;
      display: block;
      margin: 1rem;
      padding: .5rem;
      width: calc(100% - 3rem);
    }
  </style>
</head>

<body>
  <form id="form" action="index/run" method="post">
    <input type="text" class="form-content" required="true" placeholder="Username" name="username"/>
    <input type="password" class="form-content" required="true" placeholder="Password" name="password"/>
    <input type="submit" class="form-content" name="Login" value="Login" />
  </form>
</body>

</html>