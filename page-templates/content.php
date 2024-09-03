<?php
/**
 * Template name: Content
 */


 get_header(); ?>
<main class="bg-[#012F8C] min-h-screen">
    <div class="relative w-screen overflow-hidden">
        <div class="w-[95vw] md:w-[70vw] md:ml-[8vw] mx-auto md:mx-[unset] z-[50] relative my-6 md:my-12">
                <button
                onclick="history.go(-1)"
                class="text-[7vw] md:text-[2.7vw] uppercase font-bison bg-[#CDF200] text-[#FF0079] md:hover:bg-[#FF93C1] md:hover:text-[#CDF200] rounded-[11px] px-[8vw] md:px-[4vw] py-[0vw] flex items-center w-fit relative mb-3">
                <span class="mb-[0.2vw]">Terug</span>
                </button>
                <h1 class="text-[14vw] leading-[13vw] md:text-[5.7vw] md:leading-[6.7vw] text-white uppercase font-bison"><?php the_title() ?></h1>
                <?php the_content(); ?>
        </div>
        <img src="/wp-content/themes/druks2/img/local/background.png" alt="" class="absolute min-h-full min-w-full object-cover object-center top-0 left-0 right-0">
    </div>

    <section class="w-[100vw] h-[180vw] md:h-[55.64vw] overflow-hidden relative">
        <a href="/druks-2" class="cursor-default">
            <img class="h-full object-cover object-center absolute top-0 left-0 w-full" src="/wp-content/themes/druks2/img/local/bg-druks.png" alt="">
        </a>
    </section>

    <!-- <section class="bg-green py-[15vw] md:py-[7vw]">
        <h2 class="text-[12vw] leading-[12vw] md:text-[5.7vw] md:leading-[6vw] text-[#012F8C] uppercase font-bison relative z-[56] text-center mx-auto bg-white w-fit px-[3vw]"><span class="pb-[0.2vw]">Contact</span></h2>
        <p class="text-[4.5vw] leading-[5.9vw] md:text-[1.61vw] md:leading-[2.2vw] text-[#000000] font-satoshi font-bold max-w-[79vw] md:max-w-[55vw] mt-[8vw] md:mt-[3vw] text-center mx-auto">Vragen? Interesse? Neem contact met mij op via onderstaand mailadres om de mogelijkheden te bespreken.</p>
        <a href="mailto:hello@francienregelink.nl" class="text-[7vw] md:text-[2.7vw] uppercase font-bison bg-[#012F8C] text-[#fff] md:hover:bg-[#FF93C1] md:hover:text-[#CDF200] rounded-[11px] px-[8vw] md:px-[4vw] py-[0vw] flex items-center w-fit mt-[8vw] md:mt-[3vw] mx-auto md:mx-auto"><span class="mb-[0.2vw]">hello@francienregelink.nl</span></a>
    </section> -->
</main>
<?php get_footer(''); ?>