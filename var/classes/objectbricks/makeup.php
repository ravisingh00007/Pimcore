<?php

/**
 * Fields Summary:
 * - facemakeup [multiselect]
 * - LipMakeup [multiselect]
 * - EyeMakeup [multiselect]
 * - Brand [multiselect]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'makeup',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'facemakeup',
             'title' => 'Facemakeup',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'Bronzer',
                'value' => 'Bronzer',
              ),
              1 => 
              array (
                'key' => 'Primer',
                'value' => 'Primer',
              ),
              2 => 
              array (
                'key' => 'Concealer',
                'value' => 'Concealer',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'LipMakeup',
             'title' => 'LipMakeup',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'LipBalm',
                'value' => 'LipBalm',
              ),
              1 => 
              array (
                'key' => 'Lipstick',
                'value' => 'Lipstick',
              ),
              2 => 
              array (
                'key' => 'LipLiner',
                'value' => 'LipLiner',
              ),
              3 => 
              array (
                'key' => 'LipStain',
                'value' => 'LipStain',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'EyeMakeup',
             'title' => 'Eye Makeup',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'Eyeliner',
                'value' => 'Eyeliner',
              ),
              1 => 
              array (
                'key' => 'Kajal',
                'value' => 'Kajal',
              ),
              2 => 
              array (
                'key' => 'Mascara',
                'value' => 'Mascara',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
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
             'fieldtype' => 'multiselect',
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
                'key' => 'LakeMe',
                'value' => 'LakeMe',
              ),
              1 => 
              array (
                'key' => 'ColorBar',
                'value' => 'ColorBar',
              ),
              2 => 
              array (
                'key' => 'Biotique',
                'value' => 'Biotique',
              ),
              3 => 
              array (
                'key' => 'Vedy',
                'value' => 'Vedy',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
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
      'classname' => 'Beauty',
      'fieldname' => 'makeup',
    ),
  ),
));
