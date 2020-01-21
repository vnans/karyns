<?php

namespace App\Controller;

use App\Entity\Params;
use App\Form\ParamsType;
use App\Repository\ParamsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/params")
 */
class ParamsController extends AbstractController
{
    /**
     * @Route("/", name="params_index", methods={"GET"})
     */
    public function index(ParamsRepository $paramsRepository): Response
    {
        return $this->render('params/index.html.twig', [
            'params' => $paramsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="params_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $param = new Params();
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($param);
            $entityManager->flush();

            return $this->redirectToRoute('params_index');
        }

        return $this->render('params/new.html.twig', [
            'param' => $param,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="params_show", methods={"GET"})
     */
    public function show(Params $param): Response
    {
        return $this->render('params/show.html.twig', [
            'param' => $param,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="params_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Params $param): Response
    {
        $form = $this->createForm(ParamsType::class, $param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('params_index');
        }

        return $this->render('params/edit.html.twig', [
            'param' => $param,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="params_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Params $param): Response
    {
        if ($this->isCsrfTokenValid('delete'.$param->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($param);
            $entityManager->flush();
        }

        return $this->redirectToRoute('params_index');
    }
}
