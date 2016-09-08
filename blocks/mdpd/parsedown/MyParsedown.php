<?php
require_once('Parsedown.php');

class MyParsedown extends Parsedown {

    protected function blockTable($Line, array $Block = null) {

      $my_block = parent::blockTable($Line, $Block);

      if ($my_block == '') {
        return;
      }

      $my_block['element']['attributes'] = array('class' => 'table');

			return $my_block;

    }

  protected function inlineImage($Excerpt) {

    $my_params = parent::inlineImage($Excerpt);

    $my_params['element']['attributes']['class'] = 'img-thumbnail';

		return $my_params;

	}

}
