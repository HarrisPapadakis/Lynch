<?php
	include_once '../../header.php';
  	include_once '../../nav.php';
  	include_once '../modules/vivliothiki.php';
 ?>
 <div align="center">
  <form class="form-check">
    <input type="text" id="id" name="id" style="display: none;">
    <table>
      <tr>
        <th>
          Κατηγορία:
        </th>
        <th>
          <input type="radio" name="category" id="category__1" value="1">Ψυχολογία<br>
          <input type="radio" name="category" id="category__2" value="2">Μαθηματικά<br>
          <input type="radio" name="category" id="category__3" value="3">Φυσικές Επιστήμες
        </th>
      </tr>
      <tr>
        <th>
          Τίτλο:
        </th>
        <th>
          <input type="text" name="title" id="title">
        </th>
      </tr>
      <tr>
        <th>
          ISBN:
        </th>
        <th>
          <input type="text" name="isbn" id="isbn">
        </th>
      </tr>
      <tr>
        <th>
          Ενοικίαση:
        </th>
        <th>
          <input type="date" name="rent" id="rent">
        </th>
      </tr>
      <tr>
        <th>
          Επιστροφή:
        </th>
        <th>
          <input type="date" name="back" id="back">
        </th>
      </tr>
    </table>
    <br>
    <button class="btn btn-outline-success" onclick="return _insert();">Εισαγωγή</button>
    <button class="btn btn-outline-secondary" onclick="return _update();">Διόρθωση</button>
    <button class="btn btn-outline-danger" onclick="return _delete();">Διαγραφή</button>
  </form>
</div>

<hr/>
<table border="1" class="table table-success table-striped">
  <tr>
    <th>Κατηγορία</th>
    <th>Τίτλος</th>
    <th>ISBN</th>
    <th>Ενοικίαση</th>
    <th>Επιστροφή</th>
  </tr>
  <?php
    $arr = Vivliothiki::getData($msqli, $tbl_vivliothiki);

    foreach ($arr as $value) {
      if (!empty($value)) {
        $info = json_decode($value);
        echo "<tr onclick='connectFormTable(". $info->id. ")'>";
        echo "<td id=category_". $info->id. ">". $info->category. "</td>";
        echo "<td id=title_". $info->id. ">". $info->title. "</td>";
        echo "<td id=isbn_". $info->id. ">". $info->isbn. "</td>";
        echo "<td id=rent_". $info->id. ">". $info->rent. "</td>";
        echo "<td id=back_". $info->id. ">". $info->back. "</td>";
        echo "</tr>";
      }
    }
  ?>
</table>
<script>
  function connectFormTable(id) {
    //Ανάκτηση δεδομενών από τις γραμμές του πίνακα
    var category = document.getElementById('category_' + id).innerText;
    var title = document.getElementById('title_' + id).innerText;
    var isbn = document.getElementById('isbn_' + id).innerText;
    var rent = document.getElementById('rent_' + id).innerText;
    var back = document.getElementById('back_' + id).innerText;

    //Φόρτωση των παραπάνω δεδομενών στην φόρμα
    document.getElementById('id').value = id;
    document.getElementById('title').value = title;
    document.getElementById('isbn').value = isbn;
    document.getElementById('rent').value = rent;
    document.getElementById('back').value = back;
    if (category == 'Ψυχολογία') document.getElementById('category__1').checked = true;
    if (category == 'Μαθηματικά') document.getElementById('category__2').checked = true;
    if (category == 'Φυσικές Επιστήμες') document.getElementById('category__3').checked = true;
  }

  function _insert() {
    //Ανάκτηση δεδομένων από την φόρμα
    var category = $('#category__1').is(":checked") == true ? 1 : ($('#category__2').is(":checked") == true ? 2 : 3);
    var title = $('#title').val();
    var isbn = $('#isbn').val();
    var rent = $('#rent').val();
    var back = $('#back').val();
    
    //Αποστολή των δεδομένων για αποθήκευση
    $.ajax({
        type: "POST",
        url: "/my_school/components/modules/vivliothiki_actions.php",
        data: {
          category:category,
          title:title,
          isbn:isbn,
          rent:rent,
          back:back,
          action:1
        },
        dataType: "json",
        success: function(data) {
          location.reload();
        },
        error: function(xhr, status, error) {
            alert(error);
        }
    });

    //Επιστροφή στην σελίδα χωρίς ανανέωση αυτής
    return false;
  }

  function _update() {
    //Ανάκτηση δεδομένων από την φόρμα
    var id = $('#id').val();
    var category = $('#category__1').is(":checked") == true ? 1 : ($('#category__2').is(":checked") == true ? 2 : 3);
    var title = $('#title').val();
    var isbn = $('#isbn').val();
    var rent = $('#rent').val();
    var back = $('#back').val();
    
    //Αποστολή των δεδομένων για αποθήκευση
    $.ajax({
        type: "POST",
        url: "/my_school/components/modules/vivliothiki_actions.php",
        data: {
          id:id,
          category:category,
          title:title,
          isbn:isbn,
          rent:rent,
          back:back,
          action:2
        },
        dataType: "json",
        success: function(data) {
          location.reload();
        },
        error: function(xhr, status, error) {
            alert(error);
        }
    });

    //Επιστροφή στην σελίδα χωρίς ανανέωση αυτής
    return false;
  }
  function _delete(){
    var id = $('#id').val();
    
    $.ajax({
        type: "POST",
        url: "/my_school/components/modules/vivliothiki_actions.php",
        data: {
          id:id,
          action:3
        },
        dataType: "json",
        success: function(data) {
          location.reload();
        },
        error: function(xhr, status, error) {
            alert(xhr);
        }
    });

    return false;
  }
</script>
<?php
  		include_once '../../footer.php';
?>