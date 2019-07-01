<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style2.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/swiper.min.css">
    <script src="<?php echo JS_PATH;?>js/swiper.js"></script>
    <style>
        .team-text{
            display: none;
        }
        .team-img:hover .team-text{
            display: block;

        }
    </style>
</head>
<body>
<?php include template("content","header"); ?>

<section id="section">
    <div class="container">
        <div class="about_top">
            <h2>关于</h2>
            <div>
                <div class="text">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c38f2f01f75ca6374611bd9fc026e0d&action=lists&moreinfo=1&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$catid,'limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php echo $v['content'];?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <img src="<?php echo IMG_PATH;?>images/about1.png">
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="about_middle">
            <h2>家居设计</h2>
            <div class="middle_left">
                <?php echo $v['idea'];?>
                <div class="clearfix"></div>
            </div>
            <div class="middle_right">
                <h4>我们的能力</h4>
                <ul>
                    <li><img src="<?php echo IMG_PATH;?>images/cir.png"><a href="###">家庭生活</a></li>
                    <li><img src="<?php echo IMG_PATH;?>images/cir.png"><a href="###">奇思妙想</a></li>
                    <li><img src="<?php echo IMG_PATH;?>images/cir.png"><a href="###">小小家居</a></li>
                    <li><img src="<?php echo IMG_PATH;?>images/cir.png"><a href="###">舒服乐园</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="about_footer">
                <h2>我们的团队</h2>
            <div class="footer_team">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ba863d39d74aa76ccba1dd1cfb8e28e&action=lists&catid=21&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','moreinfo'=>'1','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <div class="swiper-slide">
                    <div class="team-img">
                        <img src="<?php echo $v['thumb'];?>">
                        <div class="team-text">
                            <div class="text-title"><?php echo $v['name'];?></div>
                            <div class="text-content"><?php echo $v['position'];?></div>
                        </div>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        slidesPerView:3,
        loop:true,
        autoplay:true

    })
</script>
<?php include template("content","footer"); ?>