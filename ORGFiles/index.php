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
    <title>RSVP</title>
</head>

<body>
    <?php include 'header.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img src="../app/img/logo.png" height="115px" alt="RSVP Logo">
                </div>
                <div class="col-xs-12 col-md-9">
                    <p>Welcome to RSVP, we will help you organizing your Guest for a great experience during your event. Give us some information and we will give you Seating arrangements!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>Arrange your event!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <a href="test.php"><img class="img-responsive center-block" src="../app/img/create.png" height="300px" alt="RSVP Logo"></a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a href="arrange.php"><img class="img-responsive center-block" src="../app/img/open.png" height="300px" alt="RSVP Logo"></a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php include 'footer.php';
    ?>
</body>

</html>