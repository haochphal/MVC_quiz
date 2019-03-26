<!-- <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=delete"><i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>&nbsp;
<a href="index.php?action=update"><i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a> -->

<div id="users">
<div class="col-md-12">
    <div class="pull-left">
        <input class="search" placeholder="Search" />
    </div>
    <div class="pull-right">
        <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
    </div>
</div>
<form action="employee.php" method="POST">
    
    <table class="table-bordered col-md-12">
        <th class="sort text-center">ID</th>
        <th class="sort text-center" data-sort="fname">Student Name</th>
        <th class="sort text-center" data-sort="age">Age</th>
        <th class="sort text-center" data-sort="salary">Salary</th>
        <th class="sort text-center">Action</th>
        <!-- IMPORTANT, class="list" have to be at tbody -->
        <tbody class="list">
        <?php
            if($data['employee_data'] != "") {
                $i=1;
                foreach ($data['employee_data'] as $rows) {
 
        ?>
        <tr>
            <td><?php echo $i;  ?></td>
            <td><?php echo $rows['firstname']." ".$rows['lastname'];  ?></td>
            <td><?php echo $rows['age'];  ?></td>
            <td><?php echo $rows['salary'];  ?></td>
            <td class="text-center">
                <a href="index.php?action=add&id=<?php echo $rows['id'] ?>"><i class="glyphicon glyphicon-eye-open" style="color:green;"></i></a>&nbsp;
                <a href="index.php?action=edit&id=<?php echo $rows['id'] ?>"><i class="glyphicon glyphicon-edit" style="color:blue;"></i></a>&nbsp;
                <a href="index.php?action=delete&id=<?php echo $rows['id'] ?>"><i class="glyphicon glyphicon-trash" style="color:red;"></i></a>&nbsp;
            </td>
        </tr>
        <?php
         $i++;
         }
         } else {
             echo "<tr><td colspan='6'>No record found...!</td></tr>";
         }
         ?>
        </tbody>

    </table>
</form>
</div>

<script>
var options = {
    valueNames: ['id', 'fname', 'age', 'salary']
};

var userList = new List('users', options);
</script>
