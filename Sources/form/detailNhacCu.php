
<?php 
	include('formphp/head.php');
	include('formphp/menu.php');
 ?>


<?php 
	include('Xuly/cnn.php');
	$id=$_GET['id'];
	 $sql="SELECT * FROM subjects WHERE isActive=1 AND ID='$id'";
  $result=mysqli_query($con, $sql);
  $sqlImg= "SELECT * FROM image WHERE isActive=1 AND subjectID='$id'";
  $result1=mysqli_query($con, $sqlImg);

 while ($row= mysqli_fetch_array($result)) {?>
<div class="container">
	 <div class="row mt-5">
      <div class="col-md-3">

        <a href="#">
          <img src="<?php echo $row["image"]?>"" style="width: 200px; height: 250px; ">
        </a>
      </div>
      <div class="col-md-7 ml-4">
        <div class="row">
          <a href="#" style="text-decoration: none;">
            <?php echo '<h4>'.$row['Name'].'</h4>'; ?>
          </a>
        </div>
        <div class="row">
          <h4 class="text-danger">Giới thiệu</h4>
        </div>
        <div class="row pb-5">
          <div class="col-md-1"></div>
          <div class="col-md-11">
           <?php echo '<h5>'.$row['description'].'</h5>'; ?>
         </div>
       </div>
       <div class="row">
         <button class="col-md-3 btn btn-warning btn btn-warning">
           <i class="fa fa-plus "></i>
           Đăng ký tư vấn
         </button>
       </div>
    </div>
  </div>

  <div class="row mt-5 mb-5 ">
    <div class="col-md-12">
      <div class="row">
      <h4 class="text-warning">Một số tác phẩm của học viên</h4>
      </div>

    <div class="row mt-3">
       <?php  while ($row= mysqli_fetch_array($result1)) { ?>
      <div class="col-md-4 ">
        <div class="row">
           <?php echo '<img src='.$row['content'].' style="width: 350px; height: 230px; ">'; ?>
        </div>
        <div class="row mt-3">
          <?php echo '<h3>'.$row['Name'].'</h3>'; ?>
    
        </div>
        <div class="row mt-3 text-left">

          <?php echo '<p class="col-md-10">'.$row['description'].'</p>'; ?> 
        </div>
      </div>
      <?php } ?>
    </div>
    </div>
    
  </div>
</div>


   
<?php } ?>
</div>
<?php 
	include('formphp/footer.php');
 ?>
