<?php
$res1 = mysql_query("select id,title,pic from `tg_junshi` where is_pic=1 and ctype='observation' order by ctime desc limit 7");
$res2 = mysql_query("select id,title from `tg_junshi` where ctype='aerospace' order by ctime desc limit 12");
$res3 = mysql_query("select id,title from `tg_junshi` where ctype='china' order by ctime desc limit 13");
$res4 = mysql_query("select id,title from `tg_junshi` where ctype='world' order by ctime desc limit 13");
$res5 = mysql_query("select * from `tg_junshi` where is_pic=1 and ctype='observation' order by ctime desc limit 7,3");
?>            
<!-- 内容第一部分 begin-->
<div class="conFir bgWhite">
    <!-- 左侧-内容第一部分 begin-->
    <div class="colSection">
        <!-- 焦点图 begin -->
        <div class="focusNews">
            <div id="foucsBox">
                <ul class="imgCon">
                    <?php while($row1=mysql_fetch_assoc($res1)){ ?>
                    <li><a href="./show.php?id=<?php echo $row1['id'] ?>" target="_blank">
                        <img width="560" height="315" src="<?php echo $row1['pic'] ?>" /></a>
                        <div class="imgTitle"><a href="./show.php?id=<?php echo $row1['id'] ?>" target="_blank"><?php echo $row1['title'] ?></a></div>
                        <div class="showPage"></div>
                    </li>
                    <?php } ?>
                </ul>
    
                <div class="foucs"></div>
                <div class="rBtn foucsButton">
                    <span></span>
                    <img />
                </div>
                <div class="lBtn foucsButton">
                    <span></span>
                    <img />
                </div>
            </div>
        </div>
        <!-- 焦点图 end -->
        <script type="text/javascript">
            (function() {
                var li  = $(".imgCon > li"),
                    obj = li.eq(li.length-1),
                    t   = obj.find(".imgTitle");
                !t.length&&obj.remove();
            })();
        </script>
    </div>
    <!-- 左侧-内容第一部分 begin-->
    
    <!-- 要闻区 begin -->
    <div class="newsFir">
        <ul class="listBoxT14">
            <?php while($row2=mysql_fetch_assoc($res2)){ ?>
            <li class="first"><a title="<?php echo $row2['title'] ?>" href="./show.php?id=<?php echo $row2['id'] ?>"><?php echo $row2['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- 要闻区 end -->   
</div>
<!-- 内容第一部分 end-->
            
            
<!-- 第二部分 begin-->
<div class="conBox">
    <!-- 左侧-中国军事 begin-->
    <div class="leftBox chinaMil">
        <h2 class="tit"><strong><a href="./list.php?type=china">中国军事</a></strong><em><a href="./list.php?type=china">更多</a></em></h2>
        <ul class="iconBoxT14">   
            <?php while($row3=mysql_fetch_assoc($res3)){ ?>
            <li><a title="<?php echo $row3['title'] ?>" href="./show.php?id=<?php echo $row3['id'] ?>"><?php echo $row3['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- 左侧-中国军事 end-->
    
    <!-- 中间-国际军事 begin-->
    <div class="midBox worldMil">
        <h2 class="tit"><strong><a href="./list.php?type=world">国际军事</a></strong><em><a href="./list.php?type=world">更多</a></em></h2>
        <ul class="iconBoxT14">
           <?php while($row4=mysql_fetch_assoc($res4)){ ?>
            <li><a title="<?php echo $row4['title'] ?>" href="./show.php?id=<?php echo $row4['id'] ?>"><?php echo $row4['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- 中间-国际军事 end-->
    
    <!-- 右侧 begin-->
    <div class="rigBox">
        <div class="strategy">
            <h2 class="titB"><strong><a href="./list.php?type=observation">战略评论</a></strong><em><a href="./list.php?type=observation">更多</a></em></h2>
            <?php while($row5=mysql_fetch_assoc($res5)){ ?>
            <div class="photoText">
                <h4><a title="<?php echo $row5['title'] ?>" href="./show.php?id=<?php echo $row5['id'] ?>"><?php echo $row5['title'] ?></a></h4>
                <a title="<?php echo $row5['title'] ?>" href="./show.php?id=<?php echo $row5['id'] ?>"><img alt="<?php echo $row5['title'] ?>" src="<?php echo $row5['pic'] ?>"></a>
                <h5> <?php echo mb_substr(strip_tags($row5['content']),0,50,'utf-8') ?><em>[<a href="./show.php?id=<?php echo $row5['id'] ?>" target="_blank">详细</a>]</em></h5>
            </div>
            <?php } ?>
        </div>
        <!-- 战略与格局 end-->
    </div>
    <!-- 右侧 end-->
</div>
<!-- 第二部分 end-->
            

<!-- 第3部分 begin-->
<div class="conBox">
    <!-- 左侧-军事历史 begin-->
    <?php 
    $hres = mysql_query("select * from `tg_junshi` where ctype='history' and is_pic=1 order by ctime desc limit 1");
    $hrow = mysql_fetch_assoc($hres);
    ?>
    <div class="leftBox milHistory">
        <h2 class="tit"><strong><a href="./list.php?type=history">军事历史</a></strong><em><a href="./list.php?type=history">更多</a></em></h2>
        <div class="photoText">
            <h4><a title="<?php echo $hrow['title'] ?>" href="./show.php?id=<?php echo $hrow['id'] ?>"><?php echo $hrow['title'] ?></a></h4>
            <a title="<?php echo $hrow['title'] ?>" href="./show.php?id=<?php echo $hrow['id'] ?>"><img alt="<?php echo $hrow['title'] ?>" src="<?php echo $hrow['pic'] ?>"></a>
            <h5><?php echo mb_substr(strip_tags($hrow['content']),0,50,'utf-8') ?><em>[<a href="./show.php?id=<?php echo $hrow['id'] ?>" target="_blank">详细</a>]</em></h5>
        </div>
        <?php  
        $hres1 = mysql_query("select * from `tg_junshi` where ctype='history' and is_pic=1 order by ctime desc limit 1,10");
        ?>        
        <ul class="iconBoxT14">
            <?php while($hrow1=mysql_fetch_assoc($hres1)){ ?>
            <li><a title="<?php echo $hrow1['title'] ?>" href="./show.php?id=<?php echo $hrow1['id'] ?>"><?php echo $hrow1['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- 左侧-军事历史 end-->
    
    <!-- 中间-老兵英才 begin-->
    <?php 
    $lres = mysql_query("select * from `tg_junshi` where ctype='laobing' and is_pic=1 order by ctime desc limit 1");
    $lrow = mysql_fetch_assoc($lres);
    ?>
    <div class="midBox veteran">
        <h2 class="tit"><strong><a href="./list.php?type=laobing">老兵英才</a></strong><em><a href="./list.php?type=laobing">更多</a></em></h2>
        <div class="photoText">
            <h4><a title="<?php echo $lrow['title'] ?>" href="./show.php?id=<?php echo $lrow['id'] ?>"><?php echo $lrow['title'] ?></a></h4>
            <a title="<?php echo $lrow['title'] ?>" href="./show.php?id=<?php echo $lrow['id'] ?>"><img alt="<?php echo $lrow['title'] ?>" src="<?php echo $lrow['pic'] ?>"></a>
            <h5><?php echo mb_substr(strip_tags($lrow['content']),0,50,'utf-8') ?><em>[<a href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank">详细</a>]</em></h5>
        </div>
        <?php  
        $lres1 = mysql_query("select * from `tg_junshi` where ctype='laobing' and is_pic=1 order by ctime desc limit 1,10");
        ?>        
        <ul class="iconBoxT14">
            <?php while($lrow1=mysql_fetch_assoc($lres1)){ ?>
            <li><a title="<?php echo $lrow1['title'] ?>" href="./show.php?id=<?php echo $lrow1['id'] ?>"><?php echo $lrow1['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- 中间-老兵英才 end-->
    
    <!-- 右侧-拥军优属 begin-->
    <div class="rigBox excitingTopics">
        <h2 class="titB"><strong><a href="./list.php?tyep=junshu">拥军优属</a></strong><em><a href="./list.php?tyep=junshu">更多</a></em></h2>
        <?php  
        $jres = mysql_query("select * from `tg_junshi` where ctype='junshu' and is_pic=1 order by ctime desc limit 8");
        ?>
        <ul class="focusBox">
            <li class="curr">
                <?php $jrow = mysql_fetch_assoc($jres); ?>
                <a class="img" href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><img src="<?php echo $jrow['pic'] ?>" alt="<?php echo $jrow['title'] ?>"></a>
                <h5><a href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><?php echo $jrow['title'] ?></a></h5>
            </li>  
            <?php while($jrow=mysql_fetch_assoc($jres)){ ?>                                 
            <li>
                <a class="img" href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><img src="" alt="<?php echo $jrow['title'] ?>"></a>
                <h5><a href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><?php echo mb_substr($jrow['title'],0,18,'utf-8') ?></a></h5>
            </li>
            <?php } ?>
        </ul>                    
    </div>
    <!-- 右侧-拥军优属 end-->
</div>
<!-- 第3部分 end-->


<!-- 第八部分 begin-->
<div class="conBox">
   <?php 
    $hres = mysql_query("select * from `tg_junshi` where ctype='aerospace' and is_pic=1 order by ctime desc limit 1");
    $hrow = mysql_fetch_assoc($hres);
    ?>
    <div class="leftBox milHistory">
        <h2 class="tit"><strong><a href="./list.php?type=aerospace">航空航天</a></strong><em><a href="./list.php?type=aerospace">更多</a></em></h2>
        <div class="photoText">
            <h4><a title="<?php echo $hrow['title'] ?>" href="./show.php?id=<?php echo $hrow['id'] ?>"><?php echo $hrow['title'] ?></a></h4>
            <a title="<?php echo $hrow['title'] ?>" href="./show.php?id=<?php echo $hrow['id'] ?>"><img alt="<?php echo $hrow['title'] ?>" src="<?php echo $hrow['pic'] ?>"></a>
            <h5><?php echo mb_substr(strip_tags($hrow['content']),0,50,'utf-8') ?><em>[<a href="./show.php?id=<?php echo $hrow['id'] ?>" target="_blank">详细</a>]</em></h5>
        </div>
        <?php  
        $hres1 = mysql_query("select * from `tg_junshi` where ctype='aerospace' and is_pic=1 order by ctime desc limit 1,10");
        ?>        
        <ul class="iconBoxT14">
            <?php while($hrow1=mysql_fetch_assoc($hres1)){ ?>
            <li><a title="<?php echo $hrow1['title'] ?>" href="./show.php?id=<?php echo $hrow1['id'] ?>"><?php echo $hrow1['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
   
    <?php 
    $lres = mysql_query("select * from `tg_junshi` where ctype='police' and is_pic=1 order by ctime desc limit 4");
    $lrow = mysql_fetch_assoc($lres);
    ?>
    <div class="midBox veteran">
        <h2 class="tit"><strong><a href="./list.php?type=police">公安武警</a></strong><em><a href="./list.php?type=police">更多</a></em></h2>
        <div class="photoText">
            <h4><a title="<?php echo $lrow['title'] ?>" href="./show.php?id=<?php echo $lrow['id'] ?>"><?php echo $lrow['title'] ?></a></h4>
            <a title="<?php echo $lrow['title'] ?>" href="./show.php?id=<?php echo $lrow['id'] ?>"><img alt="<?php echo $lrow['title'] ?>" src="<?php echo $lrow['pic'] ?>"></a>
            <h5><?php echo mb_substr(strip_tags($lrow['content']),0,50,'utf-8') ?><em>[<a href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank">详细</a>]</em></h5>
        </div>
        <?php  
        $lres1 = mysql_query("select * from `tg_junshi` where ctype='police' and is_pic=1 order by ctime desc limit 1,10");
        ?>        
        <ul class="iconBoxT14">
            <?php while($lrow1=mysql_fetch_assoc($lres1)){ ?>
            <li><a title="<?php echo $lrow1['title'] ?>" href="./show.php?id=<?php echo $lrow1['id'] ?>"><?php echo $lrow1['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
   
    
    <!-- 右侧 begin-->
    <div class="rigBox">
        <!-- 重磅推荐 begin-->
        <?php $lrow = mysql_fetch_assoc($lres); ?>
        <div class="heavy">
            <h2 class="titB"><strong>重磅推荐</strong></h2>
            <div id="block_id_42983" class="admin_block" blockid="42983">
                <ul class="focusBox">
                    <li class="curr">
                        <a class="img" href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank" title="<?php echo $lrow['title'] ?>"><img src="<?php echo $lrow['pic'] ?>" alt="<?php echo $lrow['title'] ?>"></a>
                        <h5><a href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank" title="<?php echo $lrow['title'] ?>"><?php echo $lrow['title'] ?></a></h5>
                    </li>
                </ul>
            </div>                     
        </div>
         <!-- 重磅推荐 end  -->
         
         <!-- 热门专题 begin-->
        <div class="hotTopics">
            <?php $lrow = mysql_fetch_assoc($lres); ?>
            <h2 class="titB"><strong>热门专题</strong></h2>
            <div id="block_id_42982" class="admin_block" blockid="42982">
                <ul class="picAll">
                    <li><a href="./show.php?id=<?php echo $lrow['id'] ?>"><img src="<?php echo $lrow['pic'] ?>" alt="<?php echo $lrow['title'] ?>"></a></li>
                    <?php $lrow = mysql_fetch_assoc($lres); ?>
                    <li><a href="./show.php?id=<?php echo $lrow['id'] ?>"><img src="<?php echo $lrow['pic'] ?>" alt="<?php echo $lrow['title'] ?>"></a></li>
                </ul>
            </div>                     
        </div>
         <!-- 热门专题 begin-->
    </div>
    <!-- 右侧 end-->
</div>
<!-- 第八部分 end-->
            
           
<!-- 第九部分 begin-->
<div class="conBox">
    <!-- 军品模型 begin-->
    <?php
    $mres = mysql_query("select * from `tg_junshi` where ctype='junpin' and is_pic=1 order by ctime desc limit 4");
    ?>
    <div class="model">
        <h2 class="tit"><strong><a href="./list.php?type=junpin">军品 · 模型</a></strong><em><a href="./list.php?type=junpin">更多</a></em></h2>
        <div id="block_id_42980" class="admin_block" blockid="42980">
            <ul class="imgTxt">
                <?php $mrow = mysql_fetch_assoc($mres); ?>
                <li>
                    <a title="<?php echo $mrow['title'] ?>" href="./show.php?id=<?php echo $mrow['id'] ?>"><img alt="<?php echo $mrow['title'] ?>" src="<?php echo $mrow['pic'] ?>"></a>
                    <h4><a href="./show.php?id=<?php echo $mrow['id'] ?>"><?php echo $mrow['title'] ?></a></h4>
                    <strong>推荐理由：</strong><?php echo mb_substr(strip_tags($mrow['content']),0,450,'utf-8') ?></h5>
                </li>
                <?php $mrow = mysql_fetch_assoc($mres); ?>
                <li>
                    <a title="<?php echo $mrow['title'] ?>" href="./show.php?id=<?php echo $mrow['id'] ?>"><img alt="<?php echo $mrow['title'] ?>" src="<?php echo $mrow['pic'] ?>"></a>
                    <h4><a href="./show.php?id=<?php echo $mrow['id'] ?>"><?php echo $mrow['title'] ?></a></h4>
                    <strong>推荐理由：</strong><?php echo mb_substr(strip_tags($mrow['content']),0,150,'utf-8') ?></h5>
                </li>
            </ul>
        </div>                
    </div>
    <!-- 军品模型 end-->
    
    <!-- 军事影视 begin-->
    <div class="rigBox milV">

        <h2 class="titB"><strong><a href="./list.php?type=junpin">军事影视</a></strong><em><a href="./list.php?type=junpin">更多</a></em></h2>
        <ul class="vList">
            <?php $mrow = mysql_fetch_assoc($mres); ?>
            <li>
                <h4><em></em><a href="./show.php?id=<?php echo $mrow['id'] ?>"><img src="<?php echo $mrow['pic'] ?>"></a></h4>
                <h5><a href="./show.php?id=<?php echo $mrow['id'] ?>" title="<?php echo $mrow['title'] ?>"><?php echo $mrow['title'] ?></a></h5>
            </li>
            <?php $mrow = mysql_fetch_assoc($mres); ?>
            <li>
                <h4><em></em><a href="./show.php?id=<?php echo $mrow['id'] ?>"><img src="<?php echo $mrow['pic'] ?>"></a></h4>
                <h5><a href="./show.php?id=<?php echo $mrow['id'] ?>" title="<?php echo $mrow['title'] ?>"><?php echo $mrow['title'] ?></a></h5>
            </li>
        </ul>
    </div>
     <!-- 军事影视 begin--> 
</div>
<!-- 第九部分 end-->

<!-- 军事游戏 begin-->
<div class="milGame" style="overflow:hidden">
    <h2 class="tit"><strong><a href="./list.php?type=milgame">军事游戏</a></strong><em><a href="./list.php?type=milgame">更多</a></em></h2>
    <ul>
        <li><a title="《抢滩登陆3D》现身“互联网与强军梦”主题论坛" href="./show.php?id=380"><img src="http://himg2.huanqiu.com/attachment2010/2016/0620/08/24/20160620082449821.jpg" alt="《抢滩登陆3D》现身“互联网与强军梦”主题论坛"></a><a href="./show.php?id=380" class="txt" title="《抢滩登陆3D》现身“互联网与强军梦”主题论坛">《抢滩登陆3D》现身“互联网与强军梦”主题论坛</a></li>
        <li><a title=" 恶敌当前是战是逃？国产游戏战地风暴火热来袭" href="./show.php?id=381"><img src="http://himg2.huanqiu.com/attachment2010/2015/1029/09/12/20151029091213607.jpg" alt=" 恶敌当前是战是逃？国产游戏战地风暴火热来袭"></a><a href="./show.php?id=381" class="txt" title=" 恶敌当前是战是逃？国产游戏战地风暴火热来袭"> 恶敌当前是战是逃？国产游戏战地风暴火热来袭</a></li>
        <li><a title="张召忠现身游戏发布会 或担任最后一炮军事顾问" href="./show.php?id=382"><img src="http://himg2.huanqiu.com/attachment2010/2015/0818/15/03/20150818030303712.jpg" alt="张召忠现身游戏发布会 或担任最后一炮军事顾问"></a><a href="./show.php?id=382" class="txt" title="张召忠现身游戏发布会 或担任最后一炮军事顾问">张召忠现身游戏发布会 或担任最后一炮军事顾问</a></li>
    </ul>
</div>
<!-- 军事游戏 end-->

</div>
</div>
</div>
