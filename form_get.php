<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_get.php" method="get">
        <label for="">Program:</label>
        <input type="text" name="program">
        <br>
        <label for="">Candidate:</label>
        <input type="text" name="candidate">
        <br>
        <input type="submit" value="submit">
    </form>

    <br><br>
    <?php 
        if(!empty($_GET['program']) && !empty($_GET['candidate'])){
            echo 'My program is ' . $_GET['program']; echo '<br>';
            echo 'Candidate name is ' . $_GET['candidate'];
        }

    ?>
</body>
</html>