<?php //
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use AndyLib\Utility\utility;
use HelloWorld\SayHello;
class abc{
    public function p(){
        echo 2;
        $u = new utility();
        $u->test();
    }
}
echo 'abc';
$c = new abc();
$c->p();

echo HelloWorld\SayHello::world();

?>