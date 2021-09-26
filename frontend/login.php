
                <div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<?php include_once "frontend/marquee.php";?>
                    <div style="height:32px; display:block;"></div>
                                        <!--正中央-->
                                <form>
                        	    	<p class="t botli">管理員登入區</p>
                        			<p class="cent">帳號 ： <input name="acc" type="text" id="acc"></p>
                        	        <p class="cent">密碼 ： <input name="pw" type="password" id="pw"></p>
                        	        <p class="cent"><input value="送出" type="button" onclick="login()"><input type="reset" value="清除"></p>
                        	    </form>
                        	                </div>
                <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html(""+$(this).children(".all").html()+"").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
						// 改成button送到後台檢查
						function login(){
							let acc=$("#acc").val();
							let pw=$("#pw").val();
							$.get("api/login.php",{acc,pw},function(res){
								if(res==1){
									location.href="backend.php"
								}else{
									alert("帳號密碼錯誤")
								}
							})
						}
                        </script>