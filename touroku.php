<?php
	ini_set('display_errors',1);

	//変数nameにPOSTしたnameを代入
	$name=$_POST['name'];
	//uniqidを使って0から9までの乱数を付けたidを生成
	$id=uniqid(rand(0,9).'_',false);
        //cookieの設定
        setcookie('name',$name);
        setcookie('id',$id);

//echo('name='.$name);
  	try{
	
		//データベース接続処理
		$dsn='mysql:dbname=scoresever;host=localhost';
		$user='ncc_ctf';
		$password='password';
	     	$db=new PDO($dsn,$user,$password);
				
		//sql文をセット
		$stmt=$db->prepare('INSERT INTO point (user_id,name,point) VALUES(:user_id,:name,:point)');
		//値をセット
		$stmt->bindValue(':user_id',$id);
		$stmt->bindValue(':name',$name);
		$stmt->bindValue(':point',0);
		
		//sql文を実行
		$stmt->execute();
	 
		//次のページに移動
		header("Location:http://192.168.235.134/select.php");
		exit();
  	} catch (PDOException $e) {
		//エラー表示
		echo('<script type="text/javascript">consol.log("test")</sclipt>');
 	        print('Connection failed:'.$e->getMessage());
		die();
	}


?>
