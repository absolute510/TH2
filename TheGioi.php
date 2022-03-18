<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thực hành 2</title>
<link rel="stylesheet" type="text/css" href="Style.css">

</head>

<body>
    <?php
        include "header.php" ?>
    <div id="navbar">
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="ThoiSu.php">Thời sự</a></li>
            <li><a href="TheThao.php">Thể thao</a></li>
            <li><a class="active" href="TheGioi.php">Thế giới</a></li>
            <li><a href="GiaiTri.php">Giải trí</a></li>
        </ul>

    </div>
    <div id="content">
        Đăng Nhập
        <form action=# method="POST" name="formDraw">
            <table class="form">
                <tr>
                    <th> Username</th>
                    <td>
                        <input type="text" name="username" class="from-control" required>

                    </td>
                </tr>
                <tr>
                    <th> Password</th>
                    <td>
                        <input type="password" name="password" class="from-control" >

                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button class="control-form" type="reset">Xoá</button>
                    </td>
                    <td>
                    <button type="submit" name="log">Đăng Nhập</button>
                    </td>
                </tr>
            </table>
        </form>

        <?php
        
        //Khai báo sử dụng session
        session_start();
        //Khai báo utf-8 để hiển thị được tiếng việt
        header('Content-Type: text/html; charset=UTF-8');
        //Xử lý đăng nhập
        if (isset($_POST['log'])){
        
            //Kết nối tới database
            include "config.php" ;
            
            //Lấy dữ liệu nhập vào
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            
            //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
            if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        
        // mã hóa pasword
        $password = md5($password);
        
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = mysqli_query($connect,"SELECT * FROM tbl_user WHERE username='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
        
        //So sánh 2 mật khẩu có trùng khớp hay không
        
        if ($password != $row['password']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        
        //Lưu tên đăng nhập
        $_SESSION['username'] = $username;
        echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
        die();
        }
    ?>
        </div>
    <?php
        include "footer.php" 
    ?>

    


</body>
</html>