<?php

//simulare un esercito medievale: difesa e l'attacco
//classi astratte
abstract class Defense
{
    abstract public function defense();
}


abstract class Attack
{
    abstract public function attack();
}

//classi figlie
class Trench extends Defense
{
    //dichiarazione della funzione
    public function defense()
    {
        echo "Non mi puoi raggiungere!! \n";
    }
}

class Catapulta extends Defense
{
    public function defense()
    {
        echo "Pijate 'sto confetto! \n";
    }
}

class OlioBollente extends Defense
{
    public function defense()
    {
        echo "Conditeci le friselle!!!! \n";
    }
}

$trincea = new Trench();
//richiamo la funzione
// $trincea->defense();


//classi figlie di attacco
class Sword extends Attack
{
    public function attack()
    {
        echo "Muori!!! \n";
    }
}

class Cannon extends Attack
{
    public function attack()
    {
        echo "Fuoco! \n";
    }
}

class Alabarda extends Attack
{
    public function attack()
    {
        echo "Polli allo spiedo!!! \n";
    }
}

class Army
{
    public $attack, $defense;
    // public $defense;

    //DEPENDENCY INJECTION
    public function __construct(Attack $attacco, Defense $difesa)
    {
        $this->attack = $attacco;
        $this->defense = $difesa;
    }
    public function printAttack()
    {
        $this->attack->attack();
    }
    public function printDefense()
    {
        $this->defense->defense();
    }
}

$esercito = new Army(new Cannon(), new Catapulta());
print_r($esercito);

$esercito->printAttack();
$esercito->printDefense();
