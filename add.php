<!DOCTYPE html>
<html>
<head>
    <title>xxx</title>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <?php include("./menu.php");?>
        <h2>浏览留言</h2>
        <form action="action.php?a=insert" method="post">
            <table width="500" border="0">
                <tr>
                    <td>内容</td>
                    <td><textarea rows="6" cols="35" name="content"></textarea></td>
                </tr>
                <tr>
                    <td>留言者</td>
                    <td><input type="text" name="author"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" value="添加"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>