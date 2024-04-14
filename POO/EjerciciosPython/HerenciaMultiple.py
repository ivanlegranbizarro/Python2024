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
        Persona.__init__(self, nombre, apellido, edad)
        self.__materias = materias

    def estudia(self) -> None:
        print(f"Estoy estudiando {self.__materias}")

    def __str__(self) -> str:
        return super().__str__() + f" Materias: {self.__materias}"


class Trabajador(Persona):
    def __init__(
        self, nombre: str, apellido: str, edad: int, trabajo: str, jornada: int
    ) -> None:
        Persona.__init__(self, nombre, apellido, edad)
        self.__trabajo = trabajo
        self.__jornada = jornada

    def trabaja(self) -> None:
        print(f"Trabajo: {self.__trabajo}, Jornada: {self.__jornada}")


class Director(Trabajador, Estudiante):
    def __init__(
        self,
        nombre: str,
        apellido: str,
        edad: int,
        trabajo: str,
        jornada: int,
        materias: list,
        empresa: str,
    ) -> None:
        Trabajador.__init__(self, nombre, apellido, edad, trabajo, jornada)
        Estudiante.__init__(self, nombre, apellido, edad, materias)
        self.__empresa = empresa

    def __str__(self) -> str:
        return super().__str__() + f" Empresa: {self.__empresa}"


director1 = Director("Juan", "Lopez", 35, "Director", 8, ["Python", "Java"], "Google")

print(director1)
