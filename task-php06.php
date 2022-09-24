<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function calc($multi) {
	// $num = 2;
	// $result = $multi * $num;
	$result = $multi * 2;
	return $result;
}
echo calc(5);
?>

<br/>

<?php
// 2.$a と $b を仮引数に持ち、$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
	$result = $a + $b;
	return $result;
}
echo add(4,5);
?>

<br/>

<?php
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
// $arr = array(1, 3, 5 ,7, 9);
// $result = array_product($arr);
// echo $result ;

function multi($arr) {
	$result = 1;	
	foreach ($arr as $num){		
		$result *= $num;
		//$arrの要素は順に$numに代入される
		//1ループ目：$resultには1、2ループ目：$resultには1*3、3ループ目：$resultには3*5…というように順番に代入される	
	  }
	  return $result;
}

$arr = array(1, 3, 5 ,7, 9);
echo multi($arr);
// 理解できてないのであとで確認
?>

<br/>

<?php
// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
	// とりあえず配列の最初の要素を一番大きい値とする
	$max_number = $arr[0];
	foreach($arr as $a){
	  // ここで配列の中の1番大きい値を探したい
	  //順番に出力される$aが$max_numberより大きければ$max_numberは$aになる
	  //更新された$max_numberと次の$aがまた比較される
	  //...という考え方をするにはどうしたらいいのか謎
	  if($a > $max_number) {
		$max_number = $a;	
	  }
	}
	return $max_number;
  }

$arr = array(8,16,4,29,2);
echo max_array($arr);
?>

<br/>

<!-- 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください -->
<?php
//strip_tags
//指定した文字列 (string) から全てのNULLバイトとHTMLおよびPHPタグを取り除く
$examplText = '<p>指定した文字列 (string) から全ての</p><!-- Comment --> <a href="#fragment">NULLバイトとHTMLおよびPHPタグを取り除く</a>';
echo strip_tags($examplText);
//<p> と <a> はのこす
echo strip_tags($examplText, '<p><a>');
//別の書き方
echo strip_tags($examplText, ['p', 'a']);
?>
<br/>
<?php
//array_push
//一つ以上の要素を配列の最後に追加する
$stack = array("みかん", "バナナ");
array_push($stack, "リンゴ", "ラズベリー");
// print_r($stack);
foreach($stack as $arrayPlus) {
	echo $arrayPlus . "\n";
}
?>
<br/>
<?php
//array_merge
//ひとつまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo  "<br/>";
foreach($result as $arrayPlus) {
	echo $arrayPlus . "\n";
	//"color" => "red"は"color" => "green"に置き換えられている
}
?>
<br/>
<?php
//time, mktime
//time:現在時刻をUnixエポック(1970年1月1日 00:00:00 GMT)からの通算秒として返す。
echo 'Now: '. time() . "<br/>";
//mktime
//与えられた引数に従ってUNIXのタイムスタンプを返す。このタイムスタンプは、Unix epoch(1970年1月1日00:00:00 GMT)から 指定された時刻までの通算秒を表す長整数。
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "<br/>";
echo date('c', mktime(1, 2, 3, 4, 5, 2006)). "<br/>";
//謎のc
echo date("M-d-Y", mktime(0, 0, 0, 12, 30, 1997));
?>
<br/>
<?php
//date
// Unixタイムスタンプを書式化する
date_default_timezone_set('UTC'). "<br/>";
// 結果は、たとえば Monday のようになります。
echo date("l"). "<br/>";
// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A'). "<br/>";
// Wednesday the 15th のように出力
echo date('l \t\h\e jS');
?>
