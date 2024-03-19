<?php
include('header.php');

?>

<?php
include('sidebar.php');

?>

   
 
<!-- partial -->
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      
     
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Service Update</h4>
            <form class="forms-sample"  enctype="multipart/form-data" action="send.php" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="email" class="form-control" id="exampleInputName1"name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Subject</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="subject">
              </div>
              

                <div class="form-group">
                <label for="exampleInputCity1">message</label>
                <input type="text" class="form-control" id="exampleInputCity1"name="message">
              </div>
              
    
              
              <input type="submit"name="send" class="btn btn-primary mr-2">
             
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- content-wrapper ends -->
  <?php
include('footer.php');

?>