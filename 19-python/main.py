import os
from modulo import saludar

# mi primera linea de codigo en python

print('Hola mundo', 'Hello world')

"""
  hola este es un
  comentario de varias
  lineas
"""

# sintaxis correcta: con tabulaciones

if 5 > 2:
    print('se cumple')
else:
    print('no')


# variables en python

edad = 5
nombre = 'yohan'
print(edad, nombre)


# para crear variables se globales de debe colocar la palabra global

global z
z = 'Esta es una variable global'


# tipos de datos en python
texto = 'string'
entero = 1  # int
decimal = 1.5  # float
complejo = 1j  # complejo
lista = ['manzana', 'banana', 'pera']  # lista, no es array como en js
# tuple -- tambien conocida como una lista constante, una vez inicializada ya no se pueden cambiar sus valores
lista_const = ('manzana', 'banana', 'pera')
rango = range(6)  # hace el conteo desde el 0 al 6
diccionario = {
    'nombre': 'yohan',
    'apellido': 'angulo'
}  # conocido en js como un objeto --
booleano = True  # o False
ninguno = None


# forzar un tipo de dato

x = int('20')
x = str("20")
x = float("20.5")
x = complex(1j)
x = tuple(('manzana', 'banana', 'pera'))
x = range(6)
x = dict(nombre="Yohan", apellido="Angulo")
x = bool(5)

print(x)

# error comun en python

# print("salu " + 2)

# no se pueden mezclar tipos de datos como en js

print('salu ' + str(2))


# condicionales en python

x = 20
y = 8

if x == y:
    print('x es igual a y')
elif x < y:
    print('x es menor a y')
else:
    print('y es menor a x')


# operadores logicos

x = 'viernes'
y = 'tiempo'
z = 'dinero'

if x == 'viernes' and y == 'tiempo' and z == 'dinero':
    print('Hoy se va a la fiesta')
elif z == 'dinero' or y == 'tiempo':
    print('Igual se sale hoy')
elif not x == 'viernes':
    print('Nada, igual se sale')


# loops
# loop while

i = 1
while i < 6:
    print(i)
    i = i + 1

# for loop

frutas = ['banana', 'manzana', 'pera']

for fruta in frutas:
    print(fruta)


# funciones
# funciones sin retorno y sin parametros
def mensaje():
    print("hola")


mensaje()

# funcion con parametro y sin retorno


def mensaje_parametros(mensaje):
    print(mensaje)


mensaje_parametros('Este es un mensaje enviado por parametros')

# funcion con parametro y con retorno


def mensaje_retorno(mensaje):
    return mensaje + " mundo"


print(mensaje_retorno("hola"))

"""
realizar un sofware la cual tenga una funcion llamada recorrer,
esta acepta un array como parametro y lo que hace es recorrer e imprimir cada elemento
"""


def recorrer(arr: list):
    for i, el in enumerate(arr):
        print(i, el)


recorrer(['yohan', 'david', 'angulo', 'useche'])


persona = {
    "nombre": "yohan",
    "apellido": "Angulo",
    "Edad": 24
}


def recorrer_dict(dict: dict):
    for dato in persona:
        print(persona[dato])


recorrer_dict(persona)


# try/except (try/catch)
# ejecuta un codig, en caso de que falle, ejectua otro codigo

try:  # en caso de que haya un error no se detendra el codigo sino que ejecuta lo que hay en el except
    print()
except:
    print('error')


# input
# nombre = input('Escribe tu nombre: ')
# if nombre == 'yohan':
#   print('buen nombre')


# manejo de archivos

# crear un archivo, "w" viene de write
f = open('hola.txt', "w")
f.write('Hola mundo, escribo un archivo')
f.close()


# agregar lineas a un archivo "a" de append
f = open('hola.txt', 'a')
f.write("\nesta es otra linea")
f.close()


# para leer un archivo "r" de read
f = open("hola.txt", "r")
print(f.read())
f.close()

# para eliminar un achivo
os.remove('hola.txt')

# para evitar errores
if os.path.exists('hola.txt'):
    os.remove('hola.txt')
else:
    print('Este archivo no existe')


# metodos de cadenas en py
txt = 'hola Mundo'
# capitaliza un string, solo la primera letra de un string
print(txt.capitalize())
# transformar a minusculas
print(txt.casefold())
print(txt.lower())
# retorna cuantas veces aparece una palabra o una letra en un string
print(txt.count('o'))
# verificar si el strig comievza con una palabra o letra
print(txt.startswith('h'))
# reemplaza una palabra en un strig
print(txt.replace('o', 'a'))
# transforma un string a mayusculas
print(txt.upper())


# metodos de arrays o listas
lista = ['manzana', 'pera', 'limon']
# insertar un elemento a un array
lista.append('pina')
# cuanta cuantas coincidencias en un array
print(lista.count('pera'))
# contar longitud de un array
print(len(lista))
# eliminar un elemento de una lista
lista.pop(0)  # en python se puede eliminar una posicion
# agregar un elemento a una lista
# tambien se puede indicar una posicion, se insertara despues de esa posicion
lista.insert(1, "cambur")
print(lista)
# acomodar una lista
lista.sort()

print(lista)


# clases // programacion orientada a objetos
# una clase es un molde de objeto

class Persona:
    def __init__(self, nombre, edad): # funicon inicializadora la que crea las props
        self.name = nombre
        self.age = edad

    def decir_nombre_completo(self):
        print(f'Mi nombre es {self.name} y tengo {self.age} anos de edad')
    
    def imprime_self(self):
        print(self)

# creando una persona a partir de un objeto

persona1 = Persona('yohan', 24) # en js se debe poner la palabra new al principio
persona2 = Persona('Juanito', 14)

persona1.decir_nombre_completo() # ejecutar un motodo de un objeto
persona2.decir_nombre_completo()
persona1.imprime_self()

data = [['david', 25], ['jesus', 30]]
objetos = []

for i, pers in enumerate(data):
    objeto = Persona(data[i][0], data[i][1])
    objetos.append(objeto)


for objeto in objetos:
    print(objeto.name, objeto.age)

saludar()
