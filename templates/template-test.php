
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
    <div class="body-text">
        <p>Collegiate Cyber Defense Competition (CCDC) is a competition where a team of nine people attempt to fend off the attack of red team hackers. Jackson College’s CCDC team has partook in every local competition since the inception of CCDN in Michigan in 2007.</p>
        <p>Being on the CCDC team is a great foot in the door for employers, and it helps you stand out from the competition. Being on the CCDC team is also great for social networking. Our CCDC team has members who have gotten their vital first IT job because of their CCDC references.</p>
        <p>Jackson College’s CCDC team is currently recruiting for the 2021 CCDC season. No past experience is required. The majors that are heavily encouraged to apply are Cyber-Security, Computer Networking, Cloud Networking, Programming/Software Engineering, and any other IT degree at Jackson college.</p>
    </div>

</body>

<?php
get_footer();
?>


<script>
    $(document).ready(function(){
        $(".slider-parent").slick({
            slidesToShow: 2,
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
.body-text{
    font-family:"helvetica";
    font-size:20px;
    width:50%;
    text-align:center;
    margin:5rem auto;
}

.slider-parent{
    display:block;
    margin:auto;
    width:40%;
    padding:1rem;
}

@media(max-width:600px){
    .slider-parent{
        width:100%;
    }
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
    background-color:grey;
    /* border:5px solid black; */
}
</style>