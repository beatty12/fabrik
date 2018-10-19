<?php
/**
 * Admin List Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2016  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<?php echo JHtml::_('bootstrap.startTabSet', 'detailsTabs', array('active' => 'details-publishing')); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-publishing', JText::_('COM_FABRIK_TEXT')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php foreach ($this->form->getFieldset('main') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
		    <?php foreach ($this->form->getFieldset('details2') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-filters', JText::_('COM_FABRIK_FILTERS')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php
		    foreach ($this->form->getFieldset('main_filter') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    foreach ($this->form->getFieldset('filters') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-nav', JText::_('COM_FABRIK_NAVIGATION')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php
		    foreach ($this->form->getFieldset('main_nav') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    foreach ($this->form->getFieldset('navigation') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-layout', JText::_('COM_FABRIK_LAYOUT')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php

		    ?>
        </fieldset>

        <fieldset class="form-horizontal">
            <div class="row-fluid">
                <div class="col-md-6">
                    <legend><?php echo FText::_('COM_FABRIK_TEMPLATES')?></legend>
				    <?php
				    foreach ($this->form->getFieldset('main_template') as $this->field) :
					    echo $this->loadTemplate('control_group');
				    endforeach;
				    foreach ($this->form->getFieldset('layout') as $this->field) :
					    echo $this->loadTemplate('control_group');
				    endforeach;
				    ?>
                </div>
                <div class="col-md-6">
                    <legend><?php echo FText::_('COM_FABRIK_PDF')?></legend>
				    <?php
				    foreach ($this->form->getFieldset('pdf') as $this->field) :
					    echo $this->loadTemplate('control_group');
				    endforeach;
				    ?>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-horizontal">
            <div class="row-fluid">
                <div class="col-md-6">
                    <legend><?php echo FText::_('COM_FABRIK_BOOTSTRAP_LIST_OPTIONS')?></legend>
				    <?php
				    foreach ($this->form->getFieldset('layout-bootstrap') as $this->field) :
					    echo $this->loadTemplate('control_group');
				    endforeach;
				    ?>
                </div>
                <div class="col-md-6">
                    <legend><?php echo FText::_('COM_FABRIK_TABS')?></legend>
				    <?php
				    foreach ($this->form->getFieldset('tabs') as $this->field) :
					    echo $this->loadTemplate('control_group');
				    endforeach;
				    ?>
                </div>
            </div>
        </fieldset>

    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-link', JText::_('COM_FABRIK_LINKS')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
			<?php
			foreach ($this->form->getFieldset('main_nav') as $this->field) :
				echo $this->loadTemplate('control_group');
			endforeach;
			foreach ($this->form->getFieldset('navigation') as $this->field) :
				echo $this->loadTemplate('control_group');
			endforeach;
			?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-notes', JText::_('COM_FABRIK_NOTES')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php foreach ($this->form->getFieldset('notes') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.addTab', 'detailsTabs', 'details-advanced', JText::_('COM_FABRIK_ADVANCED')); ?>
<div class="row">
    <div class="col-md-12">
        <fieldset class="form-horizontal">
		    <?php foreach ($this->form->getFieldset('advanced') as $this->field) :
			    echo $this->loadTemplate('control_group');
		    endforeach;
		    ?>
        </fieldset>
    </div>
</div>
<?php echo JHtml::_('bootstrap.endTab'); ?>

<?php echo JHtml::_('bootstrap.endTabSet'); ?>