<h3>Princípio da inversão de dependência - (D)</h3>
<p>Seguindo o conceito da inversão de dependência, agora um Interruptor irá ter um método Acionar, que recebe algum Objeto do tipo Dispositivo, onde ele vai mandar o Dispositivo ser acionado.</p>
<p>
Assim as classes Ventilador e Lampada saberam se ligar/desligar por elas mesmas
</p>
<h4>Interface</h4>
<pre>

interface Dispositivo
{
    function acionar();
    function ligar();
    function desligar();
}

</pre>

<h4>Classes</h4>

<pre>

class Ventilador implements Dispositivo
{
    function ligar() 
    { 
        // 
    }
    
    function desligar() 
    { 
        //
    }

    function acionar()
    {
        /**
         * Toda lógica para saber se o ventilador irá apagar ou desligar
         * Se status == true, ligar()
         * se status == false, desligar
         */
    }
}

class Lampada implements Dispositivo
{
    function ligar() 
    { 
        // 
    }
    
    function desligar() 
    { 
        //
    }

    function acionar()
    {
        /**
         * Toda lógica para saber se a lampada irá apagar ou desligar
         * Se status == true, ligar()
         * se status == false, desligar
         */
    }
}

class Interruptor
{
    function acionar(Dispositivo $dispositivo)
    {
        $dispositivo->acionar();
    }
}

</pre>

<?php 

interface Dispositivo
{
    function acionar();
    function ligar();
    function desligar();
}

class Ventilador implements Dispositivo
{
    function ligar() 
    { 
        // 
    }
    
    function desligar() 
    { 
        //
    }

    function acionar()
    {
        /**
         * Toda lógica para saber se o ventilador irá apagar ou desligar
         * Se status == true, ligar()
         * se status == false, desligar
         */
    }
}

class Lampada implements Dispositivo
{
    function ligar() 
    { 
        // 
    }
    
    function desligar() 
    { 
        //
    }

    function acionar()
    {
        /**
         * Toda lógica para saber se a lampada irá apagar ou desligar
         * Se status == true, ligar()
         * se status == false, desligar
         */
    }
}

class Interruptor
{
    function acionar(Dispositivo $dispositivo)
    {
        $dispositivo->acionar();
    }
}