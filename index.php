<?php 
 
	$arrayNumbers = [1, 2, 45, 87, 99, 3, 20];

	$arrayNumbers_1 = [10, 9, 4, 87, 99, 35, 20];

	function summ_two_array ($array_1, $array_2) {

		if (is_array($array_1) && is_array($array_2)) {

			$iSumNumber = array_sum($array_1) + array_sum($array_2);

			return $iSumNumber;
		}

		else {

			echo "eror";

		}
	}

	function type_arr ($array_1) {

		if (is_array($array_1)) {
			
			foreach ($array_1 as $item) {

				$sType = gettype($item);
				echo $sType;
				echo "<br>";
			}
			
		} else {

			echo "eror";

		}	
	}

	/*$summ_two_array = summ_two_array($arrayNumbers, $arrayNumbers_1);

	echo $summ_two_array*/

	$iNumber = 8;
	$dNumber = 1.5;
	$sText = "Hello World";
	$arNumbers = [1, 2, 45, 87, 99, 3, 20];
	$bFlag = true;
	$arPerson = array(
		'Name' => "Andrei", 
		"age" => 19
	);

	$arType = [$iNumber, $dNumber, $sText, $arNumbers, $bFlag, $arPerson];

	type_arr($arType);


	

?>