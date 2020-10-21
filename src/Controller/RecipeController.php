<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipe", name="list")
     */
    public function index()
    {
        return $this->render('recipe/index.html.twig', [
            'controller_name' => 'RecipeController',
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function add()
    {
        return $this->render('recipe/add.html.twig', [
            'controller_name' => 'RecipeController',
        ]);
    }

    /**
     * @Route("/show/{slug}", name="show")
     */
    public function show($slug)
    {
        return new Response('<div>Afficher la recette ' . $slug . '</div>');
    }

    /**
     * @Route("/edit/{slug}", name="edit")
     */
    public function edit($slug)
    {
        return new Response('<div>Modifier la recette ' . $slug . '</div>');
    }

    /**
     * @Route("/remove/{slug}", name="remove")
     */
    public function remove($slug)
    {
        return new Response('<div>Supprimer la recette ' . $slug . '</div>');
    }
}
