<?php
    //array関数を使ってトランプの画像名を配列で作成
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

    //0～13の範囲でランダム数値を$leftCardに代入
    $leftCard=mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div align='center'>
	   <font size="6">High＆Lowゲーム</font><br><hr>
	   <form action="highAndLowS07.php"method="post">
			<?php
		      echo'<img src="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; //ランダムでトランプを表示
		      echo'<img src="../cards/bg.png">';  //伏せカード画像を表示
		      echo'<input type="hidden" name="leftCard"
                    value="',$leftCard,'">';  //左のカードの数字を隠しフィールドデータとして送信
	        ?>
	        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
	        <input type="radio" name="select" value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   		<input type="radio" name="select" value="Low">Low<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
	   		<input type="submit" value="  決定  ">
	   </form>
	</div>
	</body>
</html>
