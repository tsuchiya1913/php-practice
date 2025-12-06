<?php
// Q1 tic-tac問題　！
$numbers =[];
for ($i = 1; $i <= 100 ; $i++) {
    switch ($i) {
        case $i % 4 === 0 && $i % 5 === 0;
        echo 'tic-tac' . "\n";
            break;
        
        case $i % 4 === 0:
        echo 'tic' . "\n";
        break;
        
        case $i % 5 === 0:
        echo 'tac' . "\n";
        break;
        
        default:
            echo $i . "\n";
    };
};
//

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//q1
echo $personalInfos[1]['name'].'さんの電話番号は'.$personalInfos[1]['tel'].'です。' ."\n";

//q2
$i = 0;
foreach ($personalInfos as $key => $value){
  $i++;
  echo $i. '番目の' . $personalInfos[$key]['name'] . 'のメールアドレスは、' . $personalInfos[$key]['mail'] . 'です。' . "\n";
};

//q3 未完了
$ageList = [25, 30, 18];
foreach ($ageList as $index => $age){
  $personalInfos[$index]['age'] = $age;
};
var_dump($personalInfos);

// Q3 オブジェクト-1　！
// Q4 オブジェクト-2　！

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($attendMessage)
    {
        $this->attend = $attendMessage;
        echo  $this->studentName. 'は'. $this->attend .'の授業に出席しました。学籍番号：'. $this->studentId;
    }
    
}
$bob = new Student(120 , 'bob');
//echo $bob->studentId;
//$bobに格納されているデータとデータ型について調べる　宿題　各メソッドの返り値も調べる

echo '学籍番号' . $bob->studentId . '番の生徒は' . $bob->studentName . 'です。';
//$bob->studentId　属性について
$yamada = new Student(120, '山田');
$yamada->attend('PHP');
//関数とメソッドの違い　最低使用条件についてを調べる
//クラスの外で定義されるものが「関数」、**クラスの中で定義されるものが「メソッド」


// Q5 定義済みクラス　！
//q1
$time = new DateTime('2021-02-02');
echo $time->format('Y-m-d');
//$timeに格納されているデータとデータ型を調べる
//今日から一ヶ月前の日付を表示させる

//q2
$time1 = new DateTime('1992-04-25');
$time2 = new DateTime('2025-09-14');
$diff = $time1->diff($time2);
echo 'あの日から' . $diff->format('%a') . '日が経ちました。';
//$diffに格納されているデータとデータ型を調べる
?>