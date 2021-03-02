<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeathController extends AbstractController
{

    public function __construct()
    {
    }

    #[Route('/', name: 'heath')]
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();
//        $product = new Product();
//
//        $product->setName('test')
//            ->setDescription('some description');
//
//        $this->getDoctrine()->getManager()->persist($product);
//        $this->getDoctrine()->getManager()->flush($product);
//
//        $products = $em->getRepository(Product::class)->find('78ba7b6d-a5ab-4f64-8567-3741b8c4b060');
//
//        dd($products);


        return $this->render('heath/index.html.twig', [
            'controller_name' => 'HeathController',
        ]);
    }
}
