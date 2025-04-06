<?php

namespace App\Services;

class TaskService
{
    protected array $tasks = [];

    public function add($name)
    {
        $this->tasks[] = $name;
    }

    public function getAllTasks()
    {
        return $this->tasks;
    }
}

