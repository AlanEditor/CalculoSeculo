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
   if($ano <= 100)  return 'Século 1';
   if($ano <= 200)  return 'Século 2';
   if($ano <= 300)  return 'Século 3';
   if($ano <= 400)  return 'Século 4';
   if($ano <= 500)  return 'Século 5';
   if($ano <= 600)  return 'Século 6';
   if($ano <= 700)  return 'Século 7';
   if($ano <= 800)  return 'Século 8';
   if($ano <= 900)  return 'Século 9';
   if($ano <= 1000)  return 'Século 10';
   if($ano <= 1100) return 'Século 11';
   if($ano <= 1200) return 'Século 12';
   if($ano <= 1300) return 'Século 13';
   if($ano <= 1400) return 'Século 14';
   if($ano <= 1500) return 'Século 15';
   if($ano <= 1600) return 'Século 16';
   if($ano <= 1700) return 'Século 17';
   if($ano <= 1800) return 'Século 18';
   if($ano <= 1900) return 'Século 19';
   if($ano <= 2000) return 'Século 20';
   if($ano <= 2022) return 'Século 21'; 

}





?>