<?php
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequuntur eveniet nisi in magnam fuga ipsam sapiente, illum dignissimos quas alias temporibus quia nulla laudantium sunt. Aliquid veniam odio unde.';
        $bad_word = isset($_GET['bad_word']) ? $_GET['bad_word'] : '';
        
        $family_friendly_text = str_replace($bad_word, '***', $text);