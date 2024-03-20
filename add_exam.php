<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

 <?php
 include('connect.php');
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

?>

        <div class="page-wrapper">
           
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Exam Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Exam Management</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-8" style="margin-left: 10%;">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" action="pages/exam.php" name="userform" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Filière</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="filiere" id="filiere" class="form-control"   placeholder="Class" required="">
                                                        <option value="">--Select Filière--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_class`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['classname'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                  <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Module</label>
                        <div class="col-sm-9">
                        <select type="text" name="module" id="module" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">--Select Module</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_subject`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['subjectname'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                <div class="row">
                                                <label class="col-sm-3 control-label">Semestre</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="semestre" id="semestre" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">Select Semestre</option>
                                                        <option value="s1">S1</option>
                                                        <option value="s2">S2</option>
                                                        <option value="s3">S3</option>
                                                        <option value="s4">S4</option>
                                                        <option value="s5">S5</option>
                                                        <option value="s6">S6</option>
                                                         
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                <div class="row">
                                                <label class="col-sm-3 control-label">Surveillant 1</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="idUn" id="idUn" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">--Select les Surveillant--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_teacher`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['tfname'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Surveillant 2</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="idDeux" id="idDeux" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">--Select les Surveillant--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_teacher`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['tfname'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Surveillant 3</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="idTroix" id="idTrois" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">--Select le Surveillant--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_teacher`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['tfname'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                     
                  <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Local</label>
                        <div class="col-sm-9">
                        <select type="text" name="local" id="local" class="form-control" placeholder="Surveillant" required="">
                                                        <option value="">--Select local</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `room`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["id"];?>">
                                                                        <?php echo $row['name'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                        </div>
                    </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Date</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="exam_date" class="form-control" placeholder=" Date" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Start Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="start_time" class="form-control" placeholder=" Start Time" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">End Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="end_time" class="form-control" placeholder=" End Time" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
        
<?php include('footer.php');?>

<script type="text/javascript">
 $('#class_id').change(function(){
    $("#subject_id").val('');
    $("#subject_id").children('option').hide();
    var class_id=$(this).val();
    $("#subject_id").children("option[data-id="+class_id+ "]").show();
    
  });
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Select JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0/dist/js/bootstrap-select.min.js"></script>
  <!-- Initialize Bootstrap Select -->
  <script>
    $(document).ready(function () {
      $('.selectpicker').selectpicker();
    });
  </script>
</script>