<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", name="register")
     */
    public function index(): Response
    {

        // Instanciation de l'entité (model) User
        $user = new User();
        // Instanciation du formulaire de type "Register"
        // Creation du formulaire
        $form = $this->createForm(RegisterType::class, $user);

        return $this->render('register/index.html.twig', [
            // Creation de la vue du Formulaire
            'form' => $form->createView()
        ]);
    }
}
