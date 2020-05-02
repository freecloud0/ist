@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header badge-primary">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

         <form action="">
            <div class="form-group">
                <label for="">Categoria</label>
                <select name="category_id" id="" class="form-control"></select>
            </div>
            <div class="form-group">
                <label for="">Severidad</label>
                <select name="severity" id="" class="form-control">
                    <option value="M">Menor</option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar incidencia</button>
            </div>
        </form>
    </div>
</div>
@endsection
