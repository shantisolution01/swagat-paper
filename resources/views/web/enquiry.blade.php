@extends('web.layouts.app')

@section('content')
    <div class="enquiry-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enquiry-title-heading">
                            <h1 class="h1-title">ENQUIRY</h1>
                        </div><!-- /.page-title-heading -->

                        <div class="elementor-divider">
                            <h2><span><img class="logo-img" src="{{ url('public/web/assets/images/swagat.png') }}"
                                        alt="logo" /></span></h2>
                        </div>

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="flat-row flat-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 style="color:black;">ENQUIRY FORM</h2>
                        <p>Thank you for visiting our web site. If you wish to find out more about our products and company, kindly fill up the following enquiry form and press the submit button. A representative from our dealers will reply your enquiry shortly. Please ensure that all the blanks are properly filled.</p>
                    </div>
                    <div class="form-contact-form">
                        <form id="contactform" action="{{route('enquiry.send-message')}}" method="post" accept-charset="utf-8">
                            @csrf
                            <div id="subscribe-content-1">
                                <div class="field-row">
                                    <div class="contact-form-name contact-form">
                                        <input type="text" name="company" id="company" placeholder="Company Name" required="" />
                                    </div>
                                    <div class="contact-form-name contact-form">
                                        <input type="text" name="name" id="name" placeholder="Your Name" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="email" name="email" id="email" placeholder="Your Email" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="text" name="phone" id="phone" placeholder="Your Contact Number" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="text" name="city" id="city" placeholder="Your City" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="text" name="country" id="country" placeholder="Your Country" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="text" name="post_code" id="post_code" placeholder="Your Post Code" required="" />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="url" name="website" id="website" placeholder="Your Website" required="" />
                                    </div>
                                </div>
                                <div class="contact-form-comment contact-form">
                                    <textarea name="message" id="message" placeholder="Your Message" required=""></textarea>
                                </div>

                                <div class="btn-contact-form center">
                                    <button type="submit" class="flat-button-form border-radius-2">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form><!-- /form -->
                    </div><!-- /.form-contact-form -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-contact-form -->

    @endsection
