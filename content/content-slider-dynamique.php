<div class="row row-slider-dynamique">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo get_template_directory_uri().'/img/slide.jpg' ?>" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri().'/img/slide.jpg' ?>" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-chevron-right"></span>
        </a>
    </div>
</div>