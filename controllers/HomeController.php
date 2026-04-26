<?php

require_once __DIR__ . '/../models/ProductModel.php';

class HomeController
{
    private ProductModel $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index(): void
    {
        $filters = $this->getRequestFilters();

        $data = [
            'pageTitle' => 'Web Bán Hàng Online',
            'featuredProducts' => $this->productModel->getFeaturedProducts(),
            'newProducts' => $this->productModel->getNewProducts(),
            'promotions' => $this->productModel->getPromotions(),
            'news' => $this->productModel->getNews(),
            'products' => $this->productModel->getProducts($filters),
            'categories' => $this->productModel->getCategories(),
            'brands' => $this->productModel->getBrands(),
            'colors' => $this->productModel->getColors(),
            'sizes' => $this->productModel->getSizes(),
            'promotionTags' => $this->productModel->getPromotionTags(),
            'priceRanges' => $this->productModel->getPriceRanges(),
            'selectedFilters' => $filters,
        ];

        $this->render('home', $data);
    }

    private function getRequestFilters(): array
    {
        $colors = $_GET['color'] ?? [];
        $sizes = $_GET['size'] ?? [];

        return [
            'category' => trim((string) ($_GET['category'] ?? '')),
            'brand' => trim((string) ($_GET['brand'] ?? '')),
            'promo' => trim((string) ($_GET['promo'] ?? '')),
            'price_range' => trim((string) ($_GET['price_range'] ?? '')),
            'color' => is_array($colors) ? $colors : [$colors],
            'size' => is_array($sizes) ? $sizes : [$sizes],
            'rating' => trim((string) ($_GET['rating'] ?? '')),
            'search' => trim((string) ($_GET['search'] ?? '')),
        ];
    }

    private function render(string $view, array $data = []): void
    {
        extract($data, EXTR_OVERWRITE);
        require __DIR__ . '/../views/layout.php';
    }
}
