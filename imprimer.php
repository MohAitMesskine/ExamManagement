<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocation_Fpo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <h1>Convocation_Surveillance</h1>
<div class="page-wrapper" style="margin: top 60px;">
            
        
               
            <div class="container-fluid">
               
                 <div class="card" >
                            <div class="card-body">
                            
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
                       session_start();
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
                   
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    window.onload = function() {
        window.print();
    }
</script>

</body>
</html>