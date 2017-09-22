<?php
  class model{
    private $header, $navigation, $body, $footer, $stylesheet;

    public function model(){
      $this->setStandard();
    }

    public function setHeader($src)     { $this->header = $src;}
    public function setNavigation($src) { $this->navigation = $src;}
    public function setBody($src)       { $this->body = $src;}
    public function setFooter($src)     { $this->footer = $src;}
    public function setStylesheet($src) { $this->stylesheet = $src;}
    public function noNavigation()      { $this->navigation = "";}

    public function setStandard(){
      $this->navigation = DIR_NAVIGATION;
      $this->header = DIR_HEADER;
      $this->footer = DIR_FOOTER;
    }

    public function display(){
      ($this->stylesheet == "")? false : include($this->stylesheet);
      ($this->header == "")? false : include($this->header);
?>
      <div class="row">
        <div class="<?php echo ($this->navigation == "")?'col-xs-0':'col-xs-3';?>">
<?php
      ($this->navigation == "")? false : include($this->navigation);
 ?>
        </div>
        <div class="<?php echo ($this->navigation == "")?'col-xs-12':'col-xs-9';?>">
          <div style="border-left:1px solid rgba(0,0,0,0.2);">
            
<?php
        ($this->body == "")? false : include($this->body);
 ?>
          </div>
        </div>
      </div>
<?php
      ($this->footer == "")? false : include($this->footer);
    }

  }

?>
