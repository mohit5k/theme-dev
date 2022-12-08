<?php

class woof_AfterSetupTheme{
	
	
	static function return_thme_option($string,$str=null){
		global $woof;
		if($str!=null)
		return isset($woof[''.$string.''][''.$str.'']) ? $woof[''.$string.''][''.$str.''] : null;
		else
		return isset($woof[''.$string.'']) ? $woof[''.$string.''] : null;
	}
	
	
}
?>