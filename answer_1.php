<?php

	$ancer=$_POST['ancer'];	

	if(strcmp($ancer,"helloword")==0){
		$put = "正解";
	
	}else{
		$put = "不正解!";
	}
	echo "<h1 class=result>";
		echo $put;
	echo "</h1>";

?>

<!DOCTYPE html>
<head>
	<meta chraset="utf-8">
	<link rel="stylesheet" href="aiueo.css">
	<script type="text/ecmascript">
    		function HeaderClick() {
      		target = document.getElementById("ContentsPanel");
      			if (target.style.display == "none") {
        			target.style.display = "none";
      			} else {
        			target.style.display = "block";
      			}
   		 }
  	</script>
</head>

<body>

	
	<p id="ContentsHeader" onclick="HeaderClick();">解説</p>
	<div id="ContentsPanel">ハッシュ関数は暗号化すると元の値に戻せないという点からパスワードなどの暗号化に使われています。</div>
	<p><a href="select.php">問題画面に戻る</a></p>

</body>
</html>
