<?php


function format_date($date)
{
    return date("D. M d, Y", strtotime($date));
}
function format_weekday($date)
{
    return date("l", strtotime($date));
}
function format_day($date)
{
    return date("M d", strtotime($date));
}
function format_date_new($date){
    
    return date("M j, Y", strtotime($date)); //e.g  Jul 29, 2014
}

function format_time($time)
{
    return date('h:i a', strtotime($time));
}

function make_linear_array($array_data, $index) {

    if (!empty($array_data)) {
        $new_array = array();
        
        foreach ($array_data as $value) {
            $new_array[] = $value->$index;
        }
        return $new_array;
    }
}

function make_associative_array($array_data, $associate_index) {

    if (!empty($array_data)) {
        $new_array = array();
        foreach ($array_data as $value) {
            $new_array[$value->$associate_index] = $value;
        }
        return $new_array;
    }
}

function make_pair_array($array_data, $key_index, $value_index, $dropdown = TRUE) {
    
    $new_array = array();
    
    if($dropdown)
        $new_array[""] = "";
        
    if (!empty($array_data)) {
        foreach ($array_data as $value) {
            $new_array[$value->$key_index] = $value->$value_index;
        }
    }
    return $new_array;
}

function in_great_for_array($array,$key)
{
    foreach ($array as $value) {
       
        if(trim($value->great_for)==$key)
            return true;
    }
    return false;
    
}

function get_average_package_price_activity($packages)
{
    $total_price = 0;
    foreach ($packages as $package)
    {
        $total_price += $package->price_per_person;
    }
    return $total_price/sizeof($packages);
}

function get_select_to_format($objects)
{
   
    $temp="";
    $temp_arr="";
    
    foreach ($objects as $obj)
    {
        $temp["id"]=$obj->id;
        $temp["text"]=$obj->name;
        $temp_arr[]=$temp;
        unset($temp);
    }
     return $temp_arr;
}

function show_past_time($past_date)

{

    $seconds = abs(strtotime($past_date) - time());

    

    $minutes = abs(floor($seconds/60));

    $hours = abs(floor($seconds/3600));

    $days = abs(floor($seconds/86400));

    $months = abs(floor($seconds/(86400 * 30)));

    $years = abs(floor($seconds / (86400 * 365) ));

    

    if($seconds < 30)
    {
        echo " Just now";
    }
    

    elseif($seconds < 60)
    {
        echo $seconds." seconds ago";

    }

    elseif($minutes == 1)
    {
        echo "1 minute ago";
    }
    

    elseif($minutes < 60)
    {
        echo $minutes." minutes ago";
    }
    

    elseif($hours == 1)
    {
        echo "1 hour ago";
    }
    

    elseif($hours < 24)
    {
        echo $hours." hours ago";
    }
    
    
    elseif($days == 1)
    {
        echo "1 day ago";
    }
    
    
    elseif($days < 7)
    {
        echo $days." days ago";
    }
    

    elseif($days <14)
    {
        echo floor($days/7). " week ago";
    }
    

    elseif($days <30)
    {
        echo floor($days/7). " weeks ago";
    }
    

    elseif($months == 1)
    {
        echo "1 month ago";
    }
    

    elseif($days < 365)
    {
        echo floor($days/30). " months ago";
    }
    

    elseif($years == 1)
    {
        echo "1 year ago";
    }
    

    else
    {
        echo floor($days/365). " years ago";
    }
}

function get_min_ticket_price($tickets)
{
    if($tickets && sizeof($tickets) > 0)
    {
            $price = $tickets[0]->ticket_price;
    
            foreach($tickets as $ticket)
            {
                if($ticket->ticket_price < $price)
                    $price = $ticket->ticket_price;
            }
            
                return $price;
    }else
    {
        return '0';
    }
}

function print_array($arr = null,$do_exit = false){
    if(is_array($arr)){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        $do_exit == TRUE ? die() : FALSE;
    }else{
        die("Value is not an array");
    }
}

function get_age($dob){
    
    $from = new DateTime($dob);
    $to   = new DateTime('today');
    return $from->diff($to)->y;
    
}

    
 function days_to_uper($days){
     
     return strtoupper(str_replace(',','-', $days));
 }

 
 function get_min_pakg($packages){
 
     if($packages && sizeof($packages) > 0){
          
            $first = $packages[0]->price_per_person;
            $min = $first;
          
            foreach($packages as $val){
                $in_min = $val->price_per_person;

                if($in_min < $min){
                    $min = $in_min;
                } 
            }
          
            return $min;
     } 
     else
     {
         return '0';
     }
     
 }
 
 
 // for vimeo videos
 function get_video_id($video_url){
        
        $api_endpoint = 'http://vimeo.com/api/v2/';
        $check_url = end(explode('/', $video_url)); // video id
        if(is_numeric($check_url) && strlen($check_url) > 6){
                    
            return $check_url; // returning video id if found in video url
                    
        } else{ // if the url is of some channel, album, or group

                    
                $url_parts = explode('/',$video_url);
                
                if($url_parts[3] == 'channels'){
                    
                 $vid_data =   unserialize(file_get_contents($api_endpoint."channel/$url_parts[4]/videos.php"));
                    foreach($vid_data as $vid){
                        return $url_id = $vid['id']; // returning video id
                    }
                         
                } else if($url_parts[3] == 'groups'){
                    
                    $vid_data =   unserialize(file_get_contents($api_endpoint."group/$url_parts[4]/videos.php"));

                    foreach($vid_data as $vid){
                        return $url_id = $vid['id']; // returning video id
                    }
                } else if($url_parts[3] == 'album'){
                    
                    $vid_data =   unserialize(file_get_contents($api_endpoint."album/$url_parts[4]/videos.php"));
                    
                    foreach($vid_data as $vid){
                        
                        return $url_id = $vid['id']; // returning video id
                        
                    }
                }
                    
            } // end else part
        
        
    }