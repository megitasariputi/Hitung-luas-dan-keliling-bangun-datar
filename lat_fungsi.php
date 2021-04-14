<?php 
    function segitiga_luas($alas, $tinggi){
        $luas_segitiga=$alas*$tinggi/2;
        return $luas_segitiga;
    }
    function segitiga_keliling($sisi_a, $sisi_b, $sisi_c){
        $keliling_segitiga=$sisi_a+$sisi_b+$sisi_c;
        return $keliling_segitiga;
    }
    function lingkaran_luas($r){
        $luas_lingkaran=3.14*$r*$r;
        return $luas_lingkaran;
    }
    function lingkaran_keliling($d){
        $keliling_lingkaran=3.14*$d;
        return $keliling_lingkaran;
    }
    function jg_luas($alas, $tinggi){
        $luas_jg=$alas*$tinggi;
        return $luas_jg;
    }
    function jg_keliling($sisi_a, $sisi_b){
        $keliling_jg=2*($sisi_a+$sisi_b);
        return $keliling_jg;
    }
?>