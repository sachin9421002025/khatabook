<!DOCTYPE html>
<head>
  <title>Login - Khatabook</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="css/target-admin.css">
  <link rel="stylesheet" href="css/custom.css">

</head>

<body class="account-bg">
<div class="account-wrapper">
    <div class="account-body">
      <h3 class="account-body-title">Welcome to Khatabook</h3>
      <h5 class="account-body-subtitle">Please sign in to get access.</h5>
      <form class="form account-form" method="POST">
        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Username" tabindex="1">
        </div> 
        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" tabindex="2">
        </div> 
        <div class="form-group">
          <button type="button" class="btn btn-primary btn-block btn-lg" onclick="userLogin()" tabindex="4">
            Sign-in 
          </button>
        </div> 
      </form>
    </div> 
  </div> 
  <script src="js/libs/jquery-1.10.1.min.js"></script>
  <script src="js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="js/libs/bootstrap.min.js"></script>
  <!-- App JS -->
  <script src="js/target-admin.js"></script>
  <!-- Plugin JS -->
  <script src="js/target-account.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
