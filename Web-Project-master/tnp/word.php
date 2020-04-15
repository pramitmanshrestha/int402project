<?php

com_load_typelib('Word.Application');

$word = new COM("word.application") or die("Unable to instantiate Word");

// use like this. Place your's word file in C drive
$word->Documents->Open('C:/reminder_new.doc');
echo $current_date = date("m/d/Y");

$tim= date("Y-m-d");

$info_array=array(  "Name"      => "pavan",
                    "TODAYDATE" => "$tim" ,
                    "Company"   => "sparsh" ,
                    "project"   => "Myrepc",
                    "Features"   => "Auto fill form editor") ;

foreach($info_array as $bookmarkname => $re)
    {

        $objBookmark = $word->ActiveDocument->Bookmarks($bookmarkname);
        $range = $objBookmark->Range;
        echo $range->Text = $re ;

    }

$new_file = "c:/reminder_filled.doc";

$word->Documents[1]->SaveAs($new_file);

$word->ActiveDocument->Close(false);

$word->Quit();
$word = null;
