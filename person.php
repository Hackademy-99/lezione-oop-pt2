<?php
//! TRAIT - "tratto" 
// iniziale maiuscola, inglese, singolare
//* si usa aggiungendo all'inizio della classe prescelta la parola chiave use + nomeDelTrait.
trait Jetpack
{
    public function volo()
    {
        echo "Guarda mamma sto volando \n";
    }
}

//! CLASSE ASTRATTA - modello di impostazione per andare a creare le classi figlie E BASTA , un template
//! serve a progettare le future classi
abstract class Person
{
    use Jetpack;
    public $name;
    public $surname;
    public $age;
    public static $counter = 0;

    public function __construct($nome, $cognome, $eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
        self::$counter++;
    }

    abstract public function hello();
    // {
    //     "Ciao, sono $this->name $this->surname e ho $this->age anni \n";
    // }
}



// $person = new Person('Annalisa', 'Caldarulo', 25);
// $person->hello();

class Student extends Person
{
    // use Jetpack;

    public $averageVote;

    public function __construct($nome, $cognome, $eta, $media)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->averageVote = $media;
    }
    public function hello()
    {
        echo "Ciao a tutti, mi chiamo $this->name $this->surname, ho $this->age anni e ho una media di $this->averageVote \n";
    }
}
$student = new Student('24', 'Tozzi', 'Ciao', 8);
$student->volo();

class Teacher extends Person
{
    use Jetpack;
    public $subject;

    public function __construct($nome, $cognome, $eta, $materia)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->subject = $materia;
    }
    public function hello()
    {
        echo "Salve a tutti, mi chiamo $this->name $this->surname e sono l'insegnante di $this->subject \n";
    }
}
class Dog
{
    // istruzioni
}
// class Supplente extends Teacher{

// }

// class DocenteDiRuolo extends Teacher{

// }
// $person = new Person('Annalisa', 'Caldarulo', 25);

$teacher = new Teacher('Emilia', 'Salvo', 31, 'Backend');

$student->hello();
$teacher->volo();
