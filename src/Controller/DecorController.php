<?php

namespace App\Controller;

use App\Entity\Decor;
use App\Form\DecorType;
use App\Repository\DecorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\UserBundle\Form\Factory\CreateForm;


/**
 * @Route("/decor")
 */
class DecorController extends AbstractController
{
    /**
     * @Route("/", name="decor_index", methods={"GET"})
     */
    public function index(DecorRepository $decorRepository): Response
    {
        return $this->render('decor/index.html.twig', [
            'decors' => $decorRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="decor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $decor = new Decor();
        $form = $this->createForm(DecorType::class, $decor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($decor);
            $entityManager->flush();

            return $this->redirectToRoute('decor_index');
        }

        return $this->render('decor/new.html.twig', [
            'decor' => $decor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="decor_show", methods={"GET"})
     */
    public function show(Decor $decor): Response
    {
        return $this->render('decor/show.html.twig', [
            'decor' => $decor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="decor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Decor $decor): Response
    {
        $form = $this->createForm(DecorType::class, $decor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('decor_index');
        }

        return $this->render('decor/edit.html.twig', [
            'decor' => $decor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="decor_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Decor $decor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$decor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($decor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('decor_index');
    }
}
