<p align="center">
<img src="https://avatars.githubusercontent.com/u/135225845?s=200&v=4" width="150" alt="Rech Digital Logo">
</p>

# <p align="center">Website</p>

## Clonar repositório

Clone o repositório usando SSH para a sua maquina local utilizando o comando abaixo:
```shell
git clone git@github.com:RechDigital/website.git
```
## Instalar dependências

Será necessário possuir o composer instalado, pois o projeto utiliza o Sail,
o mesmo será instalado juntamente com a pasta vendor.

Caso não possua acesse a documentação do [Composer](https://getcomposer.org/doc/00-intro.md)

Com o composer instalado execute o comando:

```shell
composer install
```

_Nota:_ `Utilize o composer local apenas para a primeira instalação, após,
utilize o cs comandos do sail para executar comandos internos no container.`

## Configurar banco de dados

Agora, duplique o arquivo `.env.example` e renomei para `.env`

Abra o mesmo e edite as variáveis relacionadas ao banco e dados:

```dotenv
DB_DATABASE=boiler_db
DB_PASSWORD=password
```

_Nota:_ `Você pode definir qualquer nome para o banco de dados e senha.`

_Nota:_ `Não altere o nome de usuário do banco de dados, pois o Sail utiliza por padrão o nome sail`

O docker utilizará esses valores para a construção do banco de dados mysql que já está embutido na imagem.

Você pode acessa-lo utilizando o nome de host `localhost` na porta padrão `3306`.

## Construir container
Para a construção do container, certifique-se de ter instalado o `docker` e `docker compose` em sua máquina.

Caso ainda não tenha efetuado a instalação utilize os links abaixo para a documentação:

1. `Docker:` [Instalação do Docker](https://docs.docker.com/get-docker/)
2. `Docker Compose:` [Instalação do Docker Compose](https://docs.docker.com/compose/install/)

Com o docker e docker compose instalado, na raiz do projeto execute o comando:
```shell
./vendor/bin/sail up
```
**Dica:** _Para evitar a digitação do caminho de isntalação do sail você pode 
adicionar o alias abaixo em seu arquivo `.bashrc` se estiver utilizando o linux_
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

## Gerar chave da aplicação Laravel

Com o container executando, abra um novo terminal e execute o seguinte comando:
```shell
./vendor/bin/sail artisan key:generate
```

## Execução das Migrations
Para a construção do banco de dados execute:
```shell
./vendor/bin/sail artisan migrate
```

## Execução das Seeders
Para popular o banco de dados execute:
```shell
./vendor/bin/sail artisan db:seed
```
Será então criado usuários ficticios para o acesso ao CMS.

```
Usuário admin: admin@admin.com
Usuário guest: guest@guest.com
Ambos utilizam a senha: 123
```
## Instalar dependencias Node
Execute o comando:
```shell
./vendor/bin/sail npm install
```

## Executando front-end
Para que o front-end fique disponível é necessário executar o watch.

Execute o seguinte comando:
```shell
./vendor/bin/sail npm run dev
```

Com essas configurações você deve ter seu container rodando e seu projeto funcionando

## Convenção de commits.

- `Sempre utilize ponto final em seus commits.`

- `feat` Commits que adicionam uma nova funcionalidade.
- `fix` Commits que corrigem um bug.

- `refactor` Commits que reescrevem/reestruturam seu código, porém não alteram nenhum comportamento.

    1. `perf` Commits são commits especiais do tipo 'refactor' que melhoram o desempenho.

- `style` Commits que não afetam o significado (espaços em branco, formatação, ponto e vírgula ausente, etc).
- `test` Commits que adicionam testes ausentes ou corrigem testes existentes.
- `docs` Commits que afetam apenas a documentação.
- `build` Commits que afetam componentes de construção, como ferramentas de construção, pipelines de CI, dependências, versão do projeto, etc...
- `ops` Commits que afetam componentes operacionais, como infraestrutura, implantação, backup, recuperação, etc...
- `chore` Commits diversos, como modificar o arquivo `.gitignore`
