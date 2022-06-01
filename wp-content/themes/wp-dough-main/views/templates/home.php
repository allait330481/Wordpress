    <?php
    /** @var string $title */
    /** @var string $content */
    /** @var array $buttonGroup */

    if(!$buttonGroup){
        $buttonGroup = null;
    }


    $arguments = ['post_type' => 'review', 'numberposts' => 4, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
    $listOfReviews = get_posts($arguments);
    
    ?>

    ?>

    <div class="home">

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>

    <header>

    <a href="#" class="logo">Perpark</a>

    <nav class="navbar">
        <a class="active" href="http://www.allaith-330481.nl/">Home</a>
        <a href="http://www.allaith-330481.nl/al-reviews/">Reviews</a>
        <a href="about-us.html">about us</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    </header>

    <section class="main">
            <div>
                <h2>Het is tijd voor een 
                    sprookjesachtig feestje</h2>
    <a href="#Categories"><button  class="button-82-pushable" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">
        Cheack Beoordeling
    </span>
    </button></a>        </div>
            <img src="img/jeff_koons_theskateroom_post1.jpg" alt="">
        </section>

        <section class="cards" id="Categories">
            <h2 class="title">Last reviews</h2>
            <div class="content">
                <?php foreach($listOfReviews as $review): ?>
                <div class="card">
                    <div class="img-card">
                        <img src="https://blog.bungalowspecials.nl/wp-content/uploads/sites/14/2016/08/Klein-Pretpark-Toverland.jpg" alt="">
                    </div>
                    <div class="info">
                        <h1><?php echo $review->post_title ?></h1>
                        <p><?php echo $review->post_content ?></p>
                        <a href="<?php echo get_field('url', $review->ID)?>"><button class="button-85" role="button">Naar site</button></a>


                    </div>
                </div>

                <?php endforeach ?>
            </div>
        </section>





    <div class="bg-g">

    <ul>
        <?php foreach($listOfReviews as $review): ?>
            <li><?php echo $review->post_title; ?></li>
            <a href="<?php echo get_field('url',$review->ID)?>">Klik hier voor de webiste</a>
            <?php endforeach;  ?>
    </ul>


    </div>




    </body>
    </html>



    </div>
