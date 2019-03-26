
<div class="contaier">
<a href="index.php" class="btn btn-primary">Back</a>
    <div class="card bg-warning">
        <div class="card-header bg-warning text-center">
            <h3>Add user</h3>
        </div>
        <div class="card-body">
        <form action="#" method="POST">
            <div class="form-group">
                <input type="text" name="firstname" placeholder="First name" class="form-control">
                <input type="text" name="lastname" placeholder="Last name" class="form-control">
                <input type="number" name="age" placeholder="Your age" class="form-control">
                <input type="number" name="salary" placeholder="Salary" class="form-control">
             </div>
        
        </div>
    </div>
    <button name="add" type="submit">Add row</button>
    <a href="index.php?actiion=view" type="button" class="btn btn-success">Save</a>
    </form>
</div>

<?php
include_once "connection.php";
if(isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];

$query = "INSERT INTO employee(firstname, lastname, salary, age) VALUES('$firstname','$lastname','$age','$salary')";
$result = mysqli_query($connect, $query);

if($result) {
    header("location:index.php");
}else {
    echo "Cannot Add";
}
}
?>