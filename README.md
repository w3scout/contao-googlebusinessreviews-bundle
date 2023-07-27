
# Contao GoogleBusinessReviews Bundle

[![Latest Stable Version](https://poser.pugx.org/w3scout/contao-googlebusinessreviews-bundle/v/stable)](https://packagist.org/packages/w3scout/contao-googlebusinessreviews-bundle)
[![Total Downloads](https://poser.pugx.org/w3scout/contao-googlebusinessreviews-bundle/downloads)](https://packagist.org/packages/w3scout/contao-googlebusinessreviews-bundle)
[![License](https://poser.pugx.org/w3scout/contao-googlebusinessreviews-bundle/license)](https://packagist.org/packages/w3scout/contao-googlebusinessreviews-bundle)

## About
A Contao bundle that displays Google My Business reviews (*).

### Notice: this bundle is still under construction!

## Installation
Install [composer](https://getcomposer.org) if you haven't already, then enter this command in the main directory of your Contao installation:
```sh
composer require w3scout/contao-googlebusinessreviews-bundle
```

## Requirements:
- Google Cloud Console Account
- Google Business Account
- Google Places API Key
- Google Place ID

## How to set up a Google Places API Key:
[Google Docs Places API](https://developers.google.com/maps/documentation/places/web-service/get-api-key)

DON´T FORGET TO RESTRICT YOUR API KEY!<br>https://developers.google.com/maps/documentation/places/web-service/get-api-key#restrict_key

## How to find your Google Place ID:
Go to the Google Places ID Finder page [Google Places ID Finder](https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder) and search for your business. When your business is found, click on the marker and copy the Place ID out of it.

## How to find the URL to your Google My Business entry:
Go to your Google My Business entry, copy the URL out of the browser address bar and remove everything after your business name.

## How to find the "Write a new review" link":
Go to your Google My Business entry and click on "Write a review". Copy the link out of the browser address bar.

## (*) Known limitations:
the Google Places API returnes max. 5 reviews.<br>
If you need more, you need to request access to the Business Profile API: https://developers.google.com/my-business/content/overview?hl=de (not supported yet)
