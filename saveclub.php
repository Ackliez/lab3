<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8" />
    <title>Godwill Thierry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <h1>Save your "Peak" books / edits your books </h1>
    <form method="post" action="club.php"> 
        <!--The inputs for the user-->
        <div class="mb-3">  
        <label for="clubName">Club Name</label>
        <input name="clubName" id="clubName" required maxlength="30"> 
        </div>
       
        <div class="mb-3">
       <label for="ground"> Ground </label>
       <input name="ground" id="ground" required maxlength="30"> 
        </div>

    <?php
    // connect
    $db = new PDO(
        'mysql:host=172.31.22.43; dbname=Thierry1173355',
        'Thierry1173355',
        'kLG0jGlBG3'
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // query the relatives table using a SELECT command
    $sql = 'SELECT * FROM CompletionType';
    $cmd = $db->prepare($sql);
    $cmd->execute();
    $CompletionType = $cmd->fetchAll();

    // loop through the data & display each relative using echo
    foreach ($CompletionType as $Status) {
        echo '<option>' . $Status['statusType'] . '</option>';
    }
    $db = null;
    ?>
       </select>
       <button type="button" class="btn btn-primary">Save and continue</button>
       
</form>
<ul>
    <!--link to books-->
    <li>
        <a href="club.php"> list of clubs</a>
    </li>

</ul>

    </body>

</html>

