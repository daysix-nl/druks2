<?php
/**
 * Template name: Afrekenen
 */


 get_header(); ?>

<main class="daysix-checkout ">
    <!-- AFREKENEN -->
    <div class="daysix-afrekenen">
        <section class="bg-[#012F8C] daysix-afrekenen relative py-[13vw] md:py-[8vw]">
            <div class="w-[95vw] md:w-[70vw] md:ml-[8vw] mx-auto md:mx-[unset] z-[50] relative">
                <button
                    onclick="history.go(-1)"
                    class="text-[7vw] md:text-[2.7vw] uppercase font-bison bg-[#CDF200] text-[#FF0079] md:hover:bg-[#FF93C1] md:hover:text-[#CDF200] rounded-[11px] px-[8vw] md:px-[4vw] py-[0vw] flex items-center w-fit relative mb-3">
                    <span class="mb-[0.2vw]">Terug</span>
                </button>
                <h1 class="text-[14vw] leading-[13vw] md:text-[5.7vw] md:leading-[6.7vw] text-white uppercase font-bison">Bestel hier <br class="md:hidden"><span class="text-[#FF008A]">Druks 2</span></h1>
                <p class="text-[4vw] leading-[5.9vw] md:text-[1.2vw] md:leading-[1.9vw] text-white font-satoshi font-bold mt-[5vw] md:mt-[1vw] mr-[2.5vw]">Ik wil maar één ding voor iedereen met AD(H)D, en dat is floreren. Kunnen vertrouwen op je eigen gevoel en je eigen kunnen. Nee durven zeggen, je eigen koers durven varen. Precies dat is wat ik wil bereiken met DRUKS 2. <br><br>Dit boek is zowel een trap onder je kont als een arm om je heen. Eén ding is zeker: na het lezen van dit boek zal je AD(H)D nooit meer hetzelfde zijn.<br><br>Bestel via onderstaand formulier. </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 relative gap-3 w-[95vw] md:w-[85vw] mx-auto">
                <div class="z-[50] relative pt-[7vw] md:pt-[1.5vw] daysix">
                    <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
                </div>
                <div class="z-[50] justify-end h-fit hidden lg:flex">
                    <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
                </div>
            </div>
        
            <img src="/wp-content/themes/druks2/img/local/background.png" alt="" class="absolute min-h-full min-w-full object-cover object-center top-0 left-0 right-0">
        </section>

    <section id="faq" class="bg-zalm py-[13vw] md:py-[8vw]">
        <div class="w-[95vw] md:w-[70vw] md:ml-[8vw] mx-auto md:mx-[unset]">
            <h2 class="text-[12vw] leading-[12vw] md:text-[5.7vw] md:leading-[6vw] text-[#fff] uppercase font-bison relative z-[56] text-center  bg-pink w-fit px-[3vw] mb-[6vw] md:mb-[3vw]"><span class="pb-[0.2vw]">Veelgestelde vragen</span></h2>
            <!-- <p class="text-[4vw] leading-[5.9vw] md:text-[1.2vw] md:leading-[1.9vw] text-black-text font-satoshi font-bold mt-[8vw] md:mt-[3vw] mb-[6vw] md:mb-[3vw]">Ik probeer hier de meest gestelde vragen rondom het DUO hoofdstuk te beantwoorden, zodat je kunt bepalen of het hoofdstuk ook op jouw situatie van toepassing is. Staat je vraag er niet tussen, stuur mij dan een DM op Instagram en dan probeer ik deze alsnog te beantwoorden. DUO heeft deze regeling in het leven geroepen om je als student met een functiebeperking te ondersteunen. Je komt onder in aanmerking voor deze regeling als je adhd, add, autisme, dyslexie, angststoornis of ptss hebt.</p> -->
        </div>
        <div class="w-[95vw] md:w-[84vw] md:ml-[8vw] mx-auto md:mx-[unset] grid gap-[15px]">
            <div class="accordion-item rounded-[20px]"> 
                <button class="accordion text-14 leading-22 lg:text-18 lg:leading-30 py-2 px-[25px] lg:px-3 lg:py-[25px] flex items-center font-bold">Wanneer kan ik mijn bestelling verwachten?</button>
                <div class="panel px-[25px] lg:px-3">
                    <p class="pb-3 pt-1 text-14 leading-22 lg:text-18 lg:leading-30">Het pakketje dient uiterlijk binnen vijf werkdagen bij jou te zijn. <br><br>Let op: vanwege de (geweldige) verpakking wordt het pakketje soms al open gemaakt door bezorgers. Het komt zelfs voor dat het pakketje soms helemaal niet aankomt, terwijl deze wel zichtbaar is in je app. Dit is heel spijtig, maar ook een compliment, want de verkapping is dus bijna te goed ;-). Mail ons dan gerust even op hello@francienregelink.nl, zodat er een nieuw exemplaar jouw kant uitkomt. 
                    </p>
                </div>
            </div>

            <div class="accordion-item rounded-[20px]"> 
                <button class="accordion text-14 leading-22 lg:text-18 lg:leading-30 py-2 px-[25px] lg:px-3 lg:py-[25px] flex items-center font-bold">Betaalmethodes</button>
                <div class="panel px-[25px] lg:px-3">
                    <p class="pb-3 pt-1 text-14 leading-22 lg:text-18 lg:leading-30">De betaalmethoden waaruit je kunt kiezen zijn: iDeal, Visa, Mastercard, Bancontact, Klarna & PayPal. <br><br>Als je Klarna als betaalmethode kiest, betaal je pas als je je bestelling hebt ontvangen.<br><br>Binnen enkele dagen na ontvangst van je bestelling ontvang je een e-mail van Klarna met de betalingsgegevens. Je hebt dan 30 dagen de tijd om de factuur met Klarna te betalen.
                    </p>
                </div>
            </div>

            <div class="accordion-item rounded-[20px]"> 
                <button class="accordion text-14 leading-22 lg:text-18 lg:leading-30 py-2 px-[25px] lg:px-3 lg:py-[25px] flex items-center font-bold">Retourneren</button>
                <div class="panel px-[25px] lg:px-3">
                    <p class="pb-3 pt-1 text-14 leading-22 lg:text-18 lg:leading-30">Heb je een boek besteld, maar wil je deze toch retourneren? Bij ons kun je binnen 14 dagen na ontvangst je bestelling (op eigen kosten) terugsturen. Belangrijk is dat je je items aanmeldt via hello@francienregelink.nl onder vermelding van je eigen naam en ordernummer. Indien het product niet wordt aangemeld, wordt deze helaas niet in behandeling genomen. Let op: De boeken dienen in de originele verpakking en ongelezen/gevouwen te worden teruggestuurd. Indien wij je bestelling hebben ontvangen, zal het aankoopbedrag binnen 14 dagen worden teruggestort op jouw rekening.<br><br>Je bestelling dient geretourneerd naar onderstaand adres:
