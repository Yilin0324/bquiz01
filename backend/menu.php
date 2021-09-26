<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">選單管理</p>
                    <form method="post" action="api/manage.php">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="30%">主選單名稱</td>
                                    <td width="30%">選單連結網址</td>
                                    <td width="20%">次選單數</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                                <?php
                                    //顯示主選單 找parent為0的 
                                    $rows=$Menu->all(['parent'=>0]);
                                    foreach ($rows as $key => $value) {
                                    
                                ?>
                                    <tr>
                                    <td>
                                        <input type="text" name="text[]" value="<?=$value['text'];?>">
                                    </td>
                                    <td>
                                        <input type="text" name="href[]" value="<?=$value['href'];?>">
                                    </td>
                                    <td>
                                        <!-- 這邊藥用計算的欄位 -->
                                        <?=$Menu->count(['parent'=>$value['id']]);?>   
                                    </td>
                                    <td>
                                    <input type="checkbox" name="sh[]" value="<?=$value['id'];?>" 
                                        <?=$value['sh']==1?"checked":"";?>>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="del[]" value="<?=$value['id'];?>">
                                    </td>
                                    <td>
                                        <!-- 要送到次選單的modal -->
                                    <input type="button" value="編輯次選單"
                                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;../modal/submenu.php?id=<?=$value['id'];?>&#39;)">
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
                                            value="新增主選單">
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
            