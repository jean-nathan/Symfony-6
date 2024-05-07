<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloControler
{
    #[Route('/')]
    public function indexAction(): Response
    {
        return new Response('Olá amigos');
    }

    #[Route('/animal/{slug}')] // Rota coringa, passa qualquer nome de animal.

    // Função tipada como response ( função é responsável por gerar uma resposta HTTP. Isso torna o código mais claro e ajuda outros desenvolvedores a entenderem a intenção da função)
    // parametro tipado como string
    // Se não tiver parametro, valor null default
    public function animalAction(string $slug=null): Response 
    {

        $newSlug = str_replace('-', ' ', $slug);  // Substitui algum valor passado na variavel slug por espaço
        $newSlug = u($newSlug)->title(true); // Converte o valor da variavel em titulo, ou seja, primeira letra será maiúscula
        return new Response('Olá! ' .$newSlug);
    }
}