@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="spareparts">
    <div class="container-lg py-5">
        <h1 class="fw-bold txt-black mb-5">
            Spare-parts Catalogue
        </h1>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-6 c-pointer" onclick="window.location.href='{{route('sparepartDetails')}}'">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <a class="text-decoration-none" href="#" aria-label="product link">Sparepart Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ea.</a> 
                            <span class="bg-blue fw-bold">Ready</span>
                            <p class="txt-blue fw-bold">Rp1.500.000</p>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
