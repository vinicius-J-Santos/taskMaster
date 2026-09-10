Como configurar o projeto localmente:

Pré-Requisitos:

- Um ambiente que processe PHP, recomendo: XAMPP ou WAMP
- Um editor de codigos, recomendo VScode
- Um navegador web

Iniciando processos:

1 - Baixe o repositorio ou clone na sua maquina usando o codigo git: https://github.com/vinicius-J-Santos/taskMaster.git

2 - Jogue o projeto na pasta de projetos do seu ambiente, a pasta do XAMPP se chama htdocs e no WAMP se chama www

3 - Inicie seu ambiente e inicie o servidor(apache) e o banco de dados(MySQL ou MariaDB)

4 - Observe no ambiente em qual porta o banco de dados está usando, normalmente 3306, guarde esse valor

5 - No navegador busque pelo endereço http://localhost/phpmyadmin/ e acesse
    5.1 - Caso precise logar recomendo insirir os dados padrões:
    user: root
    senha: (vazia)

6 - Ao entrar no phpMyAdmin vá até o menu lateral esquerdo e clique para criar um novo banco de dados, o nome do banco deve ser "taskmaster"

7 - Ao criar clique sobre o banco e vá até a opção de importar, importe o arquivo tarefas.sql que está dentro da pasta do projeto

8 - Terminando a importação iremos abrir o editor de codigo e ir até o arquivo bd.php e configura-lo:
    8.1 - Insira os dados que você colocou: 
    host: endereço do servidor
    user: usuario do banco de dados
    pass: senha do banco de dados
    dbname: nome do banco de dados
    port: porta que o banco de dados está usando
        padrão:
    host: localhost
    user: root
    pass: (vazia)
    dbname: taskmaster
    port: 3306
    
9 - Caso você tenha configurado tudo corretamente o site Task Master já estará funcionando no endereço: http://localhost/taskmaster

Como usar:

- Ao abrir você estara na pagina padrão Dashboard, clique na opção acima "criar tarefa"
- Monte a tarefa da forma que preferir: 
    nome, 
    descrição, 
    tempo estimado(em horas) 
    data limite
- Por fim clique em criar para finalizar a criação daquela tarefa
- Uma mensagem vai avisar que a ação foi realizada e a tarefa já estará visivel na pagina Dashboard
- três opções estarão disponiveis, feito, editar e deletar:
    - Feito: Risca a tarefa e a manda para tras da tarefas ainda não realizadas
        - Quando uma tarefa é marcada como feita ela ganha o botão Desfazer, que põe ela devolta nas tarefas ainda não concluidadas
    - Editar: Te mostra uma nova tela onde você pode modificar todas as informações da tabela
    - Deletar: Te leva a uma pagina de confirmação para deletar a tarefa, tarefas deletadas não voltam mais
- Não há um limite de tarefas imposto pelo programa, mas é interessante lembra que, caso o banco seja local, todas elas ficam salva no seu computador
