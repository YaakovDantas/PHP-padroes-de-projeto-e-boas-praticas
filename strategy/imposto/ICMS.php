<?php
class ICMS implements Imposto {

          public function calcula(Orcamento $orcamento) {
              return $orcamento->getValor() * 0.05 + 50;
          }

      }