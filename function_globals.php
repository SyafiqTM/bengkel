<?php 

// phpinfo()
// print_r($_SERVER['SCRIPT_FILENAME']);

foreach ($_REQUEST as $request) {
   echo $request;
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
    <form action="function_globals.php" method="post">
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