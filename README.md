###README

Animal Guess is a legacy AI game which can be traced back to the epoch of BASIC. 

The game tries to guess the animal the user has in mind by asking YES/NO questions. It will prompt more questions until it reaches the guess it has in "mind". 

If the guess if correct (assuming the user does not change his mind during the game process), it will be happy; if not, the game will seek the user's help by asking the user to provide another YES/NO question, the new animal the user has in mind, and the Y/N answer to that question to distinguish the two animals. 

As time goes by, the game will become "smarter" as it will ask more questions before it prompts the guess. 

This program is developed with PHP (Symfony 2 framework) and Dart. PHP is used as the RESTful API provider (the server) and Dart used to mimic a frontend. 