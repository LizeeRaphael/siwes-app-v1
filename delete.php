<!DOCTYPE html>
<html>
    <head>
        <title>Successful</title>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body> 

<?php
require ('connect.php');

$id="";
if (isset($_GET["id"])){
    $id=$_GET["id"];
}

$del="DELETE FROM todo WHERE id='$id'";
if (mysqli_query($conn, $del)){


    echo '<script>
    swal({
        title: "Deleted!",
        text: "Successfully!",
        type: "success"
    }).then(function() {
        window.location = "index.php";
    });
    </script>';

}else{
    echo "Error Deleting";
}

?>

</body>
</html>


