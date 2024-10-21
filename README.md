## Passos para teres o projeto na tua máquina
1. Deves ter instalado o git, github, php, composer e o laragon (ou outro)
2. Abrir o projeto no teu GitHub
3. Usar a Branch com o teu nome (se não fores fazer alterações no código usa a main para visualizares o resultado final)
4. Abrir o projeto num editor de texto

<!-- ##
5. Executa o comando composer install ou composer update dentro da pasta -->

## Passos para teres a Base de Dados
5. Executa o comando composer install ou composer update dentro da pasta
6. Abrir o ficheiro .env.example alterares o nome, passe e todas as informações sobre a base de dados. Depois guarda este ficheiro como .env
7. De seguida deves executar o comando php artisan key:generate no terminal do projeto
8. No terminal executa os comandos:
php artisan migrate:fresh
php artisan db:seed
9. Para que tudo funcione deves executar o comando npm run dev

