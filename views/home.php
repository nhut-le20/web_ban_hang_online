<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand fw-bold" href="./">
                <i class="fas fa-shopping-cart text-primary"></i> ShopOnline
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            Danh mục sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $category): ?>
                                <li><a class="dropdown-item" href="?category=<?php echo urlencode($category); ?>"><?php echo htmlspecialchars($category); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#top-filter">Bộ lọc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Danh sách</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Tin tức</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="top-filter-bar py-3 border-top" id="top-filter">
            <form method="get" action="./" class="row g-2 align-items-end">
                <div class="col-md-3">
                    <label class="form-label visually-hidden" for="searchInput">Tìm kiếm</label>
                    <input id="searchInput" type="text" name="search" class="form-control" placeholder="Tìm kiếm tên, mã hoặc từ khóa" value="<?php echo htmlspecialchars($selectedFilters['search'] ?? ''); ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label visually-hidden" for="categorySelect">Danh mục</label>
                    <select id="categorySelect" name="category" class="form-select">
                        <option value="">Tất cả danh mục</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo htmlspecialchars($category); ?>" <?php echo ($selectedFilters['category'] === $category) ? 'selected' : ''; ?>><?php echo htmlspecialchars($category); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label visually-hidden" for="brandSelect">Thương hiệu</label>
                    <select id="brandSelect" name="brand" class="form-select">
                        <option value="">Tất cả thương hiệu</option>
                        <?php foreach ($brands as $brand): ?>
                            <option value="<?php echo htmlspecialchars($brand); ?>" <?php echo ($selectedFilters['brand'] === $brand) ? 'selected' : ''; ?>><?php echo htmlspecialchars($brand); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label visually-hidden" for="priceSelect">Giá</label>
                    <select id="priceSelect" name="price_range" class="form-select">
                        <?php foreach ($priceRanges as $value => $label): ?>
                            <option value="<?php echo htmlspecialchars($value); ?>" <?php echo ($selectedFilters['price_range'] === $value) ? 'selected' : ''; ?>><?php echo htmlspecialchars($label); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">Áp dụng</button>
                </div>
                <div class="col-md-1 d-grid">
                    <a href="./" class="btn btn-outline-secondary">Xóa</a>
                </div>
            </form>
        </div>
    </div>
</header>

<!-- Banner quảng cáo -->
<section class="hero-banner text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Chào mừng đến với ShopOnline</h1>
        <p class="lead">Nơi mua sắm tốt nhất với giá cả phải chăng</p>
            <a href="#top-filter" class="btn btn-light btn-lg">Khám phá sản phẩm</a>
<section class="py-5 bg-light" id="products">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Danh sách sản phẩm</h2>
            <p class="mb-0 text-muted"><?php echo count($products); ?> sản phẩm tìm thấy</p>
        </div>

        <?php if (count($products) === 0): ?>
            <div class="alert alert-warning">Không tìm thấy sản phẩm phù hợp với bộ lọc hiện tại.</div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card product-card h-100">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                                <p class="card-text text-muted mb-1">Mã: <?php echo htmlspecialchars($product['sku']); ?></p>
                                <p class="card-text text-danger fw-bold mb-2"><?php echo $product['priceLabel']; ?></p>
                                <p class="card-text small mb-2">Thương hiệu: <?php echo htmlspecialchars($product['brand']); ?></p>
                                <p class="card-text small mb-2">Đánh giá: <?php echo number_format($product['rating'], 1); ?> ⭐</p>
                                <p class="card-text small mb-2">Màu: <?php echo htmlspecialchars(implode(', ', $product['colors'])); ?></p>
                                <p class="card-text small mb-3">Kích cỡ: <?php echo htmlspecialchars(implode(', ', $product['sizes'])); ?></p>
                                <p class="badge bg-success mb-3"><?php echo htmlspecialchars($product['promo']); ?></p>
                                <a href="#" class="btn btn-primary mt-auto">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Sản phẩm nổi bật -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php foreach ($featuredProducts as $product): ?>
                <div class="col-md-3 mb-4">
                    <div class="card product-card h-100">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text text-danger fw-bold"><?php echo $product['price']; ?></p>
                            <a href="#" class="btn btn-primary mt-auto">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sản phẩm mới -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Sản phẩm mới</h2>
        <div class="row">
            <?php foreach ($newProducts as $product): ?>
                <div class="col-md-3 mb-4">
                    <div class="card product-card h-100">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text text-danger fw-bold"><?php echo $product['price']; ?></p>
                            <a href="#" class="btn btn-primary mt-auto">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Khuyến mãi -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Khuyến mãi đặc biệt</h2>
        <div class="row">
            <?php foreach ($promotions as $promo): ?>
                <div class="col-md-3 mb-4">
                    <div class="card product-card h-100 text-center">
                        <img src="<?php echo $promo['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($promo['name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($promo['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($promo['description']); ?></p>
                            <a href="#" class="btn btn-success mt-auto">Xem thêm</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Tin tức và chương trình ưu đãi -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Tin tức & Ưu đãi</h2>
        <div class="row">
            <?php foreach ($news as $item): ?>
                <div class="col-md-3 mb-4">
                    <div class="card news-card h-100">
                        <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h6>
                            <p class="card-text small text-muted"><?php echo htmlspecialchars($item['date']); ?></p>
                            <p class="card-text"><?php echo htmlspecialchars($item['summary']); ?></p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>ShopOnline</h5>
                <p>Nơi mua sắm uy tín với chất lượng đảm bảo.</p>
            </div>
            <div class="col-md-4">
                <h5>Liên hệ</h5>
                <p><i class="fas fa-phone"></i> 1900-xxxx</p>
                <p><i class="fas fa-envelope"></i> support@shoponline.vn</p>
            </div>
            <div class="col-md-4">
                <h5>Theo dõi chúng tôi</h5>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <hr>
        <p class="text-center mb-0">&copy; 2023 ShopOnline. Tất cả quyền được bảo lưu.</p>
    </div>
</footer>
