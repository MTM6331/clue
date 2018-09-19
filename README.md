# Clue

## Objective
For this exercise you will practice using PHP associative arrays, loops, conditional statements, and the $_GET Variable by creating a simple Clue game.

## Game Play
A suspect and weapon are missing, the murderer and murder weapon. The player must move through the mansion to search for clues.  

## Requirements 
The following requirement must be met in order to complete the assignment successfully:

1. Create Associative array of arrays. Each key will of the array will be the name of the room. Each array will contain a list of items (suspects and weapons) in the room. 
2. Using a loop and the rooms array to create the rooms grid with the name of each room. Clicking on the name should move the player to that room by passing the name of the room through the URL.
3. Add a conditional statement that will check if the *valid* room has been passed through the URL and retrieve the items from that room.
4. Above the rooms grid and a message about what items were found in the room, if any. A different message should be display if no items were found and if the player is not in a *valid* room. 
