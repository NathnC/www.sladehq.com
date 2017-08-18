<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('front.includes.head', ['title' => 'Terms of Service - SladeHQ'])
    <body>
    <div class="main-wrapper" id="app">
        @include('front.includes.nav')

    </div>



    <!-- <div class="col-md-6 pull-left copyrightBlock"-->
    <!-- h1 you style how you would like it, this will be for the main heading of TOS, h2 You can style and this will be for all the subheadings, each major point of the TOS -->
    <div class="container rounded mt-50 pb-50">
        <div class="page-header col-md-12 text-left pb-25">
            <div class="col-md-12 text-center">
                <h1 class="font-stripe-thin fw-400 text-darkgreen mb-5">
                    <a href="/">
                        <img src="images/branding/slade_blue.png" width="87" height="29.25" alt="slade privacy policy">
                    </a>

                </h1>
                <h2 class="font-stripe-thin fw-300 text-darkgreen mt-0"> Privacy Policy </h2>
                <small class="text-darkgreen">Last updated: August 11, 2017</small>
            </div>
        </div>


        <div class="col-md-12 pt-25 tos-box">
            <p> It is Slade HQ's policy to respect your privacy regarding any information we may collect while operating our website. Accordingly, we have developed this privacy policy in order for you to understand how we collect, use, communicate, disclose and otherwise make use of personal information. We have outlined our privacy policy below. </p>
            <ol type="i">
                <li class="pb-5"><span class="pr-5">1.</span> We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
                <li class="pb-5"><span class="pr-5">2.</span> Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
                <li class="pb-5"><span class="pr-5">3.</span> We will collect and use personal information solely for fulfilling those purposes specified by us and for other ancillary purposes, unless we obtain the consent of the individual concerned or as required by law.
                <li class="pb-5"><span class="pr-5">4.</span> Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
                <li class="pb-5"><span class="pr-5">5.</span> We will protect personal information by using reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
                <li class="pb-5"><span class="pr-5">6.</span> We will make readily available to customers information about our policies and practices relating to the management of personal information.
                <li class="pb-5"><span class="pr-5">7.</span> We will only retain personal information for as long as necessary for the fulfilment of those purposes.
            </ol>
            <p> We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. Slade HQ may change this privacy policy from time to time at Slade HQ's sole discretion. </p>
        </div>
    </div>




    @include('front.includes.footer')

    </body>
</html>
