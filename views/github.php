<?php

$commits = array();

foreach ($_repos as $repo) {
    foreach (json_decode(file_get_contents("https://api.github.com/repos/".$repo."/commits")) as $commit) {
        $commit->repo = $repo;
        $commits[] = $commit;
    }
}

usort($commits, function($a, $b) { return strtotime($b->commit->author->date)-strtotime($a->commit->author->date); });

$selected_commits = array_slice($commits, 0, 10);

foreach($selected_commits as $commit) {
    $dtime = time()-strtotime($commit->commit->author->date);
    if ($dtime < 0) {
        $when = "just now";
    } else {
        $when = time_duration($dtime).' ago';
    }
    echo '
<div class="commit">
    <div class="text"><a href="https://github.com/'.$commit->repo.'/commit/'.$commit->sha.'" target="_blank">'.htmlentities($commit->commit->message).'</a></div>
    <div class="date">on <a href="https://github.com/'.$commit->repo.'" target="_blank">'.$commit->repo.'</a> '.$when.'</div>
</div>';
}
