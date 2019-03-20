# Help Desk

## Configuração

- abrir o diretório e executar o comando no CMD: 

    composer install

- Inicializar o banco de dados
     ./vendor/bin/doctrine orm:schema-tool:update --force

- apos finalizar a instalação de todos componentes, abrir no CMD no diretório e executar (vai iniciar o servidor):

    php -S 0.0.0.0:8080 -t public/ public/index.php
    
- abrir no browser: http://127.0.0.1:8080/
