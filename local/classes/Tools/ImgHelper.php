<?php
namespace Tools;
/**
 * Class ImgHelper
 */
class ImgHelper
{
    public static function getWebpUrl($defaultImgUrl) {
        $new_extension = 'webp';
        $filename_from_url = parse_url($defaultImgUrl);
        $info = pathinfo($filename_from_url['path']);
        return $info['dirname'].'/'.$info['filename'].'.'.$new_extension;
    }
    
    public static function webpConvert2($file, $compression_quality = 80) {
        if (!file_exists($file)) {
            return false;
        }
        $file_type = exif_imagetype($file);
        $output_file = self::getWebpUrl($file);
        if (file_exists($output_file)) {
            return $output_file;
        }
        if (function_exists('imagewebp')) {
            switch ($file_type) {
                case '1':
                    $image = imagecreatefromgif($file);
                    break;
                case '2':
                    $image = imagecreatefromjpeg($file);
                    break;
                case '3':
                    $image = imagecreatefrompng($file);
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                    break;
                case '6':
                    $image = imagecreatefrombmp($file);
                    break;
                case '15':
                    return false;
                    break;
                case '16':
                    $image = imagecreatefromxbm($file);
                    break;
                default:
                    return false;
            }
            $result = imagewebp($image, $output_file, $compression_quality);
            if (false === $result) {
                return false;
            }
            imagedestroy($image);
            return $output_file;
        } elseif (class_exists('Imagick')) {
            $image = new Imagick();
            $image->readImage($file);
            if ($file_type === "3") {
                $image->setImageFormat('webp');
                $image->setImageCompressionQuality($compression_quality);
                $image->setOption('webp:lossless', 'true');
            }
            $image->writeImage($output_file);
            return $output_file;
        }
        return false;
    }
}
