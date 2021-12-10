<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/MVC/students/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        // foreach ($tasks as $task)
        // {
        //     echo '<tr>';
        //     echo "<td>" . $task['id'] . "</td>";
        //     echo "<td>" . $task['title'] . "</td>";
        //     echo "<td>" . $task['description'] . "</td>";
        //     echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC_todo/tasks/edit/" . $task["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC_todo/tasks/delete/" . $task["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
        //     echo "</tr>";
        // }
        ?>

        <?php foreach ($student as $key => $students) 
        { ?>
            <tr>
                <td><?=  $students->getStudentid(); ?></td>
                <td><?=  $students->getStudentname(); ?></td>
                <td><?=  $students->getDob(); ?></td>
                <td><?=  $students->getGender(); ?></td>
                <td><a href="/MVC/students/edit/<?= $students->getStudentid()?>">Edit</a>/<a href="/MVC/students/delete/<?= $students->getStudentid();?>">Delete</a></td>
            </tr>
        <?php 
        } ?>
    </table>
</div>