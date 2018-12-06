<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class BaseController extends Controller
{
    /**
     * @Route("/", name="index_base")
     */
    public function index(Request $request)
    {
        
        //Redirection Si Role_Admin ou ROLE_User
        $authChecker=$this->container->get('security.authorization_checker');

        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('easyadmin');
        }else{
            $test='';
            return $this->render('base.html.twig',['test'=>$test]);
        }
    }

  /**
     * @Route("/achat-bitcoins", name="buy_bitcoins")
     */
    public function buy_bitcoin(Request $request)
    {
        
        $test='';
        return $this->render('base.html.twig',['test'=>$test]);
    
    }

  /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)
    {
        
        return $this->render('default/contact.html.twig');
    
    }

    
    /** 
     * @Route("/check_wallet", name="check_wallet")
     */
    public function recherche(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        if ($request->isMethod('GET')){
            $address=$request->get('addr');
            
            $client = new \GuzzleHttp\Client();
            
            try{
                $res = $client->request('GET', 'https://blockexplorer.com/api/addr/'.$address);
                $test = json_decode($res->getBody("balanceSat"));

                return $this->render('base.html.twig',['test'=>$test]);
            }
                catch(RequestException $e){

                    // To catch exactly error 400 use 
                    if ($e->getResponse()->getStatusCode() == '400' OR $e->getResponse()->getStatusCode() == '404') {
                        return $this->render('default/error_bitcoin.html.twig');
                }

            }
        }
        
    }
    
    
    
    
    
    
}
