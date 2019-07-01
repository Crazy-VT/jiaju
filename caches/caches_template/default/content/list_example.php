<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style2.css">
</head>
<style>
    .blog_img{
        height: 200px;
        width: 250px;
    }
    .blog_img>img{
        width: 100%;
        height: 100%;
    }
</style>
<body>
<?php include template("content","header"); ?>
<section class="bl_section">
    <div class="container">
        <h2><?php echo $CATEGORYS[$top_parentid]['catname'];?></h2>
        <div class="blog_section">
            <aside class="list_left">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a9f33e6d5f70677d5975163565de55b4&action=lists&catid=%24catid&num=3&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <div class="blog_text">
                    <h3><?php echo $v['title'];?></h3>
                    <p>由管理员发布于 <?php echo date("Y/m/d",$v["inputtime"]);?></p>
                    <div>
                        <div class="blog_img">
                            <img src="<?php echo $v['thumb'];?>">
                        </div>
                        <div class="blog_read">
                            <p><?php echo $v['url'];?></p>
                            <p><?php echo $v['description'];?></p>
                            <button class="more"><a href="<?php echo $v['url'];?>">阅读更多</a></button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="blog_admin">
                        <ul>
                            <li><a href="###"><img src="<?php echo IMG_PATH;?>images/h1.png"><?php echo $CATEGORYS[$v['catid']]['catname'];?></a></li>
                            <li><img src="<?php echo IMG_PATH;?>images/h2.png"><?php echo date("Y/m/d",$v['inputtime']);?></li>
                            <li><a href="###"><img src="<?php echo IMG_PATH;?>images/h3.png">管理员</a></li>
                        </ul>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </aside>
            <div class=" list_right">
                <div>
                    <h3>类别</h3>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=40d58ece8d5661a883ebe84586aa26b4&action=category&catid=%24top_parentid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'limit'=>'20',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div>
                    <h3>最新的案例</h3>
                    <ul>
                        <li><a href="###">休闲</a></li>
                        <li><a href="###">娱乐</a></li>
                        <li><a href="###">办公</a></li>
                        <li><a href="###">儿童</a></li>
                        <li><a href="###">聚会</a></li>
                    </ul>
                </div>
                <div>
                    <h3>档案</h3>
                    <ul>
                        <li><a href="###"><time>2016/1</time></a></li>
                        <li><a href="###"><time>2016/2</time></a></li>
                        <li><a href="###"><time>2016/3</time></a></li>
                        <li><a href="###"><time>2016/4</time></a></li>
                        <li><a href="###"><time>2016/5</time></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <style>
                .container>a:first-child{
                    display: none;
                }
                .container>a:not(.a1){
                    display: none;
                }
                .container>span{
                    display: none;
                }
                .container>.a1{
                    width:90px;
                    height:30px;
                    border-radius: 15px;
                    background-color: #F7F7F7;
                    border: 1px solid #cccccc;
                    color:#999999;
                }
            </style>
            <div class="blog_bt">
                <div class="container">
                    <!--                    <input class="blog_a" type="button" value="前一页">-->
                    <!--                    <input class="blog_a" type="button" value="下一页">-->
                    <?php echo $pages;?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include template("content","footer"); ?>