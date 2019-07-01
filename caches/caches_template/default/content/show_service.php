<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style.css">
</head>
<style>
    .container{
        width: 900px;
        margin: 0 auto;
    }
    .title{
        text-align: center;
        color: seagreen;
        font-size: 40px;
        padding: 40px 0 30px 0;
    }
    .content{
        box-sizing: border-box;
        margin: 0px;
        padding: 5px 0px;
        color: rgb(170, 170, 170);
        font-size: medium;
        line-height: 1.5;
        font-family: "Microsoft YaHei";
    }
    .slide-nav{
        width: 100px;
        height: 250px;
        position: fixed;
        border: 1px solid #ccc;
        left: 50%;
        top: 50%;
        margin-top: -125px;
        margin-left: -600px;
        background: rgba(0,0,0,0.6);
    }
    .slide-nav p{
        color: #ccc;
        font-size: 20px;
        padding: 18px 0;
        text-align: center;
        box-sizing: border-box;
    }
</style>
<body>
<?php include template("content","header"); ?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d5af71f969d2b774c8167efe438cdb2b&action=lists&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
<div class="container">
    <a name="title"></a>
<h2 class="title"><?php echo $title;?></h2>
<p class="content"><?php echo $content;?></p>
<div class="slide-nav">
    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
    <a href="<?php echo $v['url'];?>#title"><p><?php echo $v['title'];?></p></a>
    <?php $n++;}unset($n); ?>
</div>
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php include template("content","footer"); ?>
</body>
</html>