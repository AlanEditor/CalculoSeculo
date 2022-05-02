<?php

//Declaração da Variavel
$ano;

//Verifica se a key existe, caso exista, atribui a variavel $ano o valor da key; caso não exista,a tribui um valor padrao

isset($_GET['ano']) ? $ano = $_GET['ano'] : $ano = 1;


echo seculoAno($ano);


//A função calula até o 2022 por conta de ser o ano onde esta aplicacao está sendo feita

//A principio ela faz no modo IF, porém, por conta do meu tempo pessoal, não pude elaborar melhor esta parte. Peço desculpas

function seculoAno($ano)
{
   if($ano <= 100)  return 'Século I';
   if($ano <= 200)  return 'Século II';
   if($ano <= 300)  return 'Século III';
   if($ano <= 400)  return 'Século IV';
   if($ano <= 500)  return 'Século V';
   if($ano <= 600)  return 'Século IV';
   if($ano <= 700)  return 'Século VII';
   if($ano <= 800)  return 'Século VIII';
   if($ano <= 900)  return 'Século IX';
   if($ano <= 1100) return 'Século XI';
   if($ano <= 1200) return 'Século XII';
   if($ano <= 1300) return 'Século XII';
   if($ano <= 1400) return 'Século XIV';
   if($ano <= 1500) return 'Século XV';
   if($ano <= 1600) return 'Século XVI';
   if($ano <= 1700) return 'Século XVII';
   if($ano <= 1800) return 'Século XVII';
   if($ano <= 1900) return 'Século XIX';
   if($ano <= 2000) return 'Século XX';
   if($ano <= 2022) return 'Século XXI'; 

}





?>