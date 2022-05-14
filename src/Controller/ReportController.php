<?php

namespace App\Controller;

use App\Entity\ExportMade;
use App\Form\ReportType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine) {
        $this->doctrine = $doctrine;
    }

    /**
     * @Route("/", name="app_report")
     */
    public function index(Request $request): Response
    {
        $entityManager = $this->doctrine->getManager();

        $entityExportMadePlaces = $entityManager->getRepository(ExportMade::class)->getPlaces();
        $reportForm = $this->createForm(ReportType::class, ['places' => $entityExportMadePlaces]);

        $reportForm->handleRequest($request);
        if($reportForm->isSubmitted() && $reportForm->isValid()) {
            $entityExportMade = $entityManager->getRepository(ExportMade::class)->filterData(
                $reportForm['place']->getData(),
                $reportForm['creationDateStart']->getData(),
                $reportForm['creationDateEnd']->getData());
        }
        else {
            $entityExportMade = $entityManager->getRepository(ExportMade::class)->findAll();
        }

        return $this->render('report/index.html.twig', [
            'entityExportMade' => $entityExportMade,
            'reportForm' => $reportForm->createView()
        ]);
    }
}
