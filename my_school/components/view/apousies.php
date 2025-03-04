<?php
  include_once '../../header.php';
  include_once '../../nav.php';
  include_once '../modules/apousies.php';
?>
<div align="center">
  <form class="form-check" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
      <tr>
        <th>
          Καθηγητής
        </th>
        <th>
          <select name="teacher" id="teacher">
            <?php foreach ($arr_teacher as $value) {
                if (!empty($value)){
                  $teacher = json_decode($value);
                  echo "<option value=". $teacher->id. ">". $teacher->teacher. "</option>";
                }
              }
            ?>
          </select>
        </th>
      </tr>
      <tr>
        <th>
          Μαθητής
        </th>
        <th>
          <select name="student" id="student">
            <?php foreach ($arr_student as $value) {
                if (!empty($value)){
                  $student = json_decode($value);
                  echo "<option value=". $student->id. ">". $student->student. "</option>";
                }
              }
            ?>
          </select>
        </th>
      </tr>
      <tr>
        <th>
          Μάθημα
        </th>
        <th>
          <select name="lesson" id="lesson">
            <?php foreach ($arr_lesson as $value) {
                if (!empty($value)){
                  $lesson = json_decode($value);
                  echo "<option value=". $lesson->id. ">". $lesson->title. "</option>";
                }
              }
            ?>
          </select>
        </th>
      </tr>
      <tr>
        <th>
          Ημερομηνία Απουσίας:
        </th>
        <th>
          <input type="date" name="apousia_date" id="apousia_date">
        </th>
      </tr>
    </table>
    <br>
    <input class="btn btn-outline-success" type="submit" name="submit" value="Εισαγωγή">
    <button class="btn btn-outline-secondary" onclick="">Διόρθωση</button>
    <button class="btn btn-outline-danger" onclick="">Διαγραφή</button>
  </form>
</div>

<hr/>
<table border="1" class="table table-success table-striped">
  <tr>
    <th>Καθηγητής</th>
    <th>Μαθητής</th>
    <th>Μάθημα</th>
    <th>Ημερομηνία</th>
  </tr>
  <?php foreach ($arr_apousies as $value) {
    if (!empty($value)) {
        $apousies = json_decode($value);
        echo "<tr onclick='connectFormTable(". $apousies->id. ")'>";
        echo "<td id=teacher_". $apousies->id. ">". $apousies->teacher. "</td>";
        echo "<td id=student_". $apousies->id. ">". $apousies->student. "</td>";
        echo "<td id=mathima_". $apousies->id. ">". $apousies->mathima. "</td>";
        echo "<td id=trans_date_". $apousies->id. ">". $apousies->trans_date. "</td>";
        echo "</tr>";
      }
    }
  ?>
</table>
<?php
  include_once '../../footer.php';
?>

<script type="text/javascript">
  function connectFormTable(id) {
    //Ανάκτηση δεδομενών από τις γραμμές του πίνακα
    var teacher = document.getElementById('teacher_' + id).innerText;
    var student = document.getElementById('student_' + id).innerText;
    var lesson = document.getElementById('mathima_' + id).innerText;
    var apousia_date = document.getElementById('trans_date_' + id).innerText;

    //Φόρτωση των παραπάνω δεδομενών στην φόρμα
    var sel = document.getElementById('teacher');
    for(var i = 0, j = sel.options.length; i < j; ++i) {
      if(sel.options[i].innerText === teacher) {
        sel.selectedIndex = i;
        break;
      }
    }

    sel = document.getElementById('student');
    for(var i = 0, j = sel.options.length; i < j; ++i) {
      if(sel.options[i].innerText === student) {
        sel.selectedIndex = i;
        break;
      }
    }

    sel = document.getElementById('lesson');
    for(var i = 0, j = sel.options.length; i < j; ++i) {
      if(sel.options[i].innerText === lesson) {
        sel.selectedIndex = i;
        break;
      }
    }
    document.getElementById('apousia_date').value = apousia_date;
  }
</script>