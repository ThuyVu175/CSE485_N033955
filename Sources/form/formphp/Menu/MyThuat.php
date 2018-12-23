

<div class="container p-3" >

  <?php 
  include("Xuly/cnn.php");
  mysqli_set_charset($cnn,"utf8");
  $sql= "SELECT * FROM subjects WHERE isActive=1 AND categoryID=1";
  $result=mysqli_query($cnn, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
    <div class="col-md-3">
    <a href="detailMyThuat.php?id=<?php echo $row['ID'] ?>">
       <?php echo '<img src='.$row['image'].' style="width: 250px; ">'; ?>
    </a>
   
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
    
    </div>
    </div>
  <?php } ?>


</div>
