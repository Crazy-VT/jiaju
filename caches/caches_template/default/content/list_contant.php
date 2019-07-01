<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>家居</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/style2.css">
</head>
<body>
<?php include template("content","header"); ?>
<section class="contant_section">
    <div class="container">
        <h2>关于</h2>
        <div class="contant_img">
            <img src="<?php echo IMG_PATH;?>images/c1.png" alt="链接超时">
        </div>
        <div class="contant_list">
            <h4>留言</h4>

            <div>
                <form method="post" action="http://localhost/install/index.php?m=formguide&c=index&a=show&formid=17&siteid=1&pc_hash=qnX7a7" name="myform" id="myform">
                    <table class="table_form" width="100%" cellspacing="0">
                        <tbody>
                        <tr>
                            <th width="80"> <font color="red">*</font> 姓名	  </th>
                            <td><input type="text" name="info[name]" id="name" size="50" value=""  class="below"  >  </td>
                        </tr>
                        <tr>
                            <th width="80"> <font color="red">*</font> 电子邮件	  </th>
                            <td><input type="text" name="info[email]" id="email" size="50" value=""  class="below"  >  </td>
                        </tr>
                        <tr>
                            <th width="80"> 留言	  </th>
                            <td><textarea name='info[message]' id='message' style='width:100%;' class="area"   ></textarea>  </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="dosubmit" id="dosubmit" class="send" value=" 提交 ">&nbsp;<input type="reset" class="send" value=" 取消 ">
                </form>

            </div>
        </div>
        <div class="contant_aside">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97584829cb44bcca1c82b00c38931937&action=lists&catid=19&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','moreinfo'=>'1','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <h4><?php echo $v['title'];?></h4>
            <div>
                <ul>
                    <li> email : <span><?php echo $v['email'];?></span></li>
                    <li> phone : <span><?php echo $v['phone'];?></span></li>
                    <li> address : <span><?php echo $v['address'];?></span></li>
                </ul>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<?php include template("content","footer"); ?>