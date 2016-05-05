<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Save The Date #SanmiguelAngel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>
    <?php include 'header.php';
    include 'medoo.php';
    include 'database.php';

    if($_POST) {
            
            $rsvp_id = $database->insert("Preference", [
                "name" => $_POST['nombre'],
                "food_preference" => $_POST['food'],
            ]);
        }
    
    ?>
    <div class="wrapper clearfix">
        <div id="save">
            <figure><img class="center" src="../img/SaveTheDate.jpg" alt="Save The Date"></figure>
        </div>
        <div id="rsvp">
            <h1>FOOD PREFERENCE</h1>
            <p>Por favor confirma si tienes alguna preferencia alimenticia:</p>
            <form action="../php/preference.php" method="post" id="preference">
                <table width="406">
                    <tr>
                        <td>
                            <label>Nombre:</label>
                        </td>
                        <td>
                            <input type="text" name="nombre" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Food Preference:</label>
                        </td>
                        <td>
                            <select name="food" required>
                                <option value="meat">Carne</option>
                                <option value="veg">Vegetariano</option>
                                <option value="pescado">Pescado</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input id="boton" name="enviar" type="submit" value="enviar" />
                        </td>
                    </tr>
                </table>
                <br>

                <br>

                <br>
            </form>
        </div>
    </div>
</body>

</html>