<h1>DAO (DATA ACCESS OBJECT)</h1>

<p>É um padrão para aplicações que utilizam persistencia em banco de dados. Onde regras de negocio ficam separadas das regras de acesso ao BD.</p>
<p>Implementada em linguagens O.O. e também usado em padrões MVC, onde todas as funcionalidades referentes a um banco de dado está em uma classe DAO.</p>

<h4>Vantagens</h4>
<p>Pode ser usado em vários tipos de aplicações.</p>
<p>Encapsulamento de toda a lógica.</p>
<p>Atua entre intermediário entre APP <-> BD.</p>

<h4>Responsabilidades</h4>
<p>Ser responsável só por acesso ao banco.</p>
<p>Fornecer operações de CRUD e de pesquisas.</p>

<h5>Nota:</h5>
<p>Deve existir uma classe DAO para cada TABELA do seu BANCO DE DADOS.</p>
