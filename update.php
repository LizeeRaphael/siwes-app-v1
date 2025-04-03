
 <?php
require ('connect.php');
$id="";


if (isset($_GET["id"])){
    $id=$_GET["id"];


if(isset($_POST['submit'])){
    $task = ($_POST['task']);
//echo $gender;

if(isset($_POST['gender'])){
    echo $gender;
}else{
    echo "null";
}

$sql="UPDATE todo SET task='$task' WHERE id='$id'";
if (mysqli_query($conn, $sql)){
//echo $gender;
echo header ("location:view.php");
}
else{
    echo "Error Updating" .mysqli_error($conn);
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<link rel="stylesheet" href="update.css">
<body>
<div id="wrapper">
<div id="input">
            <div class="container">

          <form method="POST" action="update.php?id=<?php echo $id; ?>">

          <h4> Edit Your Information:</h4>
                <!-- Edit To do:  -->
                 <textarea name="task" class="edit" cols="30" rows="5"></textarea>
                 <br><br>
                 <input type="submit" name="submit" value="Update" class="submit">



</div>
</div>
</div>
</div>
</form>
</body>
</html>