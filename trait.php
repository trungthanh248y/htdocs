<?php

trait Bo_sat
{
    public function Ran()
    {
        $keu = "Khe";
        return $keu;
    }
}

class Thu
{
    use Bo_sat;
    public function Gau()
    {
        $keu = "Gao";
        return $keu;
    }
}

$dongVat = new Thu();
echo $dongVat->Ran();

?>