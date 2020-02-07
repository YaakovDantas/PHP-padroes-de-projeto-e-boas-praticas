
<h3>SEM = Princípio Aberto/Fechado - (O)</h3>
<p>Temos uma classe que Envia Emails, onde ela tem muitos IF's dentro do Método 'EnviarEmail()'. Cada IF representa um TIPO de email. </p>
<p>
Está forma de código não está correta, pois a Classe EnviaEmail não vai escalar bem com a médida que novos tipos de Email forem criadas.
</p>
<p>
O ideal é cada Tipo de Email saber enviar sua própria regra de enviarEmail.
</p>
Veja solução seguindo o principio <b>O</b> <a href="com">aqui</a>
<pre>
class EmailCript
{
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Outros métodos
     */
}

class EmailTexto
{
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Outros métodos
     */
}



class EnviarEmail
{
    function Enviar($assunto, $mensagem, $email)
    {
        $mensagem = null;
        if ($email->getTipo() === 'CRIPT') {
            $mensagem = $this->criarCript($mensagem);
        } else if ($email->getTipo() === 'TEXTO') {
            $mensagem = $this->removerFormatacao($mensagem);
        }

        $this->EnviarMensagem($assunto, $mensagem);
    }

    function EnviarMensagem($assunto, $mensagem)
    {
        // de fato o email será enviado
    }

    function criarCript($mensagem)
    {
        // criptografar
    }

    function removerFormatacao($mensagem)
    {
        // tirar formatação
    }
}
</pre>

<?php 

class EmailCript
{
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Outros métodos
     */
}

class EmailTexto
{
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Outros métodos
     */
}



class EnviarEmail
{
    function Enviar($assunto, $mensagem, $email)
    {
        $mensagem = null;
        if ($email->getTipo() === 'CRIPT') {
            $mensagem = $this->criarCript($mensagem);
        } else if ($email->getTipo() === 'TEXTO') {
            $mensagem = $this->removerFormatacao($mensagem);
        }

        $this->EnviarMensagem($assunto, $mensagem);
    }

    function EnviarMensagem($assunto, $mensagem)
    {
        // de fato o email será enviado
    }

    function criarCript($mensagem)
    {
        // criptografar
    }

    function removerFormatacao($mensagem)
    {
        // tirar formatação
    }
}