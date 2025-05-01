<header>
    <h1><?php echo get_bloginfo("name");?></h1>
    <div><h2><?php echo single_post_title();?></h2></div>
    <?php wp_nav_menu([
        'theme_location' => 'Header',
        'container' => false,
        'menu_class' => 'navbar-menu',
        'menu_id' => '',
        'echo' => true,
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]);?>
<style>

header{
    margin-top:0px;
    margin-bottom:6vh;
    text-align:center;
    --border1: max(4px , 0.5vh) solid var(--dark);
    --border2: max(2px , 0.25vh) solid var(--dark);
    max-width: 100vw;
}
header h1{
    font-family: 'Playfair';
    line-height:1;
    font-size: clamp(1rem,15vw,24rem);
    font-weight: 400;
}
header>div:has(h2){
    margin-left:2vw;
    margin-right:2vw;
    border-top:var(--border1);
    border-bottom:var(--border2);
}
header div h2{
    font-family:'Playfair';
    line-height:1;
    font-weight:bolder;
    color:var(--secondary);
    font-size:clamp(1rem, 3vw,5rem );
    --marginbor:7px;
    margin-top:var(--marginbor);
    margin-bottom:var(--marginbor);
    border-top:var(--border2);
    border-bottom:var(--border1);
}
header .navbar-menu{
    display:flex;
    overflow-x:scroll;
    --margin:13vw;
    margin:0px var(--margin) 0px var(--margin);
    border-bottom: 1px var(--dark) solid;
    scrollbar-width: none;
}
header .navbar-menu>li{
    flex-shrink: 0;
    display: list-item;
    vertical-align: middle;
    list-style:"\25CE" inside;
    font-family: 'AnonimusPro';
    font-style: italic;
    font-size: clamp(1rem, 1.5vw, 5rem);
}
header .navbar-menu>li>a
{
    --margin:1vw;
    margin:0px var(--margin) 0px var(--margin);
    text-overflow: ellipsis;
}
.sub-menu{
    text-align: left;
    border-width: 1px;
    border-right:none
}

</style>
</header>
