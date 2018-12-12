

<div class="container p-3" >

  <?php 
  include("cnn.php");
  mysqli_set_charset($cnn,"utf8");
  $sql= "SELECT Name, image, description FROM subjects WHERE categoryID=1";
  $result=mysqli_query($cnn, $sql);
              //
  if(!$result){
    die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
    exit();
  }
  while ($row= mysqli_fetch_array($result)) {

    echo '<div class="row mt-5">';
    echo '<div class="col-md-3">';
    echo '<img src="'.$row['image'].'" style="width: 250px; height: 200">';
    echo'</div>';
    echo' <div class="col-md-7 ml-4">';
    echo' <div class="row">';
    echo' <h4>'.$row['Name'].'</h4>';
    echo' </div>';
    echo' <div class="row">';
    echo' <h4>Mô tả</h4>';
    echo' <p>'.$row['description'].'</p>';

    echo' </div>';
    echo' <div class="row">';
    echo' <button class="btn btn-warning">Đăng ký</button>';
    echo' </div>';
    echo' </div>';
    echo' </div>';
  }
  ?>

</div>
</div>