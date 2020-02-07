<h3>SEM = Princípio da Substituição de Liskov - (L)</h3>
<p>Temos uma Classe pai Retangulo, que podemos definir Base e Altura, por definição matématica um Quadrado é um Retangulo, então podemos estender para Quadrado ser Filho de Retangulo. </p>
<p>Então podemos sobrescrever os métodos setBase e setAltura, passa quando passar um valor, já colocamos esse valor nos 2 atributos em cada método, já que um quadrado deve ter lados iguais.</p>
<p>
Está forma de código não está correta, estamos alterando os métodos da classe Pai(Retangulo), mesmo que a assinatura e retorno sejam iguais, a lógica dentro do método está diferente.
</p>
<p>
Onde cada uma delas teria a responsabilidade correta e única
</p>
Veja solução seguindo o principio <b>L</b> <a href="com">aqui</a>
<pre>
class Retangulo
{
    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
    }

    function calcula()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    function setAltura($altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
}
</pre>

<?php 

class Retangulo
{
    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
    }

    function calcula()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    function setAltura($altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
}