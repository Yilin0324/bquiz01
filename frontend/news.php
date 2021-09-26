<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <?php include_once "frontend/marquee.php";?>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <div class="cent">更多最新消息顯示區</div>  <!-- 刻畫面 -->
    <hr>
    <?php
            $all=$News->count(['sh'=>1]);
            $div=5;
            $pages=ceil($all/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;
            ?>
        <!-- ol 抓第幾筆 裡面li撈資料庫 -->
        <ol start='<?=$start+1;?>'>
            <?php
                $rows=$News->all(['sh'=>1]," limit $start,$div");
                foreach ($rows as $key => $value) {
                    echo "<li class='sswww'>";
                    echo mb_substr($value['text'],0,20)."...";
                    echo "<span class='all' style='display:none'>{$value['text']}</span>";
                    echo "</li>";
                }
                ?>
        </ol>
    <!--做分頁 bl是原本css樣式 -->
    <div style="text-align:center;">
        <?php
            if(($now-1)>0){
                printf("<a class='bl' href='?do=news&p=%s'> < </a>",($now-1));
            }
            for ($i=1; $i <= $pages ; $i++) { 
                $font=($now==$i)?"24px":"16px";
                printf("<a class='bl' href='?do=news&p=%s' style='font-size:%s'> %s </a>",$i,$font,$i);
            }
            if(($now+1)<=$pages){
                printf("<a class='bl' href='?do=news&p=%s'> > </a>",($now+1));
            }
        ?>
    </div>
</div>
<div id="alt"
    style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
$(".sswww").hover(
    function() {
        $("#alt").html("" + $(this).children(".all").html() + "").css({
            "top": $(this).offset().top - 50
        })
        $("#alt").show()
    }
)
$(".sswww").mouseout(
    function() {
        $("#alt").hide()
    }
)
</script>