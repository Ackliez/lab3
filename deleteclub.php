<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deleting a club</title>
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php
        // get the clubId PK value from the URL using the $_GET array
        if (isset($_GET['clubId'])) {
            if (is_numeric($_GET['clubId'])) {
                // clubId in url IS a number so proceed with delete process
                $movieId = $_GET['clubId'];

                // connect to the db using club.php file
                require 'club.php';

                // set up the SQL DELETE command
                $sql = "DELETE FROM club WHERE clubId = :clubId";
                $cmd = $db->prepare($sql);
                $cmd->bindParam(':clubId', $clubId, PDO::PARAM_INT);

                // execute the deletion
                $cmd->execute();

                // disconnect
                $db = null;

                // show message to user
                echo '<h1>Club Deleted</h1>
                    <a href="club.php" class="alert alert-info">Back to Movie List</a>';

            }
            else { // we have a movieId but it's not a number
                echo "Invalid Club name";
            }  
        }
        else { // movieId is missing
            echo "Invalid club Name";
        }
        ?>
    </body>
</html>