<?php

function redirect($delay=NULL,$url=NULL){

	if ( empty($delay) && empty($url) ) {

		// echo "Parameter Kosong";

		echo '<meta http-equiv="Refresh" content="0;url=" />';

	}else{

		// echo "Parameter Tidak Kosong";

		echo "<meta http-equiv='Refresh' content='".$delay.";url=http://anonymous/dostupidthing.v.0.0.2/".$url."' />";

	}

}