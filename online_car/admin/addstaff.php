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
            <h4 class="card-title">Add Staff</h4>
            <?php
			include"db.php"; 
			
        if(isset($_POST['submit']))
      {                
        $staff=$_POST['staff'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $status=$_POST['status'];
        $password=$_POST['password'];
  
        $insert="insert into tbl_staff(staff,email,user_name,status,password) value('$staff','$email','$name','$status','$password')";
        mysqli_query($con,$insert);
      }
    ?>  
            <form class="forms-sample"  enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Staff Name</label>
                <input type="text" class="form-control" id="exampleInputName1"name="staff">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="email">
              </div>
              

                <div class="form-group">
                <label for="exampleInputCity1">Username</label>
                <input type="text" class="form-control" id="exampleInputCity1"name="name">
              </div>
              
    
              <div class="form-group">
                <label for="exampleSelectGender">Status</label>
                  <select class="form-control" id="exampleSelectGender" name="status" >
                  <option></option>
                    <option>Active</option>
                    <option>Not Active</option>
                  </select>
                </div>
            
              <div class="form-group">
                <label for="exampleTextarea1" >Password</label>
                <input type="text" class="form-control" id="exampleTextarea1"name="password"  rows="4"placeholder=""></textarea>
              </div>
              <input type="submit"name="submit" class="btn btn-primary mr-2">
             
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