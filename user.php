<?php
class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}

$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

echo "<h2>ユーザー管理プログラム</h2>";
echo "<h3>自己紹介</h3>";
echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();

echo "<h3>成人判定</h3>";
if ($user1->isAdult()) {
    echo "{$user1->name}は成人です。<br>";
} else {
    echo "{$user1->name}は未成年です。<br>";
}
if ($user2->isAdult()) {
    echo "{$user2->name}は成人です。<br>";
} else {
    echo "{$user2->name}は未成年です。<br>";
}
if ($user3->isAdult()) {
    echo "{$user3->name}は成人です。<br>";
} else {
    echo "{$user3->name}は未成年です。<br>";
}
?>