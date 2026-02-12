<?php
/**
 * Title: Cern Item
 * Slug: cern-commerce/price
 */
?>

<?php 
$price = get_field('cern_commerce_price'); 
?>

<!-- wp:paragraph
    {
        "className":"is-style-default",
        "style":{
            "layout":{"selfStretch":"fit","flexSize":null},
            "elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},
            "typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"800"}
        },
        "textColor":"accent-4","fontSize":"large"
    }
-->
    <p
        class="is-style-default has-accent-4-color has-text-color has-link-color has-large-font-size"
        style="font-style:normal;font-weight:800;text-decoration:none"
    >
        $<?php echo esc_html(number_format($price, 0, '.', ' ')) ?>
    </p>
<!-- /wp:paragraph -->
