<?php
    $post = $wp_query->post;
    if ( in_category('ca-case') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case01') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case01-a') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case01-b') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case01-c') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case02') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case02-a') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case02-b') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case02-c') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case02-d') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case03') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case03-a') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case03-b') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case04') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case04-a') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('case04-b') ) {
        include(TEMPLATEPATH.'/_single/case.php');
    } elseif ( in_category('news-info') ) {
        include(TEMPLATEPATH.'/_single/news.php');
    } elseif ( in_category('blog') ) {
        include(TEMPLATEPATH.'/_single/blog.php');
    } elseif ( in_category('news') ) {
        include(TEMPLATEPATH.'/_single/news.php');
    } elseif ( in_category('info-arrival') ) {
        include(TEMPLATEPATH.'/_single/info-arrival.php');
    } else {
        /* カテゴリスラッグ「news, blog, info-arrival」以外の場合はsingle.phpで完結 */
    };
?>