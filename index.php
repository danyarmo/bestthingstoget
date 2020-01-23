<?php 

get_header(); // header goes here

if(have_posts()) :
    while(have_posts()) : the_post();

     ?>

    <h2><a href="<?php the_permalink( ); ?> "> <?php the_title(); ?></a></h2>
    <?php the_content( ); ?>

<?php endwhile;

else :
    echo '<p>No content found</p>' ;

endif;
?>
<div class="container">
    <div class="container">
        <div class="card-columns">
<div class="card">
                <!--Raspberry Pi 3-->
                <a href="raspberry-pi-3"><img class="card-img-top" src="images/raspberry-pi-3.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title"><a href="raspberry-pi-3" class="text-light">Raspberry Pi 3 starter pack </a></h5>
                    <p class="card-text">The Raspberry Pi revolutionized the computer industy by offering computing power for a (very) affordable price...</p>
                    <hr />
                    <a href="https://www.adafruit.com/product/3058" target="_blank" class="btn btn-primary">View on Adafruit.com</a>
                    <p class="price">$84.95</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>