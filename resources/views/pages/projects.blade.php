@extends('layouts.app')
@section('content')
<div class="portfolio" id="portfolio">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Projects</h2>
                        </div>
                        <div class="row portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="{{ asset('assets/img/portfolio-1.jpg') }}" class="img-fluid" alt="">
                                        <a href="{{ asset('assets/img/portfolio-1.jpg') }}" data-lightbox="portfolio" data-title="Project Name" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="#">Project Name <span>Web Design</span></a>
                                    </figure>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="{{ asset('assets/img/portfolio-1.jpg') }}" class="img-fluid" alt="">
                                        <a href="{{ asset('assets/img/portfolio-1.jpg') }}" data-lightbox="portfolio" data-title="Project Name" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                        <a class="portfolio-title" href="#">Project Name <span>Web Design</span></a>
                                    </figure>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
@endsection