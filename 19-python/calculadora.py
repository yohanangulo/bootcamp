class Calculadora:
    def __init__(self, num1, num2):
        self.num1 = num1
        self.num2 = num2

    def sumar(self):
        return (self.num1 + self.num2)

    def restar(self):
        return(self.num1 - self.num2)

    def dividir(self):
        return(self.num1 / self.num2)

    def multiplicar(self):
        return(self.num1 * self.num2)


# creando un objeto calculadora

calculadora = Calculadora(5, 3)

print('suma', calculadora.sumar())
print('restar', calculadora.restar())
print('multiplicar', calculadora.multiplicar())
print('dividir', calculadora.dividir())


# otro tipo de calculadora

class New_caluladora():
    def __init__(self):
        pass

    def resultado(self, proceso):
        resultado = float(proceso)
        return resultado

new_calculadora = New_caluladora()
print(new_calculadora.resultado(2+2*5))