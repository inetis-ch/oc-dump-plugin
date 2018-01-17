# About

OctoberCMS plugin to improve debugging in Twig. 

Adds the `d()` function to Twig to recursively dump provided variables in the same manner as Laravel's `dd()` function. Unlike Twig's native `dump()` function, `d()` displays all nested members of the provided variables.

## Usage

### Dumping a single variable
```twig
{{ d(myCollection) }}
```
![Twig d() Collection demo](https://cloud.githubusercontent.com/assets/12028540/26622474/d464855a-45ea-11e7-956f-edc02f44437c.png)


### Dumping multiple variables

```twig
{{ d(var1, var2) }}
```
![dump mulitvars](https://cloud.githubusercontent.com/assets/12028540/26622650/6bef880c-45eb-11e7-844e-cc38f1b887da.png)

## Author
inetis is a webdesign agency in Vufflens-la-Ville, Switzerland. We love coding and creating powerful apps and sites  [see our website](https://inetis.ch).
