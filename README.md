# yii2-asset-spinner-canvas
Yii2 asset bundle for spinner-canvas bower package

## Installation

To install with composer:

```
$ php composer.phar require diiimonn/yii2-asset-spinner-canvas "dev-master"
```

or add

```
"diiimonn/yii2-asset-spinner-canvas": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

### in your AssetBundle:
```php
public $depends = [
    ...
    'diiimonn\assets\SpinnerCanvasAsset',
];
```
### in your.script.js

```javascript
var spinner = Spinners.create('#spinner', {
  radius: 30,
  height: 10,
  width: 2.5,
  dashes: 30,
  opacity: 1,
  padding: 3,
  rotation: 700,
  color: '#000000'
}).play();

spinner.center();
```
Demo: http://projects.nickstakenburg.com/spinners/