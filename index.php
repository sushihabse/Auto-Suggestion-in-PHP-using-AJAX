<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Live Search</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <!--Bootstrap-->
        <!--JQuery min.js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--JQuery min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>   
    </head>
<body>
    <div class="jumbotron text-center">
        <h1> Auto suggest data from mysql table </h1>
    </div>
    <div class="m-5">
        <input list ="output" type="text" class="form-control" value="" id="ProductsName" autocomplete="off">
        <datalist id="output"> </datalist>
    </div>
    <script type="text/javascript">
            $(document).ready(function(){
                $('#ProductsName').keypress(function(){
                    $.ajax({
                        type : "POST",
                        url  : "search1.php",
                        data: {
                            shihab: $("#ProductsName").val(),
                        },
                        success: function(data){
                            $('#output').html(data)
                        },
                    });
                });

            });
    </script>
</body>
</html>