<div class="container p-3" >
  <?php             
              //connect 
  include("Xuly/cnn.php");
              //query
  mysqli_set_charset($cnn, "utf8");
  $sql="SELECT ID,image,name,generalDescription FROM lecturer WHERE isActive=1 ";
  $result=mysqli_query($cnn, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {?>

    <div class="row mt-5">
      <div class="col-md-3">

        <a href="detailLecturer.php?id=<?php echo $row['ID'] ?>">
          <img src="<?php echo $row["image"]?>"style="width: 200px; height: 250px; ">
        </a>
      </div>
      <div class="col-md-7 ml-4">
        <div class="row">
          <a href="Index.php?page=GiangVien&id=<?php echo $row['ID'] ?>" style="text-decoration: none;">
            <h4><?php echo $row["name"]; ?></h4>
          </a>
          

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

        <?php echo'<input id="" type="hidden" name="" value='.$row['ID'].'>'?>
      </div>
      <div class="row mt-5">
        <button class="btn btn-warning"><i class="fa fa-plus" onclick="seeMoreLecturer($row['ID'])"></i> Xem thêm</button>
      </div>
    </div>
  </div>
<?php } ?>
</div>

<script type="text/javascript">
  function seeMoreLecturer(lecturerID){
    $.ajax({
      url: "Xuly/seeMoreLecturer.php",
      data: {lecturerID: lecturerID},
      success: function(result){
        if (result==1) {
          window.location();
        }
        else{
          alert("lỗi");
        }
      }
    });
  }

</script>
