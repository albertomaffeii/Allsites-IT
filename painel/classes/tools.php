<?php
/**
 * Class Tools
 * Hospeda todos as ferramentas que posso user cotidia namente
 *
 * @author Alberto
 */
class tools {
    
    //Codifica a url para ser venviado por GET
    function base64url_encode($data) {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    //Deodifica a url para ser venviado por GET
    function base64url_decode($data) {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }

	// Usage: uploadfile($_FILE['file']['name'],'temp/',$_FILE['file']['tmp_name'])
	function uploadfile($origin, $dest, $tmp_name) {

	  $origin = strtolower(basename($origin));
	  $fulldest = $dest.$origin;
	  $filename = $origin;

	  for ($i=1; file_exists($fulldest); $i++) {
		$fileext = (strpos($origin,'.')===false?'':'.'.substr(strrchr($origin, "."), 1));
		$filename = substr($origin, 0, strlen($origin)-strlen($fileext)).'['.$i.']'.$fileext;
		$fulldest = $dest.$filename;
	  }
	  
	  if (move_uploaded_file($tmp_name, $fulldest)):
		return $filename;
	  endif;

	  return false;
	}
}