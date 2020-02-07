<h3>Princípio da Segregação de Interfaces - (I)</h3>
<p>Seguindo o conceito segregação de interface, agora exitem duas interfaces, Come e Bebe, com seus respectivos métodos: comer(), beber().</p>
<p>Dessa forma apenas as classes que são de comer e beber, como Acai, podem implementar as duas interfaces, e Suco e Banana, só implementam o que é necessário para elas.</p>
<h4>Interfaces</h4>
<pre>
interface Come
{
    function comer();
}

\\
interface Bebe
{
    function beber();
}
</pre>

<h4>Classes</h4>

<pre>

class Acai implements Come, Bebe
{
    function comer(){
        // Acai tem parte que come, OK
    }

    function beber()
    {
        // Acai tem parte que bebe, OK
    }
}

\\
class Suco implements Bebe
{
    function beber()
    {
        // Suco só tem parte que bebe, OK
    }
}

\\
class Banana implements ComeBebe
{
    function comer()
    {
        // Banana é de comer, OK
    }
}

</pre>

<?php 

interface Come
{
    function comer();
}

interface Bebe
{
    function beber();
}

class Acai implements Come, Bebe
{
    function comer(){
        // Acai tem parte que come, OK
    }

    function beber()
    {
        // Acai tem parte que bebe, OK
    }
}

class Suco implements Bebe
{
    function beber()
    {
        // Suco só tem parte que bebe, OK
    }
}

class Banana implements ComeBebe
{
    function comer()
    {
        // Banana é de comer, OK
    }
}