<h3>SEM = Princípio da inversão de dependência - (D)</h3>
<p>Temos uma Classe Interruptor, nela recebemos um Ventilador, e precisamos acessar seu atributo OnOff, para saber se está ligado(true) ou desligado(false). </p>
<p>
Para depois chamar o método do Ventilador Ligar(), ou Desligar().
</p>
<p>
Se existir depois uma Lampada, teriamos que ter outro método em Interruptor, para saber ligar uma lampada.
</p>
<p>Está não é uma boa prática, pois a classe Interruptor está dependendo de uma Classe Concreta, para fazer suas Operações. O ideal seria depender de alguma Abstração.</p>

Veja solução seguindo o principio <b>D</b> <a href="<?=$raiz?>com">aqui</a>
<pre>

class Ventilador
{
    function getOnOff()
    {
        //
    }
  
    function Ligar() 
    { 
        // 
    }
    
    function Desligar() 
    { 
        //
    }
}

\\
class Lampada
{
    function getStatus()
    {
        //
    }
  
    function Ascender() 
    { 
        // 
    }
    
    function Apagar() 
    { 
        //
    }
}

\\
class Interruptor
{
    function AcionarVentilador(Ventilador $ventilador)
    {
        if($ventilador->getOnOff()) {
            $ventilador->Ligar();
        } else {
            $ventilador->Desligar();
        }
    }

    function AcionarLampada(Lampada $lampada)
    {
        if($lampada->getStatus()) {
            $lampada->Apagar();
        } else {
            $lampada->Ascender();
        }
    }
}

</pre>

<?php 

class Ventilador
{
    function getOnOff()
    {
        //
    }
  
    function Ligar() 
    { 
        // 
    }
    
    function Desligar() 
    { 
        //
    }
}

class Lampada
{
    function getStatus()
    {
        //
    }
  
    function Ascender() 
    { 
        // 
    }
    
    function Apagar() 
    { 
        //
    }
}

class Interruptor
{
    function AcionarVentilador(Ventilador $ventilador)
    {
        if($ventilador->getOnOff()) {
            $ventilador->Ligar();
        } else {
            $ventilador->Desligar();
        }
    }

    function AcionarLampada(Lampada $lampada)
    {
        if($lampada->getStatus()) {
            $lampada->Apagar();
        } else {
            $lampada->Ascender();
        }
    }
}