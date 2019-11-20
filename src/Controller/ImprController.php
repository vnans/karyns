<?php

namespace App\Controller;

use App\Entity\Impr;
use App\Form\ImprType;
use App\Repository\ImprRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/impr")
 */
class ImprController extends AbstractController
{
    /**
     * @Route("/", name="impr_index", methods={"GET"})
     */
    public function index(ImprRepository $imprRepository): Response
    {
        return $this->render('impr/index.html.twig', [
            'imprs' => $imprRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="impr_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $impr = new Impr();
        $form = $this->createForm(ImprType::class, $impr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($impr);
            $entityManager->flush();

            return $this->redirectToRoute('impr_index');
        }

        return $this->render('impr/new.html.twig', [
            'impr' => $impr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="impr_show", methods={"GET"})
     */
    public function show(Impr $impr): Response
    {
        return $this->render('impr/show.html.twig', [
            'impr' => $impr,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="impr_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Impr $impr): Response
    {
        $form = $this->createForm(ImprType::class, $impr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('impr_index');
        }

        return $this->render('impr/edit.html.twig', [
            'impr' => $impr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="impr_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Impr $impr): Response
    {
        if ($this->isCsrfTokenValid('delete'.$impr->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($impr);
            $entityManager->flush();
        }

        return $this->redirectToRoute('impr_index');
    }
}
