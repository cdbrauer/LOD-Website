backgroundVideo
============
## About
**2016-09-25: I am currently updating this package. I will be removing the jQuery dependancy and improving the code for the whole plugin. I will also attempt to address the few issues raised. See [2.0.0](https://github.com/linnett/backgroundVideo/tree/2.0.0) for progress.**

### What is backgroundVideo?
backgroundVideo makes your HTML5 `<video>` behave like the CSS property `background-size: cover`, making it fully responsive and scaling to aspect ratio. Also included is an optional hardware accelerated parallax effect on the video. If you would like the parallax effect to behave like `background-attachment: fixed` instead of parallax, you can set `parallaxOptions.effect: 1`.

### Why is this plugin required?
You may be aware of the CSS property `object-fill: cover`. Unfortunately, this is currently only supported in Chrome ([http://caniuse.com/#feat=object-fit](http://caniuse.com/#feat=object-fit)). This plugin will allow you to use a video as a responsive background.

### Working Examples
* [Simple Example](http://linnett.github.io/backgroundVideo/simple-example.html)
* [Text Overlay](http://linnett.github.io/backgroundVideo/text-overlay-example.html)
* [With Header](http://linnett.github.io/backgroundVideo/with-header-example.html)

*Please note: parallax video is most effective on fixed position videos*

### Browser Support
HTML5 video supported browsers on desktop:
* IE9+
* Chrome
* Firefox
* Safari
* Opera

> *Please note this plugin will not work on mobile devices. Background videos will never work until autoplay is allowed. A responsive image is suggested as fallback*

## How to use

The HTML structure is the most important part here. The rest of the work will be taken care of by the JavaScript.

For the most basic implementation, add the following to your `<body>`:
```
<div id="video-wrap">
    <video id="my-video" preload="metadata" autoplay loop>
        <source src="yourVideoName.mp4" type="video/mp4">
        <source src="yourVideoName.webm" type="video/webm">
    </video>
</div>
```

Then, before your closing `<body>` tag add:

```
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="backgroundVideo.js"></script>
<script>
    $(document).ready(function() {
        $(element).backgroundVideo();
    });
</script>
```
In its most simple form, this will create a video based on the `window` height and width and apply a Parallax effect of 1.5.

You can also use npm:

```
npm install background-video
```

#### Usage with additional options

```
<div id="outer-wrap" style="width: 100%; height: 450px;">
    <div id="video-wrap">
        <video id="my-video" preload="metadata" autoplay loop>
            <source src="yourVideoName.mp4" type="video/mp4">
            <source src="yourVideoName.webm" type="video/webm">
        </video>
    </div>
</div>
...
```
```
...
$(element).backgroundVideo({
    $videoWrap: $('#video-wrap'),
    $outerWrap: $('#outer-wrap'),
    preventContextMenu: true,
    parallaxOptions: {
        offset: 60,
        effect: 1.7
    }
});
```

## Options

Option | Type | Default | Description
------ | ---- | ------- | -----------
$videoWrap | jQuery object | $('#video-wrap') | The div that wraps around the video
$outerWrap | jQuery object | $(window) | The containing div where outer measurements are taken
minimumVideoWidth | number | 400 | Minimum width of the video for scaling purposes
preventContextMenu | boolean | false | Prevents the user from viewing the context menu on the video (prevent right-click/secondary-click)
parallax | boolean | true | Toggle's parallax video feature
parallaxOptions: { effect: 1.5 } | number | 1.5 | The intensity of the parallax effect (1: fixed). Number must be >= 1.
pauseVideoOnViewLoss | boolean | true | Pause the video when the user scrolls out of view


## Dependencies

jQuery 2.1.1

## License

Copyright (c) 2014 Sam Linnett

Licensed under the MIT license.
