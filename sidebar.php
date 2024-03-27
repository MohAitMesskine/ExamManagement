 <?php 
 include('connect.php');
  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
       
            $q = "select * from tbl_permission_role where role_id='".$row1['group_id']."'";
            $ress=$conn->query($q);
           
             $name = array();
            while($row=mysqli_fetch_array($ress)){
          $sql = "select * from tbl_permission where id = '".$row['permission_id']."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
        if ($row1 !== null && isset($row1[1])) {
            array_push($name, $row1[1]);
        }
                     }
             $_SESSION['name']=$name;
             $useroles=$_SESSION['name'];

 ?>
<style>
    .left-sidebar {
        background-color: #4e73df;; /* Remplacez "your_color_here" par la couleur de votre choix en utilisant le format CSS approprié (par exemple, #RRGGBB pour les couleurs hexadécimales) */
    }

    .scroll-sidebar {
        background-color: #4e73df;; /* Remplacez "your_color_here" par la couleur de votre choix en utilisant le format CSS approprié (par exemple, #RRGGBB pour les couleurs hexadécimales) */
    }
    .sidebar-nav {
        background-color: #4e73df;; /* Remplacez "your_color_here" par la couleur de votre choix en utilisant le format CSS approprié (par exemple, #RRGGBB pour les couleurs hexadécimales) */
    }

    .sidebarnav {
        background-color:#4e73df;; /* Remplacez "your_color_here" par la couleur de votre choix en utilisant le format CSS approprié (par exemple, #RRGGBB pour les couleurs hexadécimales) */
    }
</style>

 <div class="left-sidebar " >
 
     <div class="scroll-sidebar ">

         <nav class="sidebar-nav ">
             <ul id="sidebarnav">
                 <li class="nav-devider"></li>
                 <li class="nav-label"></li>
                 <li> <a href="index.php" aria-expanded="false"><i class="fa fa-window-maximize"></i>Dashboard</a>
                 </li>

                 <?php if(isset($useroles)){  if(in_array("manage_attendence",$useroles)){ ?>
                 <!-- <li class="nav-label">Attendence</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-clock-o"></i><span
                             class="hide-menu">Attendence Management</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_attendence",$useroles)){ ?>
                         <li><a href="add_attendence.php">Ajouter Attendence</a></li>
                         <?php } } ?>
                         <li><a href="view_attendence.php">Voir Attendence</a></li>

                     </ul>
                 </li>
                 
                 <?php } } ?>

                 <?php if(isset($useroles)){  if(in_array("manage_teacher",$useroles)){ ?>
                 <!-- <li class="nav-label">Teacher</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span
                             class="hide-menu">Gestion Enseignants</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_teacher",$useroles)){ ?>
                         <li><a href="add_teacher.php">Ajouter Enseignant</a></li>
                         <?php } } ?>
                         <li><a href="view_teacher.php">Liste Enseignants</a></li>
                     </ul>
                 </li>
                 <?php } } ?>

                 <?php if(isset($useroles)){  if(in_array("manage_student",$useroles)){ ?>
                 <!-- <li class="nav-label">Student</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span
                             class="hide-menu">Gestion Etudiants </span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_student",$useroles)){ ?>
                         <li><a href="add_student.php">Ajouter etudiant</a></li>
                         <?php } } ?>
                         <li><a href="view_student.php">LIste Etudiants</a></li>
                     </ul>
                 </li>
                 <?php } } ?>

                 <?php if(isset($useroles)){  if(in_array("manage_subject",$useroles)){ ?>
                 <!-- <li class="nav-label">Subject</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span
                             class="hide-menu"> Gestion Module</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_subject",$useroles)){ ?>
                         <li><a href="add_subject.php">Ajouter Module</a></li>
                         <?php } } ?>
                         <li><a href="view_subject.php">Liste Modules</a></li>
                     </ul>
                 </li>
                 <?php } } ?>
                 <?php if(isset($useroles)){  if(in_array("manage_class",$useroles)){ ?>
                 <!-- <li class="nav-label">Class</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-home"></i><span
                             class="hide-menu">Gestion Filières</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_class",$useroles)){ ?>
                         <li><a href="add_class.php">Ajouter Filière</a></li>
                         <?php } } ?>
                         <li><a href="view_class.php">Liste Filières</a></li>
                     </ul>
                 </li>
                 <?php } } ?>
                 <?php if(isset($useroles)){  if(in_array("manage_exam",$useroles)){ ?>
                 <!-- <li class="nav-label">Class</li> -->
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-home"></i><span
                             class="hide-menu">Gestion Examen </span></a>
                     <ul aria-expanded="false" class="collapse">
                         <li><a href="add_roomtype.php">Ajouter Type Salle</a></li>
                         <li><a href="view_roomtype.php">Voir Type Salle</a></li>
                         <li><a href="add_room.php">Ajouter Salle</a></li>
                         <li><a href="view_room.php">Modifier Salle</a></li>
                         <li><a href="add_exam.php">Ajouter Examen</a></li>
                         <li><a href="view_exam.php">Liste Examens</a></li>
                         <li><a href="add_allotment.php">Ajouter Attribution</a></li>
                         <li><a href="view_allotment.php">Voir Attribution</a></li>
                     </ul>
                 </li>
                 <?php } } ?>
                 <li> <a href="iandex.php" aria-expanded="false"><i class="fa fa-window-maximize"></i>Imprimer Convocation</a>
                 </li>

                 <?php if(isset($useroles)){  if(in_array("manage_user",$useroles)){ ?>
                 <li class="nav-label">Users</li>
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user-plus"></i><span
                             class="hide-menu">User Management</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <?php if(isset($useroles)){  if(in_array("add_user",$useroles)){ ?>
                         <li><a href="add_user.php">Ajouter Utilisateur</a></li>
                         <?php } } ?>
                         <li><a href="view_user.php">Voir Utilisateur</a></li>
                     </ul>
                 </li>
                 <?php } } ?>

                 <?php if($_SESSION["username"]=='admin') { ?>
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-lock"></i><span
                             class="hide-menu">Utilisateur Permissions</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <li><a href="assign_role.php">assigner rôle</a></li>
                         <li><a href="view_role.php">Voir Rôle</a></li>
                     </ul>
                 </li>

                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span
                             class="hide-menu">Setting</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <li><a href="manage_website.php">Appearance Management</a></li>
                         <li><a href="email_config.php">Email Management</a></li>
                     </ul>
                 </li>
                 <li class="nav-label">Reports</li>
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span
                             class="hide-menu">Report Management</span></a>
                     <ul aria-expanded="false" class="collapse">
                         <li><a href="today_exam.php">Examen today</a></li>
                         <li><a href="report_exam.php">Examen Raport</a></li>
                     </ul>
                 </li>
                 <?php } ?>
             </ul>
           
         </nav>
     </div>

 </div>
 