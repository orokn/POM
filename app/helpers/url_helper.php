<?php
   // Simple apge redirect
   function redirect($page) {
      header('location: ' . URLROOT . '/' . $page);
   }
