@extends('admin.index')

@section('content')
 
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="kt-portlet">
      <div class="kt-portlet__body  kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
          <div class="col-md-12 col-lg-6 col-xl-3">
            	<div class="kt-widget24">
                <div class="kt-widget24__details">
                  <div class="kt-widget24__info">
                    <h4 class="kt-widget24__title">
                      Total Profit
                    </h4>
                    <span class="kt-widget24__desc">
                      All Customs Value
                    </span>
                  </div>
                  <span class="kt-widget24__stats kt-font-brand">
                  </span>
                </div>
                <div class="progress progress--sm">
                  <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="kt-widget24__action">
                  <span class="kt-widget24__change">
                    Change
                  </span>
                  <span class="kt-widget24__number">
                    78%
                  </span>
                </div>
              </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-3">
              <div class="kt-widget24">
                <div class="kt-widget24__details">
                  <div class="kt-widget24__info">
                    <h4 class="kt-widget24__title">
                      New Feedbacks
                    </h4>
                    <span class="kt-widget24__desc">
                      Customer Review
                    </span>
                  </div>
                  <span class="kt-widget24__stats kt-font-warning">
                    1349
                  </span>
                </div>
                <div class="progress progress--sm">
                  <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="kt-widget24__action">
                  <span class="kt-widget24__change">
                    Change
                  </span>
                  <span class="kt-widget24__number">
                    84%
                  </span>
                </div>
              </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="kt-widget24">
              <div class="kt-widget24__details">
                <div class="kt-widget24__info">
                  <h4 class="kt-widget24__title">
                    New Orders
                  </h4>
                  <span class="kt-widget24__desc">
                    Fresh Order Amount
                  </span>
                </div>
                <span class="kt-widget24__stats kt-font-danger">
                  567
                </span>
              </div>
              <div class="progress progress--sm">
                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="kt-widget24__action">
                <span class="kt-widget24__change">
                  Change
                </span>
                <span class="kt-widget24__number">
                  69%
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-3">
              <div class="kt-widget24">
                <div class="kt-widget24__details">
                  <div class="kt-widget24__info">
                    <h4 class="kt-widget24__title">
                      New Users
                    </h4>
                    <span class="kt-widget24__desc">
                      Joined New User
                    </span>
                  </div>
                  <span class="kt-widget24__stats kt-font-success">
                    276
                  </span>
                </div>
                <div class="progress progress--sm">
                  <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="kt-widget24__action">
                  <span class="kt-widget24__change">
                    Change
                  </span>
                  <span class="kt-widget24__number">
                    90%
                  </span>
                </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <div class="row row-full-height">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget26">
              <div class="kt-widget26__content">
                <span class="kt-widget26__number">570</span>
                <span class="kt-widget26__desc">Total Sales</span>
              </div>
              <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                <canvas id="kt_chart_quick_stats_1"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="kt-space-20"></div>
        <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget26">
              <div class="kt-widget26__content">
                <span class="kt-widget26__number">640</span>
                <span class="kt-widget26__desc">Completed Transactions</span>
              </div>
              <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                <canvas id="kt_chart_quick_stats_2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget26">
              <div class="kt-widget26__content">
                <span class="kt-widget26__number">234+</span>
                <span class="kt-widget26__desc">Transactions</span>
              </div>
              <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                <canvas id="kt_chart_quick_stats_3"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="kt-space-20"></div>
        <div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget26">
              <div class="kt-widget26__content">
                <span class="kt-widget26__number">4.4M$</span>
                <span class="kt-widget26__desc">Paid Comissions</span>
              </div>
              <div class="kt-widget26__chart" style="height:100px; width: 230px;">
                <canvas id="kt_chart_quick_stats_4"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection