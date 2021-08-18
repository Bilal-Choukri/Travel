<?php

namespace App\Controller;

use App\Entity\Vol;
use App\Entity\Ville;
use App\Form\VolType;
use App\Form\VILLEType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SarahController extends AbstractController
{
    /**
     * @Route("/vol", name="vol")
     */
    public function vol(Request $request, EntityManagerInterface $manager)
    {

        $vol = new Vol();

        $form = $this->createForm(VolType::class, $vol);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()):
              //dd($vol);
            
            $manager->persist($vol);
            $manager->flush();
            $this->addFlash('success', "Le vol N° a bien été ajouté");

            return $this->redirectToRoute('vols');
        endif;


        return $this->render('sarah/vol.html.twig', [
            'volForm' => $form->createView()
        ]);
    }
    /**
     * @Route("/update_vol_{id<\d+>}", name="update_vol")
     */
    public function modifVol($id, Request $request, EntityManagerInterface $manager){

        $vol = $this->getDoctrine()->getRepository(Vol::class)->find($id);
        
        $form = $this->createForm(VolType::class,$vol);
        $form->handleRequest($request);//transmettre la requette au formulaire, acces au POST

        if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($vol);
            $manager->flush();
            return $this->redirectToRoute('vol');
        }
        return $this->render('vol.html.twig',[
            'volForm' =>$form->createView()]);
    }

    /**
     * @Route("/delete_vol_{id<\d+>}", name="delete_vol")
     */

    public function suppVol($id, EntityManagerInterface $manager){

        $vol = $this->getDoctrine()->getRepository(Vol::class)->find($id);
        $manager->remove($vol);
        $manager->flush();
        return $this->redirectToRoute('vols');
    }
/**
     * @Route("/ville", name="ville")
     */
    public function ville(Request $request, EntityManagerInterface $manager)
    {

        $ville = new Ville();

        $form = $this->createForm(VILLEType::class, $ville);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()):

            
            $manager->persist($ville);
            $manager->flush();
            $this->addFlash('success', "la ville  a bien été ajouté");

            return $this->redirectToRoute('ville');
        endif;


        return $this->render('sarah/ville.html.twig', [
            'villeForm' => $form->createView()
        ]);
    }
     /**
     * @Route("/vols", name="vols")
     */
    public function allVols(): Response
    {
        $vols = $this->getDoctrine()->getRepository(Vol::class)->findAll();
        //dd($vols);
        return $this->render('sarah/allVols.html.twig',[
            "vols" => $vols
        ]);
    }

}
