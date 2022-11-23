<?php
	
if(!function_exists("SnakeCase"))
{
	//https://stackoverflow.com/questions/1993721/how-to-convert-pascalcase-to-snake-case
	function SnakeCase($string)
	{
		$matches;
		preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
		$ret = $matches[0];
		foreach ($ret as &$match) {
			$match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
		}
		return implode('_', $ret);
	}
}
else
{
	//TODO: log, possible error	
}

?>