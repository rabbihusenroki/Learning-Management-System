@extends('Layout.app')
@section('title','Conact')
@section('content')

    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                <h1 class="page-top-title mt-3">- যোগাযোগ করুন  -</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14468.91373537218!2d91.8707201!3d24.9583415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60a4e8497fb273a0!2sOsmani%20International%20Airport%2C%20Sylhet!5e0!3m2!1sen!2sbd!4v1626360607726!5m2!1sen!2sbd" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <h3 class="service-card-title">ঠিকানা</h3>
                <hr>
                <p class="footer-text"><i class="fas fa-map-marker-alt"></i> ওসমানী আন্তর্জাতিক বিমানবন্দর, সিলেট <i class="fas ml-2 fa-phone"></i>   ০১৮৯৩৯০৪৬৮৬  <i class="fas ml-2 fa-envelope"></i>wp.dev.tahsin786@gmail.com</p>
                <h3 class="service-card-title">মেসেজ পাঠান </h3>
                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtnId"  class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
            </div>
        </div>
    </div>
@endsection

