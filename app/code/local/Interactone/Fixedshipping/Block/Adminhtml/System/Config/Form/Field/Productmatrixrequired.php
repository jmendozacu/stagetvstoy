<?php

/**
 * @category   Interactone
 * @package    Interactone_Fixedshipping
 */
class Interactone_Fixedshipping_Block_Adminhtml_System_Config_Form_Field_Productmatrixrequired
    extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected $_method  = 'productmatrix';
    protected $_display = 'Webshopapps_Productmatrix';

    /**
     * Get element ID of the dependent field's parent row
     *
     * @param object $element
     * @return String
     */
    protected function _getRowElementId($element)
    {
        return 'row_' . $element->getId();
    }

    /**
     * Override method to output our custom HTML with JavaScript
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        if (!Mage::helper('interactone_common')->isModuleInstalled('Webshopapps_Productmatrix')) {
            $element->setDisabled('disabled')
                ->setValue(0)
                ->setComment('Webshopapps_Productmatrix module required.');
        } else {
            if (!Mage::helper('interactone_common')->isModuleEnabled('Webshopapps_Productmatrix')) {
                $element->setDisabled('disabled')
                    ->setValue(0)
                    ->setComment('Webshopapps_Productmatrix module must be enabled.');
            } else {
                if (!Mage::getStoreConfigFlag('carriers/' . $this->_method . '/active')) {
                    $url = Mage::helper('adminhtml')->getUrl('*/system_config/edit', array('section' => 'carriers'));
                    $element->setDisabled('disabled')
                        ->setValue(0)
                        ->setComment(sprintf('%s <a href="%s">shipping method</a> is not enabled.', $this->_display, $url));
                } elseif (!Mage::getStoreConfigFlag('carriers/' . $this->_method . '/free_method') && $this->_method !== 'flatrate') {
                    $url = Mage::helper('adminhtml')->getUrl('*/system_config/edit', array('section' => 'carriers'));
                    $element->setDisabled('disabled')
                        ->setValue(0)
                        ->setComment(sprintf('%s <a href="%s">Free Method</a> must be set.', $this->_display, $url));
                }
            }
        }

        return parent::_getElementHtml($element);
    }
}