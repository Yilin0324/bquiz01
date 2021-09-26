<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="api/manage.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">頁尾版權資料 : </td>
                    <!-- name 和 資料表 要記得更改 -->
                    <td width="50%"><input type="text" name="bottom[]" value="<?=$Bottom->find(1)['bottom'];?>"></td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                        <input type="hidden" name="id[]" value="1">
                        <!-- 這邊的value 是 1 -->
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
</div>
