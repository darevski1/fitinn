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
                                <form method="POST"  action="{{ route('products.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Наслов на Јадење</label>
                                            <input type="text" class="form-control" id="product_title" name="product_title" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Наслов на Јадење</label>
                                            <textarea name="description" class="form-control"id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="from-group">
                                            <select class="form-control">
                                                @foreach ($category as $c) 
                                                    <option>{{$c->category_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="exampleInputEmail1">Цена</label>
                                            <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp">
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Калории:</label>
                                                    <input type="text" class="form-control" id="calories" name="calories" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Масти:</label>
                                                    <input type="text" class="form-control" id="fat" name="fat" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Протени:</label>
                                                    <input type="text" class="form-control" id="protein" name="protein" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Јагленихидрати:</label>
                                                    <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                         
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Линк за Клини Јадни</label>
                                            <input type="text" class="form-control" id="line_one" name="line_one" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Линк за Корпа</label>
                                            <input type="text" class="form-control" id="line_two" name="line_two" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Линк за Fodd Guru</label>
                                            <input type="text" class="form-control" id="line_three" name="line_three" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            Select files:  
                                            <input type="file" name="file[]"  class="upload" multiple >
                                        </div>
                                        <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-primary">Зачувај</button>
                                            </div>
                                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
