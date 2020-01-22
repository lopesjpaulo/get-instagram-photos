<?php 

    function get_instagram_url($title)
    {
        $response = file_get_contents('https://www.instagram.com/'.$title.'/?__a=1');
        $obj = json_decode($response);

        $data = $obj->graphql->user->edge_owner_to_timeline_media->edges;

        return ($data);
    }

?>