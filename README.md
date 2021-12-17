# Practica02-Sistema-de-pedidos-en-l-nea-en-PHP



CARRERA: Computación ASIGNATURA:Programación Hipermedial
NRO. PRÁCTICA: 2 TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL
OBJETIVO ALCANZADO:

Diseñar adecuadamente elementos gráficos en sitios web en Internet..
Crear sitios web aplicando estándares actuales.
Desarrollar aplicaciones web interactivas y amigables al usuario.

ACTIVIDADES DESARROLLADAS

El diagrama E-R de la solución propuesta.


Nombre de la base de datos:Practica2


Sentencias SQL de la estructura de la base de datos ́
--
-- Base de datos: practica2
--
--
-- Estructura de tabla para la tabla clientes
--
CREATE TABLE clientes (
id int(11) NOT NULL,
cedula varchar(10) NOT NULL,
nombre varchar(50) NOT NULL,
apellido varchar(50) NOT NULL,
direccion varchar(200) NOT NULL,
telefono varchar(15) NOT NULL,
correo_electronico varchar(50) NOT NULL,
contrasena varchar(20) NOT NULL,
rol varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Estructura de tabla para la tabla facturas
--
CREATE TABLE facturas (
id int(11) NOT NULL,
fac_det_id int(11) NOT NULL,
producto_id int(11) NOT NULL,
precio decimal(10,2) NOT NULL,
cantidad int(11) NOT NULL,
estado int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla factura_cabecera
--
CREATE TABLE factura_cabecera (
id int(11) NOT NULL,
cliente_id int(11) NOT NULL,
total decimal(10,2) NOT NULL,
fecha date NOT NULL,
estado int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Estructura de tabla para la tabla productos
--
CREATE TABLE productos (
id int(11) NOT NULL,
nombre varchar(50) NOT NULL,
descripcion varchar(300) NOT NULL,
precio decimal(10,2) NOT NULL,
restaurant_id int(11) NOT NULL,
estado int(11) NOT NULL DEFAULT 1,
foto varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Estructura de tabla para la tabla restaurantes
--
CREATE TABLE restaurantes (
id int(11) NOT NULL,
nombre varchar(50) CHARACTER SET utf8 NOT NULL,
direccion varchar(200) NOT NULL,
telefono varchar(20) NOT NULL,
correo_electronico varchar(50) NOT NULL,
contrasena varchar(20) NOT NULL,
rol varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
--
-- Estructura de tabla para la tabla usuario
--
CREATE TABLE usuario (
id int(11) NOT NULL,
correo_electronico varchar(50) NOT NULL,
contrasena varchar(150) NOT NULL,
estado int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

GitHub: elojaa6, https://github.com/elojaa6/Practica02-Sistema-de-pedidos-en-l-nea-en-PHP.


RESULTADO(S) OBTENIDO(S):
Se logro crear una página con los requisitos antes planteados, obteniendo los resultados esperados.


CONCLUSIONES: Se uso lo visto en clase e información aprendida autónomamente referente al lenguaje PHP y
HTML5,CSS para el desarrollo de la página, verificando su funcionamiento en navegadores como: Brave y Edge
dándonos conformidad en los resultados.


RECOMENDACIONES: Verificar La conectividad de la base de datos.
