@extends('admin.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> PRODUCTOS <small>[Agregar producto]</small></h1>
    </div><br>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                  @include('admin.partials.errors')
                @endif
                
                {!! Form::open(['route'=>'product.store']) !!}
                    
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        {!! Form::text('name', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingresa el nombre del producto',
                                         'autofocus'=>'autofocus'
                                        ]
                                    ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label class="control-label" for="category_id">Categoría</label>
                        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                    </div><br>

                    <div class="form-group">
                        <label for="extract">Extracto</label>
                        {!! Form::text('extract', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingresa el extracto',
                                        ]
                                    ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                        {!! Form::textarea('description', null, ['class'=>'form-control'])!!}
                    </div><br>

                    <div class="form-group">
                        <label for="price">Precio</label>
                        {!! Form::text('price', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingresa el precio',
                                        ]
                                    ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="image">Imagen</label>
                        {!! Form::text('image', 
                                        null, 
                                        ['class'=>'form-control', 
                                         'placeholder'=>'Ingresa la url de la imagen',
                                        ]
                                    ) 
                        !!}
                    </div><br>

                    <div class="form-group">
                        <label for="visible">Visible</label>
                        {!! Form::checkbox('visible', null, ['class'=>'form-control']) !!}
                    </div><br>

                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('product.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@stop