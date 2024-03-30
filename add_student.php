
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
                    <h3 class="text-primary">Gestion Etudiant </h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Ajouter Etudiant Management</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" action="pages/save_student.php" name="studentform" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">
                                
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">CNE</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="cne" class="form-control" placeholder="CNE" id="event" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">CIN</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="cin" class="form-control" placeholder="CIN" id="event"  required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Nom</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="nom" class="form-control" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" required="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Prenom</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  name="prenom" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <div class="row">
                                                <label class="col-sm-3 control-label">Date Naissance</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="dateN" class="form-control" placeholder="Birth Date">
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
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Filiere</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="filiere" class="form-control"   placeholder="Class" required="">
                                                        <option value="">--Select Filiere--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `tbl_class`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                           <option>          <?php echo $row['classname'];?>
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
                                                <label class="col-sm-3 control-label">Situation</label>
                                                <div class="col-sm-9">
                                                   <select name="situation" id="gender" class="form-control" required="">
                                                    <option value="">--situation--</option>
                                                     <option value="inscrit">Inscrit</option>
                                                      <option value="non-inscrit">Non Inscrit</option>
                                                   </select>
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
<script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'NOT Matching';
  }
}
</script>