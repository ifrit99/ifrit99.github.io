<?php
//array関数を使ってトランプの画像名を配列で作成
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//フォームのPOST送信データを各変数に代入
$lCard=$_POST['leftCard'];
$hlSelect=$_POST['select'];

//0～13の範囲でランダム数値を$rightCardに代入
$rightCard=mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div align='center'>
	   <font size="6">High＆Lowゲーム</font><br><hr>
			<?php
		      echo'<img src="../cards/',$cards[$lCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;'; //隠しフィールドで受け取った左カードと同じカードを表示
		      echo'<img src="../cards/',$cards[$rightCard],'">';  //ランダムで右のカードを表示
		      if($lCard<$rightCard){      //High or Lowを判定
		          $result="High";
		      }elseif($lCard>$rightCard){
		          $result="Low";
		      }else{
		          $result="$hlSelect";
		      }
	        ?>
	        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<?php
			  echo '「',"$hlSelect",'」を選択しました。';  //「High」または「Low」を選択しました。を表示
			?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<?php
			  if($hlSelect==$result){    //勝敗判定
			      echo 'You Win!';
			  }else{
			      echo 'You Lose...';
			  }
			?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			<?php
			     echo '<a href="http://localhost:8888/High_and_Low/highAndLowS03.php">
                    もう一度挑戦</a>'   //もう一度挑戦のリンクを表示
			?>
	</div>
	</body>
</html>
