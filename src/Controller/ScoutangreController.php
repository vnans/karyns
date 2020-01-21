<?php

namespace App\Controller;

use App\Entity\Scoutangre;
use App\Form\ScoutangreType;
use App\Repository\ScoutangreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\guessExtension;

/**
 * @Route("/scoutangre")
 */
class ScoutangreController extends AbstractController
{
    /**
     * @Route("/", name="scoutangre_index", methods={"GET"})
     */
    public function index(ScoutangreRepository $scoutangreRepository): Response
    {
        return $this->render('scoutangre/index.html.twig', [
            'scoutangres' => $scoutangreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="scoutangre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $scoutangre = new Scoutangre();
        $form = $this->createForm(ScoutangreType::class, $scoutangre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $file = $scoutangre->getImg();
          $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        // moves the file to the directory where brochures are stored
          $file->move($this->getParameter('images_directory'), $fileName);
          $scoutangre->setImg($fileName);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($scoutangre);
            $entityManager->flush();

            return $this->redirectToRoute('scoutangre_index');
        }

        return $this->render('scoutangre/new.html.twig', [
            'scoutangre' => $scoutangre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="scoutangre_show", methods={"GET"})
     */
    public function show(Scoutangre $scoutangre): Response
    {
        return $this->render('scoutangre/show.html.twig', [
            'scoutangre' => $scoutangre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="scoutangre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Scoutangre $scoutangre): Response
    {
        $form = $this->createForm(ScoutangreType::class, $scoutangre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $file = $scoutangre->getImg();
          $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
          // moves the file to the directory where brochures are stored
          $file->move($this->getParameter('images_directory'), $fileName);
          $scoutangre->setImg($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('scoutangre_index');
        }

        return $this->render('scoutangre/edit.html.twig', [
            'scoutangre' => $scoutangre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="scoutangre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Scoutangre $scoutangre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$scoutangre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($scoutangre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('scoutangre_index');
    }
    /**
       * @return string
       */
      private function generateUniqueFileName()
      {
          // md5() reduces the similarity of the file names generated by
          // uniqid(), which is based on timestamps
          return md5(uniqid());
      }
}
