@extends('layouts.main')

@section('content')
<main>
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Достава на храна</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </main>
    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>  Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @if(count($productlist) == 0)
                    <h1>nema</h1>
                 @else
                 @foreach($productlist as $list)
                    
              

                <div class="col-xl-6 col-md-6 col-lg-6 mt-2">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>{{$list->product_title}}</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>$5</span>
                        </div>
                    </div>
                </div>
   
                @endforeach 
                 @endif
            </div>
        </div>
    </div>
 
@endsection
