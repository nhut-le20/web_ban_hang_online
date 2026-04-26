<?php

class ProductModel
{
    private array $products;

    public function __construct()
    {
        $this->products = [
            [
                'id' => 1,
                'sku' => 'IP14PRO',
                'name' => 'iPhone 14 Pro',
                'category' => 'Điện thoại',
                'brand' => 'Apple',
                'price' => 29990000,
                'priceLabel' => '29.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=iPhone+14+Pro',
                'promo' => 'Khuyến mãi 10%',
                'colors' => ['Đen', 'Bạc', 'Vàng'],
                'sizes' => ['128GB', '256GB'],
                'rating' => 4.8,
                'keywords' => ['iphone', 'apple', 'điện thoại', 'ios', 'smartphone'],
            ],
            [
                'id' => 2,
                'sku' => 'MBAIRM2',
                'name' => 'MacBook Air M2',
                'category' => 'Laptop',
                'brand' => 'Apple',
                'price' => 32990000,
                'priceLabel' => '32.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=MacBook+Air+M2',
                'promo' => 'Miễn phí vận chuyển',
                'colors' => ['Space Gray', 'Bạc'],
                'sizes' => ['256GB', '512GB'],
                'rating' => 4.7,
                'keywords' => ['macbook', 'apple', 'laptop', 'm2', 'notebook'],
            ],
            [
                'id' => 3,
                'sku' => 'SAMS23',
                'name' => 'Samsung Galaxy S23',
                'category' => 'Điện thoại',
                'brand' => 'Samsung',
                'price' => 24990000,
                'priceLabel' => '24.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Samsung+Galaxy+S23',
                'promo' => 'Khuyến mãi 5%',
                'colors' => ['Đen', 'Đỏ', 'Xanh'],
                'sizes' => ['128GB', '256GB'],
                'rating' => 4.5,
                'keywords' => ['samsung', 'galaxy', 'android', 'điện thoại', 'smartphone'],
            ],
            [
                'id' => 4,
                'sku' => 'DELXPS13',
                'name' => 'Dell XPS 13',
                'category' => 'Laptop',
                'brand' => 'Dell',
                'price' => 35990000,
                'priceLabel' => '35.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Dell+XPS+13',
                'promo' => 'Trả góp 0%',
                'colors' => ['Bạc', 'Đen'],
                'sizes' => ['256GB', '512GB'],
                'rating' => 4.6,
                'keywords' => ['dell', 'xps', 'laptop', 'notebook', 'workstation'],
            ],
            [
                'id' => 5,
                'sku' => 'AIRP2',
                'name' => 'AirPods Pro 2',
                'category' => 'Phụ kiện',
                'brand' => 'Apple',
                'price' => 5990000,
                'priceLabel' => '5.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=AirPods+Pro+2',
                'promo' => 'Quà tặng phụ kiện',
                'colors' => ['Trắng'],
                'sizes' => ['Standard'],
                'rating' => 4.9,
                'keywords' => ['airpods', 'apple', 'tai nghe', 'true wireless', 'earbuds'],
            ],
            [
                'id' => 6,
                'sku' => 'IPADAIR5',
                'name' => 'iPad Air 5',
                'category' => 'Máy tính bảng',
                'brand' => 'Apple',
                'price' => 18990000,
                'priceLabel' => '18.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=iPad+Air+5',
                'promo' => 'Miễn phí vận chuyển',
                'colors' => ['Xám', 'Hồng', 'Tím'],
                'sizes' => ['64GB', '256GB'],
                'rating' => 4.6,
                'keywords' => ['ipad', 'apple', 'tablet', 'máy tính bảng', 'ios'],
            ],
            [
                'id' => 7,
                'sku' => 'WH1000XM5',
                'name' => 'Sony WH-1000XM5',
                'category' => 'Phụ kiện',
                'brand' => 'Sony',
                'price' => 8990000,
                'priceLabel' => '8.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Sony+WH-1000XM5',
                'promo' => 'Khuyến mãi 5%',
                'colors' => ['Đen', 'Bạc'],
                'sizes' => ['Standard'],
                'rating' => 4.8,
                'keywords' => ['sony', 'headphones', 'tai nghe', 'noise cancelling', 'audio'],
            ],
            [
                'id' => 8,
                'sku' => 'SWITCHO',
                'name' => 'Nintendo Switch OLED',
                'category' => 'Gaming',
                'brand' => 'Nintendo',
                'price' => 9990000,
                'priceLabel' => '9.990.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Nintendo+Switch+OLED',
                'promo' => 'Khuyến mãi 10%',
                'colors' => ['Trắng'],
                'sizes' => ['Standard'],
                'rating' => 4.7,
                'keywords' => ['nintendo', 'gaming', 'switch', 'console', 'game'],
            ],
            [
                'id' => 9,
                'sku' => 'NIKESNK',
                'name' => 'Nike Air Max',
                'category' => 'Thời trang',
                'brand' => 'Nike',
                'price' => 2490000,
                'priceLabel' => '2.490.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Nike+Air+Max',
                'promo' => 'Giảm 20%',
                'colors' => ['Đen', 'Trắng', 'Xanh'],
                'sizes' => ['38', '39', '40', '41', '42'],
                'rating' => 4.4,
                'keywords' => ['nike', 'giày', 'sneaker', 'thời trang', 'air max'],
            ],
            [
                'id' => 10,
                'sku' => 'ADIDATS',
                'name' => 'Adidas Sports T-Shirt',
                'category' => 'Thời trang',
                'brand' => 'Adidas',
                'price' => 590000,
                'priceLabel' => '590.000đ',
                'image' => 'https://via.placeholder.com/300x200?text=Adidas+T-Shirt',
                'promo' => 'Giảm 15%',
                'colors' => ['Trắng', 'Đen', 'Xanh'],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'rating' => 4.3,
                'keywords' => ['adidas', 'áo thun', 'thể thao', 'fashion', 't-shirt'],
            ],
        ];
    }

