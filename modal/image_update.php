<?php include_once "../base.php"; ?>
<h3>更新校園印象圖片</h3>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園印象圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="更新">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="image">
                <input type="hidden" name="id[]" value="<?=$_GET['id'];?>">
            </td>
        </tr>
    </table>
</form>
