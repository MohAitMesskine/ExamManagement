
<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');
$passw = hash('sha256', $_POST['password']);
function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$pass = hash('sha256', $salt . $passw);
extract($_POST);
   $sql = "INSERT INTO `tbl_teacher` (`matricule`,`cin`,`tfname`, `tlname`, `classname`, `subjectname`, `temail`, `tgender`, `tdob`, `tcontact`, `taddress`) VALUES ('$matricule','$cin','$tfname', '$tlname', '$classname', '$subjectname', '$temail','$tgender', '$tdob', '$tcontact', '$taddress')";
   $req = "INSERT INTO admin (cne,cin,username, email) VALUES ('$matricule','$cin','professeur', '$temail')";
  if ($conn->query($sql) === TRUE) {
       $_SESSION['success']=' Record Successfully Added';
      
     ?>
     
<script type="text/javascript">
window.location="../view_teacher.php";
</script>
<?php
 } else {
      $_SESSION['error']='Something Went Wrong';
 ?>
<script type="text/javascript">
window.location="../view_teacher.php";
</script>
<?php 
 }
?>
<?php
 if ($conn->query($req) === TRUE) {
  $_SESSION['success']=' Record Successfully Added';
 }
 else{
  $_SESSION['error']='Something Went Wrong';
 }
 ?>