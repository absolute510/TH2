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
            <li><a class="active" href="Index.php">Home</a></li>
            <li><a href="ThoiSu.php">Thời sự</a></li>
            <li><a href="TheThao.php">Thể thao</a></li>
            <li><a href="TheGioi.php">Thế giới</a></li>
            <li><a href="GiaiTri.php">Giải trí</a></li>
        </ul>

    </div>
    <div id="content"><form action=# method="POST"  name="formregister" onsubmit="return checkRegistInfo()" onreset="return clearShown2()" accept-charset="utf-8">
	  <article id="article">
      <header id="header2">Đăng Ký</header>
     
		<table>
        <tbody>
          <tr>
            <td>&nbsp;<span id="Username2">Họ tên:</span></td>
            <td>&nbsp;
              <input type="text" name="txtUsername" id="txtUsername" required ><span id="errNameLength"></span></td>
          </tr>
          <tr>
            <td>&nbsp;<span id="Password2">Password:</span></td>
            <td>&nbsp;
              <input type="password" id="txtPass2" name="txtPass2" required></td>
          </tr>
          <tr>
            <td>&nbsp;<span id="ConfirmPassword">Confirm Password:</span></td>
            <td>&nbsp;
              <input type="password" id="txtCPass"> <span id="errcheck"></span> </td>
          </tr>
          <tr>
            <td>&nbsp;<span id="Birthday" >Ngày sinh:</span></td>
            <td>&nbsp;
              <input type="date" id="txtBirthday" name="txtBirthday" min=1980-01-01 required ><span id="errBirthday"></span></td>
          </tr>
          <tr>
            <td>&nbsp;<span id="Gender">Giới tính:</span></td>
            <td>&nbsp;
              <input type="radio" name="gender" id="rd_Nam" value="Nam" checked>
              <label for="rd_Nam">Nam</label>
              <input type="radio" name="gender" id="rd_Nu" value="Nữ">
              <label for="rd_Nu">Nữ</label></td>
          </tr>
          <tr>
            <td>&nbsp;<span id="Address">Quê quán:</span></td>
            <td>&nbsp;
              <input type="text" id="txtAddress" name="txtAddress" required></td>
          </tr>
          <tr>
            <td>&nbsp;<span id="SDT">Số điện thoại:</span></td>
            <td>&nbsp;
              <input type="text" id="txtSDT" name="txtSDT"><span id="errcheckSDT"></span> </td>
          </tr>
          <tr>
            <td>&nbsp;<span id="Mail" >Email:</span></td>
            <td>&nbsp;
              <input type="text" id="txtEmail" name="txtEmail"><span id="errcheckemail"></span> </td>
          </tr>
          
          <tr>
            <td>&nbsp;<span id="Nationality">Quốc tịch:</span></td>
            <td>&nbsp;
              <select name="nationList">
                <option value="Việt Nam">Việt Nam</option>
                <option value="Mỹ">Mỹ</option>
                <option value="Anh">Anh</option>
              </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
              <input type="reset" id="btn_res2" name="btn_res" value="Cancel">
              <button type="submit" name="reg">Đăng Ký</button></td>
          </tr>
        </tbody>
      </table>
		<span id="outputReg"></span>
	</article>
	</form>
    <?php
        if ("2"=="02"){
          echo "true";
        }
        
        include "config.php" ;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["reg"])){
                if(isset($_POST["txtUsername"])){
                    $name = $_POST["txtUsername"];
                }
                if(isset($_POST["txtPass2"])){
                    $passreg = $_POST["txtPass2"];
                    $passreg = md5($passreg);
                }
                if(isset($_POST["txtBirthday"])){
                    $birthday = $_POST["txtBirthday"];
                }
                if(isset($_POST["gender"])){
                    $gender = $_POST["gender"];
                }
                if(isset($_POST["txtAddress"])){
                    $add = $_POST["txtAddress"];
                }
                if(isset($_POST["txtSDT"])){
                    $phonenum = $_POST["txtSDT"];
                }

                if(isset($_POST["txtEmail"])){
                    $mail = $_POST["txtEmail"];
                }
                if(isset($_POST["nationList"])){
                    $nal = $_POST["nationList"];
                }
                
                $querry = "INSERT INTO tbl_user (username,password,birthday,sex,hometown,phonenum,email,nal)
                            VALUES('$name','$passreg','$birthday','$gender','$add','$phonenum','$mail','$nal')";
                
                
                if(mysqli_query($connect, $querry)){
                    echo "Đăng ký thành công!";
                }
                else{
                    echo mysqli_error($connect);
                }
            
            }

            
        }
        
    ?>
    </div>
    <?php
        include "footer.php" 
    ?>

    
    
</body>
</html>