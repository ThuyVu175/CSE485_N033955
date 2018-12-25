<?php 
	include('formphp/head.php');
	include('formphp/menu.php');
 ?>

<?php 
	include('Xuly/cnn.php');
	$id=$_GET['id'];
	 $sql="SELECT * FROM lecturer WHERE isActive=1 AND ID='$id'";
  $result=mysqli_query($con, $sql);

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
            <?php echo '<h4>'.$row['name'].'</h4>'; ?>
          </a>
          

        </div>
        <div class="row">
          <h4 class="text-danger">Giới thiệu</h4>
        </div>
        <div class="row pb-5">
          <div class="col-md-1"></div>
          <div class="col-md-11">
           <?php echo '<h5>'.$row['detailedDescription'].'</h5>'; ?>
         </div>
       </div>
    </div>
  </div>
</div>
   
<?php } ?>
</div>
<?php 
	include('formphp/footer.php');
 ?>
