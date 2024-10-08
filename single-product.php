<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */

defined( 'ABSPATH' ) || exit;

global $product;


get_header( 'notitle' ); ?>

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>
<main class="daysix">
    <section class="bg-[#012F8C] relative py-[13vw] md:py-[8vw]">
        <div class="w-[95vw] md:w-[70vw] md:ml-[8vw] mx-auto md:mx-[unset] z-[50] relative">
            <h1 class="text-[14vw] leading-[13vw] md:text-[5.7vw] md:leading-[6.7vw] text-white uppercase font-bison">Bestel hier <br class="md:hidden"><span class="text-[#FF008A]">Druks 2</span></h1>
            <p class="text-[4vw] leading-[5.9vw] md:text-[1.2vw] md:leading-[1.9vw] text-white font-satoshi font-bold mt-[5vw] md:mt-[1vw] mr-[2.5vw]">DRUKS 2 zorgt dat je succesvol kunt dealen met je AD(H)D.
<br><br>
Francien spijkert je bij over hoe je nog meer uit je AD(H)D kunt halen, door dingen op geheel eigen’wijze’ uit te vogelen. Ook het succesvolle TIKKIE TERUG AAN DUO hoofdstuk vind je terug in dit boek.
<br><br>
DRUKS 2 is zowel een trap onder je kont als een arm om je heen. Eén ding is zeker: na het lezen van dit boek zal je AD(H)D nooit meer hetzelfde zijn.<br><br>Bestel via onderstaand formulier.</p>
        </div>
        <div class="w-[95vw] md:w-[49vw] mx-auto md:mx-[unset] md:ml-[8vw] z-[50] relative  pt-[7vw] md:pt-[1.5vw]">
            <?php
                    global $product;
                    if ($product->is_type('variable')) { ?>
                        <div class="product-add-single">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    } else { ?>
                        <div class="simple">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    }
                    ?>


        </div>
        <img src="/wp-content/themes/druks2/img/local/background.png" alt="" class="absolute min-h-full min-w-full object-cover object-center top-0 left-0 right-0">
    </section>

    <section class="w-[100vw] h-[180vw] md:h-[55.64vw] overflow-hidden relative">
        <img class="h-full object-cover object-center absolute top-0 left-0 w-full" src="/wp-content/themes/druks2/img/local/bg-druks.png" alt="">
    </section>

    <!-- <section class="bg-[#012F8C] py-[15vw] md:py-[7vw]">
        <h2 class="text-[12vw] leading-[12vw] md:text-[5.7vw] md:leading-[6vw] text-[#fff] uppercase font-bison relative z-[56] text-center mx-auto bg-[#FF008A] w-fit px-[3vw]"><span class="pb-[0.2vw]">Contact</span></h2>
        <p class="text-[4.5vw] leading-[5.9vw] md:text-[1.61vw] md:leading-[2.2vw] text-white font-satoshi font-bold max-w-[79vw] md:max-w-[55vw] mt-[8vw] md:mt-[3vw] text-center mx-auto">Vragen? Interesse? Neem contact met mij op via onderstaand mailadres om de mogelijkheden te bespreken.</p>
        <a href="mailto:hello@francienregelink.nl" class="text-[7vw] md:text-[2.7vw] uppercase font-bison bg-[#CDF200] text-[#000000] md:hover:bg-[#FF93C1] md:hover:text-[#CDF200] rounded-[11px] px-[8vw] md:px-[4vw] py-[0vw] flex items-center w-fit mt-[8vw] md:mt-[3vw] mx-auto md:mx-auto"><span class="mb-[0.2vw]">hello@francienregelink.nl</span></a>
    </section> -->
    
</main>

<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

