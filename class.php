<?php

class Human
{
    // プロパティは　アクセス修飾子 $変数名　で宣言
    // public, private, protected
    protected $name;
    protected $gender;
    protected $age;

    public function __construct(string $name, string $gender, int $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function talk()
    {
        echo 'talk talk talk';
    }

    public function selfIntoroduce()
    {
        echo 'hello my name is ' . $this->name;
    }

    // ゲッター（privateのプロパティ情報を取得するためのメソッド）
    public function getName()
    {
        return $this->name;
    }

    // セッター（privateのプロパティ情報をセットするためのメソッド）
    public function setName($name)
    {
        $this->name = $name;
    }
}

class Japanese extends Human implements Autonomy
{
    use Sports;

    public function meetAmerican(American $american)
    {
        echo 'meet to ' . $american->name;
    }

    public function talk()
    {
        echo '話す　話す　話す';
    }

    public function selfIntoroduce()
    {
        echo 'こんにちは。私は' . $this->name . 'です。';
    }

    public function breath()
    {
        // ここに実装をする
    }

    public function heartBeating()
    {
        // ここに実装する
    }
}

class American extends Human
{
    use Sports;

    public function talk()
    {
        echo 'talk talk talk talk talk talk';
    }

    public function selfIntoroduce()
    {
        echo 'hello!!!! My Name is ' . $this->name;
    }
}

// トレイトは継承と似ており、クラスにメソッドをインポートする
// トレイト自身は単体で使えない
trait Sports
{
    public function run()
    {
        echo $this->name . ' is running';
    }

    public function jump()
    {
        echo 'jumping';
    }
}

// インターフェース　実装は書かないけど、メソッドだけ定義する
// 実装を漏れを防ぐことができる
interface Autonomy
{
    public function breath();

    public function heartBeating();
}

$suzuki = new Japanese('suzuki', 'man', 10);
$tanaka = new Japanese('tanaka', 'man', 15);
$bob = new American('bob', 'man', 20);



$suzuki->meetAmerican($bob);
