<?php
/*
 //Creer un thumb avec 200px de large, la hauteur est automatique.
$thumb = new Image('directorio/imagen.jpg');
$thumb->width(200);
$thumb->save();

//Creer un thumb de 50%
$thumb = new Image('directorio/imagen.jpg');
$thumb->resize(50);
$thumb->save();

//Creer une portion de l'image originale
$thumb = new Image('directorio/imagen.jpg');
$thumb->crop(0,200);
$thumb->save();

//renommer
$thumb = new Image('directorio/imagen.jpg');
$thumb->name('imagen2');  $thumb->name($thumb->name().'_thumb');
$thumb->width(200);
$thumb->save();
*/
class Image {

    public $file;
    public $image_width;
    public $image_height;
    public $width;
    public $height;
    public $ext;
    public $types = array('','gif','png','jpg','jpeg');
    public $quality = 80;
    public $top = 0;
    public $left = 0;
    public $crop = false;
    public $type;

    function Image($name='')
    {
        $this->file = $name;
        $info = getimagesize($name);
        $this->image_width = $info[0];
        $this->image_height = $info[1];
        $info = pathinfo($name);
        $this->dir = $info['dirname'];
        $this->name = str_replace('.'.$info['extension'], '', $info['basename']);
        $this->ext = $info['extension'];
        //$this->type = $this->types[$info[2]];
        $this->type = $info['extension'];
    }

    function dir($dir='') {
        if(!$dir) return $this->dir;
        $this->dir = $dir;
    }

   function name($name='') {
        if(!$name) return $this->name;
        $this->name = $name;
    }

    function width($width='') {
        $this->width = $width;
    }

    function height($height='') {
        $this->height = $height;
    }

   function resize($percentage=50) {
        if($this->crop) {
            $this->crop = false;
            $this->width = round($this->width*($percentage/100));
            $this->height = round($this->height*($percentage/100));
            $this->image_width = round($this->width/($percentage/100));
            $this->image_height = round($this->height/($percentage/100));
        } else {
            $this->width = round($this->image_width*($percentage/100));
            $this->height = round($this->image_height*($percentage/100));
        }

    }

    function crop($top=0, $left=0) {
        $this->crop = true;
        $this->top = $top;
        $this->left = $left;
    }

    function quality($quality=80) {
        $this->quality = $quality;
    }

    function show() {
        $this->save(true);
    }

    function save($show=false) {

        if($show) @header('Content-Type: image/'.$this->type);

        if(!$this->width && !$this->height) {
            $this->width = $this->image_width;
            $this->height = $this->image_height;
        } elseif (is_numeric($this->width) && empty($this->height)) {
            $this->height = round($this->width/($this->image_width/$this->image_height));
        } elseif (is_numeric($this->height) && empty($this->width)) {
            $this->width = round($this->height/($this->image_height/$this->image_width));
        } else {
            if($this->width<=$this->height) {
                $height = round($this->width/($this->image_width/$this->image_height));
                if($height!=$this->height) {
                    $percentage = ($this->image_height*100)/$height;
                    $this->image_height = round($this->height*($percentage/100));
                }
            } else {
                $width = round($this->height/($this->image_height/$this->image_width));
                if($width!=$this->width) {
                    $percentage = ($this->image_width*100)/$width;
                    $this->image_width = round($this->width*($percentage/100));
                }
            }
        }

        if($this->crop) {
            $this->image_width = $this->width;
            $this->image_height = $this->height;
        }

        if($this->type=='jpeg' || $this->type=='jpg') $image = imagecreatefromjpeg($this->file);
        if($this->type=='png') $image = imagecreatefrompng($this->file);
        if($this->type=='gif') $image = imagecreatefromgif($this->file);

        $new_image = imagecreatetruecolor($this->width, $this->height);
        imagecopyresampled($new_image, $image, 0, 0, $this->top, $this->left, $this->width, $this->height, $this->image_width, $this->image_height);

        $name = $show ? null: $this->dir.DIRECTORY_SEPARATOR.$this->name.'.'.$this->ext;
        if($this->type=='jpeg' || $this->type=='jpg') imagejpeg($new_image, $name, $this->quality);
        if($this->type=='png') imagepng($new_image, $name);
        if($this->type=='gif') imagegif($new_image, $name);

        imagedestroy($image);
        imagedestroy($new_image);

    }

}
?>
