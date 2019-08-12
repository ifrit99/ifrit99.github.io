package jp.co.f1.superintro.ch8;

import java.util.Scanner;				//キーボード入力をする為のimport文Scannerクラス準備

public class HighAndLowS07{

	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);				//Scannerクラスの変数sc宣言
		System.out.println("**************");			//タイトル表示
		System.out.println("* High & Low *");
		System.out.println("**************");
		System.out.println();
		while(true) {														//ループさせる為のwhile文
			int leftCard=(int)(Math.random()*9)+1;		//int型変数leftCardにランダムで1～９の数値を代入
			int rightCard=(int)(Math.random()*9)+1;	//int型変数rightCardにランダムで1～９の数値を代入
			System.out.println("   [問題表示]");				//問題表示と左のカードと右の伏せカード表示
			System.out.println("*****    *****");
			System.out.println("*   *    * * *");
			System.out.println("* "+leftCard+" *    * * *");
			System.out.println("*   *    * * *");
			System.out.println("*****    *****");
			System.out.print("High or Low ?(h/l) >");			//h or l入力促す文を表示
			String select=sc.nextLine();			//String型に対応したnextLine()メソッドを使用してキーボード入力画面追加
			if(select.equals("h")){				//HighまたはLowを選択しました。を表示
				System.out.println("→Highを選択しました。");				//キーボード入力した文字がhならHighを選択しました。を表示
			}else {
				System.out.println("→Lowを選択しました。");				//キーボード入力した文字がlならLowを選択しました。を表示
			}
			String result;														//勝敗判定の結果を入れる為のString型変数result宣言
			if(leftCard<rightCard) {				//勝敗判定if elseif文
				result="h";								//右のカードが左のカードより数字が大きかったらresultにhを代入
			}else if(leftCard>rightCard){
				result="l";								//右のカードが左のカードより数字が小さかったらresultにlを代入
			}else {
				result=select;							//右のカードと左のカードが同じ数字ならresultにselect(キーボード入力したhまたはl)を代入
			}
			System.out.println();								//結果表示と左と右のカードを表示
			System.out.println("   [結果表示]");
			System.out.println("*****    *****");
			System.out.println("*   *    *   *");
			System.out.println("* "+leftCard+" *    * "+rightCard+" *");
			System.out.println("*   *    *   *");
			System.out.println("*****    *****");
			if(result.equals(select)) {				//勝敗表示
				System.out.println("→You Win!");			//resultがキーボード入力したhまたはlと同じならYou Win!と表示してループ継続
				System.out.println();
			}else {
				System.out.println("→You Lose...");				//resultがキーボード入力したhまたはlと同じじゃなかったらYou Lose...と--ゲーム終了--を表示してbreakでループ終了
				System.out.println();
				break;
			}
			System.out.println("--ゲーム終了--");
		}
	}
}
