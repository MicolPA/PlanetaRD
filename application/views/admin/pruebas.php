<?php 

 $url = 'Holá k ace?';

  function cleanUrl($url){
		$url = str_replace(
       		array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        	array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        	$url
	    );
	 
	    $url = str_replace(
	        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $url );
	 
	    $url = str_replace(
	        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $url );
	 
	    $url = str_replace(
	        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $url );
	 
	    $url = str_replace(
	        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $url );
	 
	    $url = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C'),
	        $url
	    );

	    $url = strtolower($url);
	    $url = str_replace(' ', '-', $url);
	    $url = preg_replace("/[^a-zA-Z0-9_-]+/", '', $url);

	    return $url;
	}

	$url = cleanUrl($url);

	echo $url;


 ?>