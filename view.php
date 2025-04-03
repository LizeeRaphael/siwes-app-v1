<?php
require("connect.php");

$sql = "SELECT id, task, created_at FROM todo ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <style>
        .task-container {
            background-color: #008080; /* Teal background */
            color: white; /* White text */
            padding: 10px; /* Reduced padding */
            margin: 5px 0; /* Reduced margin */
            border-radius: 8px;
            text-align: center;
            width: 80%; /* Adjust width */
            margin-left: auto;
            margin-right: auto;
        }
        .task-container hr {
            border: 1px solid white;
            margin-top: 5px;
        }
        .task-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 5px;
        }
        .btn {
            border: none;
            padding: 6px 10px; /* Reduced button size */
            cursor: pointer;
            border-radius: 5px;
            font-size: 12px; /* Smaller font */
        }
        .btn-edit {
            background-color: #004d4d; /* Dark teal */
            color: white;
        }
        .btn-edit:hover {
            background-color: #003333;
        }
        .btn-delete {
            background-color: #cc0000; /* Red */
            color: white;
        }
        .btn-delete:hover {
            background-color: #990000;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>Entries</h1> <!-- Changed title -->
        <div class="container">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="task-container">
                    <p><strong><?php echo $row['task']; ?></strong></p>
                    <small>Added on: <?php echo $row['created_at']; ?></small>
                    <div class="task-buttons">
                        <a href="update.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-edit">Edit</button>
                        </a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this task?');">
                            <button class="btn btn-delete">Delete</button>
                        </a>
                    </div>
                    <hr>
                </div>
            <?php } ?>
        </div>
        <div class="align">
            <a href="index.php"><input type="button" value="Back" id="back"></a>
        </div>
    </div>
</body>
</html>
