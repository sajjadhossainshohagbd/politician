<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="alternate" type="application/rss+xml" title="Politic &raquo; Feed"
        href="{{ url('') }}/feed/">
    <link rel="alternate" type="application/rss+xml" title="Politic &raquo; Comments Feed"
        href="{{ url('') }}/comments/feed/">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.wphash.com\/3\/politicem\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"
            }
        };
        /*! This file is auto-generated */
        ! function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t
                .supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function () {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function () {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
                    n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji),
                    c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);

    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('/') }}/frontend/css/style.min.css" type="text/css" media="all">
    <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code>code {
            font-family: Menlo, Consolas, monaco, monospace;
            color: #1e1e1e;
            padding: .8em 1em;
            border: 1px solid #ddd;
            border-radius: 4px
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-group:where(.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
            opacity: .4
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #fff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--dark-gray: #1a1a1a;
            --wp--preset--color--medium-gray: #686868;
            --wp--preset--color--light-gray: #e5e5e5;
            --wp--preset--color--blue-gray: #4d545c;
            --wp--preset--color--bright-blue: #007acc;
            --wp--preset--color--light-blue: #9adffd;
            --wp--preset--color--dark-brown: #402b30;
            --wp--preset--color--medium-brown: #774e24;
            --wp--preset--color--dark-red: #640c1f;
            --wp--preset--color--bright-red: #ff675f;
            --wp--preset--color--yellow: #ffef8e;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('index.html#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('index.html#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('index.html#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('index.html#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('index.html#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('index.html#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('index.html#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('index.html#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

    </style>
    <style id="extendify-gutenberg-patterns-and-templates-utilities-inline-css" type="text/css">
        .ext-absolute {
            position: absolute !important
        }

        .ext-relative {
            position: relative !important
        }

        .ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-top-lg {
            top: var(--extendify--spacing--large) !important
        }

        .ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--top-lg {
            top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-right-lg {
            right: var(--extendify--spacing--large) !important
        }

        .ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--right-lg {
            right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-bottom-lg {
            bottom: var(--extendify--spacing--large) !important
        }

        .ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-left-lg {
            left: var(--extendify--spacing--large) !important
        }

        .ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--left-lg {
            left: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-order-1 {
            order: 1 !important
        }

        .ext-order-2 {
            order: 2 !important
        }

        .ext-col-auto {
            grid-column: auto !important
        }

        .ext-col-span-1 {
            grid-column: span 1/span 1 !important
        }

        .ext-col-span-2 {
            grid-column: span 2/span 2 !important
        }

        .ext-col-span-3 {
            grid-column: span 3/span 3 !important
        }

        .ext-col-span-4 {
            grid-column: span 4/span 4 !important
        }

        .ext-col-span-5 {
            grid-column: span 5/span 5 !important
        }

        .ext-col-span-6 {
            grid-column: span 6/span 6 !important
        }

        .ext-col-span-7 {
            grid-column: span 7/span 7 !important
        }

        .ext-col-span-8 {
            grid-column: span 8/span 8 !important
        }

        .ext-col-span-9 {
            grid-column: span 9/span 9 !important
        }

        .ext-col-span-10 {
            grid-column: span 10/span 10 !important
        }

        .ext-col-span-11 {
            grid-column: span 11/span 11 !important
        }

        .ext-col-span-12 {
            grid-column: span 12/span 12 !important
        }

        .ext-col-span-full {
            grid-column: 1/-1 !important
        }

        .ext-col-start-1 {
            grid-column-start: 1 !important
        }

        .ext-col-start-2 {
            grid-column-start: 2 !important
        }

        .ext-col-start-3 {
            grid-column-start: 3 !important
        }

        .ext-col-start-4 {
            grid-column-start: 4 !important
        }

        .ext-col-start-5 {
            grid-column-start: 5 !important
        }

        .ext-col-start-6 {
            grid-column-start: 6 !important
        }

        .ext-col-start-7 {
            grid-column-start: 7 !important
        }

        .ext-col-start-8 {
            grid-column-start: 8 !important
        }

        .ext-col-start-9 {
            grid-column-start: 9 !important
        }

        .ext-col-start-10 {
            grid-column-start: 10 !important
        }

        .ext-col-start-11 {
            grid-column-start: 11 !important
        }

        .ext-col-start-12 {
            grid-column-start: 12 !important
        }

        .ext-col-start-13 {
            grid-column-start: 13 !important
        }

        .ext-col-start-auto {
            grid-column-start: auto !important
        }

        .ext-col-end-1 {
            grid-column-end: 1 !important
        }

        .ext-col-end-2 {
            grid-column-end: 2 !important
        }

        .ext-col-end-3 {
            grid-column-end: 3 !important
        }

        .ext-col-end-4 {
            grid-column-end: 4 !important
        }

        .ext-col-end-5 {
            grid-column-end: 5 !important
        }

        .ext-col-end-6 {
            grid-column-end: 6 !important
        }

        .ext-col-end-7 {
            grid-column-end: 7 !important
        }

        .ext-col-end-8 {
            grid-column-end: 8 !important
        }

        .ext-col-end-9 {
            grid-column-end: 9 !important
        }

        .ext-col-end-10 {
            grid-column-end: 10 !important
        }

        .ext-col-end-11 {
            grid-column-end: 11 !important
        }

        .ext-col-end-12 {
            grid-column-end: 12 !important
        }

        .ext-col-end-13 {
            grid-column-end: 13 !important
        }

        .ext-col-end-auto {
            grid-column-end: auto !important
        }

        .ext-row-auto {
            grid-row: auto !important
        }

        .ext-row-span-1 {
            grid-row: span 1/span 1 !important
        }

        .ext-row-span-2 {
            grid-row: span 2/span 2 !important
        }

        .ext-row-span-3 {
            grid-row: span 3/span 3 !important
        }

        .ext-row-span-4 {
            grid-row: span 4/span 4 !important
        }

        .ext-row-span-5 {
            grid-row: span 5/span 5 !important
        }

        .ext-row-span-6 {
            grid-row: span 6/span 6 !important
        }

        .ext-row-span-full {
            grid-row: 1/-1 !important
        }

        .ext-row-start-1 {
            grid-row-start: 1 !important
        }

        .ext-row-start-2 {
            grid-row-start: 2 !important
        }

        .ext-row-start-3 {
            grid-row-start: 3 !important
        }

        .ext-row-start-4 {
            grid-row-start: 4 !important
        }

        .ext-row-start-5 {
            grid-row-start: 5 !important
        }

        .ext-row-start-6 {
            grid-row-start: 6 !important
        }

        .ext-row-start-7 {
            grid-row-start: 7 !important
        }

        .ext-row-start-auto {
            grid-row-start: auto !important
        }

        .ext-row-end-1 {
            grid-row-end: 1 !important
        }

        .ext-row-end-2 {
            grid-row-end: 2 !important
        }

        .ext-row-end-3 {
            grid-row-end: 3 !important
        }

        .ext-row-end-4 {
            grid-row-end: 4 !important
        }

        .ext-row-end-5 {
            grid-row-end: 5 !important
        }

        .ext-row-end-6 {
            grid-row-end: 6 !important
        }

        .ext-row-end-7 {
            grid-row-end: 7 !important
        }

        .ext-row-end-auto {
            grid-row-end: auto !important
        }

        .ext-m-0:not([style*=margin]) {
            margin: 0 !important
        }

        .ext-m-auto:not([style*=margin]) {
            margin: auto !important
        }

        .ext-m-base:not([style*=margin]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-m-lg:not([style*=margin]) {
            margin: var(--extendify--spacing--large) !important
        }

        .ext--m-base:not([style*=margin]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--m-lg:not([style*=margin]) {
            margin: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mx-0:not([style*=margin]) {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .ext-mx-auto:not([style*=margin]) {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .ext-mx-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mx-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large) !important;
            margin-right: var(--extendify--spacing--large) !important
        }

        .ext--mx-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mx-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large)*-1) !important;
            margin-right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-my-0:not([style*=margin]) {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .ext-my-auto:not([style*=margin]) {
            margin-bottom: auto !important;
            margin-top: auto !important
        }

        .ext-my-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-my-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large) !important;
            margin-top: var(--extendify--spacing--large) !important
        }

        .ext--my-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
            margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--my-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
            margin-top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mt-0:not([style*=margin]) {
            margin-top: 0 !important
        }

        .ext-mt-auto:not([style*=margin]) {
            margin-top: auto !important
        }

        .ext-mt-base:not([style*=margin]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mt-lg:not([style*=margin]) {
            margin-top: var(--extendify--spacing--large) !important
        }

        .ext--mt-base:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mt-lg:not([style*=margin]) {
            margin-top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mr-0:not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-mr-auto:not([style*=margin]) {
            margin-right: auto !important
        }

        .ext-mr-base:not([style*=margin]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mr-lg:not([style*=margin]) {
            margin-right: var(--extendify--spacing--large) !important
        }

        .ext--mr-base:not([style*=margin]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mr-lg:not([style*=margin]) {
            margin-right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mb-0:not([style*=margin]) {
            margin-bottom: 0 !important
        }

        .ext-mb-auto:not([style*=margin]) {
            margin-bottom: auto !important
        }

        .ext-mb-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mb-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large) !important
        }

        .ext--mb-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mb-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-ml-0:not([style*=margin]) {
            margin-left: 0 !important
        }

        .ext-ml-auto:not([style*=margin]) {
            margin-left: auto !important
        }

        .ext-ml-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-ml-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large) !important
        }

        .ext--ml-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--ml-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-block {
            display: block !important
        }

        .ext-inline-block {
            display: inline-block !important
        }

        .ext-inline {
            display: inline !important
        }

        .ext-flex {
            display: flex !important
        }

        .ext-inline-flex {
            display: inline-flex !important
        }

        .ext-grid {
            display: grid !important
        }

        .ext-inline-grid {
            display: inline-grid !important
        }

        .ext-hidden {
            display: none !important
        }

        .ext-w-auto {
            width: auto !important
        }

        .ext-w-full {
            width: 100% !important
        }

        .ext-max-w-full {
            max-width: 100% !important
        }

        .ext-flex-1 {
            flex: 1 1 0% !important
        }

        .ext-flex-auto {
            flex: 1 1 auto !important
        }

        .ext-flex-initial {
            flex: 0 1 auto !important
        }

        .ext-flex-none {
            flex: none !important
        }

        .ext-flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .ext-flex-shrink {
            flex-shrink: 1 !important
        }

        .ext-flex-grow-0 {
            flex-grow: 0 !important
        }

        .ext-flex-grow {
            flex-grow: 1 !important
        }

        .ext-list-none {
            list-style-type: none !important
        }

        .ext-grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-7 {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-9 {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-10 {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-11 {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-none {
            grid-template-columns: none !important
        }

        .ext-grid-rows-1 {
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-2 {
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-3 {
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-4 {
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-5 {
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-6 {
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-none {
            grid-template-rows: none !important
        }

        .ext-flex-row {
            flex-direction: row !important
        }

        .ext-flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .ext-flex-col {
            flex-direction: column !important
        }

        .ext-flex-col-reverse {
            flex-direction: column-reverse !important
        }

        .ext-flex-wrap {
            flex-wrap: wrap !important
        }

        .ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .ext-flex-nowrap {
            flex-wrap: nowrap !important
        }

        .ext-items-start {
            align-items: flex-start !important
        }

        .ext-items-end {
            align-items: flex-end !important
        }

        .ext-items-center {
            align-items: center !important
        }

        .ext-items-baseline {
            align-items: baseline !important
        }

        .ext-items-stretch {
            align-items: stretch !important
        }

        .ext-justify-start {
            justify-content: flex-start !important
        }

        .ext-justify-end {
            justify-content: flex-end !important
        }

        .ext-justify-center {
            justify-content: center !important
        }

        .ext-justify-between {
            justify-content: space-between !important
        }

        .ext-justify-around {
            justify-content: space-around !important
        }

        .ext-justify-evenly {
            justify-content: space-evenly !important
        }

        .ext-justify-items-start {
            justify-items: start !important
        }

        .ext-justify-items-end {
            justify-items: end !important
        }

        .ext-justify-items-center {
            justify-items: center !important
        }

        .ext-justify-items-stretch {
            justify-items: stretch !important
        }

        .ext-gap-0 {
            gap: 0 !important
        }

        .ext-gap-base {
            gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-lg {
            gap: var(--extendify--spacing--large) !important
        }

        .ext-gap-x-0 {
            -moz-column-gap: 0 !important;
            column-gap: 0 !important
        }

        .ext-gap-x-base {
            -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
            column-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-x-lg {
            -moz-column-gap: var(--extendify--spacing--large) !important;
            column-gap: var(--extendify--spacing--large) !important
        }

        .ext-gap-y-0 {
            row-gap: 0 !important
        }

        .ext-gap-y-base {
            row-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-y-lg {
            row-gap: var(--extendify--spacing--large) !important
        }

        .ext-justify-self-auto {
            justify-self: auto !important
        }

        .ext-justify-self-start {
            justify-self: start !important
        }

        .ext-justify-self-end {
            justify-self: end !important
        }

        .ext-justify-self-center {
            justify-self: center !important
        }

        .ext-justify-self-stretch {
            justify-self: stretch !important
        }

        .ext-rounded-none {
            border-radius: 0 !important
        }

        .ext-rounded-full {
            border-radius: 9999px !important
        }

        .ext-rounded-t-none {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-t-full {
            border-top-left-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-r-none {
            border-bottom-right-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-r-full {
            border-bottom-right-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-b-none {
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-b-full {
            border-bottom-left-radius: 9999px !important;
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-l-none {
            border-bottom-left-radius: 0 !important;
            border-top-left-radius: 0 !important
        }

        .ext-rounded-l-full {
            border-bottom-left-radius: 9999px !important;
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tl-none {
            border-top-left-radius: 0 !important
        }

        .ext-rounded-tl-full {
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tr-none {
            border-top-right-radius: 0 !important
        }

        .ext-rounded-tr-full {
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-br-none {
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-br-full {
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-bl-none {
            border-bottom-left-radius: 0 !important
        }

        .ext-rounded-bl-full {
            border-bottom-left-radius: 9999px !important
        }

        .ext-border-0 {
            border-width: 0 !important
        }

        .ext-border-t-0 {
            border-top-width: 0 !important
        }

        .ext-border-r-0 {
            border-right-width: 0 !important
        }

        .ext-border-b-0 {
            border-bottom-width: 0 !important
        }

        .ext-border-l-0 {
            border-left-width: 0 !important
        }

        .ext-p-0:not([style*=padding]) {
            padding: 0 !important
        }

        .ext-p-base:not([style*=padding]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-p-lg:not([style*=padding]) {
            padding: var(--extendify--spacing--large) !important
        }

        .ext-px-0:not([style*=padding]) {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext-px-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-px-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large) !important;
            padding-right: var(--extendify--spacing--large) !important
        }

        .ext-py-0:not([style*=padding]) {
            padding-bottom: 0 !important;
            padding-top: 0 !important
        }

        .ext-py-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-py-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large) !important;
            padding-top: var(--extendify--spacing--large) !important
        }

        .ext-pt-0:not([style*=padding]) {
            padding-top: 0 !important
        }

        .ext-pt-base:not([style*=padding]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pt-lg:not([style*=padding]) {
            padding-top: var(--extendify--spacing--large) !important
        }

        .ext-pr-0:not([style*=padding]) {
            padding-right: 0 !important
        }

        .ext-pr-base:not([style*=padding]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pr-lg:not([style*=padding]) {
            padding-right: var(--extendify--spacing--large) !important
        }

        .ext-pb-0:not([style*=padding]) {
            padding-bottom: 0 !important
        }

        .ext-pb-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pb-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large) !important
        }

        .ext-pl-0:not([style*=padding]) {
            padding-left: 0 !important
        }

        .ext-pl-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pl-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large) !important
        }

        .ext-text-left {
            text-align: left !important
        }

        .ext-text-center {
            text-align: center !important
        }

        .ext-text-right {
            text-align: right !important
        }

        .ext-leading-none {
            line-height: 1 !important
        }

        .ext-leading-tight {
            line-height: 1.25 !important
        }

        .ext-leading-snug {
            line-height: 1.375 !important
        }

        .ext-leading-normal {
            line-height: 1.5 !important
        }

        .ext-leading-relaxed {
            line-height: 1.625 !important
        }

        .ext-leading-loose {
            line-height: 2 !important
        }

        .clip-path--rhombus img {
            -webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%);
            clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%)
        }

        .clip-path--diamond img {
            -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%);
            clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%)
        }

        .clip-path--rhombus-alt img {
            -webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%);
            clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%)
        }

        .wp-block-columns[class*=fullwidth-cols] {
            margin-bottom: unset
        }

        .wp-block-column.editor\:pointer-events-none {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.wp-block-column.editor\:pointer-events-none,
        .is-root-container.block-editor-block-list__layout>[data-align=wide]>.wp-block-column.editor\:pointer-events-none {
            margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
        }

        .ext .wp-block-columns .wp-block-column[style*=padding] {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext .wp-block-columns+.wp-block-columns:not([class*=mt-]):not([class*=my-]):not([style*=margin]) {
            margin-top: 0 !important
        }

        [class*=fullwidth-cols] .wp-block-column:first-child,
        [class*=fullwidth-cols] .wp-block-group:first-child {
            margin-top: 0
        }

        [class*=fullwidth-cols] .wp-block-column:last-child,
        [class*=fullwidth-cols] .wp-block-group:last-child {
            margin-bottom: 0
        }

        [class*=fullwidth-cols] .wp-block-column:first-child>*,
        [class*=fullwidth-cols] .wp-block-column>:first-child {
            margin-top: 0
        }

        .ext .is-not-stacked-on-mobile .wp-block-column,
        [class*=fullwidth-cols] .wp-block-column>:last-child {
            margin-bottom: 0
        }

        .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        @media (min-width:782px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                margin-bottom: 0
            }
        }

        .wp-block-columns[class*=fullwidth-cols].is-not-stacked-on-mobile>.wp-block-column {
            margin-bottom: 0 !important
        }

        @media (min-width:600px) and (max-width:781px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:nth-child(2n) {
                margin-left: var(--wp--style--block-gap, 2em)
            }
        }

        @media (max-width:781px) {
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (max-width:1079px) {
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        .direction-rtl {
            direction: rtl
        }

        .direction-ltr {
            direction: ltr
        }

        .is-style-inline-list {
            padding-left: 0 !important
        }

        .is-style-inline-list li {
            list-style-type: none !important
        }

        @media (min-width:782px) {
            .is-style-inline-list li {
                display: inline !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        @media (min-width:782px) {
            .is-style-inline-list li:first-child {
                margin-left: 0 !important
            }
        }

        @media (min-width:782px) {
            .is-style-inline-list li:last-child {
                margin-right: 0 !important
            }
        }

        .bring-to-front {
            position: relative;
            z-index: 10
        }

        .text-stroke {
            -webkit-text-stroke-color: var(--wp--preset--color--background)
        }

        .text-stroke,
        .text-stroke--primary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px)
        }

        .text-stroke--primary {
            -webkit-text-stroke-color: var(--wp--preset--color--primary)
        }

        .text-stroke--secondary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px);
            -webkit-text-stroke-color: var(--wp--preset--color--secondary)
        }

        .editor\:no-caption .block-editor-rich-text__editable {
            display: none !important
        }

        .editor\:no-inserter .wp-block-column:not(.is-selected)>.block-list-appender,
        .editor\:no-inserter .wp-block-cover__inner-container>.block-list-appender,
        .editor\:no-inserter .wp-block-group__inner-container>.block-list-appender,
        .editor\:no-inserter>.block-list-appender {
            display: none
        }

        .editor\:no-resize .components-resizable-box__handle,
        .editor\:no-resize .components-resizable-box__handle:after,
        .editor\:no-resize .components-resizable-box__side-handle:before {
            display: none;
            pointer-events: none
        }

        .editor\:no-resize .components-resizable-box__container {
            display: block
        }

        .editor\:pointer-events-none {
            pointer-events: none
        }

        .is-style-angled {
            justify-content: flex-end
        }

        .ext .is-style-angled>[class*=_inner-container],
        .is-style-angled {
            align-items: center
        }

        .is-style-angled .wp-block-cover__image-background,
        .is-style-angled .wp-block-cover__video-background {
            -webkit-clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            z-index: 1
        }

        @media (min-width:782px) {

            .is-style-angled .wp-block-cover__image-background,
            .is-style-angled .wp-block-cover__video-background {
                -webkit-clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%);
                clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%)
            }
        }

        .has-foreground-color {
            color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-foreground-background-color {
            background-color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-background-color {
            color: var(--wp--preset--color--background, #fff) !important
        }

        .has-background-background-color {
            background-color: var(--wp--preset--color--background, #fff) !important
        }

        .has-primary-color {
            color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-primary-background-color {
            background-color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-secondary-color {
            color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .has-secondary-background-color {
            background-color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .ext.has-text-color h1,
        .ext.has-text-color h2,
        .ext.has-text-color h3,
        .ext.has-text-color h4,
        .ext.has-text-color h5,
        .ext.has-text-color h6,
        .ext.has-text-color p {
            color: currentColor
        }

        .has-white-color {
            color: var(--wp--preset--color--white, #fff) !important
        }

        .has-black-color {
            color: var(--wp--preset--color--black, #000) !important
        }

        .has-ext-foreground-background-color {
            background-color: var(--wp--preset--color--foreground, var(--wp--preset--color--black, #000)) !important
        }

        .has-ext-primary-background-color {
            background-color: var(--wp--preset--color--primary, var(--wp--preset--color--cyan-bluish-gray, #000)) !important
        }

        .wp-block-button__link.has-black-background-color {
            border-color: var(--wp--preset--color--black, #000)
        }

        .wp-block-button__link.has-white-background-color {
            border-color: var(--wp--preset--color--white, #fff)
        }

        .has-ext-small-font-size {
            font-size: var(--wp--preset--font-size--ext-small) !important
        }

        .has-ext-medium-font-size {
            font-size: var(--wp--preset--font-size--ext-medium) !important
        }

        .has-ext-large-font-size {
            font-size: var(--wp--preset--font-size--ext-large) !important;
            line-height: 1.2
        }

        .has-ext-x-large-font-size {
            font-size: var(--wp--preset--font-size--ext-x-large) !important;
            line-height: 1
        }

        .has-ext-xx-large-font-size {
            font-size: var(--wp--preset--font-size--ext-xx-large) !important;
            line-height: 1
        }

        .has-ext-x-large-font-size:not([style*=line-height]),
        .has-ext-xx-large-font-size:not([style*=line-height]) {
            line-height: 1.1
        }

        .ext .wp-block-group>* {
            margin-bottom: 0;
            margin-top: 0
        }

        .ext .wp-block-group>*+* {
            margin-bottom: 0
        }

        .ext .wp-block-group>*+*,
        .ext h2 {
            margin-top: var(--wp--style--block-gap, 1.75rem)
        }

        .ext h2 {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        .has-ext-x-large-font-size+h3,
        .has-ext-x-large-font-size+p {
            margin-top: .5rem
        }

        .ext .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
            min-width: 12rem;
            width: calc(25% - var(--wp--style--block-gap, .5em)*.75)
        }

        .ext .ext-grid>[class*=_inner-container] {
            display: grid
        }

        .ext>[class*=_inner-container]>.ext-grid:not([class*=columns]),
        .ext>[class*=_inner-container]>.wp-block>.ext-grid:not([class*=columns]) {
            display: initial !important
        }

        .ext .ext-grid-cols-1>[class*=_inner-container] {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-2>[class*=_inner-container] {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-3>[class*=_inner-container] {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-4>[class*=_inner-container] {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-5>[class*=_inner-container] {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-6>[class*=_inner-container] {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-7>[class*=_inner-container] {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-8>[class*=_inner-container] {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-9>[class*=_inner-container] {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-10>[class*=_inner-container] {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-11>[class*=_inner-container] {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-12>[class*=_inner-container] {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-13>[class*=_inner-container] {
            grid-template-columns: repeat(13, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-none>[class*=_inner-container] {
            grid-template-columns: none !important
        }

        .ext .ext-grid-rows-1>[class*=_inner-container] {
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-2>[class*=_inner-container] {
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-3>[class*=_inner-container] {
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-4>[class*=_inner-container] {
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-5>[class*=_inner-container] {
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-6>[class*=_inner-container] {
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-none>[class*=_inner-container] {
            grid-template-rows: none !important
        }

        .ext .ext-items-start>[class*=_inner-container] {
            align-items: flex-start !important
        }

        .ext .ext-items-end>[class*=_inner-container] {
            align-items: flex-end !important
        }

        .ext .ext-items-center>[class*=_inner-container] {
            align-items: center !important
        }

        .ext .ext-items-baseline>[class*=_inner-container] {
            align-items: baseline !important
        }

        .ext .ext-items-stretch>[class*=_inner-container] {
            align-items: stretch !important
        }

        .ext.wp-block-group>:last-child {
            margin-bottom: 0
        }

        .ext .wp-block-group__inner-container {
            padding: 0 !important
        }

        .ext.has-background {
            padding-left: var(--wp--style--block-gap, 1.75rem);
            padding-right: var(--wp--style--block-gap, 1.75rem)
        }

        .ext [class*=inner-container]>.alignwide [class*=inner-container],
        .ext [class*=inner-container]>[data-align=wide] [class*=inner-container] {
            max-width: var(--responsive--alignwide-width, 120rem)
        }

        .ext [class*=inner-container]>.alignwide [class*=inner-container]>*,
        .ext [class*=inner-container]>[data-align=wide] [class*=inner-container]>* {
            max-width: 100% !important
        }

        .ext .wp-block-image {
            position: relative;
            text-align: center
        }

        .ext .wp-block-image img {
            display: inline-block;
            vertical-align: middle
        }

        body {
            --extendify--spacing--large: var(--wp--custom--spacing--large, clamp(2em, 8vw, 8em));
            --wp--preset--font-size--ext-small: 1rem;
            --wp--preset--font-size--ext-medium: 1.125rem;
            --wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem);
            --wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem);
            --wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem);
            --wp--preset--color--black: #000;
            --wp--preset--color--white: #fff
        }

        .ext * {
            box-sizing: border-box
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
            background: transparent !important
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container:before {
            display: none !important
        }

        .ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
            margin-bottom: unset;
            margin-top: unset
        }

        .ext .alignwide {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.ext-my-0,
        .is-root-container.block-editor-block-list__layout>[data-align=wide]>.ext-my-0:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-50 {
            min-height: 50vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-60 {
            min-height: 60vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-70 {
            min-height: 70vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-80 {
            min-height: 80vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-100 {
            min-height: 100vw !important
        }

        .ext-mr-0.alignfull:not([style*=margin]):not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-ml-0:not([style*=margin]):not([style*=margin]) {
            margin-left: 0 !important
        }

        .is-root-container .wp-block[data-align=full]>.ext-mx-0:not([style*=margin]):not([style*=margin]) {
            margin-left: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
            margin-right: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
            overflow: hidden;
            width: unset
        }

        @media (min-width:782px) {
            .tablet\:ext-absolute {
                position: absolute !important
            }

            .tablet\:ext-relative {
                position: relative !important
            }

            .tablet\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-top-lg {
                top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--top-lg {
                top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-right-lg {
                right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--right-lg {
                right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-left-lg {
                left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--left-lg {
                left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-order-1 {
                order: 1 !important
            }

            .tablet\:ext-order-2 {
                order: 2 !important
            }

            .tablet\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .tablet\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .tablet\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .tablet\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .tablet\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important;
                margin-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important;
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .tablet\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .tablet\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important;
                margin-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .tablet\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .tablet\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .tablet\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .tablet\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .tablet\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .tablet\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .tablet\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-block {
                display: block !important
            }

            .tablet\:ext-inline-block {
                display: inline-block !important
            }

            .tablet\:ext-inline {
                display: inline !important
            }

            .tablet\:ext-flex {
                display: flex !important
            }

            .tablet\:ext-inline-flex {
                display: inline-flex !important
            }

            .tablet\:ext-grid {
                display: grid !important
            }

            .tablet\:ext-inline-grid {
                display: inline-grid !important
            }

            .tablet\:ext-hidden {
                display: none !important
            }

            .tablet\:ext-w-auto {
                width: auto !important
            }

            .tablet\:ext-w-full {
                width: 100% !important
            }

            .tablet\:ext-max-w-full {
                max-width: 100% !important
            }

            .tablet\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .tablet\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .tablet\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .tablet\:ext-flex-none {
                flex: none !important
            }

            .tablet\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .tablet\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .tablet\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .tablet\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .tablet\:ext-list-none {
                list-style-type: none !important
            }

            .tablet\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-none {
                grid-template-columns: none !important
            }

            .tablet\:ext-flex-row {
                flex-direction: row !important
            }

            .tablet\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .tablet\:ext-flex-col {
                flex-direction: column !important
            }

            .tablet\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .tablet\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .tablet\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .tablet\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .tablet\:ext-items-start {
                align-items: flex-start !important
            }

            .tablet\:ext-items-end {
                align-items: flex-end !important
            }

            .tablet\:ext-items-center {
                align-items: center !important
            }

            .tablet\:ext-items-baseline {
                align-items: baseline !important
            }

            .tablet\:ext-items-stretch {
                align-items: stretch !important
            }

            .tablet\:ext-justify-start {
                justify-content: flex-start !important
            }

            .tablet\:ext-justify-end {
                justify-content: flex-end !important
            }

            .tablet\:ext-justify-center {
                justify-content: center !important
            }

            .tablet\:ext-justify-between {
                justify-content: space-between !important
            }

            .tablet\:ext-justify-around {
                justify-content: space-around !important
            }

            .tablet\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .tablet\:ext-justify-items-start {
                justify-items: start !important
            }

            .tablet\:ext-justify-items-end {
                justify-items: end !important
            }

            .tablet\:ext-justify-items-center {
                justify-items: center !important
            }

            .tablet\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .tablet\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .tablet\:ext-justify-self-start {
                justify-self: start !important
            }

            .tablet\:ext-justify-self-end {
                justify-self: end !important
            }

            .tablet\:ext-justify-self-center {
                justify-self: center !important
            }

            .tablet\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .tablet\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .tablet\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .tablet\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important;
                padding-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .tablet\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important;
                padding-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .tablet\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .tablet\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .tablet\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .tablet\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-text-left {
                text-align: left !important
            }

            .tablet\:ext-text-center {
                text-align: center !important
            }

            .tablet\:ext-text-right {
                text-align: right !important
            }
        }

        @media (min-width:1080px) {
            .desktop\:ext-absolute {
                position: absolute !important
            }

            .desktop\:ext-relative {
                position: relative !important
            }

            .desktop\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-top-lg {
                top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--top-lg {
                top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-right-lg {
                right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--right-lg {
                right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-left-lg {
                left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--left-lg {
                left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-order-1 {
                order: 1 !important
            }

            .desktop\:ext-order-2 {
                order: 2 !important
            }

            .desktop\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .desktop\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .desktop\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .desktop\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .desktop\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important;
                margin-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important;
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .desktop\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .desktop\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important;
                margin-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .desktop\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .desktop\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .desktop\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .desktop\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .desktop\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .desktop\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .desktop\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-block {
                display: block !important
            }

            .desktop\:ext-inline-block {
                display: inline-block !important
            }

            .desktop\:ext-inline {
                display: inline !important
            }

            .desktop\:ext-flex {
                display: flex !important
            }

            .desktop\:ext-inline-flex {
                display: inline-flex !important
            }

            .desktop\:ext-grid {
                display: grid !important
            }

            .desktop\:ext-inline-grid {
                display: inline-grid !important
            }

            .desktop\:ext-hidden {
                display: none !important
            }

            .desktop\:ext-w-auto {
                width: auto !important
            }

            .desktop\:ext-w-full {
                width: 100% !important
            }

            .desktop\:ext-max-w-full {
                max-width: 100% !important
            }

            .desktop\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .desktop\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .desktop\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .desktop\:ext-flex-none {
                flex: none !important
            }

            .desktop\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .desktop\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .desktop\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .desktop\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .desktop\:ext-list-none {
                list-style-type: none !important
            }

            .desktop\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-none {
                grid-template-columns: none !important
            }

            .desktop\:ext-flex-row {
                flex-direction: row !important
            }

            .desktop\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .desktop\:ext-flex-col {
                flex-direction: column !important
            }

            .desktop\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .desktop\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .desktop\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .desktop\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .desktop\:ext-items-start {
                align-items: flex-start !important
            }

            .desktop\:ext-items-end {
                align-items: flex-end !important
            }

            .desktop\:ext-items-center {
                align-items: center !important
            }

            .desktop\:ext-items-baseline {
                align-items: baseline !important
            }

            .desktop\:ext-items-stretch {
                align-items: stretch !important
            }

            .desktop\:ext-justify-start {
                justify-content: flex-start !important
            }

            .desktop\:ext-justify-end {
                justify-content: flex-end !important
            }

            .desktop\:ext-justify-center {
                justify-content: center !important
            }

            .desktop\:ext-justify-between {
                justify-content: space-between !important
            }

            .desktop\:ext-justify-around {
                justify-content: space-around !important
            }

            .desktop\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .desktop\:ext-justify-items-start {
                justify-items: start !important
            }

            .desktop\:ext-justify-items-end {
                justify-items: end !important
            }

            .desktop\:ext-justify-items-center {
                justify-items: center !important
            }

            .desktop\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .desktop\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .desktop\:ext-justify-self-start {
                justify-self: start !important
            }

            .desktop\:ext-justify-self-end {
                justify-self: end !important
            }

            .desktop\:ext-justify-self-center {
                justify-self: center !important
            }

            .desktop\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .desktop\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .desktop\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .desktop\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important;
                padding-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .desktop\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important;
                padding-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .desktop\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .desktop\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .desktop\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .desktop\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-text-left {
                text-align: left !important
            }

            .desktop\:ext-text-center {
                text-align: center !important
            }

            .desktop\:ext-text-right {
                text-align: right !important
            }
        }

    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('/') }}/frontend/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="htinstagram-feed-css" href="{{ asset('/') }}/frontend/css/ht-instagramfeed.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="{{ asset('/') }}/frontend/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('/') }}/frontend/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="fancybox-css" href="{{ asset('/') }}/frontend/css/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" id="jqvmap-css" href="{{ asset('/') }}/frontend/css/jqvmap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="{{ asset('/') }}/frontend/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" id="wppolitic-vendors-css" href="{{ asset('/') }}/frontend/css/wppolitic-vendors.css" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="{{ asset('/') }}/frontend/css/swiper.css" type="text/css" media="all">
    <link rel="stylesheet" id="wppolitic-widgets-css" href="{{ asset('/') }}/frontend/css/wppolitic-widgets.css" type="text/css" media="all">
    <link rel="stylesheet" id="give-styles-css" href="{{ asset('/') }}/frontend/css/give.css" type="text/css" media="all">
    <link rel="stylesheet" id="give-donation-summary-style-frontend-css" href="{{ asset('/') }}/frontend/css/give-donation-summary.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="htbbootstrap-css" href="{{ asset('/') }}/frontend/css/htbbootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="htmega-animation-css" href="{{ asset('/') }}/frontend/css/animation.css" type="text/css" media="all">
    <link rel="stylesheet" id="htmega-keyframes-css" href="{{ asset('/') }}/frontend/css/htmega-keyframes.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-font-css"
        href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CPoppins%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext&amp;ver=5.9.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="icon-font-css" href="{{ asset('/') }}/frontend/css/icon-font.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="animate-css" href="{{ asset('/') }}/frontend/css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" id="slick-css" href="{{ asset('/') }}/frontend/css/slick.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousels-css" href="{{ asset('/') }}/frontend/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="mean-menu-css" href="{{ asset('/') }}/frontend/css/meanmenu.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-default-style-css" href="{{ asset('/') }}/frontend/css/theme-default.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-blog-style-css" href="{{ asset('/') }}/frontend/css/blog-post.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-main-style-css" href="{{ asset('/') }}/frontend/css/theme-style.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-style-css" href="{{ asset('/') }}/frontend/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-blocks-css" href="{{ asset('/') }}/frontend/css/blocks.css" type="text/css" media="all">
    <link rel="stylesheet" id="politicem-responsive-css" href="{{ asset('/') }}/frontend/css/responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('/') }}/frontend/css/elementor-icons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-legacy-css" href="{{ asset('/') }}/frontend/css/custom-frontend-legacy.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('/') }}/frontend/css/custom-frontend.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2031-css" href="{{ asset('/') }}/frontend/css/post-2031.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-823-css" href="{{ asset('/') }}/frontend/css/post-823.css" type="text/css" media="all">
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&#038;display=swap&#038;ver=1635919330">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&amp;display=swap&amp;ver=1635919330"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&amp;display=swap&amp;ver=1635919330">
        </noscript>
    <link rel="stylesheet" id="politicem-dynamic-style-css" href="{{ asset('/') }}/frontend/css/dynamic-style.css" type="text/css" media="all">
    <style id="politicem-dynamic-style-inline-css" type="text/css">
        @media (max-width: 767px) {}

        section.page__title__wrapper {
            background-repeat: no-repeat;
        }

        section.page__title__wrapper {
            background-size: cover;
        }

        section.page__title__wrapper {
            background-position: center center;
        }

        section.page__title__wrapper {
            background-image: url(frontend/images/donation-bg.jpg);
        }

        section.page__title__wrapper:before {
            background-color: rgba(0, 0, 0, 0.72);
        }

        section.page__title__wrapper.blog-page:before {
            background-color: rgba(0, 0, 0, 0.72);
        }

        section.page__title__wrapper.single-post:before {
            background-color: rgba(0, 0, 0, 0.7);
        }

    </style>
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CThe+Girl+Next+Door%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.3"
        type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/wp-polyfill.min.js" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.vmap.min.js" id="vmap-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.vmap.world.js" id="vmap-world-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/wppolitic-vendors.js" id="wppolitic-vendors-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/hooks.min.js" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/i18n.min.js" id="wp-i18n-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/give.js" id="give-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/owl.carousel.min.js" id="owl-carousels-js"></script>
    <link rel="alternate" type="application/json+oembed"
        href="{{ url('') }}/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.wphash.com%2F3%2Fpoliticem%2Fhome-political-candidate%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="{{ url('') }}/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.wphash.com%2F3%2Fpoliticem%2Fhome-political-candidate%2F&#038;format=xml">

    <link rel="shortcut icon" href="favicon.ico">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon" sizes="114x114" href="favicon.ico">
    <!-- For iPad -->
    <link rel="apple-touch-icon" sizes="72x72" href="favicon.ico">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon" sizes="144x144" href="favicon.ico">
    <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <link rel="icon" href="frontend/images/cropped-logo90-32x32.png" sizes="32x32">
    <link rel="icon" href="frontend/images/cropped-logo90-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="frontend/images/cropped-logo90-180x180.png">
    <meta name="msapplication-TileImage"
        content="{{ url('') }}/wp-content/uploads/2020/01/cropped-logo90-270x270.png">
    <style id="politicem_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .page__title__inner h1,
        .page__title__inner>h1 {
            font-display: swap;
        }

        .breadcrumbs_wrap ul,
        .breadcrumbs_wrap ul li,
        .breadcrumbs_wrap ul li a,
        .breadcrumbs_wrap ul li span {
            font-display: swap;
        }

        .blog-page .page__title__inner .page-title {
            font-display: swap;
        }

        .page__title__wrapper.single-post .page__title__inner p {
            font-display: swap;
        }

        .sidebar-title {
            font-display: swap;
        }

        body {
            font-display: swap;
        }

        h1 {
            font-display: swap;
        }

        h2 {
            font-display: swap;
        }

        h3 {
            font-display: swap;
        }

        h4 {
            font-display: swap;
        }

        h5 {
            font-display: swap;
        }

        h6 {
            font-display: swap;
        }

        .pnf-inner>h2 {
            font-display: swap;
        }

        .pnf-inner>p {
            font-family: Roboto;
            font-weight: 700;
            font-style: normal;
            color: #333333;
            font-size: 36px;
            font-display: swap;
        }

        .page-not-found-wrap {
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url('frontend/images/404-page.jpg');
            background-size: cover;
        }

    </style>
</head>

<body class="page-template page-template-elementor_header_footer page page-id-823 wp-embed-responsive wide-layout-active header-default-style-one elementor-default elementor-template-full-width elementor-kit-2031 elementor-page elementor-page-823">

    <div id="loading-default" class="loading-init">
        <div id="loading-default-center">
            <div id="loading-default-center-absolute">
                <div class="pre_object" id="pre_object_four"></div>
                <div class="pre_object" id="pre_object_three"></div>
                <div class="pre_object" id="pre_object_two"></div>
                <div class="pre_object" id="pre_object_one"></div>
            </div>
        </div>
    </div>
    <div id="page" class="site site-wrapper wide-layout">
        <div id="politicem">
            <div class="header-top-area header-transparent-top hader_st_2  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="header-social">
                                <ul>
                                    <li><a class="facebook social-icon" href="{{ setting('facebook_link') }}"
                                            title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter social-icon" href="{{ setting('twitter_link') }}" title="Twitter"
                                            target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram social-icon" href="{{ setting('instagram_link') }}" title="Instagram"
                                            target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="header-info text-right">
                                <span><a href="tel:{{ setting('phone') }} "> {{ setting('phone') }}</a></span>
                                <span class="mail-us">
                                    <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.inc.header')



            <div id="content" class="site-content">

                @yield('content')
            </div><!-- #content -->

            <footer class="footer-wrapper " style="background-color: #0b162c;padding-top: 100px;margin-top:40px;">
                <div data-elementor-type="wp-post" data-elementor-id="223" class="elementor elementor-223" >
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section  class="elementor-section elementor-top-section elementor-element elementor-element-8d10e18 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8d10e18" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2278ea4" data-id="2278ea4" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-83e6698 elementor-widget elementor-widget-heading" data-id="83e6698" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default" style="color: white">CONTACT US</h3> </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b9edfd6 elementor-widget elementor-widget-text-editor" style="color: white" data-id="b9edfd6" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <p><b>Phone:</b> {{ setting('phone') }}
                                                                    <br><b>Email :</b> {{ setting('email') }}
                                                                    {{-- <br><b>Address:</b> House 10, Road Nomber 32 Mohammadpur, Dhaka 1212.</p> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8669870" data-id="8669870" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-1dab9bd elementor-widget elementor-widget-wp-widget-politic_description_widget" data-id="1dab9bd" data-element_type="widget" data-widget_type="wp-widget-politic_description_widget.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="single-footer">
                                                                <div class="footer-logo">
                                                                    <a href="{{ url('/') }}" class="logo-footer">
                                                                        <img src="{{ asset(setting('footer_logo')) }}" alt="Footer logo">
                                                                    </a>
                                                                </div>
                                                                <div class="footer-brief" >
                                                                    <p>
                                                                        {{ setting('footer_description') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <p> </p>
                                                            <p> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ce9ea6d" data-id="ce9ea6d" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-93f6a67 elementor-widget elementor-widget-heading" data-id="93f6a67" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default" style="color: white">FOLLOW ME</h3> </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-bf095e2 elementor-widget elementor-widget-wp-widget-htinstagram_default_widgets" data-id="bf095e2" data-element_type="widget" data-widget_type="wp-widget-htinstagram_default_widgets.default">
                                                        <div class="elementor-widget-container">
                                                            <p>
                                                                <ul class="footer-social" style="list-style: none;color:white">
                                                                    <li> <a class="facebook" href="{{ setting('facebook_link') }}" title="Facebook"><i class="fa fa-facebook"></i> FACEBOOK</a> </li>
                                                                    <li> <a class="twitter" href="{{ setting('twitter_link') }}" title="Twitter"><i class="fa fa-twitter"></i> TWITTER</a> </li>
                                                                    <li> <a class="rss" href="{{ setting('instagram_link') }}" title="INSTAGRAM"><i class="fa fa-instagram"></i> INSTAGRAM</a> </li>
                                                                </ul>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section  style="background: #e03927;text-align: center;color: white;" class="elementor-section elementor-top-section elementor-element elementor-element-6c0be70 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6c0be70" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0e65267" data-id="0e65267" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-1b5e78f elementor-widget elementor-widget-heading" data-id="1b5e78f" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">{{ setting('copyright_text') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </footer>

            <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
        </div><!-- #page -->
    </div>
    <link rel="stylesheet" id="elementor-post-1470-css" href="{{ asset('/') }}/frontend/css/post-1470.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-1473-css" href="{{ asset('/') }}/frontend/css/post-1473.css" type="text/css" media="all">
    <link rel="stylesheet" id="htmega-widgets-css" href="{{ asset('/') }}/frontend/css/htmega-widgets.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-1743-css" href="{{ asset('/') }}/frontend/css/post-1743.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('/') }}/frontend/css/fontawesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('/') }}/frontend/css/brands.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{ asset('/') }}/frontend/css/regular.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('/') }}/frontend/css/solid.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="e-animations-css" href="{{ asset('/') }}/frontend/css/animations.min.css" type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/index.js" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.fancybox.min.js" id="fancybox-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/waypoints.js" id="waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.counterup.js" id="counterup-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.magnific-popup.min.js" id="magnific-popup-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/isotope.pkgd.min.js" id="isotope-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/swiper.min.js" id="swiper-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/imagesloaded.min.js" id="imagesloaded-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/popper.min.js" id="popper-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/bootstrap.min.js" id="bootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/wppolitic-jquery-widgets-active.js" id="wppolitic-active-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/give-donation-summary.js" id="give-donation-summary-script-frontend-js">
    </script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/popper.min_1.js" id="htmega-popper-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/htbbootstrap.js" id="htbbootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/smooth-scroll.min.js" id="smooth-scroll-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/slick.min.js" id="slick-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/wow-min.js" id="wow-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/navigation.js" id="politicem-navigation-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/skip-link-focus-fix.js" id="skip-link-focus-fix-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.meanmenu.min.js" id="mean-menu-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/retina.min.js" id="retina-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/jquery.onepage.nav.js" id="onepage-nav-js"></script>
    <script type="text/javascript" id="politicem-main-js-extra">
        /* <![CDATA[ */
        var mobile_menu_data = {
            "menu_width": "991"
        };
        /* ]]> */

    </script>

    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/main.js" id="politicem-main-js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/htmega-widgets-active.js" id="htmega-widgets-scripts-js"></script>
    <script type="text/javascript" defer src="{{ asset('/') }}/frontend/js/forms.js" id="mc4wp-forms-api-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/waypoints.min.js" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/core.min.js" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/share-link.min.js" id="share-link-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/dialog.min.js" id="elementor-dialog-js"></script>
    {{-- <script type="text/javascript" src="{{ asset('/') }}/frontend/js/frontend.min.js" id="elementor-frontend-js"></script> --}}
    <script type="text/javascript" src="{{ asset('/') }}/frontend/js/preloaded-modules.min.js" id="preloaded-modules-js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="2i1axSeQ"></script>
    @stack('js')
</body>

</html>
