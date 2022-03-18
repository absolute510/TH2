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
        </ul>

    </div>
    <div id="content"><?php
        if (isset($_POST['reg'])){
        $name = $_POST['txtUsername'];
        $birth = $_POST['txtBirthday'];
        
        }
        echo $name + "<br>";
        echo $birth + "<br>";
    ?>
    </div>
    <?php
        include "footer.php" 
    ?>

    <?php
        
    ?>
</body>
</html>


