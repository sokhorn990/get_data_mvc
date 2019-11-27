<?php
include_once "connection.php";
?>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FullName</th>
                        <th>Class</th>
                        <th>Score</th>
                        <th>Gender</th>
                    </tr>
                </thead>  
               <?php
                if (isset($data['student_data'])) {
                    foreach ($data['student_data'] as $result) {
                        ?> 
                <tbody>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['class']; ?></td>
                    <td><?php echo $result['mark']; ?></td>
                    <td><?php echo $result['sex']; ?></td>
                </tr>
                </tbody> 
                <?php
                }
             }
          ?>
            <table>
        </div>
        <div class="col-2"></div>
    </div>
</div>