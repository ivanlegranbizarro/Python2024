class Coche:
    def __init__(
        self, color: str = "verde", ruedas: int = 4, arrancado: bool = False
    ) -> None:
        self.__color = color
        self.__ruedas = ruedas
        self.__arrancado = arrancado

    def getColor(self) -> str:
        return self.__color

    def setColor(self, color) -> None:
        self.__color = color

    def arrancar_apagar(self) -> None:
        self.__arrancado = not self.__arrancado

    def __str__(self) -> str:
        return f"Color: {self.__color}, Ruedas: {self.__ruedas}, Arrancado: {self.__arrancado}"


coche1 = Coche()

coche1.arrancar_apagar()

print(coche1)

coche1.arrancar_apagar()

print(coche1)
