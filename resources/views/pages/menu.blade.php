@extends('layouts.main')
@section('content')
<main>
<div class="booking-area section-bg pt-120 pb-130" data-background="assets/img/gallery/section_bg04.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-40">
                            <span>About Our Restaurant</span>
                            <h2>Нашето Мени</h2>
                        </div> 
                    </div>
                </div>
               
            </div>
        </div>

<section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-3 d-flex justify-content-center align-items-center flex-column ">
                      <div class="image_container cc_shadowd zoom">
                          <img src="https://media-cdn.tripadvisor.com/media/photo-s/1c/2f/33/2d/healthy-bowl-frische.jpg" alt="">
                      </div>
                      <h3 class="mt-3"><a href=" {{ route('items/', [$category->id]) }}">{{$category->category_name}}</a></h3>
                    </div><!-- /.col-lg-4 -->
                 @endforeach 
                </div>
            </div>
        </section>
 
    </main>
 
@endsection
