<?php

function NavBar() {
    print LoadTemplate("navbar");
}

function BasicHead( $css = "" )
{
    global $_application_folder;


    $str_stylesheets = "";
    foreach( $css as $stylesheet )
    {
        $str_stylesheets .= '<link rel="stylesheet" href="' . $_application_folder . '/css/' . $stylesheet . '">' ;
    }
    $data = array("stylesheets" => $str_stylesheets );
    $template = LoadTemplate("basic_head");
    print ReplaceContentOneRow($data, $template);

//    $_SESSION["head_printed"] = true;
}

function LoadTemplate ( $name ) {
    $template_html = file_get_contents("templates/$name.html");
    return $template_html;
}

function ReplaceContent( $data, $template_html )
{
    foreach ( $data as $row )
    {
        //replace fields with values in template
        $content = $template_html;
        foreach($row as $field => $value)
        {
            $content = str_replace("@@$field@@", $value, $content);
        }

        print $content;
    }
}
