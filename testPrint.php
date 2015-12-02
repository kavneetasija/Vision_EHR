<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-24
 * Time: 2:41 PM
 */
?>
<?php
extract($_GET);

function GetPage($URL)
{
    #Get the source content of the URL
    $source = file_get_contents($URL);

    #Extract the raw URl from the current one
    $scheme = parse_url($URL, PHP_URL_SCHEME); //Ex: http
    $host = parse_url($URL, PHP_URL_HOST); //Ex: www.google.com
    $raw_url = $scheme . '://' . $host; //Ex: http://www.google.com

    #Replace the relative link by an absolute one
    $relative = array();
    $absolute = array();

    #String to search
    $relative[0] = '/src="\//';
    $relative[1] = '/href="\//';

    #String to remplace by
    $absolute[0] = 'src="' . $raw_url . '/';
    $absolute[1] = 'href="' . $raw_url . '/';

    $source = preg_replace($relative, $absolute, $source); //Ex: src="/image/google.png" to src="http://www.google.com/image/google.png"

    return $source;
}

function SaveToDB($source)
{
    #Connect to the DB
    $db = mysqli_connect('localhost', 'root', 'dp1991dp');

    #Select the DB name
    mysqli_select_db('vision_ehr');

    #Ask for UTF-8 encoding
    mysqli_query("SET NAMES 'utf8'");

    #Escape special chars
    $source = mysqli_real_escape_string($source);

    #Set the Query
    $query = "INSERT INTO website (source) VALUES ('$source')"; //Save it in a text row, that's it...

    #Run the query
    mysqli_query($query);

    #Close the connection
    mysqli_close($db);
}

if(isset($btnSubmit)){
   echo $this->GetPage($txtUrl);
}
?>
<html>
<head>
    <title>Title</title>
</head>
<body>
<form method="get">
    <input type="text" name="txtUrl">
    <button type="submit" value="submit" name="btnSubmit" >Submit</button>
</form>
</body>
</html>
