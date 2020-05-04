<h1>DESCRIÇÃO</h1>

"Docker utilizando o compose, para hospedar uma aplicação web quer receberá nome, e-mail e comentários. Esta aplicação será disponibilizada para uma grande quantidade de clientes, sendo necessário garantir que o ambiente seja escalável e altamente disponível".

<h2>#PROJETO FINAL</h2>
Ao final deste projeto, o front-end contará com um servidor Nginx como proxy reverso e também 3 servidores apache para alta disponibilidade.

<h2>#PASSOS PARA INICIAR O PROJETO:</h2>
<li>Efetuar o Download do Projeto através do GIT<br>
    Escolha um diretorio onde o Projeto sera copiado, após acessar o diretorio executar o seguinte na linha de comando:<br>
    #git clone https://github.com/mbotacin/docker.git<br>
<li>Acessar o diretorio docker que acabou de ser criado ao executar o comando acima.<br>
    cd docker/
<li>Dar permissao 777 no diretorio grafana/src/data<br>
    Acessar o diretorio grafana/src, apos digitar o comando:<br>
    #chmod 777 data<br>
<li>Verificar se possui o docker-compose instalado:<br>
    #docker-compose --version<br>
    Caso nao possua o docker-compose instalado, executar os passos:<br>
    #curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose<br>
    Em seguida dar permissão de execução no diretorio docker-compose<br>
    #chmod +x /usr/local/bin/docker-compose<br>
    Criar o link com o comando:<br>
    #ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose<br>
    em seguida verificar novamente<br>
    #docker-compose --version<br>
<li>Executar:<br>
    #docker-compose up<br>
<li>Apos efetuar todos os downloads das imagens, poderao ser acessados os serviços através dos endereços:<br>
    ##Aplicação de Comentarios<br>
    http://localhost<br>
    ##Graylog<br>
    http://localhost:9000<br>
    user:admin<br>
    pass:admin<br>
    ##Grafana<br>
    http://localhost:3000<br>
    user:admin<br>
    pass:foobar<br>
    ##Prometheus<br>
    http://localhost:9090<br>
    ##cAdvisor<br>
    http://localhost:8080<br>

<h2>CONTAINERS:</h2>
<h3>APACHE</h3>
    Exposição de portas<br>
    80

<h3>DB - MySQL</h3>
    Exposição de porta<br>
    3306<br>
    Banco de Dados<br>
    comentarios

<h3>Mongo</h3>
<h3>Elasticsearch</h3>
<h3>Graylog</h3>
	Exposição de portas<br>
	Web 9000<br>
	Syslog UDP/TCP 1514<br>
	Gelf UDP/TCP 12201
<h3>Prometheus</h2>
	Exposição de porta<br>
    	9090

<h3>Node-exporter</h3>
	Exposição de porta<br>
	9100
<h3>Cadvisor-exporter</h3>
	Exposição de porta<br>
	8080
<h3>Alertmanager</h3>
<h3>Grafana</h3>
	Exposição de porta<br>
    	3000
	
<h2>Containers que ainda serão inclusos no projeto:</h2>

<h3>Nginx</h3>
<h3>Apache2</h3>
<h3>Apache3</h3>
