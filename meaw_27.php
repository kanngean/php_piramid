<body>
<style>
@font-face{
font-family:mono;
src:url('mono.ttf');
}
</style>
<pre style="font-family:mono;font-size:20px;">

<?php
for($row=1;$row<=5;$row++) {

	echo($row);

	for($col=1;$col<=$row;$col++) {
		echo(" ");	
	}
	
	for($col=1;$col<=$row;$col++) {
		echo("*");	
	}

	echo "<br/>";
}
?>

</pre></body>