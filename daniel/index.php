<?php
$GLOBALS['_ta_campaign_key'] = 'f9a9d00ff0a88876c23e1b273d9de3d5';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=f9a9d00ff0a88876c23e1b273d9de3d5' parameter

require 'bootloader_bd666561232e46ed2c1aa9753a84432c.php';

$campaign_id = '62pdb3';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>



<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Daniel Radcliffe keeps it casual in khaki coat and blue jeans as he grabs a coffee while on a stroll in New York</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimzied" content="width">
    <meta name="referrer" content="always">
    <meta name="theme-color" content="#ffffff">
    <style>

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%
}

::-moz-selection {
    background: #000;
    color: #fff;
    text-shadow: none
}

::selection {
    background: #000;
    color: #fff;
    text-shadow: none
}

a {
    text-decoration: none;
    cursor: pointer;
    color: #333
}

a:hover {
    text-decoration: underline
}

b,
strong {
    font-weight: 700
}

em,
i {
    font-style: italic
}

img {
    -ms-interpolation-mode: bicubic;
    vertical-align: middle
}

svg:not(:root) {
    overflow: hidden
}

input {
    font-size: 1em;
    margin: 0;
    vertical-align: baseline;
    *vertical-align: middle;
    line-height: normal
}

input[type="submit"] {
    cursor: pointer;
    -webkit-appearance: button;
    *overflow: visible
}

input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input:invalid {
    background-color: #f0dddd
}

html {
    overflow: auto;
    overflow-y: scroll;
    width: 100%;
    height: 100%;
    position: relative;
    background: #fff;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

* {
    max-height: 1000000px
}

*,
:before,
:after {
    -moz-box-sizing: inherit;
    box-sizing: inherit
}

body {
    margin: 0;
    padding: 0;
    font-size: 16px;
    line-height: 1.5;
    font-family: "Montserrat", Arial, sans-serif;
    width: 100%;
    min-width: 320px;
    min-height: 100%;
    position: relative;
    display: block;
    background: #e8e8e8
}

a {
    text-decoration: none
}

a:hover {
    text-decoration: none
}

input[type="text"],
input[type="email"] {
    border: 1px solid #dfdfdf;
    background: #fff;
    font-family: "NotoSans", Arial, sans-serif;
    position: relative;
    margin: 0;
    font-size: 11px;
    outline: none;
    padding: 7px 14px;
    display: block;
    font-weight: 600;
    width: 100%
}

.svg-sprite {
    display: none;
    position: absolute;
    width: 0;
    height: 0;
    overflow: hidden
}

.the-in-carousel {
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.the-in-carousel * {
    -moz-box-sizing: inherit;
    box-sizing: inherit
}

.the-in-carousel,
.the-in-carousel__frame,
.the-in-carousel__pack {
    position: relative
}

.the-in-carousel__stage,
.the-in-carousel__frame {
    overflow: hidden
}

.the-in-carousel__frame.m-scroll {
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch
}

.the-in-carousel__pack {
    position: relative;
    -ms-user-select: none;
    user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none
}

.the-in-carousel__pack:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
    font-size: 0
}

.the-in-carousel__item {
    display: inline-block;
    min-height: 1px
}

.statistic {
    position: relative;
    margin: 0 -5px;
    display: block;
    line-height: 20px
}

.statistic__item {
    display: inline-block;
    vertical-align: top;
    margin: 0 5px;
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: #adadad
}

.statistic__item i {
    display: inline-block;
    vertical-align: top;
    margin-right: 2px;
    width: 20px;
    height: 20px
}

.statistic__item .svg-icon {
    width: 100%;
    height: 100%;
    fill: #adadad
}

.page__width {
    width: 100%;
    max-width: 1440px;
    min-width: 320px;
    margin: 0;
    padding: 0;
    position: relative
}

.page__width:after {
    content: '';
    display: block;
    clear: both;
    font-size: 0;
    line-height: 0;
    height: 0
}

.page {
    position: relative;
    display: block;
    width: 100%;
    min-width: 20em
}

.page__bg {
    background: #f2f2f2;
    box-shadow: rgba(0, 0, 0, 0.15) 0 1px 2px
}

.m-article-page .page__bg {
    background: #fff
}

.content {
    position: relative;
    padding: 10px 5px
}

.m-article-page .content {
    padding: 0
}

@media only screen and (min-width: 480px) {
    .content {
        padding: 10px
    }
}

.content:after {
    content: '';
    display: block;
    font-size: 0;
    line-height: 0;
    height: 0;
    clear: both
}

.endless {
    position: relative
}

.endless:after {
    content: '';
    display: block;
    font-size: 0;
    line-height: 0;
    height: 0;
    clear: both
}

.endless__item {
    position: relative
}

.endless__item-bg {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #fff;
    z-index: 80
}

.endless__item-content {
    position: relative;
    z-index: 100
}

.endless.m-follow-fixed .endless__item-content {
    box-shadow: rgba(0, 0, 0, 0.1) 0 3px 2px
}

.endless.m-follow-fixed .endless__item:last-child .endless__item-content {
    box-shadow: none
}

.layout-article {
    position: relative;
    padding: 10px 10px 40px
}

.endless__item .layout-article {
    padding-top: 50px
}

@media only screen and (min-width: 768px) {
    .endless__item .layout-article {
        padding-top: 100px
    }
}

.endless__item:first-child .layout-article {
    padding-top: 10px
}

.layout-article__over {
    position: relative
}

.layout-article__over:after {
    content: '';
    display: block;
    font-size: 0;
    line-height: 0;
    height: 0;
    clear: both
}

.layout-article__main {
    width: 100%;
    position: relative
}

@media only screen and (min-width: 480px) {
    .layout-article__main {
        padding: 0 10px
    }
}

@media only screen and (min-width: 1160px) {
    .layout-article:not(.m-width1000):not(.m-width1440):not(.m-width-max) .layout-article__main {
        float: left;
        padding: 0 300px 0 0
    }
}

.layout-article__600-align {
    max-width: 600px;
    margin: 0 auto;
    position: relative
}

.layout-article__600-align:after {
    content: '';
    display: block;
    font-size: 0;
    line-height: 0;
    height: 0;
    clear: both
}

@media only screen and (min-width: 1160px) {
    .layout-article:not(.m-width1000):not(.m-width1440):not(.m-width-max) .layout-article__600-align {
        width: 600px;
        float: right;
        margin-right: 100px
    }
}

.layout-article__right-column {
    display: none
}

@media only screen and (min-width: 1160px) {
    .layout-article__right-column {
        position: relative;
        display: block;
        float: left;
        border: 0;
        padding: 0;
        margin-left: -340px;
        width: 320px
    }
}

.layout-article__right-column-block {
    width: 100%;
    position: relative;
    overflow: hidden
}

.header {
    position: relative;
    height: 46px
}

@media only screen and (min-width: 768px) {
    .header {
        height: 60px
    }
}

body.m-header-brand .header {
    height: 100px
}

@media only screen and (min-width: 480px) {
    body.m-header-brand .header {
        height: 130px
    }
}

.header__brand {
    position: relative;
    width: 100%;
    min-height: 100%
}

.m-article-page .header__brand {
    z-index: 92
}

.header__brand-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    overflow: hidden;
    height: 65px
}

@media only screen and (min-width: 480px) {
    .header__brand-bg {
        height: 81px
    }
}

@media only screen and (min-width: 640px) {
    .header__brand-bg {
        height: 263px
    }
}

@media only screen and (min-width: 1160px) {
    .header__brand-bg {
        height: 321px
    }
}

.header__brand-align {
    position: relative;
    max-width: 620px;
    margin: 0 auto
}

@media only screen and (min-width: 480px) {
    .header__brand-align {
        max-width: 640px
    }
}

@media only screen and (min-width: 1160px) {
    .header__brand-align {
        position: absolute;
        right: 410px;
        width: 600px
    }
}

.header__brand-image {
    position: absolute;
    top: 0
}

.header__brand-image .header__brand-image-desk {
    display: none
}

body.m-article-page .header__brand-image {
    width: 359px;
    height: 65px;
    left: 0;
    overflow: hidden
}

body.m-article-page .header__brand-image .svg-graphic {
    margin: 0 0 0 -13px;
    width: 373px;
    height: 64px
}

@media only screen and (min-width: 480px) {
    body.m-article-page .header__brand-image {
        width: 469px;
        height: 81px
    }
    body.m-article-page .header__brand-image .svg-graphic {
        margin: 0;
        width: 469px;
        height: 81px
    }
}

@media only screen and (min-width: 640px) {
    body.m-article-page .header__brand-image {
        width: 686px;
        height: 263px;
        left: -260px
    }
    body.m-article-page .header__brand-image .svg-graphic {
        margin: 0 0 0 -150px;
        width: 1311px;
        height: 321px
    }
    body.m-article-page .header__brand-image .header__brand-image-mob {
        display: none
    }
    body.m-article-page .header__brand-image .header__brand-image-desk {
        display: block
    }
}

@media only screen and (min-width: 1160px) {
    body.m-article-page .header__brand-image {
        width: 1311px;
        height: 321px;
        left: -430px
    }
    body.m-article-page .header__brand-image .svg-graphic {
        margin: 0;
        width: 1311px;
        height: 321px
    }
}

.header__menu {
    position: relative;
    height: 46px;
    padding: 0 4px;
    -webkit-transition: all .25s;
    -o-transition: all .25s;
    -moz-transition: all .25s;
    transition: all .25s
}

.header__brand .header__menu {
    position: absolute;
    top: 10px;
    right: 10px;
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.7)
}

@media only screen and (min-width: 768px) {
    .header__brand .header__menu {
        padding: 0 6px;
        top: 15px;
        right: 15px;
        border-radius: 17px;
        height: 60px;
        padding: 0 8px
    }
}

.header__menu-button {
    float: left;
    position: relative;
    display: block;
    width: 38px;
    height: 46px;
    padding: 6px 2px;
    -webkit-transition: all .25s;
    -o-transition: all .25s;
    -moz-transition: all .25s;
    transition: all .25s
}

@media only screen and (min-width: 375px) {
    .header__menu-button {
        width: 44px;
        padding: 6px 5px
    }
}

@media only screen and (min-width: 768px) {
    .header__brand .header__menu-button {
        width: 54px;
        height: 60px;
        padding: 10px 7px
    }
}

.header__menu-icon-l,
.header__menu-icon-s {
    position: relative;
    width: 100%;
    height: 100%
}

.header__menu-icon-l .svg-icon,
.header__menu-icon-s .svg-icon {
    width: 100%;
    height: 100%;
    fill: #574a00
}

.header__menu-button:hover .header__menu-icon-l .svg-icon,
.header__menu-button:hover .header__menu-icon-s .svg-icon {
    fill: rgb(230, 255, 118)
}

.header__menu-icon-s {
    display: block
}

@media only screen and (min-width: 1160px) {
    .header__brand .header__menu-icon-s {
        display: none
    }
}

.header__menu-icon-l {
    display: none
}

@media only screen and (min-width: 1160px) {
    .header__brand .header__menu-icon-l {
        display: block
    }
}

.footer {
    position: relative;
    background: #fff;
    color: #333;
    padding: 20px 10px 44px;
    overflow: hidden
}

@media only screen and (min-width: 480px) {
    .footer {
        padding: 20px 20px 44px
    }
}

.footer__top {
    position: relative
}

.footer__social {
    margin: 0 auto 40px;
    height: 40px
}

@media only screen and (min-width: 1235px) {
    .footer__social {
        margin-left: 180px;
        margin-right: 180px
    }
}

.footer__social-list {
    left: 0;
    text-align: center;
    height: 40px;
    overflow: hidden;
    margin: 0 -10px;
    padding: 0 9px;
    white-space: nowrap
}

@media only screen and (min-width: 480px) {
    .footer__social-list {
        margin: 0 -20px;
        padding: 0 19px
    }
}

@media only screen and (min-width: 1235px) {
    .footer__social-list {
        margin: 0 -1px;
        padding: 0 1px
    }
}

.footer__social-list.the-in-carousel__ready {
    padding: 0;
    margin: 0 -10px;
    white-space: normal
}

@media only screen and (min-width: 480px) {
    .footer__social-list.the-in-carousel__ready {
        margin: 0 -20px
    }
}

@media only screen and (min-width: 1235px) {
    .footer__social-list.the-in-carousel__ready {
        margin: 0
    }
}

.footer__social-wr {
    display: inline-block;
    vertical-align: top;
    width: 78px;
    position: relative
}

body.m-ria .footer__social-wr {
    width: 74px
}

body.m-ria .the-in-carousel__item .footer__social-wr,
.the-in-carousel__item .footer__social-wr {
    width: 100%
}

.footer__social-button {
    height: 40px;
    background: #c2c2c2;
    display: block;
    margin: 0 1px
}

.footer__social-button .svg-icon {
    width: 30px;
    height: 30px;
    fill: #fff;
    position: absolute;
    display: block;
    top: 50%;
    left: 50%;
    margin: -15px 0 0 -15px
}

.footer__social-button.m-vkontakte {
    background: #778db0
}

.footer__social-button.m-facebook {
    background: #1877F2
}

.footer__social-button.m-odnoklassniki {
    background: #f48420
}

.footer__social-button.m-twitter {
    background: #00b5f5
}

.footer__social-button.m-instagram {
    background: #d23574
}

.footer__social-button.m-telegram {
    background: #2ca5e0
}

.footer__social-button.m-viber {
    background: #7b519d
}

.footer__social-button.m-youtube {
    background: #e52d27
}

.footer__social-button.m-tamtam {
    background: #4e6afb
}

.footer__social-button.m-breakingnews {
    background: #d00915
}

.footer__social-button.m-zen {
    background: #000
}

.the-in-carousel__item .footer__social-button {
    margin: 0
}

.footer__rubric {
    margin: 0 -10px 40px;
    position: relative
}

@media only screen and (min-width: 480px) {
    .footer__rubric {
        margin: 0 -20px 40px
    }
}

.footer__rubric-list {
    position: relative;
    overflow: hidden;
    text-align: center;
    white-space: nowrap;
    padding: 0 5px
}

@media only screen and (min-width: 480px) {
    .footer__rubric-list {
        padding: 0 15px
    }
    .footer__rubric-list.the-in-carousel__ready {
        padding: 0
    }
}

.footer__rubric-item {
    display: inline-block;
    vertical-align: top;
    padding: 0 5px;
    white-space: normal
}

.footer__rubric-item a {
    font-weight: 700;
    font-size: 14px;
    color: #777;
    font-family: "NotoSans", Arial, sans-serif
}

.footer__rubric-list.the-in-carousel__ready {
    white-space: normal;
    padding: 0
}

.footer__rubric-list.the-in-carousel__ready .footer__rubric-item {
    display: block
}

.media {
    position: relative;
    display: block
}

.media img {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 auto
}

.media__size {
    position: relative;
    margin: 0
}

.media__copyright {
    font-family: "NotoSans", Arial, sans-serif;
    color: #adadad;
    text-align: left;
    font-weight: 400;
    padding-top: 10px;
    line-height: 1.1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    overflow: hidden
}

.media__copyright-item {
    display: inline-block;
    position: relative;
    margin-right: 9px;
    margin-left: -9px;
    padding-left: 9px;
    font-size: 10px;
    line-height: 13px;
    vertical-align: top
}

.media__copyright-item:after {
    content: '/';
    position: absolute;
    top: 0;
    left: 3px
}

.media__copyright-item:first-child {
    margin-left: 0;
    padding-left: 0
}

.media__copyright-item:first-child:after {
    content: '';
    display: none
}

.media__copyright-item:last-child {
    margin-right: 0
}

.share {
    position: relative;
    display: block;
    z-index: 150
}

.share a {
    width: 40px;
    height: 40px;
    float: left;
    display: none
}

.share a.share__more {
    display: block
}

.share a span {
    width: 40px;
    height: 40px;
    display: none
}

.share a .share__more-mobile {
    display: block
}

.share a:hover {
    color: #666
}

.share a:hover .svg-icon {
    opacity: 1
}

@media only screen and (min-width: 925px) {
    .share a {
        width: 26px;
        height: 26px;
        display: block
    }
    .share a span {
        width: 26px;
        height: 26px
    }
    .share a .share__more-mobile {
        display: none
    }
    .share a .share__more-desktop {
        display: block
    }
}

.share .svg-icon {
    width: 100%;
    height: 100%;
    position: relative;
    display: block;
    fill: #666;
    opacity: .65
}

.share .svg-icon+.svg-icon {
    display: none
}

.share.m-article {
    display: none
}

@media only screen and (min-width: 925px) {
    .share.m-article {
        display: block
    }
}

.share.m-article a {
    width: 40px;
    height: 40px;
    float: none;
    margin-bottom: 10px;
    border-radius: 20px;
    background: #666;
    padding: 5px
}

.share.m-article a .svg-icon {
    fill: #fff
}

.share.m-article a[data-name='odnoklassniki'] {
    background: #f48420
}

.share.m-article a[data-name='vkontakte'] {
    background: #778db0
}

.share.m-article a[data-name='facebook'] {
    background: #1877F2
}

.share.m-article a[data-name='facebook'] .svg-icon {
    display: none
}

.share.m-article a[data-name='facebook'] .svg-icon+.svg-icon {
    display: block
}

.share.m-article a.share__more {
    background: #d7d7d7
}

.share.m-article a.share__more .share__more-desktop {
    width: 30px;
    height: 30px
}

.share.m-article a.share__more .svg-icon {
    fill: #333
}

.share.m-article a:last-child {
    margin-bottom: 0
}

.share:after {
    content: '';
    display: block;
    clear: both;
    font-size: 0;
    line-height: 0;
    height: 0
}

.share-full {
    position: fixed;
    bottom: 10px;
    right: 10px;
    display: none;
    z-index: 1000;
    min-width: 300px;
    max-height: 94%;
    background-color: #fff;
    border-radius: 3px;
    box-shadow: -4px 4px 15px rgba(0, 0, 0, 0.25);
    text-align: left;
    font-size: 15px;
    font-family: "NotoSans", Arial, sans-serif
}

.share-full ul {
    padding: 10px 0;
    margin: 0;
    list-style: none
}

.share-full li {
    display: block
}

.share-full span {
    display: block
}

.share-full a {
    display: block;
    padding: 0 40px;
    width: 100%;
    color: #5E5E5E;
    line-height: 37px
}

.share-full a:hover {
    background-color: #F2F2F2
}

@media only screen and (min-width: 925px) {
    .share-full {
        position: absolute;
        z-index: 700;
        left: 0;
        top: -500px;
        bottom: auto;
        right: auto;
        min-width: 100px
    }
    .share-full a {
        padding: 0 20px
    }
    .share-full:after {
        content: "";
        position: absolute;
        right: 13px;
        width: 0;
        height: 0;
        border-style: solid;
        top: 100%;
        border-width: 5px 5px 0;
        border-color: #fff transparent transparent
    }
}

.share-full__icon {
    display: block;
    float: right;
    margin: 5px 0 0 -26px;
    width: 26px;
    height: 26px
}

.share-full__icon .svg-icon {
    width: 100%;
    height: 100%
}

.share-full__facebook .share-full__icon .svg-icon {
    fill: #1877F2
}

.share-full__vkontakte .share-full__icon .svg-icon {
    fill: #778db0
}

.share-full__odnoklassniki .share-full__icon .svg-icon {
    fill: #f48420
}

.share-full__twitter .share-full__icon .svg-icon {
    fill: #00b5f5
}

.share-full__text {
    padding-right: 56px
}

body.m-ria .color-bg-hover,
.article.m-ria .color-bg-hover {
    background-color: #0075FF
}

body.m-ria .color-bg-hover:hover,
.article.m-ria .color-bg-hover:hover {
    background-color: #1345AE
}

body.m-ria .svg-accent-color {
    fill: rgb(230, 255, 118)
}

.article.m-ria .article__text a {
    color: rgb(230, 255, 118);
    background: rgba(0, 117, 255, 0.12)
}

.article.m-ria .article__text a:hover {
    background: rgba(0, 117, 255, 0.3)
}

.article.m-ria .article__text a:visited {
    color: #4F298C;
    background: rgba(79, 41, 140, 0.12)
}

.article.m-ria .article__text a:visited:hover {
    background: rgba(79, 41, 140, 0.3)
}

body.m-ria .header__menu-button:hover .header__menu-icon-l .svg-icon,
body.m-ria .header__menu-button:hover .header__menu-icon-s .svg-icon {
    fill: #0075FF
}

.article {
    position: relative
}

.article:after {
    content: '';
    display: block;
    clear: both;
    font-size: 0;
    line-height: 0;
    height: 0
}

.article__header {
    margin: 0 0 10px
}

.article__title {
    font-size: 24px;
    line-height: 30px;
    font-weight: 700;
    margin: 0
}

@media only screen and (min-width: 480px) {
    .article__title {
        font-size: 32px;
        line-height: 40px
    }
}

@media only screen and (min-width: 640px) {
    .article__title {
        font-size: 36px;
        line-height: 45px
    }
}

.article__info {
    padding-top: 10px;
    overflow: hidden
}

@media only screen and (min-width: 640px) {
    .article__info {
        padding-top: 15px
    }
}

.article__info-date,
.article__info-statistic {
    display: inline-block;
    vertical-align: top;
    margin-right: 10px
}

.article__info-date {
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: #adadad
}

.article__info-date a {
    color: #adadad
}

.article__announce {
    position: relative
}

.article__announce .media {
    padding-top: 10px
}

@media only screen and (min-width: 640px) {
    .article__announce .media {
        padding-top: 20px
    }
}

.article__body {
    position: relative;
    padding: 15px 0
}

@media only screen and (min-width: 480px) {
    .article__body {
        padding: 20px 0
    }
}

.article__body .article__block:first-child {
    margin-top: 0
}

.article__block {
    margin-top: 20px
}

@media only screen and (min-width: 480px) {
    .article__block {
        margin-top: 25px
    }
}

.article__text {
    font-size: 16px;
    line-height: 25px;
    font-family: "NotoSans", Arial, sans-serif
}

@media only screen and (min-width: 480px) {
    .article__text {
        font-size: 16px;
        line-height: 26px
    }
}

.article__text a {
    border-radius: 2px;
    padding: 0 5px;
    white-space: pre-wrap;
    color: #0075FF;
    background: rgba(0, 117, 255, 0.12);
    position: relative
}

.article__text a:hover {
    background: rgba(0, 117, 255, 0.3)
}

.article__text a:visited {
    color: #4F298C;
    background: rgba(79, 41, 140, 0.12)
}

.article__text a:visited:hover {
    background: rgba(79, 41, 140, 0.3)
}

.article__text b,
.article__text strong {
    font-weight: 700
}

.article__text i,
.article__text em {
    font-style: italic
}

.article__text :last-child {
    margin-bottom: 0
}

.article__sharebar {
    position: absolute;
    top: 100px;
    left: -60px
}

.article__sharebar-chat {
    display: none;
    width: 40px;
    height: 40px;
    margin-top: 10px;
    border-radius: 20px;
    background: #0075FF;
    padding: 5px
}

.article__sharebar-chat .svg-icon {
    width: 100%;
    height: 100%;
    position: relative;
    display: block;
    fill: #fff;
    opacity: .65
}

.article__sharebar-chat:hover {
    background: #1345AE
}

.article__sharebar-chat:hover .svg-icon {
    opacity: 1
}

@media only screen and (min-width: 925px) {
    .article__sharebar-chat {
        display: block
    }
}       </style>
    <style>
        .m39dd0045 .x1217fae8:hover__currency-symbol_extra {
            fill: #DD0000 !important
        }
    </style>
</head>

<body class="body m-ria m-article-page m-header-brand m-widget-lenta-mini m-header-ready" id="body">
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 26 26" id="s_icon-s_angry" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zm-1.252-9.9l.435-.754-8.78-5.07-.875 1.516 2.444 1.411a3.712 3.712 0 0 0 6.774 2.9l-.005-.002.007-.001zm2.504 0l-.435-.754 8.78-5.07.875 1.516-2.444 1.411a3.712 3.712 0 0 1-6.774 2.9l.005-.002-.007-.001z">
                </path>
            </symbol>
            <symbol viewbox="0 0 31.1 32.2" id="s_icon-s_applause" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.2 10.5c-1.4-1.5-3.9-4-3.9-4-.4-.4-1.1-.4-1.6 0l-.1.1c-.4.4-.4 1.1 0 1.6l3.2 3.3c.1.2.1.5-.1.7-.1.1-.3.2-.4.2-.1 0-.3-.1-.4-.2l-8.7-7.8c-.5-.4-1.2-.4-1.6.1l-.1.1c-.4.5-.4 1.2.1 1.6l3.9 3.5c.2.2.1.5-.1.7-.2.1-.4.1-.6 0l-5.5-4.9c-.5-.4-1.2-.4-1.6.1l-.1.1c-.4.5-.4 1.2.1 1.6L13.3 9h.2c.9 0 1.7.5 2.2 1.3l2.5 4.5c.3-.4.6-.7 1-.9l.2-.1c.3-.2.7-.2 1.1-.2 1 0 1.8.6 2.2 1.4.3.5 1.6 3.3 2.4 5.1.6 1.2.9 2.6 1.1 3.9 1-.5 1.9-1.2 2.6-2 2.9-3.3 3.1-8.1.4-11.5z">
                </path>
                <path d="M21.4 15.5c-.2-.4-.6-.6-1-.6-.2 0-.3 0-.5.1h-.1c-.6.3-.8.9-.5 1.5l2 4.2c0 .2-.1.5-.3.6-.1.1-.2.1-.3.1-.2 0-.4-.1-.5-.3l-5.7-10.2c-.3-.5-1-.7-1.5-.4l-.1.1c-.5.3-.7 1-.4 1.5l3.1 5.5.1.2c.1.3-.1.5-.3.6-.2.1-.4 0-.6-.2l-4.2-7.5c-.3-.5-1-.7-1.5-.4l-.1.1c-.5.3-.7 1-.4 1.5l3.9 6.9.1.3c.1.2 0 .4-.2.5-.1 0-.2.1-.2.1-.1 0-.3-.1-.4-.2L8.1 13c-.3-.5-1-.7-1.5-.4l-.1.1c-.5.3-.7 1-.4 1.5l3.9 7 .2.3c.1.2.1.3-.2.5s-.5.1-.6-.1L6.5 17c-.3-.5-1-.7-1.5-.4l-.1.1c-.5.3-.7 1-.4 1.5l1.8 3.2 4.3 7.7c2.2 3.3 5 4.1 9.5 1.7 3.8-2 6.2-5 3.8-10.3-1-1.9-2.5-5-2.5-5zM3.572 4.598l1.46-1.368 3.213 3.43-1.459 1.367zM-.058 9.303l.58-1.914L5.02 8.753l-.58 1.914zM7.998.479L9.946.024l1.068 4.578-1.948.454z">
                </path>
            </symbol>
            <symbol viewbox="0 0 32 33" id="s_icon-s_applause_big" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(-1)">
                    <path d="M4.318 4.575l.73-.684 2.324 2.48-.73.684zM.973 8.558l.29-.957 3.254.985-.29.957zM8.29 1.084l.974-.227.773 3.31-.973.228zM31.375 15.999a6.214 6.214 0 0 0-1.716-3.235l-4.22-4.221a1.958 1.958 0 0 0-2.704 0 1.897 1.897 0 0 0-.507.923l-3.534-3.534a1.914 1.914 0 0 0-2.704 0 1.895 1.895 0 0 0-.505.924l-.142-.14a1.907 1.907 0 0 0-2.867 2.502 1.829 1.829 0 0 0-1.253.96l-.099-.172a1.902 1.902 0 0 0-3.556 1.06 1.901 1.901 0 0 0-1.988 2.83l.622 1.074a1.909 1.909 0 0 0-1.736 2.865l5.78 9.965a6.206 6.206 0 0 0 1.712 1.907l3.412 2.502.532-.726-3.412-2.502a5.322 5.322 0 0 1-1.465-1.632l-5.78-9.965a1.012 1.012 0 1 1 1.752-1.012l1.902 3.261.195.336h.001l.334-.194.444-.256-.001-.002h.001l-.221-.38-3.293-5.692a1.011 1.011 0 1 1 1.75-1.013l3.515 6.074.779-.45-3.81-6.586a1.012 1.012 0 0 1 1.752-1.013l.908 1.57v.002l2.901 5.013.78-.45-2.9-5.014a.998.998 0 0 1 1.423-1.343l.252.252.003-.004c.025.026.05.053.072.082l3.31 5.721.002.006 2.19 3.783.778-.45-1.685-2.913-.504-.872a1.013 1.013 0 0 1 1.751-1.012l2.99 5.167c.535.924.78 1.988.703 3.053l-.298 4.19.897.063.299-4.189a6.212 6.212 0 0 0-.822-3.568l-2.99-5.167a1.903 1.903 0 0 0-3.338.066l-2.504-4.328a1.899 1.899 0 0 0-.555-.601l-.732-.732a1.01 1.01 0 0 1 0-1.43 1.033 1.033 0 0 1 1.432 0l1.256 1.252c.01.01.016.022.026.032l1.975 1.973.007-.006 1.693 1.686.635-.638-3.684-3.668a1.01 1.01 0 0 1 1.441-1.414l4.676 4.675.002.003 3.091 3.09.636-.636-3.09-3.091a1.011 1.011 0 1 1 1.43-1.43l4.22 4.22a5.317 5.317 0 0 1 1.469 2.769l.792 4.124.884-.17L31.375 16z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 25 23" id="s_icon-s_asterisk_small" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.475 0a.832.832 0 0 0-.83.881l.458 7.674-7.207-2.827a.832.832 0 0 0-1.095.517L.578 10.008a.832.832 0 0 0 .582 1.063l7.433 1.934L3.7 18.957a.832.832 0 0 0 .154 1.201l3.201 2.326a.832.832 0 0 0 1.19-.225l4.161-6.51 4.163 6.513a.832.832 0 0 0 1.19.225l3.2-2.326a.832.832 0 0 0 .154-1.2l-4.86-5.914 7.587-1.974a.832.832 0 0 0 .582-1.062l-1.223-3.763a.832.832 0 0 0-1.095-.517L14.8 8.595 15.262.88a.832.832 0 0 0-.83-.881h-3.957z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 33" id="s_icon-s_backward" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 21.497a3.82 3.82 0 0 1-1.237-.204 3.102 3.102 0 0 1-1.018-.554l-.615 1.11c.39.295.832.517 1.303.654.515.16 1.05.24 1.59.238a3.904 3.904 0 0 0 1.677-.326 2.344 2.344 0 0 0 1.028-.874 2.27 2.27 0 0 0 .342-1.22 2.077 2.077 0 0 0-.561-1.486 2.597 2.597 0 0 0-1.628-.726l1.87-2.222v-.957H8.21v1.2h3.498L9.96 18.207v.979h.704c.442-.032.882.074 1.26.303.27.193.426.51.412.841a.996.996 0 0 1-.434.853 2.007 2.007 0 0 1-1.194.313zm5.566.776a3.154 3.154 0 0 0 3.306 0 3.146 3.146 0 0 0 1.15-1.364c.293-.67.436-1.397.417-2.128a4.998 4.998 0 0 0-.418-2.13 3.152 3.152 0 0 0-1.15-1.364 3.16 3.16 0 0 0-3.305 0c-.504.336-.9.81-1.144 1.365a4.998 4.998 0 0 0-.418 2.129 4.994 4.994 0 0 0 .418 2.128c.243.555.64 1.028 1.144 1.364zm.358-5.528a1.576 1.576 0 0 1 2.596 0c.36.615.527 1.325.478 2.036.049.71-.118 1.42-.478 2.034a1.576 1.576 0 0 1-2.596 0 3.547 3.547 0 0 1-.479-2.034 3.548 3.548 0 0 1 .479-2.036z">
                </path>
                <path d="M14 5.397H4.037l3.66-3.24L6.534.846l-5.138 4.55h-.002V5.4l-.246.218a.876.876 0 0 0-.038 1.274L5.92 11.7l1.237-1.238-3.316-3.315H14a11.906 11.906 0 0 1 12.208 11.852c0 6.743-5.465 12.209-12.208 12.209-6.742 0-12.208-5.466-12.208-12.209v-.875H.042V19a13.958 13.958 0 1 0 27.916 0A13.637 13.637 0 0 0 14 5.397z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 32" id="s_icon-s_backward_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 4.772H3.048l4.119-3.648-.664-.749-5.106 4.523a.5.5 0 0 0-.022.728L5.92 10.17l.707-.707-3.69-3.69H14A12.277 12.277 0 0 1 26.583 18c-.009 6.943-5.64 12.567-12.583 12.567-6.944 0-12.575-5.624-12.583-12.567v-.5h-1v.5C.425 25.495 6.503 31.567 14 31.567c7.495 0 13.574-6.072 13.583-13.567A13.267 13.267 0 0 0 14 4.772z">
                </path>
                <path d="M12.195 20.376a2.167 2.167 0 0 1-1.337.363 3.773 3.773 0 0 1-1.308-.225 2.91 2.91 0 0 1-1.012-.6l-.506.87c.36.314.784.548 1.242.687.512.165 1.047.249 1.584.247.55.016 1.098-.091 1.601-.314a2.27 2.27 0 0 0 .984-.846c.221-.359.336-.773.33-1.194a2.024 2.024 0 0 0-.593-1.502 2.748 2.748 0 0 0-1.727-.698l2.012-2.486v-.748H8.384v.957h3.706l-1.935 2.376v.77h.616a2.391 2.391 0 0 1 1.43.352c.313.23.49.602.472.99.016.392-.163.767-.478 1.001zm4.125.874a3.03 3.03 0 0 0 3.234 0 3.132 3.132 0 0 0 1.116-1.358 5.043 5.043 0 0 0 .408-2.112 5.044 5.044 0 0 0-.408-2.112 3.138 3.138 0 0 0-1.116-1.358 3.03 3.03 0 0 0-3.234 0 3.134 3.134 0 0 0-1.116 1.358 5.044 5.044 0 0 0-.408 2.112 5.043 5.043 0 0 0 .408 2.112c.234.55.622 1.021 1.116 1.358zm.132-5.67a1.832 1.832 0 0 1 2.97 0c.412.657.606 1.427.556 2.2a3.687 3.687 0 0 1-.556 2.2 1.83 1.83 0 0 1-2.97 0 3.687 3.687 0 0 1-.556-2.2 3.688 3.688 0 0 1 .556-2.2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 34" id="s_icon-s_backward_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 5.022H6.026l3.2-2.833L7.566.317 1.9 5.337a1.25 1.25 0 0 0-.055 1.819L6.92 12.23l1.768-1.768-2.941-2.941H15A11.536 11.536 0 0 1 26.833 19C26.827 25.531 21.531 30.823 15 30.823 8.469 30.823 3.172 25.53 3.166 19v-1.25h-2.5V19C.673 26.912 7.088 33.322 15 33.322c7.911 0 14.326-6.41 14.333-14.322A14.008 14.008 0 0 0 15 5.022z">
                </path>
                <path d="M11.081 21.51c-.401 0-.8-.062-1.182-.183a3.335 3.335 0 0 1-1.018-.51l-.693 1.363c.405.282.858.49 1.337.611.521.143 1.06.214 1.6.214a4.106 4.106 0 0 0 1.766-.34 2.452 2.452 0 0 0 1.072-.908c.233-.37.355-.8.352-1.237a2.08 2.08 0 0 0-.539-1.458 2.593 2.593 0 0 0-1.55-.754l1.737-1.98v-1.155h-5.39v1.43h3.278l-1.584 1.794v1.177h.814c.961 0 1.441.315 1.441.946a.832.832 0 0 1-.385.731 1.88 1.88 0 0 1-1.056.258zm5.654 1.023c1.05.63 2.36.63 3.41 0a3.17 3.17 0 0 0 1.171-1.37 4.97 4.97 0 0 0 .424-2.14 4.972 4.972 0 0 0-.424-2.139 3.177 3.177 0 0 0-1.171-1.37 3.312 3.312 0 0 0-3.41 0c-.515.334-.922.81-1.172 1.37a4.972 4.972 0 0 0-.423 2.14 4.97 4.97 0 0 0 .423 2.138 3.17 3.17 0 0 0 1.172 1.37zm.61-5.38a1.302 1.302 0 0 1 2.2 0 3.44 3.44 0 0 1 .402 1.87 3.436 3.436 0 0 1-.402 1.87 1.302 1.302 0 0 1-2.2 0 3.436 3.436 0 0 1-.401-1.87 3.44 3.44 0 0 1 .401-1.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_calendar_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.414 2.469h-3.506V.042h-2v2.427H8.092V.042h-2v2.427H2.586A2.567 2.567 0 0 0 .015 5.025v16.377a2.566 2.566 0 0 0 2.57 2.556h18.83a2.566 2.566 0 0 0 2.57-2.556V5.025a2.567 2.567 0 0 0-2.57-2.556zm0 18.989l-18.9-.056.044-9.99h18.9l-.044 10.046zm.052-12.047h-18.9l.02-4.442 3.506.01v1.524h2V4.985l7.816.024v1.494h2V5.015l3.577.01-.019 4.386z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_chat" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.94 0h6.157C21.567 0 26 4.433 26 9.902a9.856 9.856 0 0 1-3.075 7.172 9.964 9.964 0 0 1-2.032 1.493l-.002.001-.004.002.006.001-10.119 5.667zm.312-6.492V22l4.41-2.47-.043-.006 4.561-2.528A8.09 8.09 0 0 0 24.2 9.902 8.102 8.102 0 0 0 16.098 1.8H9.941A8.141 8.141 0 0 0 1.8 9.941a7.759 7.759 0 0 0 7.536 7.756l1.75.049zM8.059 8.749a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_chat_big" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.941 0h6.157C21.567 0 26 4.433 26 9.902a9.87 9.87 0 0 1-3.872 7.854c-.39.3-.803.571-1.234.81l-.003.002-.004.002.006.001-10.119 5.667zm-.488-5.714v4.841l7.609-4.26-.027-.005 2.534-1.404C23.128 16.186 25 13.284 25 9.902A8.902 8.902 0 0 0 16.098 1H9.941A8.941 8.941 0 0 0 1 9.941c0 4.645 3.7 8.426 8.314 8.556l.972.027zM8.059 8.748a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_chat_filled" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.286 23.365a1 1 0 0 0 1.488.873l10.119-5.667h-.006l.004-.003.003-.001a9.964 9.964 0 0 0 2.031-1.493A9.856 9.856 0 0 0 26 9.902C26 4.433 21.567 0 16.098 0H9.941C4.451 0 0 4.45 0 9.941c0 5.188 4.133 9.41 9.286 9.555v3.87zM8.059 8.75a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_chat_filled_counter" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.94 0h6.157C21.567 0 26 4.433 26 9.902a9.856 9.856 0 0 1-3.075 7.172 9.964 9.964 0 0 1-2.032 1.493l-.002.001-.004.002.006.001-10.119 5.667z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_chat_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.431 0A9.431 9.431 0 0 0 0 9.431 9.069 9.069 0 0 0 9.069 18.5h.217v4.772a1 1 0 0 0 1.528.85l10.659-6.63h-.004A9.417 9.417 0 0 0 26 9.432 9.432 9.432 0 0 0 16.568 0H9.431z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_check" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 25.375C6.165 25.375.625 19.835.625 13S6.165.625 13 .625 25.375 6.165 25.375 13C25.367 19.831 19.831 25.367 13 25.375zm0-23C7.132 2.375 2.375 7.132 2.375 13S7.132 23.625 13 23.625 23.625 18.868 23.625 13C23.618 7.135 18.865 2.382 13 2.375z">
                </path>
                <path d="M11.31 17.902a1.885 1.885 0 0 1-1.498-.732l-2.487-3.64 1.446-.987 2.454 3.597a.17.17 0 0 0 .2-.044l5.614-8.338 1.451.977-5.649 8.387a1.908 1.908 0 0 1-1.531.78z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_check_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12c-.008 6.624-5.376 11.992-12 12zm0-23C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11c-.007-6.072-4.928-10.993-11-11z">
                </path>
                <path d="M10.31 16.849a1.571 1.571 0 0 1-1.247-.61l-2.372-3.471.826-.564 2.354 3.447a.617.617 0 0 0 .898-.026l5.71-8.474.83.559-5.731 8.502c-.299.4-.768.636-1.267.637z">
                </path>
            </symbol>
            <symbol viewbox="0 0 21 18" id="s_icon-s_check_only" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.604 17.84c-.54.002-1.053-.231-1.409-.638L.825 11.07 2.14 9.917l5.37 6.132c.026.028.065.056.098.042a.12.12 0 0 0 .095-.049L19.586.565l1.389 1.066L9.092 17.107c-.34.446-.864.715-1.425.733h-.063z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 17" id="s_icon-s_check_only_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.605 16.466c-.432 0-.844-.186-1.128-.512l-5.123-5.85.752-.659 5.123 5.85a.49.49 0 0 0 .393.17.496.496 0 0 0 .38-.194L18.654.09l.794.608L7.795 15.88a1.493 1.493 0 0 1-1.14.586h-.05z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 19" id="s_icon-s_check_only_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.604 18.216a2.24 2.24 0 0 1-1.69-.767L.295 11.034l1.88-1.646 5.417 6.183L19.517.04 21.5 1.562 9.39 17.335a2.24 2.24 0 0 1-1.71.88h-.076z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_check_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 .5C5.649.5.5 5.649.5 12S5.649 23.5 12 23.5 23.5 18.351 23.5 12 18.351.5 12 .5zm-.048 16.063a2.227 2.227 0 0 1-1.79.915 2.198 2.198 0 0 1-1.745-.853l-2.792-4.089 1.817-1.24 2.751 4.033 6.157-9.233 1.824 1.228-6.222 9.24z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 20" id="s_icon-s_close" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.41 1.827L18.173.59 10 8.763 1.872.635.635 1.872 8.763 10 .59 18.173l1.237 1.237L10 11.237l8.17 8.171 1.238-1.237L11.237 10z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 18" id="s_icon-s_close_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.88.827L17.173.12 9 8.293.872.165.165.872 8.293 9 .12 17.173l.707.707L9 9.707l8.17 8.171.707-.707L9.707 9z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 20" id="s_icon-s_close_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.94 1.827L18.173.06 10 8.233 1.872.104.104 1.872 8.232 10 .06 18.173l1.767 1.767L10 11.768l8.17 8.17 1.768-1.767L11.767 10z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_deselect" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 25.375C6.165 25.375.625 19.835.625 13S6.165.625 13 .625 25.375 6.165 25.375 13C25.367 19.831 19.831 25.367 13 25.375zm0-23C7.132 2.375 2.375 7.132 2.375 13S7.132 23.625 13 23.625 23.625 18.868 23.625 13C23.618 7.135 18.865 2.382 13 2.375z">
                </path>
                <path d="M7.75 12.125h10.5v1.75H7.75z"></path>
            </symbol>
            <symbol viewbox="0 0 24 25" id="s_icon-s_deselect_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 24.666c-6.627 0-12-5.372-12-12 0-6.627 5.373-12 12-12s12 5.373 12 12c-.008 6.625-5.376 11.993-12 12zm0-23c-6.075 0-11 4.925-11 11 0 6.076 4.925 11 11 11s11-4.924 11-11c-.007-6.072-4.928-10.993-11-11z">
                </path>
                <path d="M6.779 12.166h10.442v1H6.779z"></path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_deselect_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 .5C5.649.5.5 5.649.5 12S5.649 23.5 12 23.5 23.5 18.351 23.5 12 18.351.5 12 .5zm5.961 12.376H6.04v-2.2H17.96v2.2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 25" id="s_icon-s_dislike" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19 4h1a2 2 0 1 1 0 4h-1 2a2 2 0 1 1 0 4 2 2 0 1 1 0 4h-7v5.051A3.949 3.949 0 0 1 10.051 25a.987.987 0 0 1-.987-.987v-5.524L5 12V4a4 4 0 0 1 4-4h10a2 2 0 1 1 0 4zM4 14.016V2H0v12.016h4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_dislike_circle" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zm4.8-16.2h-.599a1.2 1.2 0 0 0-.001-2.4h-6a2.4 2.4 0 0 0-2.4 2.4v4.8l2.438 3.893v3.315c0 .327.266.592.593.592a2.37 2.37 0 0 0 2.369-2.37V17h4.2a1.2 1.2 0 0 0 0-2.4 1.2 1.2 0 0 0 0-2.4h-1.2.6a1.2 1.2 0 0 0 0-2.4zM8.2 8.6v7.21H5.8V8.6h2.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 16 19" id="s_icon-s_down_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.837 10.158l-4.962 5.275V.882h-1.75v14.57l-4.962-5.294-1.275 1.2 5.731 6.091a1.686 1.686 0 0 0 2.762 0l5.73-6.092-1.274-1.199z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 17" id="s_icon-s_down_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.273 9.736L7.637 15.61V.077h-1v15.52L1 9.737l-.721.693 5.708 5.923c.251.39.684.628 1.149.629.433.008.841-.2 1.09-.555l5.767-5.997-.721-.694z">
                </path>
            </symbol>
            <symbol viewbox="0 0 16 20" id="s_icon-s_down_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.915 10.212L9.25 15.348V.536h-2.5v14.812l-4.665-5.136-1.85 1.68 6.066 6.68a2.062 2.062 0 0 0 3.398 0l6.067-6.68-1.851-1.68z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 14" id="s_icon-s_down_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 13.163a1.864 1.864 0 0 1-1.48-.725L.022 1.514 1.403.439l8.498 10.925a.125.125 0 0 0 .198 0L18.597.44l1.381 1.075-8.498 10.924c-.354.459-.9.727-1.48.725z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 12" id="s_icon-s_down_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 11.788c-.463.001-.9-.213-1.184-.579L.548.579l.79-.614 8.267 10.63a.516.516 0 0 0 .79 0l8.267-10.63.79.614-8.268 10.63c-.283.366-.72.58-1.184.58z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 15" id="s_icon-s_down_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 14.538a2.236 2.236 0 0 1-1.777-.87L.496 2.448 2.47.913 11 11.881 19.53.913l1.974 1.535-8.728 11.221a2.236 2.236 0 0 1-1.776.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 11" id="s_icon-s_down_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 10.536c-.413 0-.814-.135-1.141-.387L.023 1.833 1.088.445l10.836 8.316a.124.124 0 0 0 .153 0L22.912.445l1.065 1.388-10.835 8.316a1.875 1.875 0 0 1-1.142.387z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 10" id="s_icon-s_down_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 9.16c-.33.001-.652-.108-.914-.309L.55.764l.609-.793 10.537 8.087a.5.5 0 0 0 .61 0L22.841-.029l.61.793-10.539 8.087c-.262.201-.583.31-.913.31z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 12" id="s_icon-s_down_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 11.91c-.495 0-.976-.162-1.37-.463L.499 2.902 2.02.92 13 9.347 23.98.919l1.522 1.983-11.132 8.544a2.249 2.249 0 0 1-1.37.464z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 24" id="s_icon-s_download" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.837 10.146l-4.962 5.276V.87h-1.75v14.57l-4.963-5.294-1.274 1.199 5.731 6.092a1.686 1.686 0 0 0 2.762 0l5.73-6.092-1.274-1.2zM.25 21.505h21.5v1.5H.25z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 23" id="s_icon-s_download_big" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M11 17.192c.424.007.822-.2 1.06-.55l5.522-5.869-.728-.685L11.5 15.79V.657h-1v15.121l-5.354-5.69-.728.685 5.464 5.795c.24.387.663.622 1.118.624zM.5 21.167h21v1H.5z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 26 18" id="s_icon-s_e-mail" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.469.125H2.531A1.54 1.54 0 0 0 .992 1.663v14.674a1.54 1.54 0 0 0 1.539 1.538h20.938a1.54 1.54 0 0 0 1.539-1.538V1.663A1.54 1.54 0 0 0 23.469.125zm-.211 1.75v.867c-.021.012-.045.014-.065.028L13.002 9.8 2.876 2.77a.83.83 0 0 0-.134-.057v-.839h20.516zM2.742 16.125V4.809l9.261 6.428c.6.414 1.391.414 1.99.002l9.265-6.388v11.274H2.742z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 20" id="s_icon-s_e-mail_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.47.75H2.53A1.916 1.916 0 0 0 .618 2.663v14.674a1.916 1.916 0 0 0 1.914 1.913h20.938a1.916 1.916 0 0 0 1.914-1.913V2.663A1.916 1.916 0 0 0 23.469.75zm-.587 2.5v.572L13 10.646 3.117 3.78V3.25h19.766zM3.117 16.75V6.215l8.815 6.124a1.878 1.878 0 0 0 2.133.003l8.818-6.088V16.75H3.117z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_edit" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.353 24.019a.872.872 0 0 1-.622-.26.99.99 0 0 1-.27-.897l1.614-5.855a.88.88 0 0 1 .225-.387L13.71 5.21a.9.9 0 0 1 1.237 0l4.29 4.29a.876.876 0 0 1 0 1.238l-11.41 11.41a.878.878 0 0 1-.386.225l-5.856 1.614a.9.9 0 0 1-.232.032zm2.348-6.325L2.54 21.91l4.215-1.162L17.38 10.12 14.33 7.066 3.7 17.694zM20.764 8.85a.871.871 0 0 1-.619-.256l-4.29-4.29a.876.876 0 0 1 0-1.239l2.15-2.15a.875.875 0 0 1 1.238 0l4.29 4.29a.876.876 0 0 1 0 1.238l-2.15 2.15a.871.871 0 0 1-.62.257zM17.71 3.685l3.053 3.052.913-.913-3.053-3.053-.913.914z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 23" id="s_icon-s_edit_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.353 22.644A.5.5 0 0 1 1 22.499a.616.616 0 0 1-.179-.536l1.615-5.857a.494.494 0 0 1 .126-.218L14.715 3.605a.499.499 0 0 1 .354-.148h.001a.5.5 0 0 1 .354.147l4.29 4.29a.5.5 0 0 1 .002.705L7.564 20.88a.5.5 0 0 1-.222.13l-5.857 1.615a.514.514 0 0 1-.132.018zm2.013-6.146l-1.364 4.948 4.945-1.363L18.655 8.249l-3.583-3.583L3.366 16.498zm17.397-9.023a.498.498 0 0 1-.353-.147l-4.29-4.29a.5.5 0 0 1 0-.707l2.15-2.15a.5.5 0 0 1 .708 0l4.29 4.29a.5.5 0 0 1 0 .707l-2.151 2.15a.498.498 0 0 1-.354.147zm-3.583-4.79l3.583 3.583 1.444-1.444-3.583-3.583-1.444 1.444z">
                </path>
            </symbol>
            <symbol viewbox="0 0 25 24" id="s_icon-s_edit_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.695 23.929A1.1 1.1 0 0 1 .678 22.41l2.78-6.75c.053-.129.13-.247.228-.348l8.59-8.84c.204-.21.485-.33.779-.332h.01c.29 0 .568.114.774.318l4.33 4.29a1.1 1.1 0 0 1 .008 1.555l-8.7 8.8a1.106 1.106 0 0 1-.412.262l-7 2.5a1.105 1.105 0 0 1-.37.064zm3.717-7.236l-1.758 4.269 4.435-1.584 7.751-7.84-2.76-2.735-7.668 7.89zM20.145 9.83c-.292 0-.572-.116-.779-.322l-4.29-4.3a1.1 1.1 0 0 1 0-1.554l3.16-3.17a1.134 1.134 0 0 1 1.558 0l4.29 4.3a1.1 1.1 0 0 1 0 1.553l-3.16 3.17a1.1 1.1 0 0 1-.778.323h-.001zm-2.736-5.4l2.736 2.743L21.75 5.56l-2.735-2.743-1.607 1.613z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 33" id="s_icon-s_forward" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.071 21.497a3.82 3.82 0 0 1-1.237-.204 3.102 3.102 0 0 1-1.018-.554l-.615 1.11c.39.295.832.517 1.303.654.515.16 1.05.24 1.59.238a3.905 3.905 0 0 0 1.677-.326 2.344 2.344 0 0 0 1.028-.874 2.27 2.27 0 0 0 .342-1.22 2.077 2.077 0 0 0-.561-1.486 2.597 2.597 0 0 0-1.628-.726l1.87-2.222v-.957H7.573v1.2h3.498l-1.749 2.078v.979h.704c.441-.032.882.074 1.26.303.27.193.426.51.412.841a.996.996 0 0 1-.434.853 2.007 2.007 0 0 1-1.194.313zm8.872-6.21a3.16 3.16 0 0 0-3.306 0c-.504.336-.9.81-1.144 1.365a4.998 4.998 0 0 0-.418 2.129 4.994 4.994 0 0 0 .418 2.128c.243.555.64 1.028 1.144 1.364a3.154 3.154 0 0 0 3.306 0 3.146 3.146 0 0 0 1.15-1.364c.293-.67.436-1.397.417-2.128a4.998 4.998 0 0 0-.418-2.13 3.152 3.152 0 0 0-1.15-1.364zm-.352 5.528a1.576 1.576 0 0 1-2.596 0 3.547 3.547 0 0 1-.479-2.034 3.548 3.548 0 0 1 .479-2.036 1.576 1.576 0 0 1 2.596 0c.36.615.527 1.325.478 2.036.049.71-.118 1.42-.478 2.034z">
                </path>
                <path d="M26.166 18.124V19c0 6.743-5.465 12.209-12.208 12.209-6.742 0-12.208-5.466-12.208-12.209A11.906 11.906 0 0 1 13.958 7.147h10.159L20.8 10.462l1.237 1.238 4.81-4.809a.876.876 0 0 0-.039-1.274l-.246-.218v-.002h-.002L21.423.846l-1.16 1.31 3.658 3.24h-9.963A13.637 13.637 0 0 0 0 19c0 7.71 6.25 13.959 13.958 13.959 7.71 0 13.958-6.25 13.958-13.959v-.875h-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 32" id="s_icon-s_forward_big" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M11.892 20.376a2.167 2.167 0 0 1-1.336.363 3.773 3.773 0 0 1-1.309-.225 2.91 2.91 0 0 1-1.012-.6l-.506.87c.36.314.784.548 1.243.687.511.165 1.046.249 1.584.247.55.016 1.097-.091 1.6-.314a2.27 2.27 0 0 0 .985-.846c.22-.359.335-.773.33-1.194a2.024 2.024 0 0 0-.594-1.502 2.748 2.748 0 0 0-1.727-.698l2.013-2.486v-.748H8.08v.957h3.707l-1.936 2.376v.77h.616a2.391 2.391 0 0 1 1.43.352c.313.23.49.602.473.99.015.392-.164.767-.479 1.001zm7.36-6.066a3.03 3.03 0 0 0-3.235 0 3.134 3.134 0 0 0-1.116 1.358 5.044 5.044 0 0 0-.407 2.112 5.042 5.042 0 0 0 .407 2.112c.234.55.622 1.021 1.116 1.358a3.03 3.03 0 0 0 3.234 0 3.132 3.132 0 0 0 1.117-1.358 5.043 5.043 0 0 0 .407-2.112 5.044 5.044 0 0 0-.407-2.112 3.138 3.138 0 0 0-1.117-1.358zm-.133 5.67a1.83 1.83 0 0 1-2.97 0 3.687 3.687 0 0 1-.555-2.2 3.688 3.688 0 0 1 .555-2.2 1.832 1.832 0 0 1 2.97 0c.412.657.606 1.427.556 2.2a3.687 3.687 0 0 1-.556 2.2z">
                    </path>
                    <path d="M26.583 17.5v.5c-.009 6.943-5.64 12.567-12.583 12.567-6.944 0-12.575-5.624-12.583-12.567A12.277 12.277 0 0 1 14 5.772h11.064l-3.691 3.69.707.708 4.544-4.544a.5.5 0 0 0-.022-.728L21.497.375l-.664.749 4.119 3.648H14A13.267 13.267 0 0 0 .416 18C.427 25.495 6.505 31.567 14 31.567c7.495 0 13.574-6.072 13.583-13.567v-.5h-1z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 30 34" id="s_icon-s_forward_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.833 17.75V19C26.827 25.531 21.531 30.823 15 30.823 8.469 30.823 3.172 25.53 3.166 19A11.536 11.536 0 0 1 15 7.522h9.254l-2.941 2.941 1.768 1.768 5.074-5.075a1.25 1.25 0 0 0-.055-1.82L22.432.316 20.774 2.19l3.2 2.833H15A14.008 14.008 0 0 0 .666 19C.674 26.912 7.088 33.322 15 33.322c7.911 0 14.326-6.41 14.333-14.322v-1.25h-2.5z">
                </path>
                <path d="M11.608 21.51c-.401 0-.8-.062-1.182-.183a3.335 3.335 0 0 1-1.018-.51l-.693 1.363c.405.282.858.49 1.337.611.521.143 1.06.214 1.6.214a4.106 4.106 0 0 0 1.765-.34 2.452 2.452 0 0 0 1.073-.908c.233-.37.355-.8.352-1.237a2.08 2.08 0 0 0-.539-1.458 2.593 2.593 0 0 0-1.551-.754l1.738-1.98v-1.155H9.1v1.43h3.278l-1.584 1.794v1.177h.814c.96 0 1.441.315 1.441.946a.832.832 0 0 1-.385.731 1.88 1.88 0 0 1-1.056.258zm9.064-5.996a3.312 3.312 0 0 0-3.41 0c-.515.334-.922.81-1.172 1.37a4.972 4.972 0 0 0-.423 2.14 4.97 4.97 0 0 0 .423 2.138 3.17 3.17 0 0 0 1.172 1.37c1.05.63 2.36.63 3.41 0a3.17 3.17 0 0 0 1.171-1.37 4.97 4.97 0 0 0 .424-2.138 4.972 4.972 0 0 0-.424-2.14 3.176 3.176 0 0 0-1.171-1.37zm-.6 5.379a1.302 1.302 0 0 1-2.2 0 3.436 3.436 0 0 1-.401-1.87 3.44 3.44 0 0 1 .401-1.87 1.302 1.302 0 0 1 2.2 0 3.44 3.44 0 0 1 .402 1.87 3.436 3.436 0 0 1-.402 1.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.612 23.625H18.9v1.75h5.588a.875.875 0 0 0 .875-.875v-5.589h-1.75v4.714zM2.388 2.375H7.1V.625H1.513a.875.875 0 0 0-.875.875v5.588h1.75V2.375zm7.819 12.032l-7.832 7.975v-3.484H.625v5.59a.875.875 0 0 0 .875.874h5.588v-1.75H3.62l7.835-7.978-1.248-1.227zM24.5.637h-5.588v1.75h3.456L14.664 9.95l1.226 1.25 7.735-7.595v3.496h1.75V1.51A.875.875 0 0 0 24.5.638z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.152 15.006L1.76 23.592l-.01-4.131-1 .002.013 5.323a.5.5 0 0 0 .501.498l5.323-.013-.002-1-4.1.01 8.382-8.575-.715-.7zM24.25 6.54l1-.002-.014-5.324a.5.5 0 0 0-.501-.498l-5.323.014.002 1 4.101-.011-8.263 8.162.703.711 8.284-8.183.01 4.131zm.181 12.52l.014 5.328-5.515.014.002 1 6.016-.016a.5.5 0 0 0 .498-.501l-.015-5.828-1 .002zM1.554 1.612l5.15-.014L6.7.6l-5.65.015a.5.5 0 0 0-.498.501l.015 5.837 1-.003-.014-5.336z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen_exit" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.204 14.773H4.623v1.75h3.46l-7.82 7.965 1.248 1.226 7.818-7.962v3.477h1.75v-5.58a.875.875 0 0 0-.875-.876zm11.292-5.689h-3.454l7.695-7.549L24.512.286 16.79 7.861V4.378h-1.75v5.581a.875.875 0 0 0 .875.875h5.58v-1.75zm-2.608 10.691v5.581h1.75V20.65h4.706V18.9h-5.58a.875.875 0 0 0-.876.875zM7.112 6.225V.644h-1.75V5.35H.656V7.1h5.58a.875.875 0 0 0 .876-.875z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen_exit_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.948 15.391H4.312v1h4.413L.77 24.505l.713.7 7.965-8.123v4.445h1V15.89a.5.5 0 0 0-.5-.5zm11.869-6.21h-4.415l7.432-7.275-.7-.715-7.453 7.296V4.045h-1v5.636a.5.5 0 0 0 .5.5h5.636v-1zM19.4 19.088a.5.5 0 0 0-.5.5v5.828h1v-5.328h5.515v-1h-6.015zM6.733 6.42V.583h-1V5.92H.583v1h5.65a.5.5 0 0 0 .5-.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen_exit_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.87 8.71h-3.123l7.309-7.172-1.541-1.57-7.35 7.212V4.004h-2.5V9.96a1.25 1.25 0 0 0 1.25 1.25h5.956v-2.5zM10.205 14.4H4.248v2.5h3.147l-7.45 7.591 1.57 1.541 7.439-7.58v3.152h2.5V15.65a1.25 1.25 0 0 0-1.25-1.25zm8.31 5.375v5.956h2.5v-4.706h4.705v-2.5h-5.956a1.25 1.25 0 0 0-1.25 1.25zM7.486 6.225V.269h-2.5v4.706H.28v2.5h5.956a1.25 1.25 0 0 0 1.25-1.25z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_fullscreen_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.238 23.25h-4.714v2.5h5.964a1.25 1.25 0 0 0 1.25-1.25v-5.963h-2.5v4.713zM2.762 2.75h4.714V.25H1.512A1.25 1.25 0 0 0 .262 1.5v5.964h2.5V2.75zM24.5.263h-5.964v2.5h3.133l-7.324 7.184 1.54 1.57 7.365-7.224v3.183h2.5V1.513A1.25 1.25 0 0 0 24.5.263zM10.203 14.09L2.75 21.682v-3.158H.25v5.963a1.25 1.25 0 0 0 1.25 1.25h5.963v-2.5H4.307l7.466-7.606-1.57-1.541z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 23" id="s_icon-s_graphic" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 2.167a1.5 1.5 0 0 1 1.5-1.5h6a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5v-3zm0 16a1.5 1.5 0 0 1 1.5-1.5h12a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-12a1.5 1.5 0 0 1-1.5-1.5v-3zm1.5-9.508a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h19a1.5 1.5 0 0 0 1.5-1.5v-3a1.5 1.5 0 0 0-1.5-1.5h-19z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_haha" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zm9.5-13.327c0 5.737-4.253 9.827-9.5 9.827s-9.5-4.09-9.5-9.827v-1.239c0-.341.392-.544.684-.358 6.132 3.906 11.429 3.904 17.634-.007.292-.183.682.019.682.36v1.244z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_hide_comment" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.941 0h6.157C21.567 0 26 4.433 26 9.902a9.856 9.856 0 0 1-3.075 7.172 9.967 9.967 0 0 1-2.031 1.493l-.003.001-.004.002.006.001-10.119 5.667zm.312-6.492V22l4.41-2.47-.043-.006 4.562-2.528A8.09 8.09 0 0 0 24.2 9.902 8.102 8.102 0 0 0 16.098 1.8H9.941A8.141 8.141 0 0 0 1.8 9.941a7.759 7.759 0 0 0 7.536 7.756l1.75.049zm6.193-13.041l1.058 1.063-4.274 4.264 4.277 4.264-1.06 1.06L13 11.091l-4.275 4.265-1.061-1.059 4.274-4.265L7.66 5.768 8.72 4.705 13 8.973l4.278-4.268z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_hide_comment_big" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.941 0h6.157C21.567 0 26 4.433 26 9.902a9.87 9.87 0 0 1-3.872 7.854c-.39.3-.803.571-1.234.81l-.003.002-.004.002.006.001-10.119 5.667zm-.488-5.714v4.841l7.609-4.26-.027-.005 2.534-1.404C23.128 16.186 25 13.284 25 9.902A8.902 8.902 0 0 0 16.098 1H9.941A8.941 8.941 0 0 0 1 9.941c0 4.645 3.7 8.426 8.314 8.556l.972.027zM17.285 4.96l.7.71-4.27 4.27 4.27 4.26-.7.71-4.28-4.27-4.28 4.27-.71-.71 4.28-4.26-4.28-4.27.71-.71 4.28 4.27 4.28-4.27z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 25" id="s_icon-s_hide_comment_small" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.774 24.238a1 1 0 0 1-1.488-.873v-3.869C4.133 19.352 0 15.13 0 9.941 0 4.451 4.45 0 9.941 0h6.157C21.567 0 26 4.433 26 9.902a9.847 9.847 0 0 1-2.562 6.646 9.977 9.977 0 0 1-2.544 2.019l-.003.001-.004.002.006.001-10.119 5.667zm.912-7.075v3.814l2.011-1.127-.055-.009 6.082-3.37a7.49 7.49 0 0 0 3.876-6.57A7.502 7.502 0 0 0 16.098 2.4H9.941A7.541 7.541 0 0 0 2.4 9.941a7.159 7.159 0 0 0 6.953 7.156l2.333.066zm5.234-13.01l1.76 1.77-3.99 3.99 4 3.98-1.77 1.77-4-3.98-4 3.98-1.77-1.76 4-3.99-4-3.99 1.76-1.77 4.01 4 4-4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 22" id="s_icon-s_hide_user_comments" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.528 2.004l1.766 2A27.198 27.198 0 0 0 .55 10.475a.875.875 0 0 0 0 1.048C3.054 14.865 8.26 20.47 15 20.47a13.25 13.25 0 0 0 5.664-1.332l1.89 2.138 1.31-1.16L6.84.846l-1.311 1.16zM15 18.72c-5.65 0-10.215-4.614-12.648-7.719a24.625 24.625 0 0 1 6.111-5.673l2.2 2.49A5.323 5.323 0 0 0 9.604 11 5.403 5.403 0 0 0 15 16.396c.921 0 1.826-.24 2.626-.698l1.826 2.067c-1.404.615-2.919.94-4.452.954zm1.6-4.182c-.5.235-1.047.358-1.6.36A3.901 3.901 0 0 1 11.104 11a3.847 3.847 0 0 1 .58-2.027l4.917 5.564zm3.36-1.416a5.342 5.342 0 0 0-6.437-7.286l1.15 1.302c.11-.01.215-.033.327-.033a3.885 3.885 0 0 1 3.807 4.713l1.153 1.304z">
                </path>
                <path d="M29.45 10.476C26.946 7.135 21.74 1.53 15 1.53c-1.548.01-3.082.298-4.528.852L11.725 3.8A10.96 10.96 0 0 1 15 3.28c5.65 0 10.215 4.614 12.648 7.719a25.843 25.843 0 0 1-5.121 5.026l1.159 1.313a28.302 28.302 0 0 0 5.764-5.815.875.875 0 0 0 0-1.048z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 20" id="s_icon-s_hide_user_comments_big" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M19.155 13.294a5.14 5.14 0 0 0 1.098-3.156 5.197 5.197 0 0 0-5.191-5.19 5.134 5.134 0 0 0-2.628.739l.736.833a4.05 4.05 0 0 1 1.892-.484 4.094 4.094 0 0 1 3.366 6.436l.727.822zm2.53 4.375l-.763-.865-2.456-2.778h.001l-.718-.813-5.408-6.12v-.001l-.718-.813-2.525-2.857-.764-.866L6.474.455l-.749.662 1.73 1.957A24.332 24.332 0 0 0 .798 9.797l-.228.321.228.321c4.36 6.146 8.74 8.888 14.202 8.888 1.978.009 3.935-.407 5.739-1.22l1.516 1.716.749-.662-1.319-1.492zm-4.777-3.898a3.971 3.971 0 0 1-1.846.47 4.107 4.107 0 0 1-4.103-4.103 4.009 4.009 0 0 1 .725-2.28l5.224 5.913zM15 18.218c-4.972 0-9.015-2.502-13.068-8.1a22.426 22.426 0 0 1 6.275-6.194l2.733 3.094a5.1 5.1 0 0 0-1.07 3.12 5.197 5.197 0 0 0 5.192 5.192 5.06 5.06 0 0 0 2.586-.72l2.315 2.619a12.718 12.718 0 0 1-4.963.99z">
                    </path>
                    <path d="M29.202 9.797C24.843 3.651 20.462.91 15 .91a13.822 13.822 0 0 0-5.737 1.188l.784.887c1.57-.65 3.254-.978 4.953-.967 4.973 0 9.016 2.502 13.068 8.1a22.497 22.497 0 0 1-6.253 6.186l.75.85a24.382 24.382 0 0 0 6.637-6.715l.228-.32-.228-.322z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 30 22" id="s_icon-s_hide_user_comments_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.507 9.597C25.162 3.939 20.009.823 15 .823c-1.76.017-3.5.38-5.12 1.069l1.756 2.018A10.557 10.557 0 0 1 15 3.323c5.401 0 9.822 4.406 12.17 7.344a24.65 24.65 0 0 1-5.303 5.003l1.655 1.901a27.048 27.048 0 0 0 5.986-5.836 1.758 1.758 0 0 0-.001-2.138z">
                </path>
                <path d="M14.92 6.096a4.38 4.38 0 0 0-1.216.19l5.35 6.15c.258-.57.392-1.188.393-1.813a4.526 4.526 0 0 0-4.527-4.527zm6.882 12.546l-1.683-1.935-.028.015-2.291-2.634.022-.02-5.915-6.799c-.007.007-.016.011-.024.018l-2.22-2.551.029-.014-1.677-1.926-.027.014L6.038.57 4.154 2.21l1.72 1.978a27.817 27.817 0 0 0-5.381 5.41 1.761 1.761 0 0 0 0 2.14C4.839 17.394 9.99 20.51 15 20.51a13.184 13.184 0 0 0 4.39-.787l1.889 2.172 1.886-1.64-1.39-1.599.027-.015zM15 18.01c-5.403 0-9.825-4.408-12.17-7.344A25.457 25.457 0 0 1 7.52 6.08l3.016 3.468a4.48 4.48 0 0 0 4.384 5.6 4.4 4.4 0 0 0 .45-.044l2.228 2.56c-.848.225-1.721.342-2.598.347z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 15" id="s_icon-s_left_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.783 6.791H3.213l5.294-4.962L7.31.554l-6.093 5.73a1.687 1.687 0 0 0 0 2.763l6.092 5.731 1.2-1.275L3.232 8.54h14.55v-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 15" id="s_icon-s_left_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.66 7.236H2.14L8 1.6 7.305.879 1.384 6.587a1.369 1.369 0 0 0-.63 1.15c-.007.432.2.84.556 1.089l5.996 5.767.694-.72-5.873-5.637H17.66v-1z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 17" id="s_icon-s_left_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.605 7.416H4.793L9.93 2.751 8.248.901 1.57 6.965a2.063 2.063 0 0 0 0 3.4l6.678 6.066 1.68-1.85-5.135-4.666h14.812v-2.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 21" id="s_icon-s_left_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.153 20.645L1.228 12.147a1.874 1.874 0 0 1 0-2.96L12.153.689l1.075 1.381-10.926 8.497a.126.126 0 0 0 0 .199l10.926 8.498-1.075 1.38z">
                </path>
            </symbol>
            <symbol viewbox="0 0 13 20" id="s_icon-s_left_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.088 19.118l-10.63-8.267a1.5 1.5 0 0 1 0-2.368L12.088.215l.614.79-10.63 8.267a.5.5 0 0 0 0 .79l10.63 8.267-.614.79z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 22" id="s_icon-s_left_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.22 21.17L.996 12.443a2.25 2.25 0 0 1 0-3.551L12.22.163l1.535 1.974-10.968 8.53 10.968 8.53-1.535 1.974z">
                </path>
            </symbol>
            <symbol viewbox="0 0 11 25" id="s_icon-s_left_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.833 24.644L.518 13.808a1.878 1.878 0 0 1 0-2.283L8.833.69l1.389 1.066L1.906 12.59a.126.126 0 0 0 0 .152l8.316 10.835-1.389 1.066z">
                </path>
            </symbol>
            <symbol viewbox="0 0 10 24" id="s_icon-s_left_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.902 23.118L.815 12.58a1.503 1.503 0 0 1 0-1.827L8.902.215l.794.61-8.088 10.537a.503.503 0 0 0 0 .61l8.088 10.537-.794.609z">
                </path>
            </symbol>
            <symbol viewbox="0 0 12 26" id="s_icon-s_left_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.764 25.17L1.22 14.036a2.256 2.256 0 0 1 0-2.74L9.764.165l1.983 1.523-8.427 10.98 8.427 10.98-1.983 1.523z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 26" id="s_icon-s_lightning" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.372 2.375h.005-.005zm0 0l-3.5 8.75h8.25l-13.5 12.5 3.503-8.75H1.878l13.494-12.5zm0-1.5h-.029c-.37.007-.724.15-.994.403L.859 13.775a1.5 1.5 0 0 0 1.02 2.6h6.03l-2.68 6.693a1.5 1.5 0 0 0 2.412 1.658l13.5-12.5a1.5 1.5 0 0 0-1.02-2.601h-6.034l2.647-6.617A1.5 1.5 0 0 0 15.378.875h-.006z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 24" id="s_icon-s_lightning_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.372 1.042h.005-.005zm0 0l-3.5 8.75h8.25l-13.5 12.5 3.503-8.75H1.878l13.494-12.5zm0-1h-.018a.997.997 0 0 0-.663.268L1.199 12.808a1 1 0 0 0 .68 1.734h6.768L5.694 21.92A1 1 0 0 0 7.3 23.025l13.5-12.5a1 1 0 0 0-.68-1.733H13.35l2.928-7.32a1 1 0 0 0-.9-1.43h-.005z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 24" id="s_icon-s_lightning_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.916.183L.378 13.48a.5.5 0 0 0 .337.869h8.432a.5.5 0 0 1 .464.687L6.276 23.26a.5.5 0 0 0 .8.557L21.623 10.52a.5.5 0 0 0-.337-.869h-8.437a.5.5 0 0 1-.463-.687L15.717.739a.5.5 0 0 0-.8-.556z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 25" id="s_icon-s_like" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 13l4.064-6.489V.987c0-.545.442-.987.987-.987A3.949 3.949 0 0 1 14 3.949V9h7a2 2 0 1 1 0 4 2 2 0 1 1 0 4h-1a2 2 0 1 1 0 4h-1a2 2 0 1 1 0 4H9a4 4 0 0 1-4-4v-8zm-1-.016V25H0V12.984h4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_like_circle" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zM11.238 8.107L8.8 12v4.8a2.4 2.4 0 0 0 2.4 2.4h6a1.2 1.2 0 0 0 0-2.4h.6a1.2 1.2 0 0 0 0-2.4h.6a1.2 1.2 0 0 0 0-2.4 1.2 1.2 0 0 0 0-2.4h-4.2V6.57a2.37 2.37 0 0 0-2.37-2.37.592.592 0 0 0-.592.592v3.315zM8.2 19.2v-7.21H5.8v7.21h2.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 21 11" id="s_icon-s_live" xmlns="http://www.w3.org/2000/svg">
                <path d="M.496 1.238h1.22c.098 0 .177.08.177.177v8.987a.176.176 0 0 1-.176.177H.496a.176.176 0 0 1-.176-.177V1.415a.176.176 0 0 1 .176-.177zm3.537 1.24a.927.927 0 0 1 0-1.346 1.01 1.01 0 0 1 .717-.27 1.05 1.05 0 0 1 .949.54c.012.02.02.041.025.063.102.354.007.736-.25 1a.978.978 0 0 1-.724.284 1.01 1.01 0 0 1-.717-.27zm.1 1.379h1.221c.098 0 .176.079.176.176v6.37a.176.176 0 0 1-.176.176h-1.22a.176.176 0 0 1-.177-.177v-6.37a.176.176 0 0 1 .176-.175zm9.65.245l-2.731 6.37a.176.176 0 0 1-.162.107H9.498a.176.176 0 0 1-.162-.107l-2.731-6.37a.176.176 0 0 1 .162-.245h1.252c.07 0 .135.042.162.108l1.885 4.494a.176.176 0 0 0 .324.002l1.942-4.498a.176.176 0 0 1 .162-.106h1.127a.176.176 0 0 1 .162.245zm7.028 3.62h-4.885a.178.178 0 0 0-.17.229c.113.38.348.714.669.948.424.299.935.451 1.454.433.623.019 1.23-.2 1.7-.61a.174.174 0 0 1 .245.02l.621.712a.175.175 0 0 1 0 .234 2.864 2.864 0 0 1-1.044.702 4.54 4.54 0 0 1-3.511-.164A3.174 3.174 0 0 1 14.587 9a3.467 3.467 0 0 1-.46-1.781 3.518 3.518 0 0 1 .447-1.768c.29-.518.72-.943 1.24-1.228a3.614 3.614 0 0 1 1.788-.441c.613-.01 1.218.14 1.755.434.511.284.93.708 1.21 1.221.297.56.446 1.186.433 1.82 0 .077-.004.177-.012.3a.178.178 0 0 1-.177.166zm-4.487-2.235c-.295.252-.502.59-.591.968a.178.178 0 0 0 .171.222h3.385a.178.178 0 0 0 .172-.22 1.816 1.816 0 0 0-.575-.963 1.877 1.877 0 0 0-1.284-.454 1.898 1.898 0 0 0-1.278.447z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 10" id="s_icon-s_live_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M.092.917h1.152V9.82H.092zM3.458 2.02a.71.71 0 0 1-.222-.528.727.727 0 0 1 .222-.533.757.757 0 0 1 .558-.223.782.782 0 0 1 .558.21.69.69 0 0 1 .222.522.756.756 0 0 1-.78.768.768.768 0 0 1-.558-.215zm-.019 1.44h1.153v6.36H3.439V3.46zM12.416 3.461L9.631 9.82H8.455L5.671 3.461h1.2l2.184 5.1 2.232-5.1zM19.04 7.025h-5.161a2 2 0 0 0 .738 1.35c.446.348 1 .529 1.566.51a2.358 2.358 0 0 0 1.836-.769l.636.745c-.291.338-.66.601-1.074.768a4.053 4.053 0 0 1-3.222-.15 2.95 2.95 0 0 1-1.206-1.159 3.32 3.32 0 0 1-.426-1.68 3.374 3.374 0 0 1 .414-1.668c.265-.484.66-.885 1.14-1.157.5-.28 1.065-.424 1.638-.414.57-.01 1.13.132 1.626.414.473.273.86.674 1.116 1.157a3.527 3.527 0 0 1 .378 2.053zm-4.507-2.148a2.031 2.031 0 0 0-.654 1.32h4.08a2.046 2.046 0 0 0-.654-1.315 2.147 2.147 0 0 0-2.772-.005z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 30" id="s_icon-s_live_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.602 13.373a1.899 1.899 0 0 0-1.278.448c-.295.251-.502.59-.591.967a.178.178 0 0 0 .171.222h3.385a.178.178 0 0 0 .172-.22 1.816 1.816 0 0 0-.575-.963 1.876 1.876 0 0 0-1.284-.454z">
                </path>
                <path d="M15 0C6.716 0 0 6.716 0 15c0 8.284 6.716 15 15 15 8.284 0 15-6.716 15-15A15 15 0 0 0 15 0zM6.893 18.736a.176.176 0 0 1-.176.176H5.496a.176.176 0 0 1-.176-.176V9.748c0-.097.078-.176.176-.176h1.22c.098 0 .177.079.177.176v8.988zm3.638 0a.176.176 0 0 1-.177.176h-1.22a.176.176 0 0 1-.177-.176v-6.37a.176.176 0 0 1 .176-.176h1.221a.176.176 0 0 1 .177.176v6.37zm-.057-7.937a.979.979 0 0 1-.724.284 1.01 1.01 0 0 1-.717-.27.927.927 0 0 1 0-1.348 1.01 1.01 0 0 1 .717-.27 1.05 1.05 0 0 1 .949.54c.012.02.02.042.025.064.102.354.007.736-.25 1zm5.578 8.006a.176.176 0 0 1-.162.107h-1.392a.176.176 0 0 1-.162-.107l-2.731-6.37a.176.176 0 0 1 .162-.245h1.252c.07 0 .135.043.162.108l1.885 4.495a.176.176 0 0 0 .324.001l1.942-4.497a.176.176 0 0 1 .162-.107h1.127a.176.176 0 0 1 .162.246l-2.731 6.37zm9.76-2.75h-4.886a.178.178 0 0 0-.17.23c.113.38.348.713.669.947.424.3.935.452 1.454.433.623.02 1.23-.199 1.7-.61a.174.174 0 0 1 .245.02l.621.713a.175.175 0 0 1 0 .233 2.866 2.866 0 0 1-1.044.703 4.542 4.542 0 0 1-3.511-.164 3.176 3.176 0 0 1-1.303-1.228 3.468 3.468 0 0 1-.46-1.781 3.518 3.518 0 0 1 .447-1.768c.29-.517.72-.942 1.24-1.227a3.613 3.613 0 0 1 1.788-.442c.613-.01 1.218.14 1.756.435.51.284.93.707 1.208 1.22.298.56.447 1.186.434 1.82a4.6 4.6 0 0 1-.012.3.178.178 0 0 1-.177.166z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_lock_user" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.914 15.109a5.31 5.31 0 0 1 .26-.732c.605-.09.543-.493.807-1.492.265-1.005.282-2.036-.304-2.124.116-.48.173-.97.17-1.463 0-2.123-1.468-4.953-6.33-4.815.011.293.065.582.159.86A5.04 5.04 0 0 0 9.393 6.6l7.521 8.508zm4.36 7.573l-.72-.814-1.579-1.785-.011-.003-2.863-3.24.004-.004-7.711-8.724-.002.007-2.994-3.387.004-.004-.992-1.123-.004.005-1.893-2.142-1.311 1.159 2.002 2.265A12.715 12.715 0 0 0 19.85 23.726l1.805 2.041 1.31-1.159-1.698-1.922.005-.004zm-13.14-9.797c.264.999.203 1.402.808 1.492.29.573.433 1.938 1.418 2.857v1.45c0 .992-1.951 1.082-2.373 1.152a4.506 4.506 0 0 0-2.674 1.355A11.16 11.16 0 0 1 4.21 6.03l4.193 4.743c-.556.128-.527 1.13-.268 2.113z">
                </path>
                <path d="M13 1.75a11.235 11.235 0 0 1 8.523 18.573l.997 1.128A12.733 12.733 0 0 0 5.774 2.507l1 1.13A11.182 11.182 0 0 1 13 1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 25 25" id="s_icon-s_lock_user_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.29 10.35c.074-.392.11-.79.107-1.189a4.76 4.76 0 0 0-1.413-3.402 6.706 6.706 0 0 0-5.039-1.587.375.375 0 0 0-.363.391c.007.186.03.371.068.554-.938.297-1.77.86-2.392 1.622l.54.526a4.42 4.42 0 0 1 2.41-1.533.374.374 0 0 0 .254-.484 2.36 2.36 0 0 1-.087-.33 5.729 5.729 0 0 1 4.087 1.38 4.007 4.007 0 0 1 1.185 2.868c.003.44-.048.878-.152 1.305a.434.434 0 0 0 .077.319c.068.094.169.16.282.182.144.504.12 1.04-.066 1.53-.054.203-.093.38-.128.535-.132.59-.148.592-.338.62a.375.375 0 0 0-.28.202c-.05.105-.094.214-.131.324l.599.583c.048-.155.09-.296.136-.415.525-.165.624-.606.746-1.15.033-.147.07-.315.121-.507a3.04 3.04 0 0 0-.032-2.134.86.86 0 0 0-.192-.21z">
                </path>
                <path d="M12.377.709a11.96 11.96 0 0 0-8.545 3.59.152.152 0 0 0-.08.087A11.986 11.986 0 1 0 12.377.709zm-11 12c0-2.698.998-5.3 2.801-7.307l3.295 3.204a6.54 6.54 0 0 0 .084 1.759.866.866 0 0 0-.19.218 3.098 3.098 0 0 0-.016 2.11c.05.193.089.362.122.51.122.542.221.983.746 1.148.045.12.088.262.137.418a5.11 5.11 0 0 0 1.116 2.155v1.232c0 .332-.583.569-1.731.704a5.822 5.822 0 0 0-.23.03 4.603 4.603 0 0 0-2.921 1.58 10.965 10.965 0 0 1-3.213-7.761zm3.761 8.261a3.93 3.93 0 0 1 2.496-1.34l.195-.024c.716-.085 2.393-.284 2.393-1.45v-1.39a.374.374 0 0 0-.12-.273 4.23 4.23 0 0 1-1.03-1.947 4.812 4.812 0 0 0-.25-.687.375.375 0 0 0-.279-.202c-.19-.028-.206-.03-.338-.62a14.066 14.066 0 0 0-.128-.535 2.122 2.122 0 0 1-.022-1.565.375.375 0 0 0 .292-.454 6.564 6.564 0 0 1-.144-1.166l6.926 6.737c-.13.194-.286.37-.463.524a.374.374 0 0 0-.134.287v1.291c0 1.166 1.677 1.364 2.394 1.45l.195.024c.965.121 1.852.596 2.488 1.332a10.915 10.915 0 0 1-14.471.008zm10.144-3.936c.144-.138.275-.289.392-.45l2.684 2.61a5.672 5.672 0 0 0-1.115-.304 5.824 5.824 0 0 0-.23-.03c-1.148-.135-1.73-.372-1.73-.704v-1.122zm5.323 2.95L4.876 4.687a10.982 10.982 0 0 1 15.729 15.299z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_lock_user_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.324 10.162c.107-.443.16-.897.158-1.352 0-1.963-1.358-4.58-5.853-4.452.01.27.06.538.147.795a4.638 4.638 0 0 0-2.269 1.325l7.03 7.957c.09-.316.197-.626.322-.93.56-.083.503-.455.746-1.379.245-.929.261-1.882-.281-1.964z">
                </path>
                <path d="M13 .302A12.698 12.698 0 1 0 25.698 13C25.69 5.99 20.01.31 13 .302zm-2.441 17.186c0 .917-1.804 1-2.194 1.065a4.09 4.09 0 0 0-2.772 1.59 10.243 10.243 0 0 1-.874-13.246l3.621 4.098c.005.383.059.763.161 1.13.244.925.188 1.297.747 1.38.233.968.682 1.871 1.311 2.642v1.341zm9.13 3.33L6.066 5.402a10.287 10.287 0 1 1 13.621 15.416z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 5" id="s_icon-s_more" xmlns="http://www.w3.org/2000/svg">
                <circle cx="10" cy="2.667" r="1.999"></circle>
                <circle cx="17.998" cy="2.667" r="1.999"></circle>
                <circle cx="2.002" cy="2.667" r="1.999"></circle>
            </symbol>
            <symbol viewbox="0 0 18 4" id="s_icon-s_more_big" xmlns="http://www.w3.org/2000/svg">
                <circle cx="9" cy="1.667" r="1.5"></circle>
                <circle cx="16.498" cy="1.667" r="1.5"></circle>
                <circle cx="1.502" cy="1.667" r="1.5"></circle>
            </symbol>
            <symbol viewbox="0 0 24 6" id="s_icon-s_more_small" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="2.667" r="2.499"></circle>
                <circle cx="20.997" cy="2.667" r="2.499"></circle>
                <circle cx="3.003" cy="2.667" r="2.499"></circle>
            </symbol>
            <symbol viewbox="0 0 23 24" id="s_icon-s_mute" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.231 19.44L1.447 2.476.34 3.833l3.932 3.209a2.557 2.557 0 0 0-1.233 2.18v4.888a2.567 2.567 0 0 0 2.565 2.565H8.8l7.59 6.227a.96.96 0 0 0 1.57-.742v-3.946l3.164 2.582 1.106-1.357zm-6.192.689l-6.285-5.157a.958.958 0 0 0-.609-.22H5.604a.643.643 0 0 1-.643-.642V9.223c0-.355.288-.643.643-.643h.553l9.882 8.065v3.484zm0-16.925v8.627l1.922 1.568V1.173A.96.96 0 0 0 16.39.43L9.25 6.29l1.518 1.238 5.271-4.325z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_icon-s_mute_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.704 18.493L18 15.471v-.002l-1.02-.832v.001L7.767 7.12h.002l-1.226-1h-.002L1.5 2.005l-.632.774 4.11 3.355A1.043 1.043 0 0 0 4 7.168v6.997c0 .579.47 1.048 1.049 1.049l4.43.012 6.806 5.585A1.05 1.05 0 0 0 18 20v-3.239l3.071 2.507.633-.775zm-4.732 1.551a.047.047 0 0 1-.052-.007l-6.805-5.584a1.05 1.05 0 0 0-.666-.24l-4.45-.048.05-7.046h1.136l10.793 8.808-.006 4.117zM9.45 7.119c.242 0 .477-.084.665-.237L17 1.334l-.018 12.014 1.018.83V1.335a1.05 1.05 0 0 0-1.715-.812L9.449 6.12H8.124l1.226 1h.099z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 22" id="s_icon-s_mute_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.423 19.464L1.877 2.484.603 4.026l3.802 3.142a2.349 2.349 0 0 0-.917 1.856v3.993A2.362 2.362 0 0 0 5.85 15.38h3.18l7.492 6.15a.591.591 0 0 0 .966-.457V17.98l3.66 3.025 1.275-1.542zM17.488.97a.591.591 0 0 0-.966-.457L9.5 6.276l7.988 6.603V.969z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 24" id="s_icon-s_notification" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.937 14.418a21.266 21.266 0 0 1-.546-4.958 6.67 6.67 0 0 0-3.384-5.89c-.604-3.857-7.41-3.857-8.014 0A6.67 6.67 0 0 0 2.61 9.46a21.266 21.266 0 0 1-.546 4.958 2.599 2.599 0 0 0 .758 5.085H17.18a2.599 2.599 0 0 0 .758-5.085zm-.758 3.335H2.82a.848.848 0 0 1-.032-1.697l.606-.024.19-.576c.552-1.943.813-3.957.774-5.977a4.937 4.937 0 0 1 2.796-4.54l.546-.222v-.59C7.7 2.754 9.146 2.387 10 2.387c.854 0 2.3.367 2.3 1.742v.589l.545.221A4.957 4.957 0 0 1 15.64 9.48c-.04 2.02.222 4.034.775 5.977l.189.576.606.024a.848.848 0 0 1-.032 1.697zm-4.212 3.328H7.033a.508.508 0 0 0-.359.866 4.707 4.707 0 0 0 6.652 0 .508.508 0 0 0-.36-.866z">
                </path>
            </symbol>
            <symbol viewbox="0 0 25 24" id="s_icon-s_notification_off" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.96 21.081H9.026a.508.508 0 0 0-.359.867 4.71 4.71 0 0 0 6.652 0 .508.508 0 0 0-.359-.867zm6.722-3.538v-.001l-3.485-2.84L7.622 6.086h.001L6.271 4.983H6.27L1.663 1.23.557 2.586l4.735 3.859a6.899 6.899 0 0 0-.69 3.015 21.21 21.21 0 0 1-.546 4.958 2.599 2.599 0 0 0 .758 5.085h14.358c.549 0 1.083-.178 1.523-.506l2.952 2.406 1.106-1.358-3.07-2.502zm-16.868.21a.848.848 0 0 1-.033-1.696l.606-.024.19-.577a20.38 20.38 0 0 0 .775-5.977 5.31 5.31 0 0 1 .356-1.88l12.461 10.154H4.814zM9.148 4.938l.546-.222v-.589c0-1.374 1.445-1.741 2.3-1.741.853 0 2.298.367 2.298 1.741v.59l.546.22a4.957 4.957 0 0 1 2.796 4.54c.01 1.007.067 1.87.142 2.623l2 1.63a23.415 23.415 0 0 1-.392-4.27A6.67 6.67 0 0 0 16 3.57c-.604-3.858-7.41-3.858-8.014 0a6.946 6.946 0 0 0-.383.24l1.443 1.176c.052-.026.092-.044.102-.048z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 24" id="s_icon-s_password" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.199 8.719h-2.011V6.77a6.188 6.188 0 0 0-12.376 0V8.72h-2.01a1.537 1.537 0 0 0-1.535 1.535V21.88c0 .847.687 1.534 1.534 1.535H18.2a1.537 1.537 0 0 0 1.534-1.535V10.254c0-.847-.687-1.534-1.534-1.535zM5.562 6.77a4.438 4.438 0 0 1 8.876 0V8.72H5.562V6.77zm12.421 14.895H2.017V10.469h15.966v11.197z">
                </path>
                <path d="M9.125 13.576h1.75v5.058h-1.75z"></path>
            </symbol>
            <symbol viewbox="0 0 16 20" id="s_icon-s_pause" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.594 19.375H.844a.75.75 0 0 1-.75-.75V1.375a.75.75 0 0 1 .75-.75h4.75a.75.75 0 0 1 .75.75v17.25a.75.75 0 0 1-.75.75zm-4-1.5h3.25V2.125h-3.25v15.75zm13.562 1.5h-4.75a.75.75 0 0 1-.75-.75V1.375a.75.75 0 0 1 .75-.75h4.75a.75.75 0 0 1 .75.75v17.25a.75.75 0 0 1-.75.75zm-4-1.5h3.25V2.125h-3.25v15.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 18" id="s_icon-s_pause_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.663 0h-5.3a.5.5 0 0 0-.5.5v17a.5.5 0 0 0 .5.5h5.3a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5zm-.5 17h-4.3V1h4.3v16zM16.638 0h-5.3a.5.5 0 0 0-.5.5v17a.5.5 0 0 0 .5.5h5.3a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5zm-.5 17h-4.3V1h4.3v16z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 18" id="s_icon-s_pause_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 .5H2.143A1.335 1.335 0 0 0 .714 1.714v14.572c.064.727.7 1.268 1.429 1.214H5a1.335 1.335 0 0 0 1.429-1.214V1.714A1.335 1.335 0 0 0 5 .5zm10.857 0H13a1.335 1.335 0 0 0-1.429 1.214v14.572c.064.727.7 1.268 1.429 1.214h2.857a1.335 1.335 0 0 0 1.429-1.214V1.714A1.335 1.335 0 0 0 15.857.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 20" id="s_icon-s_photo" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.3 19.958H1.7a.875.875 0 0 1-.875-.875V4.22a.875.875 0 0 1 .875-.875h5.034L9.085.374a.874.874 0 0 1 .686-.332h6.457c.268 0 .52.122.686.332l2.352 2.97H24.3a.875.875 0 0 1 .875.876v14.863a.875.875 0 0 1-.875.875zm-21.725-1.75h20.85V5.095h-4.582a.874.874 0 0 1-.686-.332l-2.352-2.971h-5.61l-2.352 2.97a.874.874 0 0 1-.686.333H2.575v13.113z">
                </path>
                <path d="M13 15.444a4.75 4.75 0 1 1 0-9.5 4.75 4.75 0 0 1 0 9.5zm0-8a3.25 3.25 0 1 0 0 6.5 3.25 3.25 0 0 0 0-6.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 20" id="s_icon-s_photo_big" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M22.3 19.583H1.7c-.828-.001-1.499-.672-1.5-1.5V5.22c.001-.828.672-1.499 1.5-1.5h3.973c.153 0 .298-.07.392-.19L8.08.986A1.49 1.49 0 0 1 9.255.417h5.49a1.49 1.49 0 0 1 1.176.57l2.014 2.543c.094.12.239.19.392.19H22.3c.828.001 1.499.672 1.5 1.5v12.863c-.001.828-.672 1.499-1.5 1.5zM1.7 4.72a.5.5 0 0 0-.5.5v12.863a.5.5 0 0 0 .5.5h20.6a.5.5 0 0 0 .5-.5V5.22a.5.5 0 0 0-.5-.5h-3.973a1.494 1.494 0 0 1-1.177-.569l-2.013-2.544a.496.496 0 0 0-.392-.19h-5.49a.497.497 0 0 0-.392.19L6.85 4.15c-.284.36-.718.57-1.177.57H1.7z">
                    </path>
                    <path d="M12 15.656a4.49 4.49 0 1 1 0-8.98 4.49 4.49 0 0 1 0 8.98zm0-8a3.51 3.51 0 1 0 0 7.02 3.51 3.51 0 0 0 0-7.02z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 24 20" id="s_icon-s_photo_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.3 4.22h-3.973a1 1 0 0 1-.784-.38l-2.014-2.543a1 1 0 0 0-.784-.38h-5.49a1 1 0 0 0-.784.38L6.457 3.84a1 1 0 0 1-.784.38H1.7a1 1 0 0 0-1 1v12.862a1 1 0 0 0 1 1h20.6a1 1 0 0 0 1-1V5.22a1 1 0 0 0-1-1zM12 15.166a4 4 0 1 1 0-8 4 4 0 0 1 0 8z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 21" id="s_icon-s_play" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.375 20.477A1.875 1.875 0 0 1 .5 18.602V2.744a1.875 1.875 0 0 1 2.864-1.593L16.21 9.123a1.874 1.874 0 0 1-.008 3.19L3.355 20.2c-.295.18-.634.277-.98.277zm.001-17.859a.128.128 0 0 0-.062.017.116.116 0 0 0-.064.11v15.857a.125.125 0 0 0 .19.107l12.847-7.887a.117.117 0 0 0 .06-.106.115.115 0 0 0-.06-.106L2.442 2.638a.123.123 0 0 0-.065-.02z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 23" id="s_icon-s_play_back" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.923 21.448c-.35 0-.692-.098-.989-.282L4.088 13.194a1.874 1.874 0 0 1 .008-3.19l12.846-7.887a1.875 1.875 0 0 1 2.856 1.599v15.857c0 1.035-.84 1.875-1.875 1.875zm-.066-1.768a.113.113 0 0 0 .127.003.116.116 0 0 0 .064-.11V3.716a.125.125 0 0 0-.19-.107L5.012 11.495a.124.124 0 0 0-.001.212l12.846 7.973zM.202.783h1.75v21.75H.202z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 21" id="s_icon-s_play_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M.517 20.316a.5.5 0 0 1-.5-.5V.52A.5.5 0 0 1 .772.09l16.3 9.7a.5.5 0 0 1-.002.86L.77 20.247a.498.498 0 0 1-.253.07zm.5-18.917v17.543l14.818-8.725L1.017 1.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_play_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 .875C6.304.875.875 6.304.875 13S6.304 25.125 13 25.125 25.125 19.696 25.125 13C25.117 6.307 19.693.883 13 .875zm5.594 12.867l-8.334 4.973A.833.833 0 0 1 9 18V8a.833.833 0 0 1 1.264-.714l8.333 5.027a.833.833 0 0 1-.003 1.429z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_play_invert_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 .875C6.304.875.875 6.304.875 13S6.304 25.125 13 25.125 25.125 19.696 25.125 13C25.117 6.307 19.693.883 13 .875zm4.675 12.719l-6.667 3.978A.667.667 0 0 1 10 17V9a.667.667 0 0 1 1.011-.571l6.667 4.021a.667.667 0 0 1-.003 1.144z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 23" id="s_icon-s_play_next" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.077 21.477a1.874 1.874 0 0 1-1.875-1.875V3.744a1.875 1.875 0 0 1 2.864-1.593l12.846 7.972a1.874 1.874 0 0 1-.008 3.19L3.058 21.2c-.295.18-.635.277-.981.277zm0-17.859a.128.128 0 0 0-.061.017.116.116 0 0 0-.064.11v15.857a.116.116 0 0 0 .064.109.114.114 0 0 0 .126-.003l12.846-7.886a.124.124 0 0 0 .001-.212L2.143 3.638a.123.123 0 0 0-.065-.02zM18.048.783h1.75v21.75h-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 22" id="s_icon-s_play_podcast" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.692 8.537h-.59A11.916 11.916 0 0 0 14.073.766h-.077A11.911 11.911 0 0 0 2.89 8.537h-.582a1.585 1.585 0 0 0-1.584 1.585v5.245a1.585 1.585 0 0 0 1.584 1.585h1.968V9.914a10.15 10.15 0 0 1 9.72-7.398h.064a10.156 10.156 0 0 1 9.664 7.425v7.011h1.968a1.585 1.585 0 0 0 1.584-1.585v-5.245a1.585 1.585 0 0 0-1.584-1.585z">
                </path>
                <path d="M14 5.207a8.395 8.395 0 1 0 8.395 8.395A8.405 8.405 0 0 0 14 5.207zm3.873 8.91l-5.77 3.442a.577.577 0 0 1-.873-.495V10.14a.577.577 0 0 1 .875-.494l5.77 3.48a.577.577 0 0 1-.002.99z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 22" id="s_icon-s_play_podcast_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.692 7.913h-1.484a10.977 10.977 0 0 0-20.431 0H2.308c-.875 0-1.584.71-1.584 1.585v5.245a1.585 1.585 0 0 0 1.584 1.585h1.968V9.132a10.183 10.183 0 0 1 9.719-7.306h.065a10.185 10.185 0 0 1 9.664 7.352v7.15h1.968a1.585 1.585 0 0 0 1.584-1.585V9.498c0-.875-.71-1.585-1.584-1.585z">
                </path>
                <path d="M14 4.583a8.395 8.395 0 1 0 8.395 8.395A8.405 8.405 0 0 0 14 4.583zm3.237 8.806l-4.616 2.755a.462.462 0 0 1-.698-.397v-5.539a.462.462 0 0 1 .7-.395l4.616 2.785a.462.462 0 0 1-.002.791z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 23" id="s_icon-s_play_podcast_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.692 8.84h-.955a12.461 12.461 0 0 0-23.545 0h-.884a1.585 1.585 0 0 0-1.584 1.584v5.245a1.584 1.584 0 0 0 1.584 1.585h2.968v-8.29a10.55 10.55 0 0 1 9.687-6.5h.067c4.288.05 8.12 2.69 9.694 6.679v8.11h2.968a1.584 1.584 0 0 0 1.584-1.584v-5.245c0-.875-.709-1.585-1.584-1.585z">
                </path>
                <path d="M15 5.51a8.395 8.395 0 1 0 8.395 8.394A8.405 8.405 0 0 0 15 5.51zm3.873 8.908l-5.77 3.443a.577.577 0 0 1-.872-.495v-6.924a.577.577 0 0 1 .875-.494l5.77 3.48a.577.577 0 0 1-.003.99z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 21" id="s_icon-s_play_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.167.751C1.384.751.75 1.386.75 2.168v17a1.417 1.417 0 0 0 2.143 1.217l14.166-8.455a1.417 1.417 0 0 0 .006-2.43L2.898.956A1.416 1.416 0 0 0 2.167.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 23" id="s_icon-s_plus" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.375 10.625h-10v-10h-1.75v10h-10v1.75h10v10h1.75v-10h10z"></path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_icon-s_plus_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.4 10.267h-9.9V.167h-1v10.1H.6v.8h9.9v10.1h1v-10.1h9.9z"></path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_plus_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1 10.9h-9.85V.75h-2.5V10.9H.9v2.2h9.85v10.15h2.5V13.1h9.85z"></path>
            </symbol>
            <symbol viewbox="0 0 11 17" id="s_icon-s_question" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.467 16.568a1.756 1.756 0 1 1 0-3.513 1.756 1.756 0 0 1 0 3.513zm-1.246-5.243a6.342 6.342 0 0 1 .296-1.726 4.424 4.424 0 0 1 1.417-1.56l.807-.633a3.04 3.04 0 0 0 .686-.7c.311-.424.48-.936.48-1.462A2.227 2.227 0 0 0 5.405 2.92a2.407 2.407 0 0 0-2.561 2.512H.062a4.905 4.905 0 0 1 2.1-4.094 5.638 5.638 0 0 1 3.104-.81A6.76 6.76 0 0 1 9.31 1.685a3.87 3.87 0 0 1 1.571 3.38c.027.822-.21 1.63-.679 2.306a8.129 8.129 0 0 1-1.574 1.49l-.786.61c-.43.317-.753.76-.924 1.267a3.125 3.125 0 0 0-.109.586H4.221z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 17" id="s_icon-s_question_add" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.696 4.493H4.282v3.734h-3.8v2.26h3.8v3.734h2.414v-3.734h3.822v-2.26H6.696zM16.553 12.54a1.756 1.756 0 1 0 0 3.513 1.756 1.756 0 0 0 0-3.513zm3.843-11.37A6.76 6.76 0 0 0 16.352.012a5.638 5.638 0 0 0-3.105.81 4.905 4.905 0 0 0-2.1 4.095h2.782a2.407 2.407 0 0 1 2.562-2.512 2.227 2.227 0 0 1 2.502 2.324c-.001.525-.169 1.038-.48 1.462-.19.269-.42.505-.686.7l-.807.632a4.424 4.424 0 0 0-1.417 1.56 6.34 6.34 0 0 0-.296 1.727h2.588c.017-.199.054-.395.109-.586.17-.508.493-.95.924-1.267l.785-.61a8.129 8.129 0 0 0 1.575-1.49 3.825 3.825 0 0 0 .679-2.306 3.87 3.87 0 0 0-1.571-3.38z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 20" id="s_icon-s_question_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10A10 10 0 0 0 10 0zm-.182 16.12a1.306 1.306 0 1 1 0-2.612 1.306 1.306 0 0 1 0 2.612zm3.52-6.838c-.338.42-.732.793-1.17 1.108l-.584.454c-.32.235-.56.564-.687.942-.041.142-.068.288-.081.435H8.89c.014-.436.088-.867.22-1.283a3.29 3.29 0 0 1 1.054-1.16l.6-.47c.197-.145.37-.321.51-.521a1.84 1.84 0 0 0 .357-1.087 1.656 1.656 0 0 0-1.86-1.728A1.79 1.79 0 0 0 7.867 7.84H5.8a3.647 3.647 0 0 1 1.56-3.044 4.193 4.193 0 0 1 2.31-.603 5.027 5.027 0 0 1 3.006.861 2.878 2.878 0 0 1 1.168 2.514c.02.61-.156 1.212-.504 1.714z">
                </path>
            </symbol>
            <symbol viewbox="0 0 32 28" id="s_icon-s_repeat" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.63 6.77l-2.38 3.839a13.591 13.591 0 1 0-1.449 9.828l.436-.758-1.517-.872-.436.757a11.866 11.866 0 1 1 1.308-8.325l-4.121-2.555-.922 1.487 5.78 3.585a.878.878 0 0 0 1.205-.283l3.584-5.78-1.488-.923z">
                </path>
            </symbol>
            <symbol viewbox="0 0 31 27" id="s_icon-s_repeat_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.751 7.286l-2.685 4.332a13.22 13.22 0 1 0-1.59 8.632l.25-.434-.868-.498-.25.434a12.23 12.23 0 1 1 1.487-7.895l.022.149L21.592 9.2l-.527.85 5.462 3.387a.499.499 0 0 0 .688-.162l3.387-5.462-.85-.527z">
                </path>
            </symbol>
            <symbol viewbox="0 0 32 29" id="s_icon-s_repeat_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.59 7.598l-2.11 3.405a13.96 13.96 0 1 0-1.354 10.62l.623-1.083-2.167-1.246-.623 1.084a11.484 11.484 0 1 1 1.15-8.586l-3.679-2.28-1.053 1.7 5.887 3.649a1.001 1.001 0 0 0 1.377-.322l3.649-5.887-1.7-1.054z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_ria_logo" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.663 3.169c.049-.8.316-1.601.753-2.329.121-.194.242-.364.364-.558 1.092.243 2.136.607 3.131 1.116-.34.46-.607.995-.704 1.625-.097.63-.024 1.31.219 1.916a4.55 4.55 0 0 0 1.117 1.553c.46.436.97.752 1.529 1.043a9.618 9.618 0 0 0 3.447.946c.243.024.486.024.728.024.049.146.122.315.17.485-.46.049-.898.097-1.36.097-1.698.049-3.422-.17-5-.727-1.578-.583-3.034-1.529-3.811-2.911a3.783 3.783 0 0 1-.583-2.28zm8.715 11.57c-2.767-.146-5.535-.728-8.06-1.916-1.262-.582-2.476-1.334-3.544-2.28-1.068-.946-1.99-2.086-2.549-3.42a7.752 7.752 0 0 1-.558-4.245A8.561 8.561 0 0 1 9.395.525a12.566 12.566 0 0 0-4.224 2.11l-.073.607a8.262 8.262 0 0 0 .971 4.56c.729 1.382 1.845 2.595 3.108 3.565a17.5 17.5 0 0 0 4.224 2.329c3.034 1.188 6.336 1.674 9.613 1.65.947 0 1.894-.073 2.84-.17.025-.146.049-.292.073-.461-.85.072-1.7.072-2.549.024zM12.891 9.184c.97.752 2.063 1.334 3.204 1.795 2.307.898 4.831 1.286 7.332 1.237.874 0 1.723-.072 2.573-.17 0-.072 0-.145-.024-.194 0-.072-.025-.145-.025-.218-.655.024-1.31.024-1.966 0-1.966-.121-3.933-.558-5.753-1.407-.899-.436-1.773-.97-2.525-1.625-.753-.68-1.432-1.504-1.87-2.45a5.366 5.366 0 0 1-.436-3.08c.145-1.019.582-1.965 1.165-2.765.048-.073.097-.122.146-.17-.923-.146-1.87-.17-2.84-.097-.39.024-.753.097-1.117.145-.462.898-.777 1.868-.85 2.838a6.042 6.042 0 0 0 .68 3.445c.51 1.067 1.335 1.989 2.306 2.716zm10.074 8.708c-3.544-.145-7.088-.873-10.341-2.328-1.627-.728-3.18-1.65-4.564-2.838-1.384-1.165-2.573-2.572-3.35-4.245a9.848 9.848 0 0 1-.923-4.633C1.165 6.468-.29 10.178.05 14.157.68 21.312 7.016 26.6 14.178 25.945c5.025-.436 9.127-3.687 10.9-8.053a30.73 30.73 0 0 1-2.113 0zm-3.18-16.009s0 .024 0 0c-.218.413-.34.85-.34 1.262 0 .412.122.8.34 1.115.437.68 1.214 1.14 2.064 1.407.68.218 1.408.291 2.136.291a13.73 13.73 0 0 0-4.2-4.075z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 17" id="s_icon-s_right_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.57 6.967L11.894.9l-1.681 1.851 5.136 4.665H.536v2.5h14.812l-5.136 4.665 1.681 1.85 6.678-6.066a2.063 2.063 0 0 0 0-3.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 21" id="s_icon-s_right_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.847 20.645L.772 19.264l10.926-8.498a.126.126 0 0 0 0-.199L.772 2.07 1.847.69l10.925 8.497a1.874 1.874 0 0 1 0 2.96L1.847 20.645z">
                </path>
            </symbol>
            <symbol viewbox="0 0 13 20" id="s_icon-s_right_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M.912 19.118l-.614-.79 10.63-8.266a.5.5 0 0 0 0-.79L.298 1.004l.614-.79 10.63 8.269a1.5 1.5 0 0 1 0 2.368L.912 19.118z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 22" id="s_icon-s_right_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.78 21.17L.247 19.198l10.968-8.53L.246 2.137 1.781.163l11.222 8.728a2.25 2.25 0 0 1 0 3.551L1.78 21.171z">
                </path>
            </symbol>
            <symbol viewbox="0 0 11 25" id="s_icon-s_right_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.167 24.644L.778 23.578l8.316-10.835a.127.127 0 0 0 0-.153L.778 1.756 2.167.69l8.315 10.834a1.88 1.88 0 0 1 0 2.284L2.167 24.644z">
                </path>
            </symbol>
            <symbol viewbox="0 0 10 24" id="s_icon-s_right_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.098 23.118l-.794-.61 8.088-10.537a.502.502 0 0 0 0-.61L.303.825l.794-.609 8.087 10.538a1.502 1.502 0 0 1 0 1.827L1.098 23.118z">
                </path>
            </symbol>
            <symbol viewbox="0 0 12 26" id="s_icon-s_right_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.236 25.17L.253 23.647l8.427-10.98L.253 1.687 2.236.164l8.544 11.133c.618.808.618 1.93 0 2.74L2.236 25.17z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 15" id="s_icon-s_riht_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.784 6.285L10.691.555 9.493 1.83l5.275 4.962H.217v1.75h14.57l-5.294 4.962 1.199 1.275 6.092-5.731a1.687 1.687 0 0 0 0-2.763z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 15" id="s_icon-s_riht_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.827 6.51L10.831.744l-.694.72L16.01 7.1H.478v1h15.52l-5.86 5.636.693.721 5.922-5.708c.391-.252.628-.684.63-1.149.007-.433-.201-.841-.556-1.09z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 17" id="s_icon-s_riht_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.57 7L11.89.9l-1.68 1.85 5.14 4.67H.54v2.5h14.81l-5.14 4.66 1.68 1.85 6.68-6.06a2.09 2.09 0 0 0 .89-1.7A2.06 2.06 0 0 0 18.57 7z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_sad" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zm6.338-6.065c.347.207.788-.117.628-.488C18.58 16.213 15.756 14 12.5 14c-3.257 0-6.08 2.213-7.466 5.447-.16.371.28.695.628.489 1.877-1.119 4.254-1.787 6.838-1.787 2.585 0 4.96.668 6.838 1.786z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_icon-s_search" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.297 18.76l-5-5a8.736 8.736 0 1 0-2.454 2.455l5 5a1.455 1.455 0 0 0 2.052 0l.402-.404a1.455 1.455 0 0 0 0-2.052zm-7.487-5.033a6.78 6.78 0 1 1-9.588-9.589 6.78 6.78 0 0 1 9.588 9.589z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_search_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.016 16.43a6.508 6.508 0 1 1 0 0zm-3.89-2.608a5.5 5.5 0 1 0 0-7.779 5.508 5.508 0 0 0 0 7.779z">
                </path>
                <path d="M20.869 23.138a1.944 1.944 0 0 1-1.38-.57l-4.717-4.717A9.237 9.237 0 1 1 16.547 3.4a9.26 9.26 0 0 1 1.387 11.288l4.717 4.717c.76.762.76 1.997 0 2.76l-.403.402a1.946 1.946 0 0 1-1.38.57zm-6.026-6.424a.5.5 0 0 1 .354.147l5 5a.977.977 0 0 0 1.344 0l.403-.403a.955.955 0 0 0 0-1.345l-5-5a.5.5 0 0 1-.063-.63A8.254 8.254 0 0 0 15.84 4.108a8.236 8.236 0 1 0-1.274 12.69.5.5 0 0 1 .277-.084z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_icon-s_search_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.297 18.76l-5-5a8.736 8.736 0 1 0-2.454 2.455l5 5a1.455 1.455 0 0 0 2.052 0l.402-.404a1.455 1.455 0 0 0 0-2.052zm-7.93-5.476A6.155 6.155 0 1 1 4.665 4.58a6.155 6.155 0 0 1 8.704 8.704z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.737 12.09L14.08 8.414a1.427 1.427 0 0 0-2.16 0L8.263 12.09l1.24 1.234 2.622-2.635v7.702h1.75v-7.702l2.622 2.635 1.24-1.234z">
                </path>
                <path d="M13 .625C6.165.625.625 6.165.625 13S6.165 25.375 13 25.375 25.375 19.835 25.375 13C25.367 6.169 19.831.633 13 .625zm0 23C7.132 23.625 2.375 18.868 2.375 13S7.132 2.375 13 2.375 23.625 7.132 23.625 13c-.007 5.865-4.76 10.618-10.625 10.625z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 6.782a.989.989 0 0 0-.816.394l-3.78 3.81.71.704L11.5 8.277v9.255h1V8.285l3.386 3.405.71-.704-3.72-3.737A1.054 1.054 0 0 0 12 6.782z">
                </path>
                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.992 5.376 18.624.008 12 0zm0 23C5.925 23 1 18.075 1 12S5.925 1 12 1s11 4.925 11 11c-.007 6.072-4.928 10.993-11 11z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_icon-s_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 .5C5.649.5.5 5.649.5 12S5.649 23.5 12 23.5 23.5 18.351 23.5 12C23.493 5.652 18.348.507 12 .5zm3.481 11.75L13 9.522v8.337h-2V9.522L8.519 12.25l-1.48-1.342 3.752-4.127a1.533 1.533 0 0 1 2.418 0l3.753 4.127-1.48 1.342z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 26" id="s_icon-s_share" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.13 2.876v15.039h1.75V2.92l3.01 3.054 1.246-1.229L11.13.68a1.43 1.43 0 0 0-1.127-.555 1.347 1.347 0 0 0-1.131.543l-4.007 3.98 1.233 1.24L9.13 2.877z">
                </path>
                <path d="M17.937 8.115h-3.538v1.75h3.538a.233.233 0 0 1 .239.227v13.806a.233.233 0 0 1-.239.227H2.063a.233.233 0 0 1-.239-.227V10.092a.233.233 0 0 1 .239-.227h3.521v-1.75H2.063a1.985 1.985 0 0 0-1.989 1.977v13.806a1.985 1.985 0 0 0 1.989 1.977h15.874a1.985 1.985 0 0 0 1.989-1.977V10.092a1.985 1.985 0 0 0-1.989-1.977z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 26" id="s_icon-s_share_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.505 1.643v15.564h1V1.682l3.389 3.428.712-.701-3.73-3.771A1.056 1.056 0 0 0 10 .166a.952.952 0 0 0-.82.39l-3.786 3.76.705.71 3.406-3.383z">
                </path>
                <path d="M17.937 8.157h-3.163v1h3.163a.609.609 0 0 1 .614.601v13.807a.608.608 0 0 1-.614.601H2.063a.608.608 0 0 1-.614-.6V9.757a.609.609 0 0 1 .614-.601h3.146v-1H2.063A1.61 1.61 0 0 0 .449 9.758v13.807a1.61 1.61 0 0 0 1.614 1.601h15.874a1.61 1.61 0 0 0 1.614-1.6V9.757a1.61 1.61 0 0 0-1.614-1.601z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 27" id="s_icon-s_share_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.755 4.172V18.62h2.5V4.23l2.296 2.33 1.781-1.755L12.37.783a1.76 1.76 0 0 0-1.368-.658h-.007c-.528 0-1.029.236-1.363.646L5.667 4.708 7.43 6.481l2.326-2.31z">
                </path>
                <path d="M18.937 8.115h-2.913v2.5h2.777v13.51H3.199v-13.51h2.76v-2.5H3.063a2.36 2.36 0 0 0-2.364 2.352v13.806a2.36 2.36 0 0 0 2.364 2.352h15.874a2.36 2.36 0 0 0 2.364-2.352V10.467a2.36 2.36 0 0 0-2.364-2.352z">
                </path>
            </symbol>
            <symbol viewbox="0 0 15 24" id="s_icon-s_sound" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 23.122a.956.956 0 0 1-.61-.219l-7.589-6.228H2.603A2.567 2.567 0 0 1 .039 14.11V9.223a2.567 2.567 0 0 1 2.564-2.564h3.198l7.59-6.228a.96.96 0 0 1 1.57.742V22.16c-.001.53-.43.96-.961.961zM2.603 8.582a.643.643 0 0 0-.642.64v4.89c0 .354.288.64.642.641h3.542c.222 0 .438.077.61.219l6.284 5.158V3.204L6.754 8.362a.958.958 0 0 1-.609.219H2.603z">
                </path>
            </symbol>
            <symbol viewbox="0 0 15 22" id="s_icon-s_sound_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.937 21.05a1.04 1.04 0 0 1-.662-.238l-6.806-5.586H2.038a1.06 1.06 0 0 1-1.049-1.061V7.169c0-.579.47-1.048 1.049-1.049h4.4L13.274.523a1.05 1.05 0 0 1 1.715.811V20a1.054 1.054 0 0 1-1.052 1.05zm-.029-1.012a.042.042 0 0 0 .053.007V1.334L7.103 6.882a1.054 1.054 0 0 1-.665.238H1.989v7.094h4.449c.242 0 .476.084.664.237l6.807 5.587z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_sound_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 .875C6.304.875.875 6.304.875 13S6.304 25.125 13 25.125 25.125 19.696 25.125 13C25.117 6.307 19.693.883 13 .875zM15.604 19.6l-4.705-3.86H8.502a1.085 1.085 0 0 1-1.085-1.086v-3.308c0-.6.486-1.085 1.085-1.085H10.9L15.604 6.4a.374.374 0 0 1 .611.289V19.31a.374.374 0 0 1-.611.29z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_sound_invert_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 .875C6.304.875.875 6.304.875 13S6.304 25.125 13 25.125 25.125 19.696 25.125 13C25.117 6.307 19.693.883 13 .875zm2.154 17.618l-3.831-3.144a.31.31 0 0 0-.196-.07H8.65a.31.31 0 0 1-.31-.31v-3.938c0-.171.139-.31.31-.31h2.477a.31.31 0 0 0 .196-.07l3.831-3.144a.31.31 0 0 1 .505.239v10.508a.31.31 0 0 1-.505.24z">
                </path>
            </symbol>
            <symbol viewbox="0 0 15 22" id="s_icon-s_sound_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.522 21.508l-7.493-6.15H2.85a2.362 2.362 0 0 1-2.362-2.362V9.004A2.362 2.362 0 0 1 2.85 6.64h3.18L13.521.492a.591.591 0 0 1 .966.457v20.102a.591.591 0 0 1-.966.457z">
                </path>
            </symbol>
            <symbol viewbox="0 0 32 30" id="s_icon-s_sputnik_logo" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.174.75L7.199 29.25.826 11.778 31.174.75z"></path>
            </symbol>
            <symbol viewbox="0 0 20 20" id="s_icon-s_stop" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5 19.375h-15A1.877 1.877 0 0 1 .625 17.5v-15A1.877 1.877 0 0 1 2.5.625h15A1.877 1.877 0 0 1 19.375 2.5v15a1.877 1.877 0 0 1-1.875 1.875zm-15-17a.125.125 0 0 0-.125.125v15a.125.125 0 0 0 .125.125h15a.125.125 0 0 0 .125-.125v-15a.125.125 0 0 0-.125-.125h-15z">
                </path>
            </symbol>
            <symbol viewbox="0 0 19 18" id="s_icon-s_stop_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.409 18h-17a.5.5 0 0 1-.5-.5V.5a.5.5 0 0 1 .5-.5h17a.5.5 0 0 1 .5.5v17a.5.5 0 0 1-.5.5zm-16.5-1h16V1h-16v16z">
                </path>
            </symbol>
            <symbol viewbox="0 0 18 18" id="s_icon-s_stop_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.083.5H1.917A1.417 1.417 0 0 0 .5 1.917v14.166A1.417 1.417 0 0 0 1.917 17.5h14.166a1.417 1.417 0 0 0 1.417-1.417V1.917A1.417 1.417 0 0 0 16.083.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 24" id="s_icon-s_subscription" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.66 4.875l-4.255.007.014-4.248-1.75-.006-.014 4.257-4.25.007.006 1.75 4.242-.007.003 4.246 1.75-.002-.003-4.247 4.257-.007z">
                </path>
                <path d="M23.655 21.583H2.153V9.664l9.734 6.746c.298.205.652.315 1.013.315.369 0 .729-.113 1.032-.323l6.533-4.669-1.017-1.423-6.565 4.662L2.197 7.565l-.044.065V6.624H17.75v-1.75H2.064A1.663 1.663 0 0 0 .403 6.535v15.137c0 .917.744 1.66 1.661 1.661h21.68a1.663 1.663 0 0 0 1.66-1.661v-9.135h-1.75v9.046z">
                </path>
            </symbol>
            <symbol viewbox="0 0 31 25" id="s_icon-s_subscription_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.125 4.937L26.138.69l-2.37-.007-.013 4.258-4.252.006.007 2.37 4.242-.006.003 4.244 2.37-.001-.003-4.247 4.256-.007V4.931z">
                </path>
                <path d="M23.688 21.574H2.936V9.879l9.286 6.443c.32.221.698.34 1.087.339.394 0 .78-.121 1.104-.347l6.635-4.74-1.162-1.627-6.575 4.696L2.936 7.445v-.08h14.412v-2.5H2.472A2.038 2.038 0 0 0 .436 6.9v15.137a2.038 2.038 0 0 0 2.036 2.036h21.68a2.038 2.038 0 0 0 2.036-2.036v-8.325h-2.5v7.86z">
                </path>
            </symbol>
            <symbol viewbox="0 0 16 18" id="s_icon-s_up_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.112 6.976L9.38.883a1.745 1.745 0 0 0-2.762 0L.89 6.976l1.274 1.199 4.962-5.276V17.45h1.75V2.88l4.962 5.295 1.275-1.2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 14 18" id="s_icon-s_up_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.148.984A1.369 1.369 0 0 0 7 .354c-.433-.007-.841.2-1.09.556L.144 6.907l.72.693L6.5 1.727V17.26h1V1.74l5.636 5.86.72-.693L8.149.984z">
                </path>
            </symbol>
            <symbol viewbox="0 0 16 20" id="s_icon-s_up_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.766 8.107L9.699 1.43a2.062 2.062 0 0 0-3.398 0L.234 8.107l1.851 1.681L6.75 4.652v14.812h2.5V4.652l4.665 5.136 1.85-1.68z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 13" id="s_icon-s_up_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.597 12.895L10.099 1.969a.125.125 0 0 0-.198 0L1.403 12.895.022 11.82 8.52.895a1.933 1.933 0 0 1 2.96 0l8.498 10.925-1.381 1.075z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 13" id="s_icon-s_up_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.662 12.368l-8.267-10.63a.516.516 0 0 0-.79 0l-8.267 10.63-.79-.614 8.268-10.63a1.547 1.547 0 0 1 2.368 0l8.268 10.63-.79.614z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 15" id="s_icon-s_up_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.53 14.42L11 3.453 2.47 14.421.495 12.887 9.224 1.664a2.32 2.32 0 0 1 3.552 0l8.728 11.223-1.973 1.534z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 11" id="s_icon-s_up_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.912 10.888L12.076 2.573a.124.124 0 0 0-.153 0L1.088 10.888.023 9.5l10.835-8.315a1.878 1.878 0 0 1 2.283 0L23.977 9.5l-1.065 1.388z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 10" id="s_icon-s_up_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.842 9.363L12.305 1.275a.503.503 0 0 0-.61 0L1.158 9.363l-.61-.794L11.088.482a1.503 1.503 0 0 1 1.826 0l10.538 8.087-.609.794z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 12" id="s_icon-s_up_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.98 11.414L13 2.987 2.02 11.414.498 9.431 11.63.888a2.255 2.255 0 0 1 2.74-.001L25.501 9.43l-1.522 1.983z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 24" id="s_icon-s_user" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.325 16.987c-.449-.074-2.52-.17-2.52-1.223v-1.43c1.157-.975 1.308-2.513 1.628-3.144.642-.096.577-.525.857-1.586.282-1.067.3-2.162-.323-2.256.124-.508.184-1.03.181-1.553 0-2.255-1.56-5.26-6.723-5.114.012.311.069.619.168.913a5.359 5.359 0 0 0-3.097 2.1c-.895 1.195-.45 3.304-.367 3.661-.605.121-.574 1.198-.297 2.25.28 1.06.215 1.489.858 1.585.307.608.46 2.057 1.506 3.034v1.54c0 1.054-2.072 1.15-2.52 1.223A4.84 4.84 0 0 0 .52 22.086s2.777 1.238 9.312 1.238c6.534 0 9.648-1.238 9.648-1.238a4.84 4.84 0 0 0-4.155-5.099z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 24" id="s_icon-s_user_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.832 23.823c-6.565 0-9.398-1.229-9.515-1.281a.5.5 0 0 1-.296-.422c-.002-.049-.272-4.825 4.573-5.626.06-.01.149-.021.256-.034 1.525-.18 1.846-.478 1.846-.696V14.43a5.771 5.771 0 0 1-1.233-2.396c-.048-.155-.091-.298-.136-.42-.594-.207-.71-.73-.844-1.323-.037-.163-.078-.349-.134-.56a3.402 3.402 0 0 1 .026-2.407c.053-.085.117-.161.19-.228a5.04 5.04 0 0 1 .53-3.703A5.766 5.766 0 0 1 7.99 1.255a3.892 3.892 0 0 1-.063-.552.5.5 0 0 1 .485-.522 7.528 7.528 0 0 1 5.645 1.783 5.359 5.359 0 0 1 1.592 3.83c.003.431-.035.86-.113 1.284.074.064.138.138.192.22.312.778.328 1.643.047 2.433-.056.212-.098.398-.134.56-.134.594-.25 1.117-.845 1.323-.044.123-.087.265-.135.42a5.552 5.552 0 0 1-1.356 2.522v1.208c0 .218.32.516 1.846.696.107.012.195.023.256.033 4.844.802 4.575 5.578 4.572 5.626a.5.5 0 0 1-.314.431c-.13.052-3.277 1.273-9.832 1.273zm-8.816-2.086a28.197 28.197 0 0 0 8.816 1.086c3.087.086 6.17-.283 9.15-1.096a4.245 4.245 0 0 0-3.738-4.247l-.211-.027c-.817-.096-2.729-.321-2.729-1.69v-1.43c0-.148.065-.288.178-.382a4.414 4.414 0 0 0 1.223-2.213c.073-.265.167-.524.281-.775a.5.5 0 0 1 .373-.269c.165-.024.171-.025.305-.622.04-.173.084-.37.143-.596.276-1.047.152-1.568.075-1.64a.485.485 0 0 1-.4-.61c.113-.466.169-.945.166-1.425a4.357 4.357 0 0 0-1.289-3.12 6.204 6.204 0 0 0-4.365-1.503c.02.085.043.17.072.253a.5.5 0 0 1-.34.645 4.846 4.846 0 0 0-2.83 1.918c-.77 1.027-.333 3.023-.28 3.247a.5.5 0 0 1-.39.604c-.067.065-.187.582.09 1.631.059.226.103.424.143.597.133.596.14.597.304.621a.5.5 0 0 1 .373.269c.114.25.208.51.282.775.18.793.566 1.524 1.12 2.12a.5.5 0 0 1 .158.365v1.54c0 1.369-1.912 1.594-2.729 1.69l-.21.027a4.23 4.23 0 0 0-3.74 4.257z">
                </path>
            </symbol>
            <symbol viewbox="0 0 20 24" id="s_icon-s_user_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.325 16.987c-.449-.074-2.52-.17-2.52-1.223v-1.43c1.157-.975 1.308-2.513 1.628-3.144.642-.096.577-.525.857-1.586.282-1.067.3-2.162-.323-2.256.124-.508.184-1.03.181-1.553 0-2.255-1.56-5.26-6.723-5.114.012.311.069.619.168.913a5.359 5.359 0 0 0-3.097 2.1c-.895 1.195-.45 3.304-.367 3.661-.605.121-.574 1.198-.297 2.25.28 1.06.215 1.489.858 1.585.307.608.46 2.057 1.506 3.034v1.54c0 1.054-2.072 1.15-2.52 1.223A4.84 4.84 0 0 0 .52 22.086s2.777 1.238 9.312 1.238c6.534 0 9.648-1.238 9.648-1.238a4.84 4.84 0 0 0-4.155-5.099z">
                </path>
            </symbol>
            <symbol viewbox="0 0 30 20" id="s_icon-s_views" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 19.469c-6.74 0-11.946-5.604-14.45-8.945a.875.875 0 0 1 0-1.048C3.054 6.135 8.26.53 15 .53c6.74 0 11.946 5.604 14.45 8.945a.875.875 0 0 1 0 1.048C26.946 13.865 21.74 19.47 15 19.47zM2.352 10C4.785 13.105 9.35 17.719 15 17.719c5.65 0 10.215-4.614 12.648-7.719C25.215 6.895 20.65 2.281 15 2.281 9.35 2.281 4.785 6.895 2.352 10z">
                </path>
                <path d="M15 15.396A5.396 5.396 0 1 1 20.396 10 5.403 5.403 0 0 1 15 15.396zm0-9.293a3.896 3.896 0 1 0 0 7.793 3.896 3.896 0 0 0 0-7.792z">
                </path>
            </symbol>
            <symbol viewbox="0 0 28 18" id="s_icon-s_views_big" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M14 17.094C8.946 17.094 4.89 14.69.85 9.3L.625 9l.225-.3C4.89 3.31 8.946.906 14 .906S23.11 3.31 27.15 8.7l.225.3-.225.3c-4.04 5.39-8.096 7.794-13.15 7.794zM1.877 9C5.634 13.902 9.385 16.094 14 16.094c4.615 0 8.366-2.192 12.123-7.094C22.366 4.098 18.615 1.906 14 1.906 9.385 1.906 5.634 4.098 1.877 9z">
                    </path>
                    <path d="M14 14.146a5.146 5.146 0 1 1 0-10.292 5.146 5.146 0 0 1 0 10.292zm0-9.293a4.146 4.146 0 1 0 0 8.293 4.146 4.146 0 0 0 0-8.292z">
                    </path>
                </g>
            </symbol>
            <symbol viewbox="0 0 30 20" id="s_icon-s_views_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 19.844c-5.01 0-10.162-3.116-14.507-8.774A1.757 1.757 0 0 1 .494 8.93C4.838 3.272 9.99.156 15 .156S25.162 3.272 29.507 8.93c.485.631.484 1.51-.001 2.141-4.344 5.657-9.496 8.773-14.506 8.773zM2.83 10C5.179 12.938 9.6 17.344 15 17.344c5.402 0 9.823-4.407 12.17-7.344C24.821 7.062 20.4 2.656 15 2.656 9.598 2.656 5.177 7.062 2.83 10zm24.694.452l.001.002-.001-.002zm-25.05-.906l.002.002-.001-.002z">
                </path>
                <circle cx="15" cy="10" r="4.5"></circle>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_watch" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 25.375C6.165 25.375.625 19.835.625 13S6.165.625 13 .625 25.375 6.165 25.375 13C25.367 19.831 19.831 25.367 13 25.375zm0-23C7.132 2.375 2.375 7.132 2.375 13S7.132 23.625 13 23.625 23.625 18.868 23.625 13C23.618 7.135 18.865 2.382 13 2.375z">
                </path>
                <path d="M13.598 14.612a2.035 2.035 0 0 1-1.872-1.233l-3.311-7.7 1.607-.69 3.311 7.699c.045.106.15.174.265.174h.002l5.674-.036.011 1.75-5.674.036h-.013z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 26" id="s_icon-s_wow" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 26c7.18 0 13-5.82 13-13S20.18 0 13 0 0 5.82 0 13s5.82 13 13 13zM8.5 8a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM13 22.533c2.872 0 5.2-2.91 5.2-6.5s-2.328-6.5-5.2-6.5c-2.872 0-5.2 2.91-5.2 6.5s2.328 6.5 5.2 6.5zM19 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                </path>
            </symbol>
        </svg></div>
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 167 27" id="logo-mia" xmlns="http://www.w3.org/2000/svg">
                <path fill="#363636" d="M67.736 14.117V14.912v-.869l.074.58-.074-.508zm13.28 12.16c7.345 0 13.354-5.863 13.354-13.03C94.37 6.082 88.36.219 81.016.219c-7.345 0-13.354 5.863-13.354 13.03 0 7.166 6.01 13.03 13.354 13.03zm-1.41-25.046l.075-.072h-.149l.075.072zM72.781 22.08h-.074.074zm16.767 1.014l-.223.144.075-.072-.149.072.074-.072.075-.072h.148zm-.668.506l.075-.072.074-.073-.149.073v.072zm-.667.507l.148-.145-.148.145-.149.072-.148.145-.149.072.297-.217.149-.072zm1.038-.724l-.148.145.074-.073-.148.073-.075.072-.074.073-.074.072.074-.072.075-.073.074-.072.222-.145zm-18.325-7.6l-.148-.145V15.419l-.074-.072v-.072h-.075v-.073l-.148-.072.074.217-.074.072v.145l.223.145.222.072zm.297-3.765l.074-.072v-.29l-.148-.144h-.075l.075.217.074.29zm7.79-3.04l.074-.145h-.074l-.074.073.074-.073-.074-.072h-.149l.075.072-.075.073v.072h.075l.074-.072h.074v.072zm-.816 2.027l.445-.145.297-.072.37-.073.075-.072v-.145h-.148l-.149.072-.297-.072-.37.072-.297.073-.075.145-.37.144.074.073-.297.145-.074.144h-.149l-.074.145.074.145-.074.145.297.217h.074v-.362l.148-.217.297-.217.223-.145zm3.042-1.014l.148.145.223.072.148-.072-.074-.29-.223-.289-.148-.145-.074.073-.149.217.075.072.074.217zm.816.145l-.223-.145h-.074l-.074.073v.434l.37-.217v-.145zm2.967-.145v-.144l.223-.218-.148-.217-.297.073-.149.144v.145l.149.217h.222zm.371-.579l.075-.072-.075-.145-.148.145-.148.072.074.073.222-.073zm0 .796l.149-.144.074-.145-.074-.072h-.149l-.074.072.074.29zm1.632-2.967l.149.144h.074v-.289l-.074-.145H87.1l-.075.145v.145zm4.007 8.252h-.223l-.148-.362.222-.145-.37-.217-.223-.145-.149-.217-.222-.145-.148-.072v.072l.148.073v.217l.222.29.223.144.223.29.074.144.148.218.149.217.148.145v-.218h.148l-.222-.29zm.445-2.896l-.074-.362-.149-.217v-.29l-.222-.216v-.362h-.074l-.149-.218v-.144l-.296-.218-.075.145-.074-.072-.148-.29-.149-.145.075-.144-.075-.217h.075l-.149-.435.148-.145-.074-.072-.148-.29-.148-.289V8.47l-.223-.434.074-.217-.074-.073h-.371l-.148.073v-.145l-.149-.145-.148-.072h-.148l-.075-.145.075.072.074-.072-.075-.145v-.145h.075l.074-.144.074-.073v-.072l-.074-.072-.223-.073-.074-.217-.148-.145-.149.145v.29h.149l-.074.072h-.149l-.222.217-.223.217-.074.073-.148.217v.217l-.075.29.149.072h.222l.074.145-.296.072v.434l-.075.145v.29l-.148.072-.223-.145h-.148l-.148.145-.074.362-.297.072-.223-.072-.668.507v.217l.297.145-.148.072v.145l-.223.072-.074.145h-.222l.148.362h-.223l-.296-.145v-.145l-.149-.144-.222-.073-.149.073-.222.072.148.217-.37.145-.075-.145-.297.073-.148.072v.362l-.149-.217-.074.072h-.296v-.145l.148-.29.074-.144-.074-.145-.148-.072-.223-.072-.223.072-.074.072-.074-.145h-.148l.074-.072-.149-.072-.148.144-.074.145v.145h-.149l-.148.217-.074-.072-.223.072v.073l-.222.072-.149.145h-.074l-.148.217.074.145h-.223l-.222-.073-.149.073-.074.362.074.29-.148-.218h-.222l-.223.072v.218l-.074-.073.148-.29v-.216h-.074l-.074.217-.223.144.074.29-.148.29v.217l.148.072-.148.217v.217l-.148.145-.075.145-.148.072-.074.073-.149-.073.371-.362.149-.217-.074-.217.148-.434v-.362l.148-.217.075-.217-.223-.145-.074.072-.149.29-.296.217-.075.072-.074.29-.074.144.148.073v.072l.075.217-.149.145-.296-.507-.075-.144-.297-.217-.074.072v.217l-.222.145v-.217h-.223l-.222-.145-.149.072-.074-.072.223-.145-.075-.072H76.045l-.148.145-.223-.145v-.145l.149-.145.148.073.074-.217-.148-.29-.074.217-.149.072-.074.218-.222.144v-.144l-.075-.073h-.445l-.074.217h-.148l-.075-.361h-.148l-.074.144-.148.073v-.362l.222-.217.074-.073.075-.29.074.073.148.58.223.072h.222l.149-.145.074-.145v-.58l-.149-.289.075-.29h-.149l-.222-.072-.075-.072-.222.145-.074.29-.223.072-.222.362-.223.072-.148.217-.223.072-.074.29-.074-.072h-.668l-.074.217-.223-.072v.072h-.148l-.149.217h-.074v.145l-.074.072-.074.145v.289l.074.073v.145l-.074.072h-.074l-.075.217v.29h-.074l-.074-.145-.074.072-.074.145v.072h.074v.073l.074.145-.074.217h-.074l-.075.072.075.145v.145l.074.29.148.072v.217l.075.072.148.29-.074.072-.149.073-.074.144-.074.073-.148-.145h-.075l-.074.072.148.145V16l-.222-.218v.145H71l-.074-.072v.217l.074.29.075.361.074.145.148.29.148.29v.072l.075.072h.074l.148.217v.145l.075.145.074.072.074.217.074.073H72.262v-.435l.074-.072-.074-.362h.074l.222-.072.149.072.148-.072-.074-.073-.074-.072v-.217l-.149-.073-.074-.29.223-.144v-.072l.297-.145.074.29.148-.145h.445l.223.217.222.434.149.217h.222l.297.145.148.29.075-.073.222.145.074-.072-.222-.362.222-.073v-.072h.223l-.074-.217.148-.073.668.218h.074l.52.072.222-.072.297.144v.29h.222l.223.145-.074.144.222.073.52-.145-.075.072.223.29.37.796.15-.145.296.218.297-.073.148.073.074.144.149.073.074.145h.297l.074.144h.074l.223-.072.445-.217.297-.145.222.072h.223l.148.145h.223l.296.073.223-.218-.074-.144.148-.362.223.072h.445l.074.217.297.073.222-.073.223-.145h.223l.222.073.149.072.148-.072.297-.073.148-.144.223-.145.222-.29h.149l.148.073.223-.145h.222l.223-.29-.075-.144.075-.362.074-.145-.074-.145h-.149l.075-.217.148-.145.222-.145.297-.072h.149l.222.145.149.072.148.073.148.217.297-.145h.297l.148.145.223-.217.074-.218.223-.29.074.29v.145l.074.29v.29l-.223.144-.074.217.149.145.074.29-.074.072.074.072h.074v-.072l.148-.362h.149l.074-.072.148-.29v-.217l.075-.434.074-.435-.075-.217v-.507l-.148-.362-.148-.29-.075-.289-.148-.144h-.37l-.15.144v.217l-.148.073-.148-.073-.223.145V14.19l-.074-.869.223-.507.297-.361v-.29l.148-.145.148.145.075-.217.074-.362h-.149l-.222-.58.074-.361.297.072-.149-.507-.148-.217v-.144l.297.29.148.361.148.362.223.434v.29l.074.072.075.218.222.289.445.29.297.144zm-2.003-6.515v.073l.074.145v-.145l-.074-.073zm-.371-1.592v.145l.074.072.148.145h.075v-.145l-.149-.145-.148-.072zM79.755 1.23h-.074v.073h.074V1.23zM81.46 3.91l.149.072V3.765l-.075-.145v-.072H81.313v.072l.074.073h.074V3.91zm.371-.869h-.148l-.074.217v.145l.074.145.074-.073h.074l.149-.072h.074l.074-.217-.074-.072-.223-.073zm-.816-.072l-.148-.073h-.149l-.222.073h-.149l-.148.072-.074.073.074.072.148.072h.297l.148-.072h.223l.074.072v.073l.075.072h.148l.074.072h.148l.075-.144-.075-.073-.148-.072-.074-.072v-.145h-.297zm.371 0l-.074.072v.073l.074.144.148-.072.075-.145-.149-.072h-.074zm1.261.94l-.074-.144h-.222l-.075.072.075.073h-.149l.074.145.075.072.148-.072.074-.073h.074V3.91zm-.742-.144l-.074-.072-.148-.073v.29l.148.145.149.072.074-.145-.074-.072.148-.073-.223-.072zm-1.929 1.303h.075l.593-.145.074-.072v-.073h.075l.074-.072h.148l.074-.072.149-.145v-.072l.074-.073.074-.145v-.144l-.074-.145h-.074v-.145l-.075-.145-.148-.072H80.793h.075l-.075-.145.149-.072v-.145h-.297l-.222.072H80.2l-.074.217v.145h.148-.074v.073l-.074.072-.074.145.074.072v.073h-.074v.072l-.149.072v.218l-.074.072-.074.29v.144l.074.073.148.072zm-5.119-3.185l-.148.072v-.144s.89-.507 1.187-.652c.742-.29 2.3-.724 3.042-.869.297-.072 2.003-.217 2.67-.144 1.855.144 4.675 1.085 4.675 1.085l.964.435.223.145-.149-.073s-.222-.072-.297-.145h-.148c0 .073.223.218.223.218l.148.072v.145l-.148-.073v.073l.074.072-.074.072.074.145H87.1l.074.073-.074.072.074.145-.074.072.297.217.074.145.074.217.074.073.148.144.149.145.074.217v.145l.148.073.149-.073.074.073.074.217h.148l.149.072-.148.073.296.144V4.49l.149.072v-.144l.37.29v.144h-.074l.149.145.148.072.223.217.148.073.223.217.37.434.149.29-.074.072-1.039-1.086h-.148l.148.073-.074.072s.148 0 .148.072l-.074.073.149.072.074.145h-.297l.148.145-.074.144v.073h.149l.074.072V6.3l-.074.144-.149-.217v-.145h-.148l-.074.073-.149-.073-.148-.072-.148-.072-.223-.145-.148-.072v-.073l-.075-.072h-.074v.072l.074.072v.073l.075.145v.144l-.075.073s-.074.145-.148.145-.223-.218-.223-.218l-.222-.217v-.072h.074l-.074-.072-.074.072-.075.072-.074.073-.074.144-.222-.072-.075-.145-.074-.072H87.1l-.445-.29V5.43l-.223-.072v-.145l-.074-.217h.074v-.073l-.074-.072-.074-.217-.223-.362-.148-.073-.149-.362v-.144l-.074-.073h-.148l-.149-.072-.074-.073-.222-.072-.223-.072v-.073H84.8l-.074.073-.075-.073v-.144h-.296l.148-.145h-.148l-.149-.073-.074-.144-.148-.145-.149-.073.075.218h-.149l.148.072v.145h-.074l.149.072V2.97l.37.072v.145l.149.217-.297.145-.148.072v.217l-.297-.144-.074-.073-.223-.072-.074-.073-.074-.217h-.148l-.223-.362-.148.073-.075-.073v-.072.145l-.222.072h-.148l-.075-.145.149-.144V2.534l-.075-.144-.222-.145.222-.073.075-.072.222.072.075.073-.075-.073H82.5l-.148-.217h-.297v.073h-.074l.222.144-.297.145-.148-.072-.074.217.222-.072.149.072.074.072.222.218-.074.144-.148-.072.074.072-.148.073-.223-.073h-.148v-.144l.074-.073h-.148l-.075.217-.074.073h-.222l-.223-.073.223-.217.148-.072.074-.073-.148-.072-.148-.217.074-.073h-.149V2.1l-.074.072-.148-.144v-.145l-.075-.072-.074.072-.074.145v.144l.297.073.148.072v.29l-.074.217-.148.072h-.223l.074-.144-.074.072-.297.072-.074-.072-.074.072h-.223l-.222-.072v-.145l-.223-.072v-.073l-.148.073-.148-.073h-.223l-.148-.072-.223-.145.148-.072h-.445l-.222-.073-.223.073-.074-.145.074-.217.445.072.074-.072H77.974l-.148-.072-.074-.145h.148l-.148-.073.519-.072h.519v.072h.297l.445-.072h.223l-.074.145-.223.072-.148.073v.144l-.075.145.075.072h.148l-.074-.072.074-.145.148-.072.075.072V2.1l-.075.072h.223-.222l.074.073h.148v-.073h.297l-.074-.144.074-.073-.074-.072V1.81l.222-.145h.297-.074v-.073l-.371-.072-.223-.072h-.222l.222-.073h.074v-.145l.149-.072h.148l.074.072-.222.073h.074l.297-.145.074.072h.297l-.223.145v.145l.074-.145.149-.072h.148l.074-.073V1.16h.149l.296-.217.075-.145h-.223V.725h-.222l-.446-.073-.445-.072h-.445V.508h-.074l-.148-.073h-.297l.074.073.297.072-.445.145-.149.072.074.073.371.072-.222.072.074.073.148.217-.148.072h-.371l-.074.073-.445-.073-.297.073-.074-.073-.075-.072-.37.072-.075.145-.074.072h-1.186l-.224.073h-.222l-.223.072h-.148l-.074.073v-.073l-.445.217-.149-.072zm8.235.217l.075.072h-.075l.297.073.223.072h.074-.074l-.297-.072h-.148l-.075-.145zm-.37 1.882h.148l.074.073.223-.073.296-.072-.074-.145h-.371l.297-.145-.148-.072-.149-.073.074-.144-.148-.073h-.222l-.371-.072-.075.072v.145l.149.072h.074v.145l.074.073.148-.073v-.145h.075l.074.145.148.145h.149l-.075.072-.37.145zm4.748-1.665h-.223l.223.145.074.072h.074l.074-.072-.074-.072v-.073l-.074-.072-.148-.145.074.217zm-18.696 12.74v-.217h-.149l.074.29.149.362.074-.073-.074-.072-.074-.29zM79.903 4.778l-.074-.072.074-.217v-.145l-.222-.072.37-.29v-.145l-.296-.072.148-.072-.37-.145-.446.072-.148.073-.297-.145-.148.072-.445-.217h-.075l-.074-.217h-.148l-.075.072h-.074l.075-.072-.223-.217h-.148l-.149.217-.074-.072.074-.145-.074-.217h-.148l-.075-.073h-.296l-.297-.072-.742.072-.223.145-.296.072-.223.145.148.145.075.072h.148v.145l.223.145v.072l-.149.29-.074.217.148.145v.072l-.074.073-.148.29v.289l.074.29.148-.146-.074.218h.297l.223-.073-.075.073h.223l.148-.073v.145l.149.072h.074l-.074.145.296-.072v.072h.297l.149-.072v.072l-.075.145.297-.072.742.29.223.289h.148l.148-.145-.074-.217h.223l.148.144.371-.144.223-.218.074-.144.074-.073-.074-.217-.074-.072h.148v-.145h.074l.371-.29zm-6.232 1.376l.223-.145h.148l.149-.217-.075-.145.149-.145-.074-.144.222-.145s.074-.145.074-.217c0-.073-.148-.145-.148-.145l-.223.217.075-.29-.297.29-.074-.145-.297.362-.148.145v.434l.296.29zM68.478 11.8l.222-.217.075-.217h.074l.148-.145-.074-.145h-.074l-.074.145v-.217l-.149.29-.148.144v.362zm23.296 6.008v-.145l-.075-.144v-.362l-.074-.145-.222-.217-.074-.217.296-.145v-.362l.149-.29-.223-.217v.29l-.074.072-.148.073h-.297l.074.217.148.29-.148.144v.217l.148.217.075-.072v.217l.148.145v.29l-.148.579-.149.072v.507l-.148.144-.297.362-.222.218-.149.29v.144l-.148.217.148.072h.074v.145l.149-.072.074-.145.074-.362.148-.072v-.145l.075-.072h.074l.074-.218.148-.072.149-.434.222-.29.149-.29v-.434zm-1.707 1.81l.075.217-.075.145-.148.145-.148.217-.223.217-.074-.145v-.145l-.149-.144.149-.145H89.25l-.074.145-.074-.073h-.148l.074-.217v-.145l-.075.073h-.074l-.222.217-.075.145-.37.362.074-.218-.074-.072.074-.217h-.074l-.149.145-.148.29-.074.216-.223.145-.074.145.074.072.223-.072v.072h.148l.148-.29.223-.072.148-.072.149.145-.297.29-.074.144-.149.217-.074.145h.223l.148.145.148.072h.223v.145l-.074.145.148-.073v.362l-.148.073-.148.217-.149.29-.148.289-.297.29-.297.289-.296.145-.149.145h-.074l-.149.072-.37.217-.223.145-.074.072h.148l-.222.145-.075.073-.222.144-.223.073v-.362l.149-.073.148-.072-.074-.073-.223.073-.148.072-.297.218-.222.144.296.073h.371l.149.072-.075.145-.222.145-.148.072-.149.072-.222.073-.371.145h-.223l-.148.072h-.371l-.371.072.074-.072h-.074v.072l-.149.073h.371l.371-.073.075.145-1.781.362h-.297v-.145h.148l.52-.072.148-.073v-.072h-.074l-.074-.072v-.073h-.074l-.149.073-.296.072h-.371l.148-.145-.297-.145-.074-.072-.148-.29-.075-.072-.074-.072h-.148l-.148.072h-.372v.073h-.519v.072l-.148.072h-.371l-.52.073-.222.072h-.519l.074.145h-.074v.072l.222.073.149.072.222.072-.074.073h-.148l-.223-.073-.148-.072-.075-.145h-.444l-.223-.072-.223-.145-.074-.072-.148-.073-.149-.144-.222-.145-.223-.362V24.613l-.37-.073-.15-.072s-.444-.217-.444-.362h.148l-.297-.217-.222-.145-.075-.145-.148-.145-.445-.144-.52-.145-.296-.145-.445-.29-.223-.217-.297-.29-.074-.216-.148-.073-.223-.072-.222-.217-.149-.29-.148-.217-.074-.217-.075-.29-.296-.217.148.434.148.218v.145l.075.072h.074l.074.072.074.217h-.074l.074.073.445.362h.149l.297.072.074.217.074.145.37.362.15.217.073.073v.072h-.37l-.075-.072.075.072H73.3l-.222-.145h-.075l-.148-.072-.148-.073-.297-.217-.148-.072v.072l-.594-.434.445.434-.074.073-.148.072c-1.262-1.375-1.336-1.23-2.82-3.764-.296-.434-.89-2.027-1.112-2.75-.149-.652-.149-1.16-.223-2.607v-.434c-.074-1.52.445-3.258.445-3.258l.297-1.013.148-.362h.149l-.075.29v.072l.075-.217.148-.362.148-.29.149-.144.074.144.074-.144.223-.29v.362l-.297 1.086.222-.145.149-.29.074-.144.148-.29.223-.145v.29l-.074.217.222-.145v-.072l.075-.073-.075-.072.075-.145v-.072l.074-.145.148.217.074-.144.149-.145v.145l.074-.073h.222l-.296.073.148-.145.148-.29h.075l-.075-.072-.074.072-.148-.072-.148.072-.149-.072v-.29l.149-.29.148.073.222-.145.149.362.074.073-.074.144-.074.073.222-.073.149-.072h.222l.149.072-.075.145v.217l-.222-.072v.29h-.223l-.148-.073v.145l-.594.579-.074.217-.148.073v-.073l-.074.145v-.072l.074.29h.297l.074.216v.29l.074-.073.222-.217h.297v.145l.149.145-.149.072h-.074v.145h-.148l.074.217.222-.217.297-.29.075-.144-.223-.145-.074-.217.148-.29.223-.145.593-.29.223.073.222.217.297.145.965.073.667.144.223.145.074.145h.297l.074.217.148.145-.074.506-.148-.072-.074.145h.074l-.074.29.148.289v.58l-.074.144-.149.145h-.222l-.223-.073-.148-.579-.074-.072-.075.29-.074.072-.222.217v.362l.148-.072.074-.145h.149l.074.362h.148l.075-.217h.445l.074.072v.145l.222-.145.075-.217.148-.073.074-.217.148.29-.074.217-.148-.072-.148.144v.29l.222.072.148-.145h.817l.074.073-.223.145.074.072.149-.072.222.144h.223v.217l.222-.144v-.217l.075-.073.297.217.074.145.296.507.149-.145-.074-.217v-.072l-.149-.073.074-.145.075-.29.074-.072.297-.217.148-.29.074-.072.223.145-.075.217-.148.217v.362l-.148.435.074.217-.148.217-.371.362.148.072.074-.072.149-.072.074-.145.148-.145v-.217l.148-.217-.148-.073v-.217l.148-.29-.074-.289.223-.145.074-.217h.074v.217l-.148.29.074.072v-.217l.223-.072h.222l.149.217-.075-.29.075-.362.148-.072.223.072h.222l-.074-.144.148-.218h.075l.148-.144.223-.073v-.072l.222-.073.074.073.149-.217h.148v-.145l.074-.145.149-.145.148.073-.074.072h.148l.074.145.075-.072.222-.073.223.072.148.073.074.145-.074.144-.148.29v.145h.296l.075-.073.148.218v-.073l.148-.072.297-.073.074.145.371-.145-.148-.217.222-.072.149-.073.222.073.149.145v.144l.297.145h.222l-.148-.362h.222l.075-.145.222-.072v-.145l.148-.072-.296-.145v-.217l.667-.507.223.073.297-.073.074-.362.148-.145h.149l.222.145.149-.072v-.29l.074-.362V8.47l.297-.072-.075-.145h-.222l-.148-.072.148-.217v-.218l.148-.217.074-.072.223-.217.223-.218h.148l.074-.072h-.148v-.29l.148-.144.148.145.075.217.222.072.075.072v.073l-.075.072-.074.145h-.074v.145l.074.145-.074.072-.074-.072.074.144h.148l.149.073.148.145v.144l.148-.072h.371l.075.072-.075.217.223.435v.145l.148.29.149.289.074.072-.149.145.149.434h-.074l.074.217-.074.145.148.145.148.29.075.072.074-.145.297.217v.145l.148.217h.074v.362l.223.217v.29l.148.217.074.362-.148-.072-.297-.145-.445-.29-.222-.29-.075-.216-.074-.073v-.29l-.223-.434-.148-.362-.148-.362-.297-.29v.146l.148.217.149.506-.297-.072-.074.362.222.58h.149l-.074.361-.075.217-.148-.145-.148.145v.29l-.297.362-.223.506.075.869v1.013l.222-.144.148.072.149-.072v-.218l.148-.144h.371l.148.144.075.29.148.29.148.362v.506l.075.217-.075.435-.074.434v.217l-.148.29-.074.072h-.149l-.074.217v.145h.074l-.074.073h-.074V18.822h-.148l-.075.144v.073l-.074.145-.074.144-.074.073v.072H89.696l.223.073.148.072zM70.036 8.688l.148.144v-.434l-.148.29zm-.742 8.686l.148.217.371-.145.075-.145h.074v-.072l-.223-.145v.073l-.223-.217-.074-.145v-.217l.149.217.074.145.222.217-.074-.217-.148-.073-.223-.29-.074-.217-.074-.144h-.074l-.074-.145-.075-.29-.074-.217v-.579h.149v-.217h.074v-.145l.074-.145-.074-.072v.217l-.149-.29-.074.073V14.623l-.148.145-.074-.145-.075.217-.074-.29v-.216l.074-.29.075-.362.074-.217.074-.072.074-.073.074-.507v-.361l.075-.362.074-.073v-.072h-.074l.074-.145v-.217l-.074.072-.075.218-.074.217V13.32h-.148v-.362.145l-.149.072v-.072h-.074v-.072l-.148.072v-.724l.148-.072v.29l.074.289v-.072l.075-.218.074-.723.148-.435.149-.145.074-.29v-.072l-.223-.072-.074-.217.074-.434v-.145l-.148.144-.074-.144v-.145l-.075-.072-.074.217-.074-.145-.148.217v.217l-.075 1.086v.579l-.074.073.075.144.074.073-.075-.073v.073l-.148.072v1.375l.074.507.075.217h.074l.074.073.148.434v.145l.074.362.297.94v.218l.149.217.148.507zm.965 3.257l-.075-.144-.296-.58-.149-.217v-.144l-.074-.218-.297-.94v-.145l-.074-.145h-.074v.145l.074.29.222.723.075.29.074.144.074.073.148.29.075.216.296.362zm1.186-4.777l-.074-.073-.148-.072-.148-.072-.075-.145-.074-.073-.074.145v.073l.148.144h-.074l-.148-.144-.297-.145v-.145l.074-.072-.074-.145.074.072v-.072l-.074-.29.074-.072-.074-.145h-.222l-.075.073-.148-.073-.074.073h-.223l-.074.217.074.217.148.362.223.145.148.144.297.724.149.29.148.145.074.144.148.073v-.29L71 16.722v-.144l-.074-.362-.074-.29v-.217l.074.072h.223v-.144l.296.217zm1.633 3.547l-.075-.145v-.145l-.148-.072-.074.145.148.144.149.073zm.296-1.448l-.148-.145-.074-.145-.223-.072h-.222l-.075.072-.148-.072-.222.072h-.075l.075.362-.075.073V18.532h.075l.074.217v.217l.074.073.074.217-.222-.145-.297-.072v.217l.148.217.074.217.52.362v-.145l.074-.144-.074-.217.074-.073-.074-.072.148-.145V19.039l.074-.073v-.144l-.222-.29v-.29l-.075-.144.075-.145.148.145.074-.145.297.217.074-.145.075-.072zm.52-7.673l-.149-.145h-.222l-.074.145-.297-.072-.297-.073h-.297l-.148.217-.074.217-.371.073-.074-.145-.371.145-.297.072v-.217h-.148L71 10.28l-.148-.072.074-.218.148-.072v-.072H71l-.148.144v.145l-.074.072.074.145-.074.29-.074.072.074.073.296.362v.217l-.074.072v.145h.075l.074.145.148-.145.148-.072h.149l.148.144-.148.218v.072l.148-.072.075-.073.074-.217.148-.145.148.145.149.145v.145l.074.144h.148V11.8l.149-.29-.149-.144-.148-.217.074-.218v-.217l.223-.145.222-.217h.371l.371.073h.074l.075-.073.074-.072zm3.71-2.896c-.075 0-.297.145-.297.145l-.223.217-.074.073h-.149l-.222.217.074.145.297-.073h.074l.222-.072.223.072.074-.144v.144l.149.145h.222l.075-.145v-.217h-.075V7.82l-.222-.145-.075-.145c.149 0 0-.145-.074-.145zm-.223.941l.148-.072-.148-.145-.075.073h-.148l-.074.217.222.072.075-.145zM89.622 23.02l-.074.073-.074.072v-.072l-.371.217-.074.072.074-.072.074-.145h-.074v-.072l-.074-.073-.075.073-.148.072-.148.072-.075.145-.074.145h-.074v.145h.074l-.222.144.074.218.52-.362.741-.58v-.072zM87.1 7.022l-.075.073v.072l.149.145h.074v-.29H87.1zm-1.632 2.244l-.075-.144-.148.144-.148.073.074.072.222-.072.075-.073zm-.742.218l-.149.144v.145l.149.217h.296v-.144l.223-.218-.148-.217-.371.073zm.667.723l.149-.144.074-.145-.074-.072h-.149l-.074.072.074.29zm5.639 5.285h-.223l-.148-.362.222-.145-.37-.217-.223-.145-.149-.217-.222-.145-.148-.072v.072l.148.073v.217l.222.29.223.144.223.29.074.144.148.218.149.217.148.145v-.218h.148l-.222-.29zM81.239 9.99l.148.145.223.072.148-.072-.074-.29-.223-.289-.148-.145-.074.073-.149.217.075.072.074.217zm-2.523-1.013h.074l.075-.072H79.087v-.073h-.074l-.074.073.074-.073-.074-.072h-.149l.075.072-.075.073-.074.072zm3.116.941l-.074.507.37-.218v-.144l-.296-.145zM77.9 11.221l.297-.217.445-.145.297-.072.37-.073.075-.072v-.145h-.148l-.149.072-.297-.072-.37.072-.297.073-.075.145-.37.144.074.073-.297.145-.074.144h-.149l-.074.145.074.145-.074.145.297.217h.074v-.362l.148-.217.223-.145zm10.832 11.8l.074-.146.148-.29.075-.144-.223.072-.148.218-.149.217.075.072h.148zm.37-16.578l-.073-.072h-.075v.145l-.074.072.075.073v.072l.148.072v-.072l-.074-.145.074-.145zm-18.176 9.338l-.148-.144V15.419l-.074-.072v-.072h-.075v-.073l-.148-.072.074.217-.074.072v.145l.223.145.222.072zm.297-3.764l.074-.072v-.29l-.148-.144h-.075l.075.217.074.29zm7.79-3.04l.074-.145h-.074l-.074.073.074-.073-.074-.072h-.149l.075.072-.075.073v.072h.075l.074-.072h.074v.072zm-.816 2.027l.445-.145.297-.072.37-.073.075-.072v-.145h-.148l-.149.072-.297-.072-.37.072-.297.073-.075.145-.37.144.074.073-.297.145-.074.144h-.149l-.074.145.074.145-.074.145.297.217h.074v-.362l.148-.217.297-.217.223-.145zm3.042-1.014l.148.145.223.072.148-.072-.074-.29-.223-.289-.148-.145-.074.073-.149.217.075.072.074.217zm.816.145l-.223-.145h-.074l-.074.073v.434l.37-.217v-.145zm2.967-.145v-.144l.223-.218-.148-.217-.297.073-.149.144v.145l.149.217h.222zm.371-.579l.075-.072-.075-.145-.148.145-.148.072.074.073.222-.073zm0 .796l.149-.144.074-.145-.074-.072h-.149l-.074.072.074.29zm1.632-2.967l.149.144h.074v-.289l-.074-.145H87.1l-.075.145v.145zm4.007 8.252h-.223l-.148-.362.222-.145-.37-.217-.223-.145-.149-.217-.222-.145-.148-.072v.072l.148.073v.217l.222.29.223.144.223.29.074.144.148.218.149.217.148.145v-.218h.148l-.222-.29zm.445-2.896l-.074-.362-.149-.217v-.29l-.222-.216v-.362h-.074l-.149-.218v-.144l-.296-.218-.075.145-.074-.072-.148-.29-.149-.145.075-.144-.075-.217h.075l-.149-.435.148-.145-.074-.072-.148-.29-.148-.289V8.47l-.223-.434.074-.217-.074-.073h-.371l-.148.073v-.145l-.149-.145-.148-.072h-.148l-.075-.145.075.072.074-.072-.075-.145v-.145h.075l.074-.144.074-.073v-.072l-.074-.072-.223-.073-.074-.217-.148-.145-.149.145v.29h.149l-.074.072h-.149l-.222.217-.223.217-.074.073-.148.217v.217l-.075.29.149.072h.222l.074.145-.296.072v.434l-.075.145v.29l-.148.072-.223-.145h-.148l-.148.145-.074.362-.297.072-.223-.072-.668.507v.217l.297.145-.148.072v.145l-.223.072-.074.145h-.222l.148.362h-.223l-.296-.145v-.145l-.149-.144-.222-.073-.149.073-.222.072.148.217-.37.145-.075-.145-.297.073-.148.072v.362l-.149-.217-.074.072h-.296v-.145l.148-.29.074-.144-.074-.145-.148-.072-.223-.072-.223.072-.074.072-.074-.145h-.148l.074-.072-.149-.072-.148.144-.074.145v.145h-.149l-.148.217-.074-.072-.223.072v.073l-.222.072-.149.145h-.074l-.148.217.074.145h-.223l-.222-.073-.149.073-.074.362.074.29-.148-.218h-.222l-.223.072v.218l-.074-.073.148-.29v-.216h-.074l-.074.217-.223.144.074.29-.148.29v.217l.148.072-.148.217v.217l-.148.145-.075.145-.148.072-.074.073-.149-.073.371-.362.149-.217-.074-.217.148-.434v-.362l.148-.217.075-.217-.223-.145-.074.072-.149.29-.296.217-.075.072-.074.29-.074.144.148.073v.072l.075.217-.149.145-.296-.507-.075-.144-.297-.217-.074.072v.217l-.222.145v-.217h-.223l-.222-.145-.149.072-.074-.072.223-.145-.075-.072H76.045l-.148.145-.223-.145v-.145l.149-.145.148.073.074-.217-.148-.29-.074.217-.149.072-.074.218-.222.144v-.144l-.075-.073h-.445l-.074.217h-.148l-.075-.361h-.148l-.074.144-.148.073v-.362l.222-.217.074-.073.075-.29.074.073.148.58.223.072h.222l.149-.145.074-.145v-.58l-.149-.289.075-.29h-.149l-.222-.072-.075-.072-.222.145-.074.29-.223.072-.222.362-.223.072-.148.217-.223.072-.074.29-.074-.072h-.668l-.074.217-.223-.072v.072h-.148l-.149.217h-.074v.145l-.074.072-.074.145v.289l.074.073v.145l-.074.072h-.074l-.075.217v.29h-.074l-.074-.145-.074.072-.074.145v.072h.074v.073l.074.145-.074.217h-.074l-.075.072.075.145v.145l.074.29.148.072v.217l.075.072.148.29-.074.072-.149.073-.074.144-.074.073-.148-.145h-.075l-.074.072.148.145V16l-.222-.218v.145H71l-.074-.072v.217l.074.29.075.361.074.145.148.29.148.29v.072l.075.072h.074l.148.217v.145l.075.145.074.072.074.217.074.073H72.262v-.435l.074-.072-.074-.362h.074l.222-.072.149.072.148-.072-.074-.073-.074-.072v-.217l-.149-.073-.074-.29.223-.144v-.072l.297-.145.074.29.148-.145h.445l.223.217.222.434.149.217h.222l.297.145.148.29.075-.073.222.145.074-.072-.222-.362.222-.073v-.072h.223l-.074-.217.148-.073.668.218h.074l.52.072.222-.072.297.144v.29h.222l.223.145-.074.144.222.073.52-.145-.075.072.223.29.37.796.15-.145.296.218.297-.073.148.073.074.144.149.073.074.145h.297l.074.144h.074l.223-.072.445-.217.297-.145.222.072h.223l.148.145h.223l.296.073.223-.218-.074-.144.148-.362.223.072h.445l.074.217.297.073.222-.073.223-.145h.223l.222.073.149.072.148-.072.297-.073.148-.144.223-.145.222-.29h.149l.148.073.223-.145h.222l.223-.29-.075-.144.075-.362.074-.145-.074-.145h-.149l.075-.217.148-.145.222-.145.297-.072h.149l.222.145.149.072.148.073.148.217.297-.145h.297l.148.145.223-.217.074-.218.223-.29.074.29v.145l.074.29v.29l-.223.144-.074.217.149.145.074.29-.074.072.074.072h.074v-.072l.148-.362h.149l.074-.072.148-.29v-.217l.075-.434.074-.435-.075-.217v-.507l-.148-.362-.148-.29-.075-.289-.148-.144h-.37l-.15.144v.217l-.148.073-.148-.073-.223.145V14.19l-.074-.869.223-.507.297-.361v-.29l.148-.145.148.145.075-.217.074-.362h-.149l-.222-.58.074-.361.297.072-.149-.507-.148-.217v-.144l.297.29.148.361.148.362.223.434v.29l.074.072.075.218.222.289.445.29.297.144zm0 8.832c-1.41 1.81-3.116 2.75-3.116 2.75a13.177 13.177 0 0 1-7.27 2.172h-.15c-7.418 0-13.502-5.936-13.502-13.175 0-1.013.149-1.954.371-2.895C68.626 5.068 73.3.87 79.161.146 79.755.073 80.422 0 81.016 0c6.306-.073 10.164 4.416 10.387 4.633.37.434 1.261 1.665 1.261 1.737 1.187 1.954 1.929 4.198 1.929 6.587 0 1.448-.297 2.823-.742 4.126-.52 1.593-1.335 3.04-2.374 4.344zm-6.455 3.909v.217c1.187-.362 2.3-.869 3.265-1.52 0-.073 0-.073.074-.218a17.064 17.064 0 0 1-3.339 1.52zm3.265-1.665c0-.362 0-.797-.074-1.52a17.144 17.144 0 0 1-3.339 1.447c.074.724.074 1.23.074 1.593 1.261-.362 2.374-.869 3.339-1.52zM77.01 25.119V23.6c-1.187-.362-2.374-.796-3.413-1.448-.074.652-.148 1.086-.074 1.376 1.113.651 2.226 1.23 3.487 1.592zm-3.413-1.375c0 .217.074.29.074.362 1.039.651 2.226 1.23 3.413 1.52 0-.072 0-.217-.074-.362-1.187-.29-2.374-.869-3.413-1.52zm-2.82-18.893c-.519.651-1.038 1.303-1.409 2.027.148-.073.297-.217.52-.29.296-.796.816-1.52 1.335-2.171h-.074l-.075.072c-.074.145-.222.217-.296.362zm23.52 8.397v-.58c0 .363-.075.725-.075 1.087.074.072.074.144.074.217-.074-.29 0-.507 0-.724zm-26.413.29a6.228 6.228 0 0 1 1.262-1.52 9.619 9.619 0 0 1-.149-1.52c0-.29 0-.58.074-.942-.593.434-.89.869-1.112 1.086-.075.29-.075.579-.149.796v.58c0 .578 0 1.013.074 1.52zm24.854-6.37c-.074-.073-.297-.146-.593-.29.296.724.519 1.447.667 2.244.52.362.89.651 1.039.94a10.64 10.64 0 0 0-1.113-2.895zm-.816-.363c-.52-.217-1.335-.434-2.3-.579.223.507.371 1.086.445 1.665 1.113.362 1.93.796 2.523 1.158a11.254 11.254 0 0 0-.668-2.244zm.742 2.534c-.594-.434-1.41-.869-2.597-1.23v.578c0 .435-.074.87-.148 1.231 1.187.652 2.003 1.303 2.67 1.81.075-.435.075-.869.075-1.303.074-.362 0-.724 0-1.086zm-3.635 2.534a37.16 37.16 0 0 0-3.71-2.679c-.222.29-.445.58-.742.796a57.881 57.881 0 0 1 3.19 3.547 4.771 4.771 0 0 0 1.262-1.665zm-14.913 1.81c.817-1.087 1.855-2.245 3.116-3.548a2.275 2.275 0 0 1-.667-.796c-1.484 1.013-2.671 1.882-3.636 2.75.297.507.742 1.086 1.187 1.593zm-2.003-3.837c1.039-.58 2.3-1.231 3.858-1.81-.074-.29-.148-.58-.148-.869v-.072c-1.558.217-2.82.579-3.858.94v.652c0 .362.074.797.148 1.159zm1.558-7.384c.297 0 .742.145 1.336.29.519-.362 1.112-.724 1.706-1.014-.37-.29-.668-.434-.742-.507-.074.073-.222.073-.297.145l-.445.217a5.373 5.373 0 0 0-1.558.87zm12.316-1.23c-.148.072-.371.217-.668.506.668.29 1.187.652 1.78 1.086.52-.217.891-.362 1.188-.434-.445-.29-.965-.58-1.484-.869l-.445-.217c-.149 0-.223-.073-.371-.073zm-.223 5.935a59.103 59.103 0 0 0-4.154-.362c1.335.362 2.967.869 4.006 1.23.148-.289.222-.578.148-.868 0 0 .075 0 0 0zm-9.57.869c1.112-.434 2.596-.869 4.08-1.303a59.098 59.098 0 0 0-4.154.362v.072c0 .29 0 .58.074.869zm6.974-6.805c-.223.435-.594 1.014-.89 1.883a4.36 4.36 0 0 1 1.038.361c.668-.723 1.187-1.23 1.632-1.592-.593-.362-1.187-.507-1.78-.652zm1.929.435c.296-.217.519-.435.667-.507-.667-.29-1.41-.507-2.151-.651-.074.072-.223.29-.371.579.667.072 1.261.29 1.855.579zm-4.155 5.14c.074 0 .223-.073.223-.145 0-.073-.075-.145-.223-.145-.074 0-.223.072-.223.145 0 .072.149.144.223.144zm1.039-3.62c-.297-.072-.668-.072-.965-.072 0 1.447 0 2.46.074 2.895.223-1.086.594-2.027.89-2.823zm-1.113-.072c-.297 0-.594 0-.89.072.296.796.667 1.665.964 2.823-.074-.362-.074-1.23-.074-2.895zm4.229 1.954c-.149-.217-.371-.507-.668-.724a19.636 19.636 0 0 0-2.894 2.027c1.336-.58 2.449-1.013 3.562-1.303zM81.61 6.516c1.41-.362 2.745-.58 3.932-.652-.075-.217-.223-.434-.371-.651-1.039.29-2.3.724-3.561 1.303zm2.67-2.317c-.296-.217-.593-.434-.89-.579-.593.652-1.261 1.52-1.929 2.534a20.035 20.035 0 0 1 2.82-1.955zm-1.112-.651c-.297-.145-.668-.217-.965-.29-.297.797-.668 1.738-.89 2.896.593-1.086 1.261-1.882 1.855-2.606zm-.223-2.389a8.278 8.278 0 0 0-1.929-.217v1.954c.371 0 .742.073 1.039.073.37-.724.667-1.376.89-1.81zM80.868.942c-.668 0-1.261.072-1.855.217.222.434.593 1.086.89 1.882.297-.072.668-.072.965-.072V.942zm-2.078.29c-.593.144-1.187.289-1.78.579.445.361 1.038.868 1.706 1.592.297-.145.668-.217.965-.29a9.394 9.394 0 0 0-.89-1.882zm.075 2.243c.593.724 1.187 1.448 1.854 2.606-.296-1.23-.593-2.026-.89-2.895-.37.072-.668.217-.964.29zm-.223.073c-.297.145-.593.29-.89.507.816.506 1.706 1.158 2.745 2.099-.594-1.014-1.187-1.882-1.855-2.606zm-1.039.651l-.667.652c.964.29 2.225.869 3.412 1.448-.89-.797-1.929-1.593-2.745-2.1zm-.816.797c-.148.217-.297.506-.445.796 1.113.072 2.448.29 3.932.579a38.812 38.812 0 0 0-3.487-1.375zm-.52 1.013c-.073.29-.147.58-.222.941a56.752 56.752 0 0 1 4.08-.362c-1.409-.29-2.67-.507-3.857-.579zm0 2.172c.075.29.224.579.372.868a70.244 70.244 0 0 1 3.71-2.171 33.56 33.56 0 0 0-4.081 1.303zm.446 1.013c.148.29.371.507.668.724a40.495 40.495 0 0 1 3.116-2.968c-1.41.796-2.671 1.52-3.784 2.244zm.816.869c.297.217.594.434.89.579a49.701 49.701 0 0 1 2.152-3.547c-1.113 1.013-2.152 2.1-3.042 2.968zm1.113.651c.297.145.594.217.965.362.37-1.158.741-2.533 1.186-3.909-.816 1.23-1.558 2.534-2.151 3.547zm1.113.435c.37.072.742.144 1.113.144V7.24c-.371 1.303-.816 2.678-1.113 3.909zm1.261.072c.371 0 .742-.072 1.113-.145a53.37 53.37 0 0 0-1.113-3.909c.074 1.014 0 2.461 0 4.054zm1.335-.145a4.364 4.364 0 0 0 1.04-.362c-.669-1.086-1.336-2.244-2.152-3.474a43.476 43.476 0 0 1 1.112 3.836zm1.262-.507c.296-.144.52-.362.742-.506a55.217 55.217 0 0 0-2.968-2.896 122.443 122.443 0 0 1 2.226 3.402zm.89-.651c.297-.217.52-.507.668-.796-1.039-.652-2.226-1.303-3.636-2.027 1.113 1.013 2.078 1.954 2.968 2.823zm.816-.941c.148-.217.297-.507.371-.796a64.324 64.324 0 0 0-4.006-1.303c1.335.796 2.522 1.447 3.635 2.099zm.445-2.027c0-.29-.074-.579-.148-.869-1.187.073-2.597.29-4.006.652 1.558 0 2.967.072 4.154.217zm.223 0c1.558.217 2.82.507 3.858.796a5.642 5.642 0 0 0-.445-1.592c-.965-.145-2.152-.217-3.562-.145.075.362.149.652.149.941zm3.338-.941a8.089 8.089 0 0 0-.89-1.52 50.06 50.06 0 0 0-3.042.651c.149.218.297.435.371.724 1.336-.072 2.597 0 3.561.145zm-1.038-1.737a10.008 10.008 0 0 0-1.262-1.23c-.667.289-1.483.65-2.448 1.23.223.217.445.434.668.724a25.766 25.766 0 0 1 3.042-.724zm-1.41-1.376c-.52-.434-1.113-.724-1.706-1.013-.445.362-1.039.941-1.632 1.665.37.145.667.362.964.651.89-.651 1.706-1.013 2.374-1.303zM83.39.508A12.576 12.576 0 0 0 81.016.29v.507c.668 0 1.41.073 2.003.217.223-.217.297-.434.371-.506zm-2.522-.29c-.816 0-1.558.072-2.3.217.074.145.222.29.37.507a8.931 8.931 0 0 1 2.004-.217c-.074-.145-.074-.29-.074-.507zm-2.523.29c-.742.144-1.484.362-2.225.651.148.072.445.29.741.507.594-.217 1.188-.435 1.855-.58-.222-.289-.297-.506-.37-.578zm-3.19 2.316c.668.217 1.484.58 2.448 1.158.297-.217.594-.434.965-.579a15.852 15.852 0 0 0-1.707-1.592c-.667.29-1.187.579-1.706 1.013zm-.148.145c-.446.362-.89.796-1.262 1.23.816.073 1.855.29 3.042.652.223-.29.445-.507.668-.724-.965-.58-1.78-.941-2.448-1.158zm-1.484 1.375c-.371.507-.668 1.014-.965 1.52.965-.144 2.152-.144 3.561-.072.149-.29.297-.58.446-.796a11.025 11.025 0 0 0-3.042-.652zm-.965 1.737c-.222.58-.37 1.159-.519 1.738 1.039-.362 2.3-.652 3.858-.869 0-.362.074-.651.222-.941-1.483-.145-2.596-.072-3.56.072zm-.37 3.982c.148.651.37 1.23.667 1.81.965-.87 2.152-1.738 3.635-2.751a11.65 11.65 0 0 1-.445-.941 37.501 37.501 0 0 0-3.858 1.882zm2.077 3.691c.52.507 1.113.942 1.78 1.303.594-1.23 1.41-2.678 2.3-4.27-.37-.145-.668-.362-.964-.58-1.261 1.303-2.226 2.534-3.116 3.547zm1.929 1.448c.667.362 1.335.652 2.077.797.297-1.376.742-2.968 1.261-4.778-.37-.072-.667-.217-1.038-.362-.89 1.665-1.633 3.04-2.3 4.343zm2.3.869c.742.217 1.558.29 2.374.29v-4.923c-.371 0-.816-.072-1.187-.145-.445 1.81-.89 3.403-1.187 4.778zm2.522.29c.816 0 1.632-.145 2.374-.29-.297-1.375-.742-2.968-1.187-4.778-.37.073-.742.145-1.187.145v4.922zm2.597-.362a10.112 10.112 0 0 0 2.225-.87c-.593-1.23-1.41-2.677-2.3-4.27l-1.112.434c.445 1.738.89 3.33 1.187 4.706zm2.374-1.014c.593-.362 1.187-.796 1.632-1.23-.816-1.086-1.855-2.245-3.116-3.548-.222.218-.52.362-.816.58.89 1.52 1.706 2.967 2.3 4.198zm3.19-3.257c.297-.507.445-1.086.594-1.665-1.04-.58-2.3-1.158-3.933-1.738-.074.29-.222.58-.37.797 1.483.868 2.67 1.81 3.709 2.606zm.594-1.882c.074-.362.148-.797.148-1.159 0-.217 0-.434-.074-.651-1.039-.362-2.3-.652-3.858-.869 0 .29-.074.652-.148.941 1.632.58 2.893 1.159 3.932 1.738zm2.077-3.258c-.371-.796-.89-1.592-1.484-2.316-.37 0-.964.072-1.706.145.37.506.667 1.013.89 1.592.965.145 1.706.362 2.3.58zM90.14 4.127a11.079 11.079 0 0 0-1.706-1.52c-.222.072-.668.217-1.187.434.445.362.89.796 1.261 1.303.668-.145 1.262-.217 1.632-.217zm-18.399 0c.445-.072 1.039-.072 1.78 0 .372-.434.817-.869 1.262-1.23-.668-.218-1.187-.29-1.335-.29-.668.434-1.262.94-1.707 1.52zm-.222.217c-.594.652-1.039 1.375-1.41 2.172a9.846 9.846 0 0 1 2.3-.652c.222-.579.52-1.086.89-1.592-.742 0-1.335 0-1.78.072zm-1.558 2.461a6.372 6.372 0 0 0-.668 2.39c.594-.435 1.484-.87 2.597-1.231.074-.652.222-1.231.445-1.81-1.039.072-1.855.362-2.374.651zm-.223.073c-.297.144-.445.29-.593.362a17.676 17.676 0 0 0-1.113 2.967c.222-.289.52-.579 1.038-.94a7.226 7.226 0 0 1 .668-2.39zm-.445 4.995a19.02 19.02 0 0 1 2.67-1.955c-.073-.434-.147-.869-.147-1.303v-.58c-1.188.435-2.004.87-2.597 1.304-.074.362-.074.724-.074 1.086 0 .579.074 1.013.148 1.447zm.074.289c.148.869.445 1.665.816 2.461.594-.796 1.41-1.665 2.523-2.606a7.584 7.584 0 0 1-.668-1.81 12.382 12.382 0 0 0-2.67 1.955zm.89 2.606c.446.796.965 1.52 1.559 2.244a23.8 23.8 0 0 1 2.151-3.258c-.52-.506-.89-1.013-1.261-1.592-1.039 1.013-1.855 1.882-2.448 2.606zm1.781 2.389c.668.724 1.484 1.303 2.3 1.81.37-1.014.89-2.245 1.632-3.765a7.972 7.972 0 0 1-1.78-1.303c-.965 1.303-1.633 2.317-2.152 3.258zm2.448 1.954c.89.507 1.855.941 2.894 1.23.222-1.157.445-2.46.816-4.125-.742-.217-1.484-.507-2.078-.869-.741 1.448-1.26 2.678-1.632 3.764zm3.116 1.23c1.039.29 2.152.435 3.265.435v-4.198c-.816 0-1.632-.145-2.449-.29-.37 1.593-.593 2.896-.816 4.054zm3.487.435c1.113 0 2.226-.145 3.19-.434-.222-1.158-.445-2.534-.816-4.126-.742.217-1.558.29-2.448.29 0 1.52 0 2.967.074 4.27zm3.339-.507c1.113-.29 2.077-.723 3.042-1.23-.371-1.086-.89-2.317-1.558-3.764-.668.362-1.484.724-2.226.94.297 1.593.594 2.969.742 4.054zm3.19-1.375a13.931 13.931 0 0 0 2.3-1.81c-.52-.94-1.261-1.954-2.152-3.185-.519.507-1.038.941-1.706 1.303.742 1.448 1.187 2.679 1.558 3.692zm2.448-1.954a10.138 10.138 0 0 0 1.633-2.317c-.594-.796-1.41-1.665-2.523-2.606a7.811 7.811 0 0 1-1.335 1.738c1.038 1.23 1.706 2.316 2.225 3.185zm1.78-2.534c.372-.724.594-1.593.743-2.389-.594-.579-1.484-1.23-2.671-1.882-.148.58-.371 1.158-.594 1.738a19.632 19.632 0 0 1 2.523 2.533zm.075.145c.594.796.965 1.448 1.113 2.027.445-.869.668-1.882.816-2.823-.222-.435-.594-.942-1.187-1.593-.074.869-.371 1.665-.742 2.389zM94 13.393c.075-.435.075-.87.075-1.376 0-.506-.075-1.013-.149-1.52-.148-.217-.445-.579-1.113-1.086.075.362.075.652.075 1.014 0 .506-.075.94-.149 1.447.668.58 1.039 1.086 1.261 1.52zm-1.41-6.515a11.189 11.189 0 0 0-2.002-2.606c.593.724 1.112 1.52 1.558 2.389l.445.217zm-24.779 7.31c.148 1.16.371 2.245.816 3.258.074-.145.074-.362.149-.506-.446-.87-.742-1.81-.965-2.751 0 0 0-.072 0 0zm1.039 2.534a8.44 8.44 0 0 1 1.187-1.954c-.371-.796-.668-1.593-.816-2.461-.594.651-1.039 1.158-1.187 1.52a7.686 7.686 0 0 0 .816 2.895zm.148.218a8.765 8.765 0 0 0 1.78 2.533c.223-.651.52-1.375 1.04-2.316-.668-.652-1.188-1.448-1.633-2.244a8.911 8.911 0 0 0-1.187 2.027zm1.93 2.75c.741.797 1.631 1.52 2.596 2.1a21.61 21.61 0 0 1 .742-2.679c-.89-.506-1.633-1.158-2.374-1.81-.52 1.014-.817 1.81-.965 2.39zm2.744 2.244c1.039.652 2.152 1.086 3.339 1.448.074-.724.148-1.737.37-2.895-1.038-.29-2.002-.724-2.967-1.231a31.839 31.839 0 0 0-.742 2.678zm3.561 1.52c1.187.29 2.374.507 3.636.507v-2.968c-1.113 0-2.226-.144-3.265-.434-.222 1.158-.296 2.1-.37 2.895zm3.858.435c1.261 0 2.449-.217 3.636-.507-.075-.724-.223-1.737-.371-2.895-1.039.29-2.152.434-3.265.434v2.968zm3.784-.507c1.187-.362 2.3-.869 3.339-1.448-.149-.724-.297-1.592-.668-2.678-.965.507-1.93.941-3.042 1.303.148 1.086.297 2.1.371 2.823zm3.561-1.592a19.216 19.216 0 0 0 2.671-2.172c-.223-.58-.52-1.375-1.039-2.316-.667.723-1.483 1.303-2.3 1.81.297 1.085.52 1.954.668 2.678zm2.82-2.39c.667-.795 1.26-1.664 1.706-2.605a8.005 8.005 0 0 0-1.113-2.027 10.138 10.138 0 0 1-1.632 2.316c.519.941.816 1.738 1.038 2.317zm0 .218c.148.507.222.941.222 1.23.668-.796 1.261-1.664 1.706-2.678 0-.145 0-.507-.148-1.086a8.763 8.763 0 0 1-1.78 2.534zm2.448-2.534c.222-.796.445-1.592.519-2.46 0-.073 0-.29-.148-.508a9.202 9.202 0 0 1-.89 2.751c.148.434.222.724.222 1.014.074-.29.148-.58.297-.797zM67.884 15.71c.149.796.371 1.52.668 2.244v-.145a9.924 9.924 0 0 1-.668-2.099zm.816 2.678c.446 1.014 1.04 1.955 1.707 2.823v-.29a21.863 21.863 0 0 1-1.78-2.75c.073.145.073.217.073.217zm1.781 2.317c0-.29.074-.58.223-.941-.742-.797-1.262-1.593-1.781-2.534-.074.217-.148.434-.148.652a15.96 15.96 0 0 0 1.706 2.823zm.148.217c.742.941 1.707 1.737 2.671 2.461 0-.362 0-.796.075-1.303a12.093 12.093 0 0 1-2.597-2.1c-.074.363-.074.725-.149.942zm6.603 4.27c1.187.363 2.374.508 3.636.508v-1.593c-1.261 0-2.523-.145-3.636-.507-.074.724 0 1.23 0 1.593zm3.858.508c1.261 0 2.523-.218 3.71-.507 0-.362 0-.869-.074-1.593-1.187.29-2.374.507-3.636.507v1.592zm7.42-2.172c1.038-.652 2.002-1.52 2.819-2.461 0-.29-.075-.652-.223-1.303a12.842 12.842 0 0 1-2.67 2.171c.147.724.147 1.23.073 1.593zm-15.061.434c0-.072-.075-.217-.075-.362-1.038-.651-1.928-1.448-2.745-2.389v.29c.816.941 1.781 1.737 2.82 2.461zm7.419 2.244v-.29c-1.261 0-2.523-.216-3.636-.506 0 .145.075.29.075.362 1.112.217 2.374.434 3.56.434zm.222 0c1.261 0 2.523-.217 3.71-.579v-.29c-1.187.363-2.448.507-3.71.507v.362zm10.164-4.777c-.816.868-1.706 1.665-2.745 2.316v.145c1.039-.652 1.93-1.52 2.745-2.461zM26.338 4.706c-3.339 0-4.6 1.81-4.6 4.054v8.614c0 2.244 1.261 4.054 4.6 4.054 3.338 0 4.377-1.81 4.377-4.054v-1.448H27.97v1.23c0 .87-.297 1.666-1.706 1.666-1.336 0-1.707-.724-1.707-1.665v-8.18c0-.869.297-1.665 1.707-1.665 1.335 0 1.706.724 1.706 1.665v1.23h2.745V8.76c0-2.244-1.039-4.054-4.377-4.054zm10.238 0c-3.339 0-4.6 1.81-4.6 4.054v8.614c0 2.244 1.261 4.054 4.6 4.054 3.338 0 4.377-1.81 4.377-4.054v-1.448h-2.745v1.23c0 .87-.297 1.666-1.706 1.666-1.336 0-1.707-.724-1.707-1.665v-8.18c0-.869.297-1.665 1.707-1.665 1.335 0 1.706.724 1.706 1.665v1.23h2.745V8.76c.074-2.244-1.039-4.054-4.377-4.054zM20.106 8.76v8.614c0 2.244-1.484 4.054-4.823 4.054-3.338 0-4.822-1.81-4.822-4.054V8.76c0-2.244 1.484-4.054 4.822-4.054 3.339 0 4.823 1.81 4.823 4.054zm-2.968 8.397v-8.18c0-.869-.52-1.593-1.855-1.593s-1.854.724-1.854 1.665v8.18c0 .869.519 1.665 1.854 1.665 1.336-.145 1.855-.869 1.855-1.737zm28.044-1.665l.223-3.258v-7.31h-2.968v16.359h2.3l5.045-10.641-.223 3.257v7.312h2.894V4.922h-2.3l-4.971 10.569zM9.2 8.977v3.257c0 2.244-1.336 4.054-4.674 4.054H2.893v4.922H0V4.924h4.526c3.338 0 4.674 1.81 4.674 4.054zm-2.894 3.04V9.194c0-.869-.445-1.665-1.78-1.665H2.968v6.153h1.558c1.335 0 1.78-.724 1.78-1.665zm47.853-3.04v2.678c0 1.593.668 2.968 2.226 3.62l-2.448 5.935h3.19l2.893-8.107h-1.187c-1.335 0-1.706-.724-1.706-1.665V9.194c0-.869.445-1.665 1.78-1.665h1.558V21.21h2.894V4.924h-4.526c-3.338 0-4.674 1.81-4.674 4.054zm90.438 10.134h1.484v4.995h-2.077l-.223-2.968h-6.974l-.222 2.968h-2.078v-4.995h.965c1.484-2.606 1.558-8.686 1.558-14.115h7.642V19.11h-.075zm-2.225-12.089h-3.265c0 3.837 0 9.049-1.187 12.09h4.452V7.021zm-33.46-2.026h7.048v2.026h-4.748v4.923h3.932v2.027h-3.932v5.14h4.748v2.026h-7.048V4.996zm25.15 3.836v8.47c0 2.244-1.261 4.053-4.525 4.053-3.339 0-4.526-1.81-4.526-4.053v-8.47c0-2.244 1.261-4.054 4.526-4.054 3.338 0 4.525 1.81 4.525 4.054zm-2.225-.217c0-1.013-.742-1.81-2.3-1.81-1.558 0-2.3.797-2.3 1.81v8.831c0 1.014.742 1.81 2.3 1.81 1.558 0 2.3-.796 2.3-1.81V8.615zm22.331-3.62h2.3v16.143h-2.3v-7.166h-4.526v7.166h-2.3V4.996h2.3v6.949h4.526v-6.95zm12.538 0v16.143h-2.3V7.022h-1.409c-1.558 0-2.3.797-2.3 1.81v2.389c0 1.013.742 1.81 2.3 1.81h.816l-3.116 8.035h-2.449l2.449-6.443c-1.632-.651-2.3-2.027-2.3-3.62V8.978c0-2.244 1.261-4.054 4.525-4.054h3.784v.073zm-49.114 0h7.048v2.027h-4.748v14.116h-2.3V4.996zm-10.387 3.837v1.014h-2.151V8.615c0-1.013-.52-1.81-2.078-1.81-1.558 0-2.077.797-2.077 1.81v8.831c0 1.014.519 1.81 2.077 1.81 1.558 0 2.078-.796 2.078-1.81v-1.23h2.151v1.013c0 2.244-.964 4.054-4.229 4.054-3.338 0-4.303-1.81-4.303-4.054V8.832c0-2.244 1.04-4.054 4.303-4.054 3.339 0 4.229 1.81 4.229 4.054z">
                </path>
            </symbol>
            <symbol viewbox="0 0 304 60" fill="none" id="logo-realty_logo_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.837c.074-1.233.485-2.466 1.157-3.587.187-.299.374-.56.56-.859 1.681.374 3.287.934 4.818 1.719-.523.71-.933 1.531-1.083 2.503a5.714 5.714 0 0 0 .336 2.95 7.005 7.005 0 0 0 1.718 2.392c.71.672 1.494 1.158 2.353 1.606a14.783 14.783 0 0 0 5.304 1.457c.373.037.747.037 1.12.037.075.224.187.486.262.747-.71.075-1.382.15-2.092.15-2.614.075-5.266-.262-7.694-1.12-2.427-.897-4.668-2.354-5.863-4.484a5.83 5.83 0 0 1-.896-3.511zm13.407 17.857c-4.257-.225-8.515-1.121-12.4-2.952-1.941-.896-3.809-2.054-5.452-3.511-1.643-1.457-3.062-3.213-3.921-5.268a11.95 11.95 0 0 1-.86-6.537c.187-1.27.598-2.503 1.121-3.624-2.39.672-4.594 1.83-6.498 3.25-.038.299-.075.635-.113.934a12.737 12.737 0 0 0 1.494 7.023c1.12 2.13 2.839 3.998 4.78 5.492 1.98 1.494 4.184 2.69 6.5 3.586 4.668 1.83 9.747 2.578 14.79 2.54 1.456 0 2.912-.111 4.369-.26.037-.225.075-.45.112-.71a45.757 45.757 0 0 1-3.922.037zM31.832 24.1c1.494 1.158 3.175 2.055 4.93 2.765 3.548 1.382 7.432 1.98 11.28 1.905 1.344 0 2.65-.112 3.958-.261 0-.113 0-.225-.037-.3 0-.111-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.86-8.851-2.167-1.382-.673-2.727-1.495-3.885-2.503-1.157-1.046-2.203-2.316-2.875-3.773-.673-1.457-.934-3.138-.673-4.745.224-1.569.897-3.026 1.793-4.259.075-.112.15-.186.224-.261a19.215 19.215 0 0 0-4.407-.075c-.597.038-1.158.15-1.718.224-.71 1.383-1.195 2.877-1.307 4.371a9.313 9.313 0 0 0 1.046 5.305c.821 1.569 2.091 2.989 3.585 4.11zm15.5 13.412c-5.453-.224-10.906-1.308-15.91-3.587-2.503-1.12-4.893-2.54-7.022-4.37-2.129-1.794-3.959-3.998-5.154-6.575a15.183 15.183 0 0 1-1.42-7.136 20.082 20.082 0 0 0-5.751 15.915c.971 11.02 10.719 19.164 21.737 18.155 7.73-.672 14.042-5.678 16.769-12.402a47.064 47.064 0 0 1-3.25 0zm-4.893-24.656c0 .037 0 .037 0 0-.336.635-.523 1.307-.523 1.942s.187 1.233.523 1.719c.672 1.046 1.867 1.755 3.175 2.166 1.045.337 2.166.449 3.286.449a21.136 21.136 0 0 0-6.461-6.276z" fill="#FFD33D"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M227.402 29.738c-1.383-.747-2.467-1.757-3.215-3.065-.785-1.308-1.159-2.766-1.159-4.374 0-1.607.374-3.065 1.159-4.374.785-1.308 1.869-2.318 3.215-3.065 1.383-.748 2.916-1.122 4.635-1.122 1.72 0 3.253.374 4.598 1.122a8.183 8.183 0 0 1 3.215 3.065 8.354 8.354 0 0 1 1.197 4.374 8.353 8.353 0 0 1-1.197 4.374c-.785 1.308-1.869 2.318-3.215 3.065-1.383.748-2.915 1.122-4.598 1.122-1.719 0-3.252-.374-4.635-1.122zm7.252-2.803c.785-.449 1.383-1.084 1.832-1.87.449-.785.673-1.72.673-2.729 0-1.009-.224-1.944-.673-2.728-.449-.786-1.047-1.421-1.832-1.87-.785-.448-1.682-.673-2.654-.673s-1.869.225-2.654.673c-.785.449-1.383 1.084-1.832 1.87-.449.784-.673 1.72-.673 2.728 0 1.01.224 1.944.673 2.73.449.785 1.047 1.42 1.832 1.869.785.448 1.682.673 2.654.673 1.009 0 1.869-.225 2.654-.673zM76.112 30.56V14.075H72.3v6.504h-7.477v-6.504H61.01V30.56h3.813v-6.767H72.3v6.767h3.813zm17.495 0v-3.066h-8.972v-3.813H92.3V20.73h-7.664V17.14h8.673v-3.065H80.86V30.56h12.747zm20.673-3.103V34h-3.551v-3.402H99.103V34H95.55l.038-6.542h.673c.972-.037 1.682-.748 2.093-2.168.411-1.42.673-3.44.748-6.056l.187-5.16h12.673v13.384h2.317zm-12.299-2.953c-.261 1.308-.635 2.317-1.159 2.916h7.365V17.14h-5.645l-.075 2.392c-.075 2.018-.261 3.663-.486 4.972zm29.944 1.42c0-1.01-.261-1.832-.785-2.504-.523-.673-1.308-1.16-2.28-1.458a3.884 3.884 0 0 0 1.719-1.458c.412-.636.599-1.346.599-2.169 0-1.345-.524-2.392-1.608-3.14-1.084-.747-2.579-1.121-4.486-1.121h-7.663V30.56h8.112c2.056 0 3.626-.412 4.747-1.234 1.084-.785 1.645-1.944 1.645-3.402zm-7.177-5.01h-3.552v-4.037h3.552c.822 0 1.42.187 1.869.524.411.374.635.86.635 1.495 0 .673-.224 1.16-.635 1.495-.411.337-1.047.524-1.869.524zm.635 2.655c1.795 0 2.692.673 2.692 2.056 0 1.42-.86 2.094-2.692 2.131h-4.187V23.57h4.187zm10.168-9.495h3.776v10.729l7.851-10.73h3.588v16.487h-3.775V19.83l-7.851 10.73h-3.589V14.075zm32.486 9.832h2.393l3.738 6.654h4.411l-4.934-8.636 4.598-7.85h-4.037l-3.739 6.654H168v-6.654h-3.738v6.654h-2.505l-3.701-6.654h-4.037l4.635 7.85-4.934 8.636h4.411l3.701-6.654h2.467v6.654h3.738v-6.654zm12.935-9.832h3.776v10.729l7.85-10.73h3.589v16.487h-3.776V19.83l-7.85 10.73h-3.589V14.075zm30.019 14.729l4.859-8.112.038 9.869h3.551l-.037-16.486h-3.14l-6.094 10.243L204 14.075h-3.14V30.56h3.589v-9.683l4.859 7.926h1.683zm33.607-2.094c.785 1.271 1.869 2.28 3.215 3.028 1.346.748 2.879 1.122 4.598 1.084 1.421 0 2.729-.261 3.888-.747 1.159-.524 2.131-1.234 2.916-2.206l-2.467-2.243c-1.122 1.309-2.505 1.944-4.15 1.944-1.009 0-1.944-.224-2.729-.673A4.987 4.987 0 0 1 248 25.028c-.449-.785-.673-1.72-.673-2.729 0-1.01.224-1.944.673-2.729a4.987 4.987 0 0 1 1.869-1.87c.785-.448 1.72-.672 2.729-.672 1.645 0 3.028.673 4.15 1.944l2.467-2.243a7.657 7.657 0 0 0-2.916-2.168c-1.159-.486-2.467-.748-3.888-.748-1.719 0-3.252.336-4.598 1.084-1.383.71-2.43 1.72-3.215 3.028-.785 1.309-1.159 2.804-1.159 4.411 0 1.608.374 3.103 1.159 4.374zm30.094-9.532h-5.271V30.56h-3.776V17.178h-5.234v-3.103h14.281v3.103zm17.233 7.626c0-1.757-.523-3.066-1.607-3.963-1.084-.897-2.617-1.346-4.673-1.383h-4.187v-5.42h-3.776v16.485h7.439c2.169 0 3.814-.486 5.01-1.458 1.196-.972 1.794-2.392 1.794-4.261zm-3.85.075c0 .934-.262 1.644-.823 2.13-.56.486-1.345.71-2.317.71h-3.44V22.3h3.44c2.093 0 3.14.86 3.14 2.58z" fill="#003057"></path>
                <path d="M60.598 38.785a2.99 2.99 0 0 1 2.99-2.99h67.291a2.99 2.99 0 0 1 2.99 2.99v6.355a2.99 2.99 0 0 1-2.99 2.99h-67.29a2.99 2.99 0 0 1-2.99-2.99v-6.355z" fill="#FFD33D"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M93.457 44.643a2.837 2.837 0 0 1-1.14-1.105 3.037 3.037 0 0 1-.41-1.575c0-.58.132-1.105.41-1.576a3.015 3.015 0 0 1 1.14-1.105 3.343 3.343 0 0 1 1.643-.403c.61 0 1.152.134 1.63.404.49.269.86.633 1.139 1.104.278.471.424.996.424 1.576 0 .579-.146 1.104-.424 1.575a3.015 3.015 0 0 1-1.14 1.105 3.29 3.29 0 0 1-1.63.404c-.609-.014-1.165-.148-1.642-.404zm2.57-1.024c.278-.161.49-.39.65-.673.158-.283.238-.62.238-.983 0-.364-.08-.7-.239-.983a1.748 1.748 0 0 0-.649-.674 1.85 1.85 0 0 0-.94-.242c-.345 0-.663.08-.941.242-.278.162-.49.39-.65.674-.158.282-.238.619-.238.983 0 .363.08.7.239.983.159.283.37.512.649.673.278.162.596.243.94.243.358 0 .663-.081.941-.243zm-26.934-3.623c-.2-.323-.49-.565-.875-.74-.384-.175-.834-.256-1.351-.256h-2.53v5.925h1.35v-1.642h1.18c.517 0 .967-.081 1.351-.256.371-.162.663-.418.875-.741.198-.323.304-.714.304-1.145 0-.444-.106-.821-.304-1.145zm-1.047 1.159c0 .323-.106.579-.318.754-.212.175-.53.27-.927.27h-1.1v-2.062h1.1c.41 0 .715.095.927.27.212.175.318.43.318.768zM71.477 39H70.14v5.939h1.272l2.782-3.865v3.865h1.338v-5.94H74.26l-2.783 3.866V39zm9.221 4.66h-2.715l-.517 1.279h-1.391l2.61-5.94h1.338l2.61 5.94h-1.418l-.517-1.28zm-.437-1.037l-.927-2.276-.928 2.276h1.855zm10.374 2.316v-5.94h-1.352v2.344h-2.65V39h-1.35v5.939h1.35v-2.438h2.65v2.438h1.352zm14.057-1.67c0-.364-.093-.66-.279-.902a1.638 1.638 0 0 0-.808-.526c.265-.12.464-.296.61-.525.145-.229.212-.485.212-.781 0-.485-.186-.862-.57-1.131-.384-.27-.914-.404-1.59-.404h-2.716v5.939h2.875c.729 0 1.285-.148 1.683-.444.384-.283.583-.7.583-1.226zm-2.544-1.818h-1.259v-1.455h1.259c.291 0 .503.068.662.189.146.135.226.31.226.539 0 .242-.08.417-.226.538-.145.121-.371.189-.662.189zm.225.956c.636 0 .954.243.954.74 0 .513-.318.769-.954.769h-1.484v-1.509h1.484zm4.743 2.236a2.838 2.838 0 0 1-1.139-1.105 3.03 3.03 0 0 1-.411-1.575c0-.58.132-1.105.411-1.576a3.012 3.012 0 0 1 1.139-1.105 3.341 3.341 0 0 1 1.643-.403c.609 0 1.153.134 1.629.404.491.269.862.633 1.14 1.104.278.471.424.996.424 1.576 0 .579-.146 1.104-.424 1.575a3.015 3.015 0 0 1-1.14 1.105 3.286 3.286 0 0 1-1.629.404 3.66 3.66 0 0 1-1.643-.404zm2.57-1.024c.279-.161.491-.39.649-.673.159-.283.239-.62.239-.983 0-.364-.08-.7-.239-.983a1.735 1.735 0 0 0-.649-.674 1.848 1.848 0 0 0-.94-.242c-.345 0-.663.08-.941.242-.278.162-.49.39-.649.674-.159.282-.239.619-.239.983 0 .363.08.7.239.983.159.283.371.512.649.673.278.162.596.243.941.243.357 0 .662-.081.94-.243zm3.524-.067a3.09 3.09 0 0 0 1.14 1.09c.49.27 1.02.391 1.629.391.504 0 .968-.094 1.378-.27a2.756 2.756 0 0 0 1.034-.794l-.875-.808c-.397.472-.887.7-1.47.7-.358 0-.689-.08-.968-.242a1.782 1.782 0 0 1-.662-.673 1.996 1.996 0 0 1-.238-.983c0-.364.079-.7.238-.983.159-.283.384-.512.662-.674.279-.161.61-.242.968-.242.583 0 1.073.242 1.47.7l.875-.808a2.725 2.725 0 0 0-1.034-.781 3.493 3.493 0 0 0-1.378-.27c-.609 0-1.152.122-1.629.391-.49.256-.861.62-1.14 1.09-.278.459-.41.984-.41 1.577 0 .592.132 1.13.41 1.589zm10.666-3.434h-1.869v4.821h-1.338v-4.822h-1.854V39h5.061v1.117zM126.274 39h-1.339v5.939h1.272l2.782-3.865v3.865h1.339v-5.94h-1.272l-2.782 3.866V39z" fill="#5E5E5E"></path>
            </symbol>
            <symbol viewbox="0 0 305 60" fill="none" id="logo-realty_logo_white_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.837c.075-1.233.485-2.466 1.158-3.587.186-.299.373-.56.56-.859 1.68.374 3.286.934 4.818 1.719-.523.71-.934 1.531-1.083 2.503a5.713 5.713 0 0 0 .336 2.95 7.004 7.004 0 0 0 1.718 2.392c.71.672 1.494 1.158 2.353 1.606a14.784 14.784 0 0 0 5.303 1.457c.374.037.747.037 1.12.037.075.224.188.486.262.747-.71.075-1.382.15-2.091.15-2.615.075-5.267-.262-7.694-1.12-2.428-.897-4.669-2.354-5.864-4.484a5.83 5.83 0 0 1-.896-3.511zm13.408 17.857c-4.258-.225-8.515-1.121-12.4-2.952-1.942-.896-3.81-2.054-5.453-3.511-1.643-1.457-3.062-3.213-3.921-5.268a11.951 11.951 0 0 1-.86-6.537c.188-1.27.598-2.503 1.121-3.624-2.39.672-4.594 1.83-6.498 3.25-.038.299-.075.635-.113.934a12.737 12.737 0 0 0 1.494 7.023c1.12 2.13 2.839 3.998 4.781 5.492 1.98 1.494 4.183 2.69 6.499 3.586 4.668 1.83 9.748 2.578 14.79 2.54 1.456 0 2.913-.111 4.37-.26.037-.225.074-.45.111-.71a45.757 45.757 0 0 1-3.921.037zM31.832 24.1c1.494 1.158 3.175 2.055 4.93 2.765 3.548 1.382 7.433 1.98 11.28 1.905 1.344 0 2.651-.112 3.959-.261 0-.113 0-.225-.038-.3 0-.111-.037-.223-.037-.335a40.8 40.8 0 0 1-3.025 0c-3.026-.187-6.05-.86-8.852-2.167-1.382-.673-2.726-1.495-3.884-2.503-1.158-1.046-2.204-2.316-2.876-3.773-.672-1.457-.934-3.138-.672-4.745.224-1.569.896-3.026 1.792-4.259.075-.112.15-.186.224-.261a19.215 19.215 0 0 0-4.407-.075c-.597.038-1.157.15-1.718.224-.71 1.383-1.195 2.877-1.307 4.371a9.313 9.313 0 0 0 1.046 5.305c.822 1.569 2.091 2.989 3.585 4.11zm15.5 13.412c-5.453-.224-10.906-1.308-15.91-3.587-2.503-1.12-4.893-2.54-7.022-4.37-2.129-1.794-3.959-3.998-5.154-6.575a15.183 15.183 0 0 1-1.42-7.136 20.083 20.083 0 0 0-5.751 15.915c.971 11.02 10.719 19.164 21.737 18.155 7.731-.672 14.043-5.678 16.77-12.402a47.064 47.064 0 0 1-3.25 0zm-4.893-24.656c0 .037 0 .037 0 0-.336.635-.523 1.307-.523 1.942s.187 1.233.523 1.719c.673 1.046 1.868 1.755 3.175 2.166 1.046.337 2.166.449 3.287.449a21.135 21.135 0 0 0-6.462-6.276z" fill="#fff"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M227.405 29.738c-1.383-.747-2.467-1.757-3.215-3.065-.785-1.308-1.159-2.766-1.159-4.374 0-1.607.374-3.065 1.159-4.374.785-1.308 1.869-2.318 3.215-3.065 1.383-.748 2.916-1.122 4.635-1.122 1.72 0 3.253.374 4.599 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.309 1.196 2.767 1.196 4.374 0 1.608-.411 3.066-1.196 4.374-.785 1.308-1.87 2.318-3.215 3.065-1.384.748-2.916 1.122-4.599 1.122-1.719 0-3.252-.374-4.635-1.122zm7.252-2.803c.785-.449 1.383-1.084 1.832-1.87.449-.785.673-1.72.673-2.729 0-1.009-.224-1.944-.673-2.728-.449-.786-1.047-1.421-1.832-1.87-.785-.448-1.682-.673-2.654-.673s-1.869.225-2.654.673c-.785.449-1.383 1.084-1.832 1.87-.449.784-.673 1.72-.673 2.728 0 1.01.224 1.944.673 2.73.449.785 1.047 1.42 1.832 1.869.785.448 1.682.673 2.654.673 1.009 0 1.869-.225 2.654-.673zM76.113 30.56V14.075H72.3v6.504h-7.477v-6.504H61.01V30.56h3.813v-6.767H72.3v6.767h3.813zm17.496 0v-3.066h-8.972v-3.813H92.3V20.73h-7.663V17.14h8.673v-3.065H80.86V30.56H93.61zm20.673-3.103V34h-3.552v-3.402H99.104V34h-3.552l.038-6.542h.673c.972-.037 1.682-.748 2.093-2.168.412-1.42.673-3.44.748-6.056l.187-5.16h12.673v13.384h2.318zm-12.299-2.953c-.262 1.308-.636 2.317-1.159 2.916h7.364V17.14h-5.645l-.074 2.392c-.075 2.018-.262 3.663-.486 4.972zm29.944 1.42c0-1.01-.262-1.832-.785-2.504-.524-.673-1.309-1.16-2.281-1.458a3.881 3.881 0 0 0 1.72-1.458c.411-.636.598-1.346.598-2.169 0-1.345-.523-2.392-1.607-3.14-1.084-.747-2.58-1.121-4.486-1.121h-7.664V30.56h8.112c2.056 0 3.626-.412 4.748-1.234 1.084-.785 1.645-1.944 1.645-3.402zm-7.178-5.01h-3.551v-4.037h3.551c.823 0 1.421.187 1.869.524.412.374.636.86.636 1.495 0 .673-.224 1.16-.636 1.495-.411.337-1.046.524-1.869.524zm.636 2.655c1.794 0 2.691.673 2.691 2.056 0 1.42-.859 2.094-2.691 2.131h-4.187V23.57h4.187zm10.168-9.495h3.776v10.729l7.85-10.73h3.589v16.487h-3.775V19.83l-7.851 10.73h-3.589V14.075zm32.487 9.832h2.392l3.738 6.654h4.412l-4.935-8.636 4.598-7.85h-4.037l-3.739 6.654h-2.467v-6.654h-3.738v6.654h-2.505l-3.701-6.654h-4.037l4.635 7.85-4.934 8.636h4.411l3.701-6.654h2.467v6.654h3.739v-6.654zm12.934-9.832h3.776v10.729l7.851-10.73h3.588v16.487h-3.775V19.83l-7.851 10.73h-3.589V14.075zm30.019 14.729l4.86-8.112.038 9.869h3.551l-.037-16.486h-3.14l-6.094 10.243-6.168-10.243h-3.141V30.56h3.589v-9.683l4.86 7.926h1.682zm33.608-2.094c.785 1.271 1.87 2.28 3.215 3.028 1.346.748 2.879 1.122 4.599 1.084 1.42 0 2.729-.261 3.887-.747 1.159-.524 2.131-1.234 2.916-2.206l-2.467-2.243c-1.121 1.309-2.505 1.944-4.15 1.944-1.009 0-1.944-.224-2.729-.673a4.987 4.987 0 0 1-1.869-1.869c-.448-.785-.673-1.72-.673-2.729 0-1.01.225-1.944.673-2.729a4.987 4.987 0 0 1 1.869-1.87c.785-.448 1.72-.672 2.729-.672 1.645 0 3.029.673 4.15 1.944l2.467-2.243a7.657 7.657 0 0 0-2.916-2.168c-1.158-.486-2.467-.748-3.887-.748-1.72 0-3.253.336-4.599 1.084-1.383.71-2.43 1.72-3.215 3.028-.785 1.309-1.159 2.804-1.159 4.411 0 1.608.374 3.103 1.159 4.374zm30.094-9.532h-5.271V30.56h-3.776V17.178h-5.233v-3.103h14.28v3.103zm17.234 7.626c0-1.757-.523-3.066-1.607-3.963-1.085-.897-2.617-1.346-4.673-1.383h-4.187v-5.42h-3.776v16.485h7.439c2.169 0 3.813-.486 5.01-1.458 1.196-.972 1.794-2.392 1.794-4.261zm-3.85.075c0 .934-.262 1.644-.823 2.13-.561.486-1.346.71-2.318.71h-3.439V22.3h3.439c2.094 0 3.141.86 3.141 2.58zM63.59 35.794a2.99 2.99 0 0 0-2.991 2.991v6.355a2.99 2.99 0 0 0 2.99 2.99h67.291a2.99 2.99 0 0 0 2.991-2.99v-6.355a2.99 2.99 0 0 0-2.991-2.99H63.59zm28.728 7.744c.266.472.65.835 1.14 1.105.477.256 1.033.39 1.643.404a3.29 3.29 0 0 0 1.63-.404c.476-.27.86-.633 1.139-1.105.278-.471.424-.996.424-1.575 0-.58-.146-1.105-.424-1.576a2.923 2.923 0 0 0-1.14-1.105c-.477-.269-1.02-.403-1.63-.403-.609 0-1.152.134-1.642.404-.477.269-.861.633-1.14 1.104-.278.471-.41.996-.41 1.576 0 .579.132 1.104.41 1.575zm4.36-.592c-.16.283-.372.512-.65.673a1.815 1.815 0 0 1-.94.243 1.85 1.85 0 0 1-.941-.243 1.749 1.749 0 0 1-.65-.673 1.996 1.996 0 0 1-.238-.983c0-.364.08-.7.239-.983.159-.283.37-.512.649-.674a1.85 1.85 0 0 1 .94-.242c.345 0 .663.08.941.242.278.162.49.39.65.674.158.282.238.619.238.983 0 .363-.08.7-.239.983zm-28.459-3.69c.384.175.676.417.874.74.2.324.305.7.305 1.145 0 .431-.106.822-.305 1.145-.212.323-.503.579-.874.74-.384.176-.835.256-1.351.256h-1.18v1.644h-1.35V39h2.53c.516 0 .967.08 1.351.256zm-.49 2.653c.212-.175.318-.431.318-.754 0-.337-.106-.593-.318-.768-.212-.175-.517-.27-.928-.27h-1.1v2.061h1.1c.398 0 .716-.094.928-.27zm2.411-2.91h1.338v3.866L74.26 39h1.272v5.939h-1.338v-3.865l-2.782 3.865H70.14v-5.94zm7.843 4.66H80.7l.517 1.28h1.418l-2.61-5.94h-1.338l-2.61 5.94h1.39l.517-1.28zm1.352-3.313l.927 2.277h-1.855l.928-2.276zM90.635 39v5.939h-1.35v-2.438h-2.65v2.438h-1.352v-5.94h1.352v2.344h2.65V39h1.35zm13.78 3.367c.185.242.278.538.278.902 0 .525-.199.943-.583 1.226-.398.296-.954.444-1.683.444h-2.875v-5.94h2.716c.676 0 1.206.135 1.59.405.384.27.57.646.57 1.131 0 .296-.066.552-.212.781a1.386 1.386 0 0 1-.61.525c.345.108.61.283.809.526zm-3.525-.916h1.259c.292 0 .517-.068.663-.189.145-.12.225-.296.225-.538a.699.699 0 0 0-.225-.54c-.159-.12-.371-.188-.663-.188h-1.259v1.455zm2.438 1.697c0-.498-.318-.74-.954-.74h-1.484v1.508h1.484c.636 0 .954-.256.954-.768zm2.65.39c.265.472.649.835 1.139 1.105.491.256 1.034.39 1.643.404.596 0 1.153-.135 1.63-.404.477-.27.861-.633 1.139-1.105a3.05 3.05 0 0 0 .424-1.575c0-.58-.146-1.105-.424-1.576a2.922 2.922 0 0 0-1.139-1.105c-.477-.269-1.02-.403-1.63-.403-.609 0-1.152.134-1.643.404-.477.269-.861.633-1.139 1.104a3.04 3.04 0 0 0-.411 1.576c0 .579.133 1.104.411 1.575zm4.359-.592a1.75 1.75 0 0 1-.649.673 1.818 1.818 0 0 1-.941.243c-.344 0-.662-.081-.941-.243a1.75 1.75 0 0 1-.649-.673 1.996 1.996 0 0 1-.238-.983c0-.364.079-.7.238-.983.159-.283.371-.512.649-.674.279-.161.597-.242.941-.242s.662.08.941.242c.278.162.49.39.649.674.159.282.238.619.238.983 0 .363-.079.7-.238.983zm4.014 1.697a3.079 3.079 0 0 1-1.139-1.091c-.278-.458-.411-.997-.411-1.59 0-.592.133-1.117.411-1.575a2.8 2.8 0 0 1 1.139-1.091c.477-.27 1.02-.39 1.63-.39a3.5 3.5 0 0 1 1.378.269c.41.175.755.444 1.033.781l-.874.808c-.398-.458-.888-.7-1.471-.7-.358 0-.689.08-.967.242-.278.162-.504.39-.663.674-.159.282-.238.619-.238.983 0 .363.079.7.238.983.159.283.385.512.663.673.278.162.609.243.967.243.583 0 1.073-.23 1.471-.7l.874.807c-.278.35-.623.606-1.033.795a3.5 3.5 0 0 1-1.378.27c-.61 0-1.14-.122-1.63-.391zm7.658-4.525h1.868V39h-5.061v1.118h1.855v4.821h1.338v-4.821zM124.937 39h1.338v3.865L129.057 39h1.272v5.939h-1.338v-3.865l-2.782 3.865h-1.272v-5.94z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 259 60" fill="none" id="logo-ria_logo_black_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.875c.074-1.231.485-2.463 1.157-3.582.187-.299.374-.56.56-.859 1.681.373 3.287.933 4.818 1.717-.523.709-.933 1.53-1.083 2.5-.15.97-.037 2.015.336 2.948a6.997 6.997 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.681.821 3.474 1.306 5.304 1.455.373.038.747.038 1.12.038.075.224.187.485.262.746-.71.075-1.382.15-2.092.15-2.614.074-5.266-.262-7.694-1.12-2.427-.896-4.668-2.351-5.863-4.478a5.82 5.82 0 0 1-.896-3.508zm13.407 17.8c-4.257-.224-8.515-1.12-12.4-2.948-1.941-.895-3.809-2.052-5.452-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.926 11.926 0 0 1-.86-6.53c.187-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.78 5.485 1.98 1.493 4.184 2.687 6.5 3.583 4.668 1.828 9.747 2.574 14.79 2.537 1.456 0 2.912-.112 4.369-.261.037-.224.075-.448.112-.71a27.526 27.526 0 0 1-3.922.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.432 1.978 11.28 1.903 1.344 0 2.65-.112 3.958-.261 0-.112 0-.224-.037-.299 0-.112-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.859-8.851-2.165-1.382-.672-2.727-1.492-3.885-2.5-1.157-1.045-2.203-2.314-2.875-3.769-.673-1.455-.934-3.135-.673-4.74.224-1.567.897-3.022 1.793-4.253.075-.112.15-.187.224-.262-1.419-.224-2.876-.26-4.37-.149-.597.037-1.157.15-1.718.224-.71 1.38-1.195 2.873-1.307 4.366a9.295 9.295 0 0 0 1.046 5.3c.784 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.73-.672 14.042-5.672 16.769-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.672 1.045 1.867 1.754 3.175 2.165 1.045.335 2.166.447 3.286.447a21.124 21.124 0 0 0-6.461-6.269z" fill="#000"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M142.766 37.463c-1.383-.748-2.467-1.757-3.215-3.065-.785-1.309-1.158-2.767-1.158-4.374 0-1.608.373-3.066 1.158-4.374.785-1.308 1.87-2.318 3.215-3.065 1.384-.748 2.916-1.122 4.636-1.122 1.72 0 3.252.374 4.598 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.308 1.196 2.766 1.196 4.374 0 1.607-.411 3.065-1.196 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.346.748-2.916 1.122-4.598 1.122-1.72-.038-3.29-.412-4.636-1.122zm7.253-2.841c.785-.449 1.383-1.084 1.831-1.87.449-.784.673-1.719.673-2.728 0-1.01-.224-1.944-.673-2.73-.448-.784-1.046-1.42-1.831-1.868-.785-.449-1.683-.673-2.655-.673-.971 0-1.869.224-2.654.673-.785.448-1.383 1.084-1.831 1.869-.449.785-.673 1.72-.673 2.729 0 1.01.224 1.944.673 2.729.448.785 1.046 1.42 1.831 1.869.785.449 1.683.673 2.654.673 1.01 0 1.87-.224 2.655-.673zm-76-10.056c-.561-.897-1.384-1.57-2.468-2.056s-2.355-.71-3.813-.71h-7.14v16.448h3.813v-4.56h3.327c1.458 0 2.73-.225 3.813-.71a5.56 5.56 0 0 0 2.468-2.057c.56-.897.86-1.981.86-3.177 0-1.234-.3-2.28-.86-3.178zm-2.954 3.215c0 .897-.299 1.607-.897 2.093-.598.486-1.495.748-2.617.748H64.45v-5.72h3.102c1.16 0 2.02.262 2.617.748.598.486.897 1.196.897 2.13zm9.683-5.981h-3.776v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.85 10.729v-10.73zm26.018 12.934h-7.663l-1.458 3.551H93.72l7.364-16.485h3.776l7.364 16.485h-4l-1.458-3.55zm-1.233-2.878l-2.617-6.318-2.617 6.318h5.234zm29.271 6.43V21.8h-3.813v6.504h-7.477V21.8h-3.813v16.485h3.813V31.52h7.477v6.767h3.813zm39.663-4.636c0-1.01-.261-1.832-.785-2.505-.561-.673-1.308-1.159-2.28-1.458a3.878 3.878 0 0 0 1.719-1.457c.412-.636.599-1.346.599-2.169 0-1.346-.524-2.392-1.608-3.14-1.084-.748-2.579-1.121-4.486-1.121h-7.663v16.485h8.112c2.056 0 3.626-.41 4.747-1.233 1.085-.785 1.645-1.944 1.645-3.402zm-7.177-5.047h-3.552v-4.037h3.552c.822 0 1.42.187 1.869.523.411.374.635.86.635 1.496 0 .672-.224 1.159-.635 1.495-.411.336-1.047.523-1.869.523zm.635 2.654c1.795 0 2.692.673 2.692 2.057 0 1.42-.897 2.13-2.692 2.13h-4.187v-4.187h4.187zm13.383 6.206c-1.383-.748-2.467-1.757-3.215-3.065-.785-1.309-1.158-2.767-1.158-4.374 0-1.608.373-3.066 1.158-4.374.786-1.308 1.87-2.318 3.215-3.065 1.384-.748 2.916-1.122 4.636-1.122 1.72 0 3.252.374 4.598 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.308 1.196 2.766 1.196 4.374 0 1.607-.411 3.065-1.196 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.346.748-2.916 1.122-4.598 1.122-1.72-.038-3.252-.412-4.636-1.122zm7.253-2.841c.785-.449 1.383-1.084 1.832-1.87.448-.784.672-1.719.672-2.728 0-1.01-.224-1.944-.672-2.73-.449-.784-1.047-1.42-1.832-1.868-.785-.449-1.682-.673-2.654-.673s-1.87.224-2.655.673c-.785.448-1.383 1.084-1.831 1.869-.449.785-.673 1.72-.673 2.729 0 1.01.224 1.944.673 2.729.448.785 1.046 1.42 1.831 1.869.785.449 1.683.673 2.655.673 1.009 0 1.869-.224 2.654-.673zm9.944-.187c.785 1.271 1.869 2.28 3.215 3.028 1.383.748 2.878 1.084 4.598 1.084 1.42 0 2.729-.261 3.888-.747 1.158-.524 2.13-1.234 2.915-2.206l-2.467-2.243c-1.121 1.308-2.504 1.944-4.149 1.944-1.01 0-1.944-.224-2.729-.673a4.98 4.98 0 0 1-1.869-1.87c-.449-.784-.673-1.719-.673-2.728 0-1.01.224-1.944.673-2.73a4.98 4.98 0 0 1 1.869-1.868c.785-.449 1.719-.673 2.729-.673 1.645 0 3.028.673 4.149 1.944l2.467-2.243a7.661 7.661 0 0 0-2.915-2.169c-1.159-.485-2.468-.747-3.888-.747-1.72 0-3.253.336-4.598 1.084-1.384.71-2.43 1.72-3.215 3.028-.785 1.271-1.159 2.729-1.159 4.374 0 1.645.374 3.14 1.159 4.411zm30.093-9.533h-5.271v13.383h-3.776V24.902h-5.233V21.8h14.28v3.102zm6.767-3.102h-3.776v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.85 10.729v-10.73z" fill="#000"></path>
            </symbol>
            <symbol viewbox="0 0 259 60" fill="none" id="logo-ria_logo_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.875c.074-1.231.485-2.463 1.157-3.582.187-.299.374-.56.56-.859 1.681.373 3.287.933 4.818 1.717-.523.709-.933 1.53-1.083 2.5-.15.97-.037 2.015.336 2.948a6.997 6.997 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.681.821 3.474 1.306 5.304 1.455.373.038.747.038 1.12.038.075.224.187.485.262.746-.71.075-1.382.15-2.092.15-2.614.074-5.266-.262-7.694-1.12-2.427-.896-4.668-2.351-5.863-4.478a5.82 5.82 0 0 1-.896-3.508zm13.407 17.8c-4.257-.224-8.515-1.12-12.4-2.948-1.941-.895-3.809-2.052-5.452-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.926 11.926 0 0 1-.86-6.53c.187-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.78 5.485 1.98 1.493 4.184 2.687 6.5 3.583 4.668 1.828 9.747 2.574 14.79 2.537 1.456 0 2.912-.112 4.369-.261.037-.224.075-.448.112-.71a27.526 27.526 0 0 1-3.922.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.432 1.978 11.28 1.903 1.344 0 2.65-.112 3.958-.261 0-.112 0-.224-.037-.299 0-.112-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.859-8.851-2.165-1.382-.672-2.727-1.492-3.885-2.5-1.157-1.045-2.203-2.314-2.875-3.769-.673-1.455-.934-3.135-.673-4.74.224-1.567.897-3.022 1.793-4.253.075-.112.15-.187.224-.262-1.419-.224-2.876-.26-4.37-.149-.597.037-1.157.15-1.718.224-.71 1.38-1.195 2.873-1.307 4.366a9.295 9.295 0 0 0 1.046 5.3c.784 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.73-.672 14.042-5.672 16.769-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.672 1.045 1.867 1.754 3.175 2.165 1.045.335 2.166.447 3.286.447a21.124 21.124 0 0 0-6.461-6.269z" fill="#1345AE"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M142.766 37.463c-1.383-.748-2.467-1.757-3.215-3.065-.785-1.309-1.158-2.767-1.158-4.374 0-1.608.373-3.066 1.158-4.374.785-1.308 1.87-2.318 3.215-3.065 1.384-.748 2.916-1.122 4.636-1.122 1.72 0 3.252.374 4.598 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.308 1.196 2.766 1.196 4.374 0 1.607-.411 3.065-1.196 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.346.748-2.916 1.122-4.598 1.122-1.72-.038-3.29-.412-4.636-1.122zm7.253-2.841c.785-.449 1.383-1.084 1.831-1.87.449-.784.673-1.719.673-2.728 0-1.01-.224-1.944-.673-2.73-.448-.784-1.046-1.42-1.831-1.868-.785-.449-1.683-.673-2.655-.673-.971 0-1.869.224-2.654.673-.785.448-1.383 1.084-1.831 1.869-.449.785-.673 1.72-.673 2.729 0 1.01.224 1.944.673 2.729.448.785 1.046 1.42 1.831 1.869.785.449 1.683.673 2.654.673 1.01 0 1.87-.224 2.655-.673zm-76-10.056c-.561-.897-1.384-1.57-2.468-2.056s-2.355-.71-3.813-.71h-7.14v16.448h3.813v-4.56h3.327c1.458 0 2.73-.225 3.813-.71a5.56 5.56 0 0 0 2.468-2.057c.56-.897.86-1.981.86-3.177 0-1.234-.3-2.28-.86-3.178zm-2.954 3.215c0 .897-.299 1.607-.897 2.093-.598.486-1.495.748-2.617.748H64.45v-5.72h3.102c1.16 0 2.02.262 2.617.748.598.486.897 1.196.897 2.13zm9.683-5.981h-3.776v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.85 10.729v-10.73zm26.018 12.934h-7.663l-1.458 3.551H93.72l7.364-16.485h3.776l7.364 16.485h-4l-1.458-3.55zm-1.233-2.878l-2.617-6.318-2.617 6.318h5.234zm29.271 6.43V21.8h-3.813v6.504h-7.477V21.8h-3.813v16.485h3.813V31.52h7.477v6.767h3.813zm39.663-4.636c0-1.01-.261-1.832-.785-2.505-.561-.673-1.308-1.159-2.28-1.458a3.878 3.878 0 0 0 1.719-1.457c.412-.636.599-1.346.599-2.169 0-1.346-.524-2.392-1.608-3.14-1.084-.748-2.579-1.121-4.486-1.121h-7.663v16.485h8.112c2.056 0 3.626-.41 4.747-1.233 1.085-.785 1.645-1.944 1.645-3.402zm-7.177-5.047h-3.552v-4.037h3.552c.822 0 1.42.187 1.869.523.411.374.635.86.635 1.496 0 .672-.224 1.159-.635 1.495-.411.336-1.047.523-1.869.523zm.635 2.654c1.795 0 2.692.673 2.692 2.057 0 1.42-.897 2.13-2.692 2.13h-4.187v-4.187h4.187zm13.383 6.206c-1.383-.748-2.467-1.757-3.215-3.065-.785-1.309-1.158-2.767-1.158-4.374 0-1.608.373-3.066 1.158-4.374.786-1.308 1.87-2.318 3.215-3.065 1.384-.748 2.916-1.122 4.636-1.122 1.72 0 3.252.374 4.598 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.308 1.196 2.766 1.196 4.374 0 1.607-.411 3.065-1.196 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.346.748-2.916 1.122-4.598 1.122-1.72-.038-3.252-.412-4.636-1.122zm7.253-2.841c.785-.449 1.383-1.084 1.832-1.87.448-.784.672-1.719.672-2.728 0-1.01-.224-1.944-.672-2.73-.449-.784-1.047-1.42-1.832-1.868-.785-.449-1.682-.673-2.654-.673s-1.87.224-2.655.673c-.785.448-1.383 1.084-1.831 1.869-.449.785-.673 1.72-.673 2.729 0 1.01.224 1.944.673 2.729.448.785 1.046 1.42 1.831 1.869.785.449 1.683.673 2.655.673 1.009 0 1.869-.224 2.654-.673zm9.944-.187c.785 1.271 1.869 2.28 3.215 3.028 1.383.748 2.878 1.084 4.598 1.084 1.42 0 2.729-.261 3.888-.747 1.158-.524 2.13-1.234 2.915-2.206l-2.467-2.243c-1.121 1.308-2.504 1.944-4.149 1.944-1.01 0-1.944-.224-2.729-.673a4.98 4.98 0 0 1-1.869-1.87c-.449-.784-.673-1.719-.673-2.728 0-1.01.224-1.944.673-2.73a4.98 4.98 0 0 1 1.869-1.868c.785-.449 1.719-.673 2.729-.673 1.645 0 3.028.673 4.149 1.944l2.467-2.243a7.661 7.661 0 0 0-2.915-2.169c-1.159-.485-2.468-.747-3.888-.747-1.72 0-3.253.336-4.598 1.084-1.384.71-2.43 1.72-3.215 3.028-.785 1.271-1.159 2.729-1.159 4.374 0 1.645.374 3.14 1.159 4.411zm30.093-9.533h-5.271v13.383h-3.776V24.902h-5.233V21.8h14.28v3.102zm6.767-3.102h-3.776v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.85 10.729v-10.73z" fill="#003057"></path>
            </symbol>
            <symbol viewbox="0 0 164 40" fill="none" id="logo-ria_logo_v_black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.71 4.697c-.523-.823-1.27-1.42-2.243-1.87-.972-.448-2.093-.635-3.439-.635h-6.43v14.804h3.44V12.92h2.99c1.346 0 2.467-.187 3.44-.635.971-.45 1.719-1.047 2.242-1.87.524-.785.785-1.757.785-2.84 0-1.122-.261-2.057-.785-2.88zm-2.691 2.84c0 .823-.3 1.459-.823 1.907-.523.449-1.308.673-2.355.673h-2.804V4.958h2.804c1.047 0 1.832.225 2.355.673.561.449.823 1.084.823 1.907zm8.71-5.345h-3.402v14.804h3.252l7.066-9.645v9.682h3.402V2.193h-3.215l-7.103 9.681V2.192zm16.523 11.626l-1.308 3.178H78.43l6.617-14.804h3.402l6.616 14.841h-3.588l-1.346-3.215h-6.879zm5.795-2.58l-2.355-5.681-2.355 5.682h4.71zM62.243 37.632v-14.84h-3.44v5.831h-6.728V22.79h-3.44v14.841h3.44v-6.093h6.729v6.093h3.439zm7.14-.747c-1.233-.673-2.205-1.57-2.916-2.73-.71-1.158-1.046-2.467-1.046-3.925 0-1.457.336-2.766 1.046-3.925a7.325 7.325 0 0 1 2.916-2.729c1.234-.673 2.617-1.01 4.15-1.01 1.532 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.915 2.73.71 1.158 1.047 2.466 1.047 3.925 0 1.457-.337 2.766-1.047 3.925a7.326 7.326 0 0 1-2.916 2.729c-1.233.673-2.617 1.009-4.15 1.009-1.532 0-2.915-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.683-1.682c.41-.71.598-1.533.598-2.468 0-.934-.187-1.72-.599-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.495-.598-2.392-.598-.86 0-1.683.187-2.393.598a4.54 4.54 0 0 0-1.682 1.682c-.411.71-.598 1.533-.598 2.468 0 .934.187 1.72.598 2.467a4.54 4.54 0 0 0 1.682 1.682c.71.411 1.495.598 2.393.598.897 0 1.682-.224 2.392-.598zm21.981-.935c0-.897-.224-1.644-.71-2.243-.486-.598-1.159-1.046-2.056-1.308a3.737 3.737 0 0 0 1.533-1.308c.374-.561.56-1.197.56-1.944 0-1.234-.485-2.168-1.457-2.841-.972-.673-2.318-1.01-4.038-1.01h-6.916v14.804h7.328c1.831 0 3.252-.337 4.261-1.084 1.01-.71 1.495-1.757 1.495-3.066zm-6.43-4.486h-3.252V25.37h3.215c.748 0 1.309.15 1.683.448.41.337.598.785.598 1.346 0 .598-.187 1.047-.561 1.346-.374.299-.935.448-1.682.448zM92 31.352c1.608 0 2.43.598 2.43 1.832 0 1.27-.785 1.906-2.43 1.906h-3.776v-3.738H92zm12.075 5.533c-1.234-.673-2.206-1.57-2.916-2.73-.71-1.158-1.047-2.467-1.047-3.925 0-1.457.337-2.766 1.047-3.925a7.321 7.321 0 0 1 2.916-2.729c1.233-.673 2.617-1.01 4.149-1.01 1.533 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.916 2.73.71 1.158 1.046 2.466 1.046 3.925 0 1.457-.336 2.766-1.046 3.925a7.335 7.335 0 0 1-2.916 2.729c-1.234.673-2.617 1.009-4.15 1.009-1.532 0-2.916-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.682-1.682c.411-.71.598-1.533.598-2.468 0-.934-.187-1.72-.598-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.496-.598-2.393-.598-.86 0-1.682.187-2.392.598a4.532 4.532 0 0 0-1.682 1.682c-.412.71-.599 1.533-.599 2.468 0 .934.187 1.72.599 2.467.411.71.971 1.27 1.682 1.682.71.411 1.495.598 2.392.598.897 0 1.683-.224 2.393-.598zm8.972-.187a7.492 7.492 0 0 0 2.878 2.73c1.197.635 2.58.971 4.075.971 1.308 0 2.467-.224 3.514-.673a6.86 6.86 0 0 0 2.617-1.981l-2.206-2.019c-1.009 1.159-2.243 1.757-3.738 1.757-.935 0-1.757-.187-2.467-.598a4.543 4.543 0 0 1-1.683-1.682c-.411-.748-.598-1.533-.598-2.468 0-.934.187-1.756.598-2.467a4.542 4.542 0 0 1 1.683-1.682c.747-.411 1.532-.598 2.467-.598 1.495 0 2.729.56 3.738 1.72l2.206-2.02a6.77 6.77 0 0 0-2.617-1.943c-1.047-.449-2.206-.673-3.477-.673-1.532 0-2.878.299-4.112.972-1.233.635-2.168 1.57-2.878 2.729s-1.047 2.505-1.047 3.963c0 1.495.337 2.803 1.047 3.962zm27.065-8.598h-4.747v12.037h-3.402V25.594h-4.711V22.79h12.86v2.804zm6.094-2.804h-3.402v14.841h3.252l7.066-9.645v9.645h3.401v-14.84h-3.215l-7.102 9.681V22.79z" fill="#000"></path>
                <path d="M22.558 4.875c.075-1.231.486-2.463 1.158-3.582.187-.299.374-.56.56-.859 1.681.373 3.287.933 4.818 1.717-.523.709-.933 1.53-1.083 2.5-.15.97-.037 2.015.336 2.948a6.998 6.998 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.681.821 3.474 1.306 5.304 1.455.373.038.747.038 1.12.038.075.224.187.485.262.746-.71.075-1.382.15-2.092.15-2.614.074-5.266-.262-7.694-1.12-2.427-.896-4.668-2.351-5.863-4.478a5.82 5.82 0 0 1-.896-3.508zm13.408 17.8c-4.257-.224-8.515-1.12-12.4-2.948-1.941-.895-3.809-2.052-5.452-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.926 11.926 0 0 1-.86-6.53c.187-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.499 3.246c-.037.299-.074.634-.112.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.78 5.485 1.98 1.493 4.184 2.687 6.5 3.583 4.668 1.828 9.747 2.574 14.79 2.537 1.456 0 2.912-.112 4.369-.261.037-.224.075-.448.112-.71a27.526 27.526 0 0 1-3.922.038zM19.832 14.13c1.494 1.156 3.175 2.052 4.93 2.761 3.548 1.38 7.432 1.978 11.28 1.903 1.344 0 2.65-.112 3.958-.261 0-.112 0-.224-.037-.299 0-.112-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.859-8.851-2.165-1.382-.671-2.727-1.492-3.884-2.5-1.158-1.045-2.204-2.314-2.876-3.769-.673-1.455-.934-3.135-.673-4.74.224-1.567.897-3.022 1.793-4.253.075-.112.15-.187.224-.262-1.419-.224-2.876-.26-4.37-.149-.597.037-1.157.15-1.718.224-.71 1.38-1.195 2.873-1.307 4.366a9.295 9.295 0 0 0 1.046 5.3c.784 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.15 15.15 0 0 1-1.42-7.128C1.794 9.95-.447 15.66.076 21.78c.971 11.008 10.719 19.143 21.736 18.136 7.732-.672 14.043-5.672 16.77-12.39a47.19 47.19 0 0 1-3.25 0zM30.438 2.897s0 .038 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.672 1.045 1.867 1.754 3.175 2.165 1.045.336 2.166.447 3.286.447a21.125 21.125 0 0 0-6.461-6.269z" fill="#000"></path>
            </symbol>
            <symbol viewbox="0 0 186 60" fill="none" id="logo-ria_logo_v_black_m" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.71 14.697c-.523-.823-1.27-1.42-2.243-1.87-.972-.448-2.093-.635-3.439-.635h-6.43v14.804h3.44V22.92h2.99c1.346 0 2.467-.187 3.44-.636.971-.448 1.719-1.046 2.242-1.869.524-.785.785-1.757.785-2.84 0-1.122-.261-2.057-.785-2.88zm-2.691 2.84c0 .823-.3 1.459-.823 1.907-.523.449-1.308.673-2.355.673h-2.804v-5.159h2.804c1.047 0 1.832.225 2.355.673.561.449.823 1.084.823 1.907zm8.71-5.345h-3.402v14.804h3.252l7.066-9.645v9.682h3.402v-14.84h-3.215l-7.103 9.681v-9.682zm16.523 11.626l-1.308 3.178H90.43l6.617-14.804h3.402l6.616 14.841h-3.588l-1.346-3.215h-6.879zm5.795-2.58l-2.355-5.681-2.355 5.682h4.71zM74.243 47.632v-14.84h-3.44v5.831h-6.728V32.79h-3.44v14.841h3.44v-6.093h6.729v6.093h3.439zm7.14-.747c-1.233-.673-2.205-1.57-2.916-2.73-.71-1.158-1.046-2.467-1.046-3.925 0-1.457.336-2.766 1.046-3.925a7.325 7.325 0 0 1 2.916-2.729c1.234-.673 2.617-1.01 4.15-1.01 1.532 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.915 2.73.71 1.158 1.047 2.467 1.047 3.925 0 1.457-.337 2.766-1.047 3.925a7.326 7.326 0 0 1-2.916 2.729c-1.233.673-2.617 1.009-4.15 1.009-1.532 0-2.915-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.683-1.682c.41-.71.598-1.533.598-2.468 0-.934-.187-1.72-.599-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.495-.598-2.392-.598-.86 0-1.683.187-2.393.598a4.54 4.54 0 0 0-1.682 1.682c-.411.71-.598 1.533-.598 2.468 0 .934.187 1.72.598 2.467a4.54 4.54 0 0 0 1.682 1.682c.71.411 1.495.598 2.393.598.897 0 1.682-.224 2.392-.598zm21.982-.935c0-.897-.225-1.644-.711-2.243-.486-.598-1.159-1.046-2.056-1.308a3.736 3.736 0 0 0 1.533-1.308c.374-.561.561-1.197.561-1.944 0-1.234-.486-2.169-1.458-2.841-.972-.673-2.318-1.01-4.038-1.01h-6.916v14.804h7.328c1.831 0 3.252-.337 4.261-1.084 1.01-.71 1.496-1.757 1.496-3.066zm-6.43-4.486H100.224V35.37h3.215c.748 0 1.309.15 1.682.448.412.337.599.785.599 1.346 0 .598-.187 1.047-.561 1.346-.374.299-.935.449-1.682.449zm.523 2.393c1.607 0 2.43.598 2.43 1.832 0 1.27-.785 1.906-2.43 1.906h-3.776v-3.738H104zm12.075 5.533c-1.234-.673-2.206-1.57-2.916-2.73-.71-1.158-1.047-2.467-1.047-3.925 0-1.457.337-2.766 1.047-3.925a7.321 7.321 0 0 1 2.916-2.729c1.233-.673 2.617-1.01 4.149-1.01 1.533 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.916 2.73.71 1.158 1.046 2.467 1.046 3.925 0 1.457-.336 2.766-1.046 3.925a7.335 7.335 0 0 1-2.916 2.729c-1.234.673-2.617 1.009-4.15 1.009-1.532 0-2.916-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.682-1.682c.411-.71.598-1.533.598-2.468 0-.934-.187-1.72-.598-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.496-.598-2.393-.598-.86 0-1.682.187-2.392.598a4.532 4.532 0 0 0-1.682 1.682c-.412.71-.599 1.533-.599 2.468 0 .934.187 1.72.599 2.467.411.71.971 1.27 1.682 1.682.71.411 1.495.598 2.392.598.897 0 1.683-.224 2.393-.598zm8.972-.187a7.492 7.492 0 0 0 2.878 2.73c1.197.635 2.58.971 4.075.971 1.308 0 2.467-.224 3.514-.673a6.86 6.86 0 0 0 2.617-1.981l-2.206-2.019c-1.009 1.159-2.243 1.757-3.738 1.757-.935 0-1.757-.187-2.467-.598a4.543 4.543 0 0 1-1.683-1.682c-.411-.748-.598-1.533-.598-2.468 0-.934.187-1.757.598-2.467a4.542 4.542 0 0 1 1.683-1.682c.747-.411 1.532-.598 2.467-.598 1.495 0 2.729.56 3.738 1.72l2.206-2.02a6.77 6.77 0 0 0-2.617-1.943c-1.047-.449-2.206-.673-3.477-.673-1.532 0-2.878.299-4.112.972-1.233.635-2.168 1.57-2.878 2.729s-1.047 2.505-1.047 3.962c0 1.496.337 2.804 1.047 3.963zm27.065-8.598h-4.747v12.037h-3.402V35.594h-4.711V32.79h12.86v2.804zm6.094-2.804h-3.402v14.841h3.252l7.066-9.645v9.645h3.401v-14.84h-3.215l-7.102 9.681V32.79z" fill="#000"></path>
                <path d="M34.559 14.875c.074-1.231.485-2.463 1.157-3.582.187-.299.374-.56.56-.859 1.681.373 3.287.933 4.818 1.717-.523.709-.933 1.53-1.083 2.5-.15.97-.037 2.015.336 2.948a6.997 6.997 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.681.821 3.474 1.306 5.304 1.455.373.038.747.038 1.12.038.075.224.187.485.262.746-.71.075-1.382.15-2.092.15-2.614.074-5.266-.262-7.694-1.12-2.427-.896-4.668-2.351-5.863-4.478a5.82 5.82 0 0 1-.896-3.508zm13.407 17.8c-4.257-.224-8.515-1.12-12.4-2.948-1.941-.895-3.809-2.052-5.452-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.926 11.926 0 0 1-.86-6.53c.187-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.78 5.485 1.98 1.493 4.184 2.687 6.5 3.583 4.668 1.828 9.747 2.574 14.79 2.537 1.456 0 2.912-.112 4.369-.261.037-.224.075-.448.112-.71a27.526 27.526 0 0 1-3.922.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.432 1.978 11.28 1.903 1.344 0 2.65-.112 3.958-.261 0-.112 0-.224-.037-.299 0-.112-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.859-8.851-2.165-1.382-.672-2.727-1.492-3.885-2.5-1.157-1.045-2.203-2.314-2.875-3.769-.673-1.455-.934-3.135-.673-4.74.224-1.567.897-3.022 1.793-4.253.075-.112.15-.187.224-.262-1.419-.224-2.876-.26-4.37-.149-.597.037-1.157.15-1.718.224-.71 1.38-1.195 2.873-1.307 4.366a9.295 9.295 0 0 0 1.046 5.3c.784 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.73-.672 14.042-5.672 16.769-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.672 1.045 1.867 1.754 3.175 2.165 1.045.335 2.166.447 3.286.447a21.124 21.124 0 0 0-6.461-6.269z" fill="#000"></path>
            </symbol>
            <symbol viewbox="0 0 186 60" fill="none" id="logo-ria_logo_v_m" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.71 14.697c-.523-.823-1.27-1.42-2.243-1.87-.972-.448-2.093-.635-3.439-.635h-6.43v14.804h3.44V22.92h2.99c1.346 0 2.467-.187 3.44-.636.971-.448 1.719-1.046 2.242-1.869.524-.785.785-1.757.785-2.84 0-1.122-.261-2.057-.785-2.88zm-2.691 2.84c0 .823-.3 1.459-.823 1.907-.523.449-1.308.673-2.355.673h-2.804v-5.159h2.804c1.047 0 1.832.225 2.355.673.561.449.823 1.084.823 1.907zm8.71-5.345h-3.402v14.804h3.252l7.066-9.645v9.682h3.402v-14.84h-3.215l-7.103 9.681v-9.682zm16.523 11.626l-1.308 3.178H90.43l6.617-14.804h3.402l6.616 14.841h-3.588l-1.346-3.215h-6.879zm5.795-2.58l-2.355-5.681-2.355 5.682h4.71zM74.243 47.632v-14.84h-3.44v5.831h-6.728V32.79h-3.44v14.841h3.44v-6.093h6.729v6.093h3.439zm7.14-.747c-1.233-.673-2.205-1.57-2.916-2.73-.71-1.158-1.046-2.467-1.046-3.925 0-1.457.336-2.766 1.046-3.925a7.325 7.325 0 0 1 2.916-2.729c1.234-.673 2.617-1.01 4.15-1.01 1.532 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.915 2.73.71 1.158 1.047 2.467 1.047 3.925 0 1.457-.337 2.766-1.047 3.925a7.326 7.326 0 0 1-2.916 2.729c-1.233.673-2.617 1.009-4.15 1.009-1.532 0-2.915-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.683-1.682c.41-.71.598-1.533.598-2.468 0-.934-.187-1.72-.599-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.495-.598-2.392-.598-.86 0-1.683.187-2.393.598a4.54 4.54 0 0 0-1.682 1.682c-.411.71-.598 1.533-.598 2.468 0 .934.187 1.72.598 2.467a4.54 4.54 0 0 0 1.682 1.682c.71.411 1.495.598 2.393.598.897 0 1.682-.224 2.392-.598zm21.982-.935c0-.897-.225-1.644-.711-2.243-.486-.598-1.159-1.046-2.056-1.308a3.736 3.736 0 0 0 1.533-1.308c.374-.561.561-1.197.561-1.944 0-1.234-.486-2.169-1.458-2.841-.972-.673-2.318-1.01-4.038-1.01h-6.916v14.804h7.328c1.831 0 3.252-.337 4.261-1.084 1.01-.71 1.496-1.757 1.496-3.066zm-6.43-4.486H100.224V35.37h3.215c.748 0 1.309.15 1.682.448.412.337.599.785.599 1.346 0 .598-.187 1.047-.561 1.346-.374.299-.935.449-1.682.449zm.523 2.393c1.607 0 2.43.598 2.43 1.832 0 1.27-.785 1.906-2.43 1.906h-3.776v-3.738H104zm12.075 5.533c-1.234-.673-2.206-1.57-2.916-2.73-.71-1.158-1.047-2.467-1.047-3.925 0-1.457.337-2.766 1.047-3.925a7.321 7.321 0 0 1 2.916-2.729c1.233-.673 2.617-1.01 4.149-1.01 1.533 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.916 2.73.71 1.158 1.046 2.467 1.046 3.925 0 1.457-.336 2.766-1.046 3.925a7.335 7.335 0 0 1-2.916 2.729c-1.234.673-2.617 1.009-4.15 1.009-1.532 0-2.916-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.682-1.682c.411-.71.598-1.533.598-2.468 0-.934-.187-1.72-.598-2.467a4.54 4.54 0 0 0-1.682-1.682c-.71-.411-1.496-.598-2.393-.598-.86 0-1.682.187-2.392.598a4.532 4.532 0 0 0-1.682 1.682c-.412.71-.599 1.533-.599 2.468 0 .934.187 1.72.599 2.467.411.71.971 1.27 1.682 1.682.71.411 1.495.598 2.392.598.897 0 1.683-.224 2.393-.598zm8.972-.187a7.492 7.492 0 0 0 2.878 2.73c1.197.635 2.58.971 4.075.971 1.308 0 2.467-.224 3.514-.673a6.86 6.86 0 0 0 2.617-1.981l-2.206-2.019c-1.009 1.159-2.243 1.757-3.738 1.757-.935 0-1.757-.187-2.467-.598a4.543 4.543 0 0 1-1.683-1.682c-.411-.748-.598-1.533-.598-2.468 0-.934.187-1.757.598-2.467a4.542 4.542 0 0 1 1.683-1.682c.747-.411 1.532-.598 2.467-.598 1.495 0 2.729.56 3.738 1.72l2.206-2.02a6.77 6.77 0 0 0-2.617-1.943c-1.047-.449-2.206-.673-3.477-.673-1.532 0-2.878.299-4.112.972-1.233.635-2.168 1.57-2.878 2.729s-1.047 2.505-1.047 3.962c0 1.496.337 2.804 1.047 3.963zm27.065-8.598h-4.747v12.037h-3.402V35.594h-4.711V32.79h12.86v2.804zm6.094-2.804h-3.402v14.841h3.252l7.066-9.645v9.645h3.401v-14.84h-3.215l-7.102 9.681V32.79z" fill="#003057"></path>
                <path d="M34.559 14.875c.074-1.231.485-2.463 1.157-3.582.187-.299.374-.56.56-.859 1.681.373 3.287.933 4.818 1.717-.523.709-.933 1.53-1.083 2.5-.15.97-.037 2.015.336 2.948a6.997 6.997 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.681.821 3.474 1.306 5.304 1.455.373.038.747.038 1.12.038.075.224.187.485.262.746-.71.075-1.382.15-2.092.15-2.614.074-5.266-.262-7.694-1.12-2.427-.896-4.668-2.351-5.863-4.478a5.82 5.82 0 0 1-.896-3.508zm13.407 17.8c-4.257-.224-8.515-1.12-12.4-2.948-1.941-.895-3.809-2.052-5.452-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.926 11.926 0 0 1-.86-6.53c.187-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.78 5.485 1.98 1.493 4.184 2.687 6.5 3.583 4.668 1.828 9.747 2.574 14.79 2.537 1.456 0 2.912-.112 4.369-.261.037-.224.075-.448.112-.71a27.526 27.526 0 0 1-3.922.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.432 1.978 11.28 1.903 1.344 0 2.65-.112 3.958-.261 0-.112 0-.224-.037-.299 0-.112-.038-.223-.038-.335a40.798 40.798 0 0 1-3.025 0c-3.025-.187-6.05-.859-8.851-2.165-1.382-.672-2.727-1.492-3.885-2.5-1.157-1.045-2.203-2.314-2.875-3.769-.673-1.455-.934-3.135-.673-4.74.224-1.567.897-3.022 1.793-4.253.075-.112.15-.187.224-.262-1.419-.224-2.876-.26-4.37-.149-.597.037-1.157.15-1.718.224-.71 1.38-1.195 2.873-1.307 4.366a9.295 9.295 0 0 0 1.046 5.3c.784 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.73-.672 14.042-5.672 16.769-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.672 1.045 1.867 1.754 3.175 2.165 1.045.335 2.166.447 3.286.447a21.124 21.124 0 0 0-6.461-6.269z" fill="#1345AE"></path>
            </symbol>
            <symbol viewbox="0 0 187 60" fill="none" id="logo-ria_logo_v_white_m" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.711 14.697c-.523-.823-1.271-1.42-2.243-1.87-.972-.448-2.093-.635-3.44-.635h-6.43v14.804h3.44V22.92h2.99c1.347 0 2.468-.187 3.44-.636.972-.448 1.72-1.046 2.243-1.869.523-.785.785-1.757.785-2.84 0-1.122-.262-2.057-.785-2.88zm-2.692 2.84c0 .823-.299 1.459-.822 1.907-.523.449-1.308.673-2.355.673h-2.804v-5.159h2.804c1.047 0 1.832.225 2.355.673.56.449.822 1.084.822 1.907zm8.71-5.345h-3.401v14.804h3.252l7.066-9.645v9.682h3.402v-14.84h-3.215l-7.103 9.681v-9.682zm16.524 11.626l-1.308 3.178h-3.514l6.617-14.804h3.402l6.617 14.841h-3.589l-1.346-3.215h-6.879zm5.795-2.58l-2.355-5.681-2.355 5.682h4.71zM74.244 47.632v-14.84h-3.44v5.831h-6.729V32.79h-3.439v14.841h3.44v-6.093h6.729v6.093h3.439zm7.14-.747c-1.234-.673-2.206-1.57-2.916-2.73-.71-1.158-1.047-2.467-1.047-3.925 0-1.457.337-2.766 1.047-3.925a7.324 7.324 0 0 1 2.916-2.729c1.234-.673 2.617-1.01 4.15-1.01 1.532 0 2.916.337 4.15 1.01 1.233.673 2.205 1.57 2.915 2.73.71 1.158 1.047 2.467 1.047 3.925 0 1.457-.337 2.766-1.047 3.925a7.327 7.327 0 0 1-2.916 2.729c-1.233.673-2.617 1.009-4.15 1.009-1.532 0-2.915-.336-4.149-1.01zm6.542-2.505a4.54 4.54 0 0 0 1.683-1.682c.41-.71.598-1.533.598-2.468 0-.934-.187-1.72-.598-2.467a4.54 4.54 0 0 0-1.683-1.682c-.71-.411-1.495-.598-2.392-.598-.86 0-1.683.187-2.393.598a4.54 4.54 0 0 0-1.682 1.682c-.411.71-.598 1.533-.598 2.468 0 .934.187 1.72.598 2.467a4.54 4.54 0 0 0 1.682 1.682c.71.411 1.495.598 2.393.598.897 0 1.682-.224 2.392-.598zm21.982-.935c0-.897-.224-1.644-.71-2.243-.486-.598-1.159-1.046-2.057-1.308a3.736 3.736 0 0 0 1.533-1.308c.374-.561.561-1.197.561-1.944 0-1.234-.486-2.169-1.458-2.841-.972-.673-2.318-1.01-4.037-1.01h-6.916v14.804h7.327c1.832 0 3.252-.337 4.261-1.084 1.01-.71 1.496-1.757 1.496-3.066zm-6.43-4.486H100.225V35.37h3.215c.748 0 1.309.15 1.683.448.411.337.598.785.598 1.346 0 .598-.187 1.047-.561 1.346-.374.299-.934.449-1.682.449zm.523 2.393c1.608 0 2.43.598 2.43 1.832 0 1.27-.785 1.906-2.43 1.906h-3.776v-3.738h3.776zm12.075 5.533c-1.234-.673-2.205-1.57-2.916-2.73-.71-1.158-1.047-2.467-1.047-3.925 0-1.457.337-2.766 1.047-3.925a7.328 7.328 0 0 1 2.916-2.729c1.234-.673 2.617-1.01 4.15-1.01 1.532 0 2.916.337 4.149 1.01 1.234.673 2.206 1.57 2.916 2.73.711 1.158 1.047 2.467 1.047 3.925 0 1.457-.336 2.766-1.047 3.925a7.322 7.322 0 0 1-2.916 2.729c-1.233.673-2.617 1.009-4.149 1.009-1.533 0-2.916-.336-4.15-1.01zm6.542-2.505a4.543 4.543 0 0 0 1.683-1.682c.411-.71.598-1.533.598-2.468 0-.934-.187-1.72-.598-2.467a4.542 4.542 0 0 0-1.683-1.682c-.71-.411-1.495-.598-2.392-.598-.86 0-1.683.187-2.393.598a4.54 4.54 0 0 0-1.682 1.682c-.411.71-.598 1.533-.598 2.468 0 .934.187 1.72.598 2.467a4.54 4.54 0 0 0 1.682 1.682c.71.411 1.496.598 2.393.598a5.04 5.04 0 0 0 2.392-.598zm8.972-.187a7.495 7.495 0 0 0 2.879 2.73c1.196.635 2.579.971 4.075.971 1.308 0 2.467-.224 3.514-.673a6.867 6.867 0 0 0 2.617-1.981l-2.206-2.019c-1.009 1.159-2.243 1.757-3.738 1.757-.935 0-1.757-.187-2.468-.598a4.54 4.54 0 0 1-1.682-1.682c-.411-.748-.598-1.533-.598-2.468 0-.934.187-1.757.598-2.467a4.54 4.54 0 0 1 1.682-1.682c.748-.411 1.533-.598 2.468-.598 1.495 0 2.729.56 3.738 1.72l2.206-2.02a6.777 6.777 0 0 0-2.617-1.943c-1.047-.449-2.206-.673-3.477-.673-1.533 0-2.878.299-4.112.972-1.234.635-2.168 1.57-2.879 2.729-.71 1.159-1.046 2.505-1.046 3.962 0 1.496.336 2.804 1.046 3.963zm27.066-8.598h-4.748v12.037h-3.401V35.594h-4.711V32.79h12.86v2.804zm6.094-2.804h-3.402v14.841h3.252l7.066-9.645v9.645h3.402v-14.84h-3.215l-7.103 9.681V32.79z" fill="#fff"></path>
                <path d="M34.559 14.875c.075-1.231.485-2.463 1.158-3.582.186-.299.373-.56.56-.859 1.68.373 3.286.933 4.818 1.717-.523.709-.934 1.53-1.083 2.5-.15.97-.038 2.015.336 2.948a6.996 6.996 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.68.821 3.473 1.306 5.303 1.455.374.038.747.038 1.12.038.075.224.188.485.262.746-.71.075-1.382.15-2.091.15-2.615.074-5.267-.262-7.694-1.12-2.428-.896-4.669-2.351-5.864-4.478a5.82 5.82 0 0 1-.896-3.508zm13.408 17.8c-4.258-.224-8.515-1.12-12.4-2.948-1.942-.895-3.81-2.052-5.453-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.927 11.927 0 0 1-.86-6.53c.188-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.781 5.485 1.98 1.493 4.183 2.687 6.499 3.583 4.668 1.828 9.748 2.574 14.79 2.537 1.456 0 2.913-.112 4.37-.261.037-.224.074-.448.111-.71a27.526 27.526 0 0 1-3.921.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.433 1.978 11.28 1.903 1.344 0 2.651-.112 3.959-.261 0-.112 0-.224-.038-.299 0-.112-.037-.223-.037-.335a40.8 40.8 0 0 1-3.025 0c-3.026-.187-6.05-.859-8.852-2.165-1.382-.672-2.726-1.492-3.884-2.5-1.158-1.045-2.204-2.314-2.876-3.769-.672-1.455-.934-3.135-.672-4.74.224-1.567.896-3.022 1.792-4.253.075-.112.15-.187.224-.262-1.419-.224-2.875-.26-4.37-.149-.597.037-1.157.15-1.717.224-.71 1.38-1.195 2.873-1.308 4.366a9.295 9.295 0 0 0 1.046 5.3c.785 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.731-.672 14.043-5.672 16.77-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.673 1.045 1.868 1.754 3.175 2.165 1.046.335 2.166.447 3.287.447a21.123 21.123 0 0 0-6.462-6.269z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 260 60" fill="none" id="logo-ria_logo_white_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.875c.075-1.231.485-2.463 1.158-3.582.186-.299.373-.56.56-.859 1.68.373 3.286.933 4.818 1.717-.523.709-.934 1.53-1.083 2.5-.15.97-.038 2.015.336 2.948a6.996 6.996 0 0 0 1.718 2.388c.71.672 1.494 1.157 2.353 1.605 1.68.821 3.473 1.306 5.303 1.455.374.038.747.038 1.12.038.075.224.188.485.262.746-.71.075-1.382.15-2.091.15-2.615.074-5.267-.262-7.694-1.12-2.428-.896-4.669-2.351-5.864-4.478a5.82 5.82 0 0 1-.896-3.508zm13.408 17.8c-4.258-.224-8.515-1.12-12.4-2.948-1.942-.895-3.81-2.052-5.453-3.508-1.643-1.455-3.062-3.209-3.921-5.261a11.927 11.927 0 0 1-.86-6.53c.188-1.27.598-2.501 1.121-3.62a19.332 19.332 0 0 0-6.498 3.246c-.038.299-.075.634-.113.933a12.711 12.711 0 0 0 1.494 7.016c1.12 2.127 2.839 3.992 4.781 5.485 1.98 1.493 4.183 2.687 6.499 3.583 4.668 1.828 9.748 2.574 14.79 2.537 1.456 0 2.913-.112 4.37-.261.037-.224.074-.448.111-.71a27.526 27.526 0 0 1-3.921.038zM31.832 24.13c1.494 1.157 3.175 2.052 4.93 2.761 3.548 1.38 7.433 1.978 11.28 1.903 1.344 0 2.651-.112 3.959-.261 0-.112 0-.224-.038-.299 0-.112-.037-.223-.037-.335a40.8 40.8 0 0 1-3.025 0c-3.026-.187-6.05-.859-8.852-2.165-1.382-.672-2.726-1.492-3.884-2.5-1.158-1.045-2.204-2.314-2.876-3.769-.672-1.455-.934-3.135-.672-4.74.224-1.567.896-3.022 1.792-4.253.075-.112.15-.187.224-.262-1.419-.224-2.875-.26-4.37-.149-.597.037-1.157.15-1.717.224-.71 1.38-1.195 2.873-1.308 4.366a9.295 9.295 0 0 0 1.046 5.3c.785 1.641 2.054 3.06 3.548 4.179zm15.5 13.396c-5.453-.224-10.906-1.343-15.91-3.582-2.503-1.12-4.893-2.538-7.022-4.366-2.129-1.791-3.959-3.956-5.154-6.53a15.152 15.152 0 0 1-1.42-7.128c-4.033 4.03-6.274 9.74-5.751 15.86.971 11.008 10.719 19.143 21.737 18.136 7.731-.672 14.043-5.672 16.77-12.39a47.19 47.19 0 0 1-3.25 0zm-4.893-24.629s0 .037 0 0c-.336.635-.523 1.306-.523 1.94 0 .635.187 1.232.523 1.717.673 1.045 1.868 1.754 3.175 2.165 1.046.335 2.166.447 3.287.447a21.123 21.123 0 0 0-6.462-6.269z" fill="#fff"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M142.768 37.463c-1.383-.748-2.467-1.757-3.215-3.065-.785-1.309-1.159-2.767-1.159-4.374 0-1.608.374-3.066 1.159-4.374.785-1.308 1.869-2.318 3.215-3.065 1.383-.748 2.916-1.122 4.636-1.122 1.719 0 3.252.374 4.598 1.122a8.19 8.19 0 0 1 3.215 3.065c.785 1.308 1.196 2.766 1.196 4.374 0 1.607-.411 3.065-1.196 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.346.748-2.916 1.122-4.598 1.122-1.72-.038-3.29-.412-4.636-1.122zm7.253-2.841c.785-.449 1.383-1.084 1.831-1.87.449-.784.673-1.719.673-2.728 0-1.01-.224-1.944-.673-2.73-.448-.784-1.046-1.42-1.831-1.868-.786-.449-1.683-.673-2.655-.673-.972 0-1.869.224-2.654.673-.785.448-1.383 1.084-1.832 1.869-.448.785-.673 1.72-.673 2.729 0 1.01.225 1.944.673 2.729.449.785 1.047 1.42 1.832 1.869.785.449 1.682.673 2.654.673 1.01 0 1.869-.224 2.655-.673zM74.02 24.566c-.561-.897-1.384-1.57-2.468-2.056s-2.355-.71-3.813-.71h-7.14v16.448h3.813v-4.56h3.327c1.458 0 2.729-.225 3.813-.71a5.56 5.56 0 0 0 2.467-2.057c.561-.897.86-1.981.86-3.177 0-1.234-.299-2.28-.86-3.178zm-2.954 3.215c0 .897-.299 1.607-.897 2.093-.598.486-1.495.748-2.617.748H64.45v-5.72h3.103c1.159 0 2.019.262 2.617.748.598.486.897 1.196.897 2.13zM80.75 21.8h-3.776v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.85 10.729v-10.73zm26.019 12.934h-7.664l-1.458 3.551h-3.925l7.364-16.485h3.776l7.365 16.485h-4l-1.458-3.55zm-1.234-2.878l-2.617-6.318-2.617 6.318h5.234zm29.271 6.43V21.8h-3.813v6.504h-7.477V21.8h-3.813v16.485h3.813V31.52h7.477v6.767h3.813zm39.664-4.636c0-1.01-.261-1.832-.785-2.505-.56-.673-1.308-1.159-2.28-1.458a3.886 3.886 0 0 0 1.72-1.457c.411-.636.598-1.346.598-2.169 0-1.346-.524-2.392-1.608-3.14-1.084-.748-2.579-1.121-4.486-1.121h-7.663v16.485h8.112c2.056 0 3.626-.41 4.748-1.233 1.084-.785 1.644-1.944 1.644-3.402zm-7.177-5.047h-3.552v-4.037h3.552c.822 0 1.42.187 1.869.523.411.374.635.86.635 1.496 0 .672-.224 1.159-.635 1.495-.411.336-1.047.523-1.869.523zm.635 2.654c1.795 0 2.692.673 2.692 2.057 0 1.42-.897 2.13-2.692 2.13h-4.187v-4.187h4.187zm13.384 6.206c-1.383-.748-2.468-1.757-3.215-3.065-.785-1.309-1.159-2.767-1.159-4.374 0-1.608.374-3.066 1.159-4.374.785-1.308 1.869-2.318 3.215-3.065 1.383-.748 2.916-1.122 4.635-1.122 1.72 0 3.253.374 4.598 1.122a8.183 8.183 0 0 1 3.215 3.065c.786 1.308 1.197 2.766 1.197 4.374 0 1.607-.411 3.065-1.197 4.374-.785 1.308-1.869 2.317-3.215 3.065-1.345.748-2.915 1.122-4.598 1.122-1.719-.038-3.252-.412-4.635-1.122zm7.252-2.841c.785-.449 1.383-1.084 1.832-1.87.449-.784.673-1.719.673-2.728 0-1.01-.224-1.944-.673-2.73-.449-.784-1.047-1.42-1.832-1.868-.785-.449-1.682-.673-2.654-.673s-1.869.224-2.654.673c-.785.448-1.384 1.084-1.832 1.869-.449.785-.673 1.72-.673 2.729 0 1.01.224 1.944.673 2.729.448.785 1.047 1.42 1.832 1.869.785.449 1.682.673 2.654.673 1.009 0 1.869-.224 2.654-.673zm9.944-.187c.785 1.271 1.869 2.28 3.215 3.028 1.383.748 2.879 1.084 4.598 1.084 1.421 0 2.729-.261 3.888-.747 1.159-.524 2.131-1.234 2.916-2.206l-2.467-2.243c-1.122 1.308-2.505 1.944-4.15 1.944-1.009 0-1.944-.224-2.729-.673a4.987 4.987 0 0 1-1.869-1.87c-.449-.784-.673-1.719-.673-2.728 0-1.01.224-1.944.673-2.73a4.987 4.987 0 0 1 1.869-1.868c.785-.449 1.72-.673 2.729-.673 1.645 0 3.028.673 4.15 1.944l2.467-2.243a7.657 7.657 0 0 0-2.916-2.169c-1.159-.485-2.467-.747-3.888-.747-1.719 0-3.252.336-4.598 1.084-1.383.71-2.43 1.72-3.215 3.028-.785 1.271-1.159 2.729-1.159 4.374 0 1.645.374 3.14 1.159 4.411zm30.094-9.533h-5.271v13.383h-3.776V24.902h-5.233V21.8h14.28v3.102zm6.766-3.102h-3.775v16.485h3.589l7.85-10.728v10.729h3.776V21.8h-3.589l-7.851 10.729v-10.73z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 107 107" fill="none" id="logo-ria_news" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.344 13.04c.2-3.293 1.299-6.588 3.097-9.582.5-.799 1-1.498 1.499-2.296 4.495.998 8.791 2.495 12.888 4.592-1.4 1.896-2.498 4.092-2.898 6.688-.4 2.595-.1 5.39.9 7.886 1.098 2.495 2.697 4.691 4.595 6.388 1.898 1.797 3.996 3.095 6.294 4.293a39.582 39.582 0 0 0 14.187 3.893c.999.1 1.998.1 2.997.1.2.599.499 1.297.699 1.996-1.898.2-3.696.4-5.595.4-6.993.2-14.086-.7-20.58-2.995-6.494-2.396-12.488-6.29-15.685-11.979-1.799-2.795-2.598-6.09-2.398-9.383zM96.21 60.657c-11.39-.599-22.778-2.995-33.168-7.886-5.196-2.396-10.19-5.49-14.587-9.383-4.396-3.893-8.192-8.585-10.49-14.075-2.398-5.49-3.197-11.68-2.298-17.47.5-3.393 1.599-6.687 2.997-9.682a51.713 51.713 0 0 0-17.383 8.685c-.1.798-.2 1.697-.3 2.495-.5 6.489.9 13.077 3.996 18.767 2.997 5.69 7.593 10.68 12.788 14.674 5.295 3.993 11.19 7.187 17.384 9.583 12.488 4.891 26.075 6.888 39.563 6.788 3.896 0 7.792-.3 11.689-.699.099-.599.199-1.198.299-1.897-3.496.3-6.993.3-10.49.1zm-43.16-22.86c3.997 3.095 8.493 5.491 13.188 7.388 9.492 3.693 19.882 5.29 30.172 5.09 3.597 0 7.093-.299 10.59-.698 0-.3 0-.6-.1-.799 0-.3-.1-.599-.1-.898-2.697.1-5.395.1-8.092 0-8.093-.5-16.185-2.296-23.678-5.79-3.696-1.797-7.293-3.993-10.39-6.688-3.097-2.795-5.895-6.189-7.693-10.082-1.798-3.893-2.497-8.385-1.798-12.678.6-4.192 2.398-8.085 4.795-11.38.2-.299.4-.499.6-.698-3.797-.6-7.693-.699-11.69-.4-1.598.1-3.096.4-4.595.6-1.898 3.693-3.197 7.686-3.496 11.679-.5 4.891.499 9.882 2.797 14.175 2.098 4.392 5.495 8.185 9.49 11.18zm41.462 35.837c-14.587-.599-29.173-3.593-42.56-9.583-6.694-2.994-13.088-6.788-18.782-11.68-5.695-4.79-10.59-10.58-13.787-17.468-2.798-5.89-4.096-12.578-3.797-19.066C4.796 26.616-1.198 41.889.201 58.26c2.597 29.448 28.673 51.21 58.145 48.514 20.68-1.796 37.565-15.173 44.858-33.14-2.898.099-5.795.099-8.692 0zM81.424 7.75s0 .1 0 0c-.899 1.697-1.399 3.494-1.399 5.19 0 1.698.5 3.295 1.4 4.593 1.797 2.795 4.994 4.691 8.491 5.79 2.797.898 5.795 1.197 8.792 1.197-4.496-6.788-10.39-12.478-17.284-16.77z" fill="#1345AE"></path>
            </symbol>
            <symbol viewbox="0 0 107 107" fill="none" id="logo-ria_news_white" xmlns="http://www.w3.org/2000/svg">
                <path d="M60.344 13.04c.2-3.293 1.299-6.588 3.097-9.582.5-.799 1-1.498 1.499-2.296 4.495.998 8.791 2.495 12.888 4.592-1.4 1.896-2.498 4.092-2.898 6.688-.4 2.595-.1 5.39.9 7.886 1.098 2.495 2.697 4.691 4.595 6.388 1.898 1.797 3.996 3.095 6.294 4.293a39.582 39.582 0 0 0 14.187 3.893c.999.1 1.998.1 2.997.1.2.599.499 1.297.699 1.996-1.898.2-3.696.4-5.595.4-6.993.2-14.086-.7-20.58-2.995-6.494-2.396-12.488-6.29-15.685-11.979-1.799-2.795-2.598-6.09-2.398-9.383zM96.21 60.657c-11.39-.599-22.778-2.995-33.168-7.886-5.196-2.396-10.19-5.49-14.587-9.383-4.396-3.893-8.192-8.585-10.49-14.075-2.398-5.49-3.197-11.68-2.298-17.47.5-3.393 1.599-6.687 2.997-9.682a51.713 51.713 0 0 0-17.383 8.685c-.1.798-.2 1.697-.3 2.495-.5 6.489.9 13.077 3.996 18.767 2.997 5.69 7.593 10.68 12.788 14.674 5.295 3.993 11.19 7.187 17.384 9.583 12.488 4.891 26.075 6.888 39.563 6.788 3.896 0 7.792-.3 11.689-.699.099-.599.199-1.198.299-1.897-3.496.3-6.993.3-10.49.1zm-43.16-22.86c3.997 3.095 8.493 5.491 13.188 7.388 9.492 3.693 19.882 5.29 30.172 5.09 3.597 0 7.093-.299 10.59-.698 0-.3 0-.6-.1-.799 0-.3-.1-.599-.1-.898-2.697.1-5.395.1-8.092 0-8.093-.5-16.185-2.296-23.678-5.79-3.696-1.797-7.293-3.993-10.39-6.688-3.097-2.795-5.895-6.189-7.693-10.082-1.798-3.893-2.497-8.385-1.798-12.678.6-4.192 2.398-8.085 4.795-11.38.2-.299.4-.499.6-.698-3.797-.6-7.693-.699-11.69-.4-1.598.1-3.096.4-4.595.6-1.898 3.693-3.197 7.686-3.496 11.679-.5 4.891.499 9.882 2.797 14.175 2.098 4.392 5.495 8.185 9.49 11.18zm41.462 35.837c-14.587-.599-29.173-3.593-42.56-9.583-6.694-2.994-13.088-6.788-18.782-11.68-5.695-4.79-10.59-10.58-13.787-17.468-2.798-5.89-4.096-12.578-3.797-19.066C4.796 26.616-1.198 41.889.201 58.26c2.597 29.448 28.673 51.21 58.145 48.514 20.68-1.796 37.565-15.173 44.858-33.14-2.898.099-5.795.099-8.692 0zM81.424 7.75s0 .1 0 0c-.899 1.697-1.399 3.494-1.399 5.19 0 1.698.5 3.295 1.4 4.593 1.797 2.795 4.994 4.691 8.491 5.79 2.797.898 5.795 1.197 8.792 1.197-4.496-6.788-10.39-12.478-17.284-16.77z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 160 60" fill="none" id="logo-sport_logo_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.837c.074-1.233.485-2.466 1.157-3.587.187-.299.374-.56.56-.859 1.681.374 3.287.934 4.818 1.719-.523.71-.933 1.531-1.083 2.503a5.714 5.714 0 0 0 .336 2.95 7.005 7.005 0 0 0 1.718 2.392c.71.672 1.494 1.158 2.353 1.606a14.783 14.783 0 0 0 5.304 1.457c.373.037.747.037 1.12.037.075.224.187.486.262.747-.71.075-1.382.15-2.092.15-2.614.075-5.266-.262-7.694-1.12-2.427-.897-4.668-2.354-5.863-4.484a5.898 5.898 0 0 1-.896-3.511zm13.407 17.82c-4.257-.225-8.515-1.121-12.4-2.952-1.941-.897-3.809-2.055-5.452-3.512-1.643-1.457-3.062-3.212-3.921-5.267a11.95 11.95 0 0 1-.86-6.538c.187-1.27.598-2.503 1.121-3.623-2.39.672-4.594 1.83-6.498 3.25-.038.299-.075.635-.113.934a12.737 12.737 0 0 0 1.494 7.023c1.12 2.13 2.839 3.997 4.78 5.492 1.98 1.494 4.184 2.69 6.5 3.586 4.668 1.83 9.747 2.578 14.79 2.54 1.456 0 2.912-.112 4.369-.261.037-.224.075-.449.112-.71a27.482 27.482 0 0 1-3.922.037zM31.832 24.1c1.494 1.158 3.175 2.055 4.93 2.765 3.548 1.382 7.432 1.98 11.28 1.905 1.344 0 2.65-.112 3.958-.261 0-.113 0-.225-.037-.3 0-.111-.038-.223-.038-.335a40.907 40.907 0 0 1-3.025 0c-3.025-.187-6.05-.86-8.851-2.167-1.382-.673-2.727-1.495-3.885-2.503-1.157-1.046-2.203-2.316-2.875-3.773-.673-1.457-.934-3.138-.673-4.745.224-1.569.897-3.026 1.793-4.259.075-.112.15-.186.224-.261a19.215 19.215 0 0 0-4.407-.075c-.597.038-1.158.15-1.718.224-.71 1.383-1.195 2.877-1.307 4.371a9.313 9.313 0 0 0 1.046 5.305c.821 1.569 2.091 2.951 3.585 4.11zm15.5 13.412c-5.453-.224-10.906-1.308-15.91-3.587-2.503-1.12-4.893-2.54-7.022-4.37-2.129-1.794-3.959-3.998-5.154-6.575a15.183 15.183 0 0 1-1.42-7.136 20.082 20.082 0 0 0-5.751 15.915c.971 11.02 10.719 19.164 21.737 18.155 7.73-.672 14.042-5.678 16.769-12.402a47.19 47.19 0 0 1-3.25 0zm-4.893-24.656c-.336.635-.523 1.307-.523 1.942s.187 1.233.523 1.719c.672 1.046 1.867 1.755 3.175 2.166 1.045.337 2.166.449 3.286.449-1.68-2.54-3.884-4.707-6.461-6.276z" fill="#00C463"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M98.43 26.673c.748 1.308 1.832 2.318 3.215 3.065 1.346.71 2.916 1.084 4.635 1.122 1.683 0 3.215-.374 4.598-1.122 1.346-.747 2.43-1.757 3.215-3.065a8.353 8.353 0 0 0 1.197-4.374 8.354 8.354 0 0 0-1.197-4.374 8.183 8.183 0 0 0-3.215-3.065c-1.345-.748-2.878-1.122-4.598-1.122-1.719 0-3.252.374-4.635 1.122-1.346.748-2.43 1.757-3.215 3.065-.785 1.309-1.159 2.767-1.159 4.374 0 1.608.374 3.066 1.159 4.374zm12.299-1.645c-.449.785-1.047 1.42-1.832 1.87-.785.448-1.645.672-2.654.672-.972 0-1.869-.224-2.654-.673-.785-.448-1.383-1.084-1.832-1.869-.449-.785-.673-1.72-.673-2.729 0-1.01.224-1.944.673-2.729.449-.785 1.047-1.42 1.832-1.87.785-.448 1.682-.672 2.654-.672s1.869.224 2.654.673c.785.448 1.383 1.084 1.832 1.87.449.784.673 1.719.673 2.728 0 1.01-.224 1.944-.673 2.729zm-46.505 4.71c-1.346-.747-2.43-1.757-3.215-3.028-.785-1.27-1.159-2.766-1.159-4.373 0-1.608.374-3.103 1.16-4.412.784-1.308 1.831-2.318 3.214-3.028 1.346-.748 2.879-1.084 4.598-1.084 1.421 0 2.73.262 3.888.748a7.658 7.658 0 0 1 2.916 2.168l-2.467 2.243c-1.122-1.271-2.505-1.944-4.15-1.944-1.009 0-1.944.224-2.729.673a4.984 4.984 0 0 0-1.869 1.87c-.448.784-.673 1.719-.673 2.728 0 1.01.225 1.944.673 2.729a4.984 4.984 0 0 0 1.87 1.87c.784.448 1.719.672 2.728.672 1.645 0 3.028-.635 4.15-1.944l2.467 2.243c-.785.972-1.757 1.682-2.916 2.206-1.159.486-2.467.747-3.888.747-1.72 0-3.215-.336-4.598-1.084zM93.72 14.075V30.56h-3.776V17.178h-7.477V30.56h-3.775V14.075H93.72zm36.037.71c1.084.486 1.907 1.196 2.467 2.056.598.897.86 1.944.86 3.178 0 1.196-.299 2.28-.86 3.177a5.556 5.556 0 0 1-2.467 2.056c-1.084.486-2.355.71-3.813.71h-3.327v4.561h-3.813V14.037h7.14c1.458.038 2.729.262 3.813.748zm-1.421 7.364c.599-.485.898-1.196.898-2.093 0-.934-.299-1.645-.898-2.13-.598-.487-1.457-.748-2.616-.748h-3.103v5.72h3.103c1.159 0 2.018-.262 2.616-.748zm14.767-4.971h5.271v-3.103h-14.281v3.103h5.234V30.56h3.776V17.178z" fill="#003057"></path>
                <path d="M60.598 38.785a2.99 2.99 0 0 1 2.99-2.99h67.291a2.99 2.99 0 0 1 2.99 2.99v6.355a2.99 2.99 0 0 1-2.99 2.99h-67.29a2.99 2.99 0 0 1-2.99-2.99v-6.355z" fill="#00C463"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M93.457 44.643a2.837 2.837 0 0 1-1.14-1.105 3.037 3.037 0 0 1-.41-1.575c0-.58.132-1.105.41-1.576a3.015 3.015 0 0 1 1.14-1.105 3.343 3.343 0 0 1 1.643-.403c.61 0 1.152.134 1.63.404.49.269.86.633 1.139 1.104.278.471.424.996.424 1.576 0 .579-.146 1.104-.424 1.575a3.015 3.015 0 0 1-1.14 1.105 3.292 3.292 0 0 1-1.63.404c-.609-.014-1.165-.148-1.642-.404zm2.57-1.024c.278-.161.49-.39.65-.673.158-.283.238-.62.238-.983 0-.364-.08-.7-.239-.983a1.747 1.747 0 0 0-.649-.674 1.85 1.85 0 0 0-.94-.242c-.345 0-.663.08-.941.242-.278.162-.49.39-.65.674-.158.282-.238.619-.238.983 0 .363.08.7.239.983.159.283.37.512.649.673.278.162.596.243.94.243.358 0 .663-.081.941-.243zm-26.934-3.623c-.2-.323-.49-.565-.875-.74-.384-.175-.834-.256-1.351-.256h-2.53v5.925h1.35v-1.642h1.18c.517 0 .967-.081 1.351-.256.371-.162.663-.418.875-.741.198-.323.304-.714.304-1.145 0-.444-.106-.821-.304-1.145zm-1.047 1.159c0 .323-.106.579-.318.754-.212.175-.53.27-.927.27h-1.1v-2.062h1.1c.41 0 .715.095.927.27.212.175.318.43.318.768zM71.477 39H70.14v5.939h1.272l2.782-3.865v3.865h1.338v-5.94H74.26l-2.783 3.866V39zm9.221 4.66h-2.715l-.517 1.279h-1.391l2.61-5.94h1.338l2.61 5.94h-1.418l-.517-1.28zm-.437-1.037l-.927-2.276-.928 2.276h1.855zm10.374 2.316v-5.94h-1.352v2.344h-2.65V39h-1.35v5.939h1.35v-2.438h2.65v2.438h1.352zm14.057-1.67c0-.364-.093-.66-.279-.902a1.637 1.637 0 0 0-.808-.526c.265-.12.464-.296.61-.525.145-.229.212-.485.212-.781 0-.485-.186-.862-.57-1.131-.384-.27-.914-.404-1.59-.404h-2.716v5.939h2.875c.729 0 1.285-.148 1.683-.444.384-.283.583-.7.583-1.226zm-2.544-1.818h-1.259v-1.455h1.259c.291 0 .503.068.662.189.146.135.226.31.226.539 0 .242-.08.417-.226.538-.145.121-.371.189-.662.189zm.225.956c.636 0 .954.243.954.74 0 .513-.318.768-.954.768h-1.484v-1.508h1.484zm4.743 2.236a2.838 2.838 0 0 1-1.139-1.105 3.03 3.03 0 0 1-.411-1.575c0-.58.132-1.105.411-1.576a3.012 3.012 0 0 1 1.139-1.105 3.341 3.341 0 0 1 1.643-.403c.609 0 1.153.134 1.629.404.491.269.862.633 1.14 1.104.278.471.424.996.424 1.576 0 .579-.146 1.104-.424 1.575a3.015 3.015 0 0 1-1.14 1.105 3.288 3.288 0 0 1-1.629.404 3.661 3.661 0 0 1-1.643-.404zm2.57-1.024c.279-.161.491-.39.649-.673.159-.283.239-.62.239-.983 0-.364-.08-.7-.239-.983a1.734 1.734 0 0 0-.649-.674 1.848 1.848 0 0 0-.94-.242c-.345 0-.663.08-.941.242-.278.162-.49.39-.649.674-.159.282-.239.619-.239.983 0 .363.08.7.239.983.159.283.371.512.649.673.278.162.596.243.941.243.357 0 .662-.081.94-.243zm3.524-.067a3.09 3.09 0 0 0 1.14 1.09c.49.27 1.02.391 1.629.391.504 0 .968-.094 1.378-.27a2.756 2.756 0 0 0 1.034-.794l-.875-.808c-.397.472-.887.7-1.47.7-.358 0-.689-.08-.968-.242a1.783 1.783 0 0 1-.662-.673 1.996 1.996 0 0 1-.238-.983c0-.364.079-.7.238-.983.159-.283.384-.512.662-.674.279-.161.61-.242.968-.242.583 0 1.073.242 1.47.7l.875-.808a2.724 2.724 0 0 0-1.034-.781 3.493 3.493 0 0 0-1.378-.27c-.609 0-1.152.122-1.629.391-.49.256-.861.62-1.14 1.09-.278.459-.41.984-.41 1.577 0 .592.132 1.13.41 1.589zm10.666-3.434h-1.869v4.821h-1.338v-4.822h-1.854V39h5.061v1.117zM126.274 39h-1.339v5.939h1.272l2.782-3.865v3.865h1.339v-5.94h-1.272l-2.782 3.866V39z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 160 60" fill="none" id="logo-sport_logo_white_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.559 14.837c.074-1.233.485-2.466 1.157-3.587.187-.299.374-.56.56-.859 1.681.374 3.287.934 4.818 1.719-.523.71-.933 1.531-1.083 2.503a5.714 5.714 0 0 0 .336 2.95 7.005 7.005 0 0 0 1.718 2.392c.71.672 1.494 1.158 2.353 1.606a14.783 14.783 0 0 0 5.304 1.457c.373.037.747.037 1.12.037.075.224.187.486.262.747-.71.075-1.382.15-2.092.15-2.614.075-5.266-.262-7.694-1.12-2.427-.897-4.668-2.354-5.863-4.484a5.898 5.898 0 0 1-.896-3.511zm13.407 17.82c-4.257-.225-8.515-1.121-12.4-2.952-1.941-.897-3.809-2.055-5.452-3.512-1.643-1.457-3.062-3.212-3.921-5.267a11.95 11.95 0 0 1-.86-6.538c.187-1.27.598-2.503 1.121-3.623-2.39.672-4.594 1.83-6.498 3.25-.038.299-.075.635-.113.934a12.737 12.737 0 0 0 1.494 7.023c1.12 2.13 2.839 3.997 4.78 5.492 1.98 1.494 4.184 2.69 6.5 3.586 4.668 1.83 9.747 2.578 14.79 2.54 1.456 0 2.912-.112 4.369-.261.037-.224.075-.449.112-.71a27.482 27.482 0 0 1-3.922.037zM31.832 24.1c1.494 1.158 3.175 2.055 4.93 2.765 3.548 1.382 7.432 1.98 11.28 1.905 1.344 0 2.65-.112 3.958-.261 0-.113 0-.225-.037-.3 0-.111-.038-.223-.038-.335a40.907 40.907 0 0 1-3.025 0c-3.025-.187-6.05-.86-8.851-2.167-1.382-.673-2.727-1.495-3.885-2.503-1.157-1.046-2.203-2.316-2.875-3.773-.673-1.457-.934-3.138-.673-4.745.224-1.569.897-3.026 1.793-4.259.075-.112.15-.186.224-.261a19.215 19.215 0 0 0-4.407-.075c-.597.038-1.158.15-1.718.224-.71 1.383-1.195 2.877-1.307 4.371a9.313 9.313 0 0 0 1.046 5.305c.821 1.569 2.091 2.951 3.585 4.11zm15.5 13.412c-5.453-.224-10.906-1.308-15.91-3.587-2.503-1.12-4.893-2.54-7.022-4.37-2.129-1.794-3.959-3.998-5.154-6.575a15.183 15.183 0 0 1-1.42-7.136 20.082 20.082 0 0 0-5.751 15.915c.971 11.02 10.719 19.164 21.737 18.155 7.73-.672 14.042-5.678 16.769-12.402a47.19 47.19 0 0 1-3.25 0zm-4.893-24.656c-.336.635-.523 1.307-.523 1.942s.187 1.233.523 1.719c.672 1.046 1.867 1.755 3.175 2.166 1.045.337 2.166.449 3.286.449-1.68-2.54-3.884-4.707-6.461-6.276z" fill="#fff"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M98.43 26.673c.748 1.308 1.832 2.318 3.215 3.065 1.346.71 2.916 1.084 4.635 1.122 1.683 0 3.215-.374 4.598-1.122 1.346-.747 2.43-1.757 3.215-3.065a8.353 8.353 0 0 0 1.197-4.374 8.354 8.354 0 0 0-1.197-4.374 8.183 8.183 0 0 0-3.215-3.065c-1.345-.748-2.878-1.122-4.598-1.122-1.719 0-3.252.374-4.635 1.122-1.346.748-2.43 1.757-3.215 3.065-.785 1.309-1.159 2.767-1.159 4.374 0 1.608.374 3.066 1.159 4.374zm12.299-1.645c-.449.785-1.047 1.42-1.832 1.87-.785.448-1.645.672-2.654.672-.972 0-1.869-.224-2.654-.673-.785-.448-1.383-1.084-1.832-1.869-.449-.785-.673-1.72-.673-2.729 0-1.01.224-1.944.673-2.729.449-.785 1.047-1.42 1.832-1.87.785-.448 1.682-.672 2.654-.672s1.869.224 2.654.673c.785.448 1.383 1.084 1.832 1.87.449.784.673 1.719.673 2.728 0 1.01-.224 1.944-.673 2.729zm-46.505 4.71c-1.346-.747-2.43-1.757-3.215-3.028-.785-1.27-1.159-2.766-1.159-4.373 0-1.608.374-3.103 1.16-4.412.784-1.308 1.831-2.318 3.214-3.028 1.346-.748 2.879-1.084 4.598-1.084 1.421 0 2.73.262 3.888.748a7.658 7.658 0 0 1 2.916 2.168l-2.467 2.243c-1.122-1.271-2.505-1.944-4.15-1.944-1.009 0-1.944.224-2.729.673a4.984 4.984 0 0 0-1.869 1.87c-.448.784-.673 1.719-.673 2.728 0 1.01.225 1.944.673 2.729a4.984 4.984 0 0 0 1.87 1.87c.784.448 1.719.672 2.728.672 1.645 0 3.028-.635 4.15-1.944l2.467 2.243c-.785.972-1.757 1.682-2.916 2.206-1.159.486-2.467.747-3.888.747-1.72 0-3.215-.336-4.598-1.084zM93.72 14.075V30.56h-3.776V17.178h-7.477V30.56h-3.775V14.075H93.72zm36.037.71c1.084.486 1.907 1.196 2.467 2.056.598.897.86 1.944.86 3.178 0 1.196-.299 2.28-.86 3.177a5.556 5.556 0 0 1-2.467 2.056c-1.084.486-2.355.71-3.813.71h-3.327v4.561h-3.813V14.037h7.14c1.458.038 2.729.262 3.813.748zm-1.421 7.364c.599-.485.898-1.196.898-2.093 0-.934-.299-1.645-.898-2.13-.598-.487-1.457-.748-2.616-.748h-3.103v5.72h3.103c1.159 0 2.018-.262 2.616-.748zm14.767-4.971h5.271v-3.103h-14.281v3.103h5.234V30.56h3.776V17.178zM63.589 35.794a2.99 2.99 0 0 0-2.99 2.991v6.355a2.99 2.99 0 0 0 2.99 2.99h67.29a2.99 2.99 0 0 0 2.99-2.99v-6.355a2.99 2.99 0 0 0-2.99-2.99h-67.29zm28.728 7.744c.265.472.65.835 1.14 1.105.477.256 1.033.39 1.643.404.596 0 1.152-.135 1.63-.404.476-.27.86-.633 1.139-1.105.278-.471.424-.996.424-1.575 0-.58-.146-1.105-.424-1.576a2.923 2.923 0 0 0-1.14-1.105c-.477-.269-1.02-.403-1.63-.403-.609 0-1.152.134-1.642.404-.477.269-.861.633-1.14 1.104-.278.471-.41.996-.41 1.576 0 .579.132 1.104.41 1.575zm4.36-.592c-.16.283-.372.512-.65.673a1.815 1.815 0 0 1-.94.243c-.345 0-.663-.081-.941-.243a1.747 1.747 0 0 1-.65-.673 1.997 1.997 0 0 1-.238-.983c0-.364.08-.7.239-.983.159-.283.37-.512.649-.674a1.85 1.85 0 0 1 .94-.242c.345 0 .663.08.941.242.278.162.49.39.65.674.158.282.238.619.238.983 0 .363-.08.7-.239.983zm-28.459-3.69c.385.175.676.417.875.74.198.324.304.7.304 1.145 0 .431-.106.822-.304 1.145-.212.323-.504.579-.875.74-.384.176-.834.256-1.351.256h-1.18v1.644h-1.35V39h2.53c.517 0 .967.08 1.351.256zm-.49 2.653c.212-.175.318-.431.318-.754 0-.337-.106-.593-.318-.768-.212-.175-.517-.27-.927-.27h-1.1v2.061h1.1c.397 0 .715-.094.927-.27zm2.411-2.91h1.339v3.866L74.26 39h1.271v5.939h-1.338v-3.865l-2.782 3.865H70.14v-5.94zm7.844 4.66h2.715l.517 1.28h1.418l-2.61-5.94h-1.338l-2.61 5.94h1.39l.517-1.28zm1.35-3.313l.928 2.277h-1.855l.928-2.276zM90.636 39v5.939h-1.352v-2.438h-2.65v2.438h-1.35v-5.94h1.35v2.344h2.65V39h1.352zm13.778 3.367c.186.242.279.538.279.902 0 .525-.199.943-.583 1.226-.398.296-.954.444-1.683.444h-2.875v-5.94h2.716c.676 0 1.206.135 1.59.405.384.27.57.646.57 1.131 0 .296-.067.552-.212.781a1.386 1.386 0 0 1-.61.525c.345.108.61.283.808.526zm-3.524-.916h1.259c.291 0 .517-.068.662-.189.146-.12.226-.296.226-.538a.696.696 0 0 0-.226-.54c-.159-.12-.371-.188-.662-.188h-1.259v1.455zm2.438 1.697c0-.498-.318-.74-.954-.74h-1.484v1.507h1.484c.636 0 .954-.255.954-.767zm2.65.39c.265.472.649.835 1.139 1.105.49.256 1.034.39 1.643.404.596 0 1.153-.135 1.63-.404a3.02 3.02 0 0 0 1.563-2.68c0-.58-.146-1.105-.424-1.576a2.922 2.922 0 0 0-1.139-1.105c-.477-.269-1.021-.403-1.63-.403s-1.153.134-1.643.404c-.477.269-.861.633-1.139 1.104a3.04 3.04 0 0 0-.411 1.576c0 .579.133 1.104.411 1.575zm4.359-.592a1.744 1.744 0 0 1-.65.673 1.813 1.813 0 0 1-.94.243c-.345 0-.663-.081-.941-.243a1.749 1.749 0 0 1-.649-.673 1.997 1.997 0 0 1-.239-.983c0-.364.08-.7.239-.983.159-.283.371-.512.649-.674.278-.161.596-.242.941-.242.344 0 .662.08.94.242.279.162.491.39.65.674.159.282.238.619.238.983 0 .363-.079.7-.238.983zm4.014 1.697a3.09 3.09 0 0 1-1.14-1.091c-.278-.458-.41-.997-.41-1.59 0-.592.132-1.117.41-1.575.279-.471.65-.835 1.14-1.091.477-.27 1.02-.39 1.629-.39.504 0 .968.094 1.378.269.411.175.755.444 1.034.78l-.875.809c-.397-.458-.887-.7-1.47-.7-.358 0-.689.08-.968.242-.278.162-.503.39-.662.674-.159.282-.238.619-.238.983 0 .363.079.7.238.983.159.283.384.512.662.673.279.162.61.243.968.243.583 0 1.073-.23 1.47-.7l.875.807c-.279.35-.623.606-1.034.795-.41.175-.874.27-1.378.27-.609 0-1.139-.122-1.629-.391zm7.658-4.526h1.868V39h-5.061v1.117h1.854v4.822h1.339v-4.822zM124.935 39h1.339v3.865L129.056 39h1.272v5.939h-1.338v-3.865l-2.783 3.865h-1.272v-5.94z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 284 60" fill="none" id="logo-sputnik_radio_logo_black_orange_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.1 21.3L10 28.6l4.2 11.7 15.9-19z" fill="#FF9609"></path>
                <path d="M41.9 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM62.9 36h-7.5L54 40.3h-4.3l6.5-18.9h5.9l6.6 18.9h-4.5L62.9 36zm-6.3-3.7h5l-2.5-7.7-2.5 7.7zM73.6 44.6h-3.9v-8.1h1.9c.4-.6.8-1.1 1-1.7.2-.6.4-1.2.5-1.9.2-1.1.3-2.3.3-3.8l.1-7.7H88v15.1h2.8v8.1H87v-4.3H73.6v4.3zm10.2-19.4h-6.3l-.1 4.4c0 1.4-.1 2.7-.3 3.8-.1.5-.2 1.1-.4 1.6s-.4 1-.6 1.6h7.7V25.2zM106.8 21.4h4.3v18.9H107v-13l-8.6 13h-4.3V21.4h4.1v13l8.6-13zM135.4 30.8c0 1.5-.2 2.9-.7 4.1-.5 1.2-1.2 2.2-2.1 3.1-.9.8-2 1.5-3.2 2-1.3.5-2.6.7-4.2.7-1.5 0-3-.2-4.2-.7-1.2-.5-2.4-1.1-3.3-2-.9-.8-1.6-1.9-2.1-3.1-.5-1.2-.7-2.6-.7-4.1 0-1.5.2-2.9.7-4.1.5-1.2 1.2-2.2 2.1-3.1.9-.8 2-1.5 3.3-2 1.3-.5 2.7-.7 4.2-.7s2.9.2 4.2.7c1.3.5 2.3 1.1 3.2 2 .9.8 1.6 1.9 2.1 3.1.5 1.2.7 2.6.7 4.1zm-4.4 0c0-1-.1-1.9-.4-2.6-.3-.7-.7-1.4-1.2-1.8-.5-.5-1.2-.9-1.9-1.1-.7-.2-1.5-.4-2.3-.4-.8 0-1.6.1-2.3.4-.7.3-1.3.6-1.8 1.1-.5.5-.9 1.1-1.2 1.8-.3.7-.4 1.6-.4 2.6s.1 1.8.4 2.6c.3.7.7 1.4 1.2 1.8.5.5 1.1.9 1.8 1.1.7.3 1.5.4 2.3.4.8 0 1.6-.1 2.3-.4.7-.3 1.3-.6 1.9-1.1.5-.5.9-1.1 1.2-1.8.3-.7.4-1.6.4-2.6z" fill="#000"></path>
                <path d="M145 34.9c.9.6 1.9 1 3.2 1.4 1.3.4 2.6.5 4 .5 2.2 0 3.2-.6 3.2-1.8 0-.6-.3-1.1-1-1.4-.7-.3-1.6-.6-2.9-.8-2.1-.4-3.7-1.1-4.8-2-1.1-.9-1.7-2.2-1.7-3.9 0-1.9.7-3.4 2.1-4.4 1.4-1 3.3-1.5 5.8-1.5 1.1 0 2.2.1 3.2.3 1 .2 1.9.5 2.6.9v4.2c-.7-.4-1.5-.8-2.6-1.1-1-.3-2.1-.5-3.2-.5-1 0-1.8.1-2.4.4-.7.3-1 .7-1 1.4 0 .6.4 1.1 1.1 1.4.7.3 1.7.6 3.1.9 1 .2 1.9.5 2.6.8.8.3 1.4.7 1.9 1.1.5.5.9 1 1.2 1.6.3.6.4 1.4.4 2.2 0 1.9-.7 3.4-2.1 4.4-1.4 1-3.3 1.5-5.7 1.5-.7 0-1.3 0-2-.1s-1.3-.2-1.9-.3c-.6-.1-1.2-.3-1.7-.5s-1-.4-1.4-.6v-4.1zM171 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM190.4 36.7c1.3 0 2.3-.4 3.1-1.2.8-.8 1.1-2 1.1-3.6V21.4h4.3v10.8c0 1.4-.2 2.6-.6 3.6-.4 1.1-1 1.9-1.7 2.7-.7.7-1.7 1.3-2.7 1.6-1.1.4-2.3.6-3.6.6-1.3 0-2.5-.2-3.6-.6-1.1-.4-2-.9-2.7-1.6-.7-.7-1.3-1.6-1.7-2.7-.4-1.1-.6-2.3-.6-3.6V21.4h4.3V32c0 1.6.4 2.8 1.1 3.6.8.7 1.9 1.1 3.3 1.1zM208.7 25.3h-6.6v-3.9h17.5v3.9H213v15h-4.3v-15zM230.8 25.2c-1.4 0-2.4.4-3.2 1.1-.8.7-1.2 2-1.2 3.6v10.4H222V29.5c0-1.4.2-2.6.6-3.7.4-1.1 1-1.9 1.8-2.7.8-.7 1.7-1.2 2.8-1.6 1.1-.4 2.3-.5 3.6-.5 1.3 0 2.5.2 3.6.5s2 .9 2.8 1.6c.8.7 1.4 1.6 1.8 2.7.4 1.1.6 2.3.6 3.7v10.8h-4.4V29.9c0-1.7-.4-2.9-1.2-3.6-.8-.8-1.9-1.1-3.2-1.1zM244.4 21.4h4.3v18.9h-4.3V21.4zM257.9 32.5v7.8h-4.3V21.4h4.3v7.4h2.8l4.6-7.4h4.8l-5.8 9.1 6 9.8h-5l-4.6-7.8h-2.8z" fill="#FF9609"></path>
            </symbol>
            <symbol viewbox="0 0 284 60" fill="none" id="logo-sputnik_radio_logo_white_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.1 21.3L10 28.6l4.2 11.7 15.9-19z" fill="#fff"></path>
                <path d="M41.9 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM62.9 36h-7.5L54 40.3h-4.3l6.5-18.9h5.9l6.6 18.9h-4.5L62.9 36zm-6.3-3.7h5l-2.5-7.7-2.5 7.7zM73.6 44.6h-3.9v-8.1h1.9c.4-.6.8-1.1 1-1.7.2-.6.4-1.2.5-1.9.2-1.1.3-2.3.3-3.8l.1-7.7H88v15.1h2.8v8.1H87v-4.3H73.6v4.3zm10.2-19.4h-6.3l-.1 4.4c0 1.4-.1 2.7-.3 3.8-.1.5-.2 1.1-.4 1.6s-.4 1-.6 1.6h7.7V25.2zM106.8 21.4h4.3v18.9H107v-13l-8.6 13h-4.3V21.4h4.1v13l8.6-13zM135.4 30.8c0 1.5-.2 2.9-.7 4.1-.5 1.2-1.2 2.2-2.1 3.1-.9.8-2 1.5-3.2 2-1.3.5-2.6.7-4.2.7-1.5 0-3-.2-4.2-.7-1.2-.5-2.4-1.1-3.3-2-.9-.8-1.6-1.9-2.1-3.1-.5-1.2-.7-2.6-.7-4.1 0-1.5.2-2.9.7-4.1.5-1.2 1.2-2.2 2.1-3.1.9-.8 2-1.5 3.3-2 1.3-.5 2.7-.7 4.2-.7s2.9.2 4.2.7c1.3.5 2.3 1.1 3.2 2 .9.8 1.6 1.9 2.1 3.1.5 1.2.7 2.6.7 4.1zm-4.4 0c0-1-.1-1.9-.4-2.6-.3-.7-.7-1.4-1.2-1.8-.5-.5-1.2-.9-1.9-1.1-.7-.2-1.5-.4-2.3-.4-.8 0-1.6.1-2.3.4-.7.3-1.3.6-1.8 1.1-.5.5-.9 1.1-1.2 1.8-.3.7-.4 1.6-.4 2.6s.1 1.8.4 2.6c.3.7.7 1.4 1.2 1.8.5.5 1.1.9 1.8 1.1.7.3 1.5.4 2.3.4.8 0 1.6-.1 2.3-.4.7-.3 1.3-.6 1.9-1.1.5-.5.9-1.1 1.2-1.8.3-.7.4-1.6.4-2.6z" fill="#fff" fill-opacity=".8"></path>
                <path d="M145 34.9c.9.6 1.9 1 3.2 1.4 1.3.4 2.6.5 4 .5 2.2 0 3.2-.6 3.2-1.8 0-.6-.3-1.1-1-1.4-.7-.3-1.6-.6-2.9-.8-2.1-.4-3.7-1.1-4.8-2-1.1-.9-1.7-2.2-1.7-3.9 0-1.9.7-3.4 2.1-4.4 1.4-1 3.3-1.5 5.8-1.5 1.1 0 2.2.1 3.2.3 1 .2 1.9.5 2.6.9v4.2c-.7-.4-1.5-.8-2.6-1.1-1-.3-2.1-.5-3.2-.5-1 0-1.8.1-2.4.4-.7.3-1 .7-1 1.4 0 .6.4 1.1 1.1 1.4.7.3 1.7.6 3.1.9 1 .2 1.9.5 2.6.8.8.3 1.4.7 1.9 1.1.5.5.9 1 1.2 1.6.3.6.4 1.4.4 2.2 0 1.9-.7 3.4-2.1 4.4-1.4 1-3.3 1.5-5.7 1.5-.7 0-1.3 0-2-.1s-1.3-.2-1.9-.3c-.6-.1-1.2-.3-1.7-.5s-1-.4-1.4-.6v-4.1zM171 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM190.4 36.7c1.3 0 2.3-.4 3.1-1.2.8-.8 1.1-2 1.1-3.6V21.4h4.3v10.8c0 1.4-.2 2.6-.6 3.6-.4 1.1-1 1.9-1.7 2.7-.7.7-1.7 1.3-2.7 1.6-1.1.4-2.3.6-3.6.6-1.3 0-2.5-.2-3.6-.6-1.1-.4-2-.9-2.7-1.6-.7-.7-1.3-1.6-1.7-2.7-.4-1.1-.6-2.3-.6-3.6V21.4h4.3V32c0 1.6.4 2.8 1.1 3.6.8.7 1.9 1.1 3.3 1.1zM208.7 25.3h-6.6v-3.9h17.5v3.9H213v15h-4.3v-15zM230.8 25.2c-1.4 0-2.4.4-3.2 1.1-.8.7-1.2 2-1.2 3.6v10.4H222V29.5c0-1.4.2-2.6.6-3.7.4-1.1 1-1.9 1.8-2.7.8-.7 1.7-1.2 2.8-1.6 1.1-.4 2.3-.5 3.6-.5 1.3 0 2.5.2 3.6.5s2 .9 2.8 1.6c.8.7 1.4 1.6 1.8 2.7.4 1.1.6 2.3.6 3.7v10.8h-4.4V29.9c0-1.7-.4-2.9-1.2-3.6-.8-.8-1.9-1.1-3.2-1.1zM244.4 21.4h4.3v18.9h-4.3V21.4zM257.9 32.5v7.8h-4.3V21.4h4.3v7.4h2.8l4.6-7.4h4.8l-5.8 9.1 6 9.8h-5l-4.6-7.8h-2.8z" fill="#fff"></path>
            </symbol>
            <symbol viewbox="0 0 284 60" fill="none" id="logo-sputnik_radio_logo_white_orange_m" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.1 21.3L10 28.6l4.2 11.7 15.9-19z" fill="#FF9609"></path>
                <path d="M41.9 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM62.9 36h-7.5L54 40.3h-4.3l6.5-18.9h5.9l6.6 18.9h-4.5L62.9 36zm-6.3-3.7h5l-2.5-7.7-2.5 7.7zM73.6 44.6h-3.9v-8.1h1.9c.4-.6.8-1.1 1-1.7.2-.6.4-1.2.5-1.9.2-1.1.3-2.3.3-3.8l.1-7.7H88v15.1h2.8v8.1H87v-4.3H73.6v4.3zm10.2-19.4h-6.3l-.1 4.4c0 1.4-.1 2.7-.3 3.8-.1.5-.2 1.1-.4 1.6s-.4 1-.6 1.6h7.7V25.2zM106.8 21.4h4.3v18.9H107v-13l-8.6 13h-4.3V21.4h4.1v13l8.6-13zM135.4 30.8c0 1.5-.2 2.9-.7 4.1-.5 1.2-1.2 2.2-2.1 3.1-.9.8-2 1.5-3.2 2-1.3.5-2.6.7-4.2.7-1.5 0-3-.2-4.2-.7-1.2-.5-2.4-1.1-3.3-2-.9-.8-1.6-1.9-2.1-3.1-.5-1.2-.7-2.6-.7-4.1 0-1.5.2-2.9.7-4.1.5-1.2 1.2-2.2 2.1-3.1.9-.8 2-1.5 3.3-2 1.3-.5 2.7-.7 4.2-.7s2.9.2 4.2.7c1.3.5 2.3 1.1 3.2 2 .9.8 1.6 1.9 2.1 3.1.5 1.2.7 2.6.7 4.1zm-4.4 0c0-1-.1-1.9-.4-2.6-.3-.7-.7-1.4-1.2-1.8-.5-.5-1.2-.9-1.9-1.1-.7-.2-1.5-.4-2.3-.4-.8 0-1.6.1-2.3.4-.7.3-1.3.6-1.8 1.1-.5.5-.9 1.1-1.2 1.8-.3.7-.4 1.6-.4 2.6s.1 1.8.4 2.6c.3.7.7 1.4 1.2 1.8.5.5 1.1.9 1.8 1.1.7.3 1.5.4 2.3.4.8 0 1.6-.1 2.3-.4.7-.3 1.3-.6 1.9-1.1.5-.5.9-1.1 1.2-1.8.3-.7.4-1.6.4-2.6z" fill="#fff"></path>
                <path d="M145 34.9c.9.6 1.9 1 3.2 1.4 1.3.4 2.6.5 4 .5 2.2 0 3.2-.6 3.2-1.8 0-.6-.3-1.1-1-1.4-.7-.3-1.6-.6-2.9-.8-2.1-.4-3.7-1.1-4.8-2-1.1-.9-1.7-2.2-1.7-3.9 0-1.9.7-3.4 2.1-4.4 1.4-1 3.3-1.5 5.8-1.5 1.1 0 2.2.1 3.2.3 1 .2 1.9.5 2.6.9v4.2c-.7-.4-1.5-.8-2.6-1.1-1-.3-2.1-.5-3.2-.5-1 0-1.8.1-2.4.4-.7.3-1 .7-1 1.4 0 .6.4 1.1 1.1 1.4.7.3 1.7.6 3.1.9 1 .2 1.9.5 2.6.8.8.3 1.4.7 1.9 1.1.5.5.9 1 1.2 1.6.3.6.4 1.4.4 2.2 0 1.9-.7 3.4-2.1 4.4-1.4 1-3.3 1.5-5.7 1.5-.7 0-1.3 0-2-.1s-1.3-.2-1.9-.3c-.6-.1-1.2-.3-1.7-.5s-1-.4-1.4-.6v-4.1zM171 21.4c2.3 0 4.1.5 5.4 1.6 1.3 1.1 1.9 2.7 1.9 4.9 0 1.1-.2 2.1-.5 2.9-.4.8-.8 1.5-1.5 2.1-.6.5-1.4 1-2.3 1.2-.9.3-1.9.4-3.1.4h-3.3v5.8h-4.3V21.4h7.7zm-3.3 9.4h3.3c2.1 0 3.2-.9 3.2-2.8 0-.9-.3-1.6-.8-2.1s-1.3-.7-2.4-.7h-3.3v5.6zM190.4 36.7c1.3 0 2.3-.4 3.1-1.2.8-.8 1.1-2 1.1-3.6V21.4h4.3v10.8c0 1.4-.2 2.6-.6 3.6-.4 1.1-1 1.9-1.7 2.7-.7.7-1.7 1.3-2.7 1.6-1.1.4-2.3.6-3.6.6-1.3 0-2.5-.2-3.6-.6-1.1-.4-2-.9-2.7-1.6-.7-.7-1.3-1.6-1.7-2.7-.4-1.1-.6-2.3-.6-3.6V21.4h4.3V32c0 1.6.4 2.8 1.1 3.6.8.7 1.9 1.1 3.3 1.1zM208.7 25.3h-6.6v-3.9h17.5v3.9H213v15h-4.3v-15zM230.8 25.2c-1.4 0-2.4.4-3.2 1.1-.8.7-1.2 2-1.2 3.6v10.4H222V29.5c0-1.4.2-2.6.6-3.7.4-1.1 1-1.9 1.8-2.7.8-.7 1.7-1.2 2.8-1.6 1.1-.4 2.3-.5 3.6-.5 1.3 0 2.5.2 3.6.5s2 .9 2.8 1.6c.8.7 1.4 1.6 1.8 2.7.4 1.1.6 2.3.6 3.7v10.8h-4.4V29.9c0-1.7-.4-2.9-1.2-3.6-.8-.8-1.9-1.1-3.2-1.1zM244.4 21.4h4.3v18.9h-4.3V21.4zM257.9 32.5v7.8h-4.3V21.4h4.3v7.4h2.8l4.6-7.4h4.8l-5.8 9.1 6 9.8h-5l-4.6-7.8h-2.8z" fill="#FF9609"></path>
            </symbol>
        </svg></div>
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 40 40" id="icon-angry" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm-1.252-9.9l.435-.754-8.78-5.07-.875 1.516 2.444 1.411a3.712 3.712 0 0 0 6.774 2.9l-.005-.002.007-.001zm2.504 0l-.435-.754 8.78-5.07.875 1.516-2.444 1.411a3.712 3.712 0 0 1-6.774 2.9l.005-.002-.007-.001z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-applause" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.75 14.31a456.646 456.646 0 0 0-3.887-4 1.103 1.103 0 0 0-1.56-.023l-.122.12a1.104 1.104 0 0 0-.023 1.56l3.225 3.32.009.015a.568.568 0 0 1-.09.655.547.547 0 0 1-.415.2.582.582 0 0 1-.383-.154l-8.721-7.769a1.103 1.103 0 0 0-1.557.09l-.114.128a1.104 1.104 0 0 0 .09 1.557l3.942 3.519.009.012a.491.491 0 0 1-.708.67l-5.457-4.868a1.103 1.103 0 0 0-1.557.09l-.113.128a1.103 1.103 0 0 0 .09 1.557l.006.006 1.43 1.626q.082-.006.163-.006a2.485 2.485 0 0 1 2.161 1.262l2.525 4.475a2.462 2.462 0 0 1 1.04-.919l.154-.073a2.46 2.46 0 0 1 1.059-.238 2.492 2.492 0 0 1 2.24 1.416l.007.013c.26.54 1.597 3.322 2.386 5.05a11.514 11.514 0 0 1 1.07 3.92 8.667 8.667 0 0 0 2.598-2 8.572 8.572 0 0 0 .502-11.338z">
                </path>
                <path d="M24.944 19.26a1.109 1.109 0 0 0-.998-.633 1.094 1.094 0 0 0-.47.106l-.155.073a1.103 1.103 0 0 0-.526 1.469l1.977 4.185.004.017a.568.568 0 0 1-.297.59.597.597 0 0 1-.295.084.551.551 0 0 1-.476-.298l-5.74-10.171a1.102 1.102 0 0 0-1.502-.42l-.149.085a1.103 1.103 0 0 0-.418 1.503l3.108 5.508.142.244a.491.491 0 0 1-.886.405l-4.243-7.504a1.102 1.102 0 0 0-1.502-.419l-.15.084a1.104 1.104 0 0 0-.418 1.503l3.867 6.854.142.253a.41.41 0 0 1-.206.512.468.468 0 0 1-.25.072.48.48 0 0 1-.372-.176l-.007-.01-3.69-6.526a1.103 1.103 0 0 0-1.503-.419l-.15.085a1.103 1.103 0 0 0-.418 1.502l3.937 6.977.188.338c.094.184.094.322-.212.535s-.52.062-.589-.068l-2.685-4.753a1.102 1.102 0 0 0-1.502-.419l-.149.084a1.103 1.103 0 0 0-.419 1.503l1.83 3.242 4.27 7.657c2.166 3.328 4.967 4.063 9.511 1.722 3.798-1.957 6.197-5.05 3.784-10.335-.857-1.874-2.368-5.01-2.383-5.042zM7.084 8.394l1.46-1.368 3.218 3.435-1.459 1.367zM3.545 13.074l.58-1.914 4.506 1.367-.58 1.914zM11.496 4.253l1.948-.455 1.07 4.586-1.948.455z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-applause_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.318 7.574l.657-.615 2.325 2.48-.657.616zM3.973 11.558l.261-.861 3.254.985-.26.862zM11.291 4.084l.877-.205.773 3.311-.877.205zM34.375 18.999a6.214 6.214 0 0 0-1.716-3.235l-4.22-4.221a1.958 1.958 0 0 0-2.704 0 1.897 1.897 0 0 0-.507.923l-3.534-3.534a1.914 1.914 0 0 0-2.704 0 1.895 1.895 0 0 0-.505.924l-.142-.14a1.907 1.907 0 0 0-2.867 2.502 1.829 1.829 0 0 0-1.253.96l-.099-.172a1.902 1.902 0 0 0-3.556 1.06 1.901 1.901 0 0 0-1.988 2.83l.622 1.074a1.909 1.909 0 0 0-1.736 2.865l5.78 9.965a6.206 6.206 0 0 0 1.712 1.907l3.412 2.502.532-.726-3.412-2.502a5.322 5.322 0 0 1-1.465-1.632l-5.78-9.965a1.012 1.012 0 1 1 1.752-1.012l1.902 3.261.195.336h.001l.334-.194.444-.256-.001-.002h.001l-.221-.38-3.293-5.692a1.011 1.011 0 1 1 1.75-1.013l3.515 6.074.779-.45-3.81-6.586a1.011 1.011 0 0 1 1.752-1.013l.908 1.57v.002l2.901 5.013.78-.45-2.9-5.014a.998.998 0 0 1 1.423-1.343l.251.252.004-.004a.978.978 0 0 1 .072.082l3.31 5.721.002.006 2.19 3.783.778-.45-1.685-2.913-.504-.872a1.013 1.013 0 0 1 .37-1.381 1.01 1.01 0 0 1 1.381.369l2.99 5.167a5.317 5.317 0 0 1 .703 3.053l-.298 4.19.897.063.299-4.189a6.212 6.212 0 0 0-.822-3.568l-2.99-5.167a1.903 1.903 0 0 0-3.338.066l-2.504-4.328a1.899 1.899 0 0 0-.555-.601l-.732-.732a1.01 1.01 0 0 1 0-1.43 1.033 1.033 0 0 1 1.432 0l1.256 1.252c.01.01.016.022.026.032l1.975 1.973.007-.006 1.693 1.686.635-.638-3.684-3.668a1.01 1.01 0 0 1 1.441-1.414l4.676 4.675.002.003 3.091 3.09.636-.636-3.09-3.091a1.011 1.011 0 1 1 1.43-1.43l4.22 4.22a5.317 5.317 0 0 1 1.469 2.769l.792 4.124.884-.17z">
                </path>
            </symbol>
            <symbol viewbox="0 0 41 40" id="icon-asterisk_small" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.475 9a.832.832 0 0 0-.83.881l.458 7.674-7.207-2.827a.832.832 0 0 0-1.095.517L8.578 19.01a.832.832 0 0 0 .582 1.061l7.433 1.935-4.893 5.952a.832.832 0 0 0 .154 1.201l3.201 2.326a.832.832 0 0 0 1.19-.225l4.161-6.51 4.163 6.513a.832.832 0 0 0 1.19.225l3.2-2.326a.832.832 0 0 0 .154-1.2l-4.86-5.914 7.587-1.974a.832.832 0 0 0 .582-1.062l-1.223-3.763a.832.832 0 0 0-1.095-.517L22.8 17.595l.461-7.714a.832.832 0 0 0-.83-.881h-3.957z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-backward" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.707 23.497a3.82 3.82 0 0 1-1.237-.204 3.102 3.102 0 0 1-1.018-.554l-.615 1.11a4.036 4.036 0 0 0 1.303.654 5.331 5.331 0 0 0 1.59.238 3.904 3.904 0 0 0 1.677-.326 2.344 2.344 0 0 0 1.028-.874 2.27 2.27 0 0 0 .342-1.22 2.077 2.077 0 0 0-.561-1.486 2.597 2.597 0 0 0-1.628-.726l1.87-2.222v-.957H14.21v1.2h3.498l-1.749 2.078v.979h.704a2.138 2.138 0 0 1 1.26.303.986.986 0 0 1 .412.841.996.996 0 0 1-.434.853 2.007 2.007 0 0 1-1.194.313zM22.273 24.273a3.154 3.154 0 0 0 3.306 0 3.146 3.146 0 0 0 1.15-1.364 4.994 4.994 0 0 0 .417-2.128 4.998 4.998 0 0 0-.418-2.13 3.152 3.152 0 0 0-1.15-1.364 3.16 3.16 0 0 0-3.305 0 3.164 3.164 0 0 0-1.144 1.365 4.998 4.998 0 0 0-.418 2.129 4.994 4.994 0 0 0 .418 2.128 3.159 3.159 0 0 0 1.144 1.364zm.358-5.528a1.576 1.576 0 0 1 2.596 0 3.548 3.548 0 0 1 .478 2.036 3.547 3.547 0 0 1-.478 2.034 1.576 1.576 0 0 1-2.596 0 3.547 3.547 0 0 1-.479-2.034 3.548 3.548 0 0 1 .479-2.036z">
                </path>
                <path d="M20 7.397h-9.963l3.66-3.24-1.162-1.311-5.138 4.55h-.002V7.4l-.246.218a.876.876 0 0 0-.038 1.274L11.92 13.7l1.237-1.238-3.316-3.315H20a11.906 11.906 0 0 1 12.208 11.852 12.208 12.208 0 1 1-24.416 0v-.875h-1.75V21a13.958 13.958 0 1 0 27.916 0A13.637 13.637 0 0 0 20 7.397z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-backward_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.772H9.048l4.118-3.648-.663-.749-5.106 4.523a.5.5 0 0 0-.022.728l4.544 4.544.707-.707-3.69-3.69H20A12.277 12.277 0 0 1 32.583 21a12.583 12.583 0 0 1-25.166 0v-.5h-1v.5a13.583 13.583 0 0 0 27.166 0A13.267 13.267 0 0 0 20 7.772z">
                </path>
                <path d="M18.195 23.376a2.167 2.167 0 0 1-1.337.363 3.773 3.773 0 0 1-1.308-.225 2.91 2.91 0 0 1-1.012-.6l-.506.87a3.376 3.376 0 0 0 1.242.687 5.078 5.078 0 0 0 1.584.247 3.686 3.686 0 0 0 1.601-.314 2.27 2.27 0 0 0 .984-.846 2.222 2.222 0 0 0 .33-1.194 2.024 2.024 0 0 0-.593-1.502 2.748 2.748 0 0 0-1.727-.698l2.012-2.486v-.748h-5.081v.957h3.706l-1.935 2.376v.77h.616a2.391 2.391 0 0 1 1.43.352 1.164 1.164 0 0 1 .472.99 1.187 1.187 0 0 1-.478 1.001zM22.32 24.25a3.03 3.03 0 0 0 3.234 0 3.132 3.132 0 0 0 1.116-1.358 5.043 5.043 0 0 0 .408-2.112 5.044 5.044 0 0 0-.408-2.112 3.138 3.138 0 0 0-1.116-1.358 3.03 3.03 0 0 0-3.234 0 3.134 3.134 0 0 0-1.116 1.358 5.044 5.044 0 0 0-.408 2.112 5.043 5.043 0 0 0 .408 2.112 3.129 3.129 0 0 0 1.116 1.358zm.132-5.67a1.832 1.832 0 0 1 2.97 0 3.688 3.688 0 0 1 .556 2.2 3.687 3.687 0 0 1-.556 2.2 1.83 1.83 0 0 1-2.97 0 3.687 3.687 0 0 1-.556-2.2 3.688 3.688 0 0 1 .556-2.2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-backward_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.022h-8.974l3.2-2.833-1.659-1.872L6.9 7.337a1.25 1.25 0 0 0-.055 1.819l5.074 5.075 1.768-1.768-2.941-2.941H20A11.536 11.536 0 0 1 31.833 21a11.833 11.833 0 0 1-23.667 0v-1.25h-2.5V21a14.333 14.333 0 0 0 28.667 0A14.008 14.008 0 0 0 20 7.022z">
                </path>
                <path d="M16.081 23.51a3.915 3.915 0 0 1-1.182-.183 3.335 3.335 0 0 1-1.018-.51l-.693 1.363a4.123 4.123 0 0 0 1.337.611 6.069 6.069 0 0 0 1.6.214 4.106 4.106 0 0 0 1.766-.34 2.452 2.452 0 0 0 1.072-.908 2.303 2.303 0 0 0 .352-1.237 2.08 2.08 0 0 0-.539-1.458 2.593 2.593 0 0 0-1.55-.754l1.737-1.98v-1.155h-5.39v1.43h3.278l-1.584 1.794v1.177h.814q1.441 0 1.441.946a.832.832 0 0 1-.385.731 1.88 1.88 0 0 1-1.056.258zM21.735 24.533a3.312 3.312 0 0 0 3.41 0 3.17 3.17 0 0 0 1.171-1.37 4.97 4.97 0 0 0 .424-2.14 4.972 4.972 0 0 0-.424-2.139 3.177 3.177 0 0 0-1.171-1.37 3.312 3.312 0 0 0-3.41 0 3.176 3.176 0 0 0-1.172 1.37 4.972 4.972 0 0 0-.423 2.14 4.97 4.97 0 0 0 .423 2.138 3.17 3.17 0 0 0 1.172 1.37zm.61-5.38a1.302 1.302 0 0 1 2.2 0 3.44 3.44 0 0 1 .402 1.87 3.436 3.436 0 0 1-.402 1.87 1.302 1.302 0 0 1-2.2 0 3.436 3.436 0 0 1-.401-1.87 3.44 3.44 0 0 1 .401-1.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-calendar_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.414 10.469h-3.506V8.042h-2v2.427h-7.816V8.042h-2v2.427h-3.506a2.567 2.567 0 0 0-2.571 2.556v16.377a2.566 2.566 0 0 0 2.57 2.556h18.83a2.566 2.566 0 0 0 2.57-2.556V13.025a2.567 2.567 0 0 0-2.57-2.556zm0 18.989l-18.9-.056.044-9.99h18.9zm.052-12.047h-18.9l.02-4.442 3.506.01v1.524h2v-1.518l7.816.024v1.494h2v-1.488l3.577.01z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-chat" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.94 9h6.157C28.567 9 33 13.433 33 18.902a9.856 9.856 0 0 1-3.075 7.172 9.964 9.964 0 0 1-2.032 1.493l-.002.001-.004.002.006.001-10.119 5.667zm.312-6.492V31l4.41-2.47-.043-.006 4.561-2.528a8.09 8.09 0 0 0 4.186-7.094 8.102 8.102 0 0 0-8.102-8.102h-6.157A8.141 8.141 0 0 0 8.8 18.941a7.759 7.759 0 0 0 7.536 7.756l1.75.049zm-3.027-8.997a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-chat_big" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.941 9h6.157C28.567 9 33 13.433 33 18.902a9.87 9.87 0 0 1-3.872 7.854c-.39.3-.803.571-1.234.81l-.003.002-.004.002.006.001-10.119 5.667zm-.488-5.714v4.841l7.609-4.26-.027-.005 2.534-1.404C30.128 25.186 32 22.284 32 18.902A8.902 8.902 0 0 0 23.098 10h-6.157A8.941 8.941 0 0 0 8 18.941a8.56 8.56 0 0 0 8.314 8.556l.972.027zm-2.227-9.776a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-chat_filled" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.286 32.365a1 1 0 0 0 1.488.873l10.119-5.667h-.006l.004-.003.003-.001a9.964 9.964 0 0 0 2.031-1.493A9.856 9.856 0 0 0 33 18.902C33 13.433 28.567 9 23.098 9h-6.157C11.451 9 7 13.45 7 18.941c0 5.188 4.133 9.41 9.286 9.555v3.87zm-1.227-14.617a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm4.907 0a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5zm3.657 1.25a1.25 1.25 0 1 1 2.5 0 1.25 1.25 0 0 1-2.5 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-chat_filled_counter" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.94 9h6.157C28.567 9 33 13.433 33 18.902a9.856 9.856 0 0 1-3.075 7.172 9.964 9.964 0 0 1-2.032 1.493l-.002.001-.004.002.006.001-10.119 5.667z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-chat_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.431 9A9.431 9.431 0 0 0 7 18.431a9.069 9.069 0 0 0 9.069 9.069h.217v4.772a1 1 0 0 0 1.528.85l10.659-6.63h-.004A9.417 9.417 0 0 0 33 18.432 9.432 9.432 0 0 0 23.568 9h-7.137z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 32.375A12.375 12.375 0 1 1 32.375 20 12.39 12.39 0 0 1 20 32.375zm0-23A10.625 10.625 0 1 0 30.625 20 10.637 10.637 0 0 0 20 9.375z">
                </path>
                <path d="M18.31 24.902a1.885 1.885 0 0 1-1.498-.732l-2.487-3.64 1.446-.987 2.454 3.597a.17.17 0 0 0 .2-.044l5.614-8.338 1.451.977-5.649 8.387a1.908 1.908 0 0 1-1.531.78z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 32a12 12 0 1 1 12-12 12.014 12.014 0 0 1-12 12zm0-23a11 11 0 1 0 11 11A11.012 11.012 0 0 0 20 9z">
                </path>
                <path d="M18.31 24.849a1.571 1.571 0 0 1-1.247-.61l-2.372-3.471.826-.564 2.354 3.447a.617.617 0 0 0 .898-.026l5.71-8.474.83.559-5.731 8.502a1.584 1.584 0 0 1-1.267.637z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check_only" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.604 27.84a1.868 1.868 0 0 1-1.409-.638l-5.37-6.133 1.316-1.152 5.37 6.132c.026.028.065.056.098.042a.12.12 0 0 0 .095-.049l11.882-15.477 1.389 1.066-11.883 15.476a1.866 1.866 0 0 1-1.425.733h-.063z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check_only_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.605 27.466a1.495 1.495 0 0 1-1.128-.512l-5.123-5.85.752-.659 5.123 5.85a.49.49 0 0 0 .393.17.496.496 0 0 0 .38-.194l11.653-15.18.794.608-11.654 15.18a1.493 1.493 0 0 1-1.14.586z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check_only_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.604 28.216a2.24 2.24 0 0 1-1.69-.767l-5.619-6.415 1.88-1.646 5.417 6.183L29.517 10.04l1.983 1.523-12.11 15.773a2.24 2.24 0 0 1-1.71.88h-.076zm.19-2.414z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-check_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 8.5A11.5 11.5 0 1 0 31.5 20 11.5 11.5 0 0 0 20 8.5zm-.048 16.063a2.227 2.227 0 0 1-1.79.915 2.198 2.198 0 0 1-1.745-.853l-2.792-4.089 1.817-1.24 2.751 4.033 6.157-9.233 1.824 1.228z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-close" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.41 11.827l-1.237-1.237L20 18.763l-8.128-8.128-1.237 1.237L18.763 20l-8.173 8.173 1.237 1.237L20 21.237l8.17 8.171 1.238-1.237L21.237 20l8.173-8.173z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-close_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.88 11.827l-.707-.707L20 19.293l-8.128-8.128-.707.707L19.293 20l-8.173 8.173.707.707L20 20.707l8.17 8.171.707-.707L20.707 20l8.173-8.173z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-close_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.94 11.827l-1.767-1.767L20 18.233l-8.128-8.129-1.768 1.768L18.232 20l-8.172 8.173 1.767 1.767L20 21.768l8.17 8.17 1.768-1.767L21.767 20l8.173-8.173z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-deselect" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 32.375A12.375 12.375 0 1 1 32.375 20 12.39 12.39 0 0 1 20 32.375zm0-23A10.625 10.625 0 1 0 30.625 20 10.637 10.637 0 0 0 20 9.375z">
                </path>
                <path d="M14.75 19.125h10.5v1.75h-10.5z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-deselect_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 31.666a12 12 0 1 1 12-12 12.014 12.014 0 0 1-12 12zm0-23a11 11 0 1 0 11 11 11.012 11.012 0 0 0-11-11z">
                </path>
                <path d="M14.779 19.166h10.442v1H14.779z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-deselect_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 8.5A11.5 11.5 0 1 0 31.5 20 11.5 11.5 0 0 0 20 8.5zm5.961 12.376H14.04v-2.2H25.96z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-dislike" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27 13h1a2 2 0 1 1 0 4h-1 2a2 2 0 1 1 0 4 2 2 0 1 1 0 4h-7v5.051A3.949 3.949 0 0 1 18.051 34a.987.987 0 0 1-.987-.987v-5.524L13 21v-8a4 4 0 0 1 4-4h10a2 2 0 1 1 0 4zM12 23.016V11H8v12.016h4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-dislike_circle" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm4.8-16.2h-.599a1.2 1.2 0 0 0-.001-2.4h-6a2.4 2.4 0 0 0-2.4 2.4v4.8l2.438 3.893v3.315c0 .327.265.592.593.592a2.37 2.37 0 0 0 2.369-2.37V24h4.2a1.2 1.2 0 0 0 0-2.4 1.2 1.2 0 0 0 0-2.4h-1.2.6a1.2 1.2 0 0 0 0-2.4zm-9.6-1.2v7.21h-2.4V15.6h2.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.837 20.158l-4.962 5.275V10.882h-1.75v14.57l-4.962-5.294-1.275 1.2 5.731 6.091a1.686 1.686 0 0 0 2.762 0l5.73-6.092z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.273 20.736l-5.636 5.873V11.077h-1v15.52L14 20.737l-.721.693 5.708 5.923a1.369 1.369 0 0 0 1.149.629 1.301 1.301 0 0 0 1.09-.555l5.767-5.997z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.915 20.212l-4.665 5.136V10.536h-2.5v14.812l-4.665-5.136-1.85 1.68 6.066 6.68a2.062 2.062 0 0 0 3.398 0l6.067-6.68z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 27.163a1.864 1.864 0 0 1-1.48-.725l-8.498-10.924 1.381-1.075 8.498 10.925a.125.125 0 0 0 .198 0l8.498-10.925 1.381 1.075-8.498 10.924a1.862 1.862 0 0 1-1.48.725z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 26.788a1.491 1.491 0 0 1-1.184-.579l-8.268-10.63.79-.614 8.267 10.63a.516.516 0 0 0 .79 0l8.267-10.63.79.614-8.268 10.63a1.491 1.491 0 0 1-1.184.58z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 27.538a2.236 2.236 0 0 1-1.777-.87l-8.727-11.22 1.973-1.535L20 24.881l8.53-10.968 1.974 1.535-8.728 11.221a2.236 2.236 0 0 1-1.776.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 25.536a1.871 1.871 0 0 1-1.141-.387L8.023 16.833l1.065-1.388 10.836 8.316a.124.124 0 0 0 .153 0l10.835-8.316 1.065 1.388-10.835 8.316a1.875 1.875 0 0 1-1.142.387z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 25.16a1.498 1.498 0 0 1-.914-.309L8.55 16.764l.609-.793 10.537 8.087a.5.5 0 0 0 .61 0l10.537-8.087.61.793-10.539 8.087a1.495 1.495 0 0 1-.913.31z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-down_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 25.91a2.248 2.248 0 0 1-1.37-.463L7.499 16.902 9.02 14.92 20 23.347l10.98-8.428 1.522 1.983-11.132 8.544a2.249 2.249 0 0 1-1.37.464z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-download" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.837 18.146l-4.962 5.276V8.87h-1.75v14.57l-4.963-5.294-1.274 1.199 5.731 6.092a1.686 1.686 0 0 0 2.762 0l5.73-6.092zM9.25 29.505h21.5v1.5H9.25z">
                </path>
            </symbol>
            <symbol id="icon-download_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="blcls-1" d="M20 27.192a1.258 1.258 0 0 0 1.06-.55l5.522-5.869-.728-.685L20.5 25.79V10.657h-1V25.78l-5.354-5.691-.728.685 5.464 5.795a1.324 1.324 0 0 0 1.118.624zM9.5 31.167h21v1h-21z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-e-mail" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.469 11.125H9.531a1.54 1.54 0 0 0-1.539 1.538v14.674a1.54 1.54 0 0 0 1.539 1.538h20.938a1.54 1.54 0 0 0 1.539-1.538V12.663a1.54 1.54 0 0 0-1.539-1.538zm-.211 1.75v.867c-.021.012-.045.014-.065.028L20.002 20.8 9.876 13.77a.83.83 0 0 0-.134-.057v-.839zM9.742 27.125V15.809l9.261 6.428a1.755 1.755 0 0 0 1.99.002l9.265-6.388v11.274z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-e-mail_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.47 10.75H9.53a1.916 1.916 0 0 0-1.913 1.913v14.674a1.916 1.916 0 0 0 1.914 1.913h20.938a1.916 1.916 0 0 0 1.914-1.913V12.663a1.916 1.916 0 0 0-1.914-1.913zm-.587 2.5v.572L20 20.646l-9.883-6.867v-.529zm-19.766 13.5V16.215l8.815 6.124a1.878 1.878 0 0 0 2.133.003l8.818-6.088V26.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-edit" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.353 32.019a.872.872 0 0 1-.622-.26.99.99 0 0 1-.27-.897l1.614-5.855a.88.88 0 0 1 .225-.387l11.41-11.41a.9.9 0 0 1 1.237 0l4.29 4.29a.876.876 0 0 1 0 1.238l-11.41 11.41a.878.878 0 0 1-.386.225l-5.856 1.614a.9.9 0 0 1-.232.032zm2.348-6.325L10.54 29.91l4.215-1.162L25.38 18.12l-3.052-3.053zM28.764 16.85a.871.871 0 0 1-.619-.256l-4.29-4.29a.876.876 0 0 1 0-1.239l2.15-2.15a.875.875 0 0 1 1.238 0l4.29 4.29a.876.876 0 0 1 0 1.238l-2.15 2.15a.871.871 0 0 1-.62.257zm-3.053-5.165l3.053 3.052.913-.913-3.053-3.053z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-edit_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.353 31.644A.5.5 0 0 1 9 31.499a.616.616 0 0 1-.179-.536l1.615-5.857a.494.494 0 0 1 .126-.218l12.152-12.283a.499.499 0 0 1 .354-.148h.001a.5.5 0 0 1 .354.147l4.29 4.29a.5.5 0 0 1 .002.705L15.564 29.88a.5.5 0 0 1-.222.13l-5.857 1.615a.514.514 0 0 1-.132.018zm2.013-6.146l-1.364 4.948 4.945-1.363 11.708-11.834-3.583-3.583zM28.763 16.475a.498.498 0 0 1-.353-.147l-4.29-4.29a.5.5 0 0 1 0-.707l2.15-2.15a.5.5 0 0 1 .708 0l4.29 4.29a.5.5 0 0 1 0 .707l-2.151 2.15a.498.498 0 0 1-.354.147zm-3.583-4.79l3.583 3.583 1.444-1.444-3.583-3.583z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-edit_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.695 31.929a1.1 1.1 0 0 1-1.017-1.519l2.78-6.75a1.112 1.112 0 0 1 .228-.348l8.59-8.84a1.095 1.095 0 0 1 .779-.332h.01a1.101 1.101 0 0 1 .774.318l4.33 4.29a1.1 1.1 0 0 1 .008 1.555l-8.7 8.8a1.106 1.106 0 0 1-.412.262l-7 2.5a1.105 1.105 0 0 1-.37.064zm3.717-7.236l-1.758 4.269 4.435-1.584 7.751-7.84-2.76-2.735zM27.145 17.83a1.103 1.103 0 0 1-.779-.323l-4.29-4.3a1.1 1.1 0 0 1 0-1.554l3.16-3.17a1.134 1.134 0 0 1 1.558 0l4.29 4.3a1.1 1.1 0 0 1 0 1.553l-3.16 3.17a1.1 1.1 0 0 1-.778.323zm-2.736-5.4l2.736 2.742 1.606-1.612-2.735-2.743z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-forward" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.071 23.497a3.82 3.82 0 0 1-1.237-.204 3.102 3.102 0 0 1-1.018-.554l-.615 1.11a4.036 4.036 0 0 0 1.303.654 5.331 5.331 0 0 0 1.59.238 3.905 3.905 0 0 0 1.677-.326 2.344 2.344 0 0 0 1.028-.874 2.27 2.27 0 0 0 .342-1.22 2.077 2.077 0 0 0-.561-1.486 2.597 2.597 0 0 0-1.628-.726l1.87-2.222v-.957h-5.248v1.2h3.498l-1.749 2.078v.979h.704a2.137 2.137 0 0 1 1.26.303.986.986 0 0 1 .412.841.996.996 0 0 1-.434.853 2.007 2.007 0 0 1-1.194.313zM24.943 17.287a3.16 3.16 0 0 0-3.306 0 3.164 3.164 0 0 0-1.144 1.365 4.998 4.998 0 0 0-.418 2.129 4.994 4.994 0 0 0 .418 2.128 3.159 3.159 0 0 0 1.144 1.364 3.154 3.154 0 0 0 3.306 0 3.146 3.146 0 0 0 1.15-1.364 4.994 4.994 0 0 0 .417-2.128 4.998 4.998 0 0 0-.418-2.13 3.152 3.152 0 0 0-1.15-1.364zm-.352 5.528a1.576 1.576 0 0 1-2.596 0 3.547 3.547 0 0 1-.479-2.034 3.548 3.548 0 0 1 .479-2.036 1.576 1.576 0 0 1 2.596 0 3.548 3.548 0 0 1 .478 2.036 3.547 3.547 0 0 1-.478 2.034z">
                </path>
                <path d="M32.166 20.124V21A12.208 12.208 0 1 1 7.75 21 11.906 11.906 0 0 1 19.958 9.147h10.159L26.8 12.462l1.237 1.238 4.81-4.809a.876.876 0 0 0-.039-1.274l-.246-.218v-.002h-.002l-5.138-4.551-1.16 1.31 3.658 3.24h-9.963A13.637 13.637 0 0 0 6 21a13.958 13.958 0 1 0 27.916 0v-.875z">
                </path>
            </symbol>
            <symbol id="icon-forward_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="bscls-1" d="M16.892 23.376a2.167 2.167 0 0 1-1.336.363 3.773 3.773 0 0 1-1.309-.225 2.91 2.91 0 0 1-1.012-.6l-.506.87a3.377 3.377 0 0 0 1.243.687 5.078 5.078 0 0 0 1.584.247 3.686 3.686 0 0 0 1.6-.314 2.27 2.27 0 0 0 .985-.846 2.222 2.222 0 0 0 .33-1.194 2.024 2.024 0 0 0-.594-1.502 2.748 2.748 0 0 0-1.727-.698l2.013-2.486v-.748H13.08v.957h3.707l-1.936 2.376v.77h.616a2.391 2.391 0 0 1 1.43.352 1.164 1.164 0 0 1 .473.99 1.187 1.187 0 0 1-.479 1.001zM24.251 17.31a3.03 3.03 0 0 0-3.234 0 3.134 3.134 0 0 0-1.116 1.358 5.044 5.044 0 0 0-.407 2.112 5.042 5.042 0 0 0 .407 2.112 3.129 3.129 0 0 0 1.116 1.358 3.03 3.03 0 0 0 3.234 0 3.132 3.132 0 0 0 1.117-1.358 5.043 5.043 0 0 0 .407-2.112 5.044 5.044 0 0 0-.407-2.112 3.138 3.138 0 0 0-1.117-1.358zm-.132 5.67a1.83 1.83 0 0 1-2.97 0 3.687 3.687 0 0 1-.555-2.2 3.688 3.688 0 0 1 .555-2.2 1.832 1.832 0 0 1 2.97 0 3.688 3.688 0 0 1 .556 2.2 3.687 3.687 0 0 1-.556 2.2z">
                </path>
                <path class="bscls-1" d="M31.583 20.5v.5a12.583 12.583 0 0 1-25.166 0A12.277 12.277 0 0 1 19 8.772h11.064l-3.691 3.69.707.708 4.544-4.544a.5.5 0 0 0-.022-.728l-5.105-4.523-.664.749 4.119 3.648H19A13.267 13.267 0 0 0 5.416 21a13.583 13.583 0 0 0 27.167 0v-.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-forward_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.833 19.75V21a11.833 11.833 0 0 1-23.667 0A11.536 11.536 0 0 1 19 9.522h9.254l-2.941 2.941 1.768 1.768 5.074-5.075a1.25 1.25 0 0 0-.055-1.82l-5.667-5.02-1.658 1.873 3.2 2.833H19A14.008 14.008 0 0 0 4.666 21a14.333 14.333 0 0 0 28.667 0v-1.25z">
                </path>
                <path d="M15.608 23.51a3.915 3.915 0 0 1-1.182-.183 3.335 3.335 0 0 1-1.018-.51l-.693 1.363a4.123 4.123 0 0 0 1.337.611 6.069 6.069 0 0 0 1.6.214 4.106 4.106 0 0 0 1.765-.34 2.452 2.452 0 0 0 1.073-.908 2.303 2.303 0 0 0 .352-1.237 2.08 2.08 0 0 0-.539-1.458 2.593 2.593 0 0 0-1.551-.754l1.738-1.98v-1.155H13.1v1.43h3.278l-1.584 1.794v1.177h.814q1.441 0 1.441.946a.832.832 0 0 1-.385.731 1.88 1.88 0 0 1-1.056.258zM24.672 17.514a3.312 3.312 0 0 0-3.41 0 3.177 3.177 0 0 0-1.172 1.37 4.972 4.972 0 0 0-.423 2.14 4.97 4.97 0 0 0 .423 2.138 3.17 3.17 0 0 0 1.172 1.37 3.312 3.312 0 0 0 3.41 0 3.17 3.17 0 0 0 1.171-1.37 4.97 4.97 0 0 0 .424-2.138 4.972 4.972 0 0 0-.424-2.14 3.176 3.176 0 0 0-1.171-1.37zm-.6 5.379a1.302 1.302 0 0 1-2.2 0 3.436 3.436 0 0 1-.401-1.87 3.44 3.44 0 0 1 .401-1.87 1.302 1.302 0 0 1 2.2 0 3.44 3.44 0 0 1 .402 1.87 3.436 3.436 0 0 1-.402 1.87z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-fullscreen" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.612 30.625H25.9v1.75h5.588a.875.875 0 0 0 .875-.875v-5.589h-1.75zM9.388 9.375H14.1v-1.75H8.513a.875.875 0 0 0-.875.875v5.588h1.75zM17.207 21.407l-7.832 7.975v-3.484h-1.75v5.59a.875.875 0 0 0 .875.874h5.588v-1.75H10.62l7.835-7.978zM31.5 7.637h-5.588v1.75h3.456l-7.704 7.563 1.226 1.25 7.735-7.595v3.496h1.75V8.51a.875.875 0 0 0-.875-.874z">
                </path>
            </symbol>
            <symbol id="icon-fullscreen_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="bvcls-1" d="M17.152 22.006L8.76 30.592l-.01-4.131-1 .002.013 5.323a.5.5 0 0 0 .501.498l5.323-.013-.002-1-4.1.01 8.382-8.575zM31.25 13.54l1-.003-.013-5.324a.5.5 0 0 0-.501-.498l-5.323.014.002 1 4.101-.011-8.263 8.162.703.711 8.284-8.183zM31.432 26.058l.014 5.329-5.515.014.002 1 6.016-.016a.5.5 0 0 0 .498-.501l-.015-5.828zM8.554 8.613l5.15-.014-.003-1-5.65.015a.5.5 0 0 0-.498.501l.015 5.837 1-.003z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-fullscreen_exit" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.204 21.773h-5.581v1.75h3.46l-7.82 7.965 1.248 1.226 7.818-7.962v3.477h1.75v-5.58a.875.875 0 0 0-.875-.876zM28.496 16.084h-3.454l7.695-7.549-1.225-1.249-7.722 7.575v-3.483h-1.75v5.581a.875.875 0 0 0 .875.875h5.58zM25.888 26.775v5.581h1.75V27.65h4.706V25.9h-5.58a.875.875 0 0 0-.876.875zM14.112 13.225V7.644h-1.75v4.706H7.656v1.75h5.58a.875.875 0 0 0 .876-.875z">
                </path>
            </symbol>
            <symbol id="icon-fullscreen_exit_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="bxcls-1" d="M16.948 22.391h-5.636v1h4.413L7.77 31.505l.713.7 7.965-8.123v4.445h1V22.89a.5.5 0 0 0-.5-.5zM28.817 16.181h-4.415l7.432-7.275-.7-.715-7.453 7.296v-4.442h-1v5.636a.5.5 0 0 0 .5.5h5.636zM26.401 26.088a.5.5 0 0 0-.5.5v5.828h1v-5.328h5.515v-1zM13.733 13.42V7.583h-1v5.337h-5.15v1h5.65a.5.5 0 0 0 .5-.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-fullscreen_exit_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.87 15.71h-3.123l7.309-7.172-1.541-1.57-7.35 7.212v-3.176h-2.5v5.956a1.25 1.25 0 0 0 1.25 1.25h5.956zM17.204 21.4h-5.956v2.5h3.147l-7.45 7.591 1.57 1.541 7.439-7.58v3.152h2.5V22.65a1.25 1.25 0 0 0-1.25-1.25zM25.513 26.775v5.956h2.5v-4.706h4.706v-2.5h-5.956a1.25 1.25 0 0 0-1.25 1.25zM14.487 13.225V7.269h-2.5v4.706H7.28v2.5h5.956a1.25 1.25 0 0 0 1.25-1.25z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-fullscreen_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.238 30.25h-4.714v2.5h5.964a1.25 1.25 0 0 0 1.25-1.25v-5.963h-2.5zM9.762 9.75h4.714v-2.5H8.512a1.25 1.25 0 0 0-1.25 1.25v5.964h2.5zM31.5 7.263h-5.964v2.5h3.133l-7.324 7.184 1.54 1.57 7.365-7.224v3.183h2.5V8.513a1.25 1.25 0 0 0-1.25-1.25zM17.203 21.09L9.75 28.682v-3.158h-2.5v5.963a1.25 1.25 0 0 0 1.25 1.25h5.963v-2.5h-3.156l7.466-7.606z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-graphic" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 10.167a1.5 1.5 0 0 1 1.5-1.5h6a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5zm0 16a1.5 1.5 0 0 1 1.5-1.5h12a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-12a1.5 1.5 0 0 1-1.5-1.5zm1.5-9.508a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 1.5 1.5h19a1.5 1.5 0 0 0 1.5-1.5v-3a1.5 1.5 0 0 0-1.5-1.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-haha" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm9.5-13.327c0 5.737-4.253 9.827-9.5 9.827s-9.5-4.09-9.5-9.827v-1.239c0-.341.392-.544.684-.358 6.132 3.906 11.429 3.904 17.634-.006.292-.184.682.018.682.358v1.245z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-hide_comment" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.941 9h6.157C28.567 9 33 13.433 33 18.902a9.856 9.856 0 0 1-3.075 7.172 9.967 9.967 0 0 1-2.031 1.493l-.003.001-.004.002.006.001-10.119 5.667zm.312-6.492V31l4.41-2.47-.043-.006 4.562-2.528a8.09 8.09 0 0 0 4.185-7.094 8.102 8.102 0 0 0-8.102-8.102h-6.157A8.141 8.141 0 0 0 8.8 18.941a7.759 7.759 0 0 0 7.536 7.756l1.75.049zm6.194-13.041l1.056 1.063-4.273 4.264 4.277 4.264-1.06 1.06L20 20.091l-4.275 4.265-1.061-1.059 4.275-4.265-4.278-4.264 1.058-1.063L20 17.973l4.28-4.268z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-hide_comment_big" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.941 9h6.157C28.567 9 33 13.433 33 18.902a9.87 9.87 0 0 1-3.872 7.854c-.39.3-.803.571-1.234.81l-.003.002-.004.002.006.001-10.119 5.667zm-.488-5.714v4.841l7.609-4.26-.027-.005 2.534-1.404C30.128 25.186 32 22.284 32 18.902A8.902 8.902 0 0 0 23.098 10h-6.157A8.941 8.941 0 0 0 8 18.941a8.56 8.56 0 0 0 8.314 8.556l.972.027zm6.999-13.564l.7.71-4.27 4.27 4.27 4.26-.7.71-4.28-4.27-4.28 4.27-.71-.71 4.28-4.26-4.28-4.27.71-.71 4.28 4.27 4.28-4.27z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-hide_comment_small" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.774 33.238a1 1 0 0 1-1.488-.873v-3.869C11.133 28.352 7 24.13 7 18.941 7 13.451 11.45 9 16.941 9h6.157C28.567 9 33 13.433 33 18.902a9.847 9.847 0 0 1-2.562 6.646 9.977 9.977 0 0 1-2.544 2.019l-.003.001-.004.002.006.001-10.119 5.667zm.912-7.075v3.814l2.011-1.127-.055-.009 6.082-3.37a7.49 7.49 0 0 0 3.876-6.57 7.502 7.502 0 0 0-7.502-7.501h-6.157A7.541 7.541 0 0 0 9.4 18.941a7.159 7.159 0 0 0 6.953 7.156l2.333.066zm5.234-13.01l1.76 1.77-3.99 3.99 4 3.98-1.77 1.77-4-3.98-4 3.98-1.77-1.76 4-3.99-4-3.99 1.76-1.77 4.01 4 4-4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-hide_user_comments" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.528 11.004l1.766 2a27.198 27.198 0 0 0-6.744 6.472.875.875 0 0 0 0 1.048C8.054 23.865 13.26 29.47 20 29.47a13.25 13.25 0 0 0 5.664-1.332l1.89 2.138 1.31-1.16L11.84 9.846zM20 27.72c-5.65 0-10.215-4.614-12.648-7.719a24.625 24.625 0 0 1 6.111-5.673l2.2 2.49A5.323 5.323 0 0 0 14.604 20 5.403 5.403 0 0 0 20 25.396a5.287 5.287 0 0 0 2.626-.698l1.826 2.067A11.355 11.355 0 0 1 20 27.72zm1.6-4.182a3.787 3.787 0 0 1-1.6.36A3.901 3.901 0 0 1 16.104 20a3.847 3.847 0 0 1 .58-2.027zM24.96 22.12a5.342 5.342 0 0 0-6.437-7.285l1.15 1.302c.11-.01.215-.033.327-.033a3.885 3.885 0 0 1 3.807 4.713z">
                </path>
                <path d="M34.45 19.476C31.946 16.135 26.74 10.53 20 10.53a12.883 12.883 0 0 0-4.528.852l1.253 1.418A10.96 10.96 0 0 1 20 12.28c5.65 0 10.215 4.614 12.648 7.719a25.843 25.843 0 0 1-5.121 5.026l1.159 1.313a28.302 28.302 0 0 0 5.764-5.815.875.875 0 0 0 0-1.048z">
                </path>
            </symbol>
            <symbol id="icon-hide_user_comments_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="cgcls-1" d="M24.155 24.294a5.14 5.14 0 0 0 1.098-3.156 5.197 5.197 0 0 0-5.191-5.19 5.134 5.134 0 0 0-2.628.739l.736.833a4.05 4.05 0 0 1 1.892-.484 4.094 4.094 0 0 1 3.366 6.436zM26.686 28.669l-.764-.865-2.456-2.778h.001l-.718-.813-5.408-6.12v-.001l-.718-.813-2.525-2.857-.764-.866-1.859-2.102-.749.662 1.73 1.957a24.332 24.332 0 0 0-6.658 6.724l-.228.321.228.321c4.36 6.146 8.74 8.888 14.202 8.888a13.807 13.807 0 0 0 5.739-1.22l1.516 1.716.749-.662-1.319-1.492zm-4.778-3.898a3.971 3.971 0 0 1-1.846.47 4.107 4.107 0 0 1-4.103-4.103 4.009 4.009 0 0 1 .725-2.28zM20 29.218c-4.972 0-9.015-2.502-13.068-8.1a22.426 22.426 0 0 1 6.275-6.194l2.733 3.094a5.1 5.1 0 0 0-1.07 3.12 5.197 5.197 0 0 0 5.192 5.192 5.06 5.06 0 0 0 2.586-.72l2.315 2.619a12.718 12.718 0 0 1-4.963.99z">
                </path>
                <path class="cgcls-1" d="M34.202 20.797C29.843 14.651 25.462 11.91 20 11.91a13.822 13.822 0 0 0-5.737 1.188l.784.887A12.745 12.745 0 0 1 20 13.018c4.973 0 9.016 2.502 13.068 8.1a22.497 22.497 0 0 1-6.253 6.186l.75.85a24.382 24.382 0 0 0 6.637-6.715l.228-.32z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-hide_user_comments_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.507 18.597C30.162 12.939 25.009 9.823 20 9.823a13.415 13.415 0 0 0-5.12 1.069l1.756 2.018A10.557 10.557 0 0 1 20 12.323c5.401 0 9.822 4.406 12.17 7.344a24.65 24.65 0 0 1-5.303 5.003l1.655 1.901a27.048 27.048 0 0 0 5.986-5.836 1.758 1.758 0 0 0-.001-2.138z">
                </path>
                <path d="M19.92 15.096a4.38 4.38 0 0 0-1.216.19l5.35 6.15a4.408 4.408 0 0 0 .393-1.813 4.526 4.526 0 0 0-4.527-4.527zM26.802 27.642l-1.683-1.935-.028.015-2.291-2.634.022-.02-5.915-6.799c-.007.007-.016.011-.024.018l-2.22-2.551.029-.014-1.677-1.926-.027.014-1.95-2.24-1.885 1.64 1.72 1.978a27.817 27.817 0 0 0-5.381 5.41 1.761 1.761 0 0 0 0 2.14C9.839 26.394 14.99 29.51 20 29.51a13.184 13.184 0 0 0 4.39-.787l1.889 2.172 1.886-1.64-1.39-1.599zM20 27.01c-5.403 0-9.825-4.408-12.17-7.344a25.457 25.457 0 0 1 4.69-4.587l3.016 3.468a4.48 4.48 0 0 0 4.384 5.6 4.4 4.4 0 0 0 .45-.044l2.228 2.56a10.385 10.385 0 0 1-2.598.347z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.783 18.791h-14.57l5.294-4.962-1.198-1.275-6.093 5.73a1.687 1.687 0 0 0 0 2.763l6.092 5.731 1.2-1.275-5.275-4.962h14.55z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_send_big_" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.66 19.236H13.14L19 13.6l-.694-.721-5.922 5.708a1.369 1.369 0 0 0-.63 1.15 1.301 1.301 0 0 0 .556 1.089l5.996 5.767.694-.72-5.873-5.637H28.66z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.605 18.416H14.793l5.136-4.665-1.68-1.85-6.68 6.065a2.063 2.063 0 0 0 0 3.4l6.679 6.066 1.68-1.85-5.135-4.666h14.812z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.153 29.645l-10.925-8.498a1.874 1.874 0 0 1 0-2.96l10.925-8.498 1.075 1.381-10.926 8.497a.126.126 0 0 0 0 .199l10.926 8.498z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.088 29.118l-10.63-8.267a1.5 1.5 0 0 1 0-2.368l10.63-8.268.614.79-10.63 8.267a.5.5 0 0 0 0 .79l10.63 8.267z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.22 30.17l-11.223-8.728a2.25 2.25 0 0 1 0-3.551L24.22 9.163l1.535 1.974-10.968 8.53 10.968 8.53z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.833 31.644l-8.315-10.836a1.878 1.878 0 0 1 0-2.283L22.833 7.69l1.389 1.066-8.316 10.835a.126.126 0 0 0 0 .152l8.316 10.835z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.902 31.118L14.815 20.58a1.503 1.503 0 0 1 0-1.827l8.087-10.538.794.61-8.088 10.537a.502.502 0 0 0 0 .61l8.088 10.537z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-left_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.764 32.17L14.22 21.036a2.256 2.256 0 0 1 0-2.74l8.544-11.132 1.983 1.523-8.427 10.98 8.427 10.98z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lightning" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.372 9.375h.005m-.005 0l-3.5 8.75h8.25l-13.5 12.5 3.503-8.75h-8.247l13.494-12.5m0-1.5h-.029a1.494 1.494 0 0 0-.994.403L9.859 20.775a1.5 1.5 0 0 0 1.02 2.6h6.03l-2.68 6.693a1.5 1.5 0 0 0 2.412 1.658l13.5-12.5a1.5 1.5 0 0 0-1.02-2.601h-6.034l2.647-6.617a1.5 1.5 0 0 0-1.356-2.133zm0 3z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lightning_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.372 10.042h.005m-.005 0l-3.5 8.75h8.25l-13.5 12.5 3.503-8.75h-8.247l13.494-12.5m0-1h-.018a.997.997 0 0 0-.663.268L10.199 21.808a1 1 0 0 0 .68 1.734h6.768l-2.953 7.378a1 1 0 0 0 1.607 1.105l13.5-12.5a1 1 0 0 0-.68-1.733H22.35l2.928-7.32a1 1 0 0 0-.9-1.43h-.005zm0 2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lightning_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.916 8.183L9.378 21.48a.5.5 0 0 0 .337.869h8.432a.5.5 0 0 1 .464.687l-3.335 8.224a.5.5 0 0 0 .8.557L30.623 18.52a.5.5 0 0 0-.337-.869h-8.437a.5.5 0 0 1-.463-.687l3.332-8.225a.5.5 0 0 0-.8-.556z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-like" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 20l4.064-6.489V7.987c0-.545.442-.987.987-.987A3.949 3.949 0 0 1 22 10.949V16h7a2 2 0 1 1 0 4 2 2 0 1 1 0 4h-1a2 2 0 1 1 0 4h-1a2 2 0 1 1 0 4H17a4 4 0 0 1-4-4v-8zm-1-.016V32H8V19.984h4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-like_circle" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm-1.762-17.893L15.8 19v4.8a2.4 2.4 0 0 0 2.4 2.4h6a1.2 1.2 0 0 0 0-2.4h.6a1.2 1.2 0 0 0 0-2.4h.6a1.2 1.2 0 0 0 0-2.4 1.2 1.2 0 0 0 0-2.4h-4.2v-3.03a2.37 2.37 0 0 0-2.37-2.37.592.592 0 0 0-.592.592v3.315zM15.2 26.2v-7.21h-2.4v7.21h2.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-live" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.496 14.238h1.22a.176.176 0 0 1 .177.177v8.987a.176.176 0 0 1-.176.177H9.496a.176.176 0 0 1-.176-.177v-8.987a.176.176 0 0 1 .176-.177zM13.033 15.479a.927.927 0 0 1 0-1.347 1.01 1.01 0 0 1 .717-.27 1.05 1.05 0 0 1 .949.54.205.205 0 0 1 .025.063 1.026 1.026 0 0 1-.25 1 .978.978 0 0 1-.724.284 1.01 1.01 0 0 1-.717-.27zm.1 1.378h1.221a.176.176 0 0 1 .177.176v6.37a.176.176 0 0 1-.177.176h-1.22a.176.176 0 0 1-.177-.177v-6.37a.176.176 0 0 1 .176-.175zM22.783 17.102l-2.731 6.37a.176.176 0 0 1-.162.107h-1.392a.176.176 0 0 1-.162-.107l-2.731-6.37a.176.176 0 0 1 .162-.245h1.252a.176.176 0 0 1 .162.108l1.885 4.494a.176.176 0 0 0 .324.002l1.942-4.498a.176.176 0 0 1 .162-.106h1.127a.176.176 0 0 1 .162.245zM29.811 20.722h-4.885a.178.178 0 0 0-.17.229 1.803 1.803 0 0 0 .669.948 2.376 2.376 0 0 0 1.454.433 2.465 2.465 0 0 0 1.7-.61.174.174 0 0 1 .245.02l.621.712a.175.175 0 0 1 0 .234 2.864 2.864 0 0 1-1.044.702 4.54 4.54 0 0 1-3.511-.164A3.174 3.174 0 0 1 23.587 22a3.467 3.467 0 0 1-.46-1.781 3.518 3.518 0 0 1 .447-1.768 3.167 3.167 0 0 1 1.24-1.228 3.614 3.614 0 0 1 1.788-.441 3.532 3.532 0 0 1 1.755.434 3.08 3.08 0 0 1 1.21 1.221 3.704 3.704 0 0 1 .433 1.82c0 .077-.004.177-.012.3a.178.178 0 0 1-.177.166zm-4.487-2.235a1.825 1.825 0 0 0-.591.968.178.178 0 0 0 .171.222h3.385a.178.178 0 0 0 .172-.22 1.816 1.816 0 0 0-.575-.963 1.877 1.877 0 0 0-1.284-.454 1.898 1.898 0 0 0-1.278.447z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-live_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.092 14.917h1.152v8.903h-1.152zM14.458 16.02a.71.71 0 0 1-.222-.528.727.727 0 0 1 .222-.533.757.757 0 0 1 .558-.223.782.782 0 0 1 .558.21.69.69 0 0 1 .222.522.742.742 0 0 1-.222.546.756.756 0 0 1-.558.223.768.768 0 0 1-.558-.216zm-.019 1.44h1.153v6.36h-1.153zM23.416 17.46l-2.785 6.36h-1.176l-2.784-6.36h1.2l2.184 5.1 2.232-5.1zM30.04 21.025h-5.161a2 2 0 0 0 .738 1.35 2.409 2.409 0 0 0 1.566.51 2.358 2.358 0 0 0 1.836-.769l.636.745a2.788 2.788 0 0 1-1.074.768 4.053 4.053 0 0 1-3.222-.15 2.95 2.95 0 0 1-1.206-1.159 3.32 3.32 0 0 1-.426-1.68 3.374 3.374 0 0 1 .414-1.668 2.964 2.964 0 0 1 1.14-1.157 3.242 3.242 0 0 1 1.638-.414 3.178 3.178 0 0 1 1.626.414 2.909 2.909 0 0 1 1.116 1.157 3.527 3.527 0 0 1 .402 1.704 3.263 3.263 0 0 1-.024.349zm-4.507-2.148a2.031 2.031 0 0 0-.654 1.32h4.08a2.046 2.046 0 0 0-.654-1.315 2.147 2.147 0 0 0-2.772-.005z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-live_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.602 18.373a1.899 1.899 0 0 0-1.278.448 1.824 1.824 0 0 0-.591.967.178.178 0 0 0 .171.222h3.385a.178.178 0 0 0 .172-.22 1.816 1.816 0 0 0-.575-.963 1.876 1.876 0 0 0-1.284-.454z">
                </path>
                <path d="M20 5a15 15 0 1 0 15 15A15 15 0 0 0 20 5zm-8.107 18.736a.176.176 0 0 1-.176.176h-1.221a.176.176 0 0 1-.176-.176v-8.988a.176.176 0 0 1 .176-.176h1.22a.176.176 0 0 1 .177.176zm3.638 0a.176.176 0 0 1-.177.176h-1.22a.176.176 0 0 1-.177-.176v-6.37a.176.176 0 0 1 .176-.176h1.221a.176.176 0 0 1 .177.176zm-.057-7.937a.979.979 0 0 1-.724.284 1.01 1.01 0 0 1-.717-.27.927.927 0 0 1 0-1.348 1.01 1.01 0 0 1 .717-.27 1.05 1.05 0 0 1 .949.54.205.205 0 0 1 .025.064 1.025 1.025 0 0 1-.25 1zm5.578 8.006a.176.176 0 0 1-.162.107h-1.392a.176.176 0 0 1-.162-.107l-2.731-6.37a.176.176 0 0 1 .162-.245h1.252a.176.176 0 0 1 .162.108l1.885 4.495a.176.176 0 0 0 .324.001l1.942-4.497a.176.176 0 0 1 .162-.107h1.127a.176.176 0 0 1 .162.246zm9.76-2.75h-4.886a.178.178 0 0 0-.17.23 1.804 1.804 0 0 0 .669.947 2.377 2.377 0 0 0 1.454.433 2.465 2.465 0 0 0 1.7-.61.174.174 0 0 1 .245.02l.621.713a.175.175 0 0 1 0 .233 2.866 2.866 0 0 1-1.044.703 4.542 4.542 0 0 1-3.511-.164 3.176 3.176 0 0 1-1.303-1.228 3.468 3.468 0 0 1-.46-1.781 3.518 3.518 0 0 1 .447-1.768 3.167 3.167 0 0 1 1.24-1.227 3.613 3.613 0 0 1 1.788-.442 3.531 3.531 0 0 1 1.756.435 3.08 3.08 0 0 1 1.208 1.22A3.704 3.704 0 0 1 31 20.59a4.6 4.6 0 0 1-.012.3.178.178 0 0 1-.177.166z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lock_user" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.914 22.109a5.31 5.31 0 0 1 .26-.732c.605-.09.543-.493.807-1.492.265-1.005.282-2.036-.304-2.124a6.032 6.032 0 0 0 .17-1.463c0-2.123-1.468-4.953-6.33-4.815a3.031 3.031 0 0 0 .159.86 5.04 5.04 0 0 0-2.283 1.258zM28.273 29.682l-.72-.814-1.578-1.785-.011-.003-2.863-3.24.004-.004-7.711-8.724-.002.007-2.994-3.387.004-.004-.992-1.123-.004.005-1.893-2.142-1.311 1.159 2.002 2.265A12.715 12.715 0 0 0 26.85 30.726l1.805 2.041 1.31-1.159-1.698-1.922zm-13.139-9.797c.264.999.203 1.402.808 1.492.29.573.433 1.938 1.418 2.857v1.45c0 .992-1.951 1.082-2.373 1.152a4.506 4.506 0 0 0-2.674 1.355A11.16 11.16 0 0 1 11.21 13.03l4.193 4.743c-.556.128-.527 1.13-.268 2.113z">
                </path>
                <path d="M20 8.75a11.235 11.235 0 0 1 8.523 18.573l.997 1.128A12.733 12.733 0 0 0 12.774 9.507l1 1.13A11.182 11.182 0 0 1 20 8.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lock_user_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.29 17.35a6.108 6.108 0 0 0 .107-1.189 4.76 4.76 0 0 0-1.413-3.402 6.706 6.706 0 0 0-5.039-1.587.375.375 0 0 0-.363.391 3.44 3.44 0 0 0 .068.554 5.064 5.064 0 0 0-2.392 1.622l.54.526a4.42 4.42 0 0 1 2.41-1.533.374.374 0 0 0 .254-.484 2.36 2.36 0 0 1-.087-.33 5.729 5.729 0 0 1 4.087 1.38 4.007 4.007 0 0 1 1.185 2.868 5.433 5.433 0 0 1-.152 1.305.434.434 0 0 0 .077.319.454.454 0 0 0 .282.182 2.426 2.426 0 0 1-.066 1.53c-.054.203-.093.38-.128.535-.132.59-.148.592-.338.62a.375.375 0 0 0-.28.202 2.736 2.736 0 0 0-.131.324l.599.583c.048-.155.09-.296.136-.415.525-.165.624-.606.746-1.15.033-.147.07-.315.121-.507a3.04 3.04 0 0 0-.032-2.134.86.86 0 0 0-.192-.21z">
                </path>
                <path d="M20.377 7.709a11.96 11.96 0 0 0-8.545 3.59.152.152 0 0 0-.08.087 11.986 11.986 0 1 0 8.625-3.677zm-11 12a10.942 10.942 0 0 1 2.801-7.307l3.295 3.204a6.54 6.54 0 0 0 .084 1.759.866.866 0 0 0-.19.218 3.098 3.098 0 0 0-.016 2.11c.05.193.089.362.122.51.122.542.221.983.746 1.148.045.12.088.262.137.418a5.11 5.11 0 0 0 1.116 2.155v1.232c0 .332-.583.569-1.731.704a5.822 5.822 0 0 0-.23.03 4.603 4.603 0 0 0-2.921 1.58 10.965 10.965 0 0 1-3.213-7.761zm3.761 8.261a3.93 3.93 0 0 1 2.496-1.34l.195-.024c.716-.085 2.393-.284 2.393-1.45v-1.39a.374.374 0 0 0-.12-.273 4.23 4.23 0 0 1-1.03-1.947 4.812 4.812 0 0 0-.25-.687.375.375 0 0 0-.279-.202c-.19-.028-.206-.03-.338-.62a14.066 14.066 0 0 0-.128-.535 2.122 2.122 0 0 1-.022-1.565.375.375 0 0 0 .292-.454 6.564 6.564 0 0 1-.144-1.166l6.926 6.737a2.604 2.604 0 0 1-.463.524.374.374 0 0 0-.134.287v1.291c0 1.166 1.677 1.364 2.394 1.45l.195.024a3.932 3.932 0 0 1 2.488 1.332 10.915 10.915 0 0 1-14.471.008zm10.144-3.936a3.264 3.264 0 0 0 .392-.45l2.684 2.61a5.672 5.672 0 0 0-1.115-.304 5.824 5.824 0 0 0-.23-.03c-1.148-.135-1.73-.372-1.73-.704zm5.323 2.95L12.876 11.687a10.982 10.982 0 0 1 15.729 15.299z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-lock_user_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.324 17.162a5.576 5.576 0 0 0 .158-1.352c0-1.963-1.358-4.58-5.853-4.452a2.807 2.807 0 0 0 .147.795 4.638 4.638 0 0 0-2.269 1.325l7.03 7.957a8.298 8.298 0 0 1 .322-.93c.56-.083.503-.455.746-1.379.245-.929.261-1.882-.281-1.964z">
                </path>
                <path d="M20 7.302A12.698 12.698 0 1 0 32.698 20 12.712 12.712 0 0 0 20 7.302zm-2.441 17.186c0 .917-1.804 1-2.194 1.065a4.09 4.09 0 0 0-2.772 1.59 10.243 10.243 0 0 1-.874-13.246l3.621 4.098a4.404 4.404 0 0 0 .161 1.13c.244.925.188 1.297.747 1.38a6.642 6.642 0 0 0 1.311 2.642zm9.13 3.33L13.066 12.402a10.287 10.287 0 1 1 13.621 15.416z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-more" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="19.667" r="1.999"></circle>
                <circle cx="27.998" cy="19.667" r="1.999"></circle>
                <circle cx="12.002" cy="19.667" r="1.999"></circle>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-more_big" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="19.667" r="1.5"></circle>
                <circle cx="27.498" cy="19.667" r="1.5"></circle>
                <circle cx="12.502" cy="19.667" r="1.5"></circle>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-more_small" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="19.667" r="2.499"></circle>
                <circle cx="28.997" cy="19.667" r="2.499"></circle>
                <circle cx="11.003" cy="19.667" r="2.499"></circle>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-mute" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.231 27.44L9.447 10.476 8.34 11.833l3.932 3.209a2.557 2.557 0 0 0-1.233 2.18v4.888a2.567 2.567 0 0 0 2.565 2.565H16.8l7.59 6.227a.96.96 0 0 0 1.57-.742v-3.946l3.164 2.582zm-6.192.689l-6.285-5.157a.958.958 0 0 0-.609-.22h-3.541a.643.643 0 0 1-.643-.642v-4.887a.643.643 0 0 1 .643-.643h.553l9.882 8.065zM24.04 11.204v8.627l1.92 1.568V9.173a.96.96 0 0 0-1.57-.742l-7.14 5.86 1.518 1.238z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-mute_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.704 27.493L26 24.471v-.002l-1.02-.832v.001l-9.213-7.519h.002l-1.226-1h-.002L9.5 11.005l-.632.774 4.11 3.355A1.043 1.043 0 0 0 12 16.168v6.997a1.05 1.05 0 0 0 1.049 1.049l4.43.012 6.806 5.585A1.05 1.05 0 0 0 26 29v-3.239l3.071 2.507zm-4.732 1.551a.047.047 0 0 1-.052-.007l-6.805-5.584a1.05 1.05 0 0 0-.666-.24l-4.45-.048.05-7.046h1.136l10.793 8.808zM17.449 16.12a1.057 1.057 0 0 0 .665-.238L25 10.334l-.018 12.014 1.018.83V10.335a1.05 1.05 0 0 0-1.715-.812l-6.836 5.597h-1.325l1.226 1z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-mute_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.423 28.464L9.877 11.484l-1.274 1.542 3.802 3.142a2.349 2.349 0 0 0-.917 1.857v3.992a2.362 2.362 0 0 0 2.362 2.362h3.18l7.492 6.15a.591.591 0 0 0 .966-.457V26.98l3.66 3.025zM25.488 9.97a.591.591 0 0 0-.966-.457L17.5 15.276l7.988 6.603z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-notification" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.937 22.418a21.266 21.266 0 0 1-.546-4.958 6.67 6.67 0 0 0-3.384-5.89c-.604-3.857-7.41-3.857-8.014 0a6.67 6.67 0 0 0-3.384 5.89 21.266 21.266 0 0 1-.546 4.958 2.599 2.599 0 0 0 .758 5.085H27.18a2.599 2.599 0 0 0 .758-5.085zm-.758 3.335H12.82a.848.848 0 0 1-.032-1.697l.606-.024.19-.576a20.395 20.395 0 0 0 .774-5.977 4.937 4.937 0 0 1 2.796-4.54l.546-.222v-.59c0-1.374 1.445-1.741 2.299-1.741s2.3.367 2.3 1.742v.589l.545.221a4.957 4.957 0 0 1 2.796 4.541 20.395 20.395 0 0 0 .775 5.977l.189.576.606.024a.848.848 0 0 1-.032 1.697zM22.967 29.08h-5.934a.508.508 0 0 0-.359.867 4.707 4.707 0 0 0 6.652 0 .508.508 0 0 0-.36-.866z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-notification_off" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.96 29.081h-5.934a.508.508 0 0 0-.359.867 4.71 4.71 0 0 0 6.652 0 .508.508 0 0 0-.359-.867zM29.682 25.543v-.001l-3.485-2.84-10.575-8.617h.001l-1.352-1.102h-.001L9.663 9.23l-1.106 1.357 4.735 3.859a6.899 6.899 0 0 0-.69 3.015 21.21 21.21 0 0 1-.546 4.958 2.599 2.599 0 0 0 .758 5.085h14.358a2.558 2.558 0 0 0 1.523-.506l2.952 2.406 1.106-1.358zm-16.868.21a.848.848 0 0 1-.033-1.696l.606-.024.19-.577a20.38 20.38 0 0 0 .775-5.977 5.31 5.31 0 0 1 .356-1.88l12.461 10.154zM17.148 12.938l.546-.222v-.589c0-1.374 1.445-1.741 2.3-1.741s2.298.367 2.298 1.741v.59l.546.22a4.957 4.957 0 0 1 2.796 4.54c.01 1.007.067 1.87.142 2.623l2 1.63a23.415 23.415 0 0 1-.392-4.27A6.67 6.67 0 0 0 24 11.57c-.604-3.858-7.41-3.858-8.014 0a6.946 6.946 0 0 0-.383.24l1.443 1.176c.052-.026.092-.044.102-.048z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-password" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.199 16.719h-2.011V14.77a6.188 6.188 0 0 0-12.376 0v1.948h-2.01a1.537 1.537 0 0 0-1.535 1.535V29.88a1.537 1.537 0 0 0 1.534 1.535H28.2a1.537 1.537 0 0 0 1.534-1.535V18.254a1.537 1.537 0 0 0-1.534-1.535zM15.562 14.77a4.438 4.438 0 0 1 8.876 0v1.948h-8.876zm12.421 14.895H12.017V18.469h15.966z">
                </path>
                <path d="M19.125 21.576h1.75v5.058h-1.75z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-pause" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.594 29.375h-4.75a.75.75 0 0 1-.75-.75v-17.25a.75.75 0 0 1 .75-.75h4.75a.75.75 0 0 1 .75.75v17.25a.75.75 0 0 1-.75.75zm-4-1.5h3.25v-15.75h-3.25zM27.156 29.375h-4.75a.75.75 0 0 1-.75-.75v-17.25a.75.75 0 0 1 .75-.75h4.75a.75.75 0 0 1 .75.75v17.25a.75.75 0 0 1-.75.75zm-4-1.5h3.25v-15.75h-3.25z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-pause_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.663 11h-5.3a.5.5 0 0 0-.5.5v17a.5.5 0 0 0 .5.5h5.3a.5.5 0 0 0 .5-.5v-17a.5.5 0 0 0-.5-.5zm-.5 17h-4.3V12h4.3zM27.638 11h-5.3a.5.5 0 0 0-.5.5v17a.5.5 0 0 0 .5.5h5.3a.5.5 0 0 0 .5-.5v-17a.5.5 0 0 0-.5-.5zm-.5 17h-4.3V12h4.3z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-pause_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 11.5h-2.857a1.335 1.335 0 0 0-1.429 1.214v14.572a1.335 1.335 0 0 0 1.429 1.214H16a1.335 1.335 0 0 0 1.429-1.214V12.714A1.335 1.335 0 0 0 16 11.5zM26.857 11.5H24a1.335 1.335 0 0 0-1.429 1.214v14.572A1.335 1.335 0 0 0 24 28.5h2.857a1.335 1.335 0 0 0 1.429-1.214V12.714a1.335 1.335 0 0 0-1.429-1.214z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-photo" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.3 29.958H8.7a.875.875 0 0 1-.875-.875V14.22a.875.875 0 0 1 .875-.875h5.034l2.351-2.971a.874.874 0 0 1 .686-.332h6.457a.874.874 0 0 1 .686.332l2.352 2.97H31.3a.875.875 0 0 1 .875.876v14.863a.875.875 0 0 1-.875.875zm-21.725-1.75h20.85V15.095h-4.582a.874.874 0 0 1-.686-.332l-2.352-2.971h-5.61l-2.352 2.97a.874.874 0 0 1-.686.333H9.575z">
                </path>
                <path d="M20 25.444a4.75 4.75 0 1 1 4.75-4.75 4.755 4.755 0 0 1-4.75 4.75zm0-8a3.25 3.25 0 1 0 3.25 3.25 3.254 3.254 0 0 0-3.25-3.25z">
                </path>
            </symbol>
            <symbol id="icon-photo_big_" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="dpcls-1" d="M30.3 29.583H9.7a1.502 1.502 0 0 1-1.5-1.5V15.22a1.502 1.502 0 0 1 1.5-1.5h3.973a.497.497 0 0 0 .392-.19l2.014-2.544a1.49 1.49 0 0 1 1.176-.569h5.49a1.49 1.49 0 0 1 1.176.57l2.014 2.543a.497.497 0 0 0 .392.19H30.3a1.502 1.502 0 0 1 1.5 1.5v12.863a1.502 1.502 0 0 1-1.5 1.5zM9.7 14.72a.5.5 0 0 0-.5.5v12.863a.5.5 0 0 0 .5.5h20.6a.5.5 0 0 0 .5-.5V15.22a.5.5 0 0 0-.5-.5h-3.973a1.494 1.494 0 0 1-1.177-.569l-2.013-2.544a.496.496 0 0 0-.392-.19h-5.49a.497.497 0 0 0-.392.19L14.85 14.15a1.494 1.494 0 0 1-1.177.57z">
                </path>
                <path d="M20 25.656a4.49 4.49 0 1 1 4.49-4.49 4.495 4.495 0 0 1-4.49 4.49zm0-8a3.51 3.51 0 1 0 3.51 3.51 3.514 3.514 0 0 0-3.51-3.51z">
                </path>
            </symbol>
            <symbol id="icon-photo_small" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="dqcls-1" d="M30.3 14.22h-3.973a1 1 0 0 1-.784-.38l-2.014-2.543a1 1 0 0 0-.784-.38h-5.49a1 1 0 0 0-.784.38l-2.014 2.544a1 1 0 0 1-.784.38H9.7a1 1 0 0 0-1 1v12.862a1 1 0 0 0 1 1h20.6a1 1 0 0 0 1-1V15.22a1 1 0 0 0-1-1zM20 25.166a4 4 0 1 1 4-4 4 4 0 0 1-4 4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.375 29.477a1.875 1.875 0 0 1-1.875-1.875V11.744a1.875 1.875 0 0 1 2.864-1.593l12.846 7.972a1.874 1.874 0 0 1-.008 3.19L15.355 29.2a1.878 1.878 0 0 1-.98.277zm.001-17.859a.128.128 0 0 0-.062.017.116.116 0 0 0-.064.11v15.857a.125.125 0 0 0 .19.107l12.847-7.887a.117.117 0 0 0 .06-.106.115.115 0 0 0-.06-.106l-12.846-7.972a.123.123 0 0 0-.065-.02z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_back" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.923 29.448a1.876 1.876 0 0 1-.989-.282l-12.846-7.972a1.874 1.874 0 0 1 .008-3.19l12.846-7.887a1.875 1.875 0 0 1 2.856 1.599v15.857a1.876 1.876 0 0 1-1.875 1.875zm-.066-1.768a.113.113 0 0 0 .127.003.116.116 0 0 0 .064-.11V11.716a.125.125 0 0 0-.19-.107l-12.846 7.886a.124.124 0 0 0-.001.212zM10.202 8.783h1.75v21.75h-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.517 30.316a.5.5 0 0 1-.5-.5V10.52a.5.5 0 0 1 .755-.43l16.3 9.7a.5.5 0 0 1-.002.86l-16.3 9.597a.498.498 0 0 1-.253.07zm.5-18.917v17.543l14.818-8.725z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.875A12.125 12.125 0 1 0 32.125 20 12.139 12.139 0 0 0 20 7.875zm5.594 12.867l-8.334 4.973A.833.833 0 0 1 16 25V15a.833.833 0 0 1 1.264-.714l8.333 5.027a.833.833 0 0 1-.003 1.429z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_invert_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.875A12.125 12.125 0 1 0 32.125 20 12.139 12.139 0 0 0 20 7.875zm4.675 12.719l-6.667 3.978A.667.667 0 0 1 17 24v-8a.667.667 0 0 1 1.011-.571l6.667 4.021a.667.667 0 0 1-.003 1.144z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_next" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.077 29.477a1.874 1.874 0 0 1-1.875-1.875V11.744a1.875 1.875 0 0 1 2.864-1.593l12.846 7.972a1.874 1.874 0 0 1-.008 3.19L13.058 29.2a1.881 1.881 0 0 1-.981.277zm0-17.859a.128.128 0 0 0-.061.017.116.116 0 0 0-.064.11v15.857a.116.116 0 0 0 .064.109.114.114 0 0 0 .126-.003l12.846-7.886a.124.124 0 0 0 .001-.212l-12.846-7.972a.123.123 0 0 0-.065-.02zM28.048 8.783h1.75v21.75h-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_podcast" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.692 17.537h-.59a11.916 11.916 0 0 0-11.03-7.771h-.077A11.911 11.911 0 0 0 8.89 17.537h-.582a1.585 1.585 0 0 0-1.584 1.585v5.245a1.585 1.585 0 0 0 1.584 1.585h1.968v-7.038a10.15 10.15 0 0 1 9.72-7.398h.064a10.156 10.156 0 0 1 9.664 7.425v7.011h1.968a1.585 1.585 0 0 0 1.584-1.585v-5.245a1.585 1.585 0 0 0-1.584-1.585z">
                </path>
                <path d="M20 14.207a8.395 8.395 0 1 0 8.395 8.395A8.405 8.405 0 0 0 20 14.207zm3.873 8.91l-5.77 3.442a.577.577 0 0 1-.873-.495V19.14a.577.577 0 0 1 .875-.494l5.77 3.48a.577.577 0 0 1-.002.99z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_podcast_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.692 16.913h-1.484a10.977 10.977 0 0 0-20.431 0H8.308a1.585 1.585 0 0 0-1.584 1.585v5.245a1.585 1.585 0 0 0 1.584 1.585h1.968v-7.196a10.183 10.183 0 0 1 9.719-7.306h.065a10.185 10.185 0 0 1 9.664 7.352v7.15h1.968a1.585 1.585 0 0 0 1.584-1.585v-5.245a1.585 1.585 0 0 0-1.584-1.585z">
                </path>
                <path d="M20 13.583a8.395 8.395 0 1 0 8.395 8.395A8.405 8.405 0 0 0 20 13.583zm3.237 8.806l-4.616 2.755a.462.462 0 0 1-.698-.397v-5.539a.462.462 0 0 1 .7-.395l4.616 2.785a.462.462 0 0 1-.002.791z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_podcast_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.692 17.84h-.955a12.461 12.461 0 0 0-23.545 0h-.884a1.585 1.585 0 0 0-1.584 1.584v5.245a1.584 1.584 0 0 0 1.584 1.585h2.968v-8.29a10.55 10.55 0 0 1 9.687-6.5h.067a10.553 10.553 0 0 1 9.694 6.679v8.11h2.968a1.584 1.584 0 0 0 1.584-1.584v-5.245a1.585 1.585 0 0 0-1.584-1.585z">
                </path>
                <path d="M20 14.51a8.395 8.395 0 1 0 8.395 8.394A8.405 8.405 0 0 0 20 14.51zm3.873 8.908l-5.77 3.443a.577.577 0 0 1-.872-.495v-6.924a.577.577 0 0 1 .875-.494l5.77 3.48a.577.577 0 0 1-.003.99z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-play_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.167 9.751a1.417 1.417 0 0 0-1.417 1.417v17a1.417 1.417 0 0 0 2.143 1.217l14.166-8.455a1.417 1.417 0 0 0 .006-2.43L14.898 9.956a1.416 1.416 0 0 0-.731-.204z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-plus" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.375 19.625h-10v-10h-1.75v10h-10v1.75h10v10h1.75v-10h10v-1.75z"></path>
            </symbol>
            <symbol id="icon-plus_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="eccls-1" d="M30.4 19.267h-9.9v-10.1h-1v10.1H9.6v.8h9.9v10.1h1v-10.1h9.9v-.8z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-plus_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.1 18.9h-9.85V8.75h-2.5V18.9H8.9v2.2h9.85v10.15h2.5V21.1h9.85v-2.2z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-question" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.467 27.568a1.756 1.756 0 1 1 1.757-1.756 1.758 1.758 0 0 1-1.757 1.756zM18.22 22.325a6.342 6.342 0 0 1 .297-1.726 4.424 4.424 0 0 1 1.417-1.56l.807-.633a3.04 3.04 0 0 0 .686-.7 2.475 2.475 0 0 0 .48-1.462 2.227 2.227 0 0 0-2.502-2.324 2.407 2.407 0 0 0-2.561 2.512h-2.782a4.905 4.905 0 0 1 2.1-4.094 5.638 5.638 0 0 1 3.104-.81 6.76 6.76 0 0 1 4.044 1.158 3.87 3.87 0 0 1 1.571 3.38 3.825 3.825 0 0 1-.679 2.306 8.129 8.129 0 0 1-1.574 1.49l-.786.61a2.602 2.602 0 0 0-.924 1.267 3.125 3.125 0 0 0-.109.586z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-question_add" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.696 15.493h-2.414v3.734h-3.8v2.26h3.8v3.734h2.414v-3.734h3.822v-2.26h-3.822v-3.734zM24.553 23.54a1.756 1.756 0 1 0 1.757 1.757 1.758 1.758 0 0 0-1.757-1.757zM28.396 12.17a6.76 6.76 0 0 0-4.044-1.158 5.638 5.638 0 0 0-3.105.81 4.905 4.905 0 0 0-2.1 4.095h2.782a2.407 2.407 0 0 1 2.562-2.512 2.227 2.227 0 0 1 2.502 2.324 2.475 2.475 0 0 1-.48 1.462 3.04 3.04 0 0 1-.686.7l-.807.632a4.424 4.424 0 0 0-1.417 1.56 6.34 6.34 0 0 0-.296 1.727h2.588a3.125 3.125 0 0 1 .11-.586 2.602 2.602 0 0 1 .923-1.267l.785-.61a8.129 8.129 0 0 0 1.575-1.49 3.825 3.825 0 0 0 .679-2.306 3.87 3.87 0 0 0-1.571-3.38z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-question_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10a10 10 0 1 0 10 10 10 10 0 0 0-10-10zm-.182 16.12a1.306 1.306 0 1 1 1.306-1.306 1.307 1.307 0 0 1-1.306 1.306zm3.52-6.838a6.042 6.042 0 0 1-1.17 1.108l-.584.454a1.934 1.934 0 0 0-.687.942 2.326 2.326 0 0 0-.081.435H18.89a4.713 4.713 0 0 1 .22-1.283 3.29 3.29 0 0 1 1.054-1.16l.6-.47a2.259 2.259 0 0 0 .51-.521 1.84 1.84 0 0 0 .357-1.087 1.656 1.656 0 0 0-1.86-1.728 1.79 1.79 0 0 0-1.905 1.868H15.8a3.647 3.647 0 0 1 1.56-3.044 4.193 4.193 0 0 1 2.31-.603 5.027 5.027 0 0 1 3.006.861 2.878 2.878 0 0 1 1.168 2.514 2.844 2.844 0 0 1-.504 1.714z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-repeat" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.63 12.77l-2.38 3.839a13.591 13.591 0 1 0-1.449 9.828l.436-.758-1.517-.872-.436.757a11.866 11.866 0 1 1 1.308-8.325l-4.121-2.555-.922 1.487 5.78 3.585a.88.88 0 0 0 .462.13.878.878 0 0 0 .743-.413l3.584-5.78z">
                </path>
            </symbol>
            <symbol id="icon-repeat_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="eicls-1" d="M34.751 13.286l-2.685 4.332a13.22 13.22 0 1 0-1.59 8.632l.25-.434-.868-.498-.25.434a12.23 12.23 0 1 1 1.487-7.895l.022.149-4.525-2.806-.527.85 5.462 3.387a.499.499 0 0 0 .264.075.455.455 0 0 0 .114-.014.5.5 0 0 0 .31-.223l3.387-5.462z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-repeat_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.59 12.598l-2.11 3.405a13.96 13.96 0 1 0-1.354 10.62l.623-1.083-2.167-1.246-.623 1.084a11.484 11.484 0 1 1 1.15-8.586l-3.679-2.28-1.053 1.7 5.887 3.649a.988.988 0 0 0 .526.15 1.001 1.001 0 0 0 .85-.472l3.65-5.887z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-ria_logo" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.663 10.169c.049-.8.316-1.601.753-2.329.121-.194.242-.364.364-.558a13.03 13.03 0 0 1 3.131 1.116c-.34.46-.607.995-.704 1.625-.097.63-.024 1.31.219 1.917.267.606.655 1.14 1.117 1.552.46.436.97.752 1.529 1.043a9.617 9.617 0 0 0 3.447.946c.243.024.486.024.728.024.049.146.122.315.17.485-.46.049-.898.097-1.36.097-1.698.049-3.422-.17-5-.727-1.578-.583-3.034-1.529-3.811-2.911a3.783 3.783 0 0 1-.583-2.28zm8.715 11.57c-2.767-.146-5.535-.728-8.06-1.916-1.262-.582-2.476-1.334-3.544-2.28-1.068-.946-1.99-2.086-2.549-3.42a7.752 7.752 0 0 1-.558-4.245 8.56 8.56 0 0 1 .728-2.353 12.566 12.566 0 0 0-4.224 2.11c-.024.194-.048.412-.073.607a8.262 8.262 0 0 0 .971 4.56c.728 1.382 1.845 2.595 3.108 3.565a17.5 17.5 0 0 0 4.224 2.329c3.034 1.188 6.336 1.673 9.613 1.65.947 0 1.894-.073 2.84-.17.025-.146.049-.292.073-.461-.85.072-1.7.072-2.549.024zm-10.487-5.555c.97.752 2.063 1.334 3.204 1.795 2.307.898 4.831 1.286 7.332 1.237.874 0 1.723-.073 2.573-.17 0-.072 0-.145-.024-.194 0-.072-.025-.145-.025-.218-.655.024-1.31.024-1.966 0-1.966-.121-3.933-.558-5.753-1.407-.899-.436-1.773-.97-2.525-1.625-.753-.68-1.432-1.504-1.87-2.45a5.367 5.367 0 0 1-.436-3.08c.145-1.019.582-1.965 1.165-2.765.049-.073.097-.122.146-.17-.923-.146-1.87-.17-2.84-.097-.39.024-.753.097-1.117.145-.462.898-.777 1.868-.85 2.838a6.042 6.042 0 0 0 .68 3.445c.51 1.067 1.335 1.989 2.306 2.716zm10.075 8.708c-3.545-.145-7.09-.873-10.342-2.328-1.627-.728-3.18-1.65-4.564-2.838-1.384-1.165-2.573-2.572-3.35-4.245a9.849 9.849 0 0 1-.923-4.633c-2.622 2.62-4.078 6.33-3.738 10.309.63 7.155 6.967 12.443 14.128 11.788 5.026-.436 9.128-3.687 10.9-8.053a30.73 30.73 0 0 1-2.111 0zm-3.18-16.009s0 .024 0 0c-.22.413-.34.85-.34 1.262 0 .412.12.8.34 1.115.436.68 1.213 1.14 2.063 1.407.68.218 1.408.291 2.136.291a13.73 13.73 0 0 0-4.2-4.075z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.57 17.967L21.894 11.9l-1.681 1.851 5.136 4.665H10.536v2.5h14.812l-5.136 4.665 1.681 1.85 6.678-6.066a2.063 2.063 0 0 0 0-3.4z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.847 29.645l-1.075-1.381 10.926-8.498a.126.126 0 0 0 0-.199L13.772 11.07l1.075-1.38 10.925 8.497a1.874 1.874 0 0 1 0 2.96z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.912 29.118l-.614-.79 10.63-8.266a.5.5 0 0 0 0-.79l-10.63-8.268.614-.79 10.63 8.269a1.5 1.5 0 0 1 0 2.368z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.78 30.17l-1.534-1.973 10.968-8.53-10.968-8.53 1.535-1.974 11.222 8.728a2.25 2.25 0 0 1 0 3.551z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.167 31.644l-1.389-1.066 8.316-10.835a.127.127 0 0 0 0-.153L15.778 8.756l1.389-1.066 8.315 10.834a1.88 1.88 0 0 1 0 2.284z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.098 31.118l-.794-.61 8.088-10.537a.502.502 0 0 0 0-.61L16.303 8.825l.794-.609 8.087 10.538a1.502 1.502 0 0 1 0 1.827z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-right_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.236 32.17l-1.983-1.523 8.427-10.98-8.427-10.98 1.983-1.523 8.544 11.133a2.256 2.256 0 0 1 0 2.74z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-riht_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.784 18.285l-6.093-5.73-1.198 1.275 5.275 4.962H11.217v1.75h14.57l-5.294 4.962 1.199 1.275 6.092-5.731a1.687 1.687 0 0 0 0-2.763z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-riht_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.827 18.51l-5.996-5.767-.694.72L27.01 19.1H11.478v1h15.52l-5.86 5.636.693.721 5.922-5.708a1.369 1.369 0 0 0 .63-1.149 1.301 1.301 0 0 0-.556-1.09z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-riht_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.57 18l-6.68-6.1-1.68 1.85 5.14 4.67H10.54v2.5h14.81l-5.14 4.66 1.68 1.85 6.68-6.06a2.09 2.09 0 0 0 .89-1.7 2.06 2.06 0 0 0-.89-1.67z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sad" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm6.338-6.065c.347.207.788-.117.628-.488C25.58 23.213 22.756 21 19.5 21c-3.257 0-6.08 2.213-7.466 5.447-.16.371.28.695.628.489 1.877-1.119 4.254-1.787 6.838-1.787 2.584 0 4.96.668 6.838 1.786z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-search" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.297 28.76l-5-5a8.736 8.736 0 1 0-2.454 2.455l5 5a1.455 1.455 0 0 0 2.052-.001l.402-.403a1.455 1.455 0 0 0 0-2.052zm-7.487-5.033a6.78 6.78 0 1 1 0-9.589 6.78 6.78 0 0 1 0 9.589z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-search_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.016 25.43a6.48 6.48 0 0 1-4.597-1.901 6.508 6.508 0 1 1 4.597 1.9zm-3.89-2.608a5.5 5.5 0 1 0 0-7.779 5.508 5.508 0 0 0 0 7.779z">
                </path>
                <path d="M28.869 32.138a1.944 1.944 0 0 1-1.38-.57l-4.717-4.717a9.237 9.237 0 1 1 1.775-14.45 9.26 9.26 0 0 1 1.387 11.288l4.717 4.717a1.953 1.953 0 0 1 0 2.76l-.403.402a1.946 1.946 0 0 1-1.38.57zm-6.026-6.424a.5.5 0 0 1 .354.147l5 5a.977.977 0 0 0 1.344 0l.403-.403a.955.955 0 0 0 0-1.345l-5-5a.5.5 0 0 1-.063-.63 8.254 8.254 0 0 0-1.041-10.375 8.236 8.236 0 1 0-1.274 12.69.5.5 0 0 1 .277-.084z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-search_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.297 28.76l-5-5a8.736 8.736 0 1 0-2.454 2.455l5 5a1.455 1.455 0 0 0 2.052-.001l.402-.403a1.455 1.455 0 0 0 0-2.052zm-7.93-5.476a6.155 6.155 0 1 1 0-8.704 6.155 6.155 0 0 1 0 8.704z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-send" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.737 19.09l-3.657-3.676a1.427 1.427 0 0 0-2.16 0l-3.657 3.676 1.24 1.234 2.622-2.635v7.702h1.75v-7.702l2.622 2.635z">
                </path>
                <path d="M20 7.625A12.375 12.375 0 1 0 32.375 20 12.39 12.39 0 0 0 20 7.625zm0 23A10.625 10.625 0 1 1 30.625 20 10.637 10.637 0 0 1 20 30.625z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14.782a.989.989 0 0 0-.816.394l-3.78 3.81.71.704 3.386-3.413v9.255h1v-9.247l3.386 3.405.71-.704-3.72-3.737a1.054 1.054 0 0 0-.876-.467z">
                </path>
                <path d="M20 8a12 12 0 1 0 12 12A12.014 12.014 0 0 0 20 8zm0 23a11 11 0 1 1 11-11 11.012 11.012 0 0 1-11 11z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 8.5A11.5 11.5 0 1 0 31.5 20 11.513 11.513 0 0 0 20 8.5zm3.481 11.75L21 17.522v8.337h-2v-8.337l-2.481 2.728-1.48-1.342 3.752-4.127a1.533 1.533 0 0 1 2.417 0l3.754 4.127z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-share" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.13 8.876v15.039h1.75V8.92l3.01 3.054 1.246-1.229L21.13 6.68a1.43 1.43 0 0 0-1.127-.555 1.347 1.347 0 0 0-1.131.543l-4.007 3.98 1.233 1.24z">
                </path>
                <path d="M27.937 14.115h-3.538v1.75h3.538a.233.233 0 0 1 .239.227v13.806a.233.233 0 0 1-.239.227H12.063a.233.233 0 0 1-.239-.227V16.092a.233.233 0 0 1 .239-.227h3.521v-1.75h-3.521a1.985 1.985 0 0 0-1.989 1.977v13.806a1.985 1.985 0 0 0 1.989 1.977h15.874a1.985 1.985 0 0 0 1.989-1.977V16.092a1.985 1.985 0 0 0-1.989-1.977z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-share_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.505 8.643v15.564h1V8.682l3.389 3.428.712-.701-3.73-3.771A1.056 1.056 0 0 0 20 7.167a.952.952 0 0 0-.82.388l-3.786 3.76.705.71z">
                </path>
                <path d="M27.937 15.157h-3.163v1h3.163a.609.609 0 0 1 .614.601v13.807a.608.608 0 0 1-.614.601H12.063a.608.608 0 0 1-.614-.6V16.757a.609.609 0 0 1 .614-.601h3.146v-1h-3.146a1.61 1.61 0 0 0-1.614 1.601v13.807a1.61 1.61 0 0 0 1.614 1.601h15.874a1.61 1.61 0 0 0 1.614-1.6V16.757a1.61 1.61 0 0 0-1.614-1.601z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-share_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.755 10.172V24.62h2.5V10.23l2.296 2.33 1.781-1.755-3.962-4.022a1.76 1.76 0 0 0-1.368-.658h-.007a1.757 1.757 0 0 0-1.363.646l-3.965 3.937 1.762 1.773z">
                </path>
                <path d="M27.937 14.115h-2.913v2.5h2.777v13.51H12.199v-13.51h2.76v-2.5h-2.896a2.36 2.36 0 0 0-2.364 2.352v13.806a2.36 2.36 0 0 0 2.364 2.352h15.874a2.36 2.36 0 0 0 2.364-2.352V16.467a2.36 2.36 0 0 0-2.364-2.352z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sound" xmlns="http://www.w3.org/2000/svg">
                <path d="M25 31.122a.956.956 0 0 1-.61-.219l-7.589-6.228h-3.198a2.567 2.567 0 0 1-2.564-2.564v-4.888a2.567 2.567 0 0 1 2.564-2.564h3.198l7.59-6.228a.96.96 0 0 1 1.57.742V30.16a.963.963 0 0 1-.961.961zm-11.397-14.54a.643.643 0 0 0-.642.64v4.89a.643.643 0 0 0 .642.641h3.542a.958.958 0 0 1 .61.219l6.284 5.158V11.204l-6.285 5.158a.958.958 0 0 1-.609.22z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sound_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.937 30.05a1.04 1.04 0 0 1-.662-.238l-6.806-5.586h-4.431a1.06 1.06 0 0 1-1.049-1.061v-6.996a1.05 1.05 0 0 1 1.049-1.049h4.4l6.836-5.597a1.05 1.05 0 0 1 1.715.811V29a1.054 1.054 0 0 1-1.052 1.05zm-.029-1.012a.042.042 0 0 0 .053.007V10.334l-6.858 5.548a1.054 1.054 0 0 1-.665.238h-4.449v7.094h4.449a1.052 1.052 0 0 1 .664.237l6.807 5.587z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sound_invert" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.875A12.125 12.125 0 1 0 32.125 20 12.139 12.139 0 0 0 20 7.875zM22.604 26.6l-4.705-3.86h-2.397a1.085 1.085 0 0 1-1.085-1.086v-3.308a1.085 1.085 0 0 1 1.085-1.085H17.9l4.705-3.861a.374.374 0 0 1 .611.289V26.31a.374.374 0 0 1-.611.29z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sound_invert_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7.875A12.125 12.125 0 1 0 32.125 20 12.139 12.139 0 0 0 20 7.875zm2.154 17.618l-3.831-3.144a.31.31 0 0 0-.196-.07H15.65a.31.31 0 0 1-.31-.31v-3.938a.31.31 0 0 1 .31-.31h2.477a.31.31 0 0 0 .196-.07l3.831-3.144a.31.31 0 0 1 .505.239v10.508a.31.31 0 0 1-.505.24z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sound_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.522 30.508l-7.493-6.15H13.85a2.362 2.362 0 0 1-2.362-2.362v-3.992a2.362 2.362 0 0 1 2.362-2.363h3.18l7.492-6.149a.591.591 0 0 1 .966.457v20.102a.591.591 0 0 1-.966.457z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-sputnik_logo" xmlns="http://www.w3.org/2000/svg">
                <path d="M35.174 5.75l-23.975 28.5-6.373-17.472L35.174 5.75z"></path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-stop" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.5 29.375h-15a1.877 1.877 0 0 1-1.875-1.875v-15a1.877 1.877 0 0 1 1.875-1.875h15a1.877 1.877 0 0 1 1.875 1.875v15a1.877 1.877 0 0 1-1.875 1.875zm-15-17a.125.125 0 0 0-.125.125v15a.125.125 0 0 0 .125.125h15a.125.125 0 0 0 .125-.125v-15a.125.125 0 0 0-.125-.125z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-stop_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.409 29h-17a.5.5 0 0 1-.5-.5v-17a.5.5 0 0 1 .5-.5h17a.5.5 0 0 1 .5.5v17a.5.5 0 0 1-.5.5zm-16.5-1h16V12h-16z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-stop_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.083 11.5H12.917a1.417 1.417 0 0 0-1.417 1.417v14.166a1.417 1.417 0 0 0 1.417 1.417h14.166a1.417 1.417 0 0 0 1.417-1.417V12.917a1.417 1.417 0 0 0-1.417-1.417z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-subscription" xmlns="http://www.w3.org/2000/svg">
                <path d="M36.66 11.875l-4.255.007.014-4.248-1.75-.006-.014 4.257-4.25.007.006 1.75 4.242-.007.003 4.246 1.75-.002-.003-4.247 4.257-.007v-1.75z">
                </path>
                <path d="M30.655 28.583H9.153V16.664l9.734 6.746a1.782 1.782 0 0 0 1.013.315 1.814 1.814 0 0 0 1.032-.323l6.533-4.669-1.017-1.423-6.565 4.662-10.686-7.407-.044.065v-1.006H24.75v-1.75H9.064a1.663 1.663 0 0 0-1.661 1.661v15.137a1.663 1.663 0 0 0 1.661 1.661h21.68a1.663 1.663 0 0 0 1.66-1.661v-9.135h-1.75z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-subscription_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.125 10.937l.013-4.247-2.37-.007-.013 4.258-4.252.006.007 2.37 4.242-.006.003 4.244 2.37-.001-.003-4.247 4.256-.007v-2.369l-4.253.006z">
                </path>
                <path d="M29.688 27.574H8.936V15.879l9.286 6.443a1.901 1.901 0 0 0 1.087.339 1.934 1.934 0 0 0 1.104-.347l6.635-4.74-1.162-1.627-6.575 4.696-10.375-7.198v-.08h14.412v-2.5H8.472A2.038 2.038 0 0 0 6.436 12.9v15.137a2.038 2.038 0 0 0 2.036 2.036h21.68a2.038 2.038 0 0 0 2.036-2.036v-8.325h-2.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_send" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.112 17.976l-5.731-6.093a1.745 1.745 0 0 0-2.762 0l-5.73 6.093 1.274 1.199 4.962-5.276V28.45h1.75V13.88l4.962 5.295z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_send_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.148 11.984a1.369 1.369 0 0 0-1.148-.63 1.301 1.301 0 0 0-1.09.556l-5.767 5.997.72.693 5.637-5.873V28.26h1V12.74l5.636 5.86.72-.693z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_send_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.766 18.107l-6.067-6.678a2.062 2.062 0 0 0-3.398 0l-6.067 6.678 1.851 1.681 4.665-5.136v14.812h2.5V14.652l4.665 5.136z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_single" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.597 25.895l-8.498-10.926a.125.125 0 0 0-.198 0l-8.498 10.926-1.381-1.075 8.498-10.925a1.933 1.933 0 0 1 2.96 0l8.498 10.925z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_single_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.662 25.368l-8.267-10.63a.516.516 0 0 0-.79 0l-8.267 10.63-.79-.614 8.268-10.63a1.547 1.547 0 0 1 2.368 0l8.268 10.63z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_single_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.53 26.42L20 15.453l-8.53 10.969-1.974-1.534 8.728-11.223a2.32 2.32 0 0 1 3.552 0l8.728 11.223z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_wide" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.912 23.888l-10.836-8.315a.124.124 0 0 0-.153 0L9.088 23.888 8.023 22.5l10.835-8.315a1.878 1.878 0 0 1 2.283 0L31.977 22.5z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_wide_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.842 23.363l-10.537-8.088a.503.503 0 0 0-.61 0L9.158 23.363l-.61-.794 10.539-8.087a1.503 1.503 0 0 1 1.826 0l10.538 8.087z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-up_wide_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.98 24.414L20 15.987 9.02 24.414l-1.522-1.983 11.132-8.543a2.255 2.255 0 0 1 2.74-.001l11.132 8.544z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-user" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.325 24.987c-.449-.074-2.52-.17-2.52-1.223v-1.43c1.157-.975 1.308-2.513 1.628-3.144.642-.096.577-.525.857-1.586.282-1.067.3-2.162-.323-2.256a6.406 6.406 0 0 0 .181-1.553c0-2.255-1.56-5.26-6.723-5.114a3.221 3.221 0 0 0 .168.913 5.359 5.359 0 0 0-3.097 2.1c-.895 1.195-.45 3.304-.367 3.661-.605.121-.574 1.198-.297 2.25.28 1.06.215 1.489.858 1.585.307.608.46 2.057 1.506 3.034v1.54c0 1.054-2.072 1.15-2.52 1.223a4.84 4.84 0 0 0-4.156 5.099s2.777 1.238 9.312 1.238 9.648-1.238 9.648-1.238a4.84 4.84 0 0 0-4.155-5.099z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-user_big" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.832 31.823c-6.565 0-9.398-1.229-9.515-1.281a.5.5 0 0 1-.296-.422c-.002-.049-.272-4.825 4.573-5.626.06-.01.149-.021.256-.034 1.525-.18 1.846-.478 1.846-.696V22.43a5.771 5.771 0 0 1-1.233-2.396c-.048-.155-.091-.298-.136-.42-.594-.207-.71-.73-.844-1.323-.037-.163-.078-.349-.134-.56a3.402 3.402 0 0 1 .026-2.407 1.075 1.075 0 0 1 .19-.228 5.04 5.04 0 0 1 .53-3.703 5.766 5.766 0 0 1 2.894-2.139 3.892 3.892 0 0 1-.063-.552.5.5 0 0 1 .485-.522 7.528 7.528 0 0 1 5.645 1.783 5.359 5.359 0 0 1 1.592 3.83 6.844 6.844 0 0 1-.113 1.284 1.057 1.057 0 0 1 .192.22 3.437 3.437 0 0 1 .047 2.433c-.056.212-.098.398-.134.56-.134.594-.25 1.117-.845 1.323-.044.123-.087.265-.135.42a5.552 5.552 0 0 1-1.356 2.522v1.208c0 .218.32.516 1.846.696.107.012.195.023.256.033 4.844.802 4.575 5.578 4.572 5.626a.5.5 0 0 1-.314.431c-.13.052-3.277 1.273-9.832 1.273zm-8.816-2.086a28.197 28.197 0 0 0 8.816 1.086 31.442 31.442 0 0 0 9.15-1.096 4.245 4.245 0 0 0-3.738-4.247l-.211-.027c-.817-.096-2.729-.321-2.729-1.69v-1.43a.498.498 0 0 1 .178-.382 4.414 4.414 0 0 0 1.223-2.213 5.198 5.198 0 0 1 .281-.775.5.5 0 0 1 .373-.269c.165-.024.171-.025.305-.622.04-.173.084-.37.143-.596.276-1.047.152-1.568.075-1.64a.485.485 0 0 1-.337-.214.49.49 0 0 1-.063-.396 5.886 5.886 0 0 0 .166-1.425 4.357 4.357 0 0 0-1.289-3.12 6.204 6.204 0 0 0-4.365-1.503 2.442 2.442 0 0 0 .072.253.5.5 0 0 1-.34.645 4.846 4.846 0 0 0-2.83 1.918c-.77 1.027-.333 3.023-.28 3.247a.5.5 0 0 1-.39.604c-.067.065-.187.582.09 1.631.059.226.103.424.143.597.133.596.14.597.304.621a.5.5 0 0 1 .373.269 5.28 5.28 0 0 1 .282.775 4.622 4.622 0 0 0 1.12 2.12.5.5 0 0 1 .158.365v1.54c0 1.369-1.912 1.594-2.729 1.69l-.21.027a4.23 4.23 0 0 0-3.74 4.257z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-user_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.325 24.987c-.449-.074-2.52-.17-2.52-1.223v-1.43c1.157-.975 1.308-2.513 1.628-3.144.642-.096.577-.525.857-1.586.282-1.067.3-2.162-.323-2.256a6.406 6.406 0 0 0 .181-1.553c0-2.255-1.56-5.26-6.723-5.114a3.221 3.221 0 0 0 .168.913 5.359 5.359 0 0 0-3.097 2.1c-.895 1.195-.45 3.304-.367 3.661-.605.121-.574 1.198-.297 2.25.28 1.06.215 1.489.858 1.585.307.608.46 2.057 1.506 3.034v1.54c0 1.054-2.072 1.15-2.52 1.223a4.84 4.84 0 0 0-4.156 5.099s2.777 1.238 9.312 1.238 9.648-1.238 9.648-1.238a4.84 4.84 0 0 0-4.155-5.099z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-views" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 29.469c-6.74 0-11.946-5.604-14.45-8.945a.875.875 0 0 1 0-1.048C8.054 16.135 13.26 10.53 20 10.53s11.946 5.604 14.45 8.945a.875.875 0 0 1 0 1.048C31.946 23.865 26.74 29.47 20 29.47zM7.352 20C9.785 23.105 14.35 27.719 20 27.719S30.215 23.105 32.648 20C30.215 16.895 25.65 12.281 20 12.281S9.785 16.895 7.352 20z">
                </path>
                <path d="M20 25.396A5.396 5.396 0 1 1 25.396 20 5.403 5.403 0 0 1 20 25.396zm0-9.293A3.896 3.896 0 1 0 23.896 20 3.901 3.901 0 0 0 20 16.104z">
                </path>
            </symbol>
            <symbol id="icon-views_big" viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <defs></defs>
                <path class="gdcls-1" d="M20 28.094c-5.054 0-9.11-2.404-13.15-7.794l-.225-.3.225-.3c4.04-5.39 8.096-7.794 13.15-7.794s9.11 2.404 13.15 7.794l.225.3-.225.3c-4.04 5.39-8.096 7.794-13.15 7.794zM7.877 20c3.757 4.902 7.508 7.094 12.123 7.094S28.366 24.902 32.123 20c-3.757-4.902-7.508-7.094-12.123-7.094S11.634 15.098 7.877 20z">
                </path>
                <path class="gdcls-1" d="M20 25.146A5.146 5.146 0 1 1 25.146 20 5.152 5.152 0 0 1 20 25.146zm0-9.293A4.146 4.146 0 1 0 24.146 20 4.151 4.151 0 0 0 20 15.854z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-views_small" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 29.844c-5.01 0-10.162-3.116-14.507-8.774a1.757 1.757 0 0 1 .001-2.141C9.838 13.272 14.99 10.156 20 10.156s10.162 3.116 14.507 8.774a1.757 1.757 0 0 1-.001 2.141C30.162 26.728 25.01 29.844 20 29.844zM7.83 20c2.348 2.938 6.769 7.344 12.17 7.344 5.402 0 9.823-4.407 12.17-7.344-2.348-2.938-6.769-7.344-12.17-7.344-5.402 0-9.823 4.406-12.17 7.344zm24.694.452l.001.002zm-25.05-.906l.002.002z">
                </path>
                <circle cx="20" cy="20" r="4.5"></circle>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-watch" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 32.375A12.375 12.375 0 1 1 32.375 20 12.39 12.39 0 0 1 20 32.375zm0-23A10.625 10.625 0 1 0 30.625 20 10.637 10.637 0 0 0 20 9.375z">
                </path>
                <path d="M20.598 21.612a2.035 2.035 0 0 1-1.872-1.233l-3.311-7.7 1.607-.69 3.311 7.699a.288.288 0 0 0 .265.174h.002l5.674-.036.011 1.75-5.674.036z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="icon-wow" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13zm-4.5-18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM20 29.533c2.872 0 5.2-2.91 5.2-6.5s-2.328-6.5-5.2-6.5c-2.872 0-5.2 2.91-5.2 6.5s2.328 6.5 5.2 6.5zM26 13.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                </path>
            </symbol>
        </svg></div>
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 13 23" id="s_social-s_facebook" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.011 12.937l.639-4.162H8.656v-2.7c0-1.14.557-2.25 2.346-2.25h1.816V.28S11.17 0 9.595 0c-3.29 0-5.439 1.994-5.439 5.602v3.173H.5v4.162h3.656V23h4.5V12.937h3.355z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_facebook_alt" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.002C22 4.925 17.076 0 11 0S0 4.925 0 11.002c0 5.492 4.022 10.043 9.281 10.869v-7.689H6.488v-3.18h2.793V8.578c0-2.757 1.642-4.28 4.155-4.28 1.204 0 2.462.215 2.462.215V7.22h-1.387c-1.367 0-1.792.849-1.792 1.72v2.062h3.05l-.487 3.18h-2.563v7.689C17.979 21.045 22 16.494 22 11z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_social-s_fbmessenger" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.979 3.537a11.735 11.735 0 0 0-7.94-3.051h-.003a11.832 11.832 0 0 0-4.435.826 11.584 11.584 0 0 0-3.58 2.225 10.47 10.47 0 0 0-2.408 3.306 9.746 9.746 0 0 0 .278 8.695 10.435 10.435 0 0 0 3.074 3.544v4.037l3.8-2.161c.525.17 1.061.3 1.606.389a11.401 11.401 0 0 0 6.04-.707 11.63 11.63 0 0 0 3.568-2.265 10.7 10.7 0 0 0 2.408-3.346 9.688 9.688 0 0 0 .89-4.117 9.512 9.512 0 0 0-.89-4.07 10.473 10.473 0 0 0-2.408-3.305zm-6.837 11.028l-.002.003h.005l-.003-.003zm6.134-6.597l-6.134 6.597L10.27 11.5l-5.6 3.068 6.167-6.6 2.908 3.13 5.532-3.13z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_flipboard" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4.616H.6v20.768h20.8V.616zM8.722 17.381H4.67v-12.7h4.053v12.7zm8.608-8.675v-4.02H9.141v4.02h8.19zm-4.153.418v4.07H9.141v-4.07h4.036z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_google" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.213 9.469v3.673h6.077a5.782 5.782 0 0 1-6.077 4.623 6.766 6.766 0 0 1 0-13.532 6.028 6.028 0 0 1 4.272 1.652l2.908-2.8a10.273 10.273 0 0 0-7.18-2.798C5.297.287.5 5.084.5 11c0 5.917 4.797 10.714 10.713 10.714 6.184 0 10.287-4.346 10.287-10.467a9.94 9.94 0 0 0-.169-1.777L11.213 9.47z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_instagram" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.674 8.02c.026 1.697.026 3.821 0 6.373a11.048 11.048 0 0 1-.419 3.307 5.344 5.344 0 0 1-4.315 3.746 17.97 17.97 0 0 1-2.957.241c-1.672.026-3.788.026-6.35 0-1.117.03-2.232-.11-3.307-.415a5.343 5.343 0 0 1-3.759-4.308 17.767 17.767 0 0 1-.242-2.957C.3 12.317.3 10.193.325 7.634a10.991 10.991 0 0 1 .415-3.31A5.347 5.347 0 0 1 5.056.573C6.036.431 7.024.35 8.014.331c.147-.005 1.147-.008 3-.008v-.03c2.634.046 4.07.073 4.311.08a7.085 7.085 0 0 1 3.538.918 5.286 5.286 0 0 1 2.57 3.77c.156.977.236 1.966.24 2.956l.001.002zm-4.979-4c.345-.011.678.12.921.364.246.24.381.57.373.912.007.346-.13.68-.377.921a1.218 1.218 0 0 1-.907.378 1.256 1.256 0 0 1-.915-.388 1.282 1.282 0 0 1 .905-2.188zM19.8 10.84a568.057 568.057 0 0 1-.139 4.893l.006.003a3.965 3.965 0 0 1-1.435 3.086 3.9 3.9 0 0 1-2.089.81c-.82.08-1.638.126-2.454.135a79.61 79.61 0 0 1-1.4.013h-2.7c-.444-.003-.867-.008-1.267-.016a19.033 19.033 0 0 1-2.844-.2 3.7 3.7 0 0 1-2.163-1.143 3.8 3.8 0 0 1-.929-2.279c-.087-1.006-.133-2.24-.139-3.7-.005-1.73.018-3.667.068-5.81.013-.515.09-1.026.23-1.522a3.458 3.458 0 0 1 3.03-2.66c.897-.122 1.801-.185 2.706-.187 1.981-.031 3.793-.031 5.437 0 .96-.002 1.917.073 2.864.223.814.13 1.56.531 2.114 1.14.543.632.868 1.422.927 2.253.062.62.107 1.43.134 2.43v2.531h.043zM11.05 5.52a5.29 5.29 0 0 1 2.73.737 5.508 5.508 0 0 1-5.559 9.511 5.36 5.36 0 0 1-1.989-2.01 5.548 5.548 0 0 1-.726-2.8 5.283 5.283 0 0 1 .74-2.737 5.391 5.391 0 0 1 2.016-1.978 5.537 5.537 0 0 1 2.788-.724v.001zm3.24 6.86a3.557 3.557 0 0 1-3.295 2.195 3.432 3.432 0 0 1-2.514-1.052 3.556 3.556 0 1 1 5.032-5.025 3.557 3.557 0 0 1 .776 3.882z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 24" id="s_social-s_livejournal" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M.106 6.165L2.28 8.338A10.295 10.295 0 1 0 7.543 3.25l8.375 8.376v.006l.74 3.136.76 3.535-3.534-.76-3.137-.738L2.28 8.338A10.329 10.329 0 0 1 7.542 3.25L5.28.99A15.944 15.944 0 0 0 .106 6.165zm15.977 8.395l-.552-2.424a8.667 8.667 0 0 0-4.278 4.28l2.424.552a5.443 5.443 0 0 1 2.406-2.408z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 17" id="s_social-s_myworld" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.312 5.245a2 2 0 0 1-1.491-.62 2.083 2.083 0 0 1-.6-1.51 2.142 2.142 0 0 1 .6-1.526A1.968 1.968 0 0 1 16.31.952a1.818 1.818 0 0 1 1.419.64c.376.418.579.963.568 1.525a2.154 2.154 0 0 1-.568 1.51 1.841 1.841 0 0 1-1.42.62l.003-.002zm-8.7 0a1.954 1.954 0 0 1-1.455-.62 2.083 2.083 0 0 1-.6-1.51 2.142 2.142 0 0 1 .6-1.526c.37-.411.9-.643 1.455-.637.543 0 1.06.233 1.42.64.394.409.61.957.6 1.525a2.087 2.087 0 0 1-.6 1.51c-.365.397-.88.623-1.42.62v-.002zm15.569 9.763a1.274 1.274 0 0 0-.09-.923l-.001.001-2.556-4.544a1.354 1.354 0 0 0-.763-.568 1.1 1.1 0 0 0-.9.106c-.29.166-.501.44-.586.763-.084.318-.04.656.124.941l.284.568a9.218 9.218 0 0 1-3.09 2.2 9.063 9.063 0 0 1-3.691.781 8.943 8.943 0 0 1-3.674-.78 9.281 9.281 0 0 1-3.071-2.2l.242-.566a1.4 1.4 0 0 0 .16-.94 1.173 1.173 0 0 0-.48-.764c-.299-.162-.65-.2-.976-.106-.308.086-.57.29-.728.568L.723 14.09a1.369 1.369 0 0 0 .5 1.7c.086.09.197.151.319.177a1.181 1.181 0 0 0 .923-.142c.2-.13.36-.314.462-.532l.923-1.669a11.761 11.761 0 0 0 3.727 2.414 11.48 11.48 0 0 0 8.68 0 11.81 11.81 0 0 0 3.71-2.414l.998 1.67c.098.213.252.396.444.531.173.117.377.18.586.178.1 0 .201-.012.3-.036a.624.624 0 0 0 .3-.177c.303-.159.518-.445.586-.78z">
                </path>
            </symbol>
            <symbol viewbox="0 0 16 24" id="s_social-s_odnoklassniki" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99 12.134a6.47 6.47 0 0 1-2.384-.443 6.193 6.193 0 0 1-1.956-1.208 5.68 5.68 0 0 1-1.313-1.81 5.2 5.2 0 0 1-.483-2.207 5.279 5.279 0 0 1 .483-2.239A6.075 6.075 0 0 1 3.65 2.383a5.928 5.928 0 0 1 1.956-1.24A6.467 6.467 0 0 1 7.99.703a6.608 6.608 0 0 1 2.423.443 5.644 5.644 0 0 1 1.941 1.24 6.265 6.265 0 0 1 1.288 1.844c.323.702.488 1.466.483 2.24a5.198 5.198 0 0 1-.483 2.205 5.732 5.732 0 0 1-3.229 3.02 6.609 6.609 0 0 1-2.423.44zm0-8.487a3.1 3.1 0 0 0-2.134.814 2.585 2.585 0 0 0-.91 2c.004.758.336 1.478.91 1.972a3.145 3.145 0 0 0 4.292 0c.57-.497.899-1.216.9-1.972.01-.767-.319-1.5-.9-2a3.115 3.115 0 0 0-2.158-.814zm7.117 10.584a1.15 1.15 0 0 0-.017-1.384l.001-.004a1.518 1.518 0 0 0-.924-.717 1.811 1.811 0 0 0-1.666.475 5.28 5.28 0 0 1-1.44.717c-.48.157-.97.28-1.466.367-.378.067-.76.11-1.143.13l-.467.015-.467-.016a9.136 9.136 0 0 1-1.144-.129 10.55 10.55 0 0 1-1.457-.362c-.514-.164-1-.405-1.44-.717a1.755 1.755 0 0 0-1.644-.475 1.6 1.6 0 0 0-.95.717c-.296.418-.283.98.032 1.384a7.877 7.877 0 0 0 1.6 1.257c.692.41 1.45.698 2.238.853.806.16 1.487.268 2.045.322l-.966.918c-.654.62-1.303 1.22-1.949 1.8-.644.59-1.186 1.095-1.626 1.513a1.34 1.34 0 0 0-.435.967c0 .351.16.683.435.9l.161.161a1.486 1.486 0 0 0 1.965 0l3.613-3.378c.706.633 1.372 1.25 2 1.852a37.613 37.613 0 0 0 1.683 1.53c.27.24.62.371.982.37.358.003.703-.13.966-.37l.177-.162a1.16 1.16 0 0 0 .42-.9 1.365 1.365 0 0 0-.42-.967l-3.623-3.317-1-.918a16.317 16.317 0 0 0 2.093-.362 8.472 8.472 0 0 0 2.19-.813 7.068 7.068 0 0 0 1.643-1.257z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_social-s_pinterest" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.998.694a11.306 11.306 0 0 0-4.773 21.554c.072-3.162 1.15-5.786 1.708-8.538-1.174-1.978.142-5.96 2.62-4.978 3.05 1.206-2.64 7.354 1.18 8.122 3.987.8 5.614-6.921 3.142-9.431-3.573-3.627-10.4-.083-9.562 5.107.205 1.269 1.516 1.655.524 3.405-2.287-.505-2.969-2.31-2.88-4.714.14-3.936 3.535-6.692 6.941-7.073 4.306-.482 8.35 1.58 8.907 5.632.628 4.573-1.944 9.525-6.549 9.169-1.248-.1-1.773-.715-2.752-1.31a16.752 16.752 0 0 1-1.63 5.226A11.306 11.306 0 1 0 11.997.694z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_rss" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.863 21.402c0-9.62-7.8-17.42-17.42-17.42V.577a20.825 20.825 0 0 1 20.825 20.826v.07h-3.405v-.07zM.443 10.476c6.034.001 10.926 4.893 10.926 10.928v.07h3.441v-.07A14.367 14.367 0 0 0 .443 7.034v3.442zm3.28 10.964a3.244 3.244 0 1 0 0-6.489 3.244 3.244 0 0 0 0 6.489z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 24" id="s_social-s_skype" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.796 4.568a10.47 10.47 0 0 1 2.937 9.041 6.33 6.33 0 0 1-8.711 8.713 10.475 10.475 0 0 1-11.978-11.98 6.332 6.332 0 0 1 8.712-8.713c3.31-.524 6.67.569 9.04 2.94zm-4.385 13.665a4.33 4.33 0 0 0 1.945-1.494 3.689 3.689 0 0 0 .67-2.159 3.42 3.42 0 0 0-.385-1.69c-.256-.46-.621-.85-1.063-1.135a6.75 6.75 0 0 0-1.651-.763 23.144 23.144 0 0 0-2.16-.57 38.06 38.06 0 0 1-1.361-.338 4.32 4.32 0 0 1-.806-.317 1.854 1.854 0 0 1-.62-.478 1 1 0 0 1-.22-.646c.02-.44.27-.836.657-1.043a3.137 3.137 0 0 1 1.755-.441 2.8 2.8 0 0 1 1.7.4c.382.308.692.696.909 1.137.147.28.337.535.563.757.219.173.495.258.774.239.352.008.692-.135.933-.392.237-.234.372-.552.374-.885a2.3 2.3 0 0 0-.3-1.081 3.412 3.412 0 0 0-.924-1.052 4.945 4.945 0 0 0-1.584-.8 7.55 7.55 0 0 0-2.255-.3 8.071 8.071 0 0 0-2.84.454 4 4 0 0 0-1.855 1.3 3.131 3.131 0 0 0-.642 1.94c-.024.692.191 1.37.609 1.923.436.536 1 .953 1.64 1.213.823.34 1.676.6 2.548.775.749.16 1.352.31 1.8.452.404.117.776.326 1.087.61.277.264.426.636.41 1.018a1.563 1.563 0 0 1-.77 1.328 3.5 3.5 0 0 1-2.031.538 3.383 3.383 0 0 1-1.468-.265 2.266 2.266 0 0 1-.861-.677 5.129 5.129 0 0 1-.576-1.03 2.114 2.114 0 0 0-.543-.81 1.191 1.191 0 0 0-.8-.279 1.333 1.333 0 0 0-.951.355c-.24.221-.375.532-.373.857.02.627.234 1.233.61 1.735a4.46 4.46 0 0 0 1.574 1.416 7.207 7.207 0 0 0 3.458.736 7.749 7.749 0 0 0 3.023-.538z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 23" id="s_social-s_sms" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M.752 10.96C.752 5.204 5.786.542 12 .542c6.211 0 11.248 4.668 11.248 10.418 0 5.75-5.036 10.412-11.247 10.412-.79 0-1.579-.076-2.354-.23a15.116 15.116 0 0 1-5.528 1.539 10.28 10.28 0 0 0 1.933-2.884 10.258 10.258 0 0 1-5.3-8.837zm4.264 4.263a2.549 2.549 0 0 0 1.807-.671 2.243 2.243 0 0 0 .723-1.695 2.365 2.365 0 0 0-.548-1.542c-.3-.38-.65-.716-1.041-1-.634-.44-.767-.741-.767-.915a.356.356 0 0 1 .124-.3.584.584 0 0 1 .387-.115c.404.04.792.173 1.135.39l.235.129V7.478l-.1-.041a3.648 3.648 0 0 0-1.468-.318A2.225 2.225 0 0 0 3.182 9.44c-.004.486.142.962.417 1.364.363.488.799.917 1.293 1.272.176.126.336.274.476.44.073.091.114.204.115.32a.454.454 0 0 1-.134.347.539.539 0 0 1-.388.13 2.684 2.684 0 0 1-1.26-.443l-.237-.14v2.1l.09.044c.455.225.955.344 1.462.348zm8.882-.194l-.365-4.136-.847 4.136h-1.387l-.888-4.17-.354 4.169h-1.91l.83-7.7h2.393l.025.129c.219 1.155.406 2.2.558 3.128l.025-.16c.074-.446.155-.887.239-1.31l.352-1.787h2.434l.877 7.7h-1.982zm4.52.194a2.549 2.549 0 0 0 1.807-.671 2.243 2.243 0 0 0 .723-1.695 2.37 2.37 0 0 0-.547-1.542c-.3-.38-.65-.716-1.042-1-.634-.44-.767-.741-.767-.915a.356.356 0 0 1 .124-.3.584.584 0 0 1 .387-.115c.404.04.792.173 1.135.39l.235.129V7.478l-.1-.041a3.648 3.648 0 0 0-1.468-.318 2.225 2.225 0 0 0-2.321 2.322 2.38 2.38 0 0 0 .417 1.364c.363.488.799.917 1.293 1.272.176.126.336.274.476.44.073.091.114.204.115.32a.454.454 0 0 1-.134.347.539.539 0 0 1-.388.13 2.684 2.684 0 0 1-1.259-.443l-.238-.14v2.1l.09.044c.455.225.955.344 1.462.348z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 24" id="s_social-s_tamtam" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.974 1.511A10.658 10.658 0 0 0 10.997.76a10.575 10.575 0 0 0-3.943.755 9.914 9.914 0 0 0-5.48 5.2 9.329 9.329 0 0 0-.83 3.931 9.446 9.446 0 0 0 1.243 4.9c.829 1.4 1.955 2.601 3.3 3.516v4.421l3.624-2.645c.376.062.756.098 1.136.107.39.01.706.015.952.015a9.821 9.821 0 0 0 4.023-.829 10.754 10.754 0 0 0 3.285-2.24 10.354 10.354 0 0 0 2.165-3.287c.524-1.254.79-2.601.783-3.96a8.998 8.998 0 0 0-.8-3.932 9.914 9.914 0 0 0-5.48-5.2zm-2.349 13.757a3.856 3.856 0 0 1-1.628.384 4.8 4.8 0 0 1-3.482-1.405 4.435 4.435 0 0 1-1.428-3.27h9.455a3.75 3.75 0 0 1-.384 1.8 5.326 5.326 0 0 1-1.06 1.474 5.237 5.237 0 0 1-1.473 1.017z">
                </path>
            </symbol>
            <symbol viewbox="0 0 23 20" id="s_social-s_telegram" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.19.119c-.037.013-.073.029-.11.043L7.473 5.407c-2.1.81-4.2 1.62-6.3 2.433-.331.11-.639.282-.906.507a.56.56 0 0 0 .092 1c.185.106.383.187.59.242 1.54.48 3.078.965 4.621 1.439a.455.455 0 0 1 .341.34c.156.517.332 1.029.5 1.545.492 1.516.983 3.032 1.472 4.549a.55.55 0 0 0 .572.428 1.376 1.376 0 0 0 1.058-.454c.777-.767 1.568-1.522 2.342-2.293a.307.307 0 0 1 .48-.037c1.571 1.177 3.153 2.338 4.73 3.507.236.185.509.318.8.39a.92.92 0 0 0 1.09-.461 2.63 2.63 0 0 0 .276-.821c1.046-4.925 2.09-9.85 3.131-14.775.147-.572.259-1.153.335-1.74A1.039 1.039 0 0 0 21.19.12zm-2.61 3.7c-.183.173-.372.34-.557.508-2.951 2.662-5.904 5.322-8.857 7.98a.932.932 0 0 0-.32.673c-.09 1.108-.2 2.214-.3 3.32a.132.132 0 0 1-.08.14c-.148-.45-.292-.9-.438-1.341-.44-1.35-.878-2.7-1.328-4.048a.334.334 0 0 1 .16-.471c3.643-2.292 7.282-4.586 10.918-6.882.181-.132.39-.22.61-.257.115-.013.247-.018.307.1.06.118-.04.206-.116.277z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 20" id="s_social-s_twitter" xmlns="http://www.w3.org/2000/svg">
                <path d="M.485 17.082a13.217 13.217 0 0 0 20.331-11.74 9.428 9.428 0 0 0 2.318-2.4 9.318 9.318 0 0 1-2.669.73 4.664 4.664 0 0 0 2.044-2.57 9.289 9.289 0 0 1-2.95 1.127 4.65 4.65 0 0 0-7.919 4.24 13.191 13.191 0 0 1-9.578-4.857 4.652 4.652 0 0 0 1.437 6.2 4.613 4.613 0 0 1-2.1-.582v.059a4.649 4.649 0 0 0 3.72 4.556 4.667 4.667 0 0 1-2.1.08 4.652 4.652 0 0 0 4.341 3.227 9.316 9.316 0 0 1-5.77 1.989 9.404 9.404 0 0 1-1.105-.06z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 23" id="s_social-s_viber" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.037 6.124a7.267 7.267 0 0 0-1.982-3.84 10.87 10.87 0 0 0-.74-.55 6.958 6.958 0 0 0-1.466-.7 15.279 15.279 0 0 0-2.3-.61 16.865 16.865 0 0 0-3.2-.265l-.937-.03C9.638.137 8.867.2 8.102.314c-.958.14-1.903.359-2.825.655a6.743 6.743 0 0 0-2.544 1.436 6.434 6.434 0 0 0-1.686 2.872 14.672 14.672 0 0 0-.53 3.871c0 .71.02 1.543.062 2.5.044.966.217 1.921.515 2.841a7.112 7.112 0 0 0 1.5 2.575 6.2 6.2 0 0 0 2.98 1.733v2.25l.063.468c.02.286.222.526.5.593a.849.849 0 0 0 .9-.25c.27-.27.572-.583.905-.937.187-.207.4-.446.64-.717.24-.27.442-.52.609-.75a18.53 18.53 0 0 0 4.51-.093c1.24-.208 1.931-.333 2.076-.375.188-.067.542-.167 1.062-.3a5.147 5.147 0 0 0 1.654-.828 6.73 6.73 0 0 0 1.655-1.808c.58-.97.932-2.058 1.03-3.184.347-2.239.3-4.52-.141-6.743zm-1.498.593c.352 1.906.39 3.857.109 5.775a6.218 6.218 0 0 1-.858 2.62 5.142 5.142 0 0 1-1.358 1.451 4.3 4.3 0 0 1-1.358.64c-.426.104-.712.177-.858.218-.146.041-.75.156-1.811.344-1.27.195-2.56.237-3.84.124l-.343.438c-.25.29-.536.629-.858 1.014-.323.384-.651.764-.984 1.14-.333.374-.582.645-.75.811a.563.563 0 0 1-.155.11.236.236 0 0 1-.187.015.2.2 0 0 1-.094-.125.807.807 0 0 1-.031-.25V17.36a5 5 0 0 1-2.481-1.467 5.82 5.82 0 0 1-1.2-2.185 9.045 9.045 0 0 1-.36-2.4c-.01-.812-.014-1.51-.014-2.092.007-1.09.154-2.176.437-3.23a5.265 5.265 0 0 1 1.405-2.42 5.442 5.442 0 0 1 2.138-1.2 13.846 13.846 0 0 1 2.4-.53c.647-.087 1.299-.134 1.952-.142l.81.032a16.22 16.22 0 0 1 2.733.2c.672.11 1.335.271 1.982.484.444.145.873.333 1.28.562.228.13.447.277.655.437a5.949 5.949 0 0 1 1.639 3.31zm-3.262 3.621a.275.275 0 0 1-.2-.078.238.238 0 0 1-.078-.17 6.942 6.942 0 0 0-.406-2.28A4.474 4.474 0 0 0 14.5 6.124a5.267 5.267 0 0 0-1.671-1.093 5.827 5.827 0 0 0-2.044-.4.268.268 0 0 1-.25-.25.335.335 0 0 1 .078-.219.223.223 0 0 1 .172-.093h.03a6.45 6.45 0 0 1 2.217.437c.686.27 1.312.673 1.842 1.186.54.54.96 1.187 1.233 1.9.294.8.437 1.648.422 2.5a.159.159 0 0 1-.047.171.275.275 0 0 1-.206.075zm-4.25 2.4h-.25l.006.004a4.456 4.456 0 0 1-1.768-.88 6.301 6.301 0 0 1-1.124-1.2 4.434 4.434 0 0 1-.577-1.077l-.156-.468.03-.25a.39.39 0 0 1 .188-.343l.53-.437a.884.884 0 0 0 .25-.453.806.806 0 0 0-.124-.67 6.973 6.973 0 0 0-.3-.5 12.69 12.69 0 0 1-.328-.53 10.832 10.832 0 0 0-.437-.563l-.312-.375a.9.9 0 0 0-.484-.265 1.056 1.056 0 0 0-.577.078c-.187.127-.37.257-.546.39a3.67 3.67 0 0 0-.515.484c-.101.14-.195.287-.281.437a1.211 1.211 0 0 0-.156.406v.156a1.178 1.178 0 0 0 .062.375c.084.208.209.504.375.89.166.384.416.878.749 1.482.199.38.417.75.655 1.108.211.32.44.627.687.921.104.146.224.301.359.453.135.152.276.307.42.452l.126.125c.149.149.305.29.469.422l.215.177c.08.067.154.128.222.182.27.208.572.426.905.655.35.24.716.459 1.092.656.604.333 1.104.588 1.5.764.294.138.596.258.905.36l.187.062c.06.02.124.031.188.031h.062l.03-.03a1.61 1.61 0 0 0 .454-.142c.159-.074.31-.163.453-.265.177-.156.339-.328.483-.515.133-.173.253-.355.359-.546v-.032a.893.893 0 0 0 .11-.56.9.9 0 0 0-.266-.47l-.374-.312a41.92 41.92 0 0 0-.593-.437 12.48 12.48 0 0 0-.515-.343 5.515 5.515 0 0 0-.484-.28.828.828 0 0 0-.687-.126.886.886 0 0 0-.468.25l-.406.53a.48.48 0 0 1-.343.22zm3.059-3.215a.224.224 0 0 1-.094.171.293.293 0 0 1-.187.078.268.268 0 0 1-.281-.28 3.22 3.22 0 0 0-.188-1.3 3.514 3.514 0 0 0-.655-1.078 2.808 2.808 0 0 0-1.015-.734 3.83 3.83 0 0 0-1.39-.3.21.21 0 0 1-.186-.094.38.38 0 0 1-.062-.218.226.226 0 0 1 .078-.188.317.317 0 0 1 .2-.062 5.105 5.105 0 0 1 1.592.36c.472.192.89.498 1.217.89.333.353.589.773.749 1.232.173.49.25 1.008.227 1.527l-.005-.004zm-1.917-.313a.314.314 0 0 0 .2.063l.036.003a.224.224 0 0 0 .187-.078.266.266 0 0 0 .063-.172 2.167 2.167 0 0 0-.531-1.467A1.894 1.894 0 0 0 11.748 7a.332.332 0 0 0-.22.078.254.254 0 0 0-.093.2.187.187 0 0 0 .063.2.33.33 0 0 0 .218.078c.374-.006.735.14 1 .406.247.298.38.674.375 1.061a.224.224 0 0 0 .078.187z">
                </path>
            </symbol>
            <symbol viewbox="0 0 26 16" id="s_social-s_vkontakte" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.805 15.083h-.147a3.434 3.434 0 0 1-1.612-.7 9.104 9.104 0 0 1-1.257-1.2l-.769-.917a1.038 1.038 0 0 0-1.035-.444.654.654 0 0 0-.532.385 2.17 2.17 0 0 0-.177.754c-.02.286-.035.576-.045.872 0 .259-.066.513-.192.74a1.364 1.364 0 0 1-1.242.473c-.63 0-1.222-.02-1.774-.06a7.573 7.573 0 0 1-3.977-1.448 15.364 15.364 0 0 1-2.616-2.62 36.676 36.676 0 0 1-4.022-6.535c-.177-.375-.364-.775-.562-1.2-.2-.431-.302-.9-.3-1.375a1.559 1.559 0 0 1 1.035-.31c.414.009.838.014 1.271.014.376 0 .824-.01 1.346-.03.398-.04.8.02 1.168.178.24.156.417.392.5.666.14.328.299.649.473.96.296.65.592 1.232.887 1.745.296.512.631 1.035 1.006 1.568.138.216.33.482.576.8a.907.907 0 0 0 .843.414c.258-.06.424-.36.5-.9.076-.542.126-1.03.148-1.464 0-.493-.015-1.02-.045-1.582a3.056 3.056 0 0 0-.25-1.227 1.043 1.043 0 0 0-.592-.488c-.26-.08-.51-.195-.74-.34a1.549 1.549 0 0 1 1.168-.754 11.515 11.515 0 0 1 1.858-.14c.592 0 1.222.005 1.892.015a1.6 1.6 0 0 1 1.39.576 2.51 2.51 0 0 1 .207 1.538 14.104 14.104 0 0 0-.118 1.745c-.02.61-.03 1.187-.03 1.73a1.4 1.4 0 0 0 .591 1.227c.31-.037.593-.197.784-.444l.577-.71c.371-.496.712-1.015 1.02-1.552.286-.504.586-1.09.9-1.76.138-.275.281-.6.43-.975.081-.301.292-.55.575-.68a2.61 2.61 0 0 1 1.3-.178c.534.04 1.046.06 1.538.059.217 0 .463-.01.74-.03.266-.02.533-.024.8-.014.234.005.467.038.693.1.172.031.32.14.4.295.108.369.054.766-.148 1.094a7.923 7.923 0 0 1-.5.976c-.343.566-.723 1.11-1.138 1.627-.385.473-.794.985-1.228 1.537-.176.216-.393.492-.65.828-.24.29-.367.658-.355 1.035.025.284.157.549.37.739.226.216.438.423.635.62.434.395.834.765 1.2 1.11.395.38.747.801 1.05 1.257.202.235.39.481.562.739.189.222.284.509.266.8a.757.757 0 0 1-.636.68 5.407 5.407 0 0 1-1.33.148c-.503 0-1.005-.015-1.509-.045a3.691 3.691 0 0 0-1.17.078z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 24" id="s_social-s_whatsapp" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.208.637A10.9 10.9 0 0 0 2.872 17.17l-1.97 5.848 6.037-1.931A10.9 10.9 0 1 0 12.208.636zm-.001 19.977a9.021 9.021 0 0 1-4.991-1.5l-3.487 1.113 1.13-3.367a9.072 9.072 0 1 1 7.348 3.755zm3.246-7.575c.252.103 1.594.828 1.867.978l.143.076c.194.103.324.172.374.268.06.45-.013.908-.211 1.316a2.82 2.82 0 0 1-1.93 1.253c-.087.005-.16.02-.236.035-.363.073-.767.155-3.077-.857a11.426 11.426 0 0 1-4.595-4.379A5.411 5.411 0 0 1 6.76 8.81a3.118 3.118 0 0 1 1.07-2.286 1.02 1.02 0 0 1 .755-.32c.095.004.191.013.284.022.087.009.17.017.249.02h.063c.157-.004.36-.01.545.488l.246.668c.225.615.489 1.333.534 1.432a.512.512 0 0 1 0 .488 1.88 1.88 0 0 1-.295.454 9.61 9.61 0 0 0-.146.163 4.31 4.31 0 0 1-.29.31c-.143.132-.295.279-.143.563.391.73.888 1.4 1.476 1.985a7.645 7.645 0 0 0 2.185 1.465c.274.153.439.133.607-.047.168-.18.724-.786.92-1.058.198-.272.38-.219.633-.117z">
                </path>
            </symbol>
            <symbol viewbox="0 0 19 22" id="s_social-s_yandex" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.47.54l5 10.612-5 10.308H.281V.54h13.19zM9.225 5.012v6.215h-.834c-1.325 0-2.425-.737-2.425-3.032 0-2.366 1.2-3.183 2.425-3.183h.834zm0 7.428H7.937L5.511 17.9H3.768l2.653-5.839c-1.247-.606-2.079-1.756-2.047-3.866-.032-2.985 1.85-4.472 4.093-4.472h2.274V17.9H9.225v-5.46z">
                </path>
            </symbol>
            <symbol viewbox="0 0 24 16" id="s_social-s_youtube" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.313 3.465A3.382 3.382 0 0 0 19.931.082H4.068A3.381 3.381 0 0 0 .687 3.465v9.072a3.38 3.38 0 0 0 3.381 3.381h15.863a3.38 3.38 0 0 0 3.382-3.381V3.465zm-13.576 8.8v-8.52l6.467 4.252-6.467 4.268z">
                </path>
            </symbol>
            <symbol viewbox="0 0 22 22" id="s_social-s_zen" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6 1.6C3.2 0 6.3 0 10.9 0c-.2 4.8-.3 7.1-2.1 8.9-1.7 1.7-3.9 1.8-8.8 2 0-4.4 0-7.7 1.6-9.3zm18.8 0c1.6 1.6 1.6 4.8 1.5 9.3-4.8-.2-7-.3-8.8-2.1-1.7-1.7-1.8-3.9-2-8.8 4.6 0 7.7 0 9.3 1.6zm1.5 9.5c-4.8.1-7 .3-8.8 2-1.7 1.8-1.9 4-2 8.8 4.5 0 7.6 0 9.2-1.6 1.6-1.5 1.6-4.8 1.6-9.2zm-13 2.1c1.7 1.7 1.8 3.9 2 8.8-4.6 0-7.7 0-9.2-1.5C.1 18.9.1 15.6.1 11.2c4.8.1 7 .3 8.8 2z">
                </path>
            </symbol>
        </svg></div>
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 40 40" id="social-facebook" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.011 21.937l.639-4.162h-3.994v-2.7c0-1.14.557-2.25 2.346-2.25h1.816V9.28S24.17 9 22.595 9c-3.29 0-5.439 1.994-5.439 5.602v3.173H13.5v4.162h3.656V32h4.5V21.937h3.355z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-facebook_alt" xmlns="http://www.w3.org/2000/svg">
                <path d="M31 20.002C31 13.925 26.076 9 20 9S9 13.925 9 20.002c0 5.492 4.022 10.043 9.281 10.869v-7.689h-2.793v-3.18h2.793v-2.424c0-2.757 1.642-4.28 4.155-4.28 1.204 0 2.462.214 2.462.214v2.708h-1.387c-1.367 0-1.792.849-1.792 1.719v2.063h3.05l-.487 3.18h-2.563v7.689C26.979 30.045 31 25.494 31 20z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-fbmessenger" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.979 12.537a11.735 11.735 0 0 0-7.94-3.051h-.003a11.831 11.831 0 0 0-4.435.826 11.583 11.583 0 0 0-3.58 2.225 10.47 10.47 0 0 0-2.408 3.306 9.746 9.746 0 0 0 .278 8.695 10.436 10.436 0 0 0 3.074 3.544v4.037l3.8-2.161c.524.17 1.061.3 1.606.389a11.401 11.401 0 0 0 6.04-.707 11.63 11.63 0 0 0 3.568-2.265 10.7 10.7 0 0 0 2.408-3.346 9.688 9.688 0 0 0 .89-4.117 9.512 9.512 0 0 0-.89-4.07 10.473 10.473 0 0 0-2.408-3.305zm-6.837 11.028l-.002.003h.005l-.003-.003zm6.134-6.597l-6.134 6.597L18.27 20.5l-5.6 3.068 6.167-6.6 2.908 3.13 5.532-3.13z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-flipboard" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.4 9.616H9.6v20.767h20.8V9.616zM17.722 26.381H13.67v-12.7h4.053v12.7zm8.608-8.675v-4.02h-8.189v4.02h8.19zm-4.153.419v4.07h-4.036v-4.07h4.036z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-google" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.213 18.469v3.673h6.077a5.782 5.782 0 0 1-6.077 4.623 6.766 6.766 0 0 1 0-13.532 6.028 6.028 0 0 1 4.271 1.652l2.909-2.8a10.273 10.273 0 0 0-7.18-2.798C14.297 9.287 9.5 14.084 9.5 20c0 5.917 4.797 10.714 10.713 10.714 6.184 0 10.287-4.346 10.287-10.467a9.941 9.941 0 0 0-.169-1.777l-10.118-.001z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-instagram" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.674 17.02c.026 1.697.026 3.821 0 6.373a11.048 11.048 0 0 1-.419 3.307 5.344 5.344 0 0 1-4.315 3.746 17.97 17.97 0 0 1-2.957.241c-1.672.026-3.788.026-6.35 0-1.117.03-2.231-.11-3.307-.415a5.343 5.343 0 0 1-3.759-4.308 17.766 17.766 0 0 1-.242-2.957c-.026-1.69-.026-3.814 0-6.373a10.99 10.99 0 0 1 .415-3.31 5.347 5.347 0 0 1 4.316-3.75c.98-.143 1.968-.224 2.958-.243.147-.005 1.147-.008 3-.008v-.03c2.634.046 4.07.073 4.311.08a7.085 7.085 0 0 1 3.538.918 5.286 5.286 0 0 1 2.57 3.77c.156.977.236 1.966.24 2.956l.001.002zm-4.979-4c.345-.011.678.12.921.364.246.24.381.57.373.912.007.346-.13.68-.377.921a1.218 1.218 0 0 1-.907.378 1.256 1.256 0 0 1-.915-.388 1.282 1.282 0 0 1 .905-2.188zM28.8 19.84a568.057 568.057 0 0 1-.139 4.893l.006.003a3.965 3.965 0 0 1-1.435 3.086 3.9 3.9 0 0 1-2.089.81c-.82.08-1.638.126-2.454.135a79.61 79.61 0 0 1-1.4.013h-2.7c-.444-.003-.867-.008-1.267-.016a19.034 19.034 0 0 1-2.844-.2 3.7 3.7 0 0 1-2.163-1.143 3.8 3.8 0 0 1-.929-2.279c-.087-1.006-.133-2.24-.139-3.7-.005-1.73.018-3.667.068-5.81.013-.515.09-1.026.23-1.522a3.458 3.458 0 0 1 3.03-2.66c.897-.122 1.801-.185 2.706-.187 1.981-.031 3.793-.031 5.437 0a18 18 0 0 1 2.864.223c.814.13 1.56.531 2.114 1.14.543.632.868 1.422.927 2.253.062.62.107 1.43.134 2.43v2.531h.043zm-8.75-5.322a5.289 5.289 0 0 1 2.73.737 5.508 5.508 0 0 1-5.559 9.511 5.36 5.36 0 0 1-1.989-2.01 5.549 5.549 0 0 1-.726-2.8 5.284 5.284 0 0 1 .74-2.737 5.39 5.39 0 0 1 2.016-1.978 5.536 5.536 0 0 1 2.788-.724v.001zm3.24 6.86a3.557 3.557 0 0 1-3.295 2.195 3.432 3.432 0 0 1-2.514-1.052 3.556 3.556 0 1 1 5.032-5.025 3.557 3.557 0 0 1 .776 3.882z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-livejournal" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.106 14.165l2.174 2.174a10.295 10.295 0 1 0 5.263-5.088l8.375 8.374v.006l.74 3.136.76 3.537-3.534-.76-3.137-.739-8.467-8.466a10.329 10.329 0 0 1 5.262-5.088L14.28 8.99a15.944 15.944 0 0 0-5.175 5.175zm15.977 8.396l-.552-2.424a8.667 8.667 0 0 0-4.278 4.279l2.424.552a5.443 5.443 0 0 1 2.406-2.407z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-myworld" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.312 16.245a2 2 0 0 1-1.491-.62 2.083 2.083 0 0 1-.6-1.51 2.142 2.142 0 0 1 .6-1.526 1.968 1.968 0 0 1 1.489-.637 1.818 1.818 0 0 1 1.419.64c.376.418.579.963.568 1.525a2.154 2.154 0 0 1-.568 1.51 1.84 1.84 0 0 1-1.42.62l.003-.002zm-8.7 0a1.954 1.954 0 0 1-1.455-.62 2.083 2.083 0 0 1-.6-1.51 2.142 2.142 0 0 1 .6-1.526c.37-.411.9-.643 1.455-.637.543 0 1.06.232 1.42.64.394.409.61.957.6 1.525a2.087 2.087 0 0 1-.6 1.51c-.365.397-.88.623-1.42.62v-.002zm15.569 9.763a1.274 1.274 0 0 0-.09-.923l-.001.001-2.556-4.544a1.355 1.355 0 0 0-.763-.568 1.1 1.1 0 0 0-.9.106c-.29.166-.501.44-.586.763-.084.318-.04.656.124.941l.284.568a9.218 9.218 0 0 1-3.09 2.2 9.063 9.063 0 0 1-3.691.781 8.943 8.943 0 0 1-3.674-.78 9.28 9.28 0 0 1-3.071-2.2l.242-.566a1.4 1.4 0 0 0 .16-.94 1.173 1.173 0 0 0-.48-.764c-.299-.162-.65-.2-.976-.106-.308.086-.57.29-.728.568L8.723 25.09a1.369 1.369 0 0 0 .5 1.7c.086.09.197.151.319.177a1.181 1.181 0 0 0 .923-.142c.2-.13.36-.314.462-.532l.923-1.669a11.762 11.762 0 0 0 3.727 2.414 11.48 11.48 0 0 0 8.68 0 11.81 11.81 0 0 0 3.71-2.414l.998 1.67c.098.213.252.396.444.531.173.117.377.18.586.178.1 0 .201-.012.3-.036a.624.624 0 0 0 .3-.177c.303-.159.518-.445.586-.78z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-odnoklassniki" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.99 20.134a6.47 6.47 0 0 1-2.384-.443 6.194 6.194 0 0 1-1.956-1.208 5.68 5.68 0 0 1-1.313-1.81 5.202 5.202 0 0 1-.483-2.207 5.28 5.28 0 0 1 .483-2.239 6.075 6.075 0 0 1 1.313-1.844 5.928 5.928 0 0 1 1.956-1.24 6.467 6.467 0 0 1 2.384-.44 6.608 6.608 0 0 1 2.423.443 5.644 5.644 0 0 1 1.941 1.24 6.263 6.263 0 0 1 1.288 1.844c.323.702.488 1.466.483 2.24a5.199 5.199 0 0 1-.483 2.205 5.732 5.732 0 0 1-3.229 3.02 6.609 6.609 0 0 1-2.423.44zm0-8.487a3.1 3.1 0 0 0-2.134.814 2.585 2.585 0 0 0-.91 2c.004.758.336 1.478.91 1.972a3.145 3.145 0 0 0 4.292 0c.57-.497.899-1.216.9-1.972.01-.767-.319-1.5-.9-2a3.115 3.115 0 0 0-2.158-.814zm7.117 10.584a1.15 1.15 0 0 0-.017-1.384l.001-.004a1.518 1.518 0 0 0-.924-.717 1.811 1.811 0 0 0-1.666.475 5.28 5.28 0 0 1-1.44.717c-.48.157-.97.28-1.466.367-.378.067-.76.11-1.143.13l-.467.015-.467-.016a9.139 9.139 0 0 1-1.144-.129c-.493-.086-.98-.207-1.457-.362a5.27 5.27 0 0 1-1.44-.717 1.755 1.755 0 0 0-1.644-.475 1.6 1.6 0 0 0-.95.717c-.296.418-.283.98.032 1.384a7.878 7.878 0 0 0 1.6 1.257c.692.41 1.45.698 2.238.853a21.2 21.2 0 0 0 2.045.322l-.966.918a99.62 99.62 0 0 1-1.949 1.8c-.644.59-1.186 1.095-1.626 1.513a1.34 1.34 0 0 0-.435.967c0 .351.16.683.435.9l.161.161a1.486 1.486 0 0 0 1.965 0l3.613-3.378c.706.633 1.372 1.25 2 1.852a37.629 37.629 0 0 0 1.683 1.53c.27.24.62.371.982.37.358.003.703-.13.966-.37l.177-.162a1.16 1.16 0 0 0 .42-.9 1.365 1.365 0 0 0-.42-.967l-3.623-3.317-1-.918a16.317 16.317 0 0 0 2.093-.362 8.472 8.472 0 0 0 2.19-.813 7.068 7.068 0 0 0 1.643-1.257z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-pinterest" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.998 8.694a11.306 11.306 0 0 0-4.773 21.554c.072-3.162 1.15-5.786 1.708-8.538-1.174-1.978.142-5.96 2.62-4.978 3.05 1.206-2.64 7.354 1.18 8.122 3.987.8 5.614-6.921 3.142-9.431-3.573-3.627-10.4-.083-9.562 5.107.205 1.269 1.516 1.655.524 3.405-2.287-.505-2.969-2.31-2.88-4.714.14-3.936 3.535-6.692 6.941-7.073 4.306-.482 8.35 1.58 8.907 5.632.628 4.573-1.944 9.525-6.549 9.169-1.248-.1-1.773-.715-2.752-1.31a16.754 16.754 0 0 1-1.63 5.226 11.306 11.306 0 1 0 3.124-22.171z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-rss" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.863 30.402c0-9.62-7.8-17.42-17.42-17.42V9.577a20.825 20.825 0 0 1 20.825 20.825v.072h-3.405v-.072zM9.443 19.476c6.034.001 10.926 4.893 10.926 10.927v.072h3.441v-.072A14.367 14.367 0 0 0 9.443 16.035v3.44zm3.28 10.963a3.244 3.244 0 1 0 0-6.488 3.244 3.244 0 0 0 0 6.489z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-skype" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.796 12.568a10.47 10.47 0 0 1 2.937 9.042 6.33 6.33 0 0 1-8.711 8.712 10.475 10.475 0 0 1-11.978-11.98 6.332 6.332 0 0 1 8.712-8.713c3.31-.524 6.67.569 9.04 2.94zm-4.385 13.665a4.33 4.33 0 0 0 1.945-1.494 3.689 3.689 0 0 0 .67-2.159 3.42 3.42 0 0 0-.385-1.69c-.256-.46-.621-.85-1.063-1.134a6.75 6.75 0 0 0-1.651-.764 23.144 23.144 0 0 0-2.16-.57 38.06 38.06 0 0 1-1.361-.338 4.318 4.318 0 0 1-.806-.317 1.852 1.852 0 0 1-.62-.479 1 1 0 0 1-.22-.646c.02-.439.27-.835.657-1.042a3.136 3.136 0 0 1 1.755-.441 2.8 2.8 0 0 1 1.7.4c.382.308.692.696.909 1.136.147.28.337.536.563.758.219.173.495.258.774.239.353.008.692-.135.933-.393.237-.233.372-.552.374-.884a2.3 2.3 0 0 0-.3-1.081 3.412 3.412 0 0 0-.924-1.053 4.946 4.946 0 0 0-1.584-.8 7.55 7.55 0 0 0-2.255-.3 8.071 8.071 0 0 0-2.84.455 4 4 0 0 0-1.855 1.3 3.13 3.13 0 0 0-.642 1.94c-.024.692.191 1.37.609 1.922.436.537 1 .954 1.64 1.215.822.339 1.676.598 2.548.774.749.16 1.352.31 1.8.453.404.116.776.325 1.087.609.277.264.426.636.41 1.018a1.563 1.563 0 0 1-.77 1.328 3.5 3.5 0 0 1-2.031.538 3.382 3.382 0 0 1-1.468-.265 2.265 2.265 0 0 1-.861-.677 5.123 5.123 0 0 1-.576-1.03 2.115 2.115 0 0 0-.543-.81 1.191 1.191 0 0 0-.8-.279 1.333 1.333 0 0 0-.951.355c-.24.221-.375.532-.373.857.02.627.234 1.233.61 1.735a4.459 4.459 0 0 0 1.574 1.416 7.206 7.206 0 0 0 3.458.736 7.749 7.749 0 0 0 3.023-.538z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-sms" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.752 19.96c0-5.756 5.034-10.418 11.248-10.418 6.211 0 11.248 4.668 11.248 10.418 0 5.75-5.036 10.412-11.247 10.412-.79 0-1.579-.076-2.354-.23a15.116 15.116 0 0 1-5.528 1.539 10.282 10.282 0 0 0 1.933-2.884 10.258 10.258 0 0 1-5.3-8.837zm4.264 4.263a2.549 2.549 0 0 0 1.807-.671 2.243 2.243 0 0 0 .723-1.695 2.366 2.366 0 0 0-.548-1.542c-.3-.38-.65-.716-1.041-1-.634-.44-.767-.741-.767-.915a.356.356 0 0 1 .124-.3.584.584 0 0 1 .387-.115c.404.04.792.173 1.135.39l.235.129v-2.026l-.1-.041a3.648 3.648 0 0 0-1.468-.318 2.225 2.225 0 0 0-2.321 2.322 2.38 2.38 0 0 0 .417 1.364c.363.488.799.917 1.293 1.272.176.126.336.274.476.44.073.091.114.204.115.32a.454.454 0 0 1-.134.347.539.539 0 0 1-.388.13 2.684 2.684 0 0 1-1.259-.443l-.238-.14v2.1l.09.044c.455.225.955.344 1.462.348zm8.882-.194l-.365-4.136-.847 4.136h-1.387l-.888-4.17-.354 4.169h-1.91l.831-7.7h2.392l.025.129c.219 1.155.406 2.2.558 3.128l.025-.16c.074-.446.155-.887.239-1.31l.352-1.787h2.434l.877 7.7h-1.982zm4.52.194a2.549 2.549 0 0 0 1.807-.671 2.243 2.243 0 0 0 .723-1.695 2.37 2.37 0 0 0-.547-1.542c-.3-.38-.65-.716-1.042-1-.634-.44-.767-.741-.767-.915a.356.356 0 0 1 .124-.3.584.584 0 0 1 .387-.115c.404.04.792.173 1.135.39l.235.129v-2.026l-.1-.041a3.648 3.648 0 0 0-1.468-.318 2.225 2.225 0 0 0-2.321 2.322 2.38 2.38 0 0 0 .417 1.364c.363.488.799.917 1.293 1.272.176.126.336.274.476.44.073.091.114.204.115.32a.454.454 0 0 1-.134.347.539.539 0 0 1-.388.13 2.684 2.684 0 0 1-1.259-.443l-.238-.14v2.1l.09.044c.455.225.955.344 1.462.348z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-tamtam" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.974 10.511a10.66 10.66 0 0 0-3.977-.752 10.576 10.576 0 0 0-3.943.755 9.915 9.915 0 0 0-5.48 5.2 9.33 9.33 0 0 0-.83 3.931 9.446 9.446 0 0 0 1.243 4.9c.829 1.4 1.955 2.601 3.3 3.516v4.421l3.624-2.645c.376.062.756.098 1.136.107.39.01.706.015.952.015a9.821 9.821 0 0 0 4.023-.829 10.754 10.754 0 0 0 3.285-2.24 10.354 10.354 0 0 0 2.165-3.287c.524-1.254.79-2.601.783-3.96a8.999 8.999 0 0 0-.8-3.932 9.914 9.914 0 0 0-5.48-5.2zm-2.349 13.757a3.856 3.856 0 0 1-1.628.384 4.8 4.8 0 0 1-3.482-1.405 4.435 4.435 0 0 1-1.428-3.27h9.455a3.75 3.75 0 0 1-.384 1.8 5.326 5.326 0 0 1-1.06 1.474 5.237 5.237 0 0 1-1.473 1.017z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-telegram" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.19 11.119c-.037.013-.073.029-.11.043l-13.607 5.245c-2.1.81-4.2 1.62-6.3 2.433-.331.11-.639.282-.906.507a.56.56 0 0 0 .092 1c.185.105.383.187.59.242 1.54.48 3.078.965 4.621 1.439a.455.455 0 0 1 .341.34c.156.517.332 1.029.5 1.545.492 1.516.983 3.032 1.472 4.549a.55.55 0 0 0 .572.428 1.375 1.375 0 0 0 1.058-.454c.777-.767 1.568-1.522 2.342-2.293a.307.307 0 0 1 .48-.037c1.571 1.177 3.153 2.338 4.73 3.507.236.185.509.318.8.39a.92.92 0 0 0 1.09-.461 2.63 2.63 0 0 0 .276-.821c1.046-4.925 2.09-9.85 3.131-14.775.147-.572.259-1.153.335-1.74a1.039 1.039 0 0 0-1.508-1.087zm-2.61 3.7c-.183.173-.372.34-.557.508-2.951 2.662-5.904 5.322-8.857 7.98a.93.93 0 0 0-.32.673c-.09 1.108-.2 2.214-.3 3.32a.132.132 0 0 1-.08.14c-.148-.45-.292-.9-.438-1.341-.44-1.35-.878-2.7-1.328-4.048a.334.334 0 0 1 .16-.471c3.643-2.292 7.282-4.586 10.918-6.882.181-.132.39-.22.61-.257.115-.013.247-.018.307.1.06.118-.04.206-.116.277z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-twitter" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.485 28.082a13.217 13.217 0 0 0 20.331-11.74 9.428 9.428 0 0 0 2.318-2.4 9.32 9.32 0 0 1-2.669.73 4.664 4.664 0 0 0 2.044-2.57 9.288 9.288 0 0 1-2.95 1.127 4.65 4.65 0 0 0-7.919 4.24 13.191 13.191 0 0 1-9.578-4.857 4.652 4.652 0 0 0 1.437 6.2 4.613 4.613 0 0 1-2.1-.582v.059a4.649 4.649 0 0 0 3.72 4.556 4.667 4.667 0 0 1-2.1.08 4.652 4.652 0 0 0 4.341 3.227 9.316 9.316 0 0 1-5.77 1.989 9.404 9.404 0 0 1-1.105-.06z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-viber" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.037 16.124a7.267 7.267 0 0 0-1.982-3.84 10.856 10.856 0 0 0-.74-.55 6.957 6.957 0 0 0-1.466-.7 15.27 15.27 0 0 0-2.3-.61 16.869 16.869 0 0 0-3.2-.265l-.937-.03c-.773.009-1.545.071-2.31.186-.958.14-1.903.359-2.825.655a6.743 6.743 0 0 0-2.544 1.436 6.434 6.434 0 0 0-1.686 2.872 14.673 14.673 0 0 0-.53 3.871c0 .71.02 1.543.062 2.5.044.966.217 1.921.515 2.841a7.114 7.114 0 0 0 1.5 2.575 6.201 6.201 0 0 0 2.98 1.733v2.25l.063.468c.02.286.222.526.5.593a.849.849 0 0 0 .9-.25c.27-.27.572-.583.905-.937.187-.207.4-.446.64-.717.24-.27.442-.52.609-.75a18.53 18.53 0 0 0 4.51-.093c1.24-.208 1.931-.333 2.076-.375.188-.067.542-.167 1.062-.3a5.147 5.147 0 0 0 1.654-.828 6.73 6.73 0 0 0 1.655-1.808c.58-.97.932-2.058 1.03-3.184.347-2.239.3-4.52-.141-6.743zm-1.498.593c.352 1.906.39 3.857.109 5.775a6.218 6.218 0 0 1-.858 2.62 5.142 5.142 0 0 1-1.358 1.451 4.3 4.3 0 0 1-1.358.64c-.426.104-.712.177-.858.218-.146.041-.75.156-1.811.344-1.27.195-2.56.237-3.84.124l-.343.438c-.25.29-.536.629-.858 1.014-.323.384-.652.764-.984 1.14-.333.374-.582.645-.75.811a.561.561 0 0 1-.155.11.236.236 0 0 1-.187.015.2.2 0 0 1-.094-.125.81.81 0 0 1-.031-.25V27.36a5 5 0 0 1-2.481-1.467 5.82 5.82 0 0 1-1.2-2.185 9.05 9.05 0 0 1-.36-2.4c-.01-.812-.014-1.51-.014-2.092.007-1.09.154-2.176.437-3.23a5.266 5.266 0 0 1 1.405-2.42 5.444 5.444 0 0 1 2.138-1.2 13.848 13.848 0 0 1 2.4-.53c.647-.087 1.299-.134 1.952-.142l.81.032c.916-.01 1.83.056 2.733.2.672.11 1.335.271 1.982.484a7.1 7.1 0 0 1 1.28.562c.228.131.447.277.655.437a5.949 5.949 0 0 1 1.639 3.31zm-3.262 3.621a.275.275 0 0 1-.2-.078.238.238 0 0 1-.078-.17 6.942 6.942 0 0 0-.406-2.28 4.474 4.474 0 0 0-1.092-1.686 5.267 5.267 0 0 0-1.671-1.093 5.827 5.827 0 0 0-2.044-.4.268.268 0 0 1-.25-.25.335.335 0 0 1 .078-.219.223.223 0 0 1 .172-.093h.03a6.45 6.45 0 0 1 2.217.437c.686.27 1.312.673 1.842 1.186.54.54.96 1.187 1.233 1.9.294.8.437 1.648.422 2.5a.159.159 0 0 1-.047.171.275.275 0 0 1-.206.075zm-4.25 2.4h-.25l.006.004a4.456 4.456 0 0 1-1.768-.88 6.305 6.305 0 0 1-1.124-1.2 4.435 4.435 0 0 1-.577-1.077l-.156-.468.03-.25a.39.39 0 0 1 .188-.343l.53-.437a.883.883 0 0 0 .25-.453.806.806 0 0 0-.124-.67 6.973 6.973 0 0 0-.3-.5 12.791 12.791 0 0 1-.328-.53 10.832 10.832 0 0 0-.437-.563l-.312-.375a.9.9 0 0 0-.484-.265 1.056 1.056 0 0 0-.577.078c-.188.127-.37.257-.546.39-.187.145-.36.307-.515.484-.101.14-.195.287-.281.437a1.213 1.213 0 0 0-.156.406v.156a1.195 1.195 0 0 0 .062.375c.084.208.209.504.375.89.166.384.415.878.749 1.482.199.38.418.75.655 1.108.211.32.44.627.687.921.104.146.224.301.359.453.135.152.276.307.42.452l.126.125c.149.149.305.29.469.422l.215.177c.08.067.154.128.222.182.27.208.572.426.905.655.35.24.715.459 1.092.656.604.333 1.104.588 1.5.764.294.138.596.258.905.36l.187.062c.06.02.124.031.188.031h.062l.03-.03a1.61 1.61 0 0 0 .454-.142c.159-.074.31-.163.453-.265.177-.156.339-.328.483-.515.133-.173.253-.355.359-.546v-.032a.893.893 0 0 0 .11-.56.9.9 0 0 0-.266-.47l-.374-.312a41.92 41.92 0 0 0-.593-.437 12.48 12.48 0 0 0-.515-.343 5.515 5.515 0 0 0-.484-.28.828.828 0 0 0-.687-.126.886.886 0 0 0-.468.25l-.406.53a.48.48 0 0 1-.343.22zm3.059-3.215a.223.223 0 0 1-.094.171.293.293 0 0 1-.187.078.268.268 0 0 1-.281-.28 3.22 3.22 0 0 0-.188-1.3 3.513 3.513 0 0 0-.655-1.078 2.808 2.808 0 0 0-1.015-.734 3.83 3.83 0 0 0-1.39-.3.21.21 0 0 1-.186-.094.38.38 0 0 1-.062-.218.226.226 0 0 1 .078-.188.317.317 0 0 1 .2-.062 5.103 5.103 0 0 1 1.592.36c.472.192.89.498 1.217.89.334.353.589.773.749 1.232.173.49.25 1.008.227 1.527l-.005-.004zm-1.917-.313a.314.314 0 0 0 .2.063l.036.003a.224.224 0 0 0 .187-.078.266.266 0 0 0 .063-.172 2.167 2.167 0 0 0-.531-1.467A1.894 1.894 0 0 0 20.748 17a.333.333 0 0 0-.22.078.254.254 0 0 0-.093.2.187.187 0 0 0 .063.2c.06.052.138.08.218.078.374-.006.735.14 1 .406.247.298.38.674.375 1.061a.224.224 0 0 0 .078.187z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-vkontakte" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.805 27.083h-.147a3.434 3.434 0 0 1-1.612-.7 9.104 9.104 0 0 1-1.257-1.2l-.769-.917a1.038 1.038 0 0 0-1.035-.444.654.654 0 0 0-.532.385 2.17 2.17 0 0 0-.177.754c-.02.286-.035.576-.045.872 0 .259-.066.513-.192.74a1.364 1.364 0 0 1-1.242.473c-.63 0-1.222-.02-1.774-.06a7.574 7.574 0 0 1-3.977-1.448 15.365 15.365 0 0 1-2.616-2.62 36.69 36.69 0 0 1-4.022-6.535c-.177-.375-.364-.775-.562-1.2-.2-.431-.302-.9-.3-1.375a1.56 1.56 0 0 1 1.035-.31c.414.009.838.014 1.271.014.376 0 .824-.01 1.346-.03.399-.04.8.02 1.168.178.24.156.417.392.5.666.14.328.299.649.473.96.296.65.592 1.232.887 1.745.296.512.631 1.035 1.006 1.568.138.216.33.482.576.8a.907.907 0 0 0 .843.414c.258-.06.424-.36.5-.9.076-.542.126-1.03.148-1.464 0-.493-.015-1.02-.045-1.582a3.056 3.056 0 0 0-.25-1.227 1.043 1.043 0 0 0-.592-.488c-.26-.08-.51-.194-.74-.34a1.55 1.55 0 0 1 1.168-.754 11.513 11.513 0 0 1 1.858-.14c.592 0 1.222.005 1.892.015a1.6 1.6 0 0 1 1.39.576 2.51 2.51 0 0 1 .207 1.538 14.104 14.104 0 0 0-.118 1.745c-.02.61-.03 1.187-.03 1.73a1.4 1.4 0 0 0 .591 1.227c.31-.037.593-.197.784-.444l.577-.71c.371-.496.712-1.015 1.02-1.552.286-.504.586-1.09.9-1.76.138-.275.281-.6.43-.975.081-.301.292-.55.575-.68.412-.17.859-.23 1.3-.178.534.04 1.046.06 1.538.059.217 0 .463-.01.74-.03.266-.02.533-.024.8-.014.234.005.467.038.693.1.172.031.32.14.4.295.108.369.054.766-.148 1.094a7.92 7.92 0 0 1-.5.976 15.15 15.15 0 0 1-1.138 1.627c-.385.473-.794.985-1.228 1.537-.176.216-.393.492-.65.828-.24.29-.367.658-.355 1.035.025.284.157.549.37.739.226.216.438.423.635.62.434.395.834.765 1.2 1.11.395.38.747.801 1.05 1.257.202.235.39.481.562.739.189.222.284.509.266.8a.757.757 0 0 1-.636.68 5.407 5.407 0 0 1-1.33.148c-.503 0-1.005-.015-1.509-.045a3.691 3.691 0 0 0-1.17.078z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-whatsapp" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.208 8.637a10.9 10.9 0 0 0-9.336 16.532l-1.97 5.848 6.037-1.931a10.9 10.9 0 1 0 5.269-20.449zm-.001 19.977a9.022 9.022 0 0 1-4.991-1.5l-3.487 1.113 1.13-3.367a9.072 9.072 0 1 1 7.348 3.755zm3.246-7.575c.252.102 1.594.827 1.867.977l.143.077c.194.103.324.172.374.268.06.45-.013.908-.211 1.316a2.82 2.82 0 0 1-1.93 1.253c-.087.005-.16.02-.236.035-.363.073-.767.155-3.077-.857a11.426 11.426 0 0 1-4.595-4.378 5.412 5.412 0 0 1-1.028-2.92 3.118 3.118 0 0 1 1.07-2.286 1.02 1.02 0 0 1 .755-.321c.095.004.191.013.284.022.087.009.17.017.249.02h.063c.157-.004.36-.01.545.489l.245.667c.226.615.49 1.333.535 1.433a.512.512 0 0 1 0 .488 1.884 1.884 0 0 1-.295.454 9.678 9.678 0 0 0-.146.162c-.097.11-.195.221-.29.31-.143.131-.295.278-.143.563.391.73.888 1.4 1.476 1.985a7.645 7.645 0 0 0 2.185 1.465c.274.152.439.133.607-.047.168-.18.724-.785.92-1.057.198-.273.38-.22.633-.117z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-yandex" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.47 9.54l5 10.612-5 10.308H11.281V9.54h13.19zm-4.245 4.472v6.215h-.834c-1.325 0-2.425-.737-2.425-3.032 0-2.366 1.2-3.183 2.425-3.183h.834zm0 7.428h-1.288l-2.426 5.46h-1.743l2.653-5.839c-1.247-.606-2.079-1.756-2.047-3.866-.032-2.985 1.85-4.472 4.093-4.472h2.274V26.9h-1.516v-5.46z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-youtube" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.313 15.464a3.382 3.382 0 0 0-3.382-3.383H12.068a3.381 3.381 0 0 0-3.381 3.383v9.072a3.38 3.38 0 0 0 3.381 3.383h15.863a3.38 3.38 0 0 0 3.382-3.383v-9.072zm-13.576 8.8v-8.52l6.467 4.253-6.467 4.268z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="social-zen" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6 10.6C12.2 9 15.3 9 19.9 9c-.2 4.8-.3 7.1-2.1 8.9-1.7 1.7-3.9 1.8-8.8 2 0-4.4 0-7.7 1.6-9.3zm18.8 0c1.6 1.6 1.6 4.8 1.5 9.3-4.8-.2-7-.3-8.8-2.1-1.7-1.7-1.8-3.9-2-8.8 4.6 0 7.7 0 9.3 1.6zm1.5 9.5c-4.8.1-7 .3-8.8 2-1.7 1.8-1.9 4-2 8.8 4.5 0 7.6 0 9.2-1.6 1.6-1.5 1.6-4.8 1.6-9.2zm-13 2.1c1.7 1.7 1.8 3.9 2 8.8-4.6 0-7.7 0-9.2-1.5-1.6-1.6-1.6-4.9-1.6-9.3 4.8.1 7 .3 8.8 2z">
                </path>
            </symbol>
        </svg></div>
    <div class="svg-sprite">
        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewbox="0 0 40 40" id="header_icon-chatL" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.477 37.198a1 1 0 0 1-1.477-.88v-5.402c-6.672-.262-12-5.754-12-12.49V18C3 10.82 8.82 5 16 5h8c7.18 0 13 5.82 13 13v.317c0 5.065-2.876 9.39-7.012 11.543l-13.51 7.338zM18.9 27.166v4.278l9.257-5.028.03-.016c2.911-1.515 4.913-4.544 4.913-8.082V18A9.1 9.1 0 0 0 24 8.9h-8A9.1 9.1 0 0 0 6.9 18v.426a8.6 8.6 0 0 0 8.253 8.593l3.747.148zM13 16a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm5 2a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="header_icon-chatL_counter" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.477 37.198a1 1 0 0 1-1.477-.88v-5.402c-6.672-.262-12-5.754-12-12.49V18C3 10.82 8.82 5 16 5h8c7.18 0 13 5.82 13 13v.317c0 5.065-2.876 9.39-7.012 11.543l-13.51 7.338z">
                </path>
            </symbol>
            <symbol viewbox="0 0 34 34" id="header_icon-chatS" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 28.332v-2.336c-5.55-.156-10-4.703-10-10.29C3 9.793 7.793 5 13.706 5h6.63C26.227 5 31 9.774 31 15.663a10.6 10.6 0 0 1-2.293 6.61 10.742 10.742 0 0 1-3.206 2.722l-.003.002-.004.002.006.001-11.011 6.166A1 1 0 0 1 13 30.294v-1.962zm3.2-5.448v3.607l7.743-4.29a7.451 7.451 0 0 0 3.857-6.538A7.463 7.463 0 0 0 20.337 8.2h-6.631A7.506 7.506 0 0 0 6.2 15.706a7.094 7.094 0 0 0 6.89 7.091l3.11.087zm-5.231-8.629a1.65 1.65 0 1 0 0 3.3 1.65 1.65 0 0 0 0-3.3zm6.031 0a1.65 1.65 0 1 0 0 3.3 1.65 1.65 0 0 0 0-3.3zm4.381 1.65a1.65 1.65 0 1 1 3.3 0 1.65 1.65 0 0 1-3.3 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 34 34" id="header_icon-chatS_counter" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 28.332v-2.336c-5.55-.156-10-4.703-10-10.29C3 9.793 7.793 5 13.706 5h6.63C26.227 5 31 9.774 31 15.663a10.6 10.6 0 0 1-2.293 6.61 10.742 10.742 0 0 1-3.206 2.722l-.003.002-.004.002.006.001-11.011 6.166A1 1 0 0 1 13 30.294v-1.962z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="header_icon-liveL" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 20c0-3.72 0-5.58.409-7.106a12 12 0 0 1 8.485-8.485C14.42 4 16.28 4 20 4c3.72 0 5.58 0 7.106.409a12 12 0 0 1 8.485 8.485C36 14.42 36 16.28 36 20c0 3.72 0 5.58-.409 7.106a12 12 0 0 1-8.485 8.485C25.58 36 23.72 36 20 36c-3.72 0-5.58 0-7.106-.409a12 12 0 0 1-8.485-8.485C4 25.58 4 23.72 4 20zm4 0c0-3.727 0-5.591.609-7.062a8 8 0 0 1 4.33-4.329C14.409 8 16.273 8 20 8s5.591 0 7.061.609a8 8 0 0 1 4.33 4.33C32 14.409 32 16.273 32 20s0 5.591-.609 7.061a8 8 0 0 1-4.33 4.33C25.591 32 23.727 32 20 32s-5.591 0-7.062-.609a8 8 0 0 1-4.329-4.33C8 25.591 8 23.727 8 20zm4.422-5.788C12 15.056 12 16.157 12 18.36v3.28c0 2.203 0 3.304.422 4.148a4 4 0 0 0 1.79 1.79c.844.422 1.945.422 4.148.422h3.28c2.203 0 3.304 0 4.148-.422a4 4 0 0 0 1.79-1.79C28 24.944 28 23.843 28 21.64v-3.28c0-2.203 0-3.304-.422-4.148a4 4 0 0 0-1.79-1.79C24.944 12 23.843 12 21.64 12h-3.28c-2.203 0-3.304 0-4.148.422a4 4 0 0 0-1.79 1.79z">
                </path>
            </symbol>
            <symbol viewbox="0 0 36 36" id="header_icon-liveS" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 18c0-1.858 0-2.787.112-3.566a11 11 0 0 1 9.322-9.322C15.214 5 16.142 5 18 5c1.858 0 2.787 0 3.566.112a11 11 0 0 1 9.322 9.322C31 15.214 31 16.142 31 18c0 1.858 0 2.787-.112 3.566a11 11 0 0 1-9.323 9.322C20.788 31 19.858 31 18 31c-1.858 0-2.787 0-3.566-.112a11 11 0 0 1-9.322-9.323C5 20.788 5 19.858 5 18zm3 0c0-1.859 0-2.788.154-3.56a8 8 0 0 1 6.285-6.286C15.212 8 16.141 8 18 8s2.788 0 3.56.154a8 8 0 0 1 6.286 6.285C28 15.212 28 16.141 28 18s0 2.788-.154 3.56a8 8 0 0 1-6.285 6.286C20.788 28 19.859 28 18 28s-2.788 0-3.56-.154a8 8 0 0 1-6.286-6.285C8 20.788 8 19.859 8 18zm4.305-3.53C12 15.203 12 16.135 12 18c0 1.864 0 2.796.305 3.53a4 4 0 0 0 2.164 2.165C15.204 24 16.136 24 18 24s2.796 0 3.53-.305a4 4 0 0 0 2.165-2.164C24 20.796 24 19.864 24 18s0-2.796-.305-3.53a4 4 0 0 0-2.164-2.165C20.796 12 19.864 12 18 12s-2.796 0-3.53.305a4 4 0 0 0-2.165 2.164z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="header_icon-searchL" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.836 18.13c0 7.18-5.82 13-13 13a12.94 12.94 0 0 1-7.546-2.413l-.217.22L7.708 35.3c-.33.329-.494.493-.665.592a1.5 1.5 0 0 1-1.5 0c-.17-.099-.335-.263-.664-.592-.329-.329-.493-.493-.592-.664a1.5 1.5 0 0 1 0-1.5c.099-.171.263-.336.592-.664l6.364-6.364.186-.185a12.942 12.942 0 0 1-2.594-7.793c0-7.18 5.82-13 13-13s13 5.82 13 13zm-4.044-.096a9.148 9.148 0 1 1-18.297 0 9.148 9.148 0 0 1 18.297 0z">
                </path>
            </symbol>
            <symbol viewbox="0 0 36 36" id="header_icon-searchS" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.71 23a10.95 10.95 0 0 1-2.083-6.47c.015-6.074 4.951-10.988 11.026-10.973 6.075.014 10.989 4.95 10.974 11.025-.014 6.076-4.95 10.989-11.026 10.975a10.95 10.95 0 0 1-6.416-2.083l-5.932 5.932a3.782 3.782 0 0 1-.324.306 1.5 1.5 0 0 1-1.826 0 3.782 3.782 0 0 1-.325-.306 3.769 3.769 0 0 1-.306-.324 1.5 1.5 0 0 1 0-1.826c.06-.078.142-.16.306-.325L10.71 23zm8.928 1.128a7.6 7.6 0 1 1 .036-15.2 7.6 7.6 0 0 1-.036 15.2z">
                </path>
            </symbol>
            <symbol viewbox="0 0 40 40" id="header_icon-userL" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 12a8 8 0 1 1 16 0v6a8 8 0 0 1-16 0v-6zm4-.236a4.014 4.014 0 1 1 8.028.01l-.017 6.481a4.005 4.005 0 0 1-8.01-.01v-6.481zM9.172 35.619C9.738 33.662 11.44 32 13.472 32h13c2.032 0 3.734 1.662 4.3 3.619.212.733.318 1.1.505 1.24.187.141.49.141 1.095.141h1.2c.676 0 1.014 0 1.224-.244.21-.244.163-.547.07-1.15C34.204 31.296 30.543 28 26.472 28h-13c-4.07 0-7.732 3.297-8.394 7.605-.092.605-.139.907.07 1.15.21.245.548.245 1.224.245h1.2c.606 0 .909 0 1.095-.14.187-.141.293-.508.505-1.241z">
                </path>
            </symbol>
            <symbol viewbox="0 0 36 36" id="header_icon-userS" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 11.983c0-.448 0-.673.011-.862a6.5 6.5 0 0 1 6.11-6.11C17.31 5 17.534 5 17.982 5c.451 0 .676 0 .866.011a6.5 6.5 0 0 1 6.11 6.14c.01.19.01.415.008.865l-.02 4.043c-.002.438-.003.657-.014.842a6.5 6.5 0 0 1-6.117 6.088c-.185.011-.404.011-.842.011-.44 0-.66 0-.846-.01a6.5 6.5 0 0 1-6.117-6.118C11 16.686 11 16.466 11 16.026v-4.043zm3.3-.083c0-.186 0-.278.003-.357a3.5 3.5 0 0 1 3.34-3.34c.078-.003.171-.003.357-.003.186 0 .279 0 .357.004a3.5 3.5 0 0 1 3.34 3.34c.003.078.003.17.003.356v4.2c0 .186 0 .279-.004.357a3.5 3.5 0 0 1-3.34 3.34c-.078.003-.17.003-.356.003-.186 0-.279 0-.357-.003a3.5 3.5 0 0 1-3.34-3.34c-.003-.078-.003-.171-.003-.357v-4.2zM8.452 32.303c.293-1.987 1.81-3.903 4.048-3.903h11c2.238 0 3.755 1.916 4.048 3.903.056.382.365.697.752.697h2c.386 0 .703-.314.668-.699C30.634 28.652 27.73 25 23.5 25h-11c-4.23 0-7.134 3.652-7.468 7.301-.035.385.281.699.668.699h2c.386 0 .695-.315.752-.697z">
                </path>
            </symbol>
        </svg></div>


    <div class="page" id="page" style="position: relative; margin: 0px; padding: 0px; width: 100%;">
        <div class="page__width">
            <div class="page__bg">

                <div class="header" id="header">
                    <div class="header__brand">
                        <div class="header__brand-bg">
                            <div class="header__brand-align">
                                <div class="header__brand-image">
                                    <div class="header__brand-image-desk"><svg xmlns="http://www.w3.org/2000/svg" width="1311" height="321" viewbox="0 0 1311 321" class="svg-graphic">
                                            <path class="svg-accent-color" id="hsvg1" fill="#0075FF" d="M165.4,0H77.6c-1.6,1.9-3.3,3.8-5.1,5.6C57.4,20.7,36.9,29.2,15.5,29.2c-5.2,0-10.4-0.5-15.5-1.5v78.6c25.8,2.5,52-1.3,76.2-11.3c29-12,53.7-32.3,71.1-58.4C154.9,25.1,161,12.8,165.4,0z">
                                            </path>
                                            <path class="svg-accent-color" id="hsvg3" fill="#0075FF" d="M196,215H0v-91h101.4L196,215z"></path>
                                            <path class="svg-accent-color" id="hsvg4" fill="#0075FF" fill-rule="evenodd" clip-rule="evenodd" d="M264,24c-18,0-35.6,5.3-50.6,15.3c-15,10-26.6,24.2-33.5,40.8s-8.7,34.9-5.2,52.6c3.5,17.7,12.2,33.9,24.9,46.6c12.7,12.7,28.9,21.4,46.6,24.9c17.7,3.5,35.9,1.7,52.6-5.2s30.8-18.6,40.8-33.5c10-15,15.3-32.6,15.3-50.6c0-24.1-9.6-47.3-26.7-64.3C311.3,33.6,288.1,24,264,24z M264,161.3c-9.2,0-18.1-2.7-25.7-7.8c-7.6-5.1-13.6-12.3-17.1-20.8c-3.5-8.5-4.4-17.8-2.6-26.8c1.8-9,6.2-17.2,12.7-23.7c6.5-6.5,14.7-10.9,23.7-12.7c9-1.8,18.3-0.9,26.8,2.6s15.7,9.4,20.8,17.1c5.1,7.6,7.8,16.6,7.8,25.7c0,12.3-4.9,24.1-13.6,32.8C288.1,156.4,276.3,161.3,264,161.3z">
                                            </path>
                                            <path id="hsvg2" opacity="0.1" fill="black" d="M102,0H0v82c9.3-6.8,20.1-11.6,31.5-13.9c15.4-3.1,31.4-1.5,45.9,4.5c14.5,6,26.9,16.2,35.6,29.2c8.7,13.1,13.4,28.4,13.4,44.1c0,21.1-8.4,41.3-23.3,56.2C88.3,217,68.1,225.4,47,225.4c-15.7,0-31.1-4.7-44.1-13.4c-1-0.7-1.9-1.3-2.9-2v84.7c5.4,1.7,11,3.1,16.6,4.3c30.3,6,61.6,2.9,90.1-8.9c28.5-11.8,52.9-31.8,70-57.5C193.9,207,203,176.9,203,146c0-41.4-16.4-81.1-45.7-110.3C141.5,19.8,122.5,7.7,102,0z">
                                            </path>
                                            <path id="hsvg6" opacity="0.1" fill="black" d="M331,110L222,0h73l111,110H331z"></path>
                                            <path id="hsvg14" opacity="0.1" fill="black" d="M525,30L495,0h42l30,30L525,30z"></path>
                                            <path class="svg-accent-color" id="hsvg7" fill="#0075FF" d="M494.8,0c-23,22.3-54.3,36-88.8,36V0H494.8z"></path>
                                            <path class="svg-accent-color" id="hsvg10" fill="#0075FF" d="M723,0h-47.5c-7,5.4-15.6,8.4-24.5,8.4c-7.9,0-15.7-2.3-22.2-6.7c-0.8-0.5-1.5-1.1-2.3-1.6H579c3.9,8.9,9.5,17,16.4,24c11,11,25,18.5,40.3,21.5c15.3,3,31.1,1.5,45.4-4.5c14.4-6,26.7-16,35.3-29C719,8.2,721.2,4.2,723,0z">
                                            </path>
                                            <path id="hsvg11" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M763,36h-62l-24-23h62L763,36z"></path>
                                            <path class="svg-accent-color" id="hsvg12" fill="#0075FF" d="M778.4,10.7C775.3,7.6,772.8,4,771,0h65c-0.8,1.9-1.8,3.7-3,5.4c-3.9,5.8-9.4,10.3-15.9,12.9c-6.5,2.7-13.6,3.4-20.5,2C789.7,19,783.4,15.6,778.4,10.7z">
                                            </path>
                                            <path class="svg-accent-color" id="hsvg5" fill="#0075FF" d="M406,110L295,0h75l36,36V110z"></path>
                                            <path id="hsvg8" opacity="0.1" fill="black" d="M406,0h-88.8c23,22.3,54.3,36,88.8,36V0z"></path>
                                            <path class="svg-accent-color" id="hsvg9" fill="#0075FF" d="M567,30L537,0h30V30z"></path>
                                            <path class="svg-accent-color" id="hsvg13" fill="#0075FF" d="M1196.5,88c-22.7,0-44.8,6.8-63.6,19.6c-18.8,12.8-33.5,31-42.2,52.3c-8.7,21.3-10.9,44.7-6.5,67.3c4.4,22.6,15.3,43.4,31.3,59.6c16,16.3,36.4,27.4,58.6,31.9c22.2,4.5,45.2,2.2,66.2-6.6c20.9-8.8,38.8-23.8,51.4-42.9c12.6-19.2,19.3-41.7,19.3-64.7c0-30.9-12.1-60.5-33.5-82.4C1256,100.3,1226.9,88,1196.5,88z M1196.5,263.8c-11.5,0-22.8-3.5-32.4-10c-9.6-6.5-17.1-15.8-21.5-26.6c-4.4-10.8-5.6-22.8-3.3-34.3c2.2-11.5,7.8-22.1,16-30.4c8.2-8.3,18.5-13.9,29.8-16.2c11.3-2.3,23-1.1,33.7,3.4c10.6,4.5,19.8,12.1,26.1,21.8c6.4,9.8,9.8,21.2,9.8,32.9c0,15.7-6.1,30.8-17.1,41.9C1226.8,257.6,1212,263.8,1196.5,263.8z">
                                            </path>
                                        </svg></div>
                                    <div class="header__brand-image-mob"><svg xmlns="http://www.w3.org/2000/svg" width="469" height="81" viewbox="0 0 469 81" fill="none" class="svg-graphic">
                                            <path class="svg-accent-color" id="hsvg1_m" d="M19.999 9.82393C30.5394 9.82393 40.7193 6.33375 48.9607 0H105C102.83 4.89595 100.221 9.61735 97.1963 14.1043C86.9935 29.2363 72.4949 41.031 55.5284 47.9958C38.5641 54.9597 19.8968 56.7827 1.88613 53.2316C1.25559 53.1073 0.626852 52.9767 0 52.8396V5.42423C6.23535 8.31032 13.0591 9.82393 19.999 9.82393Z" fill="#0075FF"></path>
                                            <path id="hsvg6_m" opacity="0.1" d="M127.537 52L74 0H105L158 52H127.537Z" fill="black"></path>
                                            <path class="svg-accent-color" id="hsvg9_m" d="M259.999 32L226 0H259.999V32Z" fill="#0075FF">
                                            </path>
                                            <path class="svg-accent-color" id="hsvg7_m" fill-rule="evenodd" clip-rule="evenodd" d="M216 0C201.004 13.6167 180.549 22 158 22V0H216Z" fill="#0075FF"></path>
                                            <path class="svg-accent-color" id="hsvg5_m" d="M158 52L105 0H135L158 21.9716V52Z" fill="#0075FF">
                                            </path>
                                            <path id="hsvg8_m" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M158 0H104C117.962 13.6167 137.007 22 158 22V0Z" fill="black"></path>
                                            <path class="svg-accent-color" id="hsvg10_m" d="M468.449 0H423.232C421.342 8.55236 417.047 16.4659 410.756 22.7565C402.069 31.4441 390.286 36.3248 378 36.3248C368.838 36.3248 359.881 33.6079 352.263 28.5177C344.645 23.4274 338.707 16.1925 335.201 7.72771C334.161 5.21634 333.349 2.63018 332.767 0H287.551C287.838 2.59332 288.236 5.1801 288.748 7.75318C292.26 25.4054 300.926 41.6201 313.653 54.3467C326.38 67.0732 342.594 75.7401 360.246 79.2514C377.899 82.7627 396.196 80.9606 412.824 74.073C429.452 67.1854 443.664 55.5217 453.663 40.5569C461.8 28.3792 466.85 14.4606 468.449 0Z" fill="#0075FF"></path>
                                            <path id="hsvg14_m" opacity="0.1" d="M207.536 32L174 0H226L260 32H207.536Z" fill="black"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </div>

                        <div class="header__menu"><a class="header__menu-button header__menu-login"><span class="header__menu-icon-l"><svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#header_icon-userL"></use>
                                    </svg></span><span class="header__menu-icon-s"><svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#header_icon-userS"></use>
                                    </svg></span></a><a class="header__menu-button header__menu-search"><span class="header__menu-icon-l"><svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#header_icon-searchL"></use>
                                    </svg></span><span class="header__menu-icon-s"><svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#header_icon-searchS"></use>
                                    </svg></span></a>
                        </div>
                    </div>

                </div>
                <div class="content" id="content">
                    <div class="endless m-follow-fixed" id="endless">
                        <div class="endless__item m-active">
                            <div class="endless__item-bg"></div>
                            <div class="endless__item-content page__width" style="min-height: 904px;">
                                <div class="layout-article">
                                    <div class="layout-article__over" style="padding-top: 0px; border-top: 0px;">
                                        <div class="layout-article__main">
                                            <div class="article m-article m-ria">
                                                <div class="layout-article__600-align">
                                                    <div class="article__header">
                                                        <h1 class="article__title">
                                                            Daniel Radcliffe keeps it casual in khaki coat and blue jeans as he grabs a coffee while on a stroll in New York
                                                        </h1>
                                                        <br>
                                                        
                                                        <div class="article__announce">
                                                            <div class="media">
                                                                <div class="media__size">
                                                                    <div class="photoview__open">
                                                                        <img src="n-1.jpg" alt="Amancio Ortega y su filosofía: los cinco principios que ayudaron a triunfar al dueño de Inditex">
                                                                    </div>
                                                                </div>
                                                                <div class="media__copyright ">
                                                                    <div class="media__copyright-item m-copyright">
                                                                    
                                                                        <i>Out and about: Daniel Radcliffe, 30, cut a casual figure as he grabbed a cup of coffee while on a stroll in New York City on Thursday</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            Also wearing a Detroit Red Wings cap and completed his look for the day with a pair of black trainers. 
                                                            The actor has only been in the Big Apple for a few days as he was spotted arriving at JKF airport on Tuesday.
                                                            Daniel has been working on a number of projects recently including the TV series Miracle Workers, which he stars in and serves as executive producer.
<br>
<br>
He plays Craig Bog in the show, an entry-level angel working in heaven who's tasked with responding to the prayers of all humankind.

Joined by Geraldine Viswanathan, who plays Eliza Hunter, a recent transfer from the Department of Dirt, the two try to stop God (Steve Buscemi) from destroying the Earth after he gets bored with his creation.
<br>
<br>
The anthology has been renewed for a second series titled Miracle Workers: Dark Ages and will premiere in January 2020.  

The actor's next film will be Escape From Pretoria which he was spotted filming in New York in June. 
In the upcoming movie, the actor plays South African activist Tim Jenkin, who was imprisoned in Pretoria's Maximum Security prison in the late 1970s.
<br>
<br>
Filming began for the highly-anticipated movie at Mitcham train station, in the suburb of Lower Mitcham, Adelaide, in February.

The movie is written and directed by Francis Annan and based on Tim Jenkin's autobiography, Inside Out: Escape From Pretoria Prison.
                                                    </div>

                                                    <div class="article__sharebar">
                                                        <span class="share m-article">

                                                            <a data-name="facebook">
                                                                <svg class="svg-icon">
                                                                    <use xlink:href="#social-facebook_alt"></use>
                                                                </svg>
                                                                <svg class="svg-icon">
                                                                    <use xlink:href="#social-facebook"></use>
                                                                </svg>
                                                            </a>
                                                            <a data-name="vkontakte">
                                                                <svg class="svg-icon">
                                                                    <use xlink:href="#social-vkontakte"></use>
                                                                </svg>
                                                            </a>
                                                            <a data-name="odnoklassniki">
                                                                <svg class="svg-icon">
                                                                    <use xlink:href="#social-odnoklassniki"></use>
                                                                </svg>
                                                            </a>
                                                            <a class="share__more">
                                                                <span class="share__more-desktop">
                                                                    <svg class="svg-icon">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </span>
                                                                <span class="share__more-mobile">
                                                                    <svg class="svg-icon">
                                                                        <use xlink:href="#icon-share"></use>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </span>

                                                        <a class="article__sharebar-chat js__toggle-chat-article color-bg-hover"><svg class="svg-icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-chat_filled"></use>
                                                            </svg>
                                                        </a>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                        <div class="layout-article__right-column">

                                        </div>




                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer m-type-ria">
                    <div class="footer__top">
                        
                    </div>
                    <div class="footer__rubric">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="share-full">
        <ul>

            <li class="share-full__facebook">
                <a data-name="facebook">
                    <span class="share-full__icon">
                        <svg class="svg-icon">

                            <use xlink:href="#social-facebook_alt"></use>

                        </svg>
                    </span>
                    <span class="share-full__text">Facebook</span>
                </a>
            </li>



            <li class="share-full__vkontakte">
                <a data-name="vkontakte">
                    <span class="share-full__icon">
                        <svg class="svg-icon">

                            <use xlink:href="#social-vkontakte"></use>

                        </svg>
                    </span>
                    <span class="share-full__text">ВКонтакте</span>
                </a>
            </li>



            <li class="share-full__odnoklassniki">
                <a data-name="odnoklassniki">
                    <span class="share-full__icon">
                        <svg class="svg-icon">

                            <use xlink:href="#social-odnoklassniki"></use>

                        </svg>
                    </span>
                    <span class="share-full__text">Одноклассники</span>
                </a>
            </li>



            <li class="share-full__twitter">
                <a data-name="twitter">
                    <span class="share-full__icon">
                        <svg class="svg-icon">

                            <use xlink:href="#social-twitter"></use>

                        </svg>
                    </span>
                    <span class="share-full__text">Twitter</span>
                </a>
            </li>

        </ul>
    </div>



    <style>
        h5 {
            font-size: 18px;
        }

        .layout-article__right-column-block {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            adding: ;

        }

        /* --------------- */
        .small {
            font-size: 85%
        }

        .media {
            margin-top: 15px
        }

        .media-left {
            padding-right: 10px;
            max-width: 80px;
            min-width: 50px;
        }

        .media-body,
        .media-left {
            display: table-cell;
            vertical-align: top
        }

        .media-heading {
            margin-bottom: 5px;
            margin-top: 0
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .pull-right {
            float: right
        }

        .pull-left {
            float: left
        }

        .content-box {
            background: #fff
        }

        .content .img-responsive {
            margin: 0 auto 5px
        }

        .content p {
            color: #222;
            font-family: Verdana;
            font-size: 17px;
            line-height: 26px;
            margin: 0 0 20px
        }

        .content h5 {
            color: #222;
            font-size: 20px;
            line-height: 28px;
            margin: 8px 0 20px
        }

        .content h5.pink-border-bottom {
            border-bottom: 2px solid #0198bd;
            color: #666;
            margin-bottom: 15px
        }

        .content h4 {
            color: #222;
            font-size: 21px;
            line-height: 28px;
            margin: 0 0 10px
        }

        .content p a,
        .content p a:focus,
        .content p a:hover {
            color: #0198bd
        }

        .content p strong i {
            font-size: 14px;
            line-height: 18px;
        }

        .content .m-b-5 {
            margin-bottom: 10px;
        }

        .content .revival-box2 {
            border: 1px solid #ccc;
            margin-bottom: 15px;
            margin-left: 0;
            margin-right: 0;
            background: #f5f9fa;
            padding: 10px
        }


        .comments {
            background: #fff;
            padding-bottom: 30px
        }

        .recent {
            margin-left: 0;
            margin-right: 0;
            padding-bottom: 20px;
            padding-top: 50px
        }

        .recent a,
        .recent p {
            color: #3b5998;
            font-family: Tahoma;
            font-size: 14px;
            line-height: 18px;
            margin: 0
        }

        .recent p {
            font-weight: 700
        }

        .media {
            border-top: 1px solid #e2e2e2;
            margin: 0;
            padding: 8px 0
        }

        .media.border-bottom {
            border-bottom: 1px solid #e2e2e2
        }

        .media-left img {
            margin-top: 6px
        }

        .media-body h4 a {
            color: #3b5998;
            font-family: Tahoma;
            font-size: 13px;
            font-weight: 700;
            line-height: 14px;
            margin: 0 0 5px
        }

        .media-body h4 a:focus,
        .media-body h4 a:hover {
            color: #3b5998
        }

        .media-body p {
            color: #1a1a1a;
            font-family: Tahoma;
            font-size: 12px;
            line-height: 15px;
            margin: 0 0 5px
        }

        .media-body p.bottom {
            color: #3b5998;
            margin-top: 10px;
        }

        .media-body p.bottom .like {
            margin-left: 8px
        }

        .media-body p.bottom .time {
            border-bottom: 1px dotted grey;
            color: grey;
            margin-left: 8px;
        }

        .comments p.small {
            color: #3b5998;
            font-family: Tahoma;
            font-size: 11px;
            margin: 10px 0
        }

        .no-border-top {
            border-top: none !important;
            margin-top: 20px;
        }

        .media__copyright-item {
            font-size: 12px;
        }
    </style>

</body>

</html>