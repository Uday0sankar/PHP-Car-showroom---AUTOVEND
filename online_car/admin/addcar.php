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
            <h4 class="card-title">Add car</h4>
            <?php
			include"db.php";
         
        
        
        if(isset($_POST['submit']))
      {                
        $brand=$_POST['brand'];
        $model=$_POST['model'];
        $transmission=$_POST['transmission'];
        $price=$_POST['price'];
        $fuel=$_POST['fuel'];
        
        $image=$_FILES["file-input"]["name"];
       
        $temp=$_FILES["file-input"]["tmp_name"];

        move_uploaded_file($temp,"images/".$image);
      $description=$_POST['description'];
        $insert="INSERT INTO tbl_carta(brand,model,transmission,price,fuel,photo,description) value('$brand','$model','$transmission','$price','$fuel','$image','$description')";
        mysqli_query($con,$insert);
      }
    ?>  
            <form class="forms-sample"  enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Brand name</label>
                <input type="text" class="form-control" id="exampleInputName1"name="brand">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Model name</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="model">
              </div>
              
              <div class="form-group">
                <label for="exampleSelectGender">Transmission</label>
                  <select class="form-control" id="exampleSelectGender" name="transmission" >
                
                  <?php
                      $selcat="select * from tbl_trans";
                      $execute=mysqli_query($con,$selcat);
                      foreach($execute as $value)
                          {
                            ?>
                  <option><?php echo $value['trans_name'];?></option>
                    
                  
                  <?php
                }
                ?>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleInputCity1">Price</label>
                <input type="text" class="form-control" id="exampleInputCity1"name="price">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Fuel</label>
                
                  <select class="form-control" id="exampleInputCity1"name="fuel" >
                  <?php
                      $selcat="select * from tbl_fueltype";
                      $execute=mysqli_query($con,$selcat);
                      foreach($execute as $value)
                          {
                            ?>
                  <option><?php echo $value['fuel_name'];?></option>
                    
                  
                  <?php
                }
                ?>
                </select>
                </div>
             
              
              <div class="form-group">
                <label>Photo</label>
                
                <div class="input-group col-xs-12">
                  
                  <input type="file" id="fileToUpload" class="file-upload-browse btn btn-primary" name="file-input" style="width:100%;">
                </div>
              </div>

            
              <div class="form-group">
                <label for="exampleTextarea1">description</label>
                <textarea class="form-control" id="exampleTextarea1"name="description"  rows="4"></textarea>
              </div>
              <input type="submit"name="submit" class="btn btn-primary mr-2">
             
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <?php
include('footer.php');

?>