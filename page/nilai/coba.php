<?php


$array = ["a", "l", "n", "k", "p"];
$array1 = ["l", "k", "a", "n", "p"];
$array2 = [];

foreach ($array as $a) {
	$angka = 1;
	foreach($array1 as $b){
		$angka++;
		if ($a == $b){
			echo $angka;
		}
	}
}

?>
<?php $a = 0 ?>
                                    <?php $b = 0 ?>
                                    <?php $coba = []; ?> 
                                    <?php $coba1 = []; ?>
                                    <?php foreach ($alternatif as $row) : ?>
                                        <?php $varV[$b] = 1 ?>
                                        <?php $varV[$b] = $test[$a] / $totalS ?>
                                            <?php $l = round(round($test[$a], 3) / round($totalS, 3), 3) ?>
                                            <?php $coba[] = $l; ?>
                                            <?php $coba1[] = $l; ?>
                                        <?php $a++ ?>
                                        <?php $b++ ?>
                                    <?php endforeach ?>
                                    <?php 
                                    $array2 = [];
                                    foreach($coba as $ab){
                                        $angka = 1;
                                        rsort($coba1);
                                        if($ab != end($array2))
	                                        foreach($coba1 as $bc){
	                                            $angka++;
	                                            if ($ab == $bc) {
	                                                $array2[] = $angka;
	                                            }
	                                        }
                                    }

                                    var_dump($array2);
                                ?>