<?php

class TasksController {
    // GESTIONARÀ TOTES LES URL QUE COMENCIA PER /task

    //CRUD -> CREATE/LLISTAR UPDATE DELETE
    //CREATE RETRIEVE UPDATE DELETE

    //yasks -> Mostrarà la llista completa de tasques
    // /task/{id}
    // /task/create TEMPORAL HTTP
    // /task/delete/{id}
    // /task/update/{id}


    public function update() {
        //TO-DO
    }
    public function delete() {
        //TO-DO
    }

    public function list() {
        $tasks = Task::all();
        return view('tasks',$tasks);
    }

    public function show() {

    }
    public function store() {

    }
    
}