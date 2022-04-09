<?php
include('../config/constants.php');
//1. get the id of Admin to delte the data
$id = $_GET['id'];
//2.create sql qury to delete
$sql = "DELETE FROM tbl_admin WHERE id = $id";
//execute the query
$res = mysqli_query($conn,$sql);
//3.redirect to manage admin page with message
if($res==True)
{
  $_SESSION['delete'] = "<div class='success'>Admin Deleted Succesfully</div>";
  header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
    $_SESSION['delete'] = "<div class = 'error'>Failed to Delete admin . Try Again.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

?>