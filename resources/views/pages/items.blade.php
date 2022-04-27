@extends('layouts.main')

@section('content')
   
    <div class="into_sider">    
        <div class="container">
          <div class="row">
             
                 @if(count($productlist) == 0)
                    <h1>nema</h1>
                 @else
                 @foreach($productlist as $list)
                    {{$list->product_title}}
                 @endforeach 
                 @endif
          </div>
      </div>
    </div>
@endsection
