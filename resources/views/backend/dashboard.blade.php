@extends('backend.layouts.master')

@section('content')

<main class="zentic-content">

    <div class="page-header">
        <div>
            <h1 class="page-title">Laceharbor Dashboard</h1>
            <p class="page-subtitle">Store performance overview, sales trends and recent activity</p>
        </div>

        <div class="page-header-actions">
            <a href="product-list.html" class="btn-zentic btn-white btn-sm"><i class="icon-box"></i> View Products</a>
            <a href="add-product.html" class="btn-zentic btn-ai btn-sm"><i class="icon-plus"></i> Add Product</a>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-md-3 col-12">
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-icon purple zentic-bg-purple"><i class="icon-wallet"></i></div><span
                        class="stat-trend up zentic-bg-green"><i class="icon-trending-up"></i> 18.2%</span>
                </div>
                <div class="stat-value" data-target="84520">0</div>
                <div class="stat-label">Total Revenue (₹)</div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-12">
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-icon cyan zentic-bg-cyan"><i class="icon-shopping-cart"></i></div><span
                        class="stat-trend up zentic-bg-green"><i class="icon-trending-up"></i> 9.4%</span>
                </div>
                <div class="stat-value" data-target="1284">0</div>
                <div class="stat-label">Total Orders</div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-12">
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-icon green zentic-bg-green"><i class="icon-users-round"></i></div><span
                        class="stat-trend up zentic-bg-green"><i class="icon-trending-up"></i> 4.8%</span>
                </div>
                <div class="stat-value" data-target="3642">0</div>
                <div class="stat-label">Total Customers</div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-12">
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-icon orange zentic-bg-orange"><i class="icon-box"></i></div><span
                        class="stat-trend down zentic-bg-red"><i class="icon-trending-down"></i> 2.1%</span>
                </div>
                <div class="stat-value" data-target="486">0</div>
                <div class="stat-label">Products in Stock</div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-xl-8">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Sales Overview</h2>
                    <div class="d-flex gap-2">
                        <button class="btn-zentic btn-white btn-sm">Last 30 Days</button>
                    </div>
                </div>
                <div class="zentic-card-body chart-h-xxl">
                    <canvas id="ecomSalesChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Sales by Category</h2>
                </div>
                <div class="zentic-card-body chart-h-xxl">
                    <canvas id="ecomCategoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-xl-7">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Recent Orders</h2>
                    <a href="order-list.html" class="btn-zentic btn-white btn-sm">View All</a>
                </div>
                <div class="zentic-card-body p-0">
                    <div class="zentic-table-wrapper">
                        <table class="zentic-table w-100 mb-0">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="dashRecentOrders">
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10045</a></td>
                                    <td>Olivia Bennett</td>
                                    <td class="text-muted text-sm">Jun 29, 2026</td>
                                    <td class="fw-700">$187.37</td>
                                    <td><span class="badge-zentic badge-green badge-dot">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10046</a></td>
                                    <td>Liam Carter</td>
                                    <td class="text-muted text-sm">Jun 28, 2026</td>
                                    <td class="fw-700">$69.78</td>
                                    <td><span class="badge-zentic badge-purple badge-dot">Shipped</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10047</a></td>
                                    <td>Sophia Nguyen</td>
                                    <td class="text-muted text-sm">Jun 27, 2026</td>
                                    <td class="fw-700">$66.52</td>
                                    <td><span class="badge-zentic badge-cyan badge-dot">Processing</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10048</a></td>
                                    <td>Noah Rodriguez</td>
                                    <td class="text-muted text-sm">Jun 25, 2026</td>
                                    <td class="fw-700">$161.99</td>
                                    <td><span class="badge-zentic badge-red badge-dot">Cancelled</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10049</a></td>
                                    <td>Ava Thompson</td>
                                    <td class="text-muted text-sm">Jun 24, 2026</td>
                                    <td class="fw-700">$82.57</td>
                                    <td><span class="badge-zentic badge-green badge-dot">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-details.html" class="fw-600 mono">#ORD-10050</a></td>
                                    <td>Ethan Walker</td>
                                    <td class="text-muted text-sm">Jun 22, 2026</td>
                                    <td class="fw-700">$101.65</td>
                                    <td><span class="badge-zentic badge-orange badge-dot">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Top Selling Products</h2>
                    <a href="product-list.html" class="btn-zentic btn-white btn-sm">View All</a>
                </div>
                <div class="zentic-card-body">
                    <div class="d-flex flex-column gap-3" id="dashTopProducts">
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-1.jpg"
                                alt="Adjustable Dumbbell Set" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Adjustable Dumbbell Set</div>
                                <div class="text-xs text-muted">$149.99 · 20 in stock</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-2.html"
                                alt="Smart Fitness Watch" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Smart Fitness Watch</div>
                                <div class="text-xs text-muted">$89.50 · 42 in stock</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-3.html"
                                alt="Women's Summer Floral Dress" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Women's Summer Floral Dress</div>
                                <div class="text-xs text-muted">$45.00 · 0 in stock</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-10.html"
                                alt="Remote Control Racing Car" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Remote Control Racing Car</div>
                                <div class="text-xs text-muted">$39.99 · 0 in stock</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-4.html"
                                alt="Matte Finish Lipstick Set" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Matte Finish Lipstick Set</div>
                                <div class="text-xs text-muted">$27.99 · 5 in stock</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-xl-6">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Low Stock Alerts</h2>
                    <a href="product-list.html" class="btn-zentic btn-white btn-sm">Manage Stock</a>
                </div>
                <div class="zentic-card-body">
                    <div class="d-flex flex-column gap-3" id="dashLowStock">
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-1.jpg"
                                alt="Women's Summer Floral Dress" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Women's Summer Floral Dress</div>
                                <div class="text-xs text-muted">SKU: FAS-FD-087</div>
                            </div><span class="badge-zentic badge-red badge-dot">0 left</span>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-3.html"
                                alt="Men's Premium Cotton T-Shirt" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Men's Premium Cotton T-Shirt</div>
                                <div class="text-xs text-muted">SKU: APP-TC-045</div>
                            </div><span class="badge-zentic badge-red badge-dot">0 left</span>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-9.jpg"
                                alt="Remote Control Racing Car" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Remote Control Racing Car</div>
                                <div class="text-xs text-muted">SKU: TOY-RC-063</div>
                            </div><span class="badge-zentic badge-orange badge-dot">5 left</span>
                        </div>
                        <div class="d-flex align-items-center gap-3"><img src="assets/img/products/prd-10.html"
                                alt="Matte Finish Lipstick Set" class="rounded-3 avatar-52 object-fit-cover">
                            <div class="flex-1 min-w-0">
                                <div class="fw-600 text-sm text-truncate">Matte Finish Lipstick Set</div>
                                <div class="text-xs text-muted">SKU: BEA-LP-071</div>
                            </div><span class="badge-zentic badge-orange badge-dot">20 left</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="zentic-card h-100">
                <div class="zentic-card-header">
                    <h2 class="card-title mb-0">Latest Reviews</h2>
                    <a href="reviews.html" class="btn-zentic btn-white btn-sm">Manage Reviews</a>
                </div>
                <div class="zentic-card-body">
                    <div class="d-flex flex-column gap-3" id="dashReviews">
                        <div class="d-flex align-items-start gap-3"><img class="avatar-gen-img"
                                src="assets/img/avatar/avatar-3.html" data-size="36" alt="Sophia Nguyen">
                            <div class="flex-1 min-w-0">
                                <div class="d-flex align-items-center justify-content-between"><span class="fw-600 text-sm">Sophia
                                        Nguyen</span><span class="text-xs"><i class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i></span></div>
                                <div class="text-xs text-muted text-truncate">Wireless Noise-Cancelling Headphones</div>
                                <div class="text-sm text-truncate">Sound quality is incredible and the noise cancellation actually
                                    works on flights.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3"><img class="avatar-gen-img"
                                src="assets/img/avatar/avatar-4.html" data-size="36" alt="Liam Carter">
                            <div class="flex-1 min-w-0">
                                <div class="d-flex align-items-center justify-content-between"><span class="fw-600 text-sm">Liam
                                        Carter</span><span class="text-xs"><i class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star-off text-xs text-muted"></i></span></div>
                                <div class="text-xs text-muted text-truncate">Men's Classic Denim Jacket</div>
                                <div class="text-sm text-truncate">Great fit, though the color is slightly darker than pictured.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3"><img class="avatar-gen-img"
                                src="assets/img/avatar/avatar-5.html" data-size="36" alt="Olivia Bennett">
                            <div class="flex-1 min-w-0">
                                <div class="d-flex align-items-center justify-content-between"><span class="fw-600 text-sm">Olivia
                                        Bennett</span><span class="text-xs"><i class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i></span></div>
                                <div class="text-xs text-muted text-truncate">Organic Argan Hair Oil</div>
                                <div class="text-sm text-truncate">My hair has never felt this soft. Repurchasing already.</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3"><img class="avatar-gen-img"
                                src="assets/img/avatar/avatar-6.html" data-size="36" alt="Noah Rodriguez">
                            <div class="flex-1 min-w-0">
                                <div class="d-flex align-items-center justify-content-between"><span class="fw-600 text-sm">Noah
                                        Rodriguez</span><span class="text-xs"><i class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star text-xs text-warning-c"></i><i
                                            class="icon-star-off text-xs text-muted"></i><i
                                            class="icon-star-off text-xs text-muted"></i><i
                                            class="icon-star-off text-xs text-muted"></i></span></div>
                                <div class="text-xs text-muted text-truncate">Adjustable Dumbbell Set</div>
                                <div class="text-sm text-truncate">Adjustment dial feels flimsy after two weeks of use.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection