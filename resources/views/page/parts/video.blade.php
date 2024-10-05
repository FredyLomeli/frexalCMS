@section('style_video')
<link rel="stylesheet" href="{{ asset('secutech/YouTubePopUp.css') }}" media="all">
@endsection

@section('content_video')
<!--Videos-->
<section class="videosc">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInLeft" data-wow-delay="0.4s">
                        Your Home and Workplace Are Safe 24/7</h2>
                </div>
                <p class="h2-baslik-hizmetler-2__paragraf wow fadeInLeft" data-wow-delay="0.5s">
                    We install your camera systems with our expert staff.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="live-video-img">
                    <div class="or">
                        <img src="{{ asset('secutech/secutech-video-banner1.jpg') }}" class="imgsg" alt="">
                        <div class="ortd">
                            <a href="https://www.youtube.com/watch?v=fyK2OKOC4NI" class="custom-button vbtn-fluid vp-a vp-yt-type">
                                <i class="fx-youtube-play fa-6x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script_video')
<script src="{{ asset('secutech/YouTubePopUp.jquery.js') }}"></script>
<script src="{{ asset('secutech/YouTubePopUp.js') }}"></script>
<script type="text/javascript">
    var video_popup_unprm_general_settings = {
        'unprm_r_border': ''
    };
</script>
@endsection
