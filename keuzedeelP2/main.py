# import alle classes
from Player import Player
from Enemy import Enemy
from Town import Town
from Combat import Combat

import random

def player_action(player) -> str:
    choice = input("What's player's next move? Parry(p), Light(l), Heavy(h), Run(r)     ").lower() #players input for attack, lower is like niet kop letter
    if choice in ["p", "parry"]: # als x
        return "p" #return y
    elif choice in ["l", "light"]:
        return "l"
    elif choice in ["h", "heavy"]:
        return "h"
    elif choice in ["r", "run"]:
        run_chance = random.randint(player.current_health, player.max_health) #  kans om weg te renne lager als lager hp, rennen voor losersr
        if run_chance == player.current_health: #als max hp, ofgoed rng dan ren goed
            return "run_success"
        else:
            return "run_fail"
    else:
        print(f"\nERROR: [{choice}] is not an action, Try Again !\n") #vertelt error
        return player_action(player) #return dingentjes

def main(): # da main function
    player = Player()
    enemy = Enemy()
    
    print(Town.intro()) # print de intro function dingen
    
    while True: #while true
        town_input = input(Town.to_town(player, enemy)) #runs totown function
        if town_input == "y": # als input y, dan go
            print("As the player leaves the Town the Villagers wave them goodbye, and good luck on their next adventure!")
            print("\n----------------------------------------------------------------------------------------------------")
            print("\nAfter some adevnturing, the Player finds a Monster.")
            while True:
                player_choice = player_action(player)
                if player_choice == "run_success": # if runn is succes
                    print(f"\nplayer ran away from the monster, with {player.current_health}/{player.max_health} health remaining!") # display hp
                    break # run away
                elif player_choice == "run_fail": # womp womp
                    print("\nplayer can't get away from the monster")
                    player.current_health -= enemy.damage #player get dmg
                else:
                    enemy_choice = enemy.choose_attack() # if player dont run away, pick random attack function ding
                    print(Combat.calculate_action(player_choice, enemy_choice, player, enemy)) # runt fight function
                    if player.current_health <= 0: # if player ded
                        print(f"\nplayer died to a monster... player will be forever forgotten in the place they died in.\nplayer had a total score of {player.score}")
                        return
                    elif enemy.current_health <= 0: #if enemy ded
                        print(f"\nplayer killed the monster!? and got +1 score")
                        player.increment_score() #sigma score
                        break
        else:
            print("\nERROR: Invalid input, Try Again!\n") # erorr retry

if __name__ == "__main__": # makes inside only run direct, niet wann module
    main() # calls / starts the game