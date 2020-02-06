<h3>Princípio da Responsabilidade Única - (S)</h3>
<p>Seguindo o conceito da responsabilidade única, agora uma Pessoa só tem ações referente a uma pessoa.</p>
<p>Criando as Classes Banco e Casa, as responsabilidades de depositar, ou saber dados da casa, estão separados por suas Respectivas Classes.</p>
<h4>Classe Pessoa</h4>
<pre>
class Pessoa
{
    private $nome;
    private $idade;
    private $corDaCasa;
    
    function __construct($nome, $idade, Casa $casa)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->casa = $casa;
    }

    function getNome()
    {
        return $this->nome;
    }

    function andar()
    {
        //
    }

    function falar()
    {
        //
    }

    function informarCasa()
    {
        echo "Eu, $this->nome, moro na rua: {$this->casa->getRua()}, numero: {$this->casa->getNumero()} </br>";
    }
}
</pre>

<h4>Classe Banco</h4>

<pre>
class Banco
{
    public function depositar(Pessoa $pessoa, $valor)
    {
        echo "{$pessoa->getNome()}, depositou $valor em sua conta.</br>";
    }
}

</pre>

<h4>Classe Casa</h4>
<pre>
class Casa
{
    private $rua;
    private $numero;
    private $cor;
    
    function __construct($rua, $numero, $cor)
    {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cor = $cor;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function getRua()
    {
        return $this->rua;
    }
}
</pre>
<?php 

class Pessoa
{
    private $nome;
    private $idade;
    private $corDaCasa;
    
    function __construct($nome, $idade, Casa $casa)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->casa = $casa;
    }

    function getNome()
    {
        return $this->nome;
    }

    function andar()
    {
        //
    }

    function falar()
    {
        //
    }

    function informarCasa()
    {
        echo "Eu, $this->nome, moro na rua: {$this->casa->getRua()}, numero: {$this->casa->getNumero()} </br>";
    }
}

class Banco
{
    public function depositar(Pessoa $pessoa, $valor)
    {
        echo "{$pessoa->getNome()}, depositou $valor em sua conta.</br>";
    }
}

class Casa
{
    private $rua;
    private $numero;
    private $cor;
    
    function __construct($rua, $numero, $cor)
    {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cor = $cor;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function getRua()
    {
        return $this->rua;
    }
}

// TESTE SIMPLES

// $casa = new Casa("7 de Setembro", "2013", "Verde");
// $pessoa = new Pessoa("Roberto", 23, $casa);

// $pessoa->informarCasa();

// $banco = new Banco();

// $banco->depositar($pessoa, 40.00);