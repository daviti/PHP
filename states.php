
<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

	echo "<select>";
		for($i = 0; $i < count($states); $i++)
{
	echo "<option>" . $states[$i] . "</option>";
}


?>
