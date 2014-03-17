<?php
/**
 * Created by PhpStorm.
 * User: Gert
 * Date: 17.03.14
 * Time: 15:29
 */

class tags extends Controller {
    function index()
    {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count
         FROM post_tags NATURAL JOIN tag
         GROUP BY tag_id");

    }
}