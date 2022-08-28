<?php

        $ancer=$_POST['ancer'];
        $id=$_COOKIE["id"];

        if(strcmp($ancer,"ACAZKNSFLVVT")==0){
                $dsn='mysql:dbname=scoresever;host=localhost';
                $user='ncc_ctf';
                $password='password';
                $dbh=new PDO($dsn,$user,$password);

                $sql = 'update point set point = point + 1 where user_id = ?';
                $stmt=$dbh->prepare($sql);
                $flag=$stmt->execute(array($id));

                if($flag){
                        $put = "正解";
                }else{
                        $put = 'error';
                }
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
	<div id="ContentsPanel">解説文</div>
	<p><a href="select.php">問題画面に戻る</a></p>

</body>
</html>
