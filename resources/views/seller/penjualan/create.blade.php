@extends('seller.index')

@section('content')

<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data Pembelian
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <table id="table_penjualan" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Penjualan</th>
                        <th>ID Customer</th>
                        <th>ID Produk</th>
                        <th>Tanggal Pembelian</th>
                        <th>Total Pembelian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end:: Content -->

<!--  -->

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
                <form class="kt-form kt-form--label-right" action="{{url('seller/penduduk')}}" method="POST">
                    {{csrf_field()}}

                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ID Customer</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama penduduk">
                                <span class="form-text text-muted">Tolong masukkan nama lengkap penduduk</span>
                            </div>
                            <div class="col-lg-6">
                                <label class="">ID Produk:</label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Masukkan alamat penduduk"></textarea>
                                <span class="form-text text-muted">Tolong masukkan alamat penduduk</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Jumlah Pembelian</label>
                                <div class="kt-input-icon">
                                    <input type="number" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="Masukkan nomor telp penduduk">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan nomor penduduk</span>
                            </div>
                            <!--  -->
                            <div class="col-lg-6">
                                <label>Harga Pembelian</label>
                                <div class="kt-input-icon">
                                    <input type="number" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="Masukkan nomor telp penduduk">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan nomor penduduk</span>
                            </div>
                            <!--  -->
                            
                        </div>
                        <!--  -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Tangal Pembelian</label>
                                <div class="kt-input-icon">
                                    <input type="date" name="no_hp" id="no_hp" class="form-control"
                                        placeholder="Masukkan nomor telp penduduk">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--right"></span>
                                </div>
                                <span class="form-text text-muted">Tolong masukkan nomor penduduk</span>
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
<script src="{{ asset('js/seller/datatable/penjualandatatable.js')}}" type="text/javascript"></script>

@endpush
