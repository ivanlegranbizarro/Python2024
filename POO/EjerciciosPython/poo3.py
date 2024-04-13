class CuentaCorriente:
    def __init__(
        self, saldo: float = 0.0, numero_cuenta: str = "", titular: str = ""
    ) -> None:
        self.__saldo = saldo
        self.__numero_cuenta = numero_cuenta
        self.__titular = titular

    def getSaldo(self) -> float:
        return self.__saldo

    def ingresarSaldo(self, saldo: float) -> None:
        self.__saldo += saldo

    def retirarSaldo(self, saldo: float) -> None:
        self.__saldo -= saldo

    def getTitular(self) -> str:
        return self.__titular

    def setTitular(self, titular: str) -> None:
        self.__titular = titular

    def getNumeroCuenta(self) -> str:
        return self.__numero_cuenta

    def setNumeroCuenta(self, numero_cuenta: str) -> None:
        self.__numero_cuenta = numero_cuenta

    def __str__(self) -> str:
        return f"Saldo: {self.__saldo}, Cuenta: {self.__numero_cuenta}, Titular: {self.__titular}"


cc1 = CuentaCorriente(100.000, "3454534346346", "Benito Hernández")

print(cc1)
