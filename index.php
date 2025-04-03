<?php
require("connect.php");
$task = "";

if (isset($_POST['submit'])) {
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $timestamp = date("Y-m-d H:i:s"); // Capture current date and time

    if (empty($task)) {
        echo "<script>alert('Task is empty')</script>";
    } else {
        $sql = "INSERT INTO todo (task, created_at) VALUES ('$task', '$timestamp')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Entry added successfully!')</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="index.php" method="POST">
        <div id="wrapper">
            <h1>Siwes APP</h1>
            <div id="input">
                <div class="container">
                    <textarea name="task" placeholder="Enter new experience!" id="ipt" cols="30" rows="5"></textarea>
                    <input type="submit" value="Add" name="submit" id="inpxxt">
                    <div class="align">
                        <p>
                            <a href="view.php"><input type="button" value="View Entries" id="float"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
