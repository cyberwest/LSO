# LSO St Lukes Project
Zoe Bryant
zoeabryant@gmail.com
zoeabryant.com
@zoeabryant

HTML/CSS(LESS)/PHP/jQuery/JSON

Created as a Ravensbourne Student http://www.ravensbourne.ac.uk/

June 2014

Gamelan sound recording by the talented Martyna Staruszniak:
uk.linkedin.com/pub/martyna-staruszniak/36/28b/b59


# Updating this site.
## Keep the git repo up to date.
Pleaseee.

## Copy
Copy for the main site is across all of the .php files
Copy for the map section of the main site : /mapinfo.json (including all the different route content)
Copy for the gamelan page /gamelan/index.php
Copy for the gamelan instruments /gamelan/instruments.json
Make sure to escape special characters when editing json files.

## Styling
This site uses LESS in the assets/less folder
Official docs - http://lesscss.org/

## LESS quick intro
You can just code straight CSS into less files. The main difference is that you need to compile less files into a CSS file using a compiler. There are plenty of ways coding in LESS is more efficent, you can read about them on the docs here: http://lesscss.org/

With your Less compiler, make sure you are ONLY compiling the main style.less file and no other file - you should just be able to uncheck them. The main style.less file references all the other files. Set the 'css output file location' to the correct /css folder so the compiler does not compile the css into the same folder as the less files.

The less files should automatically compile when you save them. Try changing something, check the compiler log to check it goes through. The only exception may be if you are working with less files referenced in @media queries - mobile site stuff. In that case, you may have to save style.less to trigger the compiler.

Less is supposed to be helpful. I've set repetitive colours in the mixins.less file and other variables - you may recognise this kind of feature from javascript. Yell if you need help.