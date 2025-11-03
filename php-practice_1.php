<?php
// Q1 変数と文字列
$name = '「土谷」';
$newname = '私の名前は'. $name .'です。';
var_dump($newname);

// Q2 四則演算
$num = 5 * 4;
var_dump($num);
$num /= 2;
var_dump($num);

// Q3 日付操作
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$selectOS = 'Windows';
if ($selectOS === 'mac' || $selectOS === 'Windows') {
    echo ('使用OSは' . $selectOS . 'です。');
} else {
    echo ('どちらでもありません。');
};

// Q5 条件分岐-2 三項演算子
$age = 19;
$ageMessage = ($age > 18) ? '成人です。' : '未成年です。';
echo $ageMessage;

// Q6 配列
$prefecture = ['東京都','神奈川県','千葉県','埼玉県','茨城県','群馬県'];
var_dump($prefecture[4]);
echo $prefecture[3] . 'と' . $prefecture[4] . 'は関東の都道府県です。';

// Q7 連想配列-1
$location = [
  '神奈川県' => '横浜市' ,
  '東京都' => '新宿区' ,
  '千葉県' => '千葉市' ,
  '茨城県' => '水戸市' ,
  '栃木県' => '宇都宮市' ,
  '群馬県' => '前橋市' ,
  '埼玉県' => 'さいたま市',
  '愛知県' => '名古屋市',
  '静岡県' => '静岡市'
  ];
$locationValue = array_values($location);
foreach ($locationValue as $locationValue) {
echo $locationValue . "\n";
};

// Q8 連想配列-2
foreach ($location as $prefecture2 => $locationValue2) {
  if ($prefecture2 === '埼玉県'){
      echo $prefecture2 . 'の県庁所在地は' . $locationValue2 . 'です。' . "\n";
  };
};

// Q9 連想配列-3
foreach ($location as $prefecture3 => $locationValue3) {
  if ($prefecture3 === '愛知県' || $prefecture3 === '静岡県') {
      echo $prefecture3 . 'は関東地方ではありません' . "\n";
  } else {
      echo $prefecture3 . 'の県庁所在地は'.$locationValue3.'です。'. "\n";
      };
};

// Q10 関数-1
function hello ($companion) {
  echo $companion . 'さん、こんにちは。';
};

hello('遠藤');
hello('平手');

// Q11 関数-2
function calcTaxInPrice ($price) {
  $TaxInPrice = $price / 10 + $price;
  return $TaxInPrice;
}
$price = 1000;
$TaxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $TaxInPrice .'円です。';

// Q12 関数とif文
function distinguishNum ($num) {
  if ($num % 2 === 0) {
      $calcresult =  $num . 'は偶数です。';
      return $calcresult;
  } else {
      $calcresult =  $num . 'は奇数です。';
      return $calcresult;
  }
};
echo $calcresult = distinguishNum(2) . "\n";
echo $calcresult = distinguishNum(3);

// Q13 関数とswitch文
function evaluateGrade ($grade) {
  switch ($grade) {
      case  'A':
      case  'B':
      echo '合格です。';
      break;
      
      case  'C':
      echo '合格ですが追加課題があります。';
      break;
      
      case  'D':
      echo '不合格です。';
      break;
      
      default:
          echo '判定不明です。講師に問い合わせてください。';
              break;
  };
};
  evaluateGrade('D') . "\n";
  evaluateGrade('G');

?>