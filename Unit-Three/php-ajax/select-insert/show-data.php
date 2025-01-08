<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selecting or Displaying Data Using PHP + MySQL With AJAX</h1>
    <div id="table-load">
        <input type="button" id="load-button" value="Load Data">
    </div>
    
    <br><br>

    <div id="table-data">
    </div>


    <script type="text/javascript" src="../js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            //Displays the data from the database
            $('#load-button').on('click', function(e){
                $.ajax({
                    url : 'ajax-load.php',
                    type : "POST",
                    success : function(data){
                        $('#table-data').html(data);
                    }
                });
            });

        });
    </script>
</body>

</html>