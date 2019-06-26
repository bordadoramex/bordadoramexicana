<?php
/* Clase para ejecutar las consultas a la Base de Datos*/
//self: se utilizo para acceder a una constante o metodo de una clase.
//link nombre del enlace.
//target el objetivo del enlace.

class ejecutarSQL {
    
     public static $LINK=false;
    public static function conectar(){
        if(false===$con=new mysqli(SERVER,USER,PASS,BD)){
            die("Error en el servidor, verifique sus datos");
        }
     self::$LINK=$con;
    }
    /* Clase para las consultas a la Base de Datos*/
    public static function consultar($query) {
        if(!self::$LINK){
            self::conectar();
        }
        if (!$consul = self::$LINK->query($query)) {
            die(self::$LINK->error.'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }

 
	}//cierra class ejecutarSQL
	
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{
    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("insert into $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
        }
        return $consul;
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("delete from $tabla where $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla $tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("update $tabla set $campos where $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
        }
        return $consul;
    }
}
