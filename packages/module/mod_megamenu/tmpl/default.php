<? defined('KOOWA') or die('Protected Resource'); ?>

<div class="row">
    <div class="navbar main-menu navbar-default hidden-xs hidden-sm">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="navbar-brand">
                    <a href="<?= JUri::root(); ?>">
                        <img class="logo" src="<?= JUri::base();?>/templates/cta/images/cta.svg">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-main navbar-left">
                    <li>
                        <a href="<?= JUri::root(); ?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>

                    <? for($i = 1; $i < 7; $i++) : ?>
                        <? if(!empty(${'menu' . $i})) : ?>
                            <? $menu = ${'menu' . $i}; ?>
                            
                            <li>
                                <span style="border-bottom-color: <?= $params->{'color-' . $i}; ?>"><?= $params->{'name-' . $i}; ?></span>
                                
                                <div class="submenu">
                                    <? $lastitem = false; ?>
                                    <h1 class="title" style="color: <?= $params->{'color-' . $i}; ?>">
                                        <?= $params->{'name-' . $i}; ?>
                                        
                                        <small>
                                            <?= $params->{'description-' . $i}; ?>
                                        </small>
                                    </h1>
                                    
                                    <? $width_left = 12 - (${'count' . $i} * 3); ?>
                                    <? foreach($menu as $item) : ?>
                                        <? if($item->level == 1) : ?>
                                            <? if($lastitem) : ?>
                                                </ul>
                                            <? endif; ?>
                            
                                            <ul class="col-md-3">
                                                <?= @template('item', array('item' => $item)); ?>
                                        <? endif; ?>
                        
                                        <? if($item->level == 2) : ?>
                                            <?= @template('item', array('item' => $item)); ?>
                                        <? endif; ?>
                        
                                        <? $lastitem = $item; ?>
                                    <? endforeach; ?>
                                    </ul>

                                    <? $featured = ${'featured' . $i}; ?>
                                    <? if($featured) : ?>
                                        <div class="col-md-3 featured">
                                            <h1 class="title">
                                                <?= @text('Featured'); ?>
                                            </h1>
                                            
                                            <?= KService::get('com://admin/cloudinary.controller.image')->path(($featured->image ? $featured->image : ''))->attribs(array('class' => 'img-responsive'))->display(); ?>
                                            
                                            <?= $featured->title; ?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </li>
                        <? endif; ?>
                    <? endfor; ?>
                </ul>

                <form action="<?= JRoute::_('index.php?option=com_kutafuta&view=terms'); ?>" method="get" id="form_search" class="navbar-form navbar-left">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="submit" class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                        <input type="text" name="search" class="form-control input-search" placeholder="<?= @text('Search'); ?>">
                    </div>
                </form>

                <?
                $document = JFactory::getDocument();
                $renderer = $document->loadRenderer('modules');
                $position = "language";
                $options = array('style' => 'raw');
                echo $renderer->render($position, $options, null);
                ?>
            </div>
        </div>
    </div>
</div>