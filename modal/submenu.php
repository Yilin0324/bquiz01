<?php include_once "../base.php";?>

<h3 class='cent'>編輯次選單</h3>
<hr>

<form action="api/manage.php" method="post" enctype="multipart/form-data">
<table style="margin:auto;text-align:center" id='sub'>
    <tr>
        <td>次選單名稱</td>
        <td>次選單連結網址</td>
        <td>刪除</td>
    </tr>
    <?php
        $rows=$Menu->all(['parent'=>$_GET['id']]);
        foreach ($rows as $key => $value) {
        
    ?>
    <tr>
        <td><input type="text" name="text[]" value="<?=$value['text'];?>"></td>
        <td><input type="text" name="href[]" value="<?=$value['href'];?>"></td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
        </td>
        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
        <!-- 要抓主選單的id那筆 -->
        <input type="hidden" name="parent[]" value="<?=$_GET['id'];?>">
    </tr>
    <?php
        }
    ?>

</table>
<div class="cent">
    <input type="submit" value="修改確定">
    <input type="reset" value="重置">
    <input type="button" value="更多次選單" onclick="more()">
    <input type="hidden" name="table" value="menu">
</div>
</form>

<script>
function more(){
    let str=`
                <tr>
                    <td><input type="text" name="text[]" value=""></td>
                    <td><input type="text" name="href[]" value=""></td>
                    <td><input type="hidden" name="id[]" value=""></td>
                    <td><input type="hidden" name="parent[]" value="<?=$_GET['id'];?>"></td>
                </tr>
            `
    $("#sub").append(str)

}

//   function moremenu(){
//    $('.lol').append('<tr><td><input type="text" name="title[]"value=""></td><td><input type="text" name="text[]" value=""><input type="hidden" name="id[]" value=""><input type="hidden" name="MID[]" value="<?=$_GET['id']?>"></td></tr>')
//  }
</script>