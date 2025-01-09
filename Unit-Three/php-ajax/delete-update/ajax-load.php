<?php

$conn = mysqli_connect('localhost', 'root', '', 'ajax-example', 3307) or die("Connection Falied.");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if (mysqli_num_rows($result) > 0) {
    $output = '<table border = "1">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan = "2">Action</th>
                    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
                    <tr>
                        <td> {$row['id']} </td>
                        <td> {$row['full_name']} </td>
                        <td> <button id='edit-btn' data-eid='{$row['id']}'> Edit </button> </td>
                        <td> <button id='delete-btn' data-id='{$row['id']}'> Delete </button> </td>
                    </tr>
                   ";
    }
    $output .= '</table>';
    mysqli_close($conn);
    echo $output;
} else {
    echo "<h2> No Record Found </h2>";
}
