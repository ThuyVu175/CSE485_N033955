

<div class="container p-3" >

  <?php 
  include("Xuly/cnn.php");
  
  $sql= "SELECT * FROM subjects WHERE isActive=1 AND categoryID=1";
  $result=mysqli_query($con, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($con));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
    <div class="col-md-3">
    <a href="detailSubject.php?id=<?php echo $row['ID'] ?>">
       <?php echo '<img src='.$row['image'].' style="width: 250px; ">'; ?>
    </a>
   
    </div>
    <div class="col-md-7 ml-4">
    <div class="row">
       <a href="detailSubject.php?id=<?php echo $row['ID'] ?>">
    <?php echo '<h4>'.$row['Name'].'</h4>'; ?>
    </a>
    </div>
    <div class="row">
    <h4>Mô tả</h4>
    <?php echo '<p>'.$row['description'].'</p>'; ?> 

    </div>
    <div class="row">
     <a href="detailSubject.php?id=<?php echo $row['ID'] ?>">
      
      Xem thêm
      <i class="fa fa-angle-double-right"></i>
     </a>
    </div>
    
    </div>
    </div>
  <?php } ?>


</div>
