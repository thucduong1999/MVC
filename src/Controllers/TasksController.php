<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;
use MVC\Models\TaskResourceModel;

class TasksController extends Controller
{
    
    private $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository(new TaskResourceModel());
    }

    function index()
    {
        $d['tasks'] = $this->taskRepository->getAll(new TaskModel());
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $taskModel = new TaskModel();

            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setCreated_at(date("Y-d-m h:i:s"));
            $taskModel->setUpdated_at(date("Y-m-d h:i:s"));

            if ($this->taskRepository->add($taskModel))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $taskModel = $this->taskRepository->get($id);
        $d["task"] = $taskModel;
        if (isset($_POST["title"]))
        {
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setUpdated_at(date("d-m-Y h:i:s A"));
    
            if ($this->taskRepository->edit($taskModel))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $taskModel = $this->taskRepository->get($id);
        $d["task"] = $taskModel;
        if (isset($_POST["title"]))
        {
            if ($this->taskRepository->delete($taskModel))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("delete");
    }
}
?>