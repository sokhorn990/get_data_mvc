<div class="row">
    <div class="col-md-12"></div>
    <a href="index.php?action=add" class="btn btn-success">Add</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Mark</th>
            <th>Sex</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    if (isset($data['student_data'])) {
        foreach ($data['student_data'] as $rows) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['class']; ?></td>
                    <td><?php echo $rows['mark']; ?></td>
                    <td><?php echo $rows['sex']; ?></td>
                    <td>
                        <a href="index.php?action=detail&id=<?php echo $rows['id'];?>"> <i class="material-icons"> remove_red_eye </i></a>               
                        <a href="index.php?action=edit&id=<?php echo $rows['id'];?>"><i class="material-icons"> edit </i></a>                       
                        <a href="index.php?action=delete&id=<?php echo $rows['id'];?>"> <i class="material-icons" onclick=" return confirm('Are you sure to  delete')"> delete </i> </a>            
                    </td>
                </tr>
            </tbody>
    <?php
        }
    }
    ?>
</table>