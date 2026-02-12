<?php
/**
 * Title: Cern Item
 * Slug: cern-commerce/discount
 */
?>

<?php
$price = get_field('cern_commerce_price'); 
$discount = get_field('cern_commerce_discount'); 
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
        $<?php echo esc_html(number_format($discount, 2, '.', ' ')) ?>
    </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph
    {
        "style":{
            "layout":{"selfStretch":"fit","flexSize":null},
            "elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},
            "typography":{"textDecoration":"line-through"}
        },
        "textColor":"accent-4","fontSize":"medium"
    }
-->
    <p
        class="has-accent-4-color has-text-color has-link-color has-medium-font-size"
        style="text-decoration:line-through"
    >
        $<?php echo esc_html(number_format($price, 2, '.', ' ')) ?>
    </p>
<!-- /wp:paragraph -->
