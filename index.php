<!--set header.php-->
<?php get_header();
?>

<!--<div class="row">-->
    <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>-->
        <!-- Wrapper for slides -->
   <!--     <div class="carousel-inner" role="listbox">
            <?php /*$slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); */?>
            <?php /*$count = 0; */?>
            <?php /*foreach ($slider as $slide): */?>
                <div class="item <?php /*echo ($count == 0) ? 'active' : ''; */?>">
                    <img src="<?php /*echo wp_get_attachment_url(get_post_thumbnail_id($slide->ID)) */?>"
                         class="img-responsive"/>
                </div>
                <?php /*$count++; */?>
            <?php /*endforeach; */?>
        </div>
-->
        <!-- Controls -->
   <!--     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>-->

<div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri() . '/image/carousel/Layer-138.png' ?>"
                     class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/image/carousel/Layer-140.png' ?>"
                     class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/image/carousel/Layer-139.png' ?>"
                     class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="col w-50 bg-dark p-3 align-top" style="opacity: .4;">
                        <h6 class="h2 mt-5 text-white">CONTRARY TO POPULAR BELIEF</h6>
                        <p class="m-5 mb-5 text-white" style="font-size: 27px">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col mr-1" style="background-color: #e3d6c3">
            <div class="col d-flex justify-content-center mt-4 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/image/content/mac.png' ?>">
            </div>
            <div class="d-flex justify-content-center">
                <h6 class="text-uppercase">responsive design</h6>
            </div>
            <div class="col d-flex text-center mb-5">
                <p>I am so clever that sometimes I do not understand a single word of what I am saying and get very
                    confused.</p>
            </div>
        </div>
        <div class="col mr-1" style="background-color: #e3d6c3">
            <div class="col d-flex justify-content-center mt-4 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/image/content/Layer-123.png' ?>">
            </div>
            <div class="d-flex justify-content-center">
                <h6 class="text-uppercase">responsive design</h6>
            </div>
            <div class="col d-flex text-center">

                <p>I am so clever that sometimes I do not understand a single word of what I am saying and get very
                    confused.</p>
            </div>
        </div>
        <div class="col mr-1" style="background-color: #e3d6c3">
            <div class="col d-flex justify-content-center mt-4 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/image/content/Layer-122.png' ?>">
            </div>
            <div class="d-flex justify-content-center">
                <h6 class="text-uppercase">responsive design</h6>
            </div>
            <div class="col d-flex text-center">

                <p>I am so clever that sometimes I do not understand a single word of what I am saying and get very
                    confused.</p>
            </div>
        </div>
        <div class="col" style="background-color: #e3d6c3">
            <div class="col d-flex justify-content-center mt-4 mb-5">
                <img src="<?php echo get_template_directory_uri() . '/image/content/Layer-137.png' ?>">
            </div>
            <div class="d-flex justify-content-center">
                <h6 class="text-uppercase">responsive design</h6>
            </div>
            <div class="col d-flex text-center">

                <p>I am so clever that sometimes I do not understand a single word of what I am saying and get very
                    confused.</p>
            </div>
        </div>

    </div>
    <hr>
</div>


<div class="row" style="background-color: #af461a">
    <div class="container">
        <?php get_search_form(); ?>
    </div>
</div>

<div class="container">
    <hr>
    <div class="row ">
        <div class="col">
            <h6 class="h4">Portfolio</h6>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col m-3">
            <div class="card text-white">
                <img src="<?php echo get_template_directory_uri() . '/image/portfolio/Layer-125.png' ?>">
                <div class="card-img-bottom bg-dark">
                    <p class="ml-2">It is a long established fact</p>
                </div>
            </div>
        </div>
        <div class="col m-3">
            <div class="card text-white">
                <img src="<?php echo get_template_directory_uri() . '/image/portfolio/Layer-126.png' ?>">
                <div class="card-img-bottom bg-dark">
                    <p class="ml-2">It is a long established fact</p>
                </div>
            </div>
        </div>
        <div class="col m-3">
            <div class="card text-white">
                <img src="<?php echo get_template_directory_uri() . '/image/portfolio/Layer-124.png' ?>">
                <div class="card-img-bottom bg-dark ">
                    <p class="ml-2">It is a long established fact</p>
                </div>
            </div>
        </div>
        <div class="col m-3">
            <div class="card text-white">
                <img src="<?php echo get_template_directory_uri() . '/image/portfolio/Layer-135.png' ?>">
                <div class="card-img-bottom bg-dark">
                    <p class="ml-2">It is a long established fact</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="container">
    <div class="row">
        <div class="col">
            <h6 class="h5 text-dark text-uppercase">What is lorem ipsum</h6>
        </div>

    </div>
    <div class="row">
        <div class="col d-flex flex-wrap" style="background-color: #f0eae0">
            <div class="col-6 pl-0">
                <div class="card text-white">
                    <img src="<?php echo get_template_directory_uri() . '/image/Layer-142.png' ?>">
                    <div class="card-img-bottom bg-dark">
                        <p class="ml-2">There are many variations</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h6>Why do we use it?</h6>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                    book is a treatise on the theory of ethics, very popular during the Renaissance.
                    The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <hr>
    <div class="row">
        <div class="col">
            <h6 class="h5 text-dark text-uppercase">latest news</h6>
        </div>

    </div>
    <div class="row" style="background-color: #f0eae0">
        <div class="col mt-3">
            <div class="col d-flex pl-0">
                <img src="<?php echo get_template_directory_uri() . '/image/news/Layer-127.png' ?>">
                <div class="col ml-2">
                    <h6>SOME INTERESTING NEWS</h6>
                    <p>Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore
                        et
                        ...</p>
                </div>
            </div>
            <div class="col mt-3">
                <button class="text-uppercase btn" type="button" style="background-color: #a14016"> read more
                </button>
            </div>
        </div>
        <div class="col mt-3">
            <div class="col d-flex pl-0">
                <img src="<?php echo get_template_directory_uri() . '/image/news/Layer-128.png' ?>">
                <div class="col ml-2">
                    <h6>SOME INTERESTING NEWS</h6>
                    <p>Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore
                        et
                        ...</p>
                </div>
            </div>
            <div class="col mt-3">
                <button class="text-uppercase btn" type="button" style="background-color: #a14016"> read more
                </button>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #f0eae0">
        <div class="col mt-3 mb-3">
            <div class="col d-flex pl-0">
                <img src="<?php echo get_template_directory_uri() . '/image/news/Layer-129.png' ?>">
                <div class="col ml-2">
                    <h6>SOME INTERESTING NEWS</h6>
                    <p>Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore
                        et
                        ...</p>
                </div>
            </div>
            <div class="col mt-3">
                <button class="text-uppercase btn" type="button" style="background-color: #a14016"> read more
                </button>
            </div>
        </div>
        <div class="col mt-3">
            <div class="col d-flex pl-0">
                <img src="<?php echo get_template_directory_uri() . '/image/news/Layer-130.png' ?>">
                <div class="col ml-2">
                    <h6>SOME INTERESTING NEWS</h6>
                    <p>Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore
                        et
                        ...</p>
                </div>
            </div>
            <div class="col mt-3">
                <button class="text-uppercase btn" type="button" style="background-color: #a14016"> read more
                </button>
            </div>
        </div>
    </div>
    <hr>
</div>
<!--footer.php-->
<?php

get_footer() ?>
