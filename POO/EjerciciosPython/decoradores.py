def decorador(funcion: callable) -> callable:
    def wrapper(*args, **kwargs):
        print("Antes de llamar a la función de sumar")
        resultado = funcion(*args, **kwargs)
        print("Después de llamar a la función de sumar")
        return resultado

    return wrapper


def decorador_que_suma_10_a_cualquier_suma(funcion: callable) -> callable:
    def wrapper(*args, **kwargs):
        print("Antes de llamar a la función")
        resultado = funcion(*args, **kwargs) + 10
        print("Después de llamar a la función")
        return resultado

    return wrapper


@decorador_que_suma_10_a_cualquier_suma
def sumar(*numeros: int) -> int:
    return sum(numeros)


print(sumar(1, 2, 3, 4, 5))
