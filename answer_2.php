<?php

        $ancer=$_POST['ancer'];
        if(strcmp($ancer,"")==0){
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
        			target.style.display = "block";
      			} else {
        			target.style.display = "none";
      			}
   		 }
  	</script>
</head>

<body>

	
	<p id="ContentsHeader" onclick="HeaderClick();">解説</p>
	<div id="ContentsPanel">googleの画像検索機能で、画像で検索すると川の名前が出てきます。</div>
	<p><a href="select.php">問題画面に戻る</a></p>

</body>
</html>
