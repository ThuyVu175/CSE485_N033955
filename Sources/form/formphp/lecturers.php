<div class="container p-3" >

  <?php             
              //connect 
          include("Xuly/cnn.php");
              //query
          mysqli_set_charset($cnn, "utf8");
          $sql="SELECT image,name,generalDescription FROM lecturer WHERE isActive=1 ";
          $result=mysqli_query($cnn, $sql);
              //
          if(!$result){
            die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
            exit();
          }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
    <div class="col-md-3">
    
    <?php echo '<img src='.$row['image'].' style="width: 250px; height: 280px; ">'; ?>
    </div>
    <div class="col-md-7 ml-4">
    <div class="row">
    <?php echo '<h4>'.$row['name'].'</h4>'; ?>
    
    </div>
    <div class="row">
    <h4>Giới thiệu</h4>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
       <div class="col-md-11">
         <?php echo '<h5>'.$row['generalDescription'].'</h5>'; ?>
       </div>
    </div>
    <div class="row">
    <button class="btn btn-warning">Xem thêm</button>
    </div>
    </div>
    </div>
  <?php } ?>


</div>
