@extends('seller.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="">
                    <div class="kt-portlet__body">
                        <table id="table_nabati" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>

                                    <th>Nama Penduduk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($produk as $nabati)
                                <tr>

                                    <td>{{$nabati->villager->nama}}</td>
                                    <td>{{$nabati->nama}}</td>
                                    <td>{{$nabati->harga}}</td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">


    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Input Penjualan
                        </h3>
                    </div>
                </div>

                <form class="kt-form kt-form--label-right" action="{{url('seller/penjualan')}}" method="POST">
                    {{csrf_field()}}

                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="form-label">Pelanggan</label>

                                <select class="form-control m-select2" id="id_customer" name="id_customer">
                                    @foreach ($customer as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Produk</label>

                                <select class="form-control m-select2" id="id_product" name="id_product">
                                    @foreach ($produk as $pro)
                                    <option value="{{ $pro->id }}">{{ $pro->nama}}</option>
                                    @endforeach
                                </select>
                                <span class="form-text text-muted">Tolong masukkan alamat penduduk</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Jumlah Penjualan</label>
                                <div class="kt-input-icon">
                                    <input type="number" name="jumlah_beli" id="jumlah_beli" class="form-control"
                                        placeholder="Masukkan jumlah penjualan">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan jumlah penjualan</span>
                            </div>
                            <!--  -->
                            <div class="col-lg-6">
                                <label>Harga Penjualan</label>
                                <div class="kt-input-icon">
                                    <input type="number" name="harga" id="harga" class="form-control"
                                        placeholder="Masukkan harga produk">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan harga produk</span>
                            </div>
                            <!--  -->

                        </div>
                        <!--  -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Tangal Penjualan</label>
                                <div class="kt-input-icon">
                                    <input type="date" name="tanggal_beli" id="tanggal_beli" class="form-control"
                                        placeholder="Masukkan tanggal pembelian">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan tanggal pembelian</span>
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
@push('footer-scripts')
<script src="{{ asset('js/seller/datatable/nabatidatatable.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/seller/datatable/penjualandatatable.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/function/select2/customerSelect2.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/function/select2/productSelect2.js')}}" type="text/javascript"></script>
@endpush
