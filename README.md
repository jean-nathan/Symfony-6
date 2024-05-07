## 4. Instalando o Symfony 6 no Linux.

Requisitos: 
- PHP 8
- Git 
- Composer

Execute o comando para instalar o Symfony 6:

wget https://get.symfony.com/cli/installer -O - | bash


Depois da instalação, você executará o comando que aparecerá no terminal para instalar o Symfony globalmente.


------------------------------------------------------------------------------------

## 16. Rotas Coringas - Métodos do Controlador Hello

Neste arquivo, vamos explicar os métodos do controlador `HelloControler` e suas funcionalidades.

## `indexAction()`

Este método é responsável por lidar com a rota raiz `/` do aplicativo.

- **Rota:** `/`
- **Objetivo:** Exibir uma saudação simples para os visitantes.
- **Retorno:** Um objeto `Response` contendo a saudação "Olá amigos".

## `animalAction(string $slug=null)`

Este método é responsável por lidar com a rota `/animal/{slug}` do aplicativo.

- **Rota:** `/animal/{slug}`
- **Objetivo:** Exibir uma saudação personalizada para um animal específico, cujo nome é passado como parâmetro na URL.
- **Parâmetros:**
  - `$slug` (opcional): O nome do animal, passado como parte da URL.
- **Funcionalidade:**
  1. O método substitui hífens por espaços no nome do animal.
  2. Converte o nome do animal para o formato de título (a primeira letra de cada palavra em maiúscula).
- **Retorno:** Um objeto `Response` contendo a saudação personalizada para o animal, utilizando o nome formatado.

## Considerações Finais

Ambos os métodos retornam objetos `Response`, indicando que são responsáveis por gerar respostas HTTP. Isso ajuda na clareza do código e na compreensão da intenção de cada método.
```.
------------------------------------------------------------------------------------
