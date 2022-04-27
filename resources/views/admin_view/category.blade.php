@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="col-sm-12 text-right mb-5 mt-5">
            <h3>Додади Нова категорија</h3>
         <button type="button" class="btn btn-primary mb-5">Додади Нова</button>

         <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('category.store') }}">
                     @csrf
                        <div class="form-group">
                            <label for="formControlRange">Име на нова категорија</label>
                            <input type="text" class="form-control" id="category_name" name="category_name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Зачувај</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Име на категорија</th>
                        <th scope="col">Промени</th>
                        <th scope="col">Бриши</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach ($category as $c)
                            <th scope="row">{{ $c->id }}</th>
                                <td>
                                    <div class="div" id="category_{{$c->id}}">
                                        {{ $c->category_name }}</td>
                                    </div>
                               
                                <td>
                                    <a href="{{route ('category.edit', $c->id)}}" type="button" class="btn btn-success" >Промени</a>
                                    <!-- <form method="POST" action="{{ route('category.edit', $c->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Зачувај</button>
                                    </form> -->
                                </td>
                                <td>
                                   <form method="POST" action="{{ route('category.destroy', $c->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
