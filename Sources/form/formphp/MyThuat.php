

<div class="container p-3" >

  <?php 
  include("Xuly/cnn.php");
  mysqli_set_charset($cnn,"utf8");
  $sql= "SELECT Name, image, description FROM subjects WHERE categoryID=1";
  $result=mysqli_query($cnn, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
    <div class="col-md-3">
    
    <?php echo '<img src='.$row['image'].' style="width: 250px; ">'; ?>
    </div>
    <div class="col-md-7 ml-4">
    <div class="row">
    <?php echo '<h4>'.$row['Name'].'</h4>'; ?>
    
    </div>
    <div class="row">
    <h4>Mô tả</h4>
    <?php echo '<p>'.$row['description'].'</p>'; ?> 

    </div>
    <div class="row">
    <button class="btn btn-warning">Đăng ký tư vấn</button>
    </div>
    <input type="" name="">
    <?php 
      echo '<input value='.$row['ID'].' name="myThuatID" type="hide" id="myThuatID">';
     ?>
    </div>
    </div>
  <?php } ?>


</div>
