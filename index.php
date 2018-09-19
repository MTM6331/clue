<?php
    /*
      List of Rooms, Suspects, and Weapons

      Rooms: 
      'Study',
      'Hall', 
      'Lounge',
      'Library',
      'Dining Room',
      'Billard Room',
      'Conservatory',      
      'Ballroom',
      'Kitchen'

      Suspects: 
      'Colonel Mustard',
      'Miss Scarlet',
      'Mr. Green',
      'Mrs. Peacock',
      'Mrs. White',
      'Professor Plum'

      Weapons:
      'Candlestick',
      'Knife',
      'Lead Pipe',
      'Revolver',
      'Rope',
      'Wrench'
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clue</title>
  <link rel="stylesheet" href="clue.css">
</head>
<body>
  
  <header>
    <h1>Clue</h1>
  </header>
  <div class="items"> 
    <p>Select a room to get a clue.</p>
  </div>
  <main class="container">
      <div class="room">
        <a href="?room=Study">Study</a>
      </div>
      <div class="room">
        <a href="?room=Hall">Hall</a>
      </div>
      <div class="room">
        <a href="?room=Lounge">Lounge</a>
      </div>
      <div class="room">
        <a href="?room=Library">Library</a>
      </div>
      <div class="room">
        <a href="?room=Dining Room">Dining Room</a>
      </div>
      <div class="room">
        <a href="?room=Billard Room">Billard Room</a>
      </div>
      <div class="room">
        <a href="?room=Conservatory">Conservatory</a>
      </div>
      <div class="room">
        <a href="?room=Ballroom">Ballroom</a>
      </div>
      <div class="room">
        <a href="?room=Kitchen">Kitchen</a>
      </div>
  </main>
</body>
</html>