<?php
    try{
        include("admin_conn.php");

        $id = intval($_GET['id']);

        $sql = "DELETE FROM users WHERE user_ID = $id";

        if (mysqli_query($con, $sql)) {
            echo "<script> alert('User record deleted!'); window.location.href='Admin10_User.php';</script>";
        }
        else{
            echo "<script> alert('Something went wrong please try again!'); window.location.href='Admin10_User.php';</script>";
            echo mysqli_error($con);
        }
    }

    catch(Exception $e){
        echo 'Message: ' .$e->getMessage();
    }
?>