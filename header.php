<?php if(isset($post->ID))$slogan = get_post_meta($post->ID, 'slogan', true) ?>
<?php $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
<header>
    <div>
        <div>
            <H1><?php echo get_bloginfo("name"); ?></H1>
            <div>
                <?php if (has_custom_logo()) {
                    echo "<a href=" . get_permalink(get_page_by_path('Front Page')) . "><img src=" . $logo[0] . "></a><div></div>";
                }?>
                <?php if (!empty($slogan)) {
                    echo "<div class='slogan'><p>" . $slogan . "</p></div>";
                } else {
                } ?>
            </div>
        </div>
        <p class="time">12 sdl;fsd 2025</p>
    </div>
    <div>
    <?php wp_nav_menu([
        'theme_location' => 'Header',
        'container' => false,
        'menu_class' => 'navbar-menu',
        'menu_id' => '',
        'echo' => true,
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]); ?>
    </div>
    <style>
        /*header stuff*/
        header {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 0.25fr;
            margin-top: 3vh;
        }

        /*header upper stuff*/
        /*heder flexes*/
        header>:nth-child(1) {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin: 2vw;
            margin-bottom: 0px;
            margin-top: 0px;

        }

        header>:nth-child(1)>:nth-child(1) {
            display: flex;
            justify-content: space-between;
        }

        header>:nth-child(1)>:nth-child(1) h1 {
            font-family: 'Playfair';
            border: var(--dark) solid 1px;
            text-align: center;
            line-height: 175%;
            font-size: clamp(0.1rem, 7.5vw, 24rem);
            font-weight: 400;
            overflow-x: hidden;
            height: clamp(10px, 30vh, 15vw);
            width: 49vw;
        }

        header>:nth-child(1)>:nth-child(1)>:nth-child(2) {
            width: 35%;
        }

        header>:nth-child(1)>:nth-child(1)>:nth-child(2):has(.slogan) {
            display: grid;
            grid-template-columns: 1fr 0.25fr 1fr;
            grid-template-rows: 1fr;
        }

        header>:nth-child(1)>:nth-child(1)>:nth-child(2)>.slogan {
            border: var(--dark) 1px solid;
            color: var(--secondary);
            --height: clamp(10px, 30vh, 15vw);
            height: var(--height);
            overflow-y: scroll;
        }

        header>:nth-child(1)>:nth-child(1)>:nth-child(2)>.slogan>p {
            overflow-y: scroll;
            font-size: clamp(0.25rem, 1vw, 10rem);
        }

        header>:nth-child(1)>:nth-child(2) {
            color: var(--secondary);
            align-self: flex-start;
            font-size: 0.7rem;
            width: 100%;
        }

        header>:nth-child(1)>:nth-child(1)>a {
            width: 14vw;
            height: auto;
        }

        header>:nth-child(1)>:nth-child(1) img {
            border-radius: 100%;
            border: var(--dark) 1px solid;
            padding: 4%;
            object-fit: cover;
            height: auto;
            width: 14vw;
        }

        /*header date text*/
        header>:nth-child(1)>:nth-child(2) {
            font-family: 'AnonimusPro';
            font-size: clamp(0.40rem, 1vw, 10rem);
        }

        /*header nav bar*/
        header>:nth-child(2) {
            --border: var(--dark) double;
            border-top: var(--border) 10px;
            border-bottom: var(--border) 15px;
        }
        header>:nth-child(2)>ul {
            display: flex;
            flex-direction: row;
            gap:1px;
            overflow-x: scroll;
            scrollbar-width: none;
            padding-left: 2vw;
            padding-right: 2vw;
        }


        header>:nth-child(2)>ul>li {
            display: list-item;
            list-style: "\25CE" inside;
            font-family: 'AnonimusPro';
            font-style: italic;
            font-size: clamp(1rem, 1.5vw, 5rem);
            white-space:nowrap;
            margin-right:1%;
        }

        header>:nth-child(2)>ul>li>a {
            margin-left: 2%;
            text-overflow: ellipsis;
            text-decoration: none;
        }
    </style>
</header>