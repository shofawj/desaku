@extends('seller.index')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
      <div class="col-lg-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
Kategori Produk              </h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right" action="{{route('seller.category.update',[$kategori->id])}}" method="POST">
          {{csrf_field()}}           
          {{ method_field('PUT') }}         

            <div class="kt-portlet__body">
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Kategori</label>
                  <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                  <span class="form-text text-muted">Tolong masukkan nama kategori produk</span>
                </div>
              </div>
            </div>
            <div class="kt-portlet__foot">
              <div class="kt-form__actions">
                <div class="row">
                  <div class="col-lg-12 kt-align-right">
                    <button type="submit" class="btn btn-primary">Simpan data</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection