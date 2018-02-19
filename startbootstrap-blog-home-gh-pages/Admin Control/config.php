<?php
require_once __DIR__."/vendor/php-activerecord/php-activerecord/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory(__DIR__.'/models');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/blogapp'
       
     )
   );
});

?>
