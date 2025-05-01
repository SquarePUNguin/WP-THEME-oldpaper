<footer>

<?php wp_nav_menu( [
        'theme_location'  => 'Footer',
        'container'       => false,
        'menu_class'      => 'footer-menu',
        'menu_id'         => '',
        'echo'            => true,
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ] ); ?>
    <style>
        footer *{
        }
        footer{
            border-top:3px solid var(--dark);
            margin-top:1%;
            --marg:2vw;
            margin-left:var(--marg);
            margin-right:var(--marg);
            font-size:clamp(0.40rem,1vw,10rem);
            --pad:1%;
            padding-top:var(--pad);
            padding-bottom:var(--pad);
        }
        footer li{
            list-style:none;
            font-family: 'AnonimusPro';
            font-size: clamp(0.40rem, 1vw, 10rem);
        }
    </style>
</footer>