@extends('website.ecommerce.layouts.ecommerce')
@section('content')
<div class="main-container">

    <div class="contuct-area">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="contuct mb-50 bg-fff box-shadow p-20">
                        <div class="contuct-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="contuct-form form-style">
                            <form action="#">
                                <span>Your Name (required)</span>
                                <input type="text">
                                <span>Your Email (required)</span>
                                <input type="email">
                                <span>Subject</span>
                                <input type="text">
                                <span>Your Message</span>
                                <textarea name="#" id="#" cols="30" rows="10"></textarea>
                                <button>send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="contuct-detail mb-50 p-20 bg-fff box-shadow">
                        <div class="contuct-title">
                            <h2>Contact detail</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis sed neque vitae bibendum. Nunc auctor dictum risus, a finibus eros iaculis nec. Sed et euismod felis, non euismod est. Maecenas quis nulla ullamcorper, imperdiet lacus et, porta sem.</p>
                        <div class="same">
                            <h5>OFFICE ADDRESS</h5>
                            <p>Maecenas quis nulla ullamcorper</p>
                        </div>
                        <div class="same">
                            <h5>EMAIL</h5>
                            <p>lion-themes@gmail.com</p>
                        </div>
                        <div class="same">
                            <h5>PHONE NUMBER</h5>
                            <p>025 1234 5678 - 025 1234 5779</p>
                        </div>
                        <div class="same">
                            <h5>TIME HOURS</h5>
                            <p>Monday to Friday: 10am to 7pm</p>
                            <p>Saturday: 10am to 4pm</p>
                            <p>Sunday: 12am to 4pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
