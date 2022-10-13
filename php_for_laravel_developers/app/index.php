<?php

class Task{
    protected $id;
    protected $title;
    protected $desctipion;
    protected $complete;

    /**
     * @param $id
     * @param $title
     * @param $desctipion
     * @param $complete
     */
    public function __construct($id, $title, $desctipion, $complete)
    {
        $this->id = $id;
        $this->title = $title;
        $this->desctipion = $desctipion;
        $this->complete = $complete;
    }

}
$task = new Task(1,'comprar pa','a la panaderia', 0);
var_dump($task):

//var_dump($_GET['name']);
//$name = 'Aleix';
//API
function greet()
{
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

   return "Hola $name $surname !";
}
$greeting= greet();
//$greeting = 'Hola ' . $_GET['name'] . '!';