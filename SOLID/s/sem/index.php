<h3>SEM = Princípio da Responsabilidade Única - (S)</h3>
<p>Temos uma pessoa que ela tem: nome, idade, cor da casa, e dados bancários. </p>
<p>
Está forma de código não está correta, pois a Pessoa não precisa saber como fazer um depósito ou saber a Cor da sua casa, para ambos os casos, deveriam ter refatorações criando Classes como: Conta, Casa.
</p>
<p>
Onde cada uma delas teria a responsabilidade correta e única
</p>
Veja solução seguindo o principio <b>S</b> <a href="com">aqui</a>
<pre>
class Pessoa
{
    private $nome;
    private $idade;
    private $corDaCasa;
    private $dadosConta;
    
    function __construct($nome, $idade, $cor, $dadosConta)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->corDaCasa = $cor;
        $this->dadosConta = $dadosConta;
    }

    function pegarCorDaCasa()
    {
        return $this->corDaCasa;
    }

    function depositarNoBanco($valor)
    {
        // salvando no banco um valor
    }
}
</pre>

<?php 

class Pessoa
{
    private $nome;
    private $idade;
    private $corDaCasa;
    private $dadosConta;
    
    function __construct($nome, $idade, $cor, $dadosConta)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->corDaCasa = $cor;
        $this->dadosConta = $dadosConta;
    }

    function pegarCorDaCasa()
    {
        return $this->corDaCasa;
    }

    function depositarNoBanco($valor)
    {
        // salvando no banco um valor (toda lógica aqui)
    }
}