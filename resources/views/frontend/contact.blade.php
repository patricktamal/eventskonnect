@extends('frontend.master', ['activePage' => 'contact'])

@section('content')
 
    @include('frontend.layout.breadcrumbs', [
        'title' => __('Contact Us'),            
        'page' => __('Contact'),            
    ]) 

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-map box">
                    <div id="contact_map" class="contact-map map">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 section-t8">
                <div class="row">
                    <div class="col-md-7">
                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="{{__('Your Name')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="{{__('Your Email')}}" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="{{__('Subject')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="{{__('Message')}}"></textarea>
                                <div class="validate"></div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-a">{{__('Send Message')}}</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 pl-5 section-md-t3">
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                            <span class="ion-ios-paper-plane"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                            <div class="icon-box-title">
                                <h4 class="icon-title">{{__('Find Us')}}</h4>
                            </div>
                            <div class="icon-box-content">
                                <p class="mb-3 text-center" >
                                    <img src ="{{url('images/upload/'.\App\Models\Setting::find(1)->favicon)}}" width="70px" height="70px">
                                </p>
                                <p class="mb-1">{{__('Email')}}: 
                                <span class="color-a">{{\App\Models\Setting::find(1)->email}}</span>
                                </p>
                               
                            </div>
                            </div>
                        </div>
                     
                        <div class="icon-box">
                            <div class="icon-box-icon">
                            <span class="ion-ios-redo"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                            <div class="icon-box-title">
                                <h4 class="icon-title">{{__('Social networks')}}</h4>
                            </div>
                            <div class="icon-box-content">
                                <div class="socials-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" class="link-one">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    </li>
                                    <li class="list-inline-item">
                                    <a href="https://twitter.com/" class="link-one">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    </li>
                                    <li class="list-inline-item">
                                    <a href="https://www.instagram.com/" class="link-one">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    </li>
                                    <li class="list-inline-item">
                                    <a href="https://in.pinterest.com/" class="link-one">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </a>
                                    </li>
                                   
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection