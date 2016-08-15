<?php
function get_event_html($id,$item) {
    $output =  '<h5 class="event-header">' . $item['title'] . '</h5>		
				<ul>
					<li class="place"><a href="#">' . $item['location'] . '</a></li>
					<li class="date"><a href="#">' . $item['dateDisplay'] . '</a></li>
					<li class="time"><a href="#">' . $item['time'] . '</a></li>
				</ul>
				<div class="break">
		          <hr>
		        </div>';
		    return $output;
}

function array_event_category($event,$title) {
    $output = array();
    
    foreach ($event as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["dateData"];
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}

function get_news_html($id,$item) {
    $output = "<div class='news'> <h4>" . $item['title'] . "</h4>
				<p>" . $item['postShort'] . "</p>
				<p>" . $item['dateDisplay'] . "</p>
				<a href='article.php?id=" . $id . "'>Read More &#62;</a>
				</div>";
		    return $output;
}

function get_full_news_html($id,$item) {
    $output = "<h2>" . $item['title'] . "</h2>
				<p>" . $item['dateDisplay'] . "</p>
				<p>" . $item['postFull'] . "</p>";
		    return $output;
}

function array_news_category($news,$title) {
    $output = array();
    
    foreach ($news as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["dateData"];
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}

function get_profile_html($id,$item) {
    $output = "<div class='profile' id='" . $item['css-id'] . "'>
				<h2 class='main-col-header'>" . $item['name'] . "</h2> 
				<div class='image-wrapper'><img src='" . $item['img'] . "'></div>
				<div class='description'>
					<p>" . $item['description'] . "</p>
				</div>
			</div>";
		    return $output;
}

function array_profile_category($profile,$title) {
    $output = array();
    
    foreach ($profile as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["name"];
            $output[$id] = $sort;            
        }
    }
    return array_keys($output);
}


function get_media_html($id,$item) {
    $output =  '<h3 class="centered">' . $item["title"] . '</h3>
    		    <p>' . $item["postDate"]  . '</p>
				<div class="video-wrapper">' . $item["embed"] . '</div>
				<div class="break">
		          <hr>
		        </div>';
		    return $output;
}

function array_media_category($media,$title) {
    $output = array();
    
    foreach ($media as $id => $item) {
        if ($title == null OR strtolower($title) == strtolower($item["title"])) {
            $sort = $item["postDateData"];
            $output[$id] = $sort;            
        }
    }
    
    arsort($output);
    return array_keys($output);
}