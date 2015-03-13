<?php

/**
 * ComEvents
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 * @category
 * @package
 * @subpackage
 */

defined('KOOWA') or die('Restricted Access');

class JFormFieldFeatured extends JFormField {
    protected $type = 'Featured';

    protected function getInput() {
        // I will have to generate a list.
        // But it has to consist of all the items which we will need.
        // Although this isn't really defined up front and changable per project.
        $articles = KService::get('com://admin/articles.model.articles')->getList()->getData();
        $events = KService::get('com://admin/events.model.events')->getList()->getData();
        
        $data = array();
        $data[] = array(
            'text' => 'articles',
            'items' => array_map(array($this, '_parseItems'), $articles)
        );

        $data[] = array(
            'text' => 'events',
            'items' => array_map(array($this, '_parseItems'), $events)
        );

        return JHtml::_('select.groupedlist', $data, $this->name);
    }
    
    private function _parseItems($item) {
        return array(
            'value' => $item['type'] . ':' . $item['id'],
            'text' => $item['title']
        );
    }
}