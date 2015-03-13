<?php

echo KService::get('mod://site/megamenu.html')
    ->module($module)
    ->attribs($attribs)
    ->display();