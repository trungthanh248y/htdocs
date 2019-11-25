<?php
    interface Nguoi{
        public function an();
        public function ngu();
    }

    interface Nguoi1{
        public function an1();
        public function ngu1();
    }

    class Cuong implements Nguoi, Nguoi1 {

        public function an()
        {
            // TODO: Implement an() method.
            return "An Com";
        }

        public function ngu()
        {
            // TODO: Implement ngu() method.
            return "Ngu Ngay";
        }

        public function an1()
        {
            // TODO: Implement an() method.
            return "An Com";
        }

        public function ngu1()
        {
            // TODO: Implement ngu() method.
            return "Ngu Ngay";
        }

    }

    class Son implements Nguoi {

        public function an()
        {
            // TODO: Implement an() method.
            return "An Rau";
        }

        public function ngu()
        {
            // TODO: Implement ngu() method.
            return "Ngu Trua";
        }

    }

    $cuong=new Cuong();
    echo $cuong->an()."<br/>";

    $son= new Son();
    echo $son->an();

?>