"""
  Crear un programa que guarde diccionarios en un archivo txtx y los lea
"""
# guardar persona
class adminstrador_de_personas:
    def __init__(self):
        pass

    # guardar persona
    def guardar_persona(self):
        nombre = input("Ingrese su nombre: ")
        apellido = input("Inglese su apellido: ")
        edad = input("Ingrese su edad: ")
        
        persona = {
            "nombre": nombre,
            "apellido": apellido,
            "edad": edad
        }
        
        file = open('personas.txt', 'a')
        file.write(f"{str(persona)}\n")
        file.close()
        print('\n')
        print("Usuario guardado con exito")
        print('\n')


    # leer personas
    def leer_personas(self):
        f = open('personas.txt', 'r')
        lineas = f.readlines()

        print('\nA continuacion se mostraran todos los usuarios:')

        for linea in lineas:
            data = eval(linea.strip())
            print(data["nombre"], data["apellido"])
            
        print('\n')

        f.close()

    def run(self):
        while True:
            print("Menu del sofware\n")
            print("1) Agregar nuevo usuario")
            print("2) Para mostrar todos los usuarios")
            print("3) Para salir")

            opcion = input("Ingrese una opcion: ")
            
            if opcion == "1":
                self.guardar_persona()
            elif opcion == "2":
                self.leer_personas()
            elif opcion == "3":
                break
            else:
                self.run()


administrador = adminstrador_de_personas()
administrador.run()