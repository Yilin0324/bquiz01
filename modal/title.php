<?php include_once "../base.php"; ?>
<h3>新增標題區圖片</h3>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text[]"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="title">
                <input type="hidden" name="id[]" value="">
            </td>
        </tr>
    </table>
</form>
