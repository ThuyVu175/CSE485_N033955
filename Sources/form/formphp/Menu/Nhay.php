

<div class="container p-3" >

  <?php 
  include("Xuly/cnn.php");
  mysqli_set_charset($con,"utf8");
  $sql= "SELECT * FROM subjects WHERE categoryID=3";
  $result=mysqli_query($con, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($con));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
    <div class="col-md-3">
    <a href="detailNhay.php?id=<?php echo $row['ID'] ?>">
    <?php echo '<img src='.$row['image'].' style="width: 250px; ">'; ?>
  </a>
    </div>
    <div class="col-md-7 ml-4">
    <div class="row">
      <a href="detailNhay.php?id=<?php echo $row['ID'] ?>">
    <?php echo '<h4>'.$row['Name'].'</h4>'; ?>
    </a>
    </div>
    <div class="row">
    <h4>Mô tả</h4>
    <?php echo '<p>'.$row['description'].'</p>'; ?> 

    </div>
    <div class="row">
    <a href="detailNhay.php?id=<?php echo $row['ID'] ?>">
      <i class="fa fa-plus"></i>
      Xem thêm
    </a>
    </div>
    </div>
    </div>
  <?php } ?>


</div>
