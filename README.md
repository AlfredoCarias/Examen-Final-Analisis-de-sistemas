# Examen-Final-Analisis-de-sistemas
# Indice
* [Personal y roles del proyecto](#roles)
* [Descripción de la metodología de trabajo](#DESCRIPCION)
    - [Introduccion](#INTRODUCCION)
    - [Proposito del proyecto](#PROPOSITO)
    - [Funcionalidades del sistema](#funcio)
    - [Diagrama Relacional del sistema](#relacion)
    - [Proposito del documento](#PROPOSITODOC)
    - [Alcance](#ALCANCE)
* [Metodologia seleccionada](#METODOLOGIA)
    - [En que consiste la metodologia Scrum](#SCRUM)
    - [Por que se escogio la metodologia Scrum](#PORQUE)
* [Descripción General del proyecto](#GENERAL)
    - [Fundamentacion](#FUNDAMENTO)
    - [Valores de trabajo](#VALORES)
* [Calendario de actividades](#ACTIVIDADES)
* [Artefactos](#Artefactos)
    - [Pila de producto](#pilaprod)
    - [Pila de sprint](#pilasprint)
* [Cuadros sobre el desarrollo del proyecto](#CUADROS)
* [Desarrollo de sprint](#DESPRINT)
* [Diseño del sistema](#DIAGRAMA)
    - [Diseño Cliente](#cliente)
    - [Diseño Administrador](#admin)
* [Anexos](#anexos)

## ` `Personal y roles del proyecto<a name="roles"/>


|  Integrante       | Carnet  	    | Rol  	        |
|---	            |---	        |---	        |
|  Alfredo Loyo 	| 18-3306 	    | Product Owner/Scrum Master	|
|  Sobito        	|    	        | Desarrollador |
|  Fulano        	|  	            | Desarrollador	|
|  Sutano       	|    	        | Desarrollador |
|  Mengano      	|    	        | Diseño        |


## ` `Descripción de la metodología de trabajo<a name="DESCRIPCION"/>


### ` `Introduccion<a name="INTRODUCCION"/>

El presente documento se redacta el desarrollo del proyecto de una billetera electronica y administracion para un parque de diversiones en donde se presenta el desarrollo del mismo de forma interactiva e incremental, las herramientas y softwares utilizados, el seguimiento y las responsabilidades de los roles.


### ` `Proposito del proyecto<a name="PROPOSITO"/>

* Realizar un programa que cuente con dos tipos de funcionalidades. Una funcionalidad que sea para administradores, en donde se debe llevar el control de los ingresos, cortes de caja diarios y llevar una estadística de los juegos utilizados y cantidad de juegos utilizados por paquete sin restricción. La otra funcionalidad para los visitantes del parque donde podran comprar paquetes de tokens y poder utilizar su teléfono para pagar el uso de cada uno de los juegos utilizando el scanner de codigo QR.

### ` `Funcionalidades del sistema<a name="funcio"/>

* Funcionalidad del sistema Cliente

1. Funcionalidad "Mi Billetera"
    En este modulo se encuentran la cantidad de tokens que tiene el usuario, tambien cuenta con la opcion de poder escanear ek codigo QR de los juegos para poder entrar, ademas de poder comprar mas tokens cuando a este se le acaben.

2. Funcionalidad "Paquetes"
    En este modulo se encuentran los paquetes que el usuario puede comprar para poder adquirir los tokens, contando con 3 tipos de paquetes: 10, 20 tokens y un paquete sin limite. Al momento de comprar el sistema te redirecciona al modulo de compra.
    
3. Funcionalidad "Compra"
    En este modulo se encuentra el ingreso de las tarjetas de credito o debito para la compra de los paquetes de tokens. El usuario puede comprar los paquetes cuantas veces quiera.   
    
* Funcionalidad del sistema Administrador

1. Funcionalidad "Graficos"
    En este modulo se encuentran las estadisticas mostradas en un grafico de barras en las que se muestran cuales son lo juegos mas utilizados y cuales son los juegos mas utilizados con el paquete sin limite.
    
2. Funcionalidad "Cierre de caja"
    En este modulo se encuentra el cierre de caja lo cual es generado por medio de un PDF, en donde se muestra el ingreso diario de la caja.
  
3. Funcionalidad "Control de ingresos"  
    En este modulo se encuentra el control de ingresos el cual se genera en formato PDF, muestra todos los ingresos que lleva el sistema.
### ` `Diagrama Relacional del sistema<a name="relacion"/>

![](https://files.catbox.moe/t1dtqi.png)
    
### ` `Proposito del documento<a name="PROPOSITODOC"/>

El proposito de este documento es poder brindar la informacion necesaria para que sea de mayor facilidad tanto para los empleados como para los visistantes entender el funcionamiento de cada una de las opciones que se encuentran en el programa y que no haya ningun inconveniente al momento de utilizarla.



### ` `Alcance<a name="ALCANCE"/>

* El alcance de este proyecto es poder facilitar el manejo de los tokens que se utilizan en los parques de diversiones y que los visitantes puedan acceder a la compra de estos de manera mas facil. Ademas de tener un mayor control de los juegos que mas se utilizan y los ingresos que generan.



## ` `Metodologia seleccionada<a name="METODOLOGIA"/>

Se selecciono la metodologia Scrum ya que tiene el beneficio de que nos aporta el ritmo de trabajo sostenible, ya que se adapta a los cambios de manera inmediata consiguiendo un ritmo constante, tanto en duración del sprint como de esfuerzo.

### ` `¿En que consiste la metodologia Scrum?<a name="SCRUM"/>

Es un marco de trabajo o framework utilizado para optimizar el trabajo de equipo en proyectos complejos y monitorear la evolución del producto manteniendo como enfoque la calidad y los tiempos estipulados de entrega. Este método de trabajo se realiza por ciclos de actividades planificadas previamente, las cuales son conocidas como “sprints”, y está compuesta por una planificación de tareas y plazos establecidos de inicio y fin.

![](https://files.catbox.moe/thb0me.jpg)





### ` `¿Porque se escogio el metodo Scrum?<a name="PORQUE"/>

La razon de elegir el metodo Scrum es por su organización ágil y conjunta del proyecto, siendo capaz de responder a posibles contratiempos que aparecen en su desarrollo. Asimismo, tiene por objetivo utilizar el producto lo antes posible, mientras se va mejorando.


## ` `Descripción General del proyecto<a name="GENERAL"/>
### ` `Fundamentación<a name="FUNDAMENTO"/>

1. Sistema Billetera Electronica

Programa en el que un visitante pueda comprar tokens de manera electronica con tarjetas de credito o debito. Pudiendo escoger los paquetes que se presentan.

2. Sistema Administracion de ingresos y estadisticas de juegos

Programa que sea capaz de llevar el control de los ingresos, cortes de caja diarios y llevar una estadística de los juegos utilizados.

### ` `Valores de trabajo<a name="VALORES"/>

Los valores que deben ser practicados por todos los miembros involucrados en el desarrollo del proyecto y que hacen posible que la metodología Scrum tenga éxito son:

1. Compromiso
1. Responsabilidad 
2. Disciplina 
5. Transparencia


## ` `Cronograma de actividades<a name="ACTIVIDADES"/>




|  Sprints 	    | Actividad  |  Screenshot  	|
|---	        |---	     |---	            |
|  Sprint#1 13/06/2021	| [Realizacion del documento del sistema](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/10)	|![](https://files.catbox.moe/0vq85s.png)	|
|  Sprint#1 13/06/2021 	| [Presentacion inicial del sistema](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/9)|![](https://files.catbox.moe/p4vxnd.png) |
|  Sprint#1 13/06/2021 	| [Selección de requisitos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/1)  	|   ![](https://files.catbox.moe/479ajd.png)	|
|  Sprint#2 18/06/2021 	| [Diseño del programa](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/3)  	|   ![](https://files.catbox.moe/9xc0fh.png)	|
|  Sprint#2 18/06/2021 	| [Planificacion de actividades](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/2)  	|   ![](https://files.catbox.moe/w1ibum.png)	|
|  Sprint#3 23/06/2021 	| [Diseño de interfaz de administrador](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/6)  	|   ![](https://files.catbox.moe/a2u2jf.png)	|
|  Sprint#3 23/06/2021 	| [Diseño de interfaz del cliente](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/5)  	|   ![](https://files.catbox.moe/vo0lfv.png)	|
|  Sprint#4 30/06/2021 	| [ Programacion de interfaz de cliente](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/8)  	|   ![](https://files.catbox.moe/5c42wm.png)	|
|  Sprint#4 30/06/2021 	| [Programación interfaz de login](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/4)  	|   ![](https://files.catbox.moe/h0zdpf.png)	|
|  Sprint#5 06/07/2021 	| [Diagrama relacional de la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/14)  	|   ![](https://files.catbox.moe/alvkj8.png)	|
|  Sprint#5 06/07/2021 	| [Planificacion de base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/13)  	|   ![](https://files.catbox.moe/7rgoua.png)	|
|  Sprint#6 14/07/2021 	| [Programacion de interfaz de administrador](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/7)  	|   ![](https://files.catbox.moe/ppzb2j.png)	|
|  Sprint#7 20/07/2021 	| [Programacion del escaner del codigo QR](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/16)  	|   ![](https://files.catbox.moe/cnfrip.png)	|
|  Sprint#7 20/07/2021 	| [Programacion de las tablas de la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/15)  	|   ![](https://files.catbox.moe/sbajz3.png)	|
|  Sprint#8 27/07/2021 	| [Pruebas del programa sin la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/19)  	|   ![](https://files.catbox.moe/90xtjf.png)	|
|  Sprint#8 27/07/2021 	| [Pruebas de la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/18)  	|   ![](https://files.catbox.moe/5rqblw.png)	|
|  Sprint#9 01/08/2021 	| [Conexion del programa con la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/17)  	|   ![](https://files.catbox.moe/he0uyh.png)	|
|  Sprint#10 06/08/2021 	| [Pruebas del funcionamiento del programa con la base de datos](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/20)  	|   ![](https://files.catbox.moe/a972ps.png)	|
|  Sprint#11 13/08/2021 	| [Prueba final del funcionamiento de la base de datos y el programa](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/21)  	|   ![](https://files.catbox.moe/b6zdko.png)	|
|  Sprint#11 13/08/2021 	| [Finalizacion del documento del sistema](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/11)  	|   ![](https://files.catbox.moe/nalrv9.png)	|
|  Sprint#12 20/08/2021 	| [Entrega del documento del sistema](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/22)  	|   ![](https://files.catbox.moe/020r4v.png)	|
|  Sprint#12 20/08/2021 	| [Entrega final del sistema](https://github.com/AlfredoCarias/Examen-Final-Analisis-de-sistemas/issues/12)  	|   ![](https://files.catbox.moe/jjqhd3.png)	|

![](https://files.catbox.moe/zixbmv.png)

## ` `Artefactos<a name="Artefactos"/>


Se detalla las fases en que se divide esta seccion del documento.

Informacion

  * Pila de producto
  * Pila de sprint


 Sprints
 
 Incremento del desarrollo
 
 Graficas del registro y seguimiento del avance
 
 Comunicacion de los integrantes
 
### ` `Pila de producto<a name="pilaprod"/>

Es donde se presenta los requisitos del sistema o del usuarion en esta metodologia

Billetera electronica

Sistema en el que un visitante pueda comprar tokens de manera electronica con tarjetas de credito o debito. Pudiendo escoger los paquetes que se presentan.


Sistema Administracion de ingresos y estadisticas de juegos

Programa que sea capaz de llevar el control de los ingresos, cortes de caja diarios y llevar una estadística de los juegos utilizados.


¿Cómo se va realizar?

Por medio del lenguaje de programacion PHP se realizaran los sistemas de billetera electronica y el control de ingresos y estadistica, utilizando a su vez una base de datos realizada en Mysql, en la cual tendra el registro de los datos de usuarios y los ingresos.

### ` `Pila de Sprint<a name="pilasprint"/>

Es donde se presenta los requisitos y las actividades desarrolladas por el equipo del proyecto y donde se detalla los implicados y las responsabilidades

Responsabilidades del Product Owner

 - Presencia la supervicion del proyecto y de los avances durante las faces del proyecto
 - Realiza las instrucciones necesarias para el desarrollo del proyecto

Resposabilidades del Scrum Manager

 - Supervisa y recibe las instrucciones del gestor del producto para el desarrollo del proyecto
 - Asigna las instrucciones a los demas integrantes del proyecto
 - Supervisa el cumplimiento de actividades del proyecto

Responsabilidades del equipo de desarrollo

 - Elabora las instrucciones proporcionadas en el sprint
 - Resolucion de dudas entre el cliente y el Scrum Manager
 - Desarrolla las actividades presentadas

Responsabilidades del equipo de diseño

 - Realiza las actividades presentadas
 - Resolucion de dudas entre el equipo de desarrollo

## ` `Diseños del sistema<a name="DIAGRAMA"/>
### ` `Diseño Cliente<a name="cliente"/>

![](https://files.catbox.moe/asvehc.png)
![](https://files.catbox.moe/4jlg2i.png)
![](https://files.catbox.moe/em38ca.png)
![](https://files.catbox.moe/wi51li.png)
![](https://files.catbox.moe/kdf2hp.png)
![](https://files.catbox.moe/0i2ygi.png)

### ` `Diseño Administrador<a name="admin"/>
![](https://files.catbox.moe/asvehc.png)
![](https://files.catbox.moe/nlyq3w.png)
![](https://files.catbox.moe/6z6gs2.png)
![](https://files.catbox.moe/3u4n3t.png)
![](https://files.catbox.moe/4wyko8.png)

## ` `Anexos<a name="anexos"/>


