# para crear intefaces se pueden usar varias librerias, 
#PySimpleGUI

import PySimpleGUI as sg

sg.theme('DarkAmber')   # Add a touch of color
# All the stuff inside your window.
layout = [  [sg.Text('Some text on Row 1')],
            [sg.Text('Enter something on Row 2'), sg.InputText()],
            [sg.Button('Ok'), sg.Button('Cancel')] ]

# Create the Window
window = sg.Window('Window Title', layout)
# Event Loop to process "events" and get the "values" of the inputs
while True:
    event, values = window.read()
    if event == sg.WIN_CLOSED or event == 'Cancel': # if user closes window or clicks cancel
        break
    # print('Tu has ingresado el valor', values[0])

window.close()

# auto-py-to-exe
# para transoformar a exe

"""
    Crea un programa en python, el cual debe realizarse con programacion orientada a objetos (POO) el cual:

    tengo dos opciones:
    - Ingresas nuevo usuario
    - Visualizar usuarios

    Ingresar usuarios debe: pedirme que ingrese un nombre, un apellido, un correo y un numero de telefono.

    IMPORTANTE: los datos deben ser validados par ser registrados, por ejemplo: un nombre no puede tener numeros. Un correo debe cumplir con su formato, un numero de telefono debe cumplir con un formato (Investigar expresiones regulares ne python)

    - Visualizar usuarios debe permitirme visualizar todos los usuarios que he registrado


    Puntos opcionales (Recomendale hacer):

    - Que los usuarios registrados sean guardados en un archivo .txt para que de esa forma nunca sean eliminados

    - Que al registrar a un usuario le llegue un correo eletronico para darle la bienvenida

    - que al registrar a un usuario le llegue un mensaje de whatsapp para darle la bienvenida

    - Crear una interfazz visual para este programa

    - Que este programa sea un archivo .exe
"""