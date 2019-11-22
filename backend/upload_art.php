<?php
/*
Jungbin's art portofolio website.
This is the backend for uploading new art pieces.
@author Ruben Eekhof
*/


// @description Upload art to the website and save it in the database.
// @param title The title of the artwork.
// @param $description The description of the artwork (*optional).
// @return Void
function uploadArt($title, $description){
}

// @description Retrieves a specific art piece from the database.
// @param $title The title of the art piece.
// @return The art piece.
function retrieveArt($title) {

}

// @description Retrieves all art pieces from the database.
// @return All art pieces.
function retrieveAllArt(){

}


/*
All art will be saved in the `art-pieces` folder.
Tree:

-art-pieces:
-->art_id:
---->artwork (This is the full quality image.)
---->art_id.txt (This is just a txt file with that row in the database.)
---->artwork_unwatermarked (This is the artwork again but then without a watermark.)
-->art_id:
---->artwork 
---->art_id.txt 
---->artwork_unwatermarked 
etc...
*/
?>