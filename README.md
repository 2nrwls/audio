# Audio BBcode

A [Flarum](http://flarum.org) extension. Adds an [audio] BBcode. This is compatible with my SM2 audio extension; feel free to install and use both. Let your members decide which they want to use. This is not needed if you use my BBBBcode extension because that extension already includes this extact BBcode. This extension is only for those who do not want all the other codes that come with BBBBcode and only need the audio code.

### Usage
~~~
[audio mp3="song.mp3" ogg="song.ogg"]
[audio mp3="song.mp3"]
[audio ogg="song.ogg"]
[audio m4a="song.m4a"]
[audio wav="song.wav"]
[audio mp3="song.mp3" width="50"]
~~~
(You may put a mp3 and ogg file together for maximum browser compatibility, or just post a mp3, ogg, wav, or m4a file alone. Also, as the last example shows, you may modify the width. The width will become a percentage and by delfault, if you choose not to declare a width, the player will be 100% width.)

### Installation

```sh
composer require zerosonesfun/flarum-bbcode-audio
```

### Updating

```sh
composer update zerosonesfun/flarum-bbcode-audio
php flarum cache:clear
```

### Links

- [Packagist](https://packagist.org/packages/zerosonesfun/flarum-bbcode-audio)
- [GitHub](https://github.com/zerosonesfun/flarum-bbcode-audio)

An extension by [Billy Wilcosky](https://wilcosky.com).
