<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        .fa-chevron-up.rotate {
            transform: rotate(180deg);
        }
        .div{
          
        }
    </style>
</head>

<body>
    <!-- <p id="error">Paragraph 1</p>
    <p>Paragraph 2</p>
    <p>Paragpraph 3</p> -->
    <div class="container">
        <div class="card toggle">
            <div class="card-header">Quiz 2022 <span class="float-end"><i class="fa fa-chevron-up"></i></span></div>
            <div class="card-body first">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum
            </div>
        </div>

        <div class="card mt-5 mb-5">
            <div class="card-body">
                <form action="" id="registration">
                    <a href="www.google.com">Google</a>
                    <div class="form-group">
                        <label for="email" class="form-label">Email <span id="error-email" style="color:red; display:none" class="ms-3"> is required*</span></label>
                        <input type="email" name="email" id="" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Name <span id="error-name" style="color:red; display:none" class="ms-3"> is required*</span></label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" id="" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" id="" class="form-control">
                    </div>
                    <button class="w-100 d-block btn btn-primary mt-3">submit</button>
                </form>
            </div>
            <div class="content">
                <!-- <label for="" class="form-label w-100 p-3">Output</label> -->

            </div>
        </div>
    </div>

    <!-- <button class="hide">hide</button>
    <button class="show">show</button>
    <button class="toggle">Toggle</button> -->
</body>
<script>
    $(document).ready(function () {
        $("p").css('color', 'white');
        $("p").css('background', 'black');

        // $("input").on('mouseenter',function(){
        //     $(this).css("background-color", "yellow");
        // });

        // if(blal == true)
        $("p#error").css('color', 'red');
        $("p#error").hide()

        // $('button.hide').on('click', function(){
        //     $('div.card').hide('slow')
        // })
        // $('button.show').on('click', function(){
        //     $('div.card').show('slow')
        // })
        $('div.toggle').on('click', function () {
            $('div.card-body.first').fadeToggle("slow")
            $('i.fa-chevron-up').toggleClass('rotate');
        })

        $('input[name=name]').keypress(function (e) { 
            $('span#error-name').hide() 
        });
        $('input[name=email]').keypress(function (e) { 
            $('span#error-email').hide() 
        });

        $('form#registration').on('submit', function(e){
            $('a').attr('href','http://www.facebook.com');
            $('span#error-name').hide()
            $('span#error-email').hide()
            e.preventDefault();

            if($('input[name=name]').val().length == 0 || $('input[name=name]').val().length == '' ){
                $('span#error-name').show()
            }
            if($('input[name=email]').val().length == 0 || $('input[name=email]').val().length == ''){
                $('span#error-email').show()
            }

            if($('input[name=name]').val() && $('input[name=email]').val()){
                var email = $('input[name=email]').val()
                var name = $('input[name=name]').val()
            }
      

            var attr_input_name = $('input[name=name]').attr('type');
            var class_name = $('input[name=name]').attr('class');
            // $("input[name=name]").css("background-color", "yellow");
            
            $('div.content').append(
                `
                <label for="" class="form-label w-100 ps-3">Attr Name : <span id="">`+attr_input_name+`</span></label>
                <label for="" class="form-label w-100 ps-3">Attr Class : <span id="">`+class_name+`</span></label>
                `
            )
    

          

            // $('div.content').append('<p>This is new paragprah</p>')
        })

    });
</script>

</html>