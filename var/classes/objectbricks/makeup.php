<?php

/**
 * Fields Summary:
 * - faceCategory [select]
 * - eyeCategory [select]
 * - format [select]
 * - lipCategory [select]
 * - Brand [select]
 * - color [rgbaColor]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'makeup',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Beauty',
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Face',
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
                 'name' => 'faceCategory',
                 'title' => 'FaceCategory',
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
                  3 => 
                  array (
                    'key' => 'Sindoor',
                    'value' => 'Sindoor',
                  ),
                  4 => 
                  array (
                    'key' => 'Blushes',
                    'value' => 'Blushes',
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
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Eye',
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
                 'name' => 'eyeCategory',
                 'title' => 'EyeCategory',
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
                  3 => 
                  array (
                    'key' => 'Eye Lashes',
                    'value' => 'Eye Lashes',
                  ),
                  4 => 
                  array (
                    'key' => 'Eye Shadow',
                    'value' => 'Eye Shadow',
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
                 'name' => 'format',
                 'title' => 'Format',
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
                    'key' => 'Crayon',
                    'value' => 'Crayon',
                  ),
                  1 => 
                  array (
                    'key' => 'Pencil',
                    'value' => 'Pencil',
                  ),
                  2 => 
                  array (
                    'key' => 'Stick',
                    'value' => 'Stick',
                  ),
                  3 => 
                  array (
                    'key' => 'Striped',
                    'value' => 'Striped',
                  ),
                  4 => 
                  array (
                    'key' => 'Gel',
                    'value' => 'Gel',
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
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Layout',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Lip',
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
                 'name' => 'lipCategory',
                 'title' => 'LipCategory',
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
                  4 => 
                  array (
                    'key' => 'Lip glosses',
                    'value' => 'Lip glosses',
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
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
      )),
      1 => 
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
          4 => 
          array (
            'key' => 'Pond\'s',
            'value' => 'Pond\'s',
          ),
          5 => 
          array (
            'key' => 'Swiss beauty',
            'value' => 'Swiss beauty',
          ),
          6 => 
          array (
            'key' => '',
            'value' => '',
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
      Pimcore\Model\DataObject\ClassDefinition\Data\RgbaColor::__set_state(array(
         'name' => 'color',
         'title' => 'Color',
         'tooltip' => '',
         'mandatory' => false,
         'noteditable' => false,
         'index' => false,
         'locked' => false,
         'style' => '',
         'permissions' => NULL,
         'datatype' => 'data',
         'fieldtype' => 'rgbaColor',
         'relationType' => false,
         'invisible' => false,
         'visibleGridView' => false,
         'visibleSearch' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'width' => '',
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
      'fieldname' => 'selectCategory',
    ),
  ),
));
