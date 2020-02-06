<?php
class Conta {
        private $saldo;

        public function deposita($valor) {
          $this->saldo += $valor;
        }

        public function getSaldo() {
          return $this->saldo;
        }
      }
