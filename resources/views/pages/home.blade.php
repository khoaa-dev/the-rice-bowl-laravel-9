@extends('layouts.app')

<style type="text/css">
.avaUser {
    padding: 0.25rem;
    background-color: #fff;
    border: 0px solid #dee2e6;
    border-radius: 75.25rem;
    /* max-width: 8%; */
    width: 88px;
    height: 88px;
}

div.stars {}

a.star span.vote-hover {
    color: #fffb1f;
}

a.star span:active {
    color: #ffd000;
}

a.star span.vote-active {
    color: #ffd000;
}

.blue {
    color: #ffd000;
}
</style>

@section('content')
<section class="home-slider owl-carousel img"
    style="background: linear-gradient(rgba(17, 30, 63, 0.9), rgba(112, 83, 15, 0.9)),
                                                                                                            url({{ asset('public/front-end/images/anhFood1.jpg') }});
                                                                                                            background-position: center center;
                                                                                                            background-repeat: no-repeat;
                                                                                                            background-size: cover;">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-5 col-sm-12 ftco-animate">
                    <span class="subheading">Delicious</span>
                    <h1 class="mb-8">THE RICE BOWL</h1>
                    <p class="mb-4 mb-md-5">Menu đa dạng với những món ăn ngon nhất từ các đầu bếp hàng đầu thế giới.
                    </p>
                    <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3" style="font-size: 20px">Đặt
                            Ngay</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
                            style="font-size: 20px">Xem Menu</a></p>
                </div>
                <div class="col-md-7 ftco-animate hero text-center text-lg-end overflow-hidden">
                    <img src="{{ asset($restaurant->food_banner) }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>0765 700 777</h3>
                            <p style="color: #f7bd5e;">Số điện thoại</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>123 Nguyễn Văn Linh</h3>
                            <p style="color: #f7bd5e;">Địa chỉ</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Phục vụ 24/7</h3>
                            <p style="color: #f7bd5e;">7:00 am - 10:00 pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ asset('public/front-end/images/anhDV9.jpg') }});">
    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">CHÀO MỪNG TỚI THE RICE BOWL</h2>
        </div>
        <div>
            <p style="line-height: 30px; font-size: 17px">Đội ngũ đầu bếp tại The Rice Bowl sáng tạo ra những thực đơn
                phù hợp với mọi
                dịp, phục vụ trong nhà hoặc
                ngoài trời, hay ngay trên bờ biển tuyệt đẹp của miền Trung Việt Nam. Các cặp đôi có thể lựa chọn thực
                đơn riêng hoặc buffet phong phú với phong cách Phương Tây, Á Châu, Việt Nam và món ngon địa phương.</p>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4" style="font-size: 35px; color: #a7501f">DỊCH VỤ CỦA CHÚNG TÔI</h2>
                <p style="font-size: 22px; color: #74581e">Hãy để The Rice Bowl Restaurant đáp ứng yêu cầu và hiện thực
                    hóa ý tưởng của
                    bạn về một buổi tiệc,
                    một đám cưới,....</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5" style="margin-top: 20px;">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading" style="font-size: 22px; color: #954100">CƯỚI HỎI</h3>
                        <p style="font-size: 20px; color: #954100">Không gian tiệc cưới thật đẹp với vòng hoa và lễ
                            đường, để tạo ra
                            những trải nghiệm khó quên nhất.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5" style="margin-top: 20px;">
                        <span class="flaticon-bicycle"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading" style="font-size: 22px; color: #954100">SINH NHẬT - THÔI NÔI</h3>
                        <p style="font-size: 20px; color: #954100">Không gian ấm cúng phù hợp cho những tiệc sinh nhật
                            dành cho các bé,
                            cho gia đình và các cặp
                            đôi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5" style="margin-top: 20px;">
                        <span class="flaticon-pizza-1"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading" style="font-size: 22px; color: #954100">TIỆC THEO CHỦ ĐỀ</h3>
                        <p style="font-size: 20px; color: #954100">Hãy nói lên ý tưởng của bạn, The Rice Bowl sẽ hiện
                            thực hóa điều ước
                            đó thành một không gian
                            tuyệt đẹp.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4" style="color: #f7bd5e">MENU ĐA DẠNG</h2>
                <p style="font-size: 22px">Hãy để The Rice Bowl Restaurant đánh thức vị giác của bạn!</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('public/front-end/images/anhDrink2.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Cocktail dâu tây</h3>
                        <p>Sự kết hợp hoàn hảo giữa Cocktail mát lạnh và dâu tây được nhập từ Mỹ phù hợp với mùa hè
                        </p>
                        <p class="price"><span>90.000 VNĐ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('public/front-end/images/anhFood6.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Cá ngừ phi lê</h3>
                        <p>Món ngon nhất tại cửa hàng chính là cá ngừ phi lê ăn kết hợp với nướt sốt muối ớt kèm salad
                            Mỹ
                        </p>
                        <p class="price"><span>190.000 VNĐ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('public/front-end/images/anhDrink3.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Smoothies dứa</h3>
                        <p>Smoothies dứa là sự kết hợp giữa chút rượu và dứa thơm từ Tây Ban Nha và Pháp
                        </p>
                        <p class="price"><span>120.000 VNĐ</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last"
                        style="background-image: url({{ asset('public/front-end/images/anhFood3.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Salad củ quả</h3>
                        <p>Món ăn healthy nhất của nhà hàng Rice Bowl sẽ phù hợp với vị khách hàng khó tính nhất</p>
                        <p class="price"><span>123.000 VNĐ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last"
                        style="background-image: url({{ asset('public/front-end/images/anhFood7.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Trà táo bạc hà</h3>
                        <p>Trà thanh lọc được chiết xuất từ lá trà thiên nhiên, thêm chút bạc hà the the và vị táo
                            nguyên chất</p>
                        <p class="price"><span>77.000 VNĐ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img order-lg-last"
                        style="background-image: url({{ asset('public/front-end/images/anhFood8.jpg') }});"></a>
                    <div class="text p-4">
                        <h3 style="color: #f7bd5e">Súp bò hầm</h3>
                        <p>Súp nóng hổi được hầm với thịt bò Mỹ sẽ để lại cho bạn cảm giác khó quên và muốn thử lại
                        </p>
                        <p class="price"><span>299.000 VNĐ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('public/front-end/images/anhGDV5.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('public/front-end/images/anhGDV9.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('public/front-end/images/anhGDV10.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('public/front-end/images/anhGDV13.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('public/front-end/images/bg_2.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                    <strong class="number" data-number="100"
                                        style="font-family: 'Josefin Sans';">0</strong>
                                    <span style="font-size: 20px; font-family: 'Josefin Sans';">Đơn đặt mỗi ngày</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-medal"></span></div>
                                    <strong class="number" data-number="25"
                                        style="font-family: 'Josefin Sans';">0</strong>
                                    <span style="font-size: 20px; font-family: 'Josefin Sans';">Chứng nhận quốc
                                        tế</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-laugh"></span></div>
                                    <strong class="number" data-number="10567"
                                        style="font-family: 'Josefin Sans';">0</strong>
                                    <span style="font-size: 20px; font-family: 'Josefin Sans';">Số lượng khách
                                        hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-chef"></span></div>
                                    <strong class="number" data-number="100"
                                        style="font-family: 'Josefin Sans';">0</strong>
                                    <span style="font-size: 20px">Đầu bếp hàng đầu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="padding: initial; margin-top: 80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 heading-section ftco-animate text-center row">
                    <h2 class="mb-4 col-12" style="color: #f7bd5e">ĐÁNH GIÁ TỪ PHÍA KHÁCH HÀNG</h2>
                    <div class="container"
                        style="border: solid 1px #c9c372;border-radius: 20px; margin-top: 20px; padding: 30px; margin-bottom: 80px">
                        @foreach ($eveluates as $evelute)
                        <div class="media col-12" style="padding: 30px 30px 0px 30px">
                            @if ($evelute->avatarUrl != '')
                            <img src="{{ asset('public/front-end/images/' . $evelute->avatarUrl) }}" alt="Avatar"
                                class="avaUser">
                            @else
                            <img src="{{ asset('public/front-end/images/user.png') }}" alt="Avatar" class="avaUser">
                            @endif
                            {{-- <img class="avaUser" src="{{asset('public/front-end/images/'.$eva->avatarUrl)}}"
                            alt="..." class="img-thumbnail"> --}}
                            <div class="media-body" style="margin-left: 25px">
                                <h1
                                    style="font-size: 20px; font-weight: 500; color: rgb(255, 237, 75); text-align:left">
                                    {{ $evelute->fullName }}</h1>
                                <p style="font-size: 16px; text-align:left">{{ $evelute->created_at }}</p>
                                <p style="font-size: 20px; text-align:left; color: rgb(255 248 187)">
                                    {{ $evelute->content }}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="justify-content-center col-12" style="margin-top: 30px">
                            {{ $eveluates->links('pagination.custom') }}
                        </div>
                    </div>

                    {{-- {{ route('send_comment') }} --}}
                    @if ($statusReview == 1)
                    <form action="{{ url('evaluate') }}" method="POST" class="col-12">
                        @csrf
                        <div class="form-group shadow-textarea" style="margin-top: 20px">
                            <h2 for="exampleFormControlTextarea1" style="margin-top: 30px; color: #f7bd5e">NHẬP
                                ĐÁNH
                                GIÁ CỦA BẠN:</h2>
                            <p style="color: #ffffff; font-size:22px">Những đóng góp quý giá của quý khách là động
                                lực để chúng tôi cố gắng hoàn thiện hơn!
                            </p>
                            <div class="container"
                                style="border: solid 1px #c9c372;border-radius: 20px; margin-top: 30px; padding: 35px; margin-bottom: 60px">
                                <div id="cate-rating" class="cate-rating"
                                    style="text-align: left; margin-top: 30px; margin-left: 12px">
                                    <div class="stars" style="margin-top: 30px">
                                        <a id="star-1" class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                        </a>
                                        <a id="star-2" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-3" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-4" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-5" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <input type="hidden" name="numberStar" id="numberStar">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="d-flex container">
                                    <textarea
                                        style="color: rgb(255 248 187) !important; font-size: 20px; font-family: 'Josefin Sans';margin-right: 20px; margin-bottom: 20px; margin-top: 20px"
                                        class="form-control" name="comment_content"
                                        placeholder="Nhập đánh giá của bạn..." rows="2"></textarea>
                                    <button type="submit" class="btn btn-warning send-comment"
                                        style="color: #ffba5a; width: 150px; height: 40px; font-size : 18px; font-family: 'Josefin Sans';
                                            border-radius: 10px;background-color: transparent;font-weight: 500; margin-top: 25px">Gửi
                                        đánh giá</button>
                                    <div id="notify_comment"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    @endif
                </div>

            </div>

        </div>
    </section>


    {{-- <section class="ftco-appointment">
            <div class="overlay"></div>
            <div class="container-wrap">
                <div class="row no-gutters d-md-flex align-items-center">
                    <div class="col-md-6 d-flex align-self-stretch">
                        <div id="map"></div>
                    </div>
                    <div class="col-md-6 appointment ftco-animate">
                        <h3 class="mb-3">Liên hệ với chúng tôi</h3>
                        <form action="#" class="appointment-form">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input style="text-size: 20px" type="text" class="form-control"
                                        placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Lời nhắn nhủ"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Gửi" class="btn btn-primary py-3 px-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
    @endsection
    @section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        /*
         * Hiệu ứng khi rê chuột lên ngôi sao
         */
        $('a.star').mouseenter(function() {
            if ($('#cate-rating').hasClass('rating-ok') == false) {
                var eID = $(this).attr('id');
                eID = eID.split('-').splice(-1);
                $('a.star').removeClass('vote-active');
                for (var i = 1; i <= eID; i++) {
                    $('#star-' + i + ' span').addClass('vote-hover');
                }
            }
        }).mouseleave(function() {
            if ($('#cate-rating').hasClass('rating-ok') == false) {
                $('span').removeClass('vote-hover');
            }
        });

        /*
         * Sự kiện khi cho điểm
         */
        $('a.star').click(function() {
            if ($('#cate-rating').hasClass('rating-ok') == false) {
                var eID = $(this).attr('id');
                eID = eID.split('-').splice(-1).toString();
                for (var i = 1; i <= eID; i++) {
                    $('#star-' + i).addClass('vote-active');
                }
                //$('p#vote-desc').html('<span class="blue">' + eID + '</span>');
                $('#numberStar').val(eID);
                $('#cate-rating').addClass('rating-ok');
            }
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.send-comment').click(function() {
            var numberStar = $('#numberStar').val();
            var comment_content = $('.comment_content').val();
            //var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/send",
                method: "POST",
                data: {
                    comment_content: comment_content,
                    numberStar: numberStar
                },
                success: function(data) {
                    $('#notifiy_comment').html(
                        '<p class="text text-success">Thêm bình luận thành công!</p>')
                }
            })
        })
    });
    </script>