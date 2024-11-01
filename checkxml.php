<?php
//Declarations

$file = "http://www.megavideo.com/xml/videolink.php?v=2UJAXS63"; //The file to read from.

#Read the file
$fp = fopen($file, "r"); //Open the file

$data = ""; //Initialize variable to contain the file's content

while(!feof($fp)) //Loop through the file, read it till the end.
{
    $data .= fgets($fp, 1024); //append next kb to data
}

fclose($fp); //Close file
#End read file
$split = preg_split('/(?<=<\/xml>)(?!$)/', $data); //Split each xml occurence into its own string

foreach ($split as $sxml) //Loop through each xml string
{
    //echo $sxml;
    $reader = new XMLReader(); //Initialize the reader
    $reader->xml($sxml) or die("File not found"); //open the current xml string
	
    while($reader->read()) //Read it
    {
        switch($reader->nodeType)
        {
            case constant('XMLREADER::ELEMENT'): //Read element
                if ($reader->name == 'record')
                {
                    $dataa = $reader->readInnerXml(); //get contents for <record> tag.
                    echo $dataa; //Print it to screen.
                }
            break;
        }
    }
    $reader->close(); //close reader
}
?>