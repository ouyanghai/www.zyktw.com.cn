<?php
include("./header.php");
$size = 20;
$type = !empty($_GET['type']) ? $_GET['type']:'';
$ctype = !empty($type) ? "and ctype='{$type}'" : "";
$nres = mysql_query("select count(id) from `tg_junshi` where 1=1 {$ctype}");
$nres = mysql_fetch_row($nres);
$pages = ceil($nres[0]/$size);
$cur_page = !empty($_GET['page'])&&is_numeric($_GET['page']) ?($_GET['page']>0&&$_GET['page']<=$pages ? $_GET['page'] : 1):1;
$start = ($cur_page-1)*$size;
$res = mysql_query("select * from `tg_junshi` where 1=1 {$ctype} limit {$start},{$size}");
?>
<link href="http://himg2.huanqiu.com/statics/hq2013/css/common/layoutListPic.css" rel="stylesheet" type="text/css"/>

	 <!-- 内容第一部分 begin-->
	<div class="fallsFlow">
	    <ul class="listPicBox">
	    	<?php while($row=mysql_fetch_assoc($res)){ ?>
	        <li class="item">
	        	<?php if(!empty($row['is_pic'])){ ?>
	            <a href="./show.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['title'] ?>" target="_blank"><img src="<?php echo $row['pic'] ?>" alt="<?php echo $row['title'] ?>"/></a>
	            <?php } ?>
	            <h3>
	            	<a href="./show.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['title'] ?>" target="_blank"><?php echo $row['title'] ?></a>
	            </h3>
	            <h5><?php echo mb_substr($row['content'],0,20,'utf-8'); ?>
	            	<em>[<a href="./show.php?id=<?php echo $row['id'] ?>" target="_blank">详细</a>]</em>
	            </h5>
	            <h6><span></span><?php echo $row['ctime'] ?></h6>
	        </li>
	        <?php } ?>
	    </ul>                                   
	</div>
	<!-- 内容第一部分 end-->

	<div class="pageBox">
	    <div id="pages" class="text-c">
	    	<?php if($cur_page == 1){ ?>
                    <a class="a1" disabled="disabled">首页</a>
                    <a class="a1" disabled="disabled">上一页</a>
                <?php }else{ ?>
                    <a class="a1" href="./list.php?page=1{<?php echo '&type='.$type; ?>}">首页</a>
                    <a class="a1" href="./list.php?page=<?php echo ($cur_page-1).'&type='.$type; ?>">上一页</a>
                <?php } ?>
                <?php 
                    $s_page = $cur_page-4>0?$cur_page-4:1;
                    $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
                    for($i=$s_page;$i<=$e_page;$i++){
                        if($i == $cur_page){
                            echo '<em>'.$i.'</em>';
                        }else{ ?> 
                            <a href='./list.php?page=<?php echo $i.'&type='.$type;?>'><?php echo $i;?></a>
                <?php }} ?>
                
                <?php if($pages == $cur_page){ ?>
                    <a class="a1" disabled="disabled">下一页</a>
                    <a class="a1" disabled="disabled">尾页</a>
                <?php }else{ ?>
                    <a class="a1" href="./list.php?page=<?php echo ($cur_page+1).'&type='.$type; ?>">下一页</a>
                    <a class="a1" href="./list.php?page=<?php echo $pages.'&type='.$type; ?>">尾页</a>
                <?php } ?>
	    </div>
	</div>
	<!-- 翻页按钮 end -->

</div>
</div>
</div>
<script src="http://himg2.huanqiu.com/statics/hq2013/js/lib/jquery1.9.1.js" type="text/javascript"></script>

<script src="http://himg2.huanqiu.com/statics/hq2013/js/sea.js" type="text/javascript" data-main="http://himg2.huanqiu.com/statics/hq2013/allMinJs/hqnews/index.min.js"></script>
<script type="text/javascript">
$(function(){
//导航下拉
    $(".drop").mouseover(function(){
        $(this).find("ol").show();
    }).mouseout(function(){
        $(this).find("ol").hide();
    });

});
</script>
<?php include("./footer.php"); ?>