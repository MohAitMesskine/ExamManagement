
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h1>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_exam.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_exam.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>


        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Voir Examen</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                        <li class="breadcrumb-item active">View Exam</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
               
                 <div class="card">
                            <div class="card-body">
                            <a href="imprimer.php" target="_blank" class="btn btn-primary">Imprimer</a>
                            <div class="table-responsive m-t-40">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Numero_Matricule</th>
                                                <th>CIN</th>
                                                <th>lname</th>
                                                
                                                <th>fname</th>
                                                
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                       
                                    $user_id = $_SESSION['id'];
                                    $sql2 = "SELECT * FROM  admin where id=$user_id ;";
                                    $result2 = $conn->query($sql2);
                                   
                                   while($row = $result2->fetch_assoc()) { 
                                      ?>
                  
                                            <tr>
                                            <td><?php echo$row['cne']; ?></td>
                                            <td><?php echo$row['cin']; ?></td>
                                                <td><?php echo $row['lname']; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                            
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>















                                <div class="table-responsive m-t-40">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Filière</th>
                                                <th>Module</th>
                                                <th>Semestre</th>
                                                <th>Local</th>
                                                <th>Date</th>
                                                <th>Date Début</th>
                                                <th>Date Fin</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                       
                                  $sql1 = "SELECT * FROM  `exam` ,`tbl_teacher` where  exam.surUn=tbl_teacher.id or exam.surDeux=tbl_teacher.id  or exam.surTroix=tbl_teacher.id";
                                  
                                 
                                  $result1 = $conn->query($sql1);
                                   while($row = $result1->fetch_assoc()) { 
                                      ?>
                  
                                            <tr>
                                            <td><?php echo $row['filiere']; ?></td>
                                                <td><?php echo $row['module']; ?></td>
                                                <td><?php echo $row['semestre']; ?></td>
                                                <td><?php echo $row['local']; ?></td>
                                                <td><?php echo $row['exam_date']; ?></td>
                                                <td><?php echo $row['start_time']; ?></td>
                                                <td><?php echo $row['end_time']; ?></td>
                                               
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
               
                

<?php include('footer.php');?>

<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>