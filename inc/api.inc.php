<?php 
switch ($prod) {
	case 'efiewura':
		switch ($op) {
			case 'create':
				if(is_object($efiewura)){
					echo "{\"status\":\"success\",\"data\":".json_encode($efiewura->getload())."}";
				}else{
					echo "{status:'failed'}";
				}
				break;
			default:
				# code...
				break;
		}
		break;
	case 'space':
		switch ($op) {
			case 'create':
				if(is_object($space)){
					echo "{\"status\":\"success\",\"data\":".json_encode($space->getload())."}";
				}else{
					echo "{'status':'failed'}";
				}
				break;
			default:
				# code...
				break;
		}
		break;
	case 'image':
		switch ($op) {
			case 'create':
				if(is_object($image)){
					echo "{\"status\":\"success\",\"data\":".json_encode($image->getload())."}";
				}else{
					echo "{'status':'failed'}";
				}
				break;
			default:
				# code...
				break;
		}
		break;
	default:
		# code...
		break;
}
?>