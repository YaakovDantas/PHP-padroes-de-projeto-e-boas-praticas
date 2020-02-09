<h1>M-V-C</h1>
<h2>Model - View - Controller</h2>

<p>
Definição:
</p>
<p>
É um padrão de arquitetura para desenvolvimento de software, pode ser usado para projetos web, desktop, terminal
</p>
<p>
Sua função é separar as lógicas em Camadas diferentes, sendo elas o modelo, a visualização e o controle.
</p>
<p>
É focado em reuso de código e separação de conceitos.
</p>

<h3>Onde:</h3>

<hr>
<h4>Model</h4>
<p>
    Responsável por manipular os dados(BD, TEXTO, XML), responsável pela leitura/escrita desses dados.
</p>

<hr>
<h4>View</h4>
<p>
    É onde o usuário será capaz de ver/enviar os dados, seja uma interface HTML ou um terminal
</p>

<hr>
<h4>Controller</h4>
<p>
    O responsável por receber todas as requisições do cliente, cada action(método) é responsável por uma página. Controllando qual model será usado para tal função pedida e qual view irá mostrar o resultado.
</p>
