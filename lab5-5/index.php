<?php
	if(isset($_GET['idetifier']))
	{
		$identifier = trim($_GET['identifier']);
	}
	else
	{
		die('Don''t get the identifier');
	}
	if(empty($identifier))
	{
		die('There is clear');
	}
	if (ctype_alpha($identifier[0]))
	{
		die('Последовательность не является идентификатором');
	}
	for($i=1; $i<strlen($identifier; $i++))
	{
		if (ctype_alnum($identifier))
		{
			die('No');
		}
	}
	echo "Да";
?>