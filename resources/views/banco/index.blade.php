@extends('layouts.app')
@section('content')
<div class="container">
    <div class="app-title">
        <h1>
          <i class="fa fa-edit">Lista Banco</i>
        </h1>  
        <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="">Menu Principal</li>
          </ul>
     </div>

    <div class="container">
        <div class="tile">
            <div class="tile-body">
              <form>
                 <div class="col-sm-12">
                     <div class="form-group">
                       <label class="control-label col-sm-1">Nome:</label>
                       <input class="form-control col-sm-9" 
                          placeholder="Informe um nome"/>
                       <div class="col-sm-2">
                          <button type="submit"
                                  class="btn btn-primary">
                                  Pesquisar<i class="fa fa-search-plus"></i>
                          </button>
                       </div>  
                     <div> 
                 </div>     
              </form>
            </div>
        </div>
    </div> 

    <div class="container"> 
        <div class="tile">
          <div class="tile-body">
            <div id="no-more-tables">
                <table class="table table-striped table-bordered table-over cf">
                  <thead class="cf">
                      <tr>
                        <th style="font-weight:bold; text-align:center">ID</th>
                        <th style="font-weight:bold; text-align:center">Código</th>
                        <th style="font-weight:bold; text-align:center">Nome</th>
                        <th style="font-weight:bold; text-align:center">Ações</th>   
                      </tr>

                  </thead>
                  <tbody>
                      @foreach($dados as $dado)
                        <tr>
                            <td data-title="ID" style="text-align:center">{{ $dado->id   }}</td>
                            <td data-title="Código">{{ $dado->codigo }}</td>
                            <td data-title="Nome">{{ $dado->nome }}</td>
                            <td data-title="Ações" style="text-align:center">
                              <a class="btn btn-info btn-sm"
                                 href="{{ url('/banco/alterar', $dado->id)}}"><i class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-sm"
                                href="{{ url('/banco/excluir', $dado->id)}}"><i class="fa fa-trash"></i>
                              </a>
                            </td>                                     
                          </tr> 
                      @endforeach 
              
                  </tbody>  

                </table>
                <a class="btn btn-success btn-lg" href="{{ url('/banco/incluir')}}">
                   Incluir Novo Banco<i class="fa fa-plus-circle"></i></a>   
            </div>
           </div>  
        </div>
    </div>

</div> 
@endsection