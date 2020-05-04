<h1>DESCRIÇÃO</h1>

"Docker utilizando o compose, para hospedar uma aplicação web quer receberá nome, e-mail e comentários. Esta aplicação será disponibilizada para uma grande quantidade de clientes, sendo necessário garantir que o ambiente seja escalável e altamente disponível".

<h2>#PROJETO FINAL</h2>
Ao final deste projeto, o front-end contará com um servidor Nginx como proxy reverso e também 3 servidores apache para alta disponibilidade.

<h2>#PASSOS PARA INICIAR O PROJETO:</h2>
<li>Efetuar o Download do Projeto através do GIT
    Escolha um diretorio onde o Projeto sera copiado, após acessar o diretorio executar o seguinte na linha de comando:
    #git clone https://github.com/mbotacin/docker.git
<li>Acessar o diretorio docker que acabou de ser criado ao executar o comando acima.
<li>Dar permissao 777 no diretorio grafana/src/data
    Acessar o diretorio grafana/src, apos digitar o comando:
    #chmod 777 data
<li>Verificar se possui o docker-compose instalado:
    #docker-compose --version
    Caso nao possua o docker-compose instalado, executar os passos:
    #curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
    Em seguida dar permissão de execução no diretorio docker-compose
    #chmod +x /usr/local/bin/docker-compose
    Criar o link com o comando:
    #ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
    em seguida verificar novamente
    #docker-compose --version
<li>Executar:
    #docker-compose up
<li>Apos efetuar todos os downloads das imagens, poderao ser acessados os serviços através dos endereços:
    ##Aplicação de Comentarios
    http://localhost
    ##Graylog
    http://localhost:9000
    user:admin
    pass:admin
    ##Grafana
    http://localhost:3000
    user:admin
    pass:foobar
    ##Prometheus
    http://localhost:9090
    ##cAdvisor
    http://localhost:8080

<h2>CONTAINERS:</h2>
<h3>APACHE</h3>
    Exposição de portas
    80

<h3>DB - MySQL</h3>
    Exposição de porta
    3306
    Banco de Dados
    comentarios

<h3>Mongo</h3>
<h3>Elasticsearch</h3>
<h3>Graylog</h3>
	Exposição de portas
	Web 9000
	Syslog UDP/TCP 1514
	Gelf UDP/TCP 12201
<h3>Prometheus</h2>
	Exposição de porta
    	9090

<h3>Node-exporter</h3>
	Exposição de porta
	9100
<h3>Cadvisor-exporter</h3>
	Exposição de porta
	8080
<h3>Alertmanager</h3>
<h3>Grafana</h3>
	Exposição de porta
    	3000
	
<h2>Containers que ainda serão inclusos no projeto:</h2>

<h3>Nginx</h3>
<h3>Apache2</h3>
<h3>Apache3</h3>
