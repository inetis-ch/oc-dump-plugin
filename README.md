# Twig Dump
This OctoberCMS plugin adds Twig function `d()` that recursively dump passed variables

Improve the way do display a dump of a variable by adding Twig function `{{ d(myVar) }}` that outputs details about a value like Laravel's `dd()` PHP function (see below).   

Unlike the native `dump` Twig function this function displays all children of the passed variable.

## Usage

### Dump a collection
```twig
{{ d(myVar) }}
```
![Twig d() Collection demo](https://cloud.githubusercontent.com/assets/12028540/26622474/d464855a-45ea-11e7-956f-edc02f44437c.png)


### Dump multiple variables

```twig
{{ d(var1, var2) }}
```
![dump mulitvars](https://cloud.githubusercontent.com/assets/12028540/26622650/6bef880c-45eb-11e7-844e-cc38f1b887da.png)

## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).
