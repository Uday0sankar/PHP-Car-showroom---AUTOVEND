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
        $delete="DELETE FROM tbl_carta WHERE id='$did'";
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
                        <th>Brand name</th>
                        <th>Model name</th>
                        <th>Transmission</th>
                        <th>Price</th>
                        <th>Fuel</th>
                        <th>Photo</th>
                        <th>Textarea</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    </tbody>

                    <?php
                                                    $selcat="select * from tbl_carta";
                                                    $execute=mysqli_query($con,$selcat);
                                                    foreach($execute as $value)
                                                        {
                                                        ?>
                                                        <tr>
                                                    
                                                        <td><?php echo $value['id'];?></td>
                                                        <td><?php echo $value['brand'];?></td>
                                                        <td><?php echo $value['model'];?></td>
                                                        <td><?php echo $value['transmission'];?></td>
                                                        <td><?php echo $value['price'];?></td>
                                                        <td><?php echo $value['fuel'];?></td>
                                                        <td><img src="images/<?php echo $value['photo'];?>"width=50px></td>
                                                        <td><?php echo $value['description'];?></td>
                                                        <td><a href='viewcar.php?id=<?php echo $value['id'];?>'>delete</a><i class=" typcn typcn-delete-outline btn-icon-append"></i></td>
                                                        <td><a href='editing.php?id=<?php echo $value['id'];?>'>edit</a><i class="typcn typcn-edit btn-icon-append"></i></td>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
include('footer.php');

?>