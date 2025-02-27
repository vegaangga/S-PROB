@extends('foruser.header')
@section('konten')
<!-- Feature Category Section & sidebar -->
<section id="feature_category_section" class="feature_category_section single-page section_wrapper">
<div class="container">
    <div class="row">
            <div class="col-md-12">
            <div class="single_content_layout">
                <div class="item feature_news_item">
                    <div class="item_img">
                        <center>
                        <img  class="img-responsive" src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" alt="Chania">
                        </center>
                    </div><!--item_img-->
                        <div class="item_wrapper">
                            <div class="news_item_title">
                                <h2><a href="#">Leo Messi is boss of the bosses in football world.</a></h2>
                            </div><!--news_item_title-->
                            <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>

                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </span>

                                <div class="single_social_icon">
                                    <a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <!--Twitter-->
                                    <a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <!--Google +-->
                                    <a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
                                    <!--Linkedin-->
                                    <a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

                                </div> <!--social_icon1-->

                                <div class="item_content">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    <br /><br />
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    <br /><br />
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
                                </div><!--item_content-->
                                <div class="category_list">
                                    <a href="#">Messi</a>
                                    <a href="#">Leonel</a>
                                    <a href="#">Bercelona</a>
                                    <a href="#">Argentina</a>
                                    <a href="#">Football</a>
                                </div><!--category_list-->
                        </div><!--item_wrapper-->
                </div><!--feature_news_item-->

                <div class="readers_comment">
                    <div class="single_media_title"><h2>Related Comments</h2></div>
                    <div class="media">
                        <div class="media-left">
                            <a href="/detailmaster">
                                <img alt="64x64" class="media-object" data-src="img/img-author1.jpg"
                                     src="img/img-author1.jpg" data-holder-rendered="true">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Sr. Ryan</h2>
                            But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                            no annoying consequences, or one who avoids a pain that produces no resultant pleasure?


                            <div class="comment_article_social">
                                <a href="#"><span class="reply_ic">Reply </span></a>
                            </div>
                            <div class="media reply">
                                <div class="media-left">
                                    <a href="#">
                                        <img alt="64x64" class="media-object" data-src="img/img-author2.jpg"
                                             src="img/img-author2.jpg" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h2 class="media-heading">Admin</h2>
                                    But who has any right to find fault with a man who chooses to enjoy a pleasure
                                    that has no annoying consequences, or one who avoids a pain that produces no
                                    resultant pleasure?

                                    <div class="comment_article_social">
                                        <a href="#"><span class="reply_ic"> Reply </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img alt="64x64" class="media-object" data-src="img/img-author1.jpg"
                                     src="img/img-author1.jpg" data-holder-rendered="true">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">S. Joshep</h2>
                            But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                            no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

                            <div class="comment_article_social">
                                <a href="#"><span class="reply_ic"> Reply </span></a>
                            </div>
                        </div>
                    </div>
                </div><!--readers_comment-->

                <div class="add_a_comment">
                    <div class="single_media_title"><h2>Add a Comment</h2></div>
                    <div class="comment_form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group comment">
                                <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
                            </div>

                            <button type="submit" class="btn btn-submit red">Submit</button>
                        </form>
                    </div><!--comment_form-->
                </div><!--add_a_comment-->

            </div><!--single_content_layout-->
            </div>
</section><!--feature_category_section-->
@include('foruser.footer')
@endsection
