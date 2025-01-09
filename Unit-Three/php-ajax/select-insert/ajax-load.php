<?php

$conn = mysqli_connect('localhost', 'root', '', 'ajax-example', 3307) or die("Connection Falied.");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if (mysqli_num_rows($result) > 0) {
    $output = '<table border = "1">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
                    <tr>
                        <td> {$row['id']} </td>
                        <td> {$row['full_name']} </td>
                    </tr>
                   ";
                }
    $output .= '</table>';
    mysqli_close($conn);
    echo $output;
} else {
    echo "<h2> No Record Found </h2>";
}
