<?php declare(strict_types=1);
namespace Foo;
class Foo {
  private $value;
  public function __construct($value){
    $this->value=$value;
    }
    
    public function value(){
    return $this->value;
    }
}
