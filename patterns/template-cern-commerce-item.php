<?php
/**
 * Title: Cern Item
 * Slug: cern-commerce/item
 */
?>

<!-- wp:group {
    "className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}
} -->
    <div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
        <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
        <!-- wp:post-content {"fontSize":"medium","layout":{"type":"constrained"}} /-->

        <?php
            $price = get_field('cern_commerce_price');
            $discount = get_field('cern_commerce_discount');
        ?>

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <?php if ($discount) { ?>
                            <!-- wp:pattern {"slug":"cern-commerce/discount"} /-->
                        <?php } else { ?>
                            <!-- wp:pattern {"slug":"cern-commerce/price"} /-->
                        <?php } ?>
                    </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-fill"} -->
                                <div class="wp-block-button is-style-fill">
                                    <?php
                                        $HOST = getenv('SPB_HOST');
                                        $QR_ID = getenv('SPB_QR_ID');
                                        $TYPE = getenv('SPB_QR_TYPE');
                                        $MEMBER_ID = getenv('SPB_MEMBER_ID');
                                        $CUR = getenv('SPB_CUR');
                                        $CRC = getenv('SPB_CRC');

                                        $RUB_TO_USD_EXCHANGE_RATE = getenv('RUB_TO_USD_EXCHANGE_RATE');

                                        $SUM = ($discount ?: $price) * $RUB_TO_USD_EXCHANGE_RATE;

                                        $href = "https://$HOST/$QR_ID?type=$TYPE&bank=$BANK&sum=$SUM&cur=$CUR&crc=$CRC";
                                    ?>

                                    <a
                                        target="_blank"
                                        rel="noreferrer noopener"
                                        href="<?php echo esc_attr(esc_url($href)); ?>"
                                        class="wp-block-button__link wp-element-button"
                                    >
                                        Buy
                                    </a>
                                </div>
                            <!-- /wp:button -->
                        </div>
                    <!-- /wp:buttons -->
                <!-- /wp:group -->
            </div>
        <!-- /wp:group -->
    </div>
<!-- /wp:group -->
