<?php

namespace MVC\Models;

use MVC\Core\ResourceModel;

class StudentResourceModel extends ResourceModel{

    public function __construct()
    {
        parent::_init('student', 'studentid', new StudentModel());
    }

    
}