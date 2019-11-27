
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Form</h2>
                </div>
                <?php 
                foreach( $data['student_data'] as $result){
                ?>
                <form action="index.php?action=edit_form&id=<?php echo $result['id'];?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $result['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="class">Class:</label>
                                <select class="form-control" name="class">
                                <option <?php if ($result['class']== "WEP-2020A"){?> selected="selected" <?php } ?> value="WEP-2020A">WEP-2020A</option>
                                <option <?php if ($result['class']== "WEP-2020B"){?> selected="selected" <?php } ?> value="WEP-2020B">WEP-2020B</option>
                                <option <?php if ($result['class']== "SNA-2020"){?> selected="selected" <?php } ?> value="SNA-2020">SNA-2020</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="mark">Mark:</label>
                                <input type="number" name="mark" id="mark" class="form-control" value="<?php echo $result['mark'];?>">
                            </div>
                            <div class="form-group">
                            <label for="radio">Gender:</label><br>
                            <input type="radio" name="sex" <?php if ($result['sex']== "Male"){?> checked="checked" <?php } ?> value="Male">Male <br>
                            <input type="radio" name="sex" <?php if ($result['sex'] == "Female"){?> checked= "checked" <?php } ?> value="Female">Female
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
                <?php
                  }
                  ?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>