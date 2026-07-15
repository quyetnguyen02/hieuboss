<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Thumb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $shop;
    public $gen = [1, 2, 3];
    public $types = [
        '0' => 'Phụ kiện',
        '1' => 'Pin',
        '2' => 'Điện',
    ];

    public function __construct() {
        //get shop info
        $shopModel = new Shop();
        $this->shop = $shopModel->getShopInfo();
    }

    public function home()
    {
        //get categories
        $categoryModel = new Category();
        $categories = $categoryModel->getCategoryLists()->keyBy('id');

        //get banner list
        $bannerModel = new Banner();
        $banners = $bannerModel->getBannersDisplay();

        //get Product
        $productModel = new Product();
        $products = $productModel->getProductsByCategory([1, 2, 3, 4]);


        $categoryListProducts = collect($products)->keys()->all();


        return view('UserPage.home',
            [
                'categories' => $categories,
                'shop' => $this->shop,
                'banners' => $banners,
                'categoryListProducts' => $categoryListProducts,
                'products' => $products,
                'keyword' => ''
            ]
        );

    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $price = $request->price;
        $gen = $request->gen;
        $type = $request->type;
        $category_id = $request->category_id;

        //get categories
        $categoryModel = new Category();
        $categories = $categoryModel->getCategoryLists()->keyBy('id');

        $productModel = new Product();


//        if (!$keyword) {
//            $products = $productModel->getProductsByCategory([1, 2, 3, 4]);
//        }


        $products = $productModel->searchProducts($keyword, $price, $gen, $type, $category_id);
        $categoryListProducts = $products->getCollection()
            ->groupBy('category_id')
            ->toArray();


        return view('UserPage.search', [
            'keyword' => $keyword,
            'products' => $products,
            'categoryListProducts' => $categoryListProducts,
            'shop' => $this->shop,
            'categories' => $categories,
            'gens' => $this->gen,
            'types' => $this->types,
        ]);

    }

    public function productDetail(Request$request, $id, $slug)
    {
        //get categories
        $categoryModel = new Category();
        $categories = $categoryModel->getCategoryLists()->keyBy('id');

        //get product by id
        $productModel = new Product();
        $product = $productModel->getProductById($id);

        //get thumbs
        $thumbModel = new Thumb();
        $thumb_ids = json_decode($product['thumb_id'], true);;
        $thumbs = $thumbModel->getThumbByIds($thumb_ids)->pluck('src')->toArray();
        $product['thumbs'] = $thumbs;
//        dd($product);
        return view('UserPage.product-detail', [
            'product' => $product,
            'shop' => $this->shop,
            'keyword' => '',
            'categories' => $categories,

        ]);
    }

    public function card()
    {
        //get categories
        $categoryModel = new Category();
        $categories = $categoryModel->getCategoryLists()->keyBy('id');

        return view('UserPage.card', [
            'shop' => $this->shop,
            'keyword' => '',
            'categories' => $categories,
        ]);

    }
}
