<?php
    include_once 'header.php';
?>
    <?php 
		if(isset($_SESSION["useruid"])){
			echo "<p><center> " .$_SESSION["useruid"]."! welcome to your bride house profile</center></p>";
		}
    ?>
     
<?php
    include_once 'footer.php';
?>