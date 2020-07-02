
<?php
/*
Template Name: JCSCarouselTest
*/
get_header();
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>

<body>
    <header class="entry-header has-text-align-center header-footer-group">
        <h1 class="entry-title">Jackson College CCDC</h1>
    </header>
    <div class="jcs-carousel-container">       
        <div class="slider-parent">
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
        </div>      
    </div>
    <div>
        <?php
            while ( have_posts() ) : the_post();
            ?>
            <div class="content-container">
                <?php
                the_content();
            endwhile; // End of the loop.
            ?>
            </div>
    </div>
</body>

<?php
get_footer();
?>


<script>
    $(document).ready(function(){
        $(".slider-parent").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            speed:4000,
            autoplaySpeed: 0,
            cssEase:'linear',
            arrows:false,
            infinite: true,
            centerMode: true,
            // variableWidth:false,
            // adaptiveHeight:true,
        });
    })
    
</script>


<style>
.content-container{
    font-family:"helvetica";
    font-size:22px;
    width:50%;
    text-align:left;
    margin:5rem 80rem auto auto;
}

.slider-parent{
    display:block;
    margin:auto;
    width:100%;
    padding:1rem;
}

.slider-parent img{
    display:block;
    margin:auto;
    width:90%;
    border-radius:2px;
    border: 5px solid black;
}

.slick-prev,.slick-next{
    display:block;
    margin:10px auto;
}

.jcs-carousel-container{
    width:50%;
    margin:9rem 80rem 1rem auto;
    height:auto;
    background-color:#16232b;
    border:5px solid #172f35;
}

@media(max-width:600px){
    .jcs-carousel-container{
        width:90%;
    }
}
</style>