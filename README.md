# DESCRIÇÃO
"Docker utilizando o compose, para hospedar uma aplicação web quer receberá nome, e-mail e comentários. Esta aplicação será disponibilizada para uma grande quantidade de clientes, sendo necessário garantir que o ambiente seja escalável e altamente disponível".
#PASSOS PARA INICIAR O PROJETO:
1. Efetuar o Download do Projeto através do GIT
    Escolha um diretorio onde o Projeto sera copiado, após acessar o diretorio executar o seguinte na linha de comando:
\#git clone https://github.com/mbotacin/docker.git
2. Acessar o diretorio docker que acabou de ser criado ao executar o comando acima.
3 Dar permissao 777 no diretorio grafana/src/data
Acessar o diretorio grafana/src, apos digitar o comando:
 \#chmod 777 data
4. Verificar se possui o docker-compose instalado:
\#docker-compose --version
Caso nao possua o docker-compose instalado, executar os passos:
\#curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
Em seguida dar permissão de execução no diretorio docker-compose
\#chmod +x /usr/local/bin/docker-compose
Criar o link com o comando:
\#ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
em seguida verificar novamente
\#docker-compose --version
5. Executar:
\#docker-compose up
6.Apos efetuar todos os downloads das imagens, poderao ser acessados os serviços através dos endereços:
###Aplicação de Comentarios
http://localhost 
###Graylog
http://localhost:9000
user:admin
pass:admin
###Grafana
http://localhost:3000
user:admin
pass:foobar
###Prometheus
http://localhost:9090
###cAdvisor
http://localhost:8080
# CONTAINERS :

## APACHE
1. Exposição de portas
          80 
## DB - MySQL
1. Exposição de porta 
          3306
2. Banco de Dados
          comentarios
## Mongo

## Elasticsearch

## Graylog

## Prometheus

## Node-exporter

## Cadvisor-exporter

## Alertmanager

## Grafana

#Containers que ainda serão inclusos no projeto:
## Nginx
## Apache2
## Apache3