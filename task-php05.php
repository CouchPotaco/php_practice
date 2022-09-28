<?php
// 1.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//   もし違ったら「あなたの名前ではありません」と表示するように実装してください

$myName = "島村";
if ($myName == "島村") {
	echo "私は" . $myName . "です。";
} else {
	echo "あなたの名前ではありません。";
}
?>
<br/>

<?php
// 2.for文を使って、1から10000までの合計の値を表示してください
$total=0;
for ($i=1; $i<=10000; $i++) {
	$total += $i;
}
	echo $total;
?>
<br/>

<?php
// 3.$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$myFavoritefruit = ["桃","梨","パイナップル","マンゴー","グレープフルーツ"];

foreach($myFavoritefruit as $fruits) {
	echo "$fruits";
	echo "\n";
}
?>
<br/>
<?php
// 4.【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
	echo "\n";
  }
}
//修正
///* for文の始めの値を定義する /　のコメントアウトを修正
//$i < $end; を $i <= $end;に変更
//echo $i をecho $i;に修正
?>