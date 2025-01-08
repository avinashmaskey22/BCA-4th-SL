<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inserting Data Using PHP + MySQL With AJAX</h1>

    <div id="form">
        Full Name: <input type="text" id="full_name">
        <input type="submit" id="insert-button" value="Insert">
    </div>

    <br><br>

    <div id="table-data">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </table>
    </div>

    <script type="text/javascript" src="../js/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //Displays the data from the database
            function loadTable() {
                $.ajax({
                    url: 'ajax-load.php',
                    type: "POST",
                    success: function(data) {
                        $('#table-data').html(data);
                    }
                });
            }
            loadTable();

            // Inserts the data into the database
            $('#insert-button').on('click', function(e) {
                e.preventDefault(); // Using this event, the form submission will not occur. The browser will not reload or navigate away from the current page.
                var fname = $('#full_name').val(); // val() is used to get or set the value of form elements 

                $.ajax({
                    url: 'ajax-insert.php',
                    type: 'POST',
                    data: {
                        full_name: fname
                    },
                    success: function(data) {
                        if (data == 1) {
                            loadTable();
                        }else{
                            alert('Your data cannot be inserted.');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>