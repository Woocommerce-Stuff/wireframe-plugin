<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e005a614c615605ae3b968eb91c54c4
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MixaTheme\\Wireframe\\Plugin\\' => 
            array (
                0 => __DIR__ . '/../../..' . '/wireframe_dev/wireframe',
            ),
        ),
    );

    public static $classMap = array (
        'MixaTheme\\Wireframe\\Plugin\\Core_Container' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-container.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Container_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-container-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Controller' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-controller.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Controller_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-controller-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Enqueue' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-enqueue.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Enqueue_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-enqueue-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Language' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-language.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Language_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-language-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Module_Abstract' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-module-abstract.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Plugin' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-plugin.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Plugin_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-plugin-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Admin' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/admin/plugin-admin.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Admin_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/admin/plugin-admin-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_CPT' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/cpt/plugin-cpt.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_CPT_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/cpt/plugin-cpt-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_DBTables' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/dbtables/plugin-dbtables.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_DBTables_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/dbtables/plugin-dbtables-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Options' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/options/plugin-options.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Options_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/options/plugin-options-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Settings' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/settings/plugin-settings.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Settings_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/settings/plugin-settings-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Shortcode' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/shortcode/plugin-shortcode.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Shortcode_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/shortcode/plugin-shortcode-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Taxonomy' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/taxonomy/plugin-taxonomy.php',
        'MixaTheme\\Wireframe\\Plugin\\Plugin_Taxonomy_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/plugin/taxonomy/plugin-taxonomy-interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8e005a614c615605ae3b968eb91c54c4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8e005a614c615605ae3b968eb91c54c4::$classMap;

        }, null, ClassLoader::class);
    }
}
