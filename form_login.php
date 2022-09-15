<html>

<head>
    <title>Profile</title>
    <!-- <li nk href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container p-5">
        <div class="card p-3">
            <h3 class="text-center">Login Page</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validateMyForm(event);">
                <!-- <div class="form-group">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>
                    -->
                <div>
                    <label for="">Please select spm</label>
                    <select name="" id="">
                        <option value="" >1</option>
                        <option value="" selected>2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div>
                    <label >checkbox</label>
                    <span id="checboxErr" style="display: none; color:red">*required</span><br>
                    <input type="checkbox" name="cars[]" id="cars1" value="1" > check 1
                    <input type="checkbox" name="cars[]" id="cars2" value="2"> check 2
                    <input type="checkbox" name="cars[]" id="cars3" value="3"> check 3
                </div>
                <div>
                    <input type="radio" name="gender" id="" required>male
                    <input type="radio" name="gender" id="" required>female
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    function validateMyForm(event) {
        event.preventDefault();

        //alternative 1 - retrieve manually checkboxes by ID
        if(
        document.querySelector('#cars1').checked == false && 
        document.querySelector('#cars2').checked == false &&
        document.querySelector('#cars3').checked == false){
            alert('Please tick the checkbox')
            document.getElementById('checboxErr').style.display = "block";
        }
      
        //alternative 2 - get all checboxes checked value by Name
        var checkboxes = document.getElementsByName('cars[]');
        var values = [];

        for (var i = 0; i < checkboxes.length; i++) {
          values.push(checkboxes[i].checked);
        }

        if(!values.includes(true,values)){
            alert('Please itck the checkboxes');
            document.getElementById('checboxErr').style.display = "block";
        }

        return false;
    }
</script>

</html>