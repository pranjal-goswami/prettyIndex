<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Server Index</title>
<link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="bootstrap/css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<style>
.folder{
	width:250px;
	height:40px;
	float:left;
	list-style:none;
	padding:6px;
}
.folder-active
{
	border:1px solid #999;
	background:#f0f0f0;
	cursor:pointer;
}

</style>
</head>

<body>
<div class="jumbotron">
  <div class="container">
 <? $dir = dirname(dirname(__FILE__)).'\\'; 
 	echo $dir;
	
 ?>
  </div>
</div>
<div style="width:1000px; margin:auto;">
<ul style="">
<?
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if(filetype($dir . $file) == 'dir') {
					?>
                    <li class="folder" link-target="<? echo $file; ?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;  <? echo $file; ?></li>
                    <?
				}
			}
			closedir($dh);
		}
	}
	?>
    </ul>
</div>

<div style="width:100%; padding:5px; position:fixed; bottom:10px;" >&copy; 2013 All Rights Reserved | Pranjal Goswami<span class="pull-right">Powered by: <a href="http://pranjalgoswami.in/work" target="_blank">BADesigns</a></span></div>

<script>
$('.folder').hover(
  function () {
    $(this).addClass('folder-active');
  },
  function () {
    $(this).removeClass('folder-active');
  }
);
$('.folder').click(function(){
	window.open("../"+$(this).attr('link-target'),'_blank');
});

</script>
</body>
</html>
