    <?php

return [

    /*
    |--------------------------------------------------------------------------
    | Título que aparece en la pestaña
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el título predeterminado  que aparece en la pestaña
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'vipolshop |',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon - icono que aparece en la barra de pestañas
    |--------------------------------------------------------------------------
    |
    | Aquí puede activar el favicon.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logotipo del Menu
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el logo de su panel de administración.
    | Aquel que aparece en el menu lateral izquierdo en la parte superior
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Vipolshop</b>CV',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | Menu de Usuario (Lado superior derecha)
    |--------------------------------------------------------------------------
    |
    | Aquí puede activar y cambiar el menú de usuario.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true, // Si desea habilitar el menú de usuario en lugar del botón de cierre de sesión predeterminado
    'usermenu_header' => true,  // Si desea habilitar la sección de encabezado dentro del menú de usuario.
    'usermenu_header_class' => 'bg-primary', //Clases adicionales para la sección de encabezado dentro del menú de usuario.
    'usermenu_image' => true, //Si desea habilitar la imagen de usuario para el menú de usuario y la pantalla de bloqueo.
    'usermenu_desc' => true, // Si desea habilitar la descripción del usuario para el menú de usuarios.
    'usermenu_profile_url' => true, // Si se debe habilitar si la URL del perfil de usuario se puede establecer dinámicamente para el usuario en lugar de utilizar la opción de configuración .

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Aquí cambiamos el diseño de su panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,    //Activa/deshabilita el diseño de solo navegación superior. No se puede usar con .layout_boxed
    'layout_boxed' => null,     //Habilita/deshabilita el diseño en caja que estira el ancho solo a 1250px. No se puede usar con .layout_topnav
    'layout_fixed_sidebar' => true, //Activa/desactiva el modo de barra lateral fija.
    'layout_fixed_navbar' => true,  //Activa/desactiva el modo de barra de navegación fija (navegación superior).
    'layout_fixed_footer' => null,  //Activa/deshabilita el modo de pie de página fijo.

    /*
    |--------------------------------------------------------------------------
    | Clases de vistas de autenticación
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el aspecto y el comportamiento de las vistas de autenticación.
    | LOGIN y REGISTRO
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',

    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Clases del panel de administración
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el aspecto y el comportamiento del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-info elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar (Barra Lateral)
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la barra lateral del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Aquí podemos modificar la configuración de la URL del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Elementos de menú
    | ------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar la barra lateral / navegación superior del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
        [
            'text'   => 'Buscar',
            'search' => true,
            'topnav' => true,
        ],
        [
            'text'  =>  'blog',
            'url'   =>  '#',
            'can'   =>  'manage-blog',
        ],
        [
            'text'  =>  'Home',
            'url'   =>  'home',
            'icon'  =>  'fas fa-fw fa-tachometer-alt',
        ],
        ['header' => 'Almacen'],
        [
            'text' => 'Productos',
            'url'  => 'productos',
            'icon' => 'fas fa-fw fa-tshirt',
        ],
        [
            'text' => 'Compras',
            'url'  => 'compras',
            'icon' => 'fas fa-fw fa-cart-arrow-down',
        ],
        [
            'text' => 'Ventas',
            'url'  => 'ventas',
            'icon' => 'fas fa-fw fa-shopping-cart',
        ],
        ['header' => 'Administracion'],
        [
            'text' => 'Proveedores',
            'url'  => 'proveedores',
            'icon' => 'fas fa-fw fa-hands-helping',
        ],
        [
            'text' => 'Clientes',
            'url'  => 'clientes',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'Colores',
            'url'  => 'colores',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'Tallas',
            'url'  => 'tallas',
            'icon' => 'fas fa-fw fa-user',
        ],
        ['header' => 'Reportes'],
        [
            'text'  =>  'Facturas',
            'url'   =>  'facturas',
            'icon'  =>  'fas fa-fw fa-file',
        ],
        [
            'text' => 'Categorias',
            'url'  => 'categorias',
            'icon' => 'fas fa-fw fa-hands-helping',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Filtros de menú
    | ------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar los filtros de menú del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Inicialización de complementos (Plugins Initialization)
    | ------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar los complementos utilizados dentro del panel de administración.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration#91-plugins
    |
    */


    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Toastr' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.min.css',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    | ------------------------------------------------- -------------------------
    |
    | Aquí podemos habilitar el soporte de Livewire.
    |
    | Para obtener instrucciones más detalladas, puede mirar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => true,
    //estaba en false, pero devido a que al crear el proyecto
    //se creo con JetStream (que es una API de autenticacion con todos los recursos necesarios)
];
