<?php

namespace MVC\Models;

use MVC\Core\Model;

class StudentModel extends Model{
    protected $studentid;
    protected $studentname;
    protected $dob;
    protected $gender;

    /**
     * Get the value of studentid
     */ 
    public function getStudentid()
    {
        return $this->studentid;
    }

    /**
     * Set the value of studentid
     *
     * @return  self
     */ 
    public function setStudentid($studentid)
    {
        $this->studentid = $studentid;

        return $this;
    }

    /**
     * Get the value of studentname
     */ 
    public function getStudentname()
    {
        return $this->studentname;
    }

    /**
     * Set the value of studentname
     *
     * @return  self
     */ 
    public function setStudentname($studentname)
    {
        $this->studentname = $studentname;

        return $this;
    }

    /**
     * Get the value of dob
     */ 
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}
