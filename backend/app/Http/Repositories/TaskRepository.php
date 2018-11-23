<?php
/**
 * Created by PhpStorm.
 * User: ישראלי
 * Date: 14/11/2018
 * Time: 20:36
 */

namespace App\repositories;


use App\Task;

class TaskRepository
{
    function geAll(){
        return Task::all();
    }

    function store($data){
        return Task::create($data);
    }



    function update($data,Task $Task){
        $Task->update($data);
        return $Task;
    }


    function remove(Task $Task)
    {
        try {
            $Task->delete();
        } catch (\Exception $e) {
        }
        return $Task;
    }
}
