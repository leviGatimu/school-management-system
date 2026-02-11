<?php
    include 'includes/db_connect.php';
    $sql = "SELECT * FROM students JOIN classes ON student.class_id = class.id";
    $result = mysqli_query($conn , $sql);

?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
    </tr>
    <?php
        while($row = $result -> mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "</tr>";
        }
    ?>
</table>