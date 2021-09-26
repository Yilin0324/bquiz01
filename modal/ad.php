<?php include_once "../base.php"; ?>
<!-- 有廣告攔截器會檔modal 最好開無痕視窗練 才跑得出來 -->
<h3>新增動態文字廣告</h3>
<hr>

<form action="api/manage.php" method="post" enctype="multipart/form-data"> <!-- 上傳圖片要記得加 -->
    <table>
        <tr>
            <td>動態文字廣告:</td>
            <td><input type="text" name="text[]"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="hidden" name="table" value="ad">
                <input type="hidden" name="id[]" value="">
                <!-- 隱藏 table 的 value 記得改-->
                <!-- 新增的時候圖片value是空的 -->
            </td>
        </tr>
    </table>
</form>

