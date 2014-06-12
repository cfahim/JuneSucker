<?php
   // Include the file below, it does all of the work pulling and parsing the XML feed
   include("rssreader.php");

   // This is where you place the URL of the site feed (make sure you include http:// and
   // that the link ends in .xml)
   $url="http://junesucker.wordpress.com/feed/";

   // This creates an instance of the rssFeed object, then passes it the URL of the feed
   $rss=new rssFeed($url);

   // If there was an error getting the data
   if($rss->error){
      print "There has been an error";
   }else{

      $rss->parse();

      $rss->showStories();

   }
?>