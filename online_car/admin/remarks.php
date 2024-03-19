
<?php
include('header.php');

?>

<?php
include('sidebar.php');

?>
<body>
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      
            
    </nav>
      <!-- partial -->
      <div class="main-panel">
     
      <?php
	      include"db.php";
                 ?>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Remarks</h4>
                
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Password</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                                                    $selcat="select * from tbl_contact";
                                                    $execute=mysqli_query($con,$selcat);
                                                    foreach($execute as $value)
                                                        {
                                                        ?>
                                                         
                                                    
                                                        <td class="table-warning"><?php echo $value['name'];?></td>
                                                        
                                                        <td class="table-danger"><?php echo $value['email'];?></td>
                                                        <td class="table-success"><?php echo $value['phone'];?></td>
                                                        <td class="table-primary"><?php echo $value['subject'];?></td>
                                                        <td class="table-info"><?php echo $value['message'];?></td>
                                                        
                                                        </tr>
                                                        <?php
                                                        }
                                                       
                                                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       