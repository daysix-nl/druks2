       
           <div class="bg-white w-full lg:max-w-[448px] px-1 md:px-[unset]h-fit pt-5 pb-1 rounded-[15px]">
                <div class="flex items-center justify-between w-full max-w-[354px] md:max-w-[533px] lg:max-w-[348px] lg:ml-[47px] mx-auto pl-0 md:pl-3 lg:pl-0">
                    <div class="flex items-center">
                        <!-- <svg class="h-[27px] md:h-[27px] w-[22.85px]" id="shopping-bag" xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 30.791 36.378">
                        <g id="Group_7" data-name="Group 7" transform="translate(0 0)">
                            <g id="ngicon" transform="translate(0 0)">
                            <path id="Path_3" data-name="Path 3" d="M421.632,284.373h-2.357a3.106,3.106,0,0,0-3.1,2.884l-1.521,21.294a3.1,3.1,0,0,0,3.1,3.326h24.581a3.1,3.1,0,0,0,3.1-3.326l-1.521-21.294a3.106,3.106,0,0,0-3.1-2.884h-2.341v-.444a8.429,8.429,0,0,0-8.429-8.429,8.284,8.284,0,0,0-8.429,8.429c.006.147.012.3.017.444Zm16.841,2.662v6.655a1.331,1.331,0,0,1-2.662,0v-6.655H424.277v6.655a1.331,1.331,0,0,1-2.662,0s.115-3.11.077-6.655h-2.418a.443.443,0,0,0-.442.412l-1.522,21.294a.444.444,0,0,0,.443.476h24.581a.444.444,0,0,0,.443-.476l-1.522-21.294a.443.443,0,0,0-.442-.412Zm-2.662-2.662v-.444a5.767,5.767,0,1,0-11.534,0v.444Z" transform="translate(-414.648 -275.5)" fill-rule="evenodd"/>
                            </g>
                        </g>
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.192" height="24.317" viewBox="0 0 25.192 24.317">
                        <path id="shopping-bag" d="M27.946,11.537a.838.838,0,0,0-.664-.339h-4.4A6.749,6.749,0,0,0,16.434,5H14.7a6.749,6.749,0,0,0-6.444,6.2H3.85a.837.837,0,0,0-.674.335,1.022,1.022,0,0,0-.194.785L5.308,26.766A2.912,2.912,0,0,0,8.09,29.317H23.043a2.913,2.913,0,0,0,2.781-2.556L28.15,12.319A1.02,1.02,0,0,0,27.946,11.537ZM14.7,6.907h1.736A4.92,4.92,0,0,1,21.125,11.2H10.008A4.92,4.92,0,0,1,14.7,6.907Zm9.42,19.521a1.122,1.122,0,0,1-1.076.982H8.09a1.122,1.122,0,0,1-1.072-.977L4.883,13.106H26.25Z" transform="translate(-2.969 -5)"/>
                        </svg>

                        <h3 class="font-satoshi text-22 leading-22 text-[#38241B] font-semibold ml-[15px]">Overzicht</h3>
                    </div>
                
                    
                </div>
            
                <div class="w-full max-w-[354px] md:max-w-[533px] lg:max-w-[348px] lg:ml-[47px] mx-auto">
                   
                    
                    <hr class="border-[#B5BBB8] border-1 mt-2">
                    <div class="h-full">
                        <div class="grid gap-2 my-[25px]">
                            <!-- WINKELWAGEN ITEM -->
                            <?php
                            // Haal de inhoud van de winkelwagen op
                            $cart = WC()->cart->get_cart();

                            if (!empty($cart)) {
                                foreach ($cart as $cart_item_key => $cart_item) {
                                    $product = $cart_item['data'];
                                    $product_id = $product->is_type('variation') ? $product->get_parent_id() : $product->get_id();

                                    // Haal de productafbeelding op
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'full'); ?>
                                    <div class="flex w-full justify-between pl-0 md:pl-3 lg:pl-0">
                                     
                                          
                                            <!-- INFORMATIE -->
                                            <div class="w-full">
                                                <div class="flex flex-col justify-between h-full"> 
                                                    <div class="">
                                                        <div class="flex justify-between">
                                                            <a href="<?php the_permalink($product->get_id());?>" class="font-satoshi text-18 leading-18 text-[#2B2828] max-w-[227px] font-semibold"><?php echo esc_html($product->get_name()); ?></a>
                                                            <?php echo '<a class="remove-item" href="' . esc_url(WC()->cart->get_remove_url($cart_item_key)) . '">
                                                            <svg class="w-[29px] h-[29px] ml-[15px]" width="100%" height="auto" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <defs>
                                                                    <rect id="path-hprcwq4s5d-1" x="0" y="0" width="14.792" height="18.609"></rect>
                                                                </defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g id="Group">
                                                                        <g id="Rectangle_377">
                                                                            <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="36" height="36"></rect>
                                                                            <rect id="Rectangle" stroke="#B5BBB8" x="0.5" y="0.5" width="35" height="35"></rect>
                                                                        </g>
                                                                        <g id="Group_380-Clipped" transform="translate(10.604, 8.195)">
                                                                            <mask id="mask-hprcwq4s5d-2" fill="white">
                                                                                <use xlink:href="#path-hprcwq4s5d-1"></use>
                                                                            </mask>
                                                                            <g id="Rectangle_123"></g>
                                                                            <g id="Group_380" mask="url(#mask-hprcwq4s5d-2)" fill="#B5BBB8" fill-rule="nonzero">
                                                                                <g transform="translate(0.0268, -0)" id="Path_205">
                                                                                    <path d="M14.0492465,2.86300955 L10.9492465,2.86300955 L10.9492465,1.67000955 C10.9487169,1.22622032 10.7717771,0.800847448 10.4574083,0.487604072 C10.1430395,0.174360696 9.71703476,-0.00105246773 9.2732465,4.75132112e-06 L5.4602465,4.75132112e-06 C4.53838783,0.00111158952 3.79134854,0.748150881 3.7902465,1.67000955 L3.7902465,2.86300955 L0.689246496,2.86300955 C0.304489826,2.87739611 0,3.193484 0,3.57850955 C0,3.96353509 0.304489826,4.27962298 0.689246496,4.29400955 L0.973246496,4.29400955 L1.7642465,16.1590095 C1.85871945,17.5361773 3.00184551,18.6059477 4.3822465,18.6090095 L10.3542465,18.6090095 C11.7350328,18.606472 12.8787462,17.5365606 12.9732465,16.1590095 L13.7642465,4.29400955 L14.0492465,4.29400955 C14.3112499,4.3038062 14.5576545,4.16961583 14.6915662,3.94420643 C14.8254779,3.71879704 14.8254779,3.43822205 14.6915662,3.21281266 C14.5576545,2.98740326 14.3112499,2.85321289 14.0492465,2.86300955 Z M5.2222465,1.67000955 C5.2222465,1.53801349 5.32925044,1.43100955 5.4612465,1.43100955 L9.2732465,1.43100955 C9.40524255,1.43100955 9.5122465,1.53801349 9.5122465,1.67000955 L9.5122465,2.86300955 L5.2212465,2.86300955 L5.2212465,1.67000955 L5.2222465,1.67000955 Z M6.1732465,13.1220095 C6.15885993,13.5067662 5.84277204,13.811256 5.4577465,13.811256 C5.07272095,13.811256 4.75663306,13.5067662 4.7422465,13.1220095 L4.7422465,8.35000955 C4.75663306,7.96525288 5.07272095,7.66076305 5.4577465,7.66076305 C5.84277204,7.66076305 6.15885993,7.96525288 6.1732465,8.35000955 L6.1732465,13.1220095 Z M9.9902465,13.1220095 C9.97585993,13.5067662 9.65977204,13.811256 9.2747465,13.811256 C8.88972095,13.811256 8.57363306,13.5067662 8.5592465,13.1220095 L8.5592465,8.35000955 C8.54944984,8.08800618 8.68364021,7.8416015 8.90904961,7.70768981 C9.134459,7.57377812 9.41503399,7.57377812 9.64044338,7.70768981 C9.86585278,7.8416015 10.0000432,8.08800618 9.9902465,8.35000955 L9.9902465,13.1220095 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg></a>';?>
                                                        </div>
                                                    </div>  

                                                    <div class="flex justify-between items-center pt-1">
                                                        <div class="flex">
                                                        <?php
                                                            // Haal het aantal items van het specifieke product op in de winkelmand
                                                            $product_cart_quantity = WC()->cart->get_cart_item_quantities();

                                                            // Controleer of het product in de winkelmand zit
                                                            if (isset($product_cart_quantity[$product_id])) {
                                                                $aantal_items = $product_cart_quantity[$product_id];
                                                                echo '' . $aantal_items . ' x  ' . wc_price($product->get_price()) . '';
                                                            } else {
                                                                echo 'Dit product is niet toegevoegd aan de winkelmand.';
                                                            }
                                                            ?>
                                                        </div>
                                                        <!-- <?php echo '<span class="product-price font-satoshi text-16 leading-16 text-[#2B2828] font-semibold">' . wc_price($product->get_price() * $cart_item['quantity']) . '</span>';?> -->
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr class="border-[#B5BBB8] border-1 mt-[20px] mb-[10px]">
                                    
                                    <?php
                                }
                            } else {
                                echo 'Je winkelwagen is leeg.';
                            }
                            ?>
                            <?php
                            if (WC()->cart->get_cart_contents_count() > 0) { ?>
                             
                           
                            <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                                <h4 class="font-satoshi text-16 leading-16 font-semibold text-[#2B2828]">Subtotaal</h4>
                                <p class="font-satoshi text-16 leading-16 font-semibold text-[#2B2828]">
                                    <?php $total = WC()->cart->get_cart_total();
                                    echo '' . $total;
                                    ?>
                                </p>
                            </div>
                            <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                                <h4 class="font-satoshi text-16 leading-16 font-normal text-[#2B2828]">Bezorgkosten</h4>
                                <p class="font-satoshi text-16 leading-16 font-normal text-[#2B2828]">
                                    <?php
                                    $verzendkosten = WC()->cart->shipping_total;

                                    if ($verzendkosten >= 1) {
                                        echo '' . wc_price($verzendkosten);
                                    } else {
                                        echo '<span class="text-[#ff007d]">Gratis</span>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <hr class="border-[#B5BBB8] border-1 mt-[10px] mb-[10px]">
                            <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                                <h4 class="font-satoshi text-16 leading-16 font-semibold text-[#2B2828]">Totaal</h4>
                                <p class="font-satoshi text-16 leading-16 font-semibold text-[#2B2828]">
                                    <?php
                                    $total_bedrag = WC()->cart->total;
                                    echo '' . wc_price($total_bedrag);
                                    ?>
                                </p>
                            </div>
               
                            

                            <hr class="border-[#B5BBB8] border-1 mt-[10px] mb-[10px]">
                            
                            <div class="flex justify-between">
                                <p class="font-satoshi text-16 leading-16 text-[#2B2828]">Betaal veilig met</p>
                                <div class="w-[156px] pb-2">
                                    <img class="w-full" src="https://druksdeal.nl/wp-content/uploads/2023/12/betalingen.png" alt="Betaal opties" class="w-full h-auto">
                                </div>
                            <?php
                            } else {
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>






            </div>

<script>
    function refreshPage() {
        // Wacht 2000 milliseconden (2 seconden) en vernieuw dan de pagina
        setTimeout(function () {
            location.reload();
        }, 2000);
    }
</script>