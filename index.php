<?php
$conn = mysqli_connect('localhost', 'root', '', 'wipro') or die('DB not connected');
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<a href="form.php">
    Create New User
</a>

<h2>All Users</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Name</th><th>Age</th><th>Grade</th><th>Email</th><th>Password</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>
            <a href='update.php?id=" . $row['id'] . "'>Edit</a> |
            <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a>
          </td>";
    echo "</tr>";
}

?>

</table>

<?php mysqli_close($conn); ?>
