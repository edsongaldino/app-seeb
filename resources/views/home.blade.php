@extends('layout')
@section('conteudo')
      
        <div class="pd-30">
          <h4 class="tx-gray-800 mg-b-5">Home</h4>
          <p class="mg-b-0">Visão geral dos cadastros e relatórios</p>
        </div><!-- d-flex -->
  
        <div class="br-pagebody mg-t-5 pd-x-30">
          
          <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
              <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Crianças</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">105</p>
                    <span class="tx-11 tx-roboto tx-white-6">Número total de crianças cadastradas</span>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-danger rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Jovens</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">26</p>
                    <span class="tx-11 tx-roboto tx-white-6">Quantidade de jovens participantes</span>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Adultos</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">89</p>
                    <span class="tx-11 tx-roboto tx-white-6">Número total de assistidos adultos</span>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-br-primary rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Trabalhadores</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">35</p>
                    <span class="tx-11 tx-roboto tx-white-6">Quantidade de trabalhadores cadastrados</span>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row row-sm mg-t-20">
            <div class="col-12">
              <div class="card pd-0 bd-0 shadow-base">
                <div class="pd-x-30 pd-t-30 pd-b-15">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Gráfico de Desempenho</h6>
                      <p class="mg-b-0">Evolução em relação aos anos anteriores</p>
                    </div>
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle bg-purple mg-r-10"></span> Quantidade de Assistidos</p>
                      <p class="mg-b-0"><span class="square-8 rounded-circle bg-pink mg-r-10"></span> Quantidade de Trabalhadores</p>
                    </div>
                  </div><!-- d-flex -->
                </div>
                <div class="pd-x-15 pd-b-15">
                  <div id="ch1" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
                </div>
              </div><!-- card -->
  
            </div><!-- col-9 -->

          </div><!-- row -->

        </div><!-- br-pagebody -->

@endsection