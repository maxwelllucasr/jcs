
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



    <div class="column1">
        <div class="jcs-carousel-container">  
            <div class="slider-parent">
                <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
                <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
                <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
                <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
            </div>      
        </div>
    </div>



    <div class="column2">
        <div class="right-side-image-container">
            <a href="https://jacksoncyberspace.com/current-team-for-ccdc-2020/"><div class="right-side-images" class=""><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/team.png"></div></a>
            <a href="https://jacksoncyberspace.com/2020-topology/"><div class="right-side-images"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/nettop.png"></div></a>
            <a href="https://jacksoncyberspace.com/contact-us/"><div class="right-side-images-below"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/contact.png"></div></a>
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

.right-side-image-container{
    display:block;
    margin:7rem 10rem auto auto;
    background-color:#16232b;
    border:3px solid #172f35;
    float:right;
}

.right-side-images{
    display:block;
    width:50%;
    padding:1rem;
    float:right;
}
.right-side-images-below{
    display:block;
    width:100%;
    padding:1rem;
    float:right;
}

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
    border: 3px solid black;
}

.slick-prev,.slick-next{
    display:block;
    margin:10px auto;
}

.jcs-carousel-container{
    width:83%;
    margin:7rem 4rem 5rem auto;
    height:auto;
    background-color:#16232b;
    border:3px solid #172f35;
}

@media(max-width:600px){
    .jcs-carousel-container{
        width:90%;
    }
}

 .column1 {
  float: left;
  width: 60%;
}
.column2 {
  float: right;
  width: 40%;
}
</style>