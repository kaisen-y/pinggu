<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
</head>
<body>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="/questionnaire/careinfo/care_id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; ?>
</body>
</html>