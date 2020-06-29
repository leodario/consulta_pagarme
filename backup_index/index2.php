<?php
include './configuracao.php';
$idClinica;
if (isset($_GET['idclinica'])) {
    $idClinica = $_GET['idclinica'];
} else {
    $idClinica = 0; 
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>5S - Consulta</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="css/personalizado.css" rel="stylesheet">
        

    <!-- Reset Browser Styles -->
    <style type="text/css" rel="stylesheet">
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        img {
            vertical-align: middle;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        b,
        strong {
            font-weight: bold;
        }

        i,
        em {
            font-style: italic;
        }
    </style>

    <!-- Bricks Main Styles -->
    <style type="text/css" rel="stylesheet">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background-color: #FFFFFF;
            color: #333333;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.42857;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        h1 {
            font-size: 41px;
        }

        h2 {
            font-size: 34px;
        }

        h3 {
            font-size: 28px;
        }

        h4 {
            font-size: 20px;
        }

        h5 {
            font-size: 16px;
        }

        h6 {
            font-size: 14px;
        }

        .bricks--page {
            width: 100%;
        }

        .bricks--section {
            width: 100%;
        }

        .bricks--section>div {
            margin-left: auto;
            margin-right: auto;
        }

        .bricks--row {
            display: flex;
            flex-flow: column nowrap;
        }

        .bricks--column>div {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .bricks--component-box {
            display: flex;
            flex-flow: column nowrap;
            width: 100%;
        }

        @media screen and (min-width: 768px) {
            .bricks--row {
                flex-flow: row nowrap;
            }
        }
    </style>

    <!-- Bricks Component Form Styles -->
    <style type="text/css" rel="stylesheet">
        .bricks-form {
            height: auto;
            width: 100%;
        }

        .bricks-form__fieldset {
            display: flex;
        }

        .bricks-form__field {
            width: 100%;
            flex-grow: 1;
        }

        /* Hide generated jQuery validator label */
        .bricks-form__field label.error {
            display: none !important;
        }

        .bricks-form__label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            line-height: 1.42857;
        }

        .bricks-form__input {
            display: block;
            width: 100%;
            padding: 0 10px;
            line-height: 1.42857;
        }

        .bricks-form__input.error {
            border: 1px solid red !important;
        }

        .bricks-form__field__option {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .bricks-form__field__option+.bricks-form__field__option {
            margin-top: -5px;
        }

        .bricks-form__submit {
            position: relative;
        }
    </style>

    <link
        href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif|Lato|Lobster|Open+Sans|Oswald|PT+Sans|Raleway|Source+Sans+Pro|Ubuntu|Roboto"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css" rel="stylesheet" />

    <!-- Bricks Static Shared Styles -->
    <style type="text/css" rel="stylesheet">
        .bricks--component-video div {
            position: relative;
            height: 0;
            padding-bottom: 56.25%;
            line-height: 0;
            box-sizing: border-box;
        }

        .bricks--component-video div iframe {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
    </style>



    <!-- Bricks Static Text Styles -->
    <style type="text/css" rel="stylesheet">
        .bricks--component-text {
            color: #333;
            line-height: 1.42;
            overflow: hidden;
            word-wrap: break-word;
        }

        .bricks--component-text a {
            color: #31a2ff;
            text-decoration: none;
        }

        .bricks--component-text sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        .bricks--component-text sub {
            bottom: -0.25em;
        }

        .bricks--component-text sup {
            top: -0.5em;
        }

        .bricks--component-text ol,
        .bricks--component-text ul {
            padding-left: 1.5em;
        }

        .bricks--component-text ol>li,
        .bricks--component-text ul>li {
            list-style-type: none;
        }

        .bricks--component-text ul>li::before {
            content: '\2022';
        }

        .bricks--component-text li::before {
            display: inline-block;
            white-space: nowrap;
            width: 1.2em;
        }

        .bricks--component-text li:not(.ql-direction-rtl)::before {
            margin-left: -1.5em;
            margin-right: 0.3em;
            text-align: right;
        }

        .bricks--component-text li.ql-direction-rtl::before {
            margin-left: 0.3em;
            margin-right: -1.5em;
        }

        .bricks--component-text ol li:not(.ql-direction-rtl),
        .bricks--component-text ul li:not(.ql-direction-rtl) {
            padding-left: 1.5em;
        }

        .bricks--component-text ol li.ql-direction-rtl,
        .bricks--component-text ul li.ql-direction-rtl {
            padding-right: 1.5em;
        }

        .bricks--component-text ol li {
            counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
            counter-increment: list-0;
        }

        .bricks--component-text ol li:before {
            content: counter(list-0, decimal) '. ';
        }

        .bricks--component-text ol li.ql-indent-1 {
            counter-increment: list-1;
        }

        .bricks--component-text ol li.ql-indent-1:before {
            content: counter(list-1, lower-alpha) '. ';
        }

        .bricks--component-text ol li.ql-indent-1 {
            counter-reset: list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-2 {
            counter-increment: list-2;
        }

        .bricks--component-text ol li.ql-indent-2:before {
            content: counter(list-2, lower-roman) '. ';
        }

        .bricks--component-text ol li.ql-indent-2 {
            counter-reset: list-3 list-4 list-5 list-6 list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-3 {
            counter-increment: list-3;
        }

        .bricks--component-text ol li.ql-indent-3:before {
            content: counter(list-3, decimal) '. ';
        }

        .bricks--component-text ol li.ql-indent-3 {
            counter-reset: list-4 list-5 list-6 list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-4 {
            counter-increment: list-4;
        }

        .bricks--component-text ol li.ql-indent-4:before {
            content: counter(list-4, lower-alpha) '. ';
        }

        .bricks--component-text ol li.ql-indent-4 {
            counter-reset: list-5 list-6 list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-5 {
            counter-increment: list-5;
        }

        .bricks--component-text ol li.ql-indent-5:before {
            content: counter(list-5, lower-roman) '. ';
        }

        .bricks--component-text ol li.ql-indent-5 {
            counter-reset: list-6 list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-6 {
            counter-increment: list-6;
        }

        .bricks--component-text ol li.ql-indent-6:before {
            content: counter(list-6, decimal) '. ';
        }

        .bricks--component-text ol li.ql-indent-6 {
            counter-reset: list-7 list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-7 {
            counter-increment: list-7;
        }

        .bricks--component-text ol li.ql-indent-7:before {
            content: counter(list-7, lower-alpha) '. ';
        }

        .bricks--component-text ol li.ql-indent-7 {
            counter-reset: list-8 list-9;
        }

        .bricks--component-text ol li.ql-indent-8 {
            counter-increment: list-8;
        }

        .bricks--component-text ol li.ql-indent-8:before {
            content: counter(list-8, lower-roman) '. ';
        }

        .bricks--component-text ol li.ql-indent-8 {
            counter-reset: list-9;
        }

        .bricks--component-text ol li.ql-indent-9 {
            counter-increment: list-9;
        }

        .bricks--component-text ol li.ql-indent-9:before {
            content: counter(list-9, decimal) '. ';
        }

        .bricks--component-text .ql-indent-1:not(.ql-direction-rtl) {
            padding-left: 3em;
        }

        .bricks--component-text li.ql-indent-1:not(.ql-direction-rtl) {
            padding-left: 4.5em;
        }

        .bricks--component-text .ql-indent-1.ql-direction-rtl.ql-align-right {
            padding-right: 3em;
        }

        .bricks--component-text li.ql-indent-1.ql-direction-rtl.ql-align-right {
            padding-right: 4.5em;
        }

        .bricks--component-text .ql-indent-2:not(.ql-direction-rtl) {
            padding-left: 6em;
        }

        .bricks--component-text li.ql-indent-2:not(.ql-direction-rtl) {
            padding-left: 7.5em;
        }

        .bricks--component-text .ql-indent-2.ql-direction-rtl.ql-align-right {
            padding-right: 6em;
        }

        .bricks--component-text li.ql-indent-2.ql-direction-rtl.ql-align-right {
            padding-right: 7.5em;
        }

        .bricks--component-text .ql-indent-3:not(.ql-direction-rtl) {
            padding-left: 9em;
        }

        .bricks--component-text li.ql-indent-3:not(.ql-direction-rtl) {
            padding-left: 10.5em;
        }

        .bricks--component-text .ql-indent-3.ql-direction-rtl.ql-align-right {
            padding-right: 9em;
        }

        .bricks--component-text li.ql-indent-3.ql-direction-rtl.ql-align-right {
            padding-right: 10.5em;
        }

        .bricks--component-text .ql-indent-4:not(.ql-direction-rtl) {
            padding-left: 12em;
        }

        .bricks--component-text li.ql-indent-4:not(.ql-direction-rtl) {
            padding-left: 13.5em;
        }

        .bricks--component-text .ql-indent-4.ql-direction-rtl.ql-align-right {
            padding-right: 12em;
        }

        .bricks--component-text li.ql-indent-4.ql-direction-rtl.ql-align-right {
            padding-right: 13.5em;
        }

        .bricks--component-text .ql-indent-5:not(.ql-direction-rtl) {
            padding-left: 15em;
        }

        .bricks--component-text li.ql-indent-5:not(.ql-direction-rtl) {
            padding-left: 16.5em;
        }

        .bricks--component-text .ql-indent-5.ql-direction-rtl.ql-align-right {
            padding-right: 15em;
        }

        .bricks--component-text li.ql-indent-5.ql-direction-rtl.ql-align-right {
            padding-right: 16.5em;
        }

        .bricks--component-text .ql-indent-6:not(.ql-direction-rtl) {
            padding-left: 18em;
        }

        .bricks--component-text li.ql-indent-6:not(.ql-direction-rtl) {
            padding-left: 19.5em;
        }

        .bricks--component-text .ql-indent-6.ql-direction-rtl.ql-align-right {
            padding-right: 18em;
        }

        .bricks--component-text li.ql-indent-6.ql-direction-rtl.ql-align-right {
            padding-right: 19.5em;
        }

        .bricks--component-text .ql-indent-7:not(.ql-direction-rtl) {
            padding-left: 21em;
        }

        .bricks--component-text li.ql-indent-7:not(.ql-direction-rtl) {
            padding-left: 22.5em;
        }

        .bricks--component-text .ql-indent-7.ql-direction-rtl.ql-align-right {
            padding-right: 21em;
        }

        .bricks--component-text li.ql-indent-7.ql-direction-rtl.ql-align-right {
            padding-right: 22.5em;
        }

        .bricks--component-text .ql-indent-8:not(.ql-direction-rtl) {
            padding-left: 24em;
        }

        .bricks--component-text li.ql-indent-8:not(.ql-direction-rtl) {
            padding-left: 25.5em;
        }

        .bricks--component-text .ql-indent-8.ql-direction-rtl.ql-align-right {
            padding-right: 24em;
        }

        .bricks--component-text li.ql-indent-8.ql-direction-rtl.ql-align-right {
            padding-right: 25.5em;
        }

        .bricks--component-text .ql-indent-9:not(.ql-direction-rtl) {
            padding-left: 27em;
        }

        .bricks--component-text li.ql-indent-9:not(.ql-direction-rtl) {
            padding-left: 28.5em;
        }

        .bricks--component-text .ql-indent-9.ql-direction-rtl.ql-align-right {
            padding-right: 27em;
        }

        .bricks--component-text li.ql-indent-9.ql-direction-rtl.ql-align-right {
            padding-right: 28.5em;
        }

        .bricks--component-text .ql-direction-rtl {
            direction: rtl;
            text-align: inherit;
        }
    </style>

    </head>
    <body class="body_bg">
    <div class="bricks--container">
        <div class="bricks--page">


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2lr {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$fj9s26ucuip), linear-gradient(to bottom, rgba(126, 211, 33, 1) 0%, rgba(126, 211, 33, 1) 100%);
                    background-position-x: 50%;
                    background-position-y: 50%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: none;
                    border-color: transparent;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-joq3m2lr>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2lr" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2ls {
                        min-height: 525px;
                    }

                    #rd-row-joq3m2ls .bricks--column>div {
                        min-height: 525px;
                    }
                </style>

                <div id="rd-row-joq3m2ls" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2lt {
                            flex: 12 0 0;
                        }

                        #rd-column-joq3m2lt>div {

                            background-color: transparent;

                            justify-content: flex-end;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2lt" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k864h3vn {
                                    margin-top: 0px;
                                    margin-bottom: 0px;
                                    align-self: center;
                                    max-width: 940px;
                                }

                                #rd-image-k864h3vn a,
                                #rd-image-k864h3vn img {
                                    width: 940px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k864h3vn" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1585067771/$63ngtyqywet"
                                    alt="">


                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2lv {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$hw1466k8ks), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: none;
                    border-color: #BBBBBB;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 0px;
                }

                #rd-section-joq3m2lv>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2lv" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2lw {
                        min-height: 758px;
                    }

                    #rd-row-joq3m2lw .bricks--column>div {
                        min-height: 758px;
                    }
                </style>

                <div id="rd-row-joq3m2lw" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2lx {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2lx>div {

                            background-image: linear-gradient(to bottom, rgba(126, 211, 33, 0.17) 0%, rgba(126, 211, 33, 0.17) 100%), url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585066036/$lfy311ixl5);
                            background-position-x: 50%;
                            background-position-y: 50%;
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-attachment: scroll;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2lx" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2ly {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 460px;
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2ly" class="bricks--component bricks--component-text rd-text">
                                <h1 style="text-align: left;"><br></h1>
                                <h1 style="text-align: center;"><strong
                                        style="color: rgb(0, 0, 0); font-family: Ubuntu, sans-serif; font-size: 36px;">Agende
                                        a sua </strong><strong
                                        style="color: rgb(126, 211, 33); font-family: Ubuntu, sans-serif; font-size: 36px;">Consulta
                                    </strong><strong
                                        style="color: rgb(0, 0, 0); font-family: Ubuntu, sans-serif; font-size: 36px;">com
                                        especialista</strong></h1>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2lz {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 460px;
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2lz" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><span
                                        style="color: rgb(0, 0, 0); font-size: 18px;">﻿Agende uma conversa&nbsp;e faça a
                                        escolha certa!﻿</span></p>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2m0 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 451px;
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2m0" class="bricks--component bricks--component-text rd-text">
                                <p><span
                                        style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 18px; color: rgb(0, 0, 0);">É
                                        a sua oportunidade de ter uma consultoria exclusiva, antes de contratar o
                                        serviço. Com os melhores especialistas que vão ajudar você a tirar suas dúvidas
                                        e entender melhor suas necessidades</span></p>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k86428ip {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 451px;
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k86428ip" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><strong
                                        style="color: rgb(126, 211, 33); font-size: 30px; font-family: Ubuntu, sans-serif;">Não
                                        é sobre perder peso. </strong></p>
                                <p style="text-align: center;"><strong
                                        style="color: rgb(126, 211, 33); font-size: 30px; font-family: Ubuntu, sans-serif;">﻿5S
                                        é sobre GANHAR VIDA!</strong></p>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k864533i {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 420px;
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k864533i" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><br></p>
                                <p style="text-align: center;"><strong
                                        style="color: rgb(0, 0, 0); font-size: 25px; font-family: Ubuntu, sans-serif;">NÓS
                                        CUIDAMOS DE VOCÊ </strong></p>
                                <p style="text-align: center;"><strong
                                        style="color: rgb(0, 0, 0); font-size: 25px; font-family: Ubuntu, sans-serif;">PÓS-TRATAMENTO
                                        NA MAIOR COMUNIDADE DE MANUTENÇÃO DE PESO DO PAÍS:</strong><strong
                                        style="color: rgb(196, 55, 94); font-size: 25px; font-family: Ubuntu, sans-serif;">﻿</strong>
                                </p>
                            </div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k864957y {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 151px;
                                }

                                #rd-image-k864957y a,
                                #rd-image-k864957y img {
                                    width: 151px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 34px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k864957y" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1585066036/$7wox1x2ls2d"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2m1 {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2m1>div {

                            background-color: rgba(189, 193, 10, 1);

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

               

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2m8 {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$7yjmlj2oeuo), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: none;
                    border-color: #000000;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-joq3m2m8>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2m8" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84xqx3n {
                        min-height: 50px;
                    }

                    #rd-row-k84xqx3n .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84xqx3n" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84xqx3o {
                            flex: 12 0 0;
                        }

                        #rd-column-k84xqx3o>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84xqx3o" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84xr8em {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 940px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: flex-start;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84xr8em" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><strong
                                        style="background-color: transparent; font-size: 30px; font-family: Ubuntu, sans-serif; color: rgb(126, 211, 33);">PERDA
                                        DE PESO RÁPIDA, SAUDÁVEL E SUSTENTÁVEL. SEM PASSAR FOME. SEM REMÉDIOS. SEM
                                        OBRIGATORIEDADE DE EXERCÍCIOS FÍSICOS E REPROGRAMANDO O HIPOTÁLAMO.</strong></p>
                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2m9 {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2m9 .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2m9" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2ma {
                            flex: 12 0 0;
                        }

                        #rd-column-joq3m2ma>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2ma" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84w38fv {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 936px;
                                }

                                #rd-image-k84w38fv a,
                                #rd-image-k84w38fv img {
                                    width: 936px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84w38fv" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$8os1lhxvbil"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2mb {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 894px;
                                    margin-top: 90px;
                                    margin-bottom: 30px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2mb" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><strong
                                        style="font-size: 38px; font-family: Ubuntu, sans-serif;">Ainda em
                                        dúvida&nbsp;se o 5S é para você?</strong></p>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84weto4 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto-23px;
                                    max-width: 326px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84weto4" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-size: 16px;">VEJA NO QUE ACREDITAMOS E VIVEMOS.</span></p>
                            </div>


                            <style type="text/css" rel="stylesheet">
                                #rd-video-k84wcwhh {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 520px;
                                    max-width: 100%;
                                }

                                #rd-video-k84wcwhh iframe {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>

                            <div id="rd-video-k84wcwhh" class="bricks--component bricks--component-video rd-video">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/IDd9Tf0f_4M?autoplay=0&rel=0"
                                        frameborder="0"
                                        allow="autoplay; accelerometer; encrypted-media; gyroscope; fullscreen; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84weg8x {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto-23px;
                                    max-width: 314px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84weg8x" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-size: 16px;">NOSSA COMPROVAÇÃO CIENTÍFICA.</span></p>
                            </div>


                            <style type="text/css" rel="stylesheet">
                                #rd-video-k84wbkzg {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 523px;
                                    max-width: 100%;
                                }

                                #rd-video-k84wbkzg iframe {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>

                            <div id="rd-video-k84wbkzg" class="bricks--component bricks--component-video rd-video">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/uopy7Okg-0I?autoplay=0&rel=0"
                                        frameborder="0"
                                        allow="autoplay; accelerometer; encrypted-media; gyroscope; fullscreen; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-k84xq10j {

                    background-color: transparent;

                    border-bottom-style: none;
                    border-color: #000000;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-k84xq10j>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-k84xq10j" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84xq10k {
                        min-height: 50px;
                    }

                    #rd-row-k84xq10k .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84xq10k" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84xq10l {
                            flex: 12 0 0;
                        }

                        #rd-column-k84xq10l>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84xq10l" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84xvf78 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto-134px;
                                    max-width: 725px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84xvf78" class="bricks--component bricks--component-text rd-text">
                                <p><strong
                                        style="color: rgb(126, 211, 33); font-family: Ubuntu, sans-serif; font-size: 32px;">﻿VEJA
                                        COMO É SIMPLES MARCAR SUA CONSULTA:</strong></p>
                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2mc {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$iwu09v5s64), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: solid;
                    border-color: #BBBBBB;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: solid;
                    border-width: 0px;
                }

                #rd-section-joq3m2mc>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2mc" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2md {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2md .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2md" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2me {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2me>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2me" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2mf {
                                    margin-top: 20px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 62px;
                                }

                                #rd-image-joq3m2mf a,
                                #rd-image-joq3m2mf img {
                                    width: 62px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2mf" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/68147/1540672580/$gku43lesnp"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2mg {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 400px;
                                    margin-top: 0px;
                                    margin-bottom: 20px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2mg" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-size: 18px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">Basta
                                        preencher o cadastro acima com o código da clínica mais próxima de você e uma de
                                        nossas especialistas entrará em contato.</span></p>
                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2mh {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2mh>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2mh" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2mi {
                                    margin-top: 20px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 62px;
                                }

                                #rd-image-joq3m2mi a,
                                #rd-image-joq3m2mi img {
                                    width: 62px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2mi" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/68147/1540672580/$gku43lesnp"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2mj {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 400px;
                                    margin-top: 0px;
                                    margin-bottom: 20px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2mj" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 18px;">Nossa
                                        Coach 5S analisará seus objetivos e ajudar na escolha certa. A consulta pode ser
                                        por telefone, Skype ou whatsapp e dura em média 50 minutos.</span></p>
                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2mk {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$sr1vj2b69l), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: solid;
                    border-color: #BBBBBB;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: solid;
                    border-width: 0px;
                }

                #rd-section-joq3m2mk>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2mk" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2ml {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2ml .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2ml" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2mm {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2mm>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2mm" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2mn {
                                    margin-top: 20px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 62px;
                                }

                                #rd-image-joq3m2mn a,
                                #rd-image-joq3m2mn img {
                                    width: 62px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2mn" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/68147/1540672580/$gku43lesnp"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2mo {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 400px;
                                    margin-top: 0px;
                                    margin-bottom: 40px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2mo" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 18px;">Tudo
                                        o que você precisa saber para garantir que tudo dê certo após contratar o
                                        serviço. Enviamos o contrato na certeza da escolha certa.</span></p>
                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2mp {
                            flex: 6 0 0;
                        }

                        #rd-column-joq3m2mp>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2mp" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2mq {
                                    margin-top: 20px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 62px;
                                }

                                #rd-image-joq3m2mq a,
                                #rd-image-joq3m2mq img {
                                    width: 62px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2mq" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/68147/1540672580/$gku43lesnp"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2mr {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 400px;
                                    margin-top: 0px;
                                    margin-bottom: 40px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2mr" class="bricks--component bricks--component-text rd-text">
                                <p>Você realiza o pagamento em até 6x no cartão sem juros, ou à vista no boleto, e
                                    recebe seu kit paciente completo em casa e inicia a sua mudança de vida.</p>
                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84x72yq {
                        min-height: 50px;
                    }

                    #rd-row-k84x72yq .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84x72yq" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84xjyr4 {
                            flex: 12 0 0;
                        }

                        #rd-column-k84xjyr4>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84xjyr4" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84xkdft {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 512px;
                                }

                                #rd-image-k84xkdft a,
                                #rd-image-k84xkdft img {
                                    width: 512px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84xkdft" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$7i9kmsvmqag"
                                    alt="">


                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84wtbag {
                        min-height: 50px;
                    }

                    #rd-row-k84wtbag .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84wtbag" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84x9m28 {
                            flex: 12 0 0;
                        }

                        #rd-column-k84x9m28>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84x9m28" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x9vat {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 940px;
                                }

                                #rd-image-k84x9vat a,
                                #rd-image-k84x9vat img {
                                    width: 940px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x9vat" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$vus6z9blsc9"
                                    alt="">


                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84xblit {
                        min-height: 50px;
                    }

                    #rd-row-k84xblit .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84xblit" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84xbliu {
                            flex: 12 0 0;
                        }

                        #rd-column-k84xbliu>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84xbliu" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84xbnmi {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto-148px;
                                    max-width: 698px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84xbnmi" class="bricks--component bricks--component-text rd-text">
                                <p><span
                                        style="color: rgb(126, 211, 33); font-family: Ubuntu, sans-serif; font-size: 35px;">﻿</span><strong
                                        style="color: rgb(126, 211, 33); font-family: Ubuntu, sans-serif; font-size: 35px;">A
                                        MÍDIA NÃO PARA DE FALAR BEM DO 5S.</strong></p>
                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2ms {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$iscd17a0jwi), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: none;
                    border-color: #000000;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-joq3m2ms>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2ms" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2mt {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2mt .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2mt" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84wv18m {
                            flex: 3 0 0;
                        }

                        #rd-column-k84wv18m>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84wv18m" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84wxjyo {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84wxjyo a,
                                #rd-image-k84wxjyo img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84wxjyo" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$lc8gu6wgdd"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2mu {
                            flex: 3 0 0;
                        }

                        #rd-column-joq3m2mu>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2mu" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x087a {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x087a a,
                                #rd-image-k84x087a img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x087a" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$ydebem1ms6"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84wvau5 {
                            flex: 3 0 0;
                        }

                        #rd-column-k84wvau5>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84wvau5" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x0gzi {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x0gzi a,
                                #rd-image-k84x0gzi img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x0gzi" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$eauddb7jsmj"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84wv5sb {
                            flex: 3 0 0;
                        }

                        #rd-column-k84wv5sb>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84wv5sb" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x0qd3 {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x0qd3 a,
                                #rd-image-k84x0qd3 img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x0qd3" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$ruatzbepb7q"
                                    alt="">


                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2mw {

                    background-image: url(https://d335luupugsy2.cloudfront.net/cms/files/110896/1585069889/$ja77063buts), linear-gradient(to bottom, rgba(74, 144, 226, 0) 0%, rgba(74, 144, 226, 0) 100%);
                    background-position-x: 0%;
                    background-position-y: 0%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: scroll;

                    border-bottom-style: none;
                    border-color: #000000;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-joq3m2mw>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2mw" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84wvvwr {
                        min-height: 50px;
                    }

                    #rd-row-k84wvvwr .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84wvvwr" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84x1ivf {
                            flex: 3 0 0;
                        }

                        #rd-column-k84x1ivf>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84x1ivf" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x1xin {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x1xin a,
                                #rd-image-k84x1xin img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x1xin" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$mg3zgks8b4f"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84wvvws {
                            flex: 3 0 0;
                        }

                        #rd-column-k84wvvws>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84wvvws" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x2c14 {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x2c14 a,
                                #rd-image-k84x2c14 img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x2c14" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$ui3sa40e4qe"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84x1rqj {
                            flex: 3 0 0;
                        }

                        #rd-column-k84x1rqj>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84x1rqj" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x2rh3 {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x2rh3 a,
                                #rd-image-k84x2rh3 img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x2rh3" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$1tor1ko5og9h"
                                    alt="">


                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84x1o4z {
                            flex: 3 0 0;
                        }

                        #rd-column-k84x1o4z>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84x1o4z" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84x3s3g {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 250px;
                                }

                                #rd-image-k84x3s3g a,
                                #rd-image-k84x3s3g img {
                                    width: 250px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84x3s3g" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$0yp1w0vmyf1q"
                                    alt="">


                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-k84x54ho {
                        min-height: 50px;
                    }

                    #rd-row-k84x54ho .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-k84x54ho" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84x54hp {
                            flex: 12 0 0;
                        }

                        #rd-column-k84x54hp>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84x54hp" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84x575i {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto-49px;
                                    max-width: 791px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84x575i" class="bricks--component bricks--component-text rd-text">
                                <p><strong
                                        style="color: rgb(126, 211, 33); font-size: 35px; font-family: Ubuntu, sans-serif;">PRÊMIOS
                                        NACIONAIS E INTERNACIONAIS DO 5S.</strong></p>
                            </div>

                        </div>
                    </div>

                </div>


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2mx {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2mx .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2mx" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-k84wp2yj {
                            flex: 3 0 0;
                        }

                        #rd-column-k84wp2yj>div {

                            background-color: transparent;

                            justify-content: center;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-k84wp2yj" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-k84wp9hb {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    max-width: 124px;
                                }

                                #rd-image-k84wp9hb a,
                                #rd-image-k84wp9hb img {
                                    width: 124px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-k84wp9hb" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$dvy6oc7v4ts"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-k84wpq8j {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 220px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-k84wpq8j" class="bricks--component bricks--component-text rd-text">
                                <p><span style="font-size: 24px; font-family: Ubuntu, sans-serif;">Prêmio Mulheres do
                                        Amanhã pela Siderúrgica Arcelor Mittal.</span></p>
                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2my {
                            flex: 3 0 0;
                        }

                        #rd-column-joq3m2my>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2my" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2mz {
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    max-width: 156px;
                                }

                                #rd-image-joq3m2mz a,
                                #rd-image-joq3m2mz img {
                                    width: 156px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2mz" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$zlqx14lgz5g"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2n0 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 257px;
                                    margin-top: 0px;
                                    margin-bottom: 0px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2n0" class="bricks--component bricks--component-text rd-text">
                                <h3 style="text-align: center;"><span
                                        style="font-family: Ubuntu, sans-serif; font-size: 24px; color: rgb(21, 63, 100);">Prêmio
                                        Latin American Quality Awards 2019</span></h3>
                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2n2 {
                            flex: 3 0 0;
                        }

                        #rd-column-joq3m2n2>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2n2" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2n3 {
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    max-width: 177px;
                                }

                                #rd-image-joq3m2n3 a,
                                #rd-image-joq3m2n3 img {
                                    width: 177px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2n3" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$k2o15ovikl"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2n4 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 257px;
                                    margin-top: 0px;
                                    margin-bottom: 0px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2n4" class="bricks--component bricks--component-text rd-text">
                                <h3 style="text-align: center;"><span
                                        style="font-family: Ubuntu, sans-serif; font-size: 24px; color: rgb(21, 63, 100);">Prêmio
                                        em Referência Nacional em Saúde no Brasil 2019</span></h3>
                            </div>

                        </div>
                    </div>


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2n6 {
                            flex: 3 0 0;
                        }

                        #rd-column-joq3m2n6>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2n6" class="bricks--column rd-column">
                        <div>


                            <style type="text/css" rel="stylesheet">
                                #rd-image-joq3m2n7 {
                                    margin-top: 7px;
                                    margin-bottom: 7px;
                                    align-self: center;
                                    max-width: 154px;
                                }

                                #rd-image-joq3m2n7 a,
                                #rd-image-joq3m2n7 img {
                                    width: 154px;
                                    max-width: 100%;
                                    height: auto;
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                }
                            </style>



                            <div id="rd-image-joq3m2n7" class="bricks--component bricks--component-image rd-image">

                                <img src="https://d335luupugsy2.cloudfront.net/cms/files/110896/1584993217/$ljzn5iqki2r"
                                    alt="">


                            </div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2n8 {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: auto0px;
                                    max-width: 257px;
                                    margin-top: 0px;
                                    margin-bottom: 0px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2n8" class="bricks--component bricks--component-text rd-text">
                                <h3 style="text-align: center;"><span
                                        style="font-family: Ubuntu, sans-serif; font-size: 24px; color: rgb(21, 63, 100);">Medalha
                                        Marquesa de Santos outorgada à Dra Edivana Poltronieri </span></h3>
                            </div>

                        </div>
                    </div>

                </div>

            </section>


            <style type="text/css" rel="stylesheet">
                #rd-section-joq3m2na {

                    background-color: #0c1721;

                    border-bottom-style: none;
                    border-color: #000000;
                    border-left-style: none;
                    border-radius: 0px;
                    border-right-style: none;
                    border-top-style: none;
                    border-width: 1px;
                }

                #rd-section-joq3m2na>div:not(.bricks--row) {
                    min-height: 0px;
                }
            </style>

            <section id="rd-section-joq3m2na" class="bricks--section rd-section">


                <style type="text/css" rel="stylesheet">
                    #rd-row-joq3m2nb {
                        min-height: 50px;
                    }

                    #rd-row-joq3m2nb .bricks--column>div {
                        min-height: 50px;
                    }
                </style>

                <div id="rd-row-joq3m2nb" class="bricks--row rd-row">


                    <style type="text/css" rel="stylesheet">
                        #rd-column-joq3m2nc {
                            flex: 12 0 0;
                        }

                        #rd-column-joq3m2nc>div {

                            background-color: transparent;

                            justify-content: flex-start;
                            padding-top: 0px;
                            padding-right: 10px;
                            padding-bottom: 0px;
                            padding-left: 10px;
                        }
                    </style>

                    <div id="rd-column-joq3m2nc" class="bricks--column rd-column">
                        <div>

                            <style type="text/css" rel="stylesheet">
                                #rd-text-joq3m2nd {
                                    border-bottom-style: none;
                                    border-color: #000000;
                                    border-left-style: none;
                                    border-radius: 0px;
                                    border-right-style: none;
                                    border-top-style: none;
                                    border-width: 1px;
                                    min-height: -1px;
                                    max-width: 400px;
                                    margin-top: 15px;
                                    margin-bottom: 15px;
                                    align-self: center;
                                    width: 100%;
                                    word-break: break-word;
                                }
                            </style>

                            <div id="rd-text-joq3m2nd" class="bricks--component bricks--component-text rd-text">
                                <p style="text-align: center;"><span
                                        style="color: rgb(255, 255, 255); font-size: 14px; font-family: Roboto, sans-serif; background-color: rgb(12, 23, 33);">Copyright
                                        © 2020. Todos os direitos reservados</span></p>
                            </div>


                            <div id="rd-html-k8ap47ob" class="bricks--component bricks--component-html rd-html">
                                <script type="text/javascript"
                                    src="https://brands-comercio.mktzap.com.br/webchat/rkzaii1mhthk2ae86b13"></script>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

        </div>
    </div>


    <script type="text/javascript"
        src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/b0a167f3-da65-4771-8f84-d5a1fd035c42-loader.js"></script>



    <script id="user-ga-interaction" type="text/javascript">

        $(window).on("load", function () {
            var tags = ['input', 'a', 'button'];

            function retrieveAllElements(tags) {
                return tags.reduce(function (prev, curr) {
                    return prev.concat(Array.prototype.slice.call(document.querySelectorAll(curr)));
                }, []);
            }

            function addEvents(elements, event) {
                if (!elements) return;
                elements.forEach(function (element) {
                    element.addEventListener(event, createInterativeCallback());
                });
            }

            function defineLabel(e) {
                var target = e.target || e.currentTarget
                var evtLabel = target.textContent || target.name || target.value || 'default';
                return 'rdstationlp=<' + target.tagName.toLowerCase() + '>:' + evtLabel.trim();
            }

            function createInterativeCallback() {
                return function (e) {
                    var label = defineLabel(e);
                    _gaq.push(['_trackEvent', 'RD_LP_user_interaction', e.type, label, null, false]);
                }
            }

            addEvents(retrieveAllElements(tags), 'click');
        });
    </script>


    <div data-editable="true" data-field-name="landing_page"></div>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
    <script type="text/javascript">
        (function () {
            $(document).ready(function () {
                $('#rd-text_field-k8llgpwa').mask('00/00/0000');
                $('#rd-text_field-k8llgpwd').mask('0.00');
                $('#rd-text_field-k8llgpwe').mask('000.00');
            });
        }());
    </script>
    <style>
        @media (max-width: 600px) {
            #rd-row-joq3m2ls {
                min-height: 0;
            }

            #rd-row-joq3m2ls .bricks--column>div {
                min-height: 0;
            }
        }

        .bricks--section>div {
            max-width: 940px;
        }

        #rd-row-joq3m2ls .bricks--column>div {
            padding: 0;
        }

        .whatsapp {
            position: fixed;
            top: 62%;
            left: 1%;
            padding: 10px;
            z-index: 10000000;
        }
    </style>
    <div class="container">
  

            
                <form name="formsPagamentos" action="" id="formsPagamentos">
                <div class="bg-agende">
                   
                    <br><br> 
                        <span id="msg"></span>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 >Dados do Comprador(a)</h3>
                            </div>

                            <div class="separador col-md-12"></div>

                            <div class="col-md-3">
                                <label>ID da Clínica</label>
                                <input type="text" name="idClinica" id="idClinica"  value="<?php echo $idClinica; ?>" class="form-control" required>
                            </div>

                            <div class="col-md-9">
                                <label>Nome</label>                            
                                <input type="text" name="senderName" id="senderName" placeholder="Nome completo" value="Jose Comprador" class="form-control" required>                        
                            </div>

                            <div class="separador col-md-12"></div>

                            <div class="col-md-5">
                                <label>CPF</label>                            
                                <input type="text" name="senderCPF" id="senderCPF" placeholder="CPF sem traço" value="22111944785" class="form-control" required>                       
                            </div>

                            <div class="col-md-7">
                                <label>E-mail</label>  
                                <input type="email" name="senderEmail" id="senderEmail" placeholder="E-mail do comprador" value="c98360604397189223761@sandbox.pagseguro.com.br" class="form-control" required>                                                
                            </div>

                            <div class="separador col-md-12"></div>                      
                                <div class="col-md-3">
                                    <label>DDD</label>
                                    <input type="text" name="senderAreaCode" id="senderAreaCode" placeholder="DDD" value="11" class="form-control" required>
                                </div>
                                <div class="col-md-9">
                                    <label>Telefone</label>
                                    <input type="text" name="senderPhone" id="senderPhone" placeholder="Somente número" value="56273440" class="form-control" required>
                                </div>

                                <div class="separador col-md-12"></div>

                                <div class="col-md-4">
                                    <label>Altura</label>
                                    <input type="text" name="altura" id="altura" placeholder="1.70"  class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label>Peso</label>
                                    <input type="text" name="peso" id="peso" placeholder="080.00"  class="form-control" required>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>Data Nascimento</label>
                                    <input type="text" name="dataNascimento" id="dataNascimento" placeholder="12/09/1977"  class="form-control" required>
                                </div>


                        </div>


                        <br>  
                        <br>  
                            <h3 class="mb-3">Endereço</h3>

                            <input type="hidden" name="shippingAddressRequired" id="shippingAddressRequired" value="true">

                            <div class="row">
                                <div class="col-md-9 mb-3">
                                    <label>Logradouro</label>
                                    <input type="text" name="shippingAddressStreet" class="form-control" id="shippingAddressStreet" placeholder="Av. Rua" value="Av. Brig. Faria Lima" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Número</label>
                                    <input type="text" name="shippingAddressNumber" class="form-control" id="shippingAddressNumber" placeholder="Número" value="1384" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Complemento</label>
                                <input type="text" name="shippingAddressComplement" class="form-control" id="shippingAddressComplement" placeholder="Complemento" value="5o andar">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label>Bairro</label>
                                    <input type="text" name="shippingAddressDistrict" class="form-control" id="shippingAddressDistrict" placeholder="Bairro" value="Jardim Paulistano" required>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label>Cidade</label>
                                    <input type="text" name="shippingAddressCity" class="form-control" id="shippingAddressCity" placeholder="Cidade" value="Sao Paulo" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Estado</label>
                                    <select name="shippingAddressState" class="custom-select d-block w-100" id="shippingAddressState" required>
                                        <option value="">Selecione</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP" selected>SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>CEP</label>
                                <input type="text" name="shippingAddressPostalCode" class="form-control" id="shippingAddressPostalCode" placeholder="CEP sem traço" value="01452002" required>
                            </div>

                            <!-- Moeda utilizada para pagamento -->
                            <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">
                            <!-- 1 - PAC / 2 - SEDEX / 3 - Sem frete -->
                            <input type="hidden" name="shippingType" value="3">
                            <!-- Valor do frete -->
                            <input type="hidden" name="shippingCost" value="0.00">
                    </div>
                    <div class="col-md-12">
                        <h4 class="mb-3">Escolha forma de pagamento</h4>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="creditCard" value="creditCard" onclick="tipoPagamento('creditCard')">
                            <label class="custom-control-label" for="creditCard">Cartão de Crédito</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="boleto" value="boleto" onclick="tipoPagamento('boleto')">
                            <label class="custom-control-label" for="boleto">Boleto</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="eft" value="eft" onclick="tipoPagamento('eft')">
                            <label class="custom-control-label" for="eft">Débito Online</label>
                        </div>

                        <!-- Pagamento com débito online -->
                        <div class="mb-3 bankName">
                            <label class="bankName">Banco</label>
                            <select name="bankName" id="bankName" class="form-control select-bank-name bankName">

                            </select>
                        </div>

                        <!-- Pagamento com cartão de crédito -->
                        <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">
                        <input type="hidden" name="valorParcelas" id="valorParcelas">
                        <input type="hidden" name="tokenCartao" id="tokenCartao">
                        <input type="hidden" name="hashCartao" id="hashCartao">
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Banco</label>
                            <div class="input-group">
                                <input type="text"  name="numCartao" class="form-control" id="numCartao">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bandeira-cartao creditCard">   </span>
                                </div>
                            </div>
                            <small id="numCartao" class="form-text text-muted">
                                Preencha para ver o parcelamento
                            </small>
                        </div>
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Quantidades de Parcelas</label>
                            <select name="qntParcelas" id="qntParcelas" class="form-control select-qnt-parcelas creditCard">

                            </select>
                        </div>

                        <div class="mb-3 creditCard">
                            <label class="creditCard">Nome do titular</label>
                            <input type="text" name="creditCardHolderName" class="form-control" id="creditCardHolderName" placeholder="Nome igual ao escrito no cartão" value="Jose Comprador">
                            <small id="creditCardHolderName" class="form-text text-muted">
                                Como está gravado no cartão
                            </small>
                        </div>

                        <div class="row creditCard">
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Mês de Validade</label>
                                <input type="text" name="mesValidade" id="mesValidade" maxlength="2" value="12"  class="form-control creditCard">
                            </div>
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Ano de Validade</label>
                                <input type="text" name="anoValidade" id="anoValidade" maxlength="4" value="2030" class="form-control creditCard">
                            </div>
                        </div>

                        <div class="mb-3 creditCard">                            
                            <label class="creditCard">CVV do cartão</label>
                            <input type="text" name="numCartao" class="form-control creditCard" id="cvvCartao" maxlength="3" value="123">
                            <small id="cvvCartao" class="form-text text-muted creditCard">
                                Código de 3 digitos impresso no verso do cartão
                            </small>
                        </div>

                        <div class="row creditCard">
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">CPF do dono do Cartão</label>
                                <input type="text" name="creditCardHolderCPF" id="creditCardHolderCPF" placeholder="CPF sem traço" value="22111944785" class="form-control creditCard">
                            </div>
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Data de Nascimento</label>
                                <input type="text" name="creditCardHolderBirthDate" id="creditCardHolderBirthDate" placeholder="Data de Nascimento. Ex: 12/12/1912" value="27/10/1987" class="form-control creditCard">
                            </div>
                        </div>

                        <h4 class="mb-3 creditCard">Endereço do titular do cartão</h4>
                        <div class="row creditCard">
                            <div class="col-md-9 mb-3 creditCard">
                                <label class="creditCard">Logradouro</label>
                                <input type="text" name="billingAddressStreet" id="billingAddressStreet" placeholder="Av. Rua" value="Av. Brig. Faria Lima" class="creditCard form-control">
                            </div>                            
                            <div class="col-md-3 mb-3 creditCard">
                                <label class="creditCard">Número</label>
                                <input type="text" name="billingAddressNumber" id="billingAddressNumber" placeholder="Número" value="1384" class="creditCard form-control">
                            </div>
                        </div>
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Complemento</label>
                            <input type="text" name="billingAddressComplement" id="billingAddressComplement" placeholder="Complemento" value="5o andar" class="creditCard form-control">
                        </div>
                        
                       
                        
                        <div class="row creditCard">
                            <div class="col-md-5 mb-3 creditCard">
                                <label class="creditCard">Bairro</label>
                                <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" placeholder="Bairro" value="Jardim Paulistano" class="creditCard form-control">
                            </div>
                            <div class="col-md-5 mb-3 creditCard">
                                <label class="creditCard">Cidade</label>
                                <input type="text" name="billingAddressCity" id="billingAddressCity" placeholder="Cidade" value="Sao Paulo" class="creditCard form-control">
                            </div>
                            <div class="col-md-2 mb-3 creditCard">
                                <label class="creditCard">Estado</label>
                                <select name="billingAddressState" class="custom-select d-block w-100 creditCard" id="billingAddressState">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP" selected>SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="creditCard">CEP</label>
                            <input type="text" name="billingAddressPostalCode" class="form-control creditCard" id="billingAddressPostalCode" placeholder="CEP sem traço" value="01452002">
                        </div>
                                                

                        <input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRL">

                        <input type="hidden" name="receiverEmail" id="receiverEmail" value="<?php echo EMAIL_LOJA; ?>">

                        <input type="hidden" name="currency" id="currency" value="<?php echo MOEDA_PAGAMENTO; ?>">

                        <input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo URL_NOTIFICACAO; ?>">
                        <?php
           
           $total_venda = number_format(150.00, 2, '.', '');

       ?>

                        <input type="hidden" name="reference" id="reference" value="<?php echo $idClinica; ?>">

                        <input type="hidden" name="amount" id="amount" value="<?php echo $total_venda; ?>">

                        <!--<input type="hidden" name="hashCartao" id="hashCartao">-->

                        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">  

                        <span id="aguarde">Aguarde até que seu pedido seja processado...</span>

                        <input type="submit" name="btnComprar" id="btnComprar" value="Comprar">
                    </form>   
                    </div>                    
                </div>                            
            </div>
            
        
</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/personalizado.js"></script>
    </body>
</html>
