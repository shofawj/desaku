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
                    Data Penjualan
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
                        <a href="{{ route('seller.penjualan.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Tambah Data </a>
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
                        <th>Jumlah Penjualan</th>
                        <th>Harga</th>
                        <th>Total Penjualan</th>
                        <th>Tanggal Penjualan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($penjualan as $seles)
                    <tr>
                        <td>{{$seles->id}}</td>
                        <td>{{$seles->id_customer}}</td>
                        <td>{{$seles->id_product}}</td>
                        <td>{{$seles->jumlah_beli}}</td>
                        <td>{{$seles->harga}}</td>
                        <td>{{$seles->total_harga}}</td>
                        <td>{{$seles->tanggal_beli}}</td>
                        <td width="15%">
                            <div class="action">
                                <ul>
                                    <li> <a href="{{route('seller.penjualan.edit',[$seles->id])}}" class="btn btn-primary">Edit</a></li>
                                    <li>
                                        <form action="{{ route('seller.penjualan.destroy', [$seles->id]) }}"
                                            method="POST">
                                            <input type="hidden" name="_method" value="Delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>

                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end:: Content -->
@endsection

@push('footer-scripts')

<script src="{{ asset('js/seller/datatable/penjualandatatable.js')}}" type="text/javascript"></script>

@endpush
