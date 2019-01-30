<?php

namespace App\Controller;

use App\Entity\BroadBandProviders;
use App\Entity\EnergyProviders;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProvidersController extends AbstractController
{
    /**
     * @Route("/providers", name="providers")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $broadBandProvider = new BroadBandProviders();
        $broadBandProvider1 = new BroadBandProviders();
        $broadBandProvider2 = new BroadBandProviders();
        $broadBandProvider3 = new BroadBandProviders();
        $broadBandProvider4 = new BroadBandProviders();
        $energyProvider = new EnergyProviders();
        $energyProvider1 = new EnergyProviders();
        $energyProvider2 = new EnergyProviders();
        $energyProvider3 = new EnergyProviders();
        $energyProvider4 = new EnergyProviders();
        $energyProvider5 = new EnergyProviders();
        $energyProvider6 = new EnergyProviders();
        $energyProvider7 = new EnergyProviders();
        $energyProvider8 = new EnergyProviders();
        $energyProvider9 = new EnergyProviders();
        $energyProvider10 = new EnergyProviders();
        $energyProvider11 = new EnergyProviders();
        $broadBandProvider->setName('BSNL');
        $broadBandProvider->setProduct('100MB');
        $broadBandProvider->setPrice(30);
        $em->persist($broadBandProvider);
        $em->flush();
        $broadBandProvider1->setName('BSNL');
        $broadBandProvider1->setProduct('200MB');
        $broadBandProvider1->setPrice(40);
        $em->persist($broadBandProvider1);
        $em->flush();
        $broadBandProvider2->setName('BSNL');
        $broadBandProvider2->setProduct('300MB');
        $broadBandProvider2->setPrice(50);
        $em->persist($broadBandProvider2);
        $em->flush();
        $broadBandProvider3->setName('Airtel');
        $broadBandProvider3->setProduct('17MB');
        $broadBandProvider3->setPrice(25);
        $em->persist($broadBandProvider3);
        $em->flush();
        $broadBandProvider4->setName('Airtel');
        $broadBandProvider4->setProduct('72MB');
        $broadBandProvider4->setPrice(40);
        $em->persist($broadBandProvider4);
        $em->flush();
        $energyProvider->setName('Indane energy');
        $energyProvider->setProduct('Standard tariff');
        $energyProvider->setProductVariation('North');
        $energyProvider->setPrice(54.12);
        $em->persist($energyProvider);
        $em->flush();
        $energyProvider1->setName('Indane energy');
        $energyProvider1->setProduct('Standard tariff');
        $energyProvider1->setProductVariation('Mid');
        $energyProvider1->setPrice(56.50);
        $em->persist($energyProvider1);
        $em->flush();
        $energyProvider2->setName('Indane energy');
        $energyProvider2->setProduct('Standard tariff');
        $energyProvider2->setProductVariation('South');
        $energyProvider2->setPrice(61.92);
        $em->persist($energyProvider2);
        $em->flush();
        $energyProvider3->setName('Indane energy');
        $energyProvider3->setProduct('Green tariff');
        $energyProvider3->setProductVariation('North');
        $energyProvider3->setPrice(64.85);
        $em->persist($energyProvider3);
        $em->flush();
        $energyProvider4->setName('Indane energy');
        $energyProvider4->setProduct('Green tariff');
        $energyProvider4->setProductVariation('Mid');
        $energyProvider4->setPrice(68.21);
        $em->persist($energyProvider4);
        $em->flush();
        $energyProvider5->setName('Indane energy');
        $energyProvider5->setProduct('Green tariff');
        $energyProvider5->setProductVariation('South');
        $energyProvider5->setPrice(71.66);
        $em->persist($energyProvider5);
        $em->flush();
        $energyProvider6->setName('Tata Power');
        $energyProvider6->setProduct('Standard tariff');
        $energyProvider6->setProductVariation('North');
        $energyProvider6->setPrice(51.95);
        $em->persist($energyProvider6);
        $em->flush();
        $energyProvider7->setName('Tata Power');
        $energyProvider7->setProduct('Standard tariff');
        $energyProvider7->setProductVariation('Mid');
        $energyProvider7->setPrice(52.00);
        $em->persist($energyProvider7);
        $em->flush();
        $energyProvider8->setName('Tata Power');
        $energyProvider8->setProduct('Standard tariff');
        $energyProvider8->setProductVariation('South');
        $energyProvider8->setPrice(56.62);
        $em->persist($energyProvider8);
        $em->flush();
        $energyProvider9->setName('Tata Power');
        $energyProvider9->setProduct('Saver tariff');
        $energyProvider9->setProductVariation('North');
        $energyProvider9->setPrice(42.57);
        $em->persist($energyProvider9);
        $em->flush();
        $energyProvider10->setName('Tata Power');
        $energyProvider10->setProduct('Saver tariff');
        $energyProvider10->setProductVariation('Mid');
        $energyProvider10->setPrice(45.22);
        $em->persist($energyProvider10);
        $em->flush();
        $energyProvider11->setName('Tata Power');
        $energyProvider11->setProduct('Saver tariff');
        $energyProvider11->setProductVariation('South');
        $energyProvider11->setPrice(47.67);
        $em->persist($energyProvider11);
        $em->flush();

        return $this->render('providers/index.html.twig', [
            'controller_name' => 'ProvidersController',
        ]);
    }
}
