@extends('layouts.app')

@section('content')

  <div class="container py-5 mt-n2 mt-sm-0">
    <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
      @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

      <!-- Thanh điều hướng sidebar chuyển thành offcanvas khi màn hình < 992px (điểm ngắt lg) -->
      @include('user.partials.nav')

      <!-- Nội dung địa chỉ -->
      <div class="col-lg-9">
        <div class="ps-lg-3 ps-xl-0">

          <!-- Tiêu đề trang -->
          <h1 class="h2 mb-1 mb-sm-2">Địa chỉ</h1>

          <!-- Địa chỉ giao hàng chính -->


          @if (empty($addresses) || $addresses->count() == 0)
          <div class="border-bottom py-4">
           
              
          <h2 class="h6 mb-0">Bạn chưa có địa chỉ giao hàng mặc định nào</h2>
              
         
          </div>
          @endif


          @foreach ($addresses as $item)
          <div class="border-bottom py-4">
            <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
              <div class="d-flex align-items-center gap-3 me-4">
                <h2 class="h6 mb-0">Địa chỉ giao hàng</h2>
                @if($item->status == 1)
                <span class="badge text-bg-info rounded-pill">Chính</span>
            @endif
            
              </div>
              <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed" 
                href="#primaryAddressEdit{{ $item->id }}" 
                data-bs-toggle="collapse" 
                aria-expanded="false" 
                aria-controls="primaryAddressEdit{{ $item->id }}">
                Chỉnh sửa
              </a>
            </div>
            <div class="collapse primary-address show" id="primaryAddressPreview">
              <ul class="list-unstyled fs-sm m-0">
                <li>{{ $item->city }}, Việt Nam</li>
                <li>{{ $item->district }} </li>
                <li>{{ $item->commune }} </li>
                <li>{{$item->address}}</li>
              </ul>
            </div>
            <div class="collapse primary-address" id="primaryAddressEdit{{ $item->id }}">

              <form class="row g-3 g-sm-4 needs-validation" novalidate="" action="{{ route('address.update',$item->id)}}" method="POST">
                @csrf
                <div class="col-sm-8">
                  <div class="position-relative">
                    <label for="psa-city" class="form-label">Thành phố</label>
                    <input type="text" class="form-control" id="city" name='city' value="{{ $item->city }}" required="">
                    <div class="invalid-feedback">Vui lòng nhập tên thành phố của bạn!</div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="position-relative">
                    <label for="psa-address" class="form-label">Quận/Huyện</label>
                    <input type="text" class="form-control" id="district" name='district' value="{{ $item->district }}" required="">
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ của bạn!</div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="position-relative">
                    <label for="psa-address" class="form-label">Xã/Phường</label>
                    <input type="text" class="form-control" id="commune" name='commune' value="{{ $item->commune }}" required="">
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ của bạn!</div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="position-relative">
                    <label for="psa-address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name='address' value="{{ $item->address }}" required="">
                    <div class="invalid-feedback">Vui lòng nhập địa chỉ của bạn!</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check mb-0">
                    <input 
                      type="checkbox" 
                      class="form-check-input" 
                      id="set-primary-{{ $item->id }}" 
                      name="primary" 
                      value="1" 
                      {{ $item->status == 1 ? 'checked' : '' }} 
                      checked
                      
                  >
                  <label for="set-primary-{{ $item->id }}" class="form-check-label">
                      Đặt làm địa chỉ chính
                  </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3 pt-2 pt-sm-0">
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".primary-address" aria-expanded="true" aria-controls="primaryAddressPreview primaryAddressEdit{{ $item->id }}">Đóng</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          @endforeach
          

          <!-- Địa chỉ giao hàng thay thế -->
          <div class="nav pt-4">
                <a class="nav-link animate-underline fs-base px-0" href="#newAddressModal" data-bs-toggle="modal">
                  <i class="ci-plus fs-lg ms-n1 me-2"></i>
                  <span class="animate-target">Thêm địa chỉ</span>
                </a>
              </div>

          <!-- Nút thêm địa chỉ -->
     


        </div>
      </div>
    
    </div>
  </div>
   
 <div class="modal fade" id="newAddressModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="newAddressModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newAddressModalLabel">Thêm địa chỉ giao hàng</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 g-sm-4 needs-validation" novalidate action="{{ route('address.add') }}" method="POST">
              @csrf
              <div class="col-sm-8">
                  <div class="position-relative">
                      <label for="psa-city" class="form-label">Thành phố</label>
                      <input type="text" class="form-control" id="city" name="city" required>
                      <div class="invalid-feedback">Vui lòng nhập tên thành phố của bạn!</div>
                  </div>
              </div>
              
              <div class="col-sm-8">
                  <div class="position-relative">
                      <label for="psa-district" class="form-label">Quận/Huyện</label>
                      <input type="text" class="form-control" id="district" name="district" required>
                      <div class="invalid-feedback">Vui lòng nhập quận/huyện của bạn!</div>
                  </div>
              </div>
              
              <div class="col-sm-8">
                  <div class="position-relative">
                      <label for="psa-commune" class="form-label">Xã/Phường</label>
                      <input type="text" class="form-control" id="commune" name="commune" required>
                      <div class="invalid-feedback">Vui lòng nhập xã/phường của bạn!</div>
                  </div>
              </div>
              
              <div class="col-sm-8">
                  <div class="position-relative">
                      <label for="psa-address" class="form-label">Địa chỉ</label>
                      <input type="text" class="form-control" id="address" name="address" required>
                      <div class="invalid-feedback">Vui lòng nhập địa chỉ của bạn!</div>
                  </div>
              </div>
              
              <div class="col-12">
                  <div class="form-check mb-0">
                      <input 
                          type="checkbox" 
                          class="form-check-input" 
                          id="set-primary" 
                          name="primary" 
                          value="1"
                          checked
                      >
                      <label for="set-primary" class="form-check-label">
                          Đặt làm địa chỉ chính
                      </label>
                  </div>
              </div>
              
              <div class="col-12">
                  <div class="d-flex gap-3 pt-2 pt-sm-0">
                      <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                      <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".primary-address" aria-expanded="true">Đóng</button>
                  </div>
              </div>
          </form>
          
          </div>
        </div>
      </div>
    </div>



  
@endsection

