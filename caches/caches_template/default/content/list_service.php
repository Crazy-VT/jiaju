<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style.css">
</head>
<style>
    figcaption img{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto;
    }
</style>
<body>
<?php include template("content","header"); ?>
<section id="section">
    <div class="list">
        <div class="about">
            <div class="clearfix"></div>
            <div>
                <div class="container">
                    <h2>技术服务</h2>
                    <div class="fig">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d91bb3a7d8eda78f8a4f1579970624f&action=lists&catid=16\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','limit'=>'20',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <figcaption>
                            <span><strong>01/</strong><?php echo $v['title'];?></span>
                            <img src="<?php echo $v['thumb'];?>">
                            <p><?php echo $v['description'];?></p>
                            <a href="<?php echo $v['url'];?>">阅读更多</a>
                        </figcaption>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <div class="clearfix"></div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<?php include template("content","footer"); ?>