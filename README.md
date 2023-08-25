# Sobre o projeto
esse projeto em MVC usado para desenvolver sites com conteúdo dinâmico similar ao laravel com um banco local.
usando recursos docker, desenvolvido pensando em linux

# Tecnologias utilizadas
## Back end
- PHP
- Docker
- Docker-compose
## Front end
- HTML / CSS / JS

## Back end
Pré-requisitos: docker, docker-compose, git e composer.

# Como executar o projeto
edite o arquivo .env

na pasta do projeto usa os comandos linux
```bash
# comando para iniciar o projeto e visualizar o que acontece
# usando o docker elimina a necessidade de baixar outros programas
docker-compose up -d --build

# para parar o projeto
docker-compose up down

# depois que o docker gera o mysql precisa de permisão para alterar
sudo chmod 777 -R mysql/

```
para começar sem erro, cria um banco simples
tabela quest_enem
coluna
    disciplina                  varchar 200
    tema                        varchar 200
    opcoes_de_resposta_a        tynetext
    opcoes_de_resposta_b        tynetext
    opcoes_de_resposta_c        tynetext
    opcoes_de_resposta_d        tynetext


```bash
# se tá fazendo passo a passo da descrição usa esse comando
docker-compose up -d --build
```
depois olha o arquivo docker-compose.yml
coloca as portras depois de localhost:

exemplo:
localhost:8000



# Autor

João Augusto da Silva Lopes

https://www.linkedin.com/in/augusto-lopes-1418b717a