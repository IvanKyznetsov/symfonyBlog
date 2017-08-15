<?php

namespace Blogger\BlogBundle\DependencyInjection;

use Symfony\Component\Security\Acl\Exception\Exception;

class ResizeImage
{
    public function resize($imageName)
    {
        $resizes = exec(
            'cd images; 
            convert '.$imageName.'  -resize 120x120 '.$imageName.' 2>&1', $output, $return_var
        );
        if ($return_var) {
            foreach ($output as $message){
                throw new Exception($message);
            }
        }
        return $resizes;
    }
}