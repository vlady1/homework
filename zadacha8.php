<?php
	$p1 = 6; //p1 - позиция 1
	$p2 = 4; //p2 - позиция 2
	$p3 = 0; //p3 - позиция 3
	$p4 = 3; //p4 - позиция 4
	$p5 = 2; //p5 - позиция 5
	$p6 = 4; //p6 - позиция 6
	$p7 = 3; //p7 - позиция 7
	$p8 = 2; //p8 - позиция 8
	$p9 = 9; //p9 - позиция 9
	// Всяка позиция се умножава със съответното и тегло, сумира се и се дели на 11, както следва:
	// Позиция 1*2, 2*4, 3*8, 4*5, 5*10, 6*9, 7*7, 8*3, 9*6
	$p10 = ($p1*2)+($p2*4)+($p3*8)+($p4*5)+($p5*10)+($p6*9)+($p7*7)+($p8*3)+($p9*6);
    echo number_format($p10%11);
?>
