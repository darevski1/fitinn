@extends('layouts.main')

@section('content')
   
    <div class="into_sider">    
        <div class="container">
          <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4">
                      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                      <h2><a href=" {{ route('items/', [$category->id]) }}">{{$category->category_name}}</a></h2>
                    </div><!-- /.col-lg-4 -->
                 @endforeach 
          </div>
      </div>
    </div>
@endsection
