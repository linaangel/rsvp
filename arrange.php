<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../app/favicon.ico">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <title>RSVP: Arrange</title>
</head>

<body>
    <?php include 'header.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-md-1">
                    <img src="../app/img/mesallena.png" width="70px" alt="Create" align="bottom">
                </div>
                <div class="col-xs-9 col-md-11">
                    <h1>Open an Existing Event</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 cont-rsvp" align="center">
                    <h2><strong>Welcome Back!</strong></h2>
                    <form>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i><input type="email" class="form-control input-rsvp" id="emailuser" placeholder="User Email">
                      </div>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-lock"></i><input type="password" class="form-control" id="password" placeholder="Password">
                     </div>
                      <div align="center"><button type="submit" class="btn btn-primary btn-lg btn-rsvp">Log In</button></div>
                    </form>
                    <hr width="100"><h2>or</h2><hr width="100">
                    <a class="btn btn-primary btn-lg btn-facebook" href="/accounts/facebook/login/">Log In with Facebook</a>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <br>
        <?php include 'footer.php';
    ?>
</body>

</html>