<br><br>
MINC E-commerce B.V.<br>
Retouren DRUKSDEAL <br>
Rendementsweg 6<br>
3641 SK Mijdrecht
                    </p>
                </div>
            </div>

            <div class="accordion-item rounded-[20px]"> 
                <button class="accordion text-14 leading-22 lg:text-18 lg:leading-30 py-2 px-[25px] lg:px-3 lg:py-[25px] flex items-center font-bold">Kan ik het afleveradres wijzigingen?</button>
                <div class="panel px-[25px] lg:px-3">
                    <p class="pb-3 pt-1 text-14 leading-22 lg:text-18 lg:leading-30">Helaas is het niet mogelijk om – na aankoop – het afleveradres nog te wijzigen. Dit komt doordat de bestelling gelijk wordt opgepakt door de distributie partij.
                    </p>
                </div>
            </div>

            

            
        </div>
    </section>


        <section class="w-[100vw] h-[180vw] daysix-afrekenen md:h-[55.64vw] overflow-hidden relative">
            <img class="h-full object-cover object-center absolute top-0 left-0 w-full" src="/wp-content/themes/druks2/img/local/bg-druks.png" alt="">
        </section>

        <section class="bg-[#012F8C] daysix-afrekenen py-[15vw] md:py-[7vw]">
            <h2 class="text-[12vw] leading-[12vw] md:text-[5.7vw] md:leading-[6vw] text-[#fff] uppercase font-bison relative z-[56] text-center mx-auto bg-[#FF008A] w-fit px-[3vw]"><span class="pb-[0.2vw]">Contact</span></h2>
            <p class="text-[4.5vw] leading-[5.9vw] md:text-[1.61vw] md:leading-[2.2vw] text-white font-satoshi font-bold max-w-[79vw] md:max-w-[55vw] mt-[8vw] md:mt-[3vw] text-center mx-auto">Vragen? Interesse? Neem contact met mij op via onderstaand mailadres om de mogelijkheden te bespreken.</p>
            <a href="mailto:hello@francienregelink.nl" class="text-[7vw] md:text-[2.7vw] uppercase font-bison bg-[#CDF200] text-[#000000] md:hover:bg-[#FF93C1] md:hover:text-[#CDF200] rounded-[11px] px-[8vw] md:px-[4vw] py-[0vw] flex items-center w-fit mt-[8vw] md:mt-[3vw] mx-auto md:mx-auto"><span class="mb-[0.2vw]">hello@francienregelink.nl</span></a>
        </section>
    </div>

    <!-- BEDANKT -->
    <div class="daysix-bedankt">
        <section class="bg-[#012F8C] relative min-h-[100dvh] overflow-hidden flex items-center justify-center">
            <div class="pb-[60px]">
                <div class="container relative z-[99] mb-3">
                    <h1 class="text-[11vw] leading-[11vw] md:text-[5.7vw] md:leading-[6.7vw] text-white uppercase font-bison text-center">De Drukskoerier komt zo je kant op!</h1>
                </div>
                <div class="w-[80vw] md:w-[50vw] mx-auto z-[99] relative">
                    <img src="/wp-content/themes/druks2/img/local/ezgif-1-738b510f54.gif" alt="" class="w-full">
                </div>
            </div>
            <img src="/wp-content/themes/druks2/img/local/background.png" alt="" class="absolute min-h-full min-w-full object-cover object-center top-0 left-0 right-0">
        </section>
    </div>
    
</main>
<?php get_footer(''); ?>



