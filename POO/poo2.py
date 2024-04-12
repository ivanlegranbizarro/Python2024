class Persona:
    def __init__(self, nombre: str, edad: int) -> None:
        self.__nombre = nombre
        self.__edad = edad

    def getNombre(self) -> str:
        return self.__nombre

    def setNombre(self, nombre) -> None:
        self.__nombre = nombre

    def getEdad(self) -> int:
        return self.__edad

    def setEdad(self, edad) -> None:
        self.__edad = edad

    def hablar(self, mensaje: str) -> None:
        print(mensaje)

    def caminar(self, distancia: int) -> None:
        print(f"Estoy caminando {distancia} kilómetros")

    def __str__(self) -> str:
        return f"Nombre: {self.__nombre}, Edad: {self.__edad}"


ivan = Persona("Ivan", 38)

gemma = Persona("Gemma", 32)

print(gemma)


gemma.hablar("Hola, me llamo Gemma")

gemma.caminar(10)


ivan.hablar("Hola, me llamo Iván. ¿Qué tal estáis?")

print(ivan)
