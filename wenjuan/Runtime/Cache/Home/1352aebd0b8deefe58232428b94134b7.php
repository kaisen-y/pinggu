<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
</head>
<body>
欢迎,<?php echo ($member_name); ?><a href="/user/logout">退出</a><br/>
<a href="/questionnaire">我的评估项目</a>
</body>
</html>