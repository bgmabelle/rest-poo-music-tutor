# rest-poo-music-tutor
Implementação de Api com CRUD

# 1	music-tutor
É uma RESTFul API, desenvolvida pelos estudantes Barbara, Breno José e Phillipe, implementada com PHP, utilizada como projeto final para a disciplina de Arquitetura de Software, ministrada pelo Professor  Eder, no curso de Engenharia de Software 2017/2 da Faculdade FUCAPI.

# 2	Documentação

Busca
GET	{id}
/usuario
/musica
/comentarios

Cria um novo registro
POST	
/usuario
/musica
/comentarios

Atualiza todos os campos por ID
PUT	{id}
/usuario
/musica
/comentarios	

# 3	Testando a API com XAMPP ou Webservice de sua preferência

1.	Clone este repositório, adicione em sua pasta htdocs, caso esteja utilizando o Apache (Recomendados que use o XAMPP).
2.	Importe as tabelas do arquivo banco-music-tutor.sql para uma base de dados, recomendados que esteja utilizando o MySQL.
3.	URL inicial: http://localhost:8080/rest-poo-music-tutor

4	Exemplo - GET
Para fazer a requisição use: http://localhost:8080/rest-poo-music-tutor/usuario/1, utilizando o GET.

  {
    "id": "1",
    
    "nome": "Mario da Silva Silva",
    
    "email": "mss@gmail.com",
    
    "status_conta": "true",
    
    "status_moderador": "false"
  }
  
5	Exemplo - POST
Para fazer a requisição use: http://localhost:8080/rest-poo-music-tutor/usuario, utilizando o POST.

  {
    "id": "1",
    
    "nome": "Mario da Silva Silva",
    
    "email": "mss@gmail.com",
    
    "status_conta": "true",
    
    "status_moderador": "false"
    
  }
  
6	Exemplo - PUT
Para fazer a requisição use: localhost:8080/rest-poo-music-tutor/comentarios/1, utilizando o PUT.

  {
    "id": "1",
    
    "descricao": "Muito ruim esta musica"
    
  }
  
 7	Exemplo - DELETE
Para fazer a requisição use: localhost:8080/rest-poo-music-tutor/usuario/2, utilizando o DELETE.

  {
    "id": "2",
    
    "nome": "Maria dos Santos Barbosa",
    
    "email": "msbarbosa@gmail.com",
    
    "status_conta": "true",
    
    "status_moderador": "false"
  }

