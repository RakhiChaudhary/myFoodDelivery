<?php
  include('partials/menu.php');
?>

<div class="main-content">
       <div class="wrapper">
       <h1>Manage Order</h1> 
       <br /><br />
        
       <a href ="#" class="btn-primary">Add order</a>
       <br /> <br /><br />

       <table class="tbl-full">
           <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
          </tr>

          <tr>
                <td>1.</td>
                <td>Rakhi Chaudhary</td>
                <td>Rakhichaudhary</td>
                <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a>
                </td>
          </tr>
          
       </table>
       </div>
       </div>
<?php
  include('partials/footer.php');
?>