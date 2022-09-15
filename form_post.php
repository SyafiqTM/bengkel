
<?php 
    if(!empty($_POST)){
        $program = $_POST['program'];
        $candidate = $_POST['candidate'];

        if(!empty($program) && !empty($candidate)){
            echo 'Program : ' . htmlspecialchars($program);
            echo '<br>';
            echo 'Candidate: ' . htmlspecialchars(strip_tags($candidate)); 
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Program:</label>
        <input type="text" name="program">
        <br>
        <label for="">Candidate:</label>
        <input type="text" name="candidate">
        <br>
        <input type="submit" value="submit">
    </form>

    <br><br>
</body>
</html>