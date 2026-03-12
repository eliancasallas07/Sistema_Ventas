@extends('layouts/app')
@section('titulo', 'Mi perfil')
<style>
    .contenedor {
        background: white;
        padding: 20px 30px;
        display: flex;
        gap: 40px;
        border-radius: 14px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        margin: 40px auto;
        width: fit-content;
        align-items: center;
        justify-content: center;
    }

    .img_perfil {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 130px;
    }

    .img_perfil img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        margin-bottom: 12px;
    }

    .img_perfil h6,
    .perfil-form h6 {
        font-weight: bold;
        margin: 0 0 10px 0;
        text-align: center;
    }

    .perfil-form {
        display: flex;
        flex-direction: column;
        min-width: 250px;
    }

    .perfil-form form {
        width: 100%;
    }

    .perfil-form .alert,
    .perfil-form input[type="file"] {
        margin-bottom: 10px;
    }

    .perfil-form .btn {
        margin-right: 10px;
        min-width: 120px;
    }
</style>
@section('content')

@if (@session('mensaje'))

<script>
    $(function notification(){
        new PNotify({
            title:"CORRECTO",
            type:"success",
            text:"{{ session('mensaje')}}",
            styling: "bootstrap3"
        });
    });
</script>
    
@endif

@if (@session('error'))

<script>
    $(function notification(){
        new PNotify({
            title:"INCORRECTO",
            type:"error",
            text:"{{ session('error')}}",
            styling: "bootstrap3"
        });
    });
</script>
    
@endif
 
    @foreach ($datos as $item)
        <h4 class="text-center text-secondary">MI PERFIL</h4>


        <div class="contenedor">
            <div class="img_perfil">
                <img src="https://i.pinimg.com/736x/f4/35/3e/f4353e7df426107ce0613e739c2035c3.jpg" alt="">
            </div>
            <div class="perfil-form">
                <h6>Modificar imagen</h6>
                <form action="{{ route('perfil.actualizarIMG') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="alert alert-secondary">
                        Selecciona una imagen no muy <b>pesado</b> y en un formato <b>válido</b> ...!
                    </div>
                    <div>
                        <input type="file" class="input form-control-file" name="foto" accept=".jpg, .png, .jpe, .gif, .svg">
                        @error('foto')
                          <span class="text-danger"> Mensaje de Error {{$message}}</span>  
                        @enderror
                        
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success btn-rounded">
                            <i class="fa fa-save"></i> Modificar perfil
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded">
                            <i class="fa fa-trash"></i> Eliminar foto
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <form action=""class="bg-white p-3 ">
            <div class="row">
            {{--
           <div class="fl-flex-label col-12 col-lg-6 mb-4">
                <input type="number" class="input input__text" placeholder="DIN" value="{{$item->dni}}">
            </div>
            --}}

                <div class="fl-flex-label col-12 col-lg-6 mb-4">
                    <input type="text" class="input input__text" placeholder="Nombres" value="{{ $item->nombre }}">
                </div>

                <div class="fl-flex-label col-12 col-lg-6 mb-4">
                    <input type="text" class="input input__text" placeholder="Apellido"value="{{ $item->apellido }}">
                </div>

                <div class="fl-flex-label col-12 col-lg-6 mb-4">
                    <input type="text" class="input input__text" placeholder="Usuario"value="{{ $item->usuario }}">
                </div>

                <div class="fl-fex-label col-12 col-lg-6 mb-4">
                    <input type="number" class="input input__text" placeholder="Telefono"value="{{$item->telefono}}">
                </div>

                <div class="fl-fex-label col-12 col-lg-6 mb-4">
                    <input type="text" class="input input__text" placeholder="Direccion" value="{{$item->direccion}}">
                </div>

                <div class="fl-fex-label col-12 col-lg-6 mb-4">
                    <input type="email" class="input input__text" placeholder="Correo" value="{{$item->correo}}">
                </div>

                
            </div>
        </form>
    @endforeach


@endsection
