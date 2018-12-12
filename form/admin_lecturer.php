<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</title>
  <link rel="stylesheet" type="text/css" href="css-formadmin.css">
  <link rel="stylesheet" type="text/css" href="../package/bootstrap-4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../package/FontAwesome.4.7.0/Content/Content/font-awesome.css">
  <script type="text/javascript" src="../package/jQuery.3.3.1/Content/Scripts/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../package/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>

  <script type="text/javascript " src="../package/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Script.js"></script>

  <script>
    function xoagv() {
      alert('Giảng viên đã được xóa!');
    }
  </script>
</head>

<body style="background: #E6E6FA">
  <div style="background:	#F5DEB3;">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="../img/logobale.png" style="width: 150px;height: auto;">
        </div>
        <div class="col-md-8" style="margin-top: 50px;">
          <font face="family">
            <h2 class="h2"> TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</h2>
          </font>
        </div>
        <div class="col-md-2 ">

          <div style="padding-top: 50px;margin-right: -130px;">

            <nav>
              <a href="#">
                <font color="black"> Thông Báo |</font>
              </a>
              <a href="#">
                <font color="black">Admin |</font>
              </a>
              <a href="#">
                <font color="black">Đăng Xuất</font>
              </a>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--menu-->
  <nav class="navbar navbar-expand-md navbar-dark sticky-top" id="menu">
    <a class="navbar-brand" href="#">
      <img src="../img/home.jpg" style="width: 40px; ">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="#qlgiangvien">
            <font face="Verdana" size="3" color="white"> QUẢN LÍ GIẢNG VIÊN </font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qlhocvien">
            <font face="Verdana" size="3" color="white">QUẢN LÍ HỌC VIÊN</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qlkhoahoc">
            <font face="Verdana" size="3" color="white">QUẢN LÍ KHÓA HỌC</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qldanhmuc">
            <font face="Verdana" size="3" color="white">QUẢN LÍ DANH MỤC</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tongquan">
            <font face="Verdana" size="3" color="white">QUẢN LÍ ĐĂNG KÍ</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tongquan">
            <font face="Verdana" size="3" color="white">TỔNG QUAN</font>
          </a>
        </li>
      </ul>
    </div>
    <input type="text" name="search" placeholder="Tìm kiếm ...">
    <button type="submit">
      <img src="../img/search.png" style="width: 34px;height: auto; ">
    </button>
  </nav>

  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 offset-md-2">
        <form title="THÊM GIẢNG VIÊN">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Giảng Viên </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Tên Giảng Viên</td>
                      <td>
                        <input type="text" name="Name.." id="ten_gv">
                      </td>
                    </tr>

                    <tr>
                      <td>Năm Sinh</td>
                      <td>
                        <input type="text" name="Date.." id="namsinh_gv">
                      </td>
                    </tr>
                  </table>
                  <label for="trinhdohocvan"> Trình Độ Học Vấn</label>
                  <textarea class="form-control" id="trinhdohocvan" rows="3"></textarea>
                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Chọn Ảnh</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!---->

        </form>
      </div>
    </div>
    <br><br>
    <h3 align="center" class="part">GIẢNG VIÊN BỘ MÔN MÚA BALE NGHỆ THUẬT</h3>
    <div class="row" style="margin-top: 100px;">
      <!--gv1-->
      <div class="col-md-3"><img src="../img/slideshow1.jpg" class="img"></div>
      <div class="col-md-7">
        <h4 style="color:#008000"> Đặng Thị Yến Ngọc – Giảng viên dạy múa Ballet</h4>
        <p>Năm sinh: 1987</p>
        <h5 style="color: #4169E1;">Trình độ học vấn</h5>
        <p>2002: Tốt nghiệp Cao Đẳng Nghệ Thuật Hà Nội <br>
          2008: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành diễn viên <br>
          2011: Tốt nghiệp Học viện Múa Việt Nam – chuyên ngành huấn luyện
        </p>
        <h5 style="color: #4169E1;">Lớp đang giảng dạy</h5>
        <p>
          Lớp ballet B01-Số lượng học viên: 25/30<br>
          Lớp ballet B02-Số lượng học viên: 23/30<br>
          Lớp ballet B03-Số lượng học viên: 24/30<br>
        </p>
      </div>
      <div class="col-md-2" style="margin-top: 100px;">
        <button type="button" title="SỬA THÔNG TIN GIẢNG VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
          <h5> SỬA</h5>
        </button>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông  Tin Giảng Viên </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Tên Giảng Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>
              
                  <tr>
                    <td>Năm Sinh</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <label for="trinhdohocvan"> Trình Độ Học Vấn</label>
                <textarea class="form-control" id="trinhdohocvan" rows="3"></textarea>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" title="XÓA GIẢNG VIÊN" class="buttonsmall" onclick="xoagv();">
          <h5>XÓA</h5>
        </button>
      </div>
      <!--gv2-->
      <div class="col-md-3"><img src="../img/slideshow2.jpg" class="img"></div>
      <div class="col-md-7">
        <h4 style="color:#008000"> Vũ Thị Bích Thảo – Giảng viên dạy múa Ballet</h4>
        <p>Năm sinh: 1987</p>
        <h5 style="color: #4169E1;">Trình độ học vấn</h5>
        <p>2012: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành múa dân gian dân tộc và múa balle Tốt nghiệp Học viện
          Múa Việt Nam – chuyên ngành huấn luyện
        </p>
        <h5 style="color: #4169E1;">Lớp đang giảng dạy</h5>
        <p>
          <p>
            Lớp ballet B11-Số lượng học viên: 21/30<br>
            Lớp ballet B12-Số lượng học viên: 23/30<br>
          </p>
        </p>
      </div>
      <div class="col-md-2" style="margin-top: 100px;">
        <button type="button" title="SỬA THÔNG TIN GIẢNG VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter2">
          <h5> SỬA</h5>
        </button>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông  Tin Giảng Viên </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Tên Giảng Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>
              
                  <tr>
                    <td>Năm Sinh</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <label for="trinhdohocvan"> Trình Độ Học Vấn</label>
                <textarea class="form-control" id="trinhdohocvan" rows="3"></textarea>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" title="XÓA GIẢNG VIÊN" class="buttonsmall" onclick="xoagv();">
          <h5>XÓA</h5>
        </button>
      </div>
    </div>
    <br><br>
    <!---->
    <h3 align="center" class="part">GIẢNG VIÊN BỘ MÔN DẠY ĐÀN PIANO</h3>
    <div class="row" style="margin-top: 100px;">
      <div class="col-md-3"><img src="../img/slideshow3.jpg" class="img"></div>
      <div class="col-md-7">
        <h4 style="color:#008000"> Vũ Thị Bích Thảo – Giảng viên dạy múa Ballet</h4>
        <p>Năm sinh: 1987</p>
        <h5 style="color: #4169E1;">Trình độ học vấn</h5>
        <p>2012: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành múa dân gian dân tộc và múa balle Tốt nghiệp Học viện
          Múa Việt Nam – chuyên ngành huấn luyện
        </p>
        <h5 style="color: #4169E1;">Lớp đang giảng dạy</h5>
        <p>
          <p>
            Lớp ballet B11-Số lượng học viên: 21/30<br>
            Lớp ballet B12-Số lượng học viên: 23/30<br>
          </p>
        </p>
      </div>
      <div class="col-md-2" style="margin-top: 100px;">
        <button type="button" title="SỬA THÔNG TIN GIẢNG VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter3">
          <h5> SỬA</h5>
        </button>
        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Giảng Viên </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Tên Giảng Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>

                  <tr>
                    <td>Năm Sinh</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <label for="trinhdohocvan"> Trình Độ Học Vấn</label>
                <textarea class="form-control" id="trinhdohocvan" rows="3"></textarea>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" title="XÓA GIẢNG VIÊN" class="buttonsmall" onclick="xoagv();">
          <h5>XÓA</h5>
        </button>
      </div>
    </div>
    <!---->


    <br><br>
    <h3 align="center" class="part">GIẢNG VIÊN BỘ MÔN VẼ- MĨ THUẬT</h3>
    <div class="row" style="margin-top: 100px;">
      <div class="col-md-3"><img src="../img/slideshow1.jpg" class="img"></div>
      <div class="col-md-7">
        <h4 style="color:#008000"> Vũ Thị Bích Thảo – Giảng viên dạy múa Ballet</h4>
        <p>Năm sinh: 1987</p>
        <h5 style="color: #4169E1;">Trình độ học vấn</h5>
        <p>2012: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành múa dân gian dân tộc và múa balle Tốt nghiệp Học viện
          Múa Việt Nam – chuyên ngành huấn luyện
        </p>
        <h5 style="color: #4169E1;">Lớp đang giảng dạy</h5>
        <p>
          <p>
            Lớp ballet B11-Số lượng học viên: 21/30<br>
            Lớp ballet B12-Số lượng học viên: 23/30<br>
          </p>
        </p>
      </div>
      <div class="col-md-2" style="margin-top: 100px;">
        <button type="button" title="SỬA THÔNG TIN GIẢNG VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter4">
          <h5> SỬA</h5>
        </button>
        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Giảng Viên </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Tên Giảng Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>

                  <tr>
                    <td>Năm Sinh</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <label for="trinhdohocvan"> Trình Độ Học Vấn</label>
                <textarea class="form-control" id="trinhdohocvan" rows="3"></textarea>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" title="XÓA GIẢNG VIÊN" class="buttonsmall" onclick="xoagv();">
          <h5>XÓA</h5>
        </button>
      </div>
    </div>
  </div>
</body>
<footer>
  <br><br><br>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 footer-navigation">
          <h3><a href="#">Trung tâm phát triển nghệ thuật EAM</a></h3>
          <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong>
              · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
          <p class="company-name">Trung tâm EAM © 2018 </p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
          <div>
            <i class="fa fa-map-marker footer-contacts-icon "></i>
            <p><span class="">175 Tây Sơn</span> Đống Đa, Hà Nội</p>
          </div>
          <div>
            <i class="fa fa-phone footer-contacts-icon "></i>
            <p class="footer-center-info email text-left"> 0965520566</p>
          </div>
          <div>
            <i class="fa fa-envelope footer-contacts-icon"></i>
            <p> <a href="#" target="_blank">ngantt62@wru.vn</a></p>
          </div>
        </div>

        <div class="col-md-3 footer-about">
          <h4>Đơn vị liên kết</h4>
          <p> </p>
          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a
              href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
        </div>
      </div>
    </div>
  </div>

</footer>

</html>