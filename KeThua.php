<?php
class Peopel
{
    private $quantity;
    private $price;
    public function __construct($NewQuantity,$NewPrice)
    {
        $this->quantity=$NewQuantity;
        $this->price=$NewPrice;
    }
    public function salary()
    {
        echo $this->quantity*$this->price;
    }
    protected function choi(){
        echo "Choi Game";
    }
    private function ngu(){
        echo "Ngu Ngay";
    }
}
class Cuong extends Peopel
{
    public function an(){
//        parent::ngu();//k kế thừa được private
        parent::choi();
        echo "An Com";
    }
}

$people=new Cuong(10,2);
//$people->salary();
$people->an();
//$people->ngu();
//$people->choi();

?>
