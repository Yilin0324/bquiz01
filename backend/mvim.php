<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">動畫圖片管理</p>
                    <form method="post" action="api/manage.php">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="70%">動畫圖片</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                                <?php
                                    $rows=$Mvim->all();
                                    foreach ($rows as $key => $value) {
                                    
                                ?>
                                    <tr>
                                    <td>
                                        <img src="img/<?=$value['img'];?>" style="width:200px;height:100px">
                                    </td>
                                    
                                    <td width="7%">
                                    <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" 
                                        <?=$value['sh']==1?"checked":"";?>>
                                    </td>
                                    <td width="7%">
                                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                                    </td>
                                    <td>
                                    <input type="button" value="更新圖片"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/mvim_update.php?id=<?=$value['id'];?>&#39;)">
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
                                    <td width="200px">
                                        <input type="button"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do;?>.php&#39;)"
                                            value="新增動畫圖片">
                                    </td>
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
            