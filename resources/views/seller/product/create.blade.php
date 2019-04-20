@extends('seller.index')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
      <div class="col-lg-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Produk Penduduk
              </h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right" action="{{url('seller/product')}}" method="POST">
          {{csrf_field()}}           

            <div class="kt-portlet__body">
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Nama Produk:</label>
                  <input type="text" name="nama_product" id="nama_product" class="form-control" placeholder="Masukkan nama produk">
                  <span class="form-text text-muted">Tolong masukkan nama produk</span>
                </div>
                <div class="col-lg-12">
                  <label class="">Deskripsi Produk:</label>
                  <textarea type="text" class="form-control" name="deskripsi_produk" id="deskripsi_produk" placeholder="Masukkan deskripsi produk"></textarea>
                  <span class="form-text text-muted">Tolong masukkan deskripsi produk</span>
                </div>
              </div>
             <div class="form-group row">
                <div class="col-lg-6">
                  <label>Jenis Kelamin:</label>
                  <div class="kt-radio-inline">
                    <label class="kt-radio kt-radio--solid">
                      <input type="radio" name="jkel" id="jkel" checked value="laki-laki"> Laki - laki
                      <span></span>
                    </label>
                    <label class="kt-radio kt-radio--solid">
                      <input type="radio" name="jkel" id="jkel" value="perempuan"> Perempuan
                      <span></span>
                    </label>
                  </div>
                  <span class="form-text text-muted">Tolong pilih jenis kelamin</span>
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