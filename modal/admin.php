<?php include_once "../base.php"; ?>
<h3>新增管理者帳號</h3>
<hr>
<form action="api/manage.php" method="post">
    <table>
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc[]"></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw[]"></td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td><input type="password" name="pw[]"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="admin">
                <input type="hidden" name="id[]" value="">
            </td>
        </tr>
    </table>
</form>
