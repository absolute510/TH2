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
            <li><a class="active" href="TheThao.php">Thể thao</a></li>
            <li><a href="TheGioi.php">Thế giới</a></li>
            <li><a href="GiaiTri.php">Giải trí</a></li>
        </ul>

    </div>
    <div id="content">
    <form action=# method="POST" name="formDraw">
            <table class="form">
                <tr>
                    <th> Số hàng</th>
                    <td>
                        <input type="number" name="row" class="from-control" required>

                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button class="control-form" type="reset">Xoá</button>
                    </td>
                    <td>
                        <button class="control-form" type="submit">Vẽ</button>
                    </td>
                </tr>
            </table>
        </form>
        
        
        
        
        <?php
        if (isset($_POST["row"]))
        {
            echo "Tạo bảng";
            echo "<br>";
            for ($i=1 ; $i<=$_POST["row"]; $i++){
                for ($j=1 ; $j<=$i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
            
        }
        if ("2"=="02"){
            echo "true";
          }
          else echo "false";
        ?>
    </div>
    <?php
        include "footer.php" 
    ?>
</body>
</html>