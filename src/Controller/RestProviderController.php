<?php

namespace App\Controller;

use App\Entity\BroadBandProviders;
use App\Entity\EnergyProviders;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RestProviderController
 * @package App\Controller
 * @Rest\RouteResource("", pluralize=false)
 */
class RestProviderController extends AbstractFOSRestController
{
    /**
     * @Rest\Get(path="/api/getBroadBand/{providerName}/{product}", requirements={"providerName" = "^[a-zA-Z0-9_ ]*$", "product"= "^[a-zA-Z0-9_ ]*$"})
     * @param string $providerName
     * @param string $product
     * @return JsonResponse
     */
    public function getBroadBandAction(string $providerName, string $product): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();
        /**
         * @var $broadBand BroadBandProviders|null
         */
        $broadBand = $em->getRepository(BroadBandProviders::class)->findOneBy(
            [
                'name' => $providerName,
                'product' => $product
            ]
        );
        if ($broadBand != null) {
            return new JsonResponse(['Monthly price' => $broadBand->getPrice()]);
        }
        return new JsonResponse([
            'error' => 'provider with name ' . $providerName .' and product ' . $product . ' could not be found!'
        ]);

    }

    /**
     * @Rest\Get(path="/api/getEnergy/{providerName}/{product}/{productVariation}",
     *      requirements={"providerName" = "^[a-zA-Z0-9_ ]*$", "product" = "^[a-zA-Z0-9_ ]*$", "productVariation" = "^[a-zA-Z0-9_ ]*$"})
     * @param string $providerName
     * @param string $product
     * @param string $productVariation
     * @return JsonResponse
     */
    public function getEnergyAction(string $providerName, string $product, string $productVariation): JsonResponse
    {
        $em = $this->getDoctrine()->getManager();
        /**
         * @var $energy EnergyProviders|null
         */
        $energy = $em->getRepository(EnergyProviders::class)->findOneBy(
            [
                'name' => $providerName,
                'product' => $product,
                'productVariation' => $productVariation
            ]
        );
        if ($energy != null) {
            return new JsonResponse(['Monthly price' => $energy->getPrice()]);
        }
        return new JsonResponse(
            [
                'error' => 'provider with name ' . $providerName .', product ' . $product .' and product variation ' . $productVariation. ' could not be found!'
            ]);

    }

    /**
     * @Rest\Patch(path="/api/updateEnergy")
     */
    public function patchAction(Request $request): JsonResponse
    {
        $body = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();
        /**
         * @var $energy EnergyProviders|null
         */
        $energy = $em->getRepository(EnergyProviders::class)->findOneBy(
            [
                'name' => $body['name'],
                'product' => $body['product'],
                'productVariation' => $body['productVariation']
            ]
        );
        $newPrice =  (float)$body['newPrice'];
        if ($energy != null) {
            $energy->setPrice($newPrice);
            $em->flush();
            return new JsonResponse(['Success' => "Energy provider updated successfully"]);
        }
        return new JsonResponse(
            [
                'error' => 'provider with name ' . $body["name"] .', product ' . $body["product"] .' and product variation ' . $body["productVariation"]. ' could not be found!'
            ]);

    }

}

