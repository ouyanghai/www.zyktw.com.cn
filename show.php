<?php 
include("./header.php");
$id = !empty($_GET['id'])&&is_numeric($_GET['id'])?$_GET['id']:1;
$res = mysql_query("select * from `tg_junshi` where id={$id}");
$row = mysql_fetch_assoc($res);    
$cres = mysql_query("select id,title from `tg_junshi` where ctype='china' order by ctime desc limit 12");
$gres = mysql_query("select id,title from `tg_junshi` where ctype='world' order by ctime desc limit 7");
$xres = mysql_query("select id,title,ctime from `tg_junshi` where ctype='{$row['ctype']}' order by ctime desc limit 5");
?>
<link href="http://himg2.huanqiu.com/statics/css/layoutArticleNew2015.css" rel="stylesheet" type="text/css" />
<!-- 内容区域 begin -->
<div class="main" style="margin-top:20px;">
    <div class="mainCon">
        <div class="con">
            <div class="conLeft">
                <div class="conText">
                    <h1><?php echo $row['title'] ?></h1>
                    <!-- 信息区 begin -->
                    <div class="summaryNew">
                        <strong class="timeSummary" id="pubtime_baidu"><?php echo $row['ctime'] ?></strong>
                        <strong class="fromSummary" id="source_baidu"><a href='./index.php' target='_blank' style='color:#AAA'>西陆网</a></strong>
                    </div>
                    <div class="text" id="text">
                       <?php echo $row['content'] ?>
                       <div class="reTopics">
                            <div class="tit">相关新闻</div>
                            <div class="listText">
                                <ul class="iconBoxT14">
                                    <?php while($xrow=mysql_fetch_assoc($xres)){ ?>
                                    <li><a href="./show.php?id=<?php echo $xrow['id'] ?>" target="_blank" title="<?php echo $xrow['title']?>"><?php echo $xrow['title']?></a><em><?php echo $xrow['ctime']?></em></li>
                                   <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="conRight">
                <div class="dailyTj marBot25" id="hqss">
                    <div class="tit2">
                        <span><a href="./list.php?type=china" target="_blank">国内时事</a></span><em><a href="./list.php?type=china" title="更多" target="_blank">更多</a></em>
                    </div>
                    <div>
                        <ul class="listBoxT14">
                            <?php while($crow=mysql_fetch_assoc($cres)){ ?>
                            <li class="firLi"><a target="_blank" href="./show.php?id=<?php echo $crow['id'] ?>"><?php echo $crow['title']?> </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div>
                    <script type="text/javascript" src="http://i.haodianpu.com/show.php?aid=59&param=300*300"></script> 
                </div>
                <div class="hdPic marBot25" id="hqcj">
                    <div class="tit2"><span><a href="./list.php?type=world" target="_blank">国际时事</a></span><em><a href="./list.php?type=world" title="更多" target="_blank">更多</a></em></div>
                    <div class="picList">
                        <ul class="listBoxT14">
                        <?php while($grow=mysql_fetch_assoc($gres)){ ?>
                        <li><a target="_blank" href="./show.php?id=<?php echo $grow['id'] ?>"><?php echo $grow['title']?></a></li>
                       <?php } ?>
                        </ul>
                    </div>
                </div>
                
                <div class="hqLook marBot25">
                    <div class="tit2"><span><a href="http://look.huanqiu.com/" target="_blank">娱乐聚焦</a></span><em><a href="http://look.huanqiu.com/" title="更多" target="_blank">更多</a></em></div>
                    <div class="picList" id ="wxhz1">
                        <ul class="picAll">
                        <li><a target="_blank"  id="yljj1" href="http://www.51yangsheng.com/mingxing/240541.html?huanqiu" title="他是王思聪都不敢惹的人"><img src="http://himg2.huanqiu.com/attachment2010/2016/0816/17/34/20160816053420255.jpg" alt="他是王思聪都不敢惹的人"></a><a id="yljj1" class="txt" target="_blank" href="http://www.51yangsheng.com/mingxing/240541.html?huanqiu" title="他是王思聪都不敢惹的人">他是王思聪都不敢惹的人</a></li>
                        <li><a target="_blank"  id="yljj2" href="http://read.huabian.com/mini6/show5634_1.html?src=huanqiu" title="99%不知道的惊人秘密"><img src="http://himg2.huanqiu.com/attachment2010/2016/0816/17/34/20160816053437256.jpg" alt="99%不知道的惊人秘密"></a><a id="yljj2" class="txt" target="_blank" href="http://read.huabian.com/mini6/show5634_1.html?src=huanqiu" title="99%不知道的惊人秘密">99%不知道的惊人秘密</a></li>
                        <li><a target="_blank"  id="yljj3" href="http://jk.9791.org/yule/20160728/19196.html?08c" title="她们都有黑历史"><img src="http://himg2.huanqiu.com/attachment2010/2016/0802/18/37/20160802063752917.jpg" alt="她们都有黑历史"></a><a id="yljj3" class="txt" target="_blank" href="http://jk.9791.org/yule/20160728/19196.html?08c" title="她们都有黑历史">她们都有黑历史</a></li>
                        <li><a target="_blank"  id="yljj4" href="http://www.qiwen007.com/bagua/35768.html?huanqiu" title="金星为何手撕颜王孙红雷"><img src="http://himg2.huanqiu.com/attachment2010/2016/0816/17/35/20160816053501936.jpg" alt="金星为何手撕颜王孙红雷"></a><a id="yljj4" class="txt" target="_blank" href="http://www.qiwen007.com/bagua/35768.html?huanqiu" title="金星为何手撕颜王孙红雷">金星为何手撕颜王孙红雷</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- 内容部分 end -->
    </div>
</div>
<!-- 内容区域 end -->

<?php include("./footer.php"); ?>