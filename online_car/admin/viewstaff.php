<?php
include('header.php');

?>

<?php
include('sidebar.php');

?>
    
      <!-- partial -->
      <div class="main-panel">
      <?php
	  include"db.php";
                ?>
  <!-- MAIN CONTENT-->
  <?php
     if(isset($_GET['id']))
      {
        $did=  $_GET['id'];
        $delete="DELETE FROM tbl_staff WHERE id='$did'";
        mysqli_query($con,$delete);
      }
      ?>

       <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <form method="POST" enctype="multipart/form-data">
                                            
                                    <div class="content-wrapper">
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="card">
                                     <div class="table-responsive pt-3">
                                    <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">Id</th>
                        <th>staff name</th>
                        <th>email</th>
                        <th>username</th>
                        <th>status</th>
                        <th>password</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    </tbody>
                      <?php
                                                    $selcat="select * from tbl_staff";
                                                    $execute=mysqli_query($con,$selcat);
                                                    foreach($execute as $value)
                                                        {
                                                        ?>
                                                        <tr>
                                                    
                                                        <td><?php echo $value['id'];?></td>
                                                        <td><?php echo $value['staff'];?></td>
                                                        <td><?php echo $value['email'];?></td>
                                                        <td><?php echo $value['user_name'];?></td>
                                                        <td><?php echo $value['status'];?></td>
                                                        <td><?php echo $value['password'];?></td>
                                                        <td><a href='viewstaff.php?id=<?php echo $value['id'];?>'>delete</a><i class=" typcn typcn-delete-outline btn-icon-append"></i></td>
                                                       
                                                        </tr>
                                                        <?php
                                                        }
                                                       
                                                        ?>
                                                         </tbody>



                                                    </div>
                                                    </div>
                                                    </table>


                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
 <?php
include('footer.php');

?>