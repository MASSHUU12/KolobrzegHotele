# KolobrzegHotele

## Table of Contents

- [KolobrzegHotele](#kolobrzeghotele)
  - [Table of Contents](#table-of-contents)
  - [General Information](#general-information)
  - [Technologies](#technologies)
  - [Setup](#setup)
  - [Screenshots](#screenshots)
    - [Homepage](#homepage)
    - [Search results](#search-results)
    - [Offer view](#offer-view)
  - [License](#license)

<br />

## General Information

Accommodation search engine in Kolobrzeg created for the purpose of competition.

<br />

You can check out the site in action [here](https://www.jakubdev.vxm.pl).

<br />

## Technologies

-   PHP: ^7.3|^8.0
-   Laravel: ^8.65
-   GSAP ^3.6.1
-   Swup
-   Composer
-   SCSS
-   jQuery 3.6.0
-   [OpenData](http://www.opendata.gis.kolobrzeg.pl/index.php/instrukcje-api)
-   [Bing Maps](https://docs.microsoft.com/en-us/bingmaps/v8-web-control/map-control-concepts/infoboxes/basic-infobox-example)

## Setup

To run this site locally, first clone this repository.

Now use the following commands on Windows (on MacOs/Linux use the equivalent of these commands):

```
$ cd .\KolobrzegHotele\
$ composer install
$ php artisan serve
```

Now the page will be available in the browser at 127.0.0.1:8000, if you want it to be available across the LAN, use:

```
// in place of [IP] enter the current IP address of the computer, e.g. 192.168.1.101

$ php artisan serve --host=[IP]
```

<br />

## Screenshots

### Homepage

![homepage](https://user-images.githubusercontent.com/61974579/146548889-77acaa25-aee1-432b-9817-eabde4f58f78.png)

### Search results

![Search results](https://user-images.githubusercontent.com/61974579/146549746-6a6da0ed-818e-4767-8709-dccd9cf8b8bf.png)

### Offer view

![offer](https://user-images.githubusercontent.com/61974579/146550027-31d2b403-e90b-4778-b4c4-5791065fe250.png)

<br />

## License

All rights reserved
