# Symfony 6 - Guia de Instalação e Utilização

## 4. Instalando o Symfony 6 no Linux

### Requisitos
- PHP 8
- Git
- Composer

Execute o seguinte comando para instalar o Symfony 6:

```bash
wget https://get.symfony.com/cli/installer -O - | bash
```

Após a instalação, execute o comando que aparecerá no terminal para instalar o Symfony globalmente.

## 16. Métodos do Controlador Hello

Neste arquivo, vamos explicar os métodos do controlador `HelloController` e suas funcionalidades.

### `indexAction()`

Este método é responsável por lidar com a rota raiz `/` do aplicativo.

- **Rota:** `/`
- **Objetivo:** Exibir uma saudação simples para os visitantes.
- **Retorno:** Um objeto `Response` contendo a saudação "Olá amigos".

### `animalAction(string $slug=null)`

Este método é responsável por lidar com a rota `/animal/{slug}` do aplicativo.

- **Rota:** `/animal/{slug}`
- **Objetivo:** Exibir uma saudação personalizada para um animal específico, cujo nome é passado como parâmetro na URL.
- **Parâmetros:**
  - `$slug` (opcional): O nome do animal, passado como parte da URL.
- **Funcionalidade:**
  1. O método substitui hífens por espaços no nome do animal.
  2. Converte o nome do animal para o formato de título (a primeira letra de cada palavra em maiúscula).
- **Retorno:** Um objeto `Response` contendo a saudação personalizada para o animal, utilizando o nome formatado.

## 18. Recipes

As *recipes* são um conjunto de instruções pré-definidas que automatizam a instalação e configuração de bibliotecas/pacotes em projetos Symfony.

Para listar os *recipes* instalados em um projeto, utilize o comando:

```bash
composer recipes
```

Por exemplo, para ver os detalhes de um *recipe* específico, como `twig/extra-bundle`, execute:

```bash
composer recipes twig/extra-bundle
```

## 9. Twig

Twig é um sistema de template que permite a separação da lógica da aplicação da apresentação visual.

Na controller, use a função `render()` para renderizar templates Twig. Exemplo:

```php
return $this->render('hello/homepage.html.twig', [
    'title' => 'Symfony 6', 
    'array' => $array,
]);
```

A sintaxe do Twig é baseada em construções como `{{ ... }}`, `{% ... %}`, e `{# ... #}`.

Documentação Twig para consulta: [Documentação Twig 3.x](https://twig.symfony.com/doc/3.x/)

## 20. Herança de Templates Twig

Para estender um arquivo principal e renderizar todo o HTML, utilize `{% extends 'base.html.twig' %}`. É importante definir o bloco onde o código ficará dentro. Por exemplo:

```twig
{% extends 'base.html.twig' %}
{% block body %}
Código da página...
{% endblock %}
```

Além disso, é possível incluir um CSS adicional na página estendida. Para isso, utilize o método `parent()` dentro do bloco, como exemplificado abaixo:

```twig
{% block stylesheets %}
Css novo
{{ parent() }} // Css da outra página estendida
{% endblock %}
```

## 21. CSS

Utilize o Bootstrap 5 para estilização de aplicações Symfony. Adicione o CDN do Bootstrap no arquivo base e inclua o JS no final do corpo do arquivo.

Exemplo de link para o Bootstrap 5:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
```

Exemplo de inclusão do JS do Bootstrap 5:

```html
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
```

## Conclusão

Este arquivo README.md fornece instruções sobre a instalação do Symfony 6, explicação dos métodos do controlador Hello, utilização de *recipes*, Twig, herança de templates Twig e integração do Bootstrap 5 em aplicações Symfony.
```
