import random # voor de random array pick van enemy

class Enemy:
    def __init__(self, max_health: int = 3, damage: int = 1):
        self._max_health = max_health #enemsy max ho
        self._current_health = max_health #set current hp to max hp =
        self._damage = damage #dmg
        self._attacks = ["p", "l", "h"] #array van moves om rps te doen

    @property
    def current_health(self) -> int:
        return self._current_health

    @current_health.setter
    def current_health(self, value: int):
        self._current_health = value

    @property
    def max_health(self) -> int:
        return self._max_health

    @property
    def damage(self) -> int:
        return self._damage

    def choose_attack(self) -> str:
        return random.choice(self._attacks)