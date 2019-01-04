<?php
    echo "Từ khoá tìm kiếm: " . $_GET['keyword'];
?>
        <?php
            $keyword = $_GET['keyword'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "qlkhoahocttnk";
            $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
            //Kiểm tra kết nối
            if (!$connect) {
                die('kết nối không thành công ' . mysqli_connect_error());
            }
            if ($_SERVER['REQUEST_METHOD'] != 'GET')
            die('Invalid HTTP method!');

            if (empty($keyword)) {
                echo "Yêu Cầu Nhập Từ Khóa Tìm Kiếm !";
            } 
            else
            {

                $query = "SELECT * FROM `category` WHERE Name LIKE 'Múa'";
                $sqlsearch = mysqli_query($connect,$query);
                
                $num = mysqli_num_rows($sqlsearch);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 ) 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num Kết quả trả về với từ khóa <b>$keyword</b>";
                 ?>
                <table class="table table-hover " >
                    <thead style="background: #CCCC66;">
                        <td >ID Danh Mục</td>
                        <td  WIDTH= "300px">Tên Danh Mục</td>
                        <td WIDTH= "400px">Ngày Tạo</td>
                        <td>Chức Năng</td>
                    </thead>
                <?php
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    while ($kq = mysqli_fetch_assoc($sqlsearch)) {
                    ?>
                        <tbody>
                            <tr>
                            <td >
                                <?php echo $row['ID'] ?>
                            </td>
                            <td>
                                <?php echo $row['Name'] ?>
                            </td>
                            <td>
                                <?php echo $row['createDate'] ?>
                            </td>
                            <td>
                                <a href="category/edit.php?ID=<?php echo $row['ID']; ?>" >
                                <button type="button" title="SỬA THÔNG TIN DANH MỤC" class="buttonsmall">
                                <h5>SỬA</h5>
                                </button>
                                </a>            
                                <a href="category/delete.php?ID=<?php echo $row['ID']; ?>">
                                <button type="button" title="XÓA DANH MỤC" class="buttonsmall">
                                <h5>XÓA</h5>
                                </button>
                                </a>
                            </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }       
                else {
                    echo "Không tìm thấy kết quả!";
                }
            }
                mysqli_close($connect);
                ?>





<?php
        /* Tìm kiếm
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['btnsearch'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * FROM `category` WHERE Name LIKE '$search'";
 
                // Kết nối sql
                mysql_connect("localhost", "root", "", "qlkhoahocttnk");
 
                // Thực thi câu truy vấn
                $sqlsearch = mysqli_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sqlsearch);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($kq = mysqli_fetch_assoc($sqlsearch)) {
                        echo '<tr>';
                            echo "<td>{$kq['user_id']}</td>";
                            echo "<td>{$kq['username']}</td>";
                            echo "<td>{$kq['password']}</td>";
                            echo "<td>{$kq['email']}</td>";
                            echo "<td>{$kq['address']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        */
        ?>   