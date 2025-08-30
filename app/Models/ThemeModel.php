<?php

namespace App\Models;

class ThemeModel
{
    public static $table_name;

    public static function init()
    {
        global $wpdb;
        self::$table_name = $wpdb->prefix . 'themes';
    }

    // Create table on plugin activation
    public static function create_table()
    {
        self::init();
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE " . self::$table_name . " (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            description text NOT NULL,
            color_gradient varchar(255) NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    // CRUD Operations
    public static function get_all()
    {
        global $wpdb;
        return $wpdb->get_results("SELECT * FROM " . self::$table_name);
    }

    public static function get($id)
    {
        global $wpdb;
        return $wpdb->get_row($wpdb->prepare("SELECT * FROM " . self::$table_name . " WHERE id = %d", $id));
    }

    public static function create($data)
    {
        global $wpdb;
        $wpdb->insert(self::$table_name, [
            'name' => $data['name'],
            'description' => $data['description'],
            'color_gradient' => $data['color_gradient']
        ]);
        return $wpdb->insert_id;
    }

    public static function update($id, $data)
    {
        global $wpdb;
        return $wpdb->update(self::$table_name, $data, ['id' => $id]);
    }

    public static function delete($id)
    {
        global $wpdb;
        return $wpdb->delete(self::$table_name, ['id' => $id]);
    }
}

ThemeModel::init();
