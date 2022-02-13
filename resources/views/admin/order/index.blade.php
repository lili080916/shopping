@extends('admin.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fab fa-cc-paypal icon-home"></i>PEDIDOS</h1>
    </div><br>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ver Detalle</th>
                        <th>Eliminar</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Subtotal</th>
                        <th>Envío</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                                <a href="" 
                                    class="btn btn-primary btn-detalle-pedido" 
                                    data-id="{{ $order->id }}"
                                    data-path="{{ route('order.getItems') }}"
                                    data-toggle="modal"
                                    data-target="#myModal"
                                    data-token="{{ csrf_token() }}">
                                    <i class="fa fa-external-link"></i>
                                </a>
                                
                            </td>
                            <td>
                                {!! Form::open(['route'=>array('order.destroy', $order->id)]) !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onClick="return confirm('Eliminar pedido ?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                               {!! Form::close() !!}
                            </td>
                            <td>{{ $order->created_at}}</td>
                            <td>{{ $order->user->name." ".$order->user->last_name }}</td>
                            <td>${{ number_format($order->subtotal, 2)}}</td>
                            <td>${{ number_format($order->shipping, 2)}}</td>
                            <td>${{ number_format($order->subtotal + $order->shipping, 2)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div>
            {{ $orders->links() }}
        </div>
    </div>
</div>

@include('admin.partials.modal-detalle-pedido')

@stop