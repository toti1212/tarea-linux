#LAMP en Vagrant

En esta tarea realizaremos una plataforma tipo LAMP (`Linux` `Apache` `Mysql` `PHP`) en base a tres equipos descripta en Vagrant para provisionar y aprovisionar 100% de acuerdo a los siguieintes

##Requisitos

###A) Tres hosts

server con 512 de RAM en el que correrá servicios web (`apache` o `nginx`) y php, para una plataforma wordpress
datos con 256 de RAM que tendrá los servicios MySQL
control con 128 RAM

###B) Configuración de Red

server tendrá presentado en el equipo real el puerto 8080 `(localhost:8080)` que será forward al puerto 80 del web
Los tres equipos tendrán una red interna para sus conexiones de aplicación
Los tres equipos serán accedidos por nombre (Por ejemplo: ping server  ó  ping control)

###C) Usuarios

control tendrá un usuario `'respaldo'` que podrá acceder como `'root'` a los otros dos equipos sin clave con el comando `'ssh server'`  y 'ssh datos' desde reapaldo@control.
los tres equipos tendrán un usuario 'operador' con clave `'password'` que podrá escalar privilegios a root mediante sudo

###D) Seguridad

Los servicios SSH de los equipos server y datos deben estar esuchando en el puerto 4000
Todos los servicios SSH deben tener configurado `'PermitRootLogin without-password'`

###E) Aplicación

El Wordpress deberá estár instalado y 100% funcional con un blog básico cuyo título será el nombre apellido de cada uno de los participantes del grupo, por ejemplo: `"Pedro Picapiedra, Wilma Picapiedra, Pablo Marmol"`

##Entregable

El entregable será mediante un repositorio git público (en `github`, `gitlab`, `bitbucket` u otro), para lo que se deberá subir la URL de para clonar el repositorio.

En particular se pide un archivo `'Vagrantfile'`, una carpeta `'provision'` que deberá tener los script y archivos necesarios para levantar el 100% del entorno.

##Revisión

La revisión de la tarea será mediante clonado y `'vagrant up'` para luego verificar que quedó todo funcional de acuerdo a los requisitos.