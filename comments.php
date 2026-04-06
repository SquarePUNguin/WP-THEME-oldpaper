<br>
<hr />
<div id="comments" class="comments-area">
    <?php

    // The comment Query
    $comments = get_comments([
        'post_id' => $post->ID,
        'status' => 'approve',
        'post_status' => 'publish',
        'hierarchical' => true
    ]);
    // Comment Loop
    if ($comments) {
        wp_list_comments($comments);
    }
    ?>
</div>
<?php comment_form() ?>
<style>
    .comments-area {}

    .comment {
        font-size: clamp(0.5rem, 1vw, 10rem);
        font-family: "AnonimusPro";
        font-weight: bold;
        color: var(--dark);
        list-style: none;
        border-left: 0.125vw double var(--secondary);
        padding-left: 0.5vw;
    }

    .comment cite>a {
        font-size: clamp(0.75rem, 1.25vw, 12rem);
    }

    .comment a {
        color: var(--secondary)
    }

    .comment img {
        border-radius: 100px;
    }

    .children>.comment {
        margin-left: 0.25vw;
        font-size: clamp(0.35rem, 0.8vw, 8rem);
        font-weight: normal;
        border: none;
        padding: 0px;
    }

    .children .comment>cite>a {
        font-size: clamp(0.6rem, 1vw, 10rem);
    }

    /**/
    .comment-respond {
        border-top: 0.125vw solid var(--secondary)
    }
    .comment-respond a{
        color: var(--secondary);
    }
    .comment-respond h3 {
        font-size: clamp(0.5rem, 2vw, 10rem);
        font-family: 'Playfair';
    }

    .comment-respond p {
        font-family: "AnonimusPro";
    }

    .comment-respond p label::after {
        content: "\a";
        white-space: pre;
    }

    .comment-respond .form-submit input {
        color: var(--secondary);
        border: 0.25vw double var(--secondary);
        font-family: "Playfair";
        border-radius: 5px;
        padding: 0.15vw 0.5vw 0.15vw 0.5vw;
        font-size: clamp(0.8rem, 0.1vw, 10rem);
        margin-top: 1vh;
    }

    .comment-respond form p:not(:first-child):has(.required) {
        color: var(--secondary)
    }

    .comment-respond textarea {
        background: none;
        border: rgb(235, 227, 209) 0.5vw solid;
        border-style: inset;
        font-family: "HandWR";
        font-size: clamp(1rem, 1.2vw, 10rem);
        color: var(--secondary);
        padding: 0.25vw;
    }
    .comment-respond input{
        background: none;
        border:rgb(235, 227, 209) 0.4vw solid;
        border-style: inset;
        padding: 0.25vw;
        font-family: "HandWR";
        color:var(--dark)
    }

    /* .comment-respond input[type="checkbox"]{}  */
</style>