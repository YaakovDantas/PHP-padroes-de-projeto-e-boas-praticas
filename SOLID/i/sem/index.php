<h3>SEM = Princípio da Segregação de Interfaces - (I)</h3>
<p>Temos uma Interface ComerBeber, nela tem metodos a serem implementados: comer() e beber(). </p>
<p>Se um Classe de açai implementa essa Interface, é o certo, pois um açãi tem parte de comer e parte de beber.</p>
<p>Porém uma Classe de Banana e Suco, implementam essa Interface, só um dos métodos será realmente usado por elas.</p>
<p>
Está forma de código não está correta, estamos forçando as Classes Banana e Suco, terem métodos que não fazem sentido, e eles deveram ser implementados por conta da Interface.
</p>
Veja solução seguindo o principio <b>I</b> <a href="<?=$raiz?>com">aqui</a>
<pre>

interface ComeBebe
{
    function comer();
    function beber();
}

\\
class Acai implements ComeBebe
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
class Suco implements ComeBebe
{
    function comer(){
        // Suco não é de comer, FALHA
    }

    function beber()
    {
        // Suco só tem parte que bebe, OK
    }
}

\\
class Banana implements ComeBebe
{
    function comer(){
        // Banana é de comer, OK
    }

    function beber()
    {
        // Banana não tem nada de beber, Falha
    }
}
</pre>

<?php 

interface ComeBebe
{
    function comer();
    function beber();
}

class Acai implements ComeBebe
{
    function comer(){
        // Acai tem parte que come, OK
    }

    function beber()
    {
        // Acai tem parte que bebe, OK
    }
}

class Suco implements ComeBebe
{
    function comer(){
        // Suco não é de comer, FALHA
    }

    function beber()
    {
        // Suco só tem parte que bebe, OK
    }
}

class Banana implements ComeBebe
{
    function comer(){
        // Banana é de comer, OK
    }

    function beber()
    {
        // Banana não tem nada de beber, Falha
    }
}