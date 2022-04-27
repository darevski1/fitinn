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
 

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form action=" {{ route('category.update', [$category->id]) }}" method="POST">
                {{method_field('PATCH')}}
                {{ csrf_field() }}   
                        <div class="form-group">
                            <label for="formControlRange">Име на нова категорија</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Зачувај</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
