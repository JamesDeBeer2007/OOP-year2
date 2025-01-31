class Player: # gewoon calss, is goon type shit
    def __init__(self, max_health: int = 3, damage: int = 1): # bind gabegoobers aan values
        self._max_health = max_health 
        self._current_health = max_health
        self._damage = damage
        self._score = 0

    @property # make method more of atribute, kan goed callen
    def current_health(self) -> int: # sets hp as int
        return self._current_health # returns hp as int

    @current_health.setter # makes able to set current hp in oop
    def current_health(self, value: int): #set as hp
        self._current_health = value # updates hp to value

    @property
    def max_health(self) -> int:
        return self._max_health

    @property
    def damage(self) -> int:
        return self._damage

    @property
    def score(self) -> int:
        return self._score

    def increment_score(self):
        self._score += 1

    def reset_health(self):
        self._current_health = self._max_health #current hp = max hp (aka a heal)