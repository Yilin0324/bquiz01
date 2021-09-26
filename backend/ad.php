<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">動態文字廣告管理</p>
                    <form method="post" action="api/manage.php">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="86%">動態文字廣告</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                                <?php
                                    $rows=$Ad->all();
                                    foreach ($rows as $key => $value) {
                                    
                                ?>
                                    <tr>
                                    
                                    <td width="23%">
                                        <input type="text" name="text[]" value="<?=$value['text'];?>">
                                    </td>
                                    <td width="7%">
                                    <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" 
                                        <?=$value['sh']==1?"checked":"";?>>
                                    </td>
                                    <td width="7%">
                                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                                        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                                    </td>
                                    
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <!-- <td width="200px">
                                        <input type="button"
                                            onclick="op('#cover','#cvr','../modal/<?=$do;?>.php')"
                                            value="新增動態文字廣告">
                                        </td> -->
                                        <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/ad.php')" value="新增動態文字廣告"></td>
                                    <td class="cent">
                                        <input type="submit" value="修改確定">
                                        <input type="reset" value="重置">
                                        <input type="hidden" name="table" value="<?=$do;?>">
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>
            </div>
            