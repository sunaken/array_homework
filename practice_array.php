<?php
$custmer1 = ['id' =>  1, 'name' => 'Aさん', 'number'=>1];
$custmer2 = ['id' =>  2, 'name' => 'Bさん', 'number'=>2];
$custmer3 = ['id' =>  3, 'name' => 'Cさん', 'number'=>1];
$custmer4 = ['id' =>  4, 'name' => 'Dさん', 'number'=>2];
$custmer5 = ['id' =>  5, 'name' => 'Eさん', 'number'=>1];
$custmer6 = ['id' =>  6, 'name' => 'Fさん', 'number'=>2];
$custmer7 = ['id' =>  7, 'name' => 'Gさん', 'number'=>1];
$custmers_light = [$custmer1, $custmer2, $custmer3];
$custmers_pilsen = [$custmer5, $custmer6, $custmer7];
$petbotl = ['id' => 1, 'name' => 'Light',     'members' => $custmers_light];
$can = ['id' => 2, 'name' => 'Pilsen', 'members' => $custmers_pilsen];
$drink = ['containers' => [$petbotl, $can]];



foreach($drink['containers'] as $container){
//
	foreach($container['members'] as $member){
		//
		if($member['number']==2){
			//
			echo $member['name'] . ':'.$container['name'];
			echo'<br>';
		}
	}
}

