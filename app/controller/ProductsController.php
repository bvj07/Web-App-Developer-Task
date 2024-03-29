<?php

namespace app\controller;

use core\Response;

class ProductsController extends AppController
{
	public function all()
	{
		$mapper = $this->mappers->load('Product');

		$products = $mapper->all();

		$content = $this->view->render('products/list', array('products' => $products));
		$content = $this->standardPage($content);

		$response = new Response();
		$response->ok($content);

		return $response;
	}
    
    // added function for task
    public function getProduct()
	{
        $params = $this->request->getParams();
        
		$mapper = $this->mappers->load('Product');

		$product = $mapper->findBySKU($params['sku']);

		$content = $this->view->render('products/quickView', array('product' => $product));

		$response = new Response();
		$response->ok($content);

		return $response;
	}
}
