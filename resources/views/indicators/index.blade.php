@extends('layouts.main')

@section('body')


<div class="jumbotron bg-light shadow-lg p-3 mb-5 bg-white rounded">

        <div class="container">

            <div class="card">
                <div class="card-header"><h4>Indicadores</h4></div>
                <div class="card-body">

                    <div class="row text-center">
                        
                        <h5 class=" col-12 col-md-12">De Atividades</h5>
                        
                    </div>

                    <div class="row text-center">
                        
                        <div class="col-12 col-md-12 position-relative"> <img src="https://img.icons8.com/color/96/000000/payment-history.png"/></div>
                        
                    </div>
                    
                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Prazo Médio de Recebimento de Vendas</a>
                        </div>
                        
                    </div>
                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Prazo Médio de Pagamento de Compras</a>
                        </div>
                    
                    </div>

                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Prazo Médio de Renovação de Estoques</a>
                        </div>
                        
                    </div>
                  
                  
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <div class="row text-center">
                        
                        <h5 class=" col-12 col-md-12">De Liquidez</h5>
                        
                    </div>

                    <div class="row text-center">
                        
                        <div class="col-12 col-md-12 position-relative"> <img src="https://img.icons8.com/color/96/000000/sales-performance.png"/></div>
                        
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-12 col-md-12"> 
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Liquidez Geral</a>
                        </div>
                        
                    </div>
                    <div class="row text-center">
                        <div class="col-12 col-md-12"> 
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Liquidez Corrente</a>
                        </div>
                    
                    </div>                  
                  
                </div>
            </div>


            <div class="card">
                <div class="card-body">

                    <div class="row text-center">
                        
                        <h5 class=" col-12 col-md-12">De Rentabilidade</h5>
                        
                    </div>

                    <div class="row text-center">
                        
                        <div class="col-12 col-md-12 position-relative"> <img src="https://img.icons8.com/color/96/000000/refund.png"/> </div>
                        
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Giro do Ativo</a>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Margem Líquida</a>
                        </div>
                    
                    </div>

                    <div class="row text-center">
                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Taxa de Retorno sobre Investimento</a>
                        </div>
                        
                    </div>
                  
                  
                </div>
            </div>


            <div class="card">
                <div class="card-body">

                    <div class="row text-center">
                        
                        <h5 class=" col-12 col-md-12">De Endevidamento</h5>
                        
                    </div>

                    <div class="row text-center">
                        
                        <div class="col-12 col-md-12 position-relative"> <img src="https://img.icons8.com/color/96/000000/tax.png"/></div>
                        
                    </div>
                    
                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Composição de Endividamenteo</a>
                        </div>
                        
                    </div>
                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Participação de Capital de Terceiros</a>
                        </div>
                    
                    </div>

                    <div class="row text-center">

                        <div class="col-12 col-md-12">
                            <a href="/lg" class="btn btn-light btn-lg btn-block btn-sm border" style="margin-top:10px">Garantia de Capital Próprio ao Capital de Terceiros</a>
                        </div>
                        
                    </div>
                  
                  
                </div>
            </div>


            
        </div>
</div>

@endsection

