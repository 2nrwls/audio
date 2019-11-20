# Audio BBcode

A [Flarum](http://flarum.org) extension. Adds an [audio] BBcode. This is compatible with my SM2 audio extension; feel free to install and use both. Let your members decide which they want to use. This is not needed if you use my BBBBcode extension because that extension already includes this BBcode. This is only for those who do not want all the other codes that come with BBBBcode.

### Usage
`[audio mp3="song.mp3" ogg="song.ogg"]`

or
`[audio m4a="song.m4a"]`

or the mp3 or ogg by itself.

Optionally, you may add a parameter and/or width. Two popular parameters you might choose from are "loop" or "autoplay." The "controls" parameter is already included every time. For the width, only input a number. It will automatically become a percentage. As an example, if you want your player to be 100% width and loop, you would type something like:

`[audio m4a="song.m4a" parameter="loop" width="100"]`

This will give you a 100% width player with controls, and the audio will loop.


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
