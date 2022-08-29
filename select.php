<!DOCTYPE html>
<html>
<head>
<title>問題選択</title>
<meta charset="utf-8">
<link rel="stylesheet" href="aiueo.css">
</head>
<body>
	<div id="contents">
		<div id="main">
			<h1>問題選択</h1>
			<p id="questions"><a href="tutorial.html">チュートリアル</a><br>
			<a href="question.html">問題1</a><br>
			<a href="question_2.html">問題2</a><br>
	<!--		<a href="question_3.html">問題3</a><br> -->
			<a href="question_4.html">問題3</a><br>
			<a href="question_5.html">問題4</a><br>
			<a href="question_6.html">問題5</a><p>

			<p><a href="ctf.html">タイトルに戻る</a></p>
		</div>
	
	<!--	<div id="left">
			<?php
				try{

					$id=$_COOKIE["id"];
					$name=$_COOKIE["name"];
					$dsn='mysql:dbname=scoresever;host=localhost';
				        $user='ncc_ctf';
			        	$password='password';
				        $dbh=new PDO($dsn,$user,$password);

					$sql = 'select point from point where user_id = ?';
		
					$stmt = $dbh->prepare($sql);
					$stmt->execute(array($id));

					while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
     						print($name.'さんの点数'.'<br>');
        					print($result);
    					}

				}catch(PDOException $e) {
        	        		//エラー表示
        		        	echo('<script type="text/javascript">consol.log("test")</sclipt>');
			                print('Connection failed:'.$e->getMessage());
        			        die();
				}
 		
			?>
		</div>  
	</div>
</body>
</html>
