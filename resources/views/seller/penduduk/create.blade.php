@extends('seller.index')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
      <div class="col-lg-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Data penduduk
              </h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right" action="{{url('seller/penduduk')}}" method="POST">
          {{csrf_field()}}           

            <div class="kt-portlet__body">
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Nama Lengkap:</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama penduduk">
                  <span class="form-text text-muted">Tolong masukkan nama lengkap penduduk</span>
                </div>
                <div class="col-lg-12">
                  <label class="">Alamat:</label>
                  <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat penduduk"></textarea>
                  <span class="form-text text-muted">Tolong masukkan alamat penduduk</span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>No HP / Telepon:</label>
                  <div class="kt-input-icon">
                    <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan nomor telp penduduk">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                  </div>
                  <span class="form-text text-muted">Tolong masukkan nomor penduduk</span>
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