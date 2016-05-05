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
    <title>RSVP: New Event</title>
</head>

<body>
    <?php include 'header.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-md-1">
                    <img src="../app/img/mesa.jpg" width="70px" alt="Create" align="bottom">
                </div>
                <div class="col-xs-9 col-md-11">
                    <h1>Create a New Event</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form action="../app/php/new.php" method="post" id="new">
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i><input type="text" class="form-control input-rsvp" name="name" id="name" placeholder="Event Name" required>
                      </div>
                      <div class="input-group" name="type">
                          <div class="input-group-addon input-rsvp addon-rsvp">Type</div>
                          <select class="form-control" name="type" id="type" required>
                          <option value="Wedding">Wedding</option>
                          <option value="Birthday">Birthday</option>
                          <option value="Shower">Shower</option>
                          <option value="Business">Business Event</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-envelope"></i><input type="email" class="form-control input-rsvp" name="email" id="email" placeholder="Guest Emails separated by semicolon" required>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="ask"> Ask Food Preference / Allergies
                        </label>
                      </div>
                      <div align="center"><button type="submit" class="btn btn-primary btn-lg btn-rsvp">Create</button></div>
                    </form>
                </div>
                <div class="col-xs-12 col-md-6">
                   
                   <div class="row">
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 1
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 2
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 3
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 4
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 5
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            Event Name 6
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Open RSVP</div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
        <?php include 'footer.php';
    ?>
</body>

</html>