@extends('seller.index')

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
      <div class="col-lg-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
Data Pelanggan            </h3>
            </div>
          </div>
          <form class="kt-form kt-form--label-right" action="{{route('seller.pelanggan.update',[$pelanggan->id])}}" method="POST">
          {{csrf_field()}}           
          {{ method_field('PUT') }}         

            <div class="kt-portlet__body">
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Nama Pelanggan</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="{{$pelanggan->nama}}">
                </div>
              </div>

              <!--  -->
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>No HP / Telepon</label>
                  <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{$pelanggan->no_hp}}">
                </div>
              </div>

              <!--  -->
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$pelanggan->tgl_lahir}}">
                </div>
              </div>

              <!--  -->

              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Jenis Kelamin:</label>
                  <div class="kt-radio-inline">
                    <label class="kt-radio kt-radio--solid">
                      <input type="radio" name="jkel" id="jkel" checked value="{{$pelanggan->jkel}}"> Laki - laki
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

              <!--  -->

              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Alamat</label>
                  <textarea type="text" name="alamat" id="alamat" class="form-control">{{$pelanggan->alamat}}</textarea>
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