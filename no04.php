<?php
function cetak_gambar($numb){
	$tengah = ceil($numb/2);
	for($i=1; $i<=$numb; $i++){
		for($j=1; $j<=$numb; $j++){
			if($tengah == $i){ 
				echo "* ";
			}else{
				if ($j==1) {
					echo "* ";
				}elseif ($j==$numb) {
					echo "* ";
				}else{
					echo "= ";
				}
				
			}
		}
		echo "<br/>";
	}
}
cetak_gambar(5);
?>