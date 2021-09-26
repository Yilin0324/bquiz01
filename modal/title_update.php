<?php include_once "../base.php"; ?>
<h3>更新標題圖片</h3>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="更新">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="title">
                <input type="hidden" name="id[]" value="<?=$_GET['id'];?>">
                <!-- value記得是get過來的id 要記得加 -->
            </td>
        </tr>
    </table>
</form>
