# SERVICE-REPOSITORY PATTERN

## Este diretório a definição de Service e Repository, suas responsablidades e funcionalidades.

## Existe um exemplo simples em PHP dos padrões, sem implementação só abstração.

Padrão Service-Repository: 
Permite realizar o isolamento entre a camada de acesso ao dado de
sua aplicação e sua camada de apresentação, além da camada de negócios. Ele fornece uma maneira simples para encapsular o código de acesso de
dados em seu aplicativo permitindo também que o código seja mais facilmente testável e
que os módulos de código sejam mais facilmente reutilizáveis; além disso ele favorece a
separação de interesses entre a lógica de acesso a dados e lógica de domínio do aplicativo.
Ele praticamente nos trás organização, reaproveitamento, facilidade de uso e manutenção.

#### controller
Responsável por intermediar as requisições enviadas pela interface,
processando os dados que o usuário informou e repassando para outras camadas.

#### service
É a regra de negócio.

#### entidade
É responsável pelo acesso direto ao Banco de Dados.

### OBS: Caso deseje enviar alguma sugestão/correção de: (Gramática, Definição, Novos Exemplos) 
### Sinta-se livre para mandar um PR.

**Fontes**

[Mauricio Rodrigues](https://medium.com/laraveltips/voc%C3%AA-entende-repository-pattern-voc%C3%AA-est%C3%A1-certo-disso-d739ecaf544e)

[Felipe Lucio](https://felipelucioquirino.wordpress.com/2012/07/17/padrao-de-projeto-repository/)

###### A motivação de criar todos esses padrões de projeto foram com a intenção de estudo próprio e crescimento como profissional/desenvolvedor, qualquer má definição ou exemplo, esteja livre para compartilhar seu conhecimento com a comunidade.
