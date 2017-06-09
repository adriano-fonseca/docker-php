# Construindo a imagem

$ docker build -t sistema-php7:0.0.1 .

# Rodando sistema na forma de container

$ docker container run -d --name sistema -p 80:80 sistema-php7:0.0.1

# Executando bash para debbug dentro do container

$  docker container exec -it sistema-php7:0.0.1 sh
