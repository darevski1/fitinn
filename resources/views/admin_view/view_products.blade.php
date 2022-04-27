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
                    <div class="row">
                        <div class="col-sm-12 pull-right mb-5">
                             <a href="{{route('products.create')}}" type="button" class="btn btn-primary">Креирај нов продукт</a>
                        </div>
                    </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
              
                  <ul class="product_list">

                  @foreach ($product as $p) 

                      <li>
                          <div class="product_l">
                              <div class="ig-container">
                                  @foreach($p->photos->take(1) as $photo)
                                         <img src="{{asset('assets/images/food/'.$photo->photo_name)}}"  alt="" class="img-b img-fluid">
                                  @endforeach
                                </div>
                                <div class="product_desc">
                                    <h2>{{$p->product_title}}</h2>
                                    <p>{{$p->description}}</p>
                                    <div class="button_container">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Промени</button>
                                            @if($p->status === "1")
                                                 <button type="button" class="btn btn-secondary">Деактвирај</button>
                                            @else
                                                    <button type="button" class="btn btn-danger">Aktiviraj</button>
                                            @endif
                                    <form method="POST" action="{{ route('products.destroy', $p->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Избриши</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                  </ul>           
                                 
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST"  action="{{ route('products.store') }}">
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
                                                <option>Default select</option>
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
                                        <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-primary">Зачувај</button>
                                            </div>
                                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Зачувај</button>
        <button type="button" class="btn btn-primary">Откажи</button>
      </div>
    </div>
  </div>
</div>
@endsection
