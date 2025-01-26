<?php

if (! function_exists('otherBloodGroupsDonorsOf')) {
    function otherBloodGroupsDonorsOf($bloodGroupId)
    {
        switch ($bloodGroupId) {
            case 1:
                return [2, 5, 6];
                break;
            case 2:
                return [6];
                break;
            case 3:
                return [3, 5, 6];
                break;
            case 4:
                return [6];
                break;
            case 5:
                return [6];
                break;
            case 6:
                return [];
                break;
            case 7:
                [1, 2, 3, 4, 5, 6, 8];
                break;
            case 8:
                return [2, 4, 6];
                break;
        }
    }
}
