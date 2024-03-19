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
            <h4 class="card-title">Edit Car</h4>
            <?php
        include"db.php";

        if(isset($_GET['id']))
                                    {
                                        $viewid=$_GET['id'];
                                        $seleditQry="select * from tbl_carta where id='$viewid'";
                                        $seldata=mysqli_query($con,$seleditQry);
                                        $data=mysqli_fetch_array($seldata);
                                        $editbrand=$data['brand'];
                                        $editmodel=$data['model'];
                                        $edittransmission=$data['transmission'];
                                        $editprice=$data['price'];
                                        $editfuel=$data['fuel'];
                                        $editimage=$data['photo'];
                                        $editdescription=$data['description'];
                                    }
         if(isset($_POST['edit']))
                                    { 
                                    $brand=$_POST['brand'];
                                    $model=$_POST['model'];
                                    $transmission=$_POST['transmission'];
                                    $price=$_POST['price'];
                                    $fuel=$_POST['fuel'];    
                                    $description=$_POST['description'];
                                    $image=$_FILES['file-input']['name'];
                                    if($image=="")
                                    {
                                      $image=$editimage;
                                    }
                                    $temp=$_FILES["file-input"]["tmp_name"];
                                    move_uploaded_file($temp,"images/".$image);
                                    $updatequery="update tbl_carta set brand='$brand',model='$model',transmission='$transmission',price='$price',fuel='$fuel',photo='$image',description='$description' where id='".$viewid."'";
                                    mysqli_query($con,$updatequery) or  die (mysql_Error());   
                                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=viewcar.php\">";
                                    
                                    }
    ?>  
            <form class="forms-sample"  enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Brand name</label>
                <input type="text" class="form-control" id="exampleInputName1"name="brand" value="<?php if(isset($editbrand)){ echo $editbrand;} ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Model name</label>
                <input type="text" class="form-control" id="exampleInputPassword4" name="model" value="<?php if(isset($editmodel)){ echo $editmodel;} ?>">
              </div>
              
              <div class="form-group">
                <label for="exampleSelectGender">Transmission</label>
                  <select class="form-control" id="exampleSelectGender" value="" name="transmission" >
                    <option><?php if(isset($edittransmission)){ echo $edittransmission;}?></option>
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
                <input type="text" class="form-control" id="exampleInputCity1"name="price" value="<?php if(isset($editprice)){ echo $editprice;} ?>"  placeholder="price">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Fuel</label>
                  <select class="form-control" id="exampleInputCity1"name="fuel" value="<?php //if(isset($editfuel)){ echo $editfuel;} ?>">
                    <option><?php if(isset($editfuel)){ echo $editfuel;} //else{?><?php //Electrical}?></option> 
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
                  
                  <input type="file" id="fileToUpload" class="file-upload-browse btn btn-primary" name="file-input" style="width:100%;" value=""><img width="50px;"src="images/<?php if(isset($editimage)){ echo $editimage;} ?>">
                </div>
              </div>

            
              <div class="form-group">
                <label for="exampleTextarea1">description</label>
                <textarea class="form-control" id="exampleTextarea1"name="description"  rows="4"><?php if(isset($editdescription)){ echo $editdescription;} ?></textarea>
              </div>
              <input type="submit"name="edit" class="btn btn-primary mr-2">
             
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