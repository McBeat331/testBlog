@extends('layouts.app')

@section('content')
    <div class="content home">
        <div class="container">
            <div class="row justify-content-center section">
                @if(isset($firstRandomPost))
                <div class="col-lg-8 col-md-12 col-sm-12 randomPost">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 randomImagePost" style="background-image: url({{ $firstRandomPost->getMedia('post')[0]->getUrl('randomTopPost') }})"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 contentPost">
                            <div class="categoryPost">
                                <span>{{ $firstRandomPost->category->title }}</span>
                            </div>
                            <div class="titlePost">
                                <h3><a href="">{{ $firstRandomPost->title }}</a></h3>
                            </div>
                            <div class="descPost">
                                <span>{{ $firstRandomPost->content }}</span>
                            </div>
                            <div class="footerPost">
                                <div class="datePost"><span>{{ date('d M Y', strtotime($firstRandomPost->created_at)) }}</span></div>
                                <div class="authorPost"><span>{{ $firstRandomPost->author->name }}</span></div>
                                <div class="timeReadPost">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C2.6914 0 0 2.6914 0 6C0 9.3086 2.6914 12 6 12C9.3086 12 12 9.3086 12 6C12 2.6914 9.3086 0 6 0ZM6 11.0705C3.20449 11.0705 0.929508 8.79551 0.929508 6C0.929508 3.20449 3.20449 0.929508 6 0.929508C8.79598 0.929508 11.0705 3.20449 11.0705 6C11.0705 8.79551 8.79551 11.0705 6 11.0705ZM6.46474 5.80479L8.13787 7.05963C8.3433 7.21348 8.38514 7.50488 8.2308 7.70986C8.1397 7.83255 8.00027 7.89623 7.85852 7.89623C7.7614 7.89623 7.66378 7.86602 7.58013 7.80328L5.72112 6.40901C5.604 6.32163 5.53521 6.18359 5.53521 6.0372V3.24865C5.53521 2.99163 5.74296 2.78388 5.99998 2.78388C6.25699 2.78388 6.46474 2.99163 6.46474 3.24865V5.80479Z" fill="#252525"/>
                                    </svg>
                                    <span>{{ $firstRandomPost->time_read }} min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(isset( $lastPost ))
                <div class="col-lg-4 col-md-12 col-sm-12 lastPosts">
                    <div class="titleBlock">
                        <h3>Our Latest News</h3>
                    </div>
                    <div class="postsList">
                        @foreach( $lastPost as $post )
                            <div class="postsListItem">
                                <div class="imageSmallThumb"><img src="{{ $post->getMedia('post')[0]->getUrl('smallThumb') }}" alt="{{ $post->title }}" title="{{ $post->title }}"/></div>
                                <div class="postsListTitle">
                                    <h5><a href="#">{{ $post->title }}</a></h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="row justify-content-center section">
                @if(isset($secondRandomPost))
                    <div class="col-lg-12 col-md-12 col-sm-12 randomPost">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-4 randomImagePost" style="background-image: url({{ $secondRandomPost->getMedia('post')[0]->getUrl('randomSecondPost') }})"></div>
                            <div class="col-lg-4 col-md-6 col-sm-8 contentPost">
                                <div class="categoryPost">
                                    <span>{{ $secondRandomPost->category->title }}</span>
                                </div>
                                <div class="titlePost">
                                    <h3><a href="">{{ $secondRandomPost->title }}</a></h3>
                                </div>
                                <div class="descPost">
                                    <span>{{ $secondRandomPost->content }}</span>
                                </div>
                                <div class="footerPost">
                                    <div class="datePost"><span>{{ date('d M Y', strtotime($secondRandomPost->created_at)) }}</span></div>
                                    <div class="authorPost"><span>{{ $secondRandomPost->author->name }}</span></div>
                                    <div class="timeReadPost">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C2.6914 0 0 2.6914 0 6C0 9.3086 2.6914 12 6 12C9.3086 12 12 9.3086 12 6C12 2.6914 9.3086 0 6 0ZM6 11.0705C3.20449 11.0705 0.929508 8.79551 0.929508 6C0.929508 3.20449 3.20449 0.929508 6 0.929508C8.79598 0.929508 11.0705 3.20449 11.0705 6C11.0705 8.79551 8.79551 11.0705 6 11.0705ZM6.46474 5.80479L8.13787 7.05963C8.3433 7.21348 8.38514 7.50488 8.2308 7.70986C8.1397 7.83255 8.00027 7.89623 7.85852 7.89623C7.7614 7.89623 7.66378 7.86602 7.58013 7.80328L5.72112 6.40901C5.604 6.32163 5.53521 6.18359 5.53521 6.0372V3.24865C5.53521 2.99163 5.74296 2.78388 5.99998 2.78388C6.25699 2.78388 6.46474 2.99163 6.46474 3.24865V5.80479Z" fill="#252525"/>
                                        </svg>
                                        <span>{{ $secondRandomPost->time_read }} min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="ajaxPosts row justify-content-center section" id="homePosts">
                @include('_partials.postPaginate')
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                var page=$(this).attr('href').split('page=')[1];

                console.log(page);
                getData(page);
            });

        });

        function getData(page){
            $.ajax(
                {
                    url: '/?page=' + page,
                    type: "get",
                    datatype: "html"
                }).done(function(data){
                $("#homePosts").empty().html(data);
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
        }
    </script>
@endpush