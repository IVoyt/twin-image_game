<?php

  class C_404NotFound extends Main {

    function __construct ($name) {
      parent::__construct($name);
      $this->index();
    }

    function index() {
      $text = $this->getMessages();

      $this->data['text']['not_found'] = $text['404_NotFound'];
      $this->render();
    }
  }