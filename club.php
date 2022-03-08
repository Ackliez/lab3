<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Football clubs</title>
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>clubs</h1>
        <a href="editclub.php">edit clubs</a>
        <!--Table-->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Club Name</th>
                    <th>Ground</th>
                </tr>
           </thead>                
           <tbody>
               <?php
                $db = new PDO(
                    'mysql:host=172.31.22.43; dbname=Thierry1173355',
                    'Thierry1173355',
                    'kLG0jGlBG3'
                );
               $sql =
                   'SELECT * FROM clubs';

               $cmd = $db->prepare($sql);
               $cmd->execute();
               $clubs = $cmd->fetchAll();

               // loop through the records, new row for each record, new column for each value
               foreach ($clubs as $club) {
                   echo '<tr>
                        <td>' .
                       $club['clubId'] .
                       '</td>
                        <td>' .
                       $club['clubName'] .
                       '</td>
                        <td>' .
                       $club['ground'] .
                       '</td>
                        </tr>';
               }

               $db = null;
               ?>
           </tbody> 
        </table>
    </body>
</html>