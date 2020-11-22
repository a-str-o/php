<?php 
class NightsWatch{

    private $stock;


public function recruit($new)
{
    if($new instanceof IFighter)
     $this->stock[] = $new;
}


public function fight()
{
    for($i = 0; $i < count($this->stock); $i++)
    {
        $this->stock[$i]->fight();
    }
}
}
?>