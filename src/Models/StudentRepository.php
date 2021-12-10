<?php

namespace MVC\Models;

use MVC\Models\StudentResourceModel;

class StudentRepository {

    private $studentResourceModel;

    public function __construct(StudentResourceModel $studentResourceModel)
    {
        $this->studentResourceModel = $studentResourceModel;
    }

    public function add(StudentModel $studentModel)
    {
        return $this->studentResourceModel->save($studentModel);
    }

    public function get($id)
    {
        return $this->studentResourceModel->get($id);
    }

    public function delete(StudentModel $studentModel)
    {
        return $this->studentResourceModel->delete($studentModel);
    }

    public function getAll(StudentModel $studentModel)
    {
        return $this->studentResourceModel->getAll($studentModel);
    }

    public function edit(StudentModel $studentModel)
    {
        return $this->studentResourceModel->save($studentModel);
    }
}