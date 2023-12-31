@extends('guest.layouts.layout')
@section('content')

    @include('guest.includes.navbanner')

    @include('guest.includes.google-map')

    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="contact-form form-style">
                        <div class="cf-msg"></div>
                        <form action="{{ route('contact.store') }}" method="POST" id="cf">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" placeholder="Name" id="fname" name="fname">
                                </div>
                                <div class="col-12  col-sm-6">
                                    <input type="text" placeholder="Email" id="email" name="email">
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="Subject" id="subject" name="subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="contact-textarea" placeholder="Message" id="msg" name="msg"></textarea>
                                </div>
                                <div class="col-12">
                                    <button id="submit" name="submit" type="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="contact-wrap">
                        <ul>
                            <li>
                                <i class="fa fa-home"></i> Address:
                                <p>Dschang </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> Email address:
                                <p>
                                    <span><a href="mailto:tegonguefolefackf@gmail.com">tegonguefolefackf@gmail.com</a href></span>
                                    <span><a href="mailto:gabrielwilfried0808@gmail.com">gabrielwilfried0808@gmail.com</a href> </span>
                                     <span><a href="mailto:geniekamaha@gmail.com">geniekamaha@gmail.com"</a href> </span>




                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> phone number:

                               <p>
                                    <span><a href="https://web.whatsapp.com/send?phone=237672044430">+237 672 044 430</a></span>
                                    <span><a href="https://web.whatsapp.com/send?phone=237652249235">+237 652 249 235</a></span>
                                    <span><a href="https://web.whatsapp.com/send?phone=237681916790">+237 681 916 790</a></span>
                                    <span><a href="https://web.whatsapp.com/send?phone=237674707344">+237 674 707 344</a></span>
                                    <span><a href="https://web.whatsapp.com/send?phone=237677896268">+237 677 896 268</a></span>


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- @section('script')
    <script src="{{ asset('assets/js/contact.js') }}"></script>
@endsection -->
