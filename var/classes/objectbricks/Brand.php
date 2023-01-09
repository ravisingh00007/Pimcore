<?php

/**
 * Fields Summary:
 * - Brand [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Brand',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => '',
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
             'name' => 'Brand',
             'title' => 'Brand',
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
                'key' => 'Adidas',
                'value' => 'Adidas',
              ),
              1 => 
              array (
                'key' => 'U.S. Polo',
                'value' => 'U.S. Polo',
              ),
              2 => 
              array (
                'key' => 'Allen Solly',
                'value' => 'Allen Solly',
              ),
              3 => 
              array (
                'key' => 'Bewakoof',
                'value' => 'Bewakoof',
              ),
              4 => 
              array (
                'key' => 'Nike',
                'value' => 'Nike',
              ),
              5 => 
              array (
                'key' => 'Dressberry',
                'value' => 'Dressberry',
              ),
              6 => 
              array (
                'key' => 'Ban Martin',
                'value' => 'Ban Martin',
              ),
              7 => 
              array (
                'key' => 'Peter England',
                'value' => 'Peter England',
              ),
              8 => 
              array (
                'key' => 'Levi\'s',
                'value' => 'Levi\'s',
              ),
              9 => 
              array (
                'key' => 'Puma',
                'value' => 'Puma',
              ),
              10 => 
              array (
                'key' => 'RedTape',
                'value' => 'RedTape',
              ),
              11 => 
              array (
                'key' => 'Cantabail',
                'value' => 'Cantabail',
              ),
              12 => 
              array (
                'key' => 'Arrow',
                'value' => 'Arrow',
              ),
              13 => 
              array (
                'key' => 'Raymond',
                'value' => 'Raymomd',
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
      'classname' => 'Fashion',
      'fieldname' => 'Brand',
    ),
  ),
));
