<?php
function my_social()
{
    global $data;

    $social = array(
      'google' => $data['google'],
      'facebook' => $data['facebook'],
      'instagram' => $data['instagram'],
      'twitter' => $data['twitter'],
      'feed' => $data['feed'],
      'youtube' => $data['youtube'],
      'flickr' => $data['flickr'],
      'github' => $data['github'],
      'linkedin' => $data['linkedin'],
      'stackoverflow' => $data['stackoverflow'],
      'pinterest' => $data['pinterest']
    );

    foreach ($social as $value => $key) {
        if ($key !== "") {
            echo "<a href='$key' target='_blank'><span class='icon-$value'></span></a> ";
        } else {
            echo "";
        }
    }
}
