<?php
$row = array();
foreach ($data['employee_data'] as $rows) {
    $row = $rows;
}

?>

<div class="container mt-4">
<div class="card bg-info" >
            <div class="card-header">
                <h3>Edit info</h3>
            </div>
            <div class="card-body">
                <form action="index.php?action=update&id=<?php echo $rows['id']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="firstname" value="<?php echo $rows['firstname']?>" placeholder="first name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" value="<?php echo $rows['lastname']?>" placeholder="last name"  class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" value="<?php echo $rows['age']?>" placeholder="your age" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="salary" value="<?php echo $rows['salary']?>" placeholder="salary" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    
</div>


