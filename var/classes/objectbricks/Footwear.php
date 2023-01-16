<?php

/**
 * Fields Summary:
 * - brand [select]
 * - material [select]
 * - ageGroup [slider]
 * - size [numeric]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Footwear',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Footwear',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'brand',
             'title' => 'Brand',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Bata',
                'value' => 'Bata',
              ),
              1 => 
              array (
                'key' => 'Puma',
                'value' => 'Puma',
              ),
              2 => 
              array (
                'key' => 'Adidas',
                'value' => 'Adidas',
              ),
              3 => 
              array (
                'key' => 'Sparx',
                'value' => 'Sparx',
              ),
              4 => 
              array (
                'key' => 'Campus',
                'value' => 'Campus',
              ),
              5 => 
              array (
                'key' => 'Nike',
                'value' => 'Nike',
              ),
              6 => 
              array (
                'key' => 'RedTape',
                'value' => 'RedTape',
              ),
              7 => 
              array (
                'key' => 'Asian',
                'value' => 'Asian',
              ),
              8 => 
              array (
                'key' => 'RedChief',
                'value' => 'RedChief',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'material',
             'title' => 'Material',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Canvas',
                'value' => 'Canvas',
              ),
              1 => 
              array (
                'key' => 'Cotton',
                'value' => 'Cotton',
              ),
              2 => 
              array (
                'key' => 'Denim',
                'value' => 'Denim',
              ),
              3 => 
              array (
                'key' => 'Fur',
                'value' => 'Fur',
              ),
              4 => 
              array (
                'key' => 'Leather',
                'value' => 'Leather',
              ),
              5 => 
              array (
                'key' => 'Rubber',
                'value' => 'Rubber',
              ),
              6 => 
              array (
                'key' => 'Nylon',
                'value' => 'Nylon',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Slider::__set_state(array(
             'name' => 'ageGroup',
             'title' => 'AgeGroup',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'slider',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'height' => '',
             'minValue' => 2.5,
             'maxValue' => 13.0,
             'vertical' => false,
             'increment' => NULL,
             'decimalPrecision' => NULL,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'name' => 'size',
             'title' => 'Size',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'numeric',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Footwear',
      'fieldname' => 'select',
    ),
  ),
));
