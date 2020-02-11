<h3>Princípio da Substituição de Liskov - (L)</h3>
<p>Seguindo o conceito de Liskov, uma forma de não quebrar o contrato, seria criar uma Interface FiguraGeometrica com o metodo Area().</p>
<p>Assim Quadrado e Retangulo iriam implementar a Interface e sua função, e cada um receberia sua altura/largura para retangulo e quadrado só o lado.</p>

<h4>Interface Figura, Classe Quadrado/Retangulo</h4>
<pre>

//
interface FiguraGeometrica
{
    function Area();
}

//
class Retangulo implements FiguraGeometrica
{
    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
    }

    function Area()
    {
        return $this->largura * $this->altura;
    }
}

//
class Quadrado implements FiguraGeometrica
{
    function setLado($lado)
    {
        $this->lado = $lado;
    }

    function Area()
    {
        return $this->lado * $this->lado;
    }
}
</pre>

<h4>Cliente</h4>

<pre>

$quadrado = new Quadrado();
$quadrado->setLado(4);
echo "{$quadrado->Area()}";

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo "{$retangulo->Area()}";

</pre>

<?php 

interface FiguraGeometrica
{
    function Area();
}

class Retangulo implements FiguraGeometrica
{
    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function setLargura($largura)
    {
        $this->largura = $largura;
    }

    function Area()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado implements FiguraGeometrica
{
    function setLado($lado)
    {
        $this->lado = $lado;
    }

    function Area()
    {
        return $this->lado * $this->lado;
    }
}

// TESTE DE EXEMPLO

// $quadrado = new Quadrado();
// $quadrado->setLado(4);
// echo "{$quadrado->Area()}</br>";


// $retangulo = new Retangulo();
// $retangulo->setAltura(5);
// $retangulo->setLargura(10);
// echo "{$retangulo->Area()}</br>";