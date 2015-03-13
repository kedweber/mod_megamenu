<?php

class ModMegamenuHtml extends ModDefaultHtml
{
	public function display()
	{
        // We will count the menu's here.
        for($i = 1; $i < 7; $i++) {
            $name = $this->module->params->{'name-' . $i};
            $menu = $this->module->params->{'menu-' . $i};
            
            if(!empty($name) && !empty($menu)) {
                // Get the menu.
                $jmenu = JFactory::getApplication()->getMenu();
                $men = $jmenu->getItems(array('menutype'), array($menu));
                $count = count($jmenu->getItems(array('menutype', 'level'), array($menu, 1)));
                
                $this->assign('menu' . $i, $men);
                $this->assign('count' . $i, $count);
                $this->assign('featured' . $i, $this->getFeatured($i));
            }
        }
        
        $this->assign('attribs', $this->attribs);
        $this->assign('params', $this->module->params);
        
		return parent::display();
	}
    
    public function getFeatured($index) {
        $identifier = explode(':', $this->module->params->{'featured-' . $index});
        return $this->getService('com://site/' . KInflector::pluralize($identifier[0]) . '.model.' . KInflector::singularize($identifier[0]))->id($identifier[1])->getItem();
    }
}