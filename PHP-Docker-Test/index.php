<!-- <?php
$name = "Carter";
$name = 3;
$count = 32;
$names = array(700111222=>"alice", 700333444=>"bob", 700555666=>"cindy");
$x = 3.1415;

function sayHi($who)
{
	echo "<br>Hi $who!\n";
}
?>
<html>
	Hi,
	<?php
	foreach ($names as $id=>$name)
	{
		echo "<br>$id: ";
		sayHi($name);
	}

	echo "<br><br>x=$x\n";
	?>
</html> -->

<?php
include "mylib/Page.php";    
$page = new mylib\Page();
$page->generate();
?>