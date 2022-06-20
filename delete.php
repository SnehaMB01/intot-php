<?php
include("connection.php");
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from reg_stud where id=$id";
    if(mysqli_query($conn,$sql))
    {
        $popup="<script>alert('Deleted successfully');</script>";
        echo $popup;
    } 
    else
    {  
        $popup="<script>alert('Deletion operation failed!');</script>";
        echo $popup;
         mysqli_error($conn);  
    }  
}
?>
<html>
    <head>
        <title>
            Student registration
        </title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="bodyclass">
        <h1>Deleted successfully</h1>
    </body>
</html>