    public function getFeaturedProducts(): array
    {
        return array_filter($this->products, function ($product) {
            return in_array($product['id'], [1, 2, 3, 4], true);
        });
    }

    public function getNewProducts(): array
    {
        return array_filter($this->products, function ($product) {
            return in_array($product['id'], [5, 6, 7, 8], true);
        });
    }

    public function getPromotions(): array
    {
        return array_filter($this->products, function ($product) {
            return !empty($product['promo']);
        });
    }

    public function getNews(): array
    {
        return [
            ['title' => 'Ra mắt iPhone 15 Series', 'date' => '2023-09-15', 'summary' => 'Apple vừa chính thức ra mắt dòng iPhone 15 với nhiều tính năng mới...', 'image' => 'https://via.placeholder.com/300x200?text=iPhone+15'],
            ['title' => 'Chương trình Black Friday', 'date' => '2023-11-24', 'summary' => 'Giảm giá lên đến 50% cho tất cả sản phẩm trong tuần lễ Black Friday...', 'image' => 'https://via.placeholder.com/300x200?text=Black+Friday'],
            ['title' => 'Hướng dẫn mua hàng online an toàn', 'date' => '2023-10-01', 'summary' => 'Những tips để mua sắm online an toàn và tiết kiệm...', 'image' => 'https://via.placeholder.com/300x200?text=Online+Shopping+Tips'],
            ['title' => 'Review sản phẩm công nghệ 2023', 'date' => '2023-12-01', 'summary' => 'Top 10 sản phẩm công nghệ được yêu thích nhất năm 2023...', 'image' => 'https://via.placeholder.com/300x200?text=Tech+Review'],
        ];
    }

    public function getProducts(array $filters = []): array
    {
        return $this->applyFilters($this->products, $filters);
    }

    public function getCategories(): array
    {
        return $this->getUniqueValues('category');
    }

    public function getBrands(): array
    {
        return $this->getUniqueValues('brand');
    }

    public function getColors(): array
    {
        return $this->getUniqueValues('colors');
    }

    public function getSizes(): array
    {
        return $this->getUniqueValues('sizes');
    }

    public function getPromotionTags(): array
    {
        return $this->getUniqueValues('promo');
    }

    public function getPriceRanges(): array
    {
        return [
            '' => 'Tất cả mức giá',
            '0-5000000' => 'Dưới 5 triệu',
            '5000000-15000000' => '5 - 15 triệu',
            '15000000-30000000' => '15 - 30 triệu',
            '30000000-' => 'Trên 30 triệu',
        ];
    }

    private function applyFilters(array $products, array $filters): array
    {
        return array_values(array_filter($products, function ($product) use ($filters) {
            if (!empty($filters['category']) && $product['category'] !== $filters['category']) {
                return false;
            }

            if (!empty($filters['brand']) && $product['brand'] !== $filters['brand']) {
                return false;
            }

            if (!empty($filters['promo']) && $product['promo'] !== $filters['promo']) {
                return false;
            }

            if (!empty($filters['price_range']) && !$this->matchesPriceRange($product['price'], $filters['price_range'])) {
                return false;
            }

            if (!empty($filters['color']) && is_array($filters['color'])) {
                $selectedColors = array_filter($filters['color']);
                if (!empty($selectedColors) && count(array_intersect($selectedColors, $product['colors'])) === 0) {
                    return false;
                }
            }

            if (!empty($filters['size']) && is_array($filters['size'])) {
                $selectedSizes = array_filter($filters['size']);
                if (!empty($selectedSizes) && count(array_intersect($selectedSizes, $product['sizes'])) === 0) {
                    return false;
                }
            }

            if (!empty($filters['rating']) && $product['rating'] < (float) $filters['rating']) {
                return false;
            }

            if (!empty($filters['search']) && !$this->matchesSearch($product, $filters['search'])) {
                return false;
            }

            return true;
        }));
    }

    private function matchesSearch(array $product, string $search): bool
    {
        $search = mb_strtolower(trim($search));

        if ($search === '') {
            return true;
        }

        if (mb_stripos(mb_strtolower($product['name']), $search) !== false) {
            return true;
        }

        if (mb_stripos(mb_strtolower($product['sku']), $search) !== false) {
            return true;
        }

        foreach ($product['keywords'] as $keyword) {
            if (mb_stripos(mb_strtolower($keyword), $search) !== false) {
                return true;
            }
        }

        return false;
    }

    private function matchesPriceRange(int $price, string $priceRange): bool
    {
        if ($priceRange === '0-5000000') {
            return $price < 5000000;
        }

        if ($priceRange === '5000000-15000000') {
            return $price >= 5000000 && $price <= 15000000;
        }

        if ($priceRange === '15000000-30000000') {
            return $price > 15000000 && $price <= 30000000;
        }

        if ($priceRange === '30000000-') {
            return $price > 30000000;
        }

        return true;
    }

    private function getUniqueValues(string $key): array
    {
        $values = [];

        foreach ($this->products as $product) {
            if (isset($product[$key])) {
                if (is_array($product[$key])) {
                    $values = array_merge($values, $product[$key]);
                } else {
                    $values[] = $product[$key];
                }
            }
        }

        $values = array_unique($values, SORT_REGULAR);
        sort($values, SORT_NATURAL | SORT_FLAG_CASE);

        return array_values($values);
    }
}
