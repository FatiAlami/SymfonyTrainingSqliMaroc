<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }
    /**
     * @Route("/dashboard/login", name="dashboard.login")
     * @return Response
     */
    public function login(): Response
    {
        return $this->render('dashboard/login.html.twig');
    }
    /**
     * @Route("/dashboard/register", name="dashboard.register")
     * @return Response
     */
    public function register(): Response
    {
        return $this->render('dashboard/register.html.twig');
    }
    /**
     * @Route("/dashboard/password", name="dashboard.password")
     * @return Response
     */
    public function password(): Response
    {
        return $this->render('dashboard/password.html.twig');
    }
    /**
     * @Route("/dashboard/charts", name="dashboard.charts")
     * @return Response
     */
    public function charts(): Response
    {
        return $this->render('dashboard/charts.html.twig');
    }
}
