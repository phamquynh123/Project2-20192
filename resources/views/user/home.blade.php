@extends('layouts.header')
@section('BOOKGUIDE')
{{--     <a href="{!! route('change-language', ['en']) !!}">English</a>
    <a href="{!! route('change-language', ['vi']) !!}">Vietnam</a> 

{{ trans('message.hello') }} --}}
    <!--BOOK GUIDE SECTION START-->
    <section>
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-heading-1">
                <h2>Chào Mừng Đến Với Thư Viện</h2>
                <p>Chào Mừng Bạn Đến Với Thư Viện Phổ Biến Nhất Hiện Nay</p>
                <div class="kode-icon"><i class="fa fa-book"></i></div>
            </div>
            <!--SECTION CONTENT END-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="kode-service-3">
                        <i class="fa fa-gift"></i>
                        <h3><a href="#">Ebooks</a></h3>
                        <p>an electronic version of a printed book that can be read on a computer.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="kode-service-3">
                        <i class="fa fa-book"></i>
                        <h3><a href="#">{{ trans('message.author') }}</a></h3>
                        <p>an audiocassette or CD recording of a reading of a book, typically a novel.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="kode-service-3">
                        <i class="fa fa-clone"></i>
                        <h3><a href="#">{{ trans('message.blog') }}</a></h3>
                        <p>a periodical publication containing articles and illustrations information.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                {{-- <div class="col-md-3 col-sm-6">
                    <div class="kode-service-3">
                        <i class="fa fa-calculator"></i>
                        <h3><a href="#">Teans &amp; Kids</a></h3>
                        <p>the years of a person's age from 13 to 19 and are the kids and teens.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--BOOK GUIDE SECTION END-->
@endsection


@section('home.content')
<section class="lib-categories-section">
    <div class="container">
        <div class="section-heading-1 dark-sec">
            <h2>Top danh mục được yêu thích</h2>
            <p>Đây là danh mục của những sách được yêu thích nhất</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <ul class="nav nav-tabs" role="tablist">
            @foreach ($category_theloai as $category)
                <li >
                    <a href="{{ asset('/category/') . '/' . $category->slug }}" role="tab" class="category-content" data-categoryId={{ $category['id'] }} >{{ $category['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<!--NORMAL sTORY SECTION START -->
<section class="lib-papular-books">
    <div class="container">
        <!--SECTION CONTENT START-->
        <div class="section-heading-1">
            <h2>Sách Được Yêu Thích</h2>
            <p>Những Sách Được Yêu Thích Nhất Trong Thư Viện</p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
        <div class="row">
            <!--SECTION CONTENT END-->
            <ul class="nav nav-tabs" role="tablist" id="bestStory">
                @foreach($story as $value)
                <li role="presentation" class=" col-md-4 col-sm-3">
                    <a href="#{{$value->slug}}" role="tab" data-toggle="tab">
                        <div class="lib-papular-thumb">
                            @if ($value['img'] != '')
                                <img src="{{ asset('/') . config('Custom.linkImgDefaul') . $value->img }}" alt="">
                            @else
                                <img src="{{ asset('/') . config('Custom.ImgDefaul') }}" alt="">
                            @endif
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach ($story as $value)
                <div role="tabpanel" class="tab-pane fade in" id="{{ $value->slug }}">
                    <div class="lib-papular">
                        <div class="kode-thumb">
                            <a href="{{ asset('/') . $value->slug }}">
                            @if ($value['img'] != '')
                                <img src="{{ asset('/') . config('Custom.linkImgDefaul') . $value->img }}" alt="" class="img-avatar">
                            @else
                                <img src="{{ asset('/') . config('Custom.ImgDefaul') }}" alt=""  class="img-avatar">
                            @endif
                            </a>
                        </div>
                        <div class="kode-text">
                            <h2>{{ $value->title }}</h2>
                            <h4>
                                @foreach($value['authors'] as $author)
                                    <span>{{ $author->name }} - </span>
                                @endforeach
                            </h4>
                            <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <p>
                                {{ substr( $value->description,0, 700) . "..." }}
                                <a href="{{ asset('/') . $value->slug}}">Chi Tiết...</a>
                            </p>
                            <div class="lib-price">
                                <h3>$245</h3>
                                <a href="{{ asset('/') . $value->slug }}">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--NORMAL STORY SECTION END-->

 <!--COUNT UP SECTION START-->
<div class="lib-count-up-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="count-up">
                    <span class="counter circle">1</span>
                    <p>Năm hoạt động</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="count-up">
                    <span class="counter circle">8589</span>
                    <p>Books Sold</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="count-up">
                    <span class="counter circle">10</span>
                    <p>Top Tasc giả</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="count-up">
                    <span class="counter circle">50</span>
                    <p>Sách công khai</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--COUNT UP SECTION END-->

<!--VIP STORY SECTION START-->
<section>
    <!--SECTION HEADING START-->
    <div class="container">
        <div class="section-heading-1">
            <h2>{{ trans('message.stories.Vip') }} {{ trans('message.story') }}</h2>
            <p> {{ trans('message.story') }} {{ trans('message.stories.vip') }} </p>
            <div class="kode-icon"><i class="fa fa-book"></i></div>
        </div>
    </div>
    <!--SECTION HEADING END-->
    <div class="owl-blog owl-theme">
        @foreach($vip_story as $value)
            <div class="lib-blog-post" >
                <div class="kode-thumb" style="text-align: center;background-color: #f3f3f3">
                    @if ($value['img'] != '')
                        <img src="{{ asset('/') . config('Custom.linkImgDefaul') . $value->img }}" alt="" style="width: 41%">
                    @else
                        <img src="{{ asset('/') . config('Custom.ImgDefaul') }}" alt="" style="width:200px">
                    @endif

                    <div class="lib-btns">
                        <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                        <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="kode-text">
                    <h2><a href="{{ asset('/') . $value->slug }}">{{ $value->title }}</a></h2>
                    <ul>
                        <li>
                            <p>by: 
                                @foreach($value->authors as $author)
                                <a href="#">{{ $author->name }}</a>
                                @endforeach
                            </p>
                        </li>
                        <li><p><a href="#">{{ $value->updated_at }}</a></p></li>
                    </ul>
                    <a href="{{ asset('/') . $value->slug }}" class="more"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        @endforeach

        <!--BLOG ITEM START-->
        <div class="item">
            <div class="lib-blog-post">
                <div class="kode-thumb">
                    <img src="images/lib-blog.png" alt="">
                    <div class="lib-btns">
                        <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-search"></i></a>
                        <a href="#" data-toggle="tooltip" title="Title"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="kode-text">
                    <h2>Becky’s Book Reviews</h2>
                    <ul>
                        <li><p>by: <a href="#">James Greig</a></p></li>
                        <li><p><a href="#">20th August 2015</a></p></li>
                    </ul>
                    <a href="#" class="more"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <!--BLOG ITEM END-->
    </div>
</section>
<!--VIP STORY SECTION END-->


{{-- Conf tu daay chuwa co du lieu --}}

        <!--GIFT CARD SECTION START--> 
        <section class="lib-textimonials">
            <div class="container">
                <!--SECTION HEADING START-->
           <div class="section-heading-1 dark-sec">
                <h2>{{-- Our testimonials --}} Sứ mệnh của chúng tôi</h2>
                {{-- <p>What our clients say about the books reviews and comments</p> --}}
                <p>Khách hàng của chúng tôi nói gì về những đánh giá và nhận xét về sách</p>
                <div class="kode-icon"><i class="fa fa-book"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class="owl-testimonials owl-theme">
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>Tôi yêu những cuốn sách tiết kiệm! Thật mới mẻ khi mua những cuốn sáchtheo một phương pháp mới, tiện lợi hơn. Tôi có thể chia sẻ cho bạn bè cũng quan tâm đến chủ đề này. Cảm ơn bạn!!</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                        </div>
                        <h4>Admin</h4>
                        <p class="title">Tác giả</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>Những câu chuyện thú vị. Mang lại nhiều cơ hội trải nghiệm cho mọi người.
                            Cảm ơn TQUYNH - LIBRARY <br><br></p>
                        </div>
                        <div class="kode-thumb">
                            <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                        </div>
                        <h4>Jenifer </h4>
                        <p class="title">Độc giả</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>ordered 14 books, received 14 books within a week. very happy with customer support and with the receipt of books. Keep It Up Good Guide we love you the best books library available today.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                        <div class="kode-text">
                            <p>Thrift Books is the absolute best book seller on the Internet!! Their selection is marvelous, price/shipping unbeatable and timely service is outstanding.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->

        <!--TOP AUTHOR START-->
        <section class="kode-lib-team-member">
            <div class="container">
                <!--SECTION CONTENT START-->
                <div class="section-heading-1">
                    <h2>Our Top Authors</h2>
                    <p>Here are some of the Top Authors that are available in Books Library</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION CONTENT END-->
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                    <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                    <div class="kode-caption">
                        <h4>Nina Soriya</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                    <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                    <div class="kode-caption">
                        <h4>Martin</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                    <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                    <div class="kode-caption">
                        <h4>Alexder</h4>
                        <p>Author</p>
                    </div>
                </div>
                <div class="lib-authors">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                    <img src="{{ asset('/') . config('Custom.PeopleDefaul') }}" alt="">
                    <div class="kode-caption">
                        <h4>Jullia</h4>
                        <p>Author</p>
                    </div>
                </div>
            </div>
        </section>
        <!--TOP AUTHOR END-->

@endsection



@section('script')
    <script src='{{ asset('bower_components/MyCSSJS/home.js') }}'></script>
@endsection
