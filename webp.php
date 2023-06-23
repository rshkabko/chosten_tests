<?php
ini_set('max_execution_time', '0');
ini_set("memory_limit",-1);

var_dump(WEBP::init('.'));


class WEBP {
    public static $patterns = array(
        '/.*\.jpg/',
        '/.*\.jpeg/',
        '/.*\.png/',
        );
    
    public static function init($folder = '.')
    {
        //Для проверки
        self::getWebPPath();
        
        $files = self::getFiles($folder);
        $new_files = array();
        
        if(empty($files))
            return false;
        
        foreach($files as $file)
            if( is_file($file) && !file_exists($file . '.webp') ) {
                $new_files[] = $file;
                self::exec($file);
            }
        
        return $new_files; 
    }
    
    /**
     * Возвращаем все файлы по предустановленным патерном
     */  
    public static function getFiles($folder = '.')
    {
        $files = array();
        foreach(self::$patterns as $pattern)
            foreach(self::rsearch($folder, $pattern) as $file)
                $files[] = $file;
                
        return $files;
    }
    
    /**
     * Рекурсивный поиск файлов по патерну
     */
    public static function rsearch($folder, $pattern)
    {
        $dir = new RecursiveDirectoryIterator($folder);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
        $fileList = array();
        foreach($files as $file) {
            $fileList = array_merge($fileList, $file);
        }
        return $fileList;
    }
    
    /**
    *   Выполняем команду
    */
    public static function exec( $file )
    {
        return exec( self::getWebPPath() . ' -quiet -q 90 "' . $file . '" -o "' . $file . '.webp"' );
    }
    
    public static function getWebPPath()
    {
        return 'cwebp';
    }
}
