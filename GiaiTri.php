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
            <li><a href="TheGioi.php">Thế giới</a></li>
            <li><a class="active" href="GiaiTri.php">Giải trí</a></li>
        </ul>

    </div>
    <div id="content">
    <form action=upload.php method="POST" name="formDraw" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <th> Chọn File để Upload: </th>
                    <td>
                        <input type="file" id="fileToUpload" name="fileToUpload" class="from-control">

                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button class="control-form" type="submit" name="submit">Upload</button>
                    </td>
                    
                </tr>
            </table>
        </form>
        
        <?php
        include "upload.php" ?>
        
        
        
    </div>
    <?php
        include "footer.php" 
    ?>
</body>
</html>