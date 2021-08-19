<?php

namespace App\Controller;

use App\Entity\Pays;
use App\Repository\PaysRepository;
use App\Repository\VillesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NicoleController extends AbstractController
{
    /**
     * @Route("/nicole", name="nicole")
     */
    public function index(PaysRepository $repoPays, VillesRepository $repoVilles): Response
    {
        $paysArray = $repoPays->findAll();
        //dd($paysArray);
        $villesArray = $repoVilles->findAll();
        //dd($reposVilles);

        return $this->render('nicole/index.html.twig', [
            'controller_name' => 'NicoleController',
            "pays" => $paysArray,
            "villes" => $villesArray,
        ]);
    }

    /**
     * @Route("/nicole/vols", name="vols")
     */
    public function vols(): Response
    {
        return $this->render('nicole/vols.html.twig', [
        ]);
    }

    /**
     * @Route("/nicole/hotels", name="hotels")
     */
    public function hotels(PaysRepository $repoPays, VillesRepository $repoVilles): Response
    {
        $paysArray = $repoPays->findAll();
        //dd($paysArray);
        $villesArray = $repoVilles->findAll();
        //dd($reposVilles);

        return $this->render('nicole/hotels.html.twig', [
            'controller_name' => 'NicoleController',
            "pays" => $paysArray,
            "villes" => $villesArray,
        ]);
    }


    /**
     * @Route("/nicole/locations", name="locations")
     */
    public function locations(): Response
    {
        return $this->render('nicole/locations.html.twig', [
        ]);
    }


    /**
     * @Route("/nicole/formules", name="formules")
     */
    public function formules(): Response
    {
        return $this->render('nicole/formules.html.twig', [

        ]);
    }

    /**
     * @Route("/nicole/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('nicole/contact.html.twig', [

        ]);
    }

    /**
     * @Route("/nicole/one-hotel", name="hotel")
     */
    public function ohotel(): Response
    {
        return $this->render('nicole/one-hotel.html.twig', [

        ]);
    }
}