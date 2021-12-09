<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository {

    private $taskResourceModel;

    public function __construct(TaskResourceModel $taskResourceModel)
    {
        $this->taskResourceModel = $taskResourceModel;
    }

    public function add(TaskModel $taskModel)
    {
        return $this->taskResourceModel->save($taskModel);
    }

    public function get($id)
    {
        return $this->taskResourceModel->get($id);
    }

    public function delete(TaskModel $taskModel)
    {
        return $this->taskResourceModel->delete($taskModel);
    }

    public function getAll(TaskModel $taskModel)
    {
        return $this->taskResourceModel->getAll($taskModel);
    }

    public function edit(TaskModel $taskModel)
    {
        return $this->taskResourceModel->save($taskModel);
    }
}