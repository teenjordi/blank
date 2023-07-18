import random

attempts_list = []

def show_score():

if len(attempts_list) <= 0:

print("There is currently no high score, it's yours for the taking!")

else:

print("The current high score is {} attempts".format(min(attempts_list)))

def start_game():

random_number = int(random.randint(1, 10))

print("Hello traveler! Welcome to the game of guesses!")

player_name = input("What is your name? ")

wanna_play = input("Hi, {}, would you like to play the guessing game? (Enter Yes/No) ".format(player_name))

# Where the show_score function USED to be

