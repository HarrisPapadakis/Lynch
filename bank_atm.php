// index.php - Main entry point that sets up frames
<!DOCTYPE html>
<html>
<head>
    <title>Two Frames Site</title>
</head>
<frameset cols="20%, 80%">
    <frame src="menu.php" name="menuFrame">
    <frame src="forms.php" name="contentFrame">
</frameset>
</html>

// menu.php - Navigation menu with dynamic links
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <h3>Menu</h3>
    <ul>
        <li><a href="forms.php?form=staff" target="contentFrame">Staff</a></li>
        <li><a href="forms.php?form=courses" target="contentFrame">Courses</a></li>
        <li><a href="forms.php?form=absences" target="contentFrame">Absences</a></li>
    </ul>
</body>
</html>

// forms.php - Handles form display based on selected menu item
<?php
    $form = isset($_GET['form']) ? $_GET['form'] : 'default';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
</head>
<body>
    <h3>Form Section</h3>
    <hr>
    <?php
        // Display appropriate form based on selection
        if ($form == 'staff') {
            echo "<h4>Staff Management</h4>";
            echo "<form>";
            echo "<input type='text' placeholder='Enter Name'>";
            echo "<button>Add</button><button>Edit</button><button>Delete</button>";
            echo "</form>";
        } elseif ($form == 'courses') {
            echo "<h4>Courses Management</h4>";
            echo "<form>";
            echo "<input type='text' placeholder='Enter Course Name'>";
            echo "<button>Add</button><button>Edit</button><button>Delete</button>";
            echo "</form>";
        } elseif ($form == 'absences') {
            echo "<h4>Absences Management</h4>";
            echo "<form>";
            echo "<input type='text' placeholder='Enter Student Name'>";
            echo "<button>Add</button><button>Edit</button><button>Delete</button>";
            echo "</form>";
        } else {
            echo "<p>Select an option from the menu.</p>";
        }
    ?>
</body>
</html>
