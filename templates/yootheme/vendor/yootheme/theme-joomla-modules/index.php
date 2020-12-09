<?php

$config = [

    'name' => 'yootheme/joomla-modules',

    'main' => 'YOOtheme\\Theme\\Modules',

    'inject' => [
        'db' => 'app.db',
        'view' => 'app.view',
        'styles' => 'app.styles',
        'builder' => 'app.builder',
        'scripts' => 'app.scripts',
        'customizer' => 'theme.customizer',
    ],

    'routes' => function ($routes) {

        $routes->get('/modules', function ($response) {
            return $response->withJson($this->modules);
        });

        $routes->get('/module', function ($id, $response) {

            $query = 'SELECT id, content FROM @modules WHERE id = :id';
            $module = $this->db->fetchObject($query, ['id' => $id]);
            $module->content = $this->builder->load($module->content);

            return $response->withJson($module);
        });

        $routes->post('/module', function ($id, $content, $response) {

            $this->db->update('@modules', [
                'content' => json_encode($content),
            ], ['id' => $id]);

            return $response->withJson(['message' => 'success']);
        });

        $routes->get('/positions', function ($response) {
            return $response->withJson($this->positions);
        });

    },

    'config' => [

        'section' => [
            'title' => 'Modules',
            'priority' => 40,
        ],

        'fields' => [],

        'defaults' => [],

    ],

];

return defined('_JEXEC') ? $config : false;
