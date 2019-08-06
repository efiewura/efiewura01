<div class="card-columns">
	<?php
		foreach ($searchArr as $val) {
			$card = array('price' => $val->getprice(),
							'short_desc' => $val->getshort_desc(),
							'region' => $val->getregion(),
							'district' => $val->getdistrict(),
							'city' => $val->getcity(),
							'description' => $val->getdescription(),
							'id' => $val->getID()
				 );
		include './vws/card.vws.php';
		}
	 ?>


</div>