<?php

// tipo di pane, una proteina e una salsa

abstract class Bread
{
    abstract public function bread();
}

abstract class Protein
{
    abstract public function protein();
}

abstract class Dressing
{

    abstract public function dressing();
}


//classi figlie di Bread

class WhiteBread extends Bread
{
    public function bread()
    {
        echo "-Tipo di pane: pane bianco; \n";
    }
}

class CearealBread extends Bread
{
    public function bread()
    {
        echo "-Tipo di pane: pane ai cereali; \n";
    }
}

class DevilBread extends Bread
{
    public function bread()
    {
        echo "-Tipo di pane: pane del diavolo; \n";
    }
}
//classi figlie di Protein

class Mortadella extends Protein
{
    public function protein()
    {
        echo "-Proteina: mortadella; \n";
    }
}

class Hamburger extends Protein
{
    public function protein()
    {
        echo "-Proteina: hamburger; \n";
    }
}

class Ceciburger extends Protein
{
    public function protein()
    {
        echo "-Proteina: ceciburger \n";
    }
}

class Omelette extends Protein
{
    public function protein()
    {
        echo "-Proteina: frittata \n";
    }
}

//classi figlie di Dressing


class HoneyMustard  extends Dressing
{
    public function dressing()
    {
        echo "-Salsa: senape al miele; \n";
    }
}

class Barbecue extends Dressing
{
    public function dressing()
    {
        echo "-Salsa: barbecue; \n";
    }
}

class Mayonnaise extends Dressing
{
    public function dressing()
    {
        echo "-Salsa: maionese; \n";
    }
}


//PANINO
class Sandwich
{
    public $bread;
    public $protein;
    public $dressing;

    public function __construct(Bread $pane, Protein $proteina, Dressing $salsa)
    {
        $this->bread = $pane;
        $this->protein = $proteina;
        $this->dressing = $salsa;
    }

    public function printBread()
    {
        // $pane = $this->bread;
        // $pane->bread();
        //! fluent interface
        $this->bread->bread();
    }
    public function printProtein()
    {
        $this->protein->protein();
    }
    public function printDressing()
    {
        $this->dressing->dressing();
    }

    public function printOrder()
    {
        echo "Riepilogo ordine: \n";
        $this->bread->bread();
        $this->protein->protein();
        $this->dressing->dressing();
    }
}

//!instanzio gli oggetti di classe Sandwich
$pane = new WhiteBread();
$mortadella = new Mortadella();
$senape = new HoneyMustard();
$panino = new Sandwich($pane, $mortadella, $senape);
// var_dump($panino);
$panino1 = new Sandwich(new CearealBread(), new Omelette(), new Barbecue());

// echo " il mio panino ha il pane di $panino->bread, ha come proteina $panino->protein e come salsa $panino->dressing \n";


//! DEPENDENCY INJECTION - iniezione di dipendenze
//! OBJECT COMPOSITION

$panino->printBread();
$panino1->printBread();

$panino->printOrder();
