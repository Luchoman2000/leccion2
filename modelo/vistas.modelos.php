
<?php

class VistasModelo
{
    protected function MdlMostrarVistas($vistas)
    {
        $listaBlanca = ["404", "calendar", "gallery", "widgets", "inicio", "kanban"];
        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./vista/contenido/" . $vistas . "-view.php")) {
                $contenido = "./vista/contenido/" . $vistas . "-view.php";
            } else {
                $contenido = "404";
            }
        }
        return $contenido;
    }
}
