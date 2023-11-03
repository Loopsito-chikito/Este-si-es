<?php
namespace App\Controllers\Header;
use App\Models\Mdl\MdlModel;
final class headerController
{
  private $result
  private $model

  public function __construct() 
  {
    $this->result = null;
  }
  public function  showMdls()
  {
   $this->model=new MdlModel; 
  }
} 
?>