<h2>Padrão Service - Repository</h2>

<p>
É um padrão bastante usando para desenvolvimento Web, onde os services podem ser usados pelos Controllers, 
uma vez chamado, ele pode ter regras de negócio, mas para fazer algum tipo de consulta/persistencia no BD é onde 
os Services chamam os Repositores  especificos de cada Entidade/Model.
</p>

<h4>
Definições sobre Service/Repository
</h4>

<hr>

Repository Pattern

Definições:
<ol>
    <li>
        Pode ocorrer persistência no BD
    </li>
    <li>
        Pode ocorrer regras de negócio
    </li>
    <li>
        Devem ser especificos e não/nunca genericos
    </li>
    <li>
        Retornam objetos de dominio, as famosas entidades
    </li>
    <li>
        Não ser responsável por instanciar os models
    </li>
    <li>
        Possuir uma interface bem definida
    </li>
</ol>

<hr>

Service Pattern

Definições:

<ol>
    <li>
        Há sómente regra de negócio
    </li>
    <li>
        Não tem acesso direto ao BD
    </li>
    <li>
        Geralmente chamado é chamado pelo Controller
    </li>
    <li>
        Pode ser chamado também de command, service, handler ou semelhantes.
    </li>
</ol>

<hr>

<p>
É usado o padrão Service-Repository.
</p>

<p>
A logica de negócios é armazenada nos Services.
</p>

<p>
E a logica de bancos de dados em Repositories.
</p>

<p>
Por fim, as entidades ficam em Entities.
</p>
<hr>
<p>
Obs, por regra cada Repository deve ter uma Interface especifica para ele: <br>
UserRepositoryInterface <br>
    assinatura de seus métodos <br>
<br>
UserRepository implements UserRepositoryInterface  <br>
    métodos <br>
</p>

<p>
Mas podemos usar a licença poetica de criar uma classe Abstrata de Base para todos os Repositories filhos,
armazenando no PAI as lógicas mais simples como CRUD.
</p>

<!-- <h4>Veja um exemplo <a href="./exemplo">aqui.</a></h4> -->