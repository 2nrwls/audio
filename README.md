# Audio BBCode (no downloads version)

A [Flarum](http://flarum.org) extension. Adds an [audio] BBCode. This is a fork of the [original](https://github.com/zerosonesfun/audio) which disallows downloads by default. This was created by [request](https://discuss.flarum.org/d/21687-audio-bbcode-add-on/31). 

### Usage
~~~
[audio mp3="song.mp3" ogg="song.ogg"]
[audio mp3="song.mp3"]
[audio ogg="song.ogg"]
[audio m4a="song.m4a"]
[audio wav="song.wav"]
[audio flac="song.flac"]
[audio webm="song.webm"]
[audio mp3="song.mp3" width="50"]
~~~
(You may put a mp3 and ogg file together for maximum browser compatibility, or just post a mp3, ogg, wav, flac, webm or m4a file alone. Also, as the last example shows, you may modify the width. The width will become a percentage and by default, if you choose not to declare a width, the player will be 100% width.)

### Installation

```sh
composer require 2nrwls/flarum-bbcode-audio:"*"
```

### Updating

```sh
composer update 2nrwls/flarum-bbcode-audio:"*"
php flarum cache:clear
```

### Links

- [Packagist](https://packagist.org/packages/2nrwls/flarum-bbcode-audio)
- [GitHub](https://github.com/2nrwls/flarum-bbcode-audio)
