<?php
$array = [2,3,'hello'];
	function list_maker($array)
	{
		$html = "<ul>";
		foreach($array as $item)
		{
			$html .= "</li>". $item . "</li>";
		}
		$html .= "</ul>";
		return $html;

	}
	echo list_maker($array);

?>