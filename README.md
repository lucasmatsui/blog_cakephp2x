## Blog - Cakephp. 2x
- Iniciando o aprendizado em cakephp 2.x
- Com autentificação de usuário.
- Sistema de logs (Usando events(Observer Pattern)).
- Twig(.tpl) implementado.
- Utilizando Docker.
- Permissoẽs de acesso.

## Como utilizar
- De permissão para sua pasta tmp: <b>$ chown -R www-data app/tmp</b>
- Tenha instalado o composer e rode em seu terminal: <b>composer install</b>
- Apenas tenha o <b>docker</b> e o <b>docker-compose</b> instalados na sua maquina e rode o comando :
```
docker-compose up -d
```
Depois acesse <b>localhost:8000</b> para entrar na aplicação e para acessar o phpmyadmin acesse <b>localhost:3000</b> com :
```
 user: root
 senha: root_password
```
E por último importe o banco de dados de <b><i>Database/blog.sql</i><b>

## Preview

![listblog](https://user-images.githubusercontent.com/31348487/67706086-de35f700-f996-11e9-825e-b193d7939d69.png)
![loginblog](https://user-images.githubusercontent.com/31348487/67706126-f0b03080-f996-11e9-94b3-cae55d8e8370.png)
