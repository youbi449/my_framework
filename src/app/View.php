<?php

namespace App;

//TODO: Handle Error 
class View
{
    public function render($pathFile, $data = [])
    {
        $realPath = str_replace('\\', '/', __DIR__ . "\\..\\Views\\" . $pathFile . '.php');

        try {
            ob_start();
            include $realPath;
            $dataTemplate = $this->parseTemplate(ob_get_clean(), $data);
            echo $dataTemplate;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function parseTemplate($template, $data = [])
    {
        foreach ($data as $key => $value) {
            if (!is_array($value)) {
                $regex = "/{{2}" . $key . "\}{2}/";
                $template = preg_replace($regex, $value, $template);
            } else {
                return 'Array not allowed as params';
            }
        }
        return $template;
    }
}
