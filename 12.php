<html>
<head>
</head>
<body>
	<div id="it1992.com">�û�ѡ��ͼƬ</div>
	<div id="contains">
		<select name="mymenu" id="change" onchange="check(this)">
			<option value="images/1.jpg">ͼƬ1</option>
			<option value="images/2.jpg">ͼƬ2</option>
			<option value="images/3.jpg">ͼƬ3</option>
		</select>
		<img id="showtime" src="images/1.jpg"/>
	</div>
	<script type="text/javascript">
    function check(obj){
        var src=obj.value;
        $("showtime").src=src;
    }
    function $(obj){
        return document.getElementById(obj);
    }
	</script>
</body>
</html>