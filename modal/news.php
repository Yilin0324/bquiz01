<?php include_once "../base.php"; ?>
<h3>新增最新消息資料</h3>
<hr>
<form action="api/manage.php" method="post" enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>最新消息資料:</td>
            <td><textarea name="text[]" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="news">
                <input type="hidden" name="id[]" value="">
            </td>
        </tr>
    </table>
</form>
