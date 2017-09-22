<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    public function newsAction($lang){
        
        die('News Action is work! My lang is: <b>'.$lang.'</b>');    
    }
    public function newsWithLangAction($lang){
        
        die('News Action is work! My lang is:  <b>'.$lang.'</b>');
    }
    public function articleGetAction($articlename){ 
    
        die('Articke alias Action is work! Article Alias is: <b>'.$articlename.'<b>');
    } 
    public function newsPagesListAction($page){ 
    
        die('Pagination Action is work! Page is: <b>'.$page.'<b>');
    }
    public function newsSortAction($page, $title, $desc){ 
       switch($desc){
            case'default':
                print('Parameter Desc should not be empty!'.PHP_EOL);
            break;
            
        }switch($title){
            case'default':
                print('Parameter Title should not be empty!'.PHP_EOL);
            break;
            
        }switch($page){
            case'default':
                print('Parameter Page should not be empty!'.PHP_EOL);
            break;
            
        }
        die('News sort Action is work! Sort parameters: <b>'.$page.', '.$title.', '.$desc.'<b>');
    }
}
