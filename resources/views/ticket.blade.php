<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= text-capitalize1.0">
    <title>Đầm Sen Park</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/successSlyte.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    
</head>

<body>
    <div class="body-bg">
        <div class="bg">
            <div class="header-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg text-white">
                        <a class="navbar-brand" href="http://127.0.0.1:8000/home" style="padding-top: 0 !important;"><img src="/img/logo.svg" style="width: 60%;" alt=""></a>
                        <div style="width: 10rem;"></div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto text-capitalize">
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/home">trang chủ<span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/events">sự kiện</a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-3 py-1 text-white" href="http://127.0.0.1:8000/contact">liên hệ</a>
                                </li>
                        </div>
                        <div class="header-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <a class="text-white" href="">0123456789</a>
                        </div>
                    </nav>
                </div>
            </div>
                <div class="article-top">
                    <div class="row">
                        <div class="article-top-left col-sm-6 mx-auto">
                            <img class="article-top-1" src="/img/Thanh toán thành công.svg" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>
                <div class="article-main py-1">
                    <div class="container">
                        <div class="article-middle-bg-1 p-1 my-3">
                            <div class="article-middle-dashed-1" style="padding: 1.5rem 0 0.5rem; padding-bottom: 70px;">
                                <img class="article-middle-5" src="/img/Alvin_Arnold_Votay1 1.png" alt="">
                                <a class="ctrl-btn pro-prev">
                                    <img src="/img/previous btn.svg" alt="">
                                </a>
                                <a class="ctrl-btn pro-next">
                                    <img src="/img/next btn.svg" alt="">
                                </a> 
                                <div class="container" style="width: 1049px;">
                                    <div class="slider" id="slider">
                                        <div class="slide" id="slide">
                                            
                                            @foreach ($data as $item)
                                            <div class="col-sm-1 mx-2">
                                                <div class="card" style="border-radius: 25px;">
                                                    <img class="qr" src="/img/QR.svg" alt="">
                                                    <div class="card-body">
                                                        <input type="hidden" id="text" value="ALT20220503{{$item->id}},{{$name_event}},{{$item->date}}">
                                                        <h4 id="text" class="card-title text-center text-dark">ALT20220503{{$item->id}}</h4>
                                                        <h6 class="card-title text-center text-warning text-uppercase mt-2">{{$name_event}}</h6>
                                                        
                                                        <h2 class= "--- text-dark mx-auto">---</h2>
                                                        <p class="text-dark">Ngày sử dụng: {{$item->date}}</p>
                                                        <div class="card-title mx-auto" style="width: fit-content; margin-top: 8%;">
                                                            <img src="/img/tick.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                      
                                    </div>
                                </div> 
                            </div>

                            
                           
                        </div>
                        <div class="col-sm-4" style="margin: 3% auto;">
                            <a class="mx-3" href="#"><img src="/img/tai-ve.svg" alt=""></a>
                            <a href="#"><img src="/img/gui-mail.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function onMess() {
        e.preventDefault();
        document.querySelector('#mess').style.display='block';
    }

    function offMess(e) {
        document.querySelector('#mess').style.display='none';
    }

    </script>
    <script src="{{ asset('js/slide.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width : 100,
            height : 100
        });

        function makeCode () {		
            var elText = document.getElementById("text");
            
            if (!elText.value) {
                alert("Input a text");
                elText.focus();
                return;
            }
            
            qrcode.makeCode(elText.value);
        }

        makeCode();

        $("#text").
            on("blur", function () {
                makeCode();
            }).
            on("keydown", function (e) {
                if (e.keyCode == 13) {
                    makeCode();
                }
            });
    </script>
    
</body>

</html>