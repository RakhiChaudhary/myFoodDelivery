<?php
include('partials/menu.php');
?>
     <div class="main-content">
       <div class="wrapper">
       <h1>Update Admin</h1> 
       <?php
      
       //1. get the id of Admin to delte the data
       $id = $_GET['id'];
       //2.create sql qury to delete
       $sql = "SELECT * FROM tbl_admin WHERE id = $id";
       //execute the query
       $res = mysqli_query($conn,$sql);
       //3.redirect to manage admin page with message
       if($res==TRUE)
           {
               $count = mysqli_num_rows($res);
               if($count==1)
               {
                        $rows=mysqli_fetch_assoc($res);
                         $full_name=$rows['full_name'];
                         $username=$rows['username'];

               }
               else{
                   header('location:'.SITEURL.'admin/manage-admin.php'); 
                }
            }


       ?>
       <form action="" method="POST">
       <br><br>
       <table class="tbl-30">
          <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
          </tr>
          
          <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
          </tr>

      
          <tr>
                <td colspan="2">
                <input type="hidden" name = "id" value = "<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
          </td>
          </tr>
       </table>
   </form>

       </div>
</div>
<?php
 
 if(isset($_POST['submit']))
 {
     $id = $_POST['id'];
     $full_name=$_POST['full_name'];
     $username=$_POST['username'];

     $sql = "UPDATE tbl_admin SET
     full_name = '$full_name',
     username = '$username'
     WHERE id = '$id';
     ";
    $res = mysqli_query($conn,$sql);
    if($res==True)
    {
      $_SESSION['update'] = "<div class='success'>Admin Updated Succesfully</div>";
      header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['update'] = "<div class = 'error'>Failed to Update admin . Try Again.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

 }
?>


<?php
       include('partials/footer.php');
 ?>