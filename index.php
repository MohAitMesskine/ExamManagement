<?php include('head.php');?>
<?php include('header.php');?>

<?php include('sidebar.php');?>   
<?php
//  date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

 $sql_currency = "select * from manage_website"; 
             $result_currency = $conn->query($sql_currency);
             $row_currency = mysqli_fetch_array($result_currency);
?>    
      
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Acceuil</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
                        <li class="breadcrumb-item active">Acceuil</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
        <?php
        // session_start();

        // Vérifiez si l'utilisateur est authentifié
        if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
            // Récupérez l'ID de l'utilisateur
            $user_id = $_SESSION['id'];
        
            // Récupérez le nom d'utilisateur de l'utilisateur
            $username = $_SESSION['username'];
        
            // Affichez l'ID et le nom d'utilisateur sur la page d'accueil
            // echo "Bienvenue, $username (ID: $user_id)";
        } else {
            // Redirigez l'utilisateur vers la page de connexion s'il n'est pas authentifié
            header("Location: login.php");
            exit();
        }
        ?>
       
        
                      <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bag f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `tbl_teacher`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?> 
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Enseignements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-comment f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <?php $sql="SELECT COUNT(*) FROM `tbl_student`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Etudiants</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-vector f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `tbl_class`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Classes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-location-pin f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                     <?php $sql="SELECT COUNT(*) FROM `tbl_subject`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?> 
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Modules</p>
                                </div>
                            </div>
                        </div>
                    </div>


                
            </div>
             <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Voir Liste Des Examens</h3> </div>
                
            </div>
            <div class="card">
                            <div class="card-body">
                            
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Exam Module</th>
                                                <th>Filiere</th>
                                                <th>Local</th>
                                                <th>Date</th>
                                                <th>End Time</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                                  $sql1 = "SELECT * FROM  `exam`";
                                   $result1 = $conn->query($sql1);
                                   while($row = $result1->fetch_assoc()) { 
                                      ?>
                                            <tr>
                                            <td><?php echo $row['module']; ?></td>
                                                <td><?php echo $row['filiere']; ?></td>
                                                <td><?php echo $row['local']; ?></td>
                                                <td><?php echo $row['exam_date']; ?></td>
                                                <td><?php echo $row['start_time']; ?></td>
                                                <td>
                                                <a href="view_exam.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
        </div>
            
            <?php include('footer.php');?>