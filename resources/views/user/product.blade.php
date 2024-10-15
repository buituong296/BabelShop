<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<!-- Page content -->
<main class="content-wrapper">

    <!-- Breadcrumb -->
<nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home-electronics.html">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Danh mục với bộ lọc bên</li>
    </ol>
  </nav>

  <!-- Page title -->
  <h1 class="h3 container mb-4">Trang sản phẩm</h1>

  <!-- Banners that are turned into collaspse on screens < 768px wide (sm breakpoint) -->
  <section class="accordion container pb-4 pb-md-5 mb-xl-3">
    <div class="accordion-item border-0">
      <div class="accordion-header d-md-none" id="offersHeading">
        <button type="button" class="accordion-button w-auto fw-medium collapsed border border-dashed border-danger border-opacity-50 rounded py-2 px-3" data-bs-toggle="collapse" data-bs-target="#offers" aria-expanded="false" aria-controls="offers">
          <span class="d-inline-flex ci-percent fs-lg text-danger rounded-circle me-2"></span>
          <span class="me-2">Xem ưu đãi mới nhất</span>
        </button>
      </div>
      <div class="accordion-collapse collapse d-md-block" id="offers" aria-labelledby="offersHeading">
        <div class="row g-3 g-lg-4 pt-3 pt-md-0">
          <div class="col-md-7">
            <div class="position-relative d-flex flex-column flex-sm-row align-items-center h-100 rounded-5 overflow-hidden px-5 px-sm-0 pe-sm-4">
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="position-relative z-1 text-center text-sm-start pt-4 pt-sm-0 ps-xl-4 mt-2 mt-sm-0 order-sm-2">
                <h2 class="h3 mb-2">iPhone 14</h2>
                <p class="fs-sm text-light-emphasis mb-sm-4">Apple iPhone 14 128GB Màu xanh</p>
                <a class="btn btn-primary" href="shop-product-general-electronics.html">
                  Giá từ $899
                  <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                </a>
              </div>
              <div class="position-relative z-1 w-100 align-self-end order-sm-1" style="max-width: 416px">
                <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(320 / 416 * 100%)">
                  <img src="assets/img/shop/electronics/banners/iphone-1.png" alt="iPhone 14">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="position-relative d-flex flex-column align-items-center justify-content-between h-100 rounded-5 overflow-hidden pt-3">
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #fdcbf1 0%, #fdcbf1 1%, #ffecfa 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #362131 0%, #322730 100%)"></span>
              <div class="position-relative z-1 text-center pt-3 mx-4">
                <i class="ci-apple text-body-emphasis fs-3 mb-3"></i>
                <p class="fs-sm text-light-emphasis mb-1">Ưu đãi trong tuần</p>
                <h2 class="h3 mb-4">iPad Pro M1</h2>
              </div>
              <a class="position-relative z-1 d-block w-100" href="shop-product-general-electronics.html">
                <div class="ratio" style="--cz-aspect-ratio: calc(159 / 525 * 100%)">
                  <img src="assets/img/shop/electronics/banners/ipad.png" width="525" alt="iPad">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <!-- Selected filters + Sorting -->
