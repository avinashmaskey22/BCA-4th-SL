<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Deleting and Updating Data Using PHP + MySQL With AJAX</h1>

    <div id="table-data">
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

            // Deletes the data from the database
            $(document).on('click', '#delete-btn', function() {
                if (confirm("Are You Sure You Want to Delete Your Data?")) {
                    var studentId = $(this).data('id');
                    var element = this;

                    $.ajax({
                        url: 'ajax-delete.php',
                        type: 'POST',
                        data: {
                            id: studentId
                        },
                        success: function(data) {
                            if (data == 1) {
                                $(element).closest('tr').hide();
                            } else {
                                alert('Your data cannot be deleted.');
                            }
                        }
                    });
                }
            });

            // Updates the data in the database
            $(document).on('click', '#edit-btn', function() {
                var studentId = $(this).data('eid');
                var currentName = $(this).parent().siblings(':nth-child(2)').text(); // Get current name
                var newName = prompt("Enter New Name:", currentName);
                
                $.ajax({
                    url: 'ajax-update.php',
                    type: 'POST',
                    data: {
                        id: studentId,
                        full_name: newName
                    },
                    success: function(data) {
                        if (data == 1) {
                            loadTable();
                        } else {
                            alert('Your data cannot be updated.');
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>