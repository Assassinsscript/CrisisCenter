<?php


namespace App\Http\Controllers;


use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Middleware;

/**
 * @Middleware("auth")
 */
class HomeController extends Controller
{
    /**
     * @Get("/{productName?}")
     */
    public function index($productName = null)
    {
        if ($productName === null) {
            $productName = "Pansements";
        }

        $categories = [
            'Pansements' => 'Pansements',
            'Outils' => 'Outils',
            'Nourriture' => 'Nourriture',
        ];

        $products = $this->cdiscount->searchToCollection($productName);

        return view('Home.index', compact('categories', 'products', 'productName'));
    }

    /**
     * @Get("/addToCart/{productId}", as="addToCart")
     */
    public function addToCart($productId)
    {
        $this->cdiscount->pushToCart($productId);

        return redirect()->back()->with('success', 'Article ajouté !');
    }
}