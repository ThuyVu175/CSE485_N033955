
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


 while ($row= mysqli_fetch_array($result)) {  $subjectName=$row['Name']?>
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

         <button id="signUp" class="col-md-3 p-3 btn btn-warning btn btn-warning" onclick="signUp(<?php echo $row['ID']  ?>)" data-toggle="modal" data-target="#formSignUpSubject">
           <i id="iconSignUp" class="fa fa-plus "></i>
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
<?php 
	include('formphp/footer.php');
 ?>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="formSignUpSubject">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Đăng ký khóa học</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>      
      <div class="modal-body">
        <form action='#' method='POST' role='form'>
          <div class="row mt-2">
            <div class="row container">
              <div class="col-md-4">
                <label>Tên: </label>
              </div>
              <div class="col-md-8">
                <input class="form-control" type="text" name="Name" placeholder="Nhập tên " id="Name">
              </div>
            </div>         
          </div>
          <div class="row mt-4">
            <div class="row container">
              <div class="col-md-4">
                <label>Số điện thoại:</label>
              </div>
              <div class="col-md-8 ">
                <input  class="form-control" name="phoneNumber" placeholder="Nhập số điện thoại" id="phoneNumber">
              </div>
            </div>                   
          </div>
          <div class="row mt-4">
            <div class="row container">
              <div class="col-md-4">
                <label>Email:</label>
              </div>
              <div class="col-md-8">
                <input class="form-control" type="email" name="email" placeholder="abc@gmail.com" id="email">
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="row container">
              <div class="col-md-4">
                <label>Tên môn học</label>
              </div>
              <div class="col-md-8 ">
                <input hidden class="form-control" id="subjectID" value="<?php echo $id; ?>">
                 <input type="email" class="form-control"  id="subjectName" value="<?php echo $subjectName; ?>">
              </div>
            </div>
            <div class="row container">
              <span id="NoteEmail"></span>
            </div>            
          </div>          
        </form>   
      </div>              
      <div class="modal-footer mt-4">
        <button type="button" class="btn btn-danger"  onclick="SignUpSubject()">Đăng ký</button>
        <button type="button" data-dismiss="modal" class="btn btn-primary">Thoát</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function SignUpSubject(){
    var Name= $('#Name').val();
    var phoneNumber= $('#phoneNumber').val();
    var email= $('#email').val();   
    var subjectID= $("#subjectID").val();
    

    $.ajax({
      url: "signUpSubject.php",
      type: "post",
      data: {
        Name: Name,
        phoneNumber: phoneNumber,
        email: email,
        subjectID: subjectID
      },
      success: function(result){
        if (result==1) {
          alert("Đăng ký thành công!");
          $("#formSignUpSubject").modal('hide');
        } 
        else{
          alert("Đăng ký thất bại!");
           $("#formSignUpSubject").modal('show');
        }            
        
        }

      
    });
  }
</script>
