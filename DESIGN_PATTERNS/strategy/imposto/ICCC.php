<?php
 class ICCC implements Imposto {

        public function calcula(Orcamento $orcamento) {
          if($orcamento->getValor() < 1000) {
            return $orcamento->getValor() * 0.05;
          }
          else if ($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000) {
            return $orcamento->getValor() * 0.07;
          }
          else {
            return $orcamento->getValor() * 0.08 + 30;
          }
        }
      }