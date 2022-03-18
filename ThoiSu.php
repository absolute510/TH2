<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thực hành 2</title>
<link rel="stylesheet" type="text/css" href="Style.css">

</head>

<body>
    <div id="header">header</div>
    <div id="navbar">
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a class="active" href="ThoiSu.php">Thời sự</a></li>
            <li><a href="TheThao.php">Thể thao</a></li>
            <li><a href="TheGioi.php">Thế giới</a></li>
            <li><a href="GiaiTri.php">Giải trí</a></li>
        </ul>

    </div>
    <div id="content">Vẽ bảng 
    <form action=# method="POST" name="formDraw">
            <table class="form">
                <tr>
                    <th> Số hàng</th>
                    <td>
                        <input type="number" name="row" class="from-control" required>

                    </td>
                </tr>
                <tr>
                    <th> Số cột</th>
                    <td>
                        <input type="number" name="col" class="from-control" required>
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
        if (isset($_POST["row"]) && isset($_POST["col"]))
        {
            echo "Tạo bảng";
            echo "<table width=600 border=2>";
            for ($i=1 ; $i<=$_POST["row"]; $i++){
                echo "<tr>";
                for ($j=1 ; $j<=$_POST["col"]; $j++){
                    echo "<td>";
                    if ($j<=$i) {
                        echo $j;
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>";
                }
                echo "<br/>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
    <div id="footer">footer</div>
</body>
</html>