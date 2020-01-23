<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PatientController extends AbstractController
{
    /**
     * @Route("/patient", name="patient")
     */
    public function table()
    {
        return $this->render('patient/tablep.html.twig', [
            'controller_name' => 'PatientController']);
    }

    /**
     * @Route("/patient/new", name ="new_patient")
     */
    public function show()
    {
        return $this->render('patient/newp.html.twig');
    }
}
