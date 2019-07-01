<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<header>
    <div class="tel">
        <div class="container" style="position: relative;">
            <div class="logo">
                <img src="<?php echo IMG_PATH;?>images/logo1.png">
            </div>
            <p><strong>联系我们:</strong> <span>(800)</span> 1444 000 4040</p>
            <div class="clearfix"></div>
        </div>
    </div>
    <nav class="nav">
        <div class="container">
            <div class="link">
                <ul>
                    <li <?php if($catid==null) { ?>class="active"<?php } ?>><a href="<?php echo siteurl($siteid);?>">主页</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4041a96f40605287a6c3eff16aa020c&action=category\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li <?php if($catid==$v[catid]) { ?>class="active"<?php } ?>><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <!--<div class="clearfix"></div>-->
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
    <div class="read" >
        <div class="button">
        </div>
        <div class="sub">
        </div>
    </div>
</header>