

<?php echo file_get_contents("html/header.html"); ?>
This is page 2

<?php

$fruits = array("apples","pears","bananas","strawberries");
echo "<br>";
echo"<h2>Fruits Page</h2>";
foreach ($fruits as $fruit) {
    echo $fruit."<br>";
}
?>
<?php echo file_get_contents("html/footer.html"); ?>


 