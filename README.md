## Passos para teres o projeto na tua máquina
1. Deves ter instalado o composer e o laragon (ou outro)
1. Abrir o projeto no teu GitHub
2. Usar a Branch com o teu nome (se não fores fazer alterações no código usa a main para visualizares o resultado final)
3. Abrir o projeto num editor de texto

##
4. Executa o comando composer install dentro da pasta

## Passos para teres a Base de Dados
5. Abrir o ficheiro .env.example alterares o nome, passe e todas as informações sobre a base de dados. Depois guarda este ficheiro como .env
6. De seguida deves executar o comando php artisan key:generate no terminal do projeto
5. No terminal executa os comandos:
php artisan migrate:fresh
php artisan db:seed
7. Para que tudo funcione deves executar o comando npm run dev

