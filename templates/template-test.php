
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

<?php
// get_content();
?>
<body>
    <div class="jcs-carousel-container">       
        <div class="slider-parent">
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985338.jpg"></div>
            <div class="slider-child"><img src="https://jacksoncyberspace.com/wp-content/uploads/2020/07/hacker-with-laptop_23-2147985341.jpg"></div>
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
            // adaptiveHeight:true
            variableHeight:true,
        });
    })
    
</script>


<style>
.slider-parent{
    display:block;
    margin:auto;
    width:40%;
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
    width:100%;
    margin:9rem auto 1rem auto;
    height:auto;
}
</style>