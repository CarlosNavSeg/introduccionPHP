<?php
$edadesPorNombre=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
asort($edadesPorNombre);
print_r($edadesPorNombre);
?>
<?php
$edadesPorNumero=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
ksort($edadesPorNumero);
print_r($edadesPorNumero);
?>
<?php
$edadesPorNombreAsc=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
rsort($edadesPorNombreAsc);
print_r($edadesPorNombreAsc);
?>
<?php
$edadesPorNumeroAsc=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
krsort($edadesPorNumeroAsc);
print_r($edadesPorNumeroAsc)
?>