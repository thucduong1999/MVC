<h1>Delete task 1</h1>
<form method='post' action='#'>
<div class="form-group">
    <div class="form-group">
        <input type="text" class="form-control" id="studentid" placeholder="Enter a studentid" name="studentid" value ="<?= $students->getStudentid();?>"hidden>
    </div>

    <div class="form-group">
        <label for="studentname">Student Name</label>
        <input type="text" class="form-control" id="studentname" placeholder="Enter a studentname" name="studentname" value ="<?= $students->getStudentname();?>">
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" placeholder="Enter a dob" name="dob" value ="<?= $students->getDob();?>">

    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" placeholder="Enter a gender" name="gender" value ="<?= $students->getGender();?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>