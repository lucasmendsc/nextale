![Logo Nextale](https://github.com/nextalebr/desafio-backend/blob/master/nextale.jpeg "Nextale")

# Desafio Back-End - Nextale

Esse desafio é parte da fase de seleção de desenvolvedor backend.
Sua avaliação será dada pelas fases que conseguir entregar e a forma com que foram desenvolvidas.

## Pré-requisitos

- Lógica de programação;
- Conhecimentos sobre Banco de dados;
- Conhecimentos sobre HTTP, API e REST ;
- Conhecimentos sobre Git;

## Requisitos do desafio

- Utilizar PHP(7.4)
- Utilizar Laravel(8) ou Lumen
- Adicionar no README instruções de como executar o projeto.
- A API deve receber e retornar dados no formato JSON.

## Diferenciais

- Código limpo
- Código em Inglês

## Contexto

Você recebeu uma demanda para desenvolver um backend para controle interno dos nossos conteúdos, precisamos ter conteúdo em texto e também precisará ser adicionado mídias nesse conteúdo.

### Fase 1 - Contos

Nesta fase serão implementados os contos do aplicativo e seus endpoints:

- Criar um endpoint onde é cadastrado um conto.
  - Esses contos devem ter obrigátoriamente os seguintes dados:
    - **title** | string
    - **body** | text
    - **is_enabled** | boolean
    - **created_at** | datetime
    - **updated_at** | datetime
- Criar um endpoint para listagem desses contos, ordernados por ordem de cadastro decrescente (mais novo para mais antigo);
- Criar um endpoint para listar um único conto através do seu id;
- Criar um endpoint para editar um único conto através do seu id;
- Criar um endpoint para excluir um conto através do seu id.

### Fase 2 - Midias

Nesta fase serão implementados as midias dos contos, um conto contém várias midias:

- Criar um endpoint onde será possível realizar um upload de um vídeo, música ou imagem com tamanho máximo de 5MB
- Criar um endpoint onde ao passar o id do conto retorne a url das mídias vinculadas
- Criar um endpoint onde seja possível excluir uma mídia relacionada a um usuário.

## Ao Concluir

- Após isso envie um e-mail para 'contato@nextale.com.br', com o assunto 'DESAFIO BACK-END' com link do seu repositório ou faça um pull request do projeto e currículo em anexo.
