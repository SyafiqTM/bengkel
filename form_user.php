<html>

<head>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <section class="form">
        <div class="p-5">
            <div class="card p-3">
                <h3 class="text-center">List of Input Type</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="w-75 m-auto pb-4">
                    <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Date</label>
                        <input class="form-control" name="date" type="date">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Week</label>
                        <input class="form-control" name="week" type="week">
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label">Checkbox</label>
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" name="vehicle[]" value="Bike">
                            <label class="form-label"> I have a bike</label><br>
                            <input class="form-check-input" type="checkbox" name="vehicle[]" value="Car">
                            <label class="form-label"> I have a car</label><br>
                            <input class="form-check-input" type="checkbox" name="vehicle[]" value="Boat">
                            <label class="form-label"> I have a boat</label>
                        </div>
                    </div>
                    <div class="form-gorup">
                        <label for="" class="form-label">Address</label>
                        <textarea name="" id="" cols="11" rows="3" class="form-control"></textarea>
                    </div>
                </form>
                <button id="class">click me</button>
            </div>
        </div>
    </section>
    
</body>

<script>
    jQuery(document).ready(function () {

        jQuery('#class').on('click', function(){
        alert('button clicked')

    })
    })
</script>
</html>