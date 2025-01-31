class Combat:
    @staticmethod
    def calculate_action(player_choice: str, enemy_choice: str, player, enemy) -> str:
        result = "" # maakt em een ding, zodat die result letesa kan opgeslagen worden
        if (player_choice == "p" and enemy_choice == "l") or \
           (player_choice == "l" and enemy_choice == "h") or \
           (player_choice == "h" and enemy_choice == "p"):
            result += f"player Beat The monster! Dealing {player.damage} dmg to the monster!\n"
            enemy.current_health -= player.damage
            # if player beat monster in rps, then dmg monster
        elif (player_choice == "p" and enemy_choice == "h") or \
             (player_choice == "l" and enemy_choice == "p") or \
             (player_choice == "h" and enemy_choice == "l"):
            result += f"player Lost To The monster! Dealing {enemy.damage} dmg to player!\n"
            player.current_health -= enemy.damage
            #the invert
        else:
            result += "player Tied With The monster!?\n"
            # sigm a tie
        result += f"player has {player.current_health}/{player.max_health} health left!\n"
        result += f"monster has {enemy.current_health}/{enemy.max_health} health left!\n"
        #stopt hp dispaly aan result
        return result