<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('front.includes.head', ['title' => 'Contact Us & Support Centre - sladehq'])
    <body>
        @include('front.includes.nav')

        <div class="container bg-white pt-25 pb-50">
            <div class="col-md-12 support-centre text-center mb-0 pb-0">
                <h1 class="text-darkgreen font-stripe-thin fw-300">Support Centre</h1>
                <h2 class="font-stripe-thin fw-300 mt-5">Get in touch if you're experience difficulties.</h2>

            </div>

            <div class="row text-center">
                <div class="col-md-4">
                    <div class="col-md-11 support-card">
                        <div class="col-md-12">
                            <img src="images/icons/svg/020-handshake.svg" width="64" height="64" alt="shake-hand image">
                            <h4 class="text-info fw-300 pt-10">Sales & Enquiries</h4>
                            <p class="text-greyish">sdf</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-11 support-card">
                        <img src="images/icons/svg/025-chat.svg" width="64" height="64" alt="chat image">
                        <h4 class="text-info fw-300 pt-10">Support</h4>
                        <p class="text-greyish">sdf</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-11 support-card">
                        <img src="images/icons/svg/006-panel.svg" width="64" height="64" alt="panel image">
                        <h4 class="text-info fw-300 pt-10">Frequently Asked Questions</h4>
                        <p class="text-greyish">sdf</p>
                    </div>
                </div>
            </div>

        </div>



    </body>
</html>
