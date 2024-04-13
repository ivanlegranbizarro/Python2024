class Persona:
    def __init__(self, nombre: str, apellido: str, edad: int) -> None:
        self.__nombre = nombre
        self.__apellido = apellido
        self.__edad = edad

    def __str__(self) -> str:
        return (
            f"Nombre: {self.__nombre}, Apellido: {self.__apellido}, Edad: {self.__edad}"
        )

    def hablar(self, mensaje: str) -> None:
        print(f"{self.__nombre} dice: {mensaje}")

    def caminar(self, distancia: int) -> None:
        print(f"Estoy caminando {distancia} kilómetros")

    def piensa(self) -> None:
        print("Estoy pensando...")

    def come(self, comida: str) -> None:
        print(f"Estoy comiendo {comida}")


class Estudiante(Persona):
    def __init__(self, nombre: str, apellido: str, edad: int, materias: list) -> None:
        super().__init__(nombre, apellido, edad)
        self.__materias = materias

    def estudia(self, materia: str) -> None:
        print(f"Estoy estudiando {materia}")

    def __str__(self) -> str:
        return super().__str__() + f" Materias: {self.__materias}"


estudiante1 = Estudiante("Iván", "Legrán", 38, "Python")


print(estudiante1)
