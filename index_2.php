<?php 

include_once 'database.php';
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
}

$result = $_SESSION['result'] ? $_SESSION['result'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap-5.min.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-5.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container p-5">
        <h1>This is User list</h1>
        <div class="card">
            <table class="table table-striped m-0">
                <thead>

                    <th>id</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>

                </thead>
                <tbody>
                    <?php 
                    if(isset($result)){
                        for ($i=0; $i < sizeof($result); $i++) { ?>
                    <tr class="p-3">
                        <td><?php echo $result[$i]['id'] ?></td>
                        <td><?php echo $result[$i]['firstname'] ?></td>
                        <td><?php echo $result[$i]['lastname'] ?></td>
                        <td><?php echo $result[$i]['email'] ?></td>

                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>