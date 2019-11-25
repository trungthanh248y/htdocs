<?php
    abstract class Nguoi{
        public function an(){
            echo "An Com";
        }
        public function ngu(){
//            return "Ngu Toi";
        }
        abstract protected function choi();
    }
    class Cuong extends Nguoi{

        public function choi()
        {
            // TODO: Implement choi() method.
        }

    }
    $cuong=new Cuong();
    $cuong->an();
?>