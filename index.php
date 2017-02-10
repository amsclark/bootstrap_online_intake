<?php
echo "<!DOCTYPE HTML>";
echo "<html>\n";
echo "<head>\n";
echo "\t<title>Legal Aid of Nebraska | Application for Services </title>\n";
echo "\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">\n";
echo "\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>\n";
echo "\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>\n";
echo "</head>\n";

echo "<body>\n";
include 'bootstrap_onlineintake.html';

echo "<div id=\"CANCER\" class=\"appblock\" style=\"display: none\">";
include 'allengexceptfrm.html';
include 'can.html';
echo "</div>";

echo "<div id=\"DISASTER\" class=\"appblock\" style=\"display: none\">";
include 'allengexceptfrm.html';
include 'dst.html';
echo "</div>";

echo "<div id=\"ELDER\" class=\"appblock\" style=\"display: none\">";
include 'allengexceptfrm.html';
include 'eld.html';
echo "</div>";

echo "<div id=\"FARM\" class=\"appblock\" style=\"display: none\">";
include 'frm.html';
echo "</div>";

echo "<div id=\"NATIVE\" class=\"appblock\" style=\"display: none\">";
include 'allengexceptfrm.html';
include 'nat.html';
echo "</div>";

echo "<div id=\"GENERAL\" class=\"appblock\" style=\"display: none\">";
include 'allengexceptfrm.html';
include 'gen.html';
echo "</div>";

echo "</body>\n";
echo "</html>\n";

?>