<section class="container mb-4">
    <div class="row">
      <div class="col-lg-9">
        <div class="d-md-flex align-items-start">
          <div class="h6 fs-sm fw-normal text-nowrap translate-middle-y mt-3 mb-0 me-4">
            Tìm thấy <span class="fw-semibold">732</span> sản phẩm
          </div>
          <div class="d-flex flex-wrap gap-2">
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              Giảm giá
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              Asus
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              1 TB
            </button>
            <button type="button" class="btn btn-sm btn-secondary">
              <i class="ci-close fs-sm ms-n1 me-1"></i>
              $340 - $1,250
            </button>
            <button type="button" class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline px-0 ms-2">
              Xóa tất cả
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0">
        <div class="d-flex align-items-center justify-content-lg-end text-nowrap">
          <label class="form-label fw-semibold mb-0 me-2">Sắp xếp theo:</label>
          <div style="width: 190px">
            <select class="form-select border-0 rounded-0 px-1" data-select="{
              &quot;removeItemButton&quot;: false,
              &quot;classNames&quot;: {
                &quot;containerInner&quot;: &quot;form-select border-0 rounded-0 px-1&quot;
              }
            }">
              <option value="Relevance">Độ liên quan</option>
              <option value="Popularity">Phổ biến</option>
              <option value="Price: Low to High">Giá: Từ thấp đến cao</option>
              <option value="Price: High to Low">Giá: Từ cao đến thấp</option>
              <option value="Newest Arrivals">Sản phẩm mới nhất</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <hr class="d-lg-none my-3">
  </section>



    <!-- Products grid + Sidebar with filters -->
    <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row">

        <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
            <div class="offcanvas-lg offcanvas-start" id="filterSidebar">
              <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title">Lọc và sắp xếp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filterSidebar" aria-label="Đóng"></button>
              </div>
              <div class="offcanvas-body flex-column pt-2 py-lg-0">

                <!-- Status -->
                <div class="w-100 border rounded p-3 p-xl-4 mb-3 mb-xl-4">
                  <h4 class="h6">Trạng thái</h4>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                      <i class="ci-percent fs-sm me-1 ms-n1"></i>
                      Giảm giá
                    </button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Giao trong ngày</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Có thể đặt hàng</button>
                  </div>
                </div>

                <!-- Categories -->
                <div class="w-100 border rounded p-3 p-xl-4 mb-3 mb-xl-4">
                  <h4 class="h6 mb-2">Danh mục</h4>
                  <ul class="list-unstyled d-block m-0">
                    <li class="nav d-block pt-2 mt-1">
                      <a class="nav-link animate-underline fw-normal p-0" href="#!">
                        <span class="animate-target text-truncate me-3">Điện thoại thông minh</span>
                        <span class="text-body-secondary fs-xs ms-auto">218</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <!-- Price range -->
                <div class="w-100 border rounded p-3 p-xl-4 mb-3 mb-xl-4">
                  <h4 class="h6 mb-2" id="slider-label">Giá</h4>
                  <div class="range-slider" data-range-slider="{&quot;startMin&quot;: 340, &quot;startMax&quot;: 1250, &quot;min&quot;: 0, &quot;max&quot;: 1600, &quot;step&quot;: 1, &quot;tooltipPrefix&quot;: &quot;$&quot;}" aria-labelledby="slider-label">
                    <div class="range-slider-ui"></div>
                    <div class="d-flex align-items-center">
                      <div class="position-relative w-50">
                        <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min="">
                      </div>
                      <i class="ci-minus text-body-emphasis mx-2"></i>
                      <div class="position-relative w-50">
                        <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input type="number" class="form-control form-icon-start" min="0" data-range-slider-max="">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Brand (checkboxes) -->
                <div class="w-100 border rounded p-3 p-xl-4 mb-3 mb-xl-4">
                  <h4 class="h6">Thương hiệu</h4>
                  <div class="d-flex flex-column gap-1">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="apple" checked="">
                        <label for="apple" class="form-check-label text-body-emphasis">Apple</label>
                      </div>
                      <span class="text-body-secondary fs-xs">64</span>
                    </div>

                    <div class="accordion mb-n2">
                      <div class="accordion-item border-0">
                        <div class="accordion-collapse collapse" id="more-brands">
                          <div class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="hp">
                                <label for="hp" class="form-check-label text-body-emphasis">Hewlett Packard</label>
                              </div>
                              <span class="text-body-secondary fs-xs">61</span>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-header">
                          <button type="button" class="accordion-button w-auto fs-sm fw-medium collapsed animate-underline py-2" data-bs-toggle="collapse" data-bs-target="#more-brands" aria-expanded="false" aria-controls="more-brands" aria-label="Hiển thị/ẩn thêm thương hiệu">
                            <span class="animate-target me-2" data-label-collapsed="Hiển thị tất cả" data-label-expanded="Ẩn bớt"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Color -->
                <div class="w-100 border rounded p-3 p-xl-4">
                  <h4 class="h6">Màu sắc</h4>
                  <div class="nav d-block mt-n2">
                    <button type="button" class="nav-link w-auto animate-underline fw-normal pt-2 pb-0 px-0">
                      <span class="rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #8bc4ab"></span>
                      <span class="animate-target">Xanh lá</span>
                    </button>
                    <button type="button" class="nav-link w-auto animate-underline fw-normal mt-1 pt-2 pb-0 px-0">
                      <span class="rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #ee7976"></span>
                      <span class="animate-target">Đỏ san hô</span>
                    </button>
                    <button type="button" class="nav-link w-auto animate-underline fw-normal mt-1 pt-2 pb-0 px-0">
                      <span class="rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #df8fbf"></span>
                      <span class="animate-target">Hồng nhạt</span>
                    </button>
                    <button type="button" class="nav-link w-auto animate-underline fw-normal mt-1 pt-2 pb-0 px-0">
                      <span class="rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #9acbf1"></span>
                      <span class="animate-target">Xanh dương</span>
                    </button>
                    <button type="button" class="nav-link w-auto animate-underline fw-normal mt-1 pt-2 pb-0 px-0">
                      <span class="rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #364254"></span>
                      <span class="animate-target">Đen</span>
                    </button>
                    <button type="button" class="nav-link w-auto animate-underline fw-normal mt-1 pt-2 pb-0 px-0">
                      <span class="border rounded-circle me-2" style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #ffffff"></span>
                      <span class="animate-target">Trắng</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </aside>



        <!-- Product grid -->
        <div class="col-lg-9">
            <div class="row row-cols-2 row-cols-md-3 g-4 pb-3 mb-3">
                @foreach($products as $product)
                <!-- Item -->
                <div class="col">
                    <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                        <div class="position-relative">
                            <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                                <div class="d-flex flex-column gap-2">
                                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                                        <i class="ci-heart fs-base animate-target"></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                                        <i class="ci-refresh-cw fs-base animate-target"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                                <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                    <i class="ci-more-vertical fs-lg"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                            Add to Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                            Compare
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="{{ route('productdetail', $product->id) }}">
                                {{-- @if($product->discount > 0)
                                    <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-{{ $product->discount }}%</span>
                                @endif --}}
                                <div
                                class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)"
                                >
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="d-flex gap-1 fs-xs">
                                    <i class="ci-star-filled text-warning"></i>
                                    <i class="ci-star-filled text-warning"></i>
                                    <i class="ci-star-filled text-warning"></i>
                                    <i class="ci-star-filled text-warning"></i>
                                    <i class="ci-star text-body-tertiary opacity-75"></i>
                                </div>
                                {{-- <span class="text-body-tertiary fs-xs">({{ $product->reviews_count }})</span> --}}
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="{{ route('productdetail', $product->id) }}">
                                    <span class="animate-target">{{ $product->name }}</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">{{ number_format($product->price, 2) }} VND
                                    @if($product->original_price > $product->price)
                                        <del class="text-body-tertiary fs-sm fw-normal">{{ number_format($product->original_price, 2) }} VND</del>
                                    @endif
                                </div>
                                <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                            <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                            <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Display:</span>
                                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                                    {{-- <span class="text-dark-emphasis fs-xs fw-medium text-end">{{ $product->display }}</span> --}}
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Graphics:</span>
                                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                                    {{-- <span class="text-dark-emphasis fs-xs fw-medium text-end">{{ $product->graphics }}</span> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




          <!-- Pagination -->
          <nav class="border-top mt-4 pt-3" aria-label="Catalog pagination">
            <ul class="pagination pagination-lg pt-2 pt-md-3">
              <li class="page-item disabled me-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Previous page">
                  <i class="ci-chevron-left mx-1"></i>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">3</a>
              </li>
              <li class="page-item">
                <span class="page-link pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">16</a>
              </li>
              <li class="page-item ms-auto">
                <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Next page">
                  <i class="ci-chevron-right mx-1"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>


    </section>

  </main>
@endsection
