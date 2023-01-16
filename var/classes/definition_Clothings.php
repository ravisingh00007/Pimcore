<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - lookingFor [select]
 * - Brand [objectbricks]
 * - Size [objectbricks]
 * - image [image]
 * - fit [select]
 * - pattern_and_design [select]
 * - fabric [select]
 * - color [rgbaColor]
 * - category [classificationstore]
 * - price [input]
 * - discount [slider]
 * - description [input]
 * - seller [manyToOneRelation]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'fashion',
   'name' => 'Clothings',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1673703694,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
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
             'name' => 'category',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Men/Women/Kids',
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
                 'name' => 'lookingFor',
                 'title' => 'Looking For',
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
                    'key' => 'Men',
                    'value' => 'Men',
                  ),
                  1 => 
                  array (
                    'key' => 'Women',
                    'value' => 'Women',
                  ),
                  2 => 
                  array (
                    'key' => 'Kids',
                    'value' => 'Kids',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
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
                 'fieldtype' => 'objectbricks',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'allowedTypes' => 
                array (
                  0 => 'Brand',
                ),
                 'maxItems' => NULL,
                 'border' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'name' => 'Size',
                 'title' => 'Size',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'objectbricks',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'allowedTypes' => 
                array (
                  0 => 'Size',
                ),
                 'maxItems' => NULL,
                 'border' => false,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                 'name' => 'image',
                 'title' => 'Image',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'image',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'uploadPath' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'fit',
                 'title' => 'Fit',
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
                    'key' => 'loose fit',
                    'value' => 'loose fit',
                  ),
                  1 => 
                  array (
                    'key' => 'Slim fit',
                    'value' => 'Slim fit',
                  ),
                  2 => 
                  array (
                    'key' => 'Regular fit',
                    'value' => 'Regular fit',
                  ),
                  3 => 
                  array (
                    'key' => 'Oversized',
                    'value' => 'Oversized',
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
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'pattern_and_design',
                 'title' => 'Pattern _and _design',
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
                    'key' => 'Floral',
                    'value' => 'Floral',
                  ),
                  1 => 
                  array (
                    'key' => 'Striped',
                    'value' => 'Striped',
                  ),
                  2 => 
                  array (
                    'key' => 'Chequered',
                    'value' => 'Checked',
                  ),
                  3 => 
                  array (
                    'key' => 'Letter print',
                    'value' => 'Letter print',
                  ),
                  4 => 
                  array (
                    'key' => 'Cartoon',
                    'value' => 'Cartoon',
                  ),
                  5 => 
                  array (
                    'key' => 'Solid',
                    'value' => 'Solid',
                  ),
                  6 => 
                  array (
                    'key' => 'Geometric',
                    'value' => 'Geometric',
                  ),
                  7 => 
                  array (
                    'key' => 'Polka Dots',
                    'value' => 'Polka Dots',
                  ),
                  8 => 
                  array (
                    'key' => 'Animal',
                    'value' => 'Animal',
                  ),
                  9 => 
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
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'fabric',
                 'title' => 'Fabric',
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
                    'key' => 'Cotton',
                    'value' => 'Cotton',
                  ),
                  1 => 
                  array (
                    'key' => 'Silk',
                    'value' => 'Silk',
                  ),
                  2 => 
                  array (
                    'key' => 'Denim',
                    'value' => 'Denim',
                  ),
                  3 => 
                  array (
                    'key' => 'Rayon',
                    'value' => 'Rayon',
                  ),
                  4 => 
                  array (
                    'key' => 'wool',
                    'value' => 'wool',
                  ),
                  5 => 
                  array (
                    'key' => 'Georgette',
                    'value' => 'Georgette',
                  ),
                  6 => 
                  array (
                    'key' => 'Polyster',
                    'value' => 'Polyster',
                  ),
                  7 => 
                  array (
                    'key' => 'Nylon',
                    'value' => 'Nylon',
                  ),
                  8 => 
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
              7 => 
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
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Classificationstore::__set_state(array(
                 'name' => 'category',
                 'title' => 'Category',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'classificationstore',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'children' => 
                array (
                ),
                 'region' => NULL,
                 'layout' => NULL,
                 'width' => 0,
                 'height' => 0,
                 'maxTabs' => NULL,
                 'labelWidth' => 0,
                 'localized' => false,
                 'storeId' => 3,
                 'hideEmptyData' => true,
                 'disallowAddRemove' => false,
                 'referencedFields' => 
                array (
                ),
                 'fieldDefinitionsCache' => NULL,
                 'allowedGroupIds' => 
                array (
                ),
                 'activeGroupDefinitions' => 
                array (
                ),
                 'maxItems' => NULL,
                 'permissionView' => NULL,
                 'permissionEdit' => NULL,
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
             'name' => 'price',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Price',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'price',
                 'title' => 'Price',
                 'tooltip' => '',
                 'mandatory' => true,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => '10',
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                  0 => '10',
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Slider::__set_state(array(
                 'name' => 'discount',
                 'title' => 'Discount',
                 'tooltip' => '',
                 'mandatory' => true,
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
                 'minValue' => 10.0,
                 'maxValue' => 60.0,
                 'vertical' => false,
                 'increment' => NULL,
                 'decimalPrecision' => NULL,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'description',
                 'title' => 'Description',
                 'tooltip' => '',
                 'mandatory' => true,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'input',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'regexFlags' => 
                array (
                ),
                 'unique' => false,
                 'showCharCount' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'name' => 'seller',
                 'title' => 'Seller',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'manyToOneRelation',
                 'relationType' => true,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Seller',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'width' => '',
                 'assetUploadPath' => '',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
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
   'icon' => '/bundles/pimcoreadmin/img/twemoji/1f1e8.svg',
   'previewUrl' => '',
   'group' => 'Ecommerce Webpage',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' => 
  array (
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
