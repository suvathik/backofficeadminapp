<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Order;
//use App\Form\MovieType;
/**
 * OrderList controller.
 * @Route("/api", name="api_")
 */
class OrderListApiController extends AbstractFOSRestController
{
    /**
     * Lists all Orders.
     * @Rest\Get("/orders")
     *
     * @return Response
     */
    public function getOrderAction()
    {
        $repository = $this->getDoctrine()->getRepository(Order::class);
        $orders = $repository->findall();

        $view = $this->view($orders, 200);

        return $this->handleView($view);

//        return $this->handleView($this->view($orders));
    }

}