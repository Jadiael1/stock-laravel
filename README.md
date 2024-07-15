# Stock Laravel

Este é um projeto desenvolvido com o framework Laravel para fins de estudo.

## Conceitos Utilizados
- **Sistema de autenticação sem uso de starter kits**: Implementado seguindo conceitos da documentação.
- **Verificação de email**: Implementado sistema de verificação de email ao usuário se registrar.
- **Reset de senha**: Implementado sistema de reset de senha.
- **Validações do Laravel**: Aplicadas validações nos formulários, com textos amigáveis em pt-BR.
- **Queues e Jobs**: Aplicado sistema de queue e jobs nos disparos de emails.
- **Views com Bootstrap 5.1.0**: Construção de views responsivas utilizando Bootstrap.
- **Autenticação JWT**: Utilização de JSON Web Tokens para autenticação de usuários na API.
- **Controle de Acesso**: Implementação de roles e permissions para controle granular de acesso.
- **Upload de Arquivos**: Funcionalidade de upload de arquivos utilizando o sistema de arquivos do Laravel.
- **Notificações**: Envio de notificações por email e via sistema utilizando o Laravel Notifications.
- **Serviçõ de Cache**: Utilização de diversos drivers de cache suportados pelo Laravel.
- **Serviçõ de Logging**: Configuração e utilização de diferentes canais de log.
- **Testes Automatizados**: Testes unitários e de features utilizando PHPUnit.

## Como Instalar

1. Clone o repositório:
    ```bash
    git clone https://github.com/Jadiael1/stock-laravel.git
    ```

2. Instale as dependências:
    ```bash
    composer install
    npm install
    ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

4. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

5. Execute as migrações do banco de dados:
    ```bash
    php artisan migrate:fresh
    ```

6. Crie o link simbólico para o diretório de armazenamento:
    ```bash
    rm -rf public/storage
    ln -s storage/app/public public/storage
    ```

## Contato

Para mais informações, entre em contato: Jadiael@hotmail.com.br

## URL de Produção

Acesse a aplicação em produção: [https://stocklaravel.juvhost.com](https://stocklaravel.juvhost.com)

## License

O framework Laravel é um software de código aberto licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).
