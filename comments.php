<?php get_header(); ?>
if(post_password_required()){
    return;
}
<div class="comments-area" id="comments">
    <?php 
        if(have_comments()):
    ?>
    <h2 class="comment-title">
        <?php
            printf(
                esc_html(_nx('One comment on &ldquo;%2$s&rdquo','%1$s comments on &ldquo;%2$s&rdquo',get_comments_number(), 'comment title'
            )),
                 '<span>'.get_the_title().'</span>'
                );
        ?>
    </h2>
    <ol>
        <?php
            $args = array(
                'walker'            => null,
                'max_depth'         => '',
                'style'             => 'ol',
                'callback'          => null,
                'end-callback'      => null,
                'type'              => 'all',
                'reply_text'        => 'Reply',
                'page'              => '',
                'per_page'          => '',
                'avatar_size'       => 32,
                'reverse_top_level' => null,
                'reverse_children'  => '',
                'format'            => 'html5',
                'short_ping'        => false,
                'echo'              => true, 
            );
            wp_list_comments();
        ?>
    </ol>
        <?php
            if(!comments_open() && get_comments_number()):
        ?>
            <a class="no-comments">
                <?php  esc_html_e('comments are closed','osmeztheme'); ?>
            </a>
        <?php
            endif;
        ?>
    <?php
        endif;
    ?>

</div>
<?php get_footer(); ?>