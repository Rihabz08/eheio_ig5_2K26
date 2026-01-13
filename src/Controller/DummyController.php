<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController{
   #[Route(path: '/add-book',name: 'app_book_add')] 
   public function addBook(): Response{
      $book = new Book();
      $bookForm = $this->createForm(type: BookType::class, data: $book);
    return $this->render(view: 'orange/index.html.twig',parameters:[
      "bookForm" => $bookForm
    ]) ;
   }
}



?>