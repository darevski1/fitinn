@extends('layouts.main')

@section('content')
    <div class="heading">
            <div id="carouselExampleSlidesOnly" class="carousel slide main_carouser" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('/assets/images/slider/img-1.jpg')}}" class="d-block w-100" alt="...">            </div>
                    <div class="carousel-item">
                    <img src="{{asset('/assets/images/slider/img-2.jpg')}}" class="d-block w-100" alt="...">            </div>
                    <div class="carousel-item">
                    <img src="{{asset('/assets/images/slider/img-3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
    </div>
    <div class="into_sider">
        <div class="row">
           <div class="container">
            <div class="col-md-7">
            
            </div>
            <div class="col-md-5">
               
            </div>
           </div>
        </div>
    </div>
@endsection
