class Town:
    @staticmethod# is voor method   van class zonder een self, aka zonder instance
    def intro(): # intro text function
        return "\nHello adventurer, welcome to the world of Shittyrockpaperscissorstextrpgtopia \nYou have been sent here to rid the world of monster! \nYou have 3hp, and deal 1dmg, gl chump"

    @staticmethod
    def to_town(player, enemy):
        player.reset_health() # player calss heal ding function
        enemy.current_health = enemy.max_health #heals enemy
        #return text
        return "----------------------------------------------------------------------------------------------------\nplayer returns to the Town \nWere would player like to go? Ready for adventure?(y)  "