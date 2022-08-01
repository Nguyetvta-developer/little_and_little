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
                  @include('inc.nav')
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
                            <div class="article-middle-dashed-1" style="padding: 1.5rem 0 0.5rem; padding-bottom: 25px;">
                                <img class="article-middle-5" src="/img/Alvin_Arnold_Votay1 1.png" alt="">
                                <a class="ctrl-btn pro-prev">
                                    <img src="/img/previous btn.svg" alt="">
                                </a>
                                <a class="ctrl-btn pro-next">
                                    <img src="/img/next btn.svg" alt="">
                                </a> 
                                <div class="container" style="width: 1049px;">
                                    <div class="slider" id="slider">
                                        <div class="row">
                                            <div class="slide" id="slide">
                                                    @foreach ($data as $item)
                                                        <div class="col-sm-4 mx-2">
                                                            <div class="card" style="border-radius: 25px;">
                                                                <img class="qr" src="/img/QRcode.png" alt="">
                                                                <div class="card-body">
                                                                    <input type="hidden" id="text" value="ALT20220503{{$item->id}},{{$name_event}},{{$item->date}}">
                                                                    <h4 id="text" class="card-title text-center text-dark">ALT20220503{{$item->id}}</h4>
                                                                    <h6 class="card-title text-center text-warning text-uppercase mt-1">{{$name_event}}</h6>
                                                                    <h4 class= "--- text-dark mx-auto">---</h4>
                                                                    <p class="text-dark">Ngày sử dụng: {{date('d-m-Y', strtotime($item->date))}}</p>
                                                                    <div class="card-title mx-auto" style="width: fit-content; margin-top: 5%;">
                                                                        <img src="/img/tick.svg" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex d-row justify-content-between mt-2">
                                            <div class="text-dark mt-2"><h5>Số lượng: 12</h5></div>
                                            <div class="text-dark"><h5>1/3</h5></div>
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