@extends('layouts.main')

@section('body')

<div class="jumbotron bg-light shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header"><h5>Indicadores de Liquidez</h5></div>
                 
                <div class="card-body">

                    <div class="row text-center">
                        
                        <h6 class=" col-12 col-md-12">Liquidez Geral</h6>
                        
                    </div>

                    <div class="row text-center">
                        
                        <div class="col-12 col-md-12 position-relative"> <img src="https://img.icons8.com/color/48/000000/sales-performance.png"/></div>
                        
                    </div>
                    
                    <p class="card-text text-justify"><small class="font-weight-lighter">
                        Qual a CAPACIDADE TOTAL DE PAGAMENTO de minha empresa, 
                        considerando tudo que ela converterá em dinheiro 
                        a curto e longo prazo, com tudo que já assumiu como dívida?
                   </small> </p>


                    <form>
                        <div class="form-group">
                          <label><small> Duplicatas a Receber</small></label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label><small> Vendas Brutas </small></label>
                          <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm border">Calcular</button>
                        <button type="submit" class="btn btn-danger btn-sm border">Voltar</button>
                      </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

@endsection