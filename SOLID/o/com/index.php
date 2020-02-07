<h3>Princípio Aberto/Fechado - (O)</h3>
<p>Seguindo o conceito da do Aberto/Fechado, agora cada tipo de Email deve ser responsável por saber formatar a mensagem antes de enviar.</p>
<p>Criando uma Interface Email, com a função enviar, todos os Tipos de Email devem ser capazes de enviar seus emails por contra própria.</p>
<h4>Interface Email e suas Classes Tipos</h4>
<pre>

//
interface Email 
{
    function enviar($assunto, $mensagem);
}

//
class EmailCript implements Email
{
    function enviar($assunto, $mensagem)
    {
        /**
         * Logica para enviar email criptografado
         */
    }

    function criarCript()
    {
        // logica de criptografia
    }

    /**
     * Outros métodos
     */
}

//
class EmailTexto implements Email
{
    function enviar($assunto, $mensagem)
    {
        /**
         * Logica para enviar email de texto
         */
    }

    function removerFormatacao()
    {
        // logica de remover formatação de texto
    }

    /**
     * Outros métodos
     */
}
</pre>

<h4>Cliente</h4>

<pre>
$mensagem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$assunto = "Lorem";

$email = new EmailTexto();
$email->enviar($assunto, $email); // toda responsabilidade de enviar um email está dentro da classe EmailTexto

</pre>
<?php 

interface Email 
{
    function enviar($assunto, $mensagem);
}

class EmailCript implements Email
{
    function enviar($assunto, $mensagem)
    {
        /**
         * Logica para enviar email criptografado
         */
    }

    function criarCript()
    {
        // logica de criptografia
    }

    /**
     * Outros métodos
     */
}

class EmailTexto implements Email
{
    function enviar($assunto, $mensagem)
    {
        /**
         * Logica para enviar email de texto
         */
    }

    function removerFormatacao()
    {
        // logica de remover formatação de texto
    }

    /**
     * Outros métodos
     */
}

// EXEMPLO DE TESTE, MAS PRA FUNCIONAR PRECISA DE FATO FAZER A LOGICA DAS FUNÇÔES

// $mensagem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $assunto = "Lorem";

// $email = new EmailTexto();
// $email->enviar($assunto, $email);