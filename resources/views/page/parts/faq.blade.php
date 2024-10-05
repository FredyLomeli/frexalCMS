@section('styles_faq')
<link rel="stylesheet" href="{{ asset('secutech/swiper.min.css') }}" media="all">
@endsection

@section('content_faq')
<!--FAQ-->
<section class="fq2">
    <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
    <div class="tablo">
        <div class="tablo--1-ve-2">
            <div class="galeri wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <img src="{{ asset('img/faq/faq-about-suctech-2.png') }}" alt="About" class="galeri__gorsel galeri__gorsel--395 zimage">
            </div>
        </div>         
        <!--Galeri Görsel Alanı-->
        <div class="tablo--1-ve-3 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <p class="paragraf wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;"></p>
            <h2 class="wow fadeInLeft" style="color: rgb(255, 255, 255); font-size: 30px; font-weight: 900; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;" data-wow-delay="0.4s">Need Help?</h2>
            <p class="wow fadeInLeft" style="color: rgb(255, 255, 255); visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;" data-wow-delay="0.5s">Frequently Asked Questions.</p>
            <div class="bosluk333"></div>
            <div class="wrapper"> 
                <div class="container asa">
                    <div class="question">Why camera system?</div>
                    <div class="answercont">
                        <div class="answer">Camera systems are used in homes, especially for caregiver and baby monitoring, for security and personnel control in workplaces, apartments and SMEs.</div>
                    </div>
                </div>
                     
                <div class="container asa">
                    <div class="question">Can an alarm be set while at home?</div>
                    <div class="answercont">
                        <div class="answer">Definitely. Alarm systems have a Standby mode in case of burglary when homeowners are at home.</div>
                    </div>
                </div>
                     
                <div class="container asa">
                    <div class="question">What if the siren cord is cut?</div>
                    <div class="answercont">
                        <div class="answer">There is also a battery inside the siren and it will continue to give an audible warning even if the power cable to the siren is cut. </div>
                    </div>
                </div>

                <div class="container asa">
                    <div class="question">Alarm system in case of power failure?</div>
                    <div class="answercont">
                        <div class="answer">The system works continuously for a minimum of 8 hours. In this case, the system will be activated.</div>
                    </div>
                </div>
                     
                <div class="container asa">
                    <div class="question">Monitoring my alarm system?</div>
                    <div class="answercont">
                        <div class="answer">It is necessary to have an alarm system that is not connected to the center.</div>
                    </div>
                </div>
                     
            </div>
        <div class="bosluk333"></div>
        </div>
    </div>
</section>
@endsection

@section('script_faq')
<script src="{{ asset('secutech/swiper.min.js') }}" id="swiper-js"></script>
@endsection
