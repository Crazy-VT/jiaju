<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style.css">
    <style>
        .figure img{
            width: 280px;
            height: 280px;
        }
        .fig img{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php include template("content","header"); ?>
<section id="section">
    <div class="list">
        <div class="welcome">
            <div class="container">
                <div class="wel_img">
                    <img src="<?php echo IMG_PATH;?>images/welcome.jpg">
                </div>
                <div class="welcome_text">
                    <h2>欢迎您来到家居设计</h2>
                    <p>我们不相信会有完美无缺的家，但是我们相信家能够完美彰显房子主人的风格特点。在家里，一切风格和功能有了这些创意和灵感，就可以打造出一方你喜欢称其为家的空间。</p>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div>
                    <h2>关于</h2>
                    <p>我们不相信会有完美无缺的家，但是我们相信家能够完美彰显房子主人的风格特点。有了这些创意和灵感，就可以打造出一方你喜欢称其为家的空间。</p>
                </div>
            </div>
            <div class="test">
                <div class="container">
                    <h2>最新设计</h2>
                    <div class="figure">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20b55221b37e600ed7744dd2d197eec7&action=lists&catid=18\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li>
                                <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>"></a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="picture">
                <div class="picture_shadow" >
                </div>
                <div class="picture_p">
                    <p>银器需要抛光的家具可以用一个好的除尘现今我们越来越重视环保的生活方式。我们不像以前一样经常买，买，买，而是最大化利用家中的现有物品。</p>
                </div>
            </div>
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