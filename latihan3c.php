<?php
    function pangkat ($angka, $pangkat){
        $c = $angka;
        for($i=0; $i<($pangkat - 1); $i++){
            $c = $c * $angka;
        }
        return $c;
    }
    echo "5 pangkat 4 = " .pangkat(5,4);
?>