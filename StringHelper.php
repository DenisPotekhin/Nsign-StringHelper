<?php

namespace yii\helpers;

class StringHelper extends BaseStringHelper
{
  private $count;
  
  public function getShort($string, $count = 12)
  {
      return parent::truncateWords($string, $count, '...');
  }

}
