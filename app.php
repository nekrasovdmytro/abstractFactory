<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 07.12.15
 * Time: 22:32
 */


// don't forget to include all files

$searchAbstractFactory = new SearchFactory();

// youtube

$youtubeFactory = $searchAbstractFactory->getFactory(SearchFactory::YOUTUBE_FACTORY);

$youtube = $youtubeFactory->getInstance();

// google

$googleFactory = $searchAbstractFactory->getFactory();

$google = $googleFactory->getInstance();
