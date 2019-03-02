<?php
	function count_handshake($b){
        $b = $b - 1;
        $x = -1;
		$y = 0;
		for ($j=$b; $j>=1; $j--){			
			for ($i=$y; $i<=$j; $i++){				
				$x++;				
			}			
			$y++;			
		}
		echo "$x<br>";	
	}
	echo count_handshake(3);
?>