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
    <title>RSVP: Table Categories</title>
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
                    <h1>Guest Categories</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>Please Add the Desk's Category Name</h2>
                    <form action="../app/php/categories.php" method="post" id="categories">
                       <div class="input-group">
                          <div class="input-group-addon input-rsvp addon-rsvp">Select the Event</div>
                          <select class="form-control" name="event" id="event" required>
                          <option value="Event1">Event 1</option>
                          <option value="Event2">Event 2</option>
                          <option value="Event3">Event 3</option>
                          <option value="Event4">Event 4</option>
                        </select>
                      </div>
                      <br>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-cutlery"></i><input type="text" class="form-control input-rsvp" id="category" name="category" placeholder="Category Name" required>
                      </div>
                      <div class="input-group">
                          <div class="input-group-addon input-rsvp addon-rsvp">Seats per Table</div>
                          <select class="form-control" name="seats" id="seats" required>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                      <br>
                      <div align="center"><button type="submit" class="btn btn-primary btn-lg btn-rsvp">Create</button></div>
                    </form>
                </div>
                <div class="col-xs-12 col-md-6">
                   <h2>Desk's Categories Created</h2>
                   <div class="row">
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            <p>Table 1 <br><img src="../app/img/mesa.jpg" width="40px" alt="Table"></p>
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Name 1 - X Seats</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            <p>Table 2 <br><img src="../app/img/mesa.jpg" width="40px" alt="Table"></p>
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Name 2 - X Seats</div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                           <p>Table 3 <br><img src="../app/img/mesa.jpg" width="40px" alt="Table"></p>
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Name 3 - X Seats</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-4 col-sm-4">
                        <div class="panel panel-default panel-border">
                          <div align="center" class="panel-body">
                            <p>Table 4 <br><img src="../app/img/mesa.jpg" width="40px" alt="Table"></p>
                          </div>
                          <div align="center" class="panel-footer panel-rsvp">Name 4 - Seats</div>
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