<?php

class Config {

    private static $data = [];
    private static $file = ROOT . 'config.ini';

    public static function load() {
        if (!file_exists(self::$file)) {
            return false;
        }
        self::$data = parse_ini_file(self::$file);
        return true;
    }

    public static function get($key) {
        return self::$data[$key] ?? null;
    }

    public static function isInstalled() {
        return self::get('is_installed') === '1';
    }

    public static function create($db_host, $db_name, $db_user, $db_pass) {
        $content  = "[database]\n";
        $content .= "db_host = \"$db_host\"\n";
        $content .= "db_name = \"$db_name\"\n";
        $content .= "db_user = \"$db_user\"\n";
        $content .= "db_pass = \"$db_pass\"\n";
        $content .= "\n[app]\n";
        $content .= "is_installed = \"0\"\n";

        return file_put_contents(self::$file, $content) !== false;
    }

    public static function markInstalled() {
        if (!file_exists(self::$file)) {
            return false;
        }
        $content = file_get_contents(self::$file);
        $content = preg_replace('/is_installed\s*=\s*"0"/', 'is_installed = "1"', $content);
        return file_put_contents(self::$file, $content) !== false;
    }

}

?>