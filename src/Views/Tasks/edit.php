<h1>Edit task 1</h1>
<form method='post' action='#'>
<div class="form-group">
    <div class="form-group">
        <input type="text" class="form-control" id="id" placeholder="Enter a id" name="id" value ="<?= $task->getId();?>"hidden>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title" value ="<?= $task->getTitle();?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value ="<?= $task->getDescription();?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>