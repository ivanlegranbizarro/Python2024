from poo3 import CuentaCorriente


class CuentaJoven(CuentaCorriente):
    def __init__(
        self,
        saldo: float = 0,
        numero_cuenta: str = "",
        titular: str = "",
        bonusPromocion: float = 0,
    ) -> None:
        super().__init__(saldo, numero_cuenta, titular)
        self.__bonusPromocion = (bonusPromocion / 100) + 1
        self.__bono_aplicado = False

    def aplicar_bonus(self) -> None:
        if not self.__bono_aplicado:
            self.ingresarSaldo(self.getSaldo() * (self.__bonusPromocion - 1))
            self.__bono_aplicado = True


cuenta_joven1 = CuentaJoven(1000, "123456", "Leandro", 10)
cuenta_joven1.aplicar_bonus()
print(cuenta_joven1)
