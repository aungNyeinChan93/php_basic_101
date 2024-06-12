<?php 

declare(strict_types= 1);
error_reporting(E_ALL); 
ini_set("",1);

class Customer {
    protected $count = 0;
    public $id;
    public $name;
    public $email;
    public $phone;
    public $myArrsys= array();
    public function __construct(int $id, string $name, string $email,int $phone) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    public function __destruct(){
        echo "<br> this is destructor function ";
        // var_dump((__CLASS__ ."destruct!"));
    }
    public function __set(string $name, string $value){
        echo "set function run";
        $this->myArrsys[$name] = $value;
    }
    public function __get(string $name){
        echo "get function run";
        return $this->myArrsys[$name];
    }
    public function __call(string $name, array $args){
        echo "$name";
        var_dump($args);
    }
    static function __callStatic(string $key ,array $args){
        var_dump($key);
        var_dump($args);
    }
    public function __getCounter(){
        $this->count++;
        return $this->count;
    }
}

$customer = new Customer(1,"aung","aung@gmail.com",03232654565);


// echo $customer->id ." ". $customer->name ;

$customer->address = "Yangon";      //properties overloading ~~update
echo "<br>";
$customer->type = "gold-user";
echo "<br>";

echo $customer->address;
echo "<br>";
echo $customer->type;
echo "<br>";

$customer->checkAmount("ACC_1","ACC_2"); //method overloading
echo "<br>";

$customer->test("test","test2");
echo "<br>";

Customer::staticFunction("staticeTestOne","staticTestTwo"); //static method overloading
echo "<br>";

$counter = $customer->__getCounter();
$counter = $customer->__getCounter();
$counter = $customer->__getCounter();
$counter = $customer->__getCounter();
$counter = $customer->__getCounter();
echo "<br>";
echo $counter;
echo "<br>";
