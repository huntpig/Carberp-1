<?php

if(!empty($Cur['x']) && !empty($Cur['str'])){

	if($item->id == $Cur['x']){

		if(count($files) > 0){
			}

			$mysqli->query('DELETE FROM bf_cabs WHERE (type = \''.$Cur['str'].'\') AND (prefix = \''.$item->prefix.'\') AND (uid = \''.$item->uid.'\')');
			$mysqli->query('DELETE FROM bf_comments WHERE (type = \''.$Cur['str'].'\') AND (prefix = \''.$item->prefix.'\') AND (uid = \''.$item->uid.'\')');
		}
	}

	header('Location: /cabs/index.html?ajax=1&page=' . $Cur['page']);
	exit;
}

?>