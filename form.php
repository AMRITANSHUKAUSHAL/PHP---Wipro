<!DOCTYPE html>
<html>
<head>
    <title>Create New User</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    
    <h2>Add User</h2>
    <form method="POST" action="insert.php">
        <label>Name:</label>
        <input type="text" name="name"><br><br>
        <label>Age:</label>
        <input type="text" name="age"><br><br>
        <label>Grade:</label>
        <input type="text" name="grade"><br><br>
        <label>Email:</label>
        <input type="text" name="email"><br><br>
        <label>Password:</label>
        <input type="text" name="password"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
