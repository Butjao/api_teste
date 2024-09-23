Projeto Laravel API.

#Resumo do projeto:
Este projeto é uma API de consulta de dados. que possui duas rotas. 
a rota "/pesquisa-geral" e a rota "/pesquisa-filtrada" ambas pesquisam na table usuarios do banco de dados. 
esta tabela tem os campos cd_usuario, nm_usuario, email e senha. sendo cd_usuario a primary key. 

a rota "pesquisa-geral" traz todos os dados no banco em formato JSON.
a rota "pesquisa-filtrada" recebe como parametro um cd_usuario e traz apenas os dados do usuario encontrado no formato JSON.

em ambos os casos eh preciso enviar um token, para validação do jwt.