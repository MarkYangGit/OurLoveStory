<!DOCTYPE html>
<html>
<head>
    <title>xxx</title>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <?php include("./menu.php");?>

        <h2>留言操作</h2>
        <?php
            switch($_GET['a']){
                case "insert":
                    $data[0] = $_POST['content'];
                    $data[1] = $_POST['author'];
                    $data[2] = date("Y-m-d H:i");
                    
                    $info = implode("##",$data)."@@";
                    file_put_contents("./log/ly.db",$info,FILE_APPEND);
                    echo "留言成功";
                    echo "<a href='./index.php'>点这里跳转</a>";

                    break;
                case "del":
                    break;
                case "update":
                    break;
            }
        ?>
    </center>
</body>
</html>