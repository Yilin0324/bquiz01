<?php include_once "../base.php"; ?>
<h3>編輯主選單</h3>
<hr>
<form action="api/manage.php" method="post">
    <table>
        <tr>
            <td>主選單名稱:</td>
            <td><input type="text" name="text[]"></td>
        </tr>
        <tr>
            <td>主選單名稱連結網址:</td>
            <td><input type="text" name="href[]"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="menu">
                <input type="hidden" name="id[]" value="">
            </td>
        </tr>
    </table>
</form>

