<?php
    $tempo = " ";
    $size = $_GET["fsize"];
    $speed =$_GET["fspeed"];
    $res = $size/($speed/8);
    $hora = ($res/3600);
    $minuto = (($res - ($hora * 3600))/60);
    $segundo = ($res - (($hora*3600) + ($minuto * 60)));



    if($res< 1){
        echo "Menos de 1 (Um) Segundo... aproximadamente $res segundos";
    }

    if($res > 2592000){
        echo "Mais de 1 (Um) Mês";
    }else if($res  >=  3600){
        $tempo =" $hora Hora(s) $minuto Min(s) $segundo Seg(s). ";
        echo $tempo;
    }else if( $res< 3600 and $res >=60){
        $tempo = "$minuto Minuto(s) $segundo Seg(s). ";
        echo $tempo;
    }else{
        $tempo =" $segundo Segundo(s)";
        echo $tempo;
    }

?>