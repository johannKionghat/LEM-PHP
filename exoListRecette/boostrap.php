<?php
include("./data.php");
function sort_by_notes(array $data, bool $revers = false)
{
    function cmp($a, $b)
    {
        if ($a['note'] == $b['note']) {
            return 0;
        }
        return ($a['note'] < $b['note']) ? -1 : 1;
    }
    usort($data, 'cmp');
    if($revers) return array_reverse($data);
    else return $data;
}
return $recipes = sort_by_notes($recipes, true);