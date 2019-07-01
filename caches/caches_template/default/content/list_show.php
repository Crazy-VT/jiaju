<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style2.css">
    <style>
        .gallery_tu img{
            width: 280px;
            height: 280px;
        }
    </style>
</head>
<body>
<?php include template("content","header"); ?>
<section class="gallery_section">
    <div class="container">
        <h2>展示</h2>
        <div class="gallery_tu">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55334d2c6c7a8df529be6ce2bb1bd0fe&action=lists&catid=%24catid&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'20',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>"></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="top">
            <figure>
                <h4>信息</h4>
                <ul>
                    <li><a href="###">主页</a></li>
                    <li><a href="###">博客</a></li>
                    <li><a href="###">关于</a></li>
                    <li><a href="###">我们</a></li>
                    <li><a href="###">联系</a></li>
                </ul>
            </figure>
            <figure>
                <h4>类别</h4>
                <ul>
                    <li><a href="###">普通住宅</a></li>
                    <li><a href="###">商务办公</a></li>
                    <li><a href="###">正常家居</a></li>
                    <li><a href="###">豪华装修</a></li>
                    <li><a href="###">个性化设计</a></li>
                </ul>
            </figure>
            <figure>
                <h4>我的账号</h4>
                <ul>
                    <li><a href="###">博客</a></li>
                    <li><a href="###">关于</a></li>
                </ul>
            </figure>
            <figure>
                <h4> 快讯</h4>
                <form  method="" action="###" name="email">
                    <div>
                        <input  id="input" type="email" placeholder="请输入你的邮箱">
                        <button type="submit" id="inputbtn"></button>
                    </div>
                </form>
            </figure>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="bottom">
            <p>Copyright © 2016.公司所有的注册名称和服务</p>
        </div>
    </div>
</footer>
</body>
</html>>