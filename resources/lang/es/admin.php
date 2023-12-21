<?php

return [
    'page_title_suffix' => 'Banco Alimentos',

    'operation' => [
        'succeeded' => 'Operación exitosa',
        'failed' => 'Operación fallida',
        'not_allowed' => 'Operación no permitida',
        'publish_now' => 'Publicar ahora',
        'unpublish_now' => 'Despublicar ahora',
        'publish_later' => 'Publicar después',
    ],

    'dialogs' => [
        'duplicateDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas duplicar este item?',
            'yes' => 'Sí, duplícalo.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item duplicado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'activateDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas activar este item?',
            'yes' => 'Sí, activar.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item activado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'deactivateDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas desactivar este item?',
            'yes' => 'Sí, desactivar.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item desactivado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'deleteDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas borrar este item?',
            'yes' => 'Sí, borrar.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item borrado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'publishNowDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas publicar este item ahora?',
            'yes' => 'Sí, publicar ahora.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item publicado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'unpublishNowDialog' => [
            'title' => '¡Atención!',
            'text' => '¿Deseas despublicar este item ahora?',
            'yes' => 'Sí, despublicar ahora.',
            'no' => 'No, cancelar.',
            'success_title' => '¡Éxito!',
            'success' => 'Item despublicado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
        'publishLaterDialog' => [
            'text' => 'Por favor, introduce la fecha cuando el item debe ser publicado:',
            'yes' => 'Guardar',
            'no' => 'Cancelar',
            'success_title' => '¡Éxito!',
            'success' => 'Item guardado correctamente.',
            'error_title' => '¡Error!',
            'error' => 'Ha ocurrido un error.',
        ],
    ],

    'btn' => [
        'save' => 'Guardar',
        'cancel' => 'Cancelar',
        'edit' => 'Editar',
        'delete' => 'Borrar',
        'search' => 'Buscar',
        'new' => 'Nuevo',
        'saved' => 'Guardado',
        'export' => 'Exportar',
        'import' => 'Importar',
        'filter' => 'Filtrar',
        'back' => 'Volver',
        'home' => 'Ir a inicio',
    ],

    'index' => [
        'no_items' => 'No se ha encontrado ningún registro.',
        'try_changing_items' => 'Prueba cambiando los filtros o añade uno nuevo',
    ],

    'listing' => [
        'selected_items' => 'Items seleccionados',
        'uncheck_all_items' => 'Desmarcar todos',
        'check_all_items' => 'Marcar todos',
    ],

    'forms' => [
        'select_a_date' => 'Selecciona fecha',
        'select_a_time' => 'Selecciona hora',
        'select_date_and_time' => 'Selecciona fecha y hora',
        'choose_translation_to_edit' => 'Elige traducción a editar:',
        'manage_translations' => 'Gestionar traducciones',
        'more_can_be_managed' => '({{ otherLocales.length }} más pueden ser gestionadas)',
        'currently_editing_translation' => 'Actualmente editando {{ this.defaultLocale.toUpperCase() }} (defecto) traducciones',
        'hide' => 'Oculta traducciones',
        'select_an_option' => 'Selecciona una opción',
        'select_options' => 'Selecciona opciones',
        'publish' => 'Publicar',
        'history' => 'Historial',
        'created_by' => 'Creado por',
        'updated_by' => 'Actualizado por',
        'created_on' => 'Creado en',
        'updated_on' => 'Actualizado en'
    ],

    'placeholder' => [
        'search' => 'Buscar'
    ],

    'pagination' => [
        'overview' => 'Mostrando items de {{ pagination.state.from }} a {{ pagination.state.to }} de un total de {{ pagination.state.total }} items.'
    ],

    'logo' => [
        'title' => 'Banco de alimentos',
    ],

    'profile_dropdown' => [
        'account' => 'Cuenta',
    ],

    'sidebar' => [
        'content' => 'Contenido',
        'settings' => 'Ajustes',
    ],

    'media_uploader' => [
        'max_number_of_files' => '(max no. de ficheros: :maxNumberOfFiles ficheros)',
        'max_size_pre_file' => '(max tamaño por fichero: :maxFileSize MB)',

        'private_title' => 'Los ficheros no son accesibles por public',
    ],

    'footer' => [
        'powered_by' => 'Desarrollado por',
    ]

];