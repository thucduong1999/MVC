<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\StudentModel;
use MVC\Models\StudentRepository;
use MVC\Models\StudentResourceModel;

class StudentsController extends Controller
{
    
    private $studentRepository;

    public function __construct()
    {
        $this->studentRepository = new StudentRepository(new StudentResourceModel());
    }

    function index()
    {
        $d['student'] = $this->studentRepository->getAll(new StudentModel());
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["studentname"]))
        {
            $studentModel = new StudentModel();

            $studentModel->setStudentname($_POST["studentname"]);
            $studentModel->setDob($_POST["dob"]);
            $studentModel->setGender($_POST["gender"] == "Nam" ? '0' : '1');

            if ($this->studentRepository->add($studentModel))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $studentModel = $this->studentRepository->get($id);
        $d["students"] = $studentModel;
        if (isset($_POST["studentname"]))
        {
            $studentModel->setStudentname($_POST["studentname"]);
            $studentModel->setDob($_POST["dob"]);
            $studentModel->setGender(date("gender"));
    
            if ($this->studentRepository->edit($studentModel))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $studentModel = $this->studentRepository->get($id);
        $d["students"] = $studentModel;
        if (isset($_POST["studentname"]))
        {
            if ($this->studentRepository->delete($studentModel))
            {
                header("Location: " . WEBROOT . "students/index");
            }
        }
        $this->set($d);
        $this->render("delete");
    }
}
?>