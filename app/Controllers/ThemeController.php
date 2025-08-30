<?php

namespace App\Controllers;

use App\Models\ThemeModel;
use WP_REST_Response;

class ThemeController
{
    // GET /themes
    public function getAllThemes()
    {
        $themes = ThemeModel::get_all();
        return new WP_REST_Response($themes, 200);
    }

    // GET /themes/{id}
    public function getTheme($request)
    {
        $id = (int) $request['id'];
        $theme = ThemeModel::get($id);

        if (!$theme) {
            return new WP_REST_Response([
                'success' => false,
                'message' => 'Theme not found'
            ], 404);
        }

        return new WP_REST_Response($theme, 200);
    }

    // POST /themes
    public function createTheme($request)
    {
        $data = $request->get_json_params();

        if (empty($data['name']) || empty($data['color_gradient'])) {
            return new WP_REST_Response([
                'success' => false,
                'message' => 'Name and color_gradient are required'
            ], 400);
        }

        $id = ThemeModel::create($data);

        return new WP_REST_Response([
            'success' => true,
            'id' => $id
        ], 201);
    }

    // PUT /themes/{id}
    public function updateTheme($request)
    {
        $id = (int) $request['id'];
        $data = $request->get_json_params();

        $updated = ThemeModel::update($id, $data);

        if (!$updated) {
            return new WP_REST_Response([
                'success' => false,
                'message' => 'Update failed or no changes made'
            ], 400);
        }

        return new WP_REST_Response([
            'success' => true
        ], 200);
    }

    // DELETE /themes/{id}
    public function deleteTheme($request)
    {
        $id = (int) $request['id'];
        $deleted = ThemeModel::delete($id);

        if (!$deleted) {
            return new WP_REST_Response([
                'success' => false,
                'message' => 'Delete failed or theme not found'
            ], 400);
        }

        return new WP_REST_Response([
            'success' => true
        ], 200);
    }
}
