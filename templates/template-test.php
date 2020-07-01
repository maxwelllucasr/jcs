
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

<div>hello world</div>

<?php
// get_content();
?>
<body>
    <div style="width:100%;">
        <div class="slider-parent">
            <div class="slider-child"><img src="https://dogstodaymagazine.co.uk/wp-content/uploads/2016/05/placeholder-image-707x500.png"></div>
            <div class="slider-child"><img src="https://dogstodaymagazine.co.uk/wp-content/uploads/2016/05/placeholder-image-707x500.png"></div>
            <div class="slider-child"><img src="https://dogstodaymagazine.co.uk/wp-content/uploads/2016/05/placeholder-image-707x500.png"></div>
            <div class="slider-child"><img src="https://dogstodaymagazine.co.uk/wp-content/uploads/2016/05/placeholder-image-707x500.png"></div>
        </div>
    </div>
</body>

<?php
get_footer();
?>


<script>
    $(document).ready(function(){
        $(".slider-parent").slick()


    })

</script>


<style>
.slider-parent{
    display:block;
    margin:auto;
    width:50%;
}

.slider-parent img{
    display:block;
    margin:auto;
}

.slick-prev,.slick-next{
    display:block;
    margin:10px auto;

}
</style>