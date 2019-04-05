<br>
<?php
CONST BR= '<br/>';
class Buttons{

    protected $attr;
    public $placeholder=[];
    public function index($attr,Array $placeholder){
        if(count($placeholder)){
            foreach($placeholder as $button_name){
                echo "<button $attr>
                        $button_name
                    </button><br/>";
            }
        }
    }
}
class Anchor{
    protected $attributes;
    protected $placeholder;
    public function index($attributes,$placeholder){
        echo "<br/><a $attributes>$placeholder</a>";
    }
} 
/**
 * Button
 */
$button = new Buttons();
$button->index('class="button" display="none"', ['My Button']);
/**
 * Anchor Tag
 */
$ankor= new Anchor();
$ankor->index('href="https://www.google.com" style="border:2px solid black;padding:10px;"', 'Google');
?>
<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        <?php $google= $ankor->index('href="https://www.google.com" style="border:2px solid black;padding:10px;"', 'Google');
 ?>
      </h1>
      <p class="subtitle"><br>
        My first website with <strong>Bulma</strong>!
      </p>
    </div>
  </section>
  </body>
</html>
