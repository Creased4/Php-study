<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<title>파일업로드/파일다운로드 페이지</title>
<body>
	<form action="fileUpload.php" method="post" enctype="multipart/form-data" onsubmit="return fileCheck();">
		<input type="file" name="test_file" id="test_file">
		<input type="submit" value="파일 업로드">
	</form>
</body>
</html>

<script type="text/javascript">
	function fileCheck(){
		var fileCheck = document.getElementById("test_file").value;
		if(!fileCheck){
			alert("파일을 첨부해 주세요");
		return false;
		}else {
			return true;
		}
	}
</script>