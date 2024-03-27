
<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');
extract($_POST);
echo"$module $semestre $filiere','$module','$semestre','$sur1','$sur2','$sur3','$local','$exam_date','$start_time','$end_time'";
   $sql = "INSERT INTO `exam` (`filiere`,`module`,`semestre`,`surUn`,`surDeux`,`surTroix`,`local`,`exam_date`,`start_time`,`end_time`) VALUES ('$filiere','$module','$semestre','$sur1','$sur2','$sur3','$local','$exam_date','$start_time','$end_time')";
 if ($conn->query($sql) === TRUE) {
      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="../view_exam.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="../view_exam.php";
</script>
<?php } ?>




