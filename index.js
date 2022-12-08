

    var snakeBoard;
    var towDimension;
    var snake;
    var SnakeDir;
	var Snakenext;
    var snakeSpeed;
    var block = {x: 0, y: 0};
    var score;
    var wall;
    var snakeScreen;
    var button_newgame_menu;
    var scoreValue;

    window.onload = function(){       
        snakeBoard = document.getElementById("snake");
        towDimension = snakeBoard.getContext("2d");
        scoreValue = document.getElementById("scoreNumber");
        snakeScreen = document.getElementById("snake");
        button_newgame_menu = document.getElementById("newgame_menu");           
        button_newgame_menu.onclick = function(){newGame();};
        snakeSpeed = 150;
        wall = 1;
        if(wall == 0){snakeScreen.style.borderColor = "#606060";}
        if(wall == 1){snakeScreen.style.borderColor = "#FFFFFF";}
  
    }
    var addFood = function(){
        block.x = Math.floor(Math.random() * ((snakeBoard.width / 10) - 1));
        block.y = Math.floor(Math.random() * ((snakeBoard.height / 10) - 1));
        for(var i = 0; i < snake.length; i++){
            if(checkBlock(block.x, block.y, snake[i].x, snake[i].y)){
                addFood();
            }
        }
    }
    var activeDot = function(x, y){
        towDimension.fillStyle = "#FFFFFF";
        towDimension.fillRect(x * 10, y * 10, 10, 10);
    }
    var changeDir = function(key){
        
        if(key == 38 && SnakeDir != 2){
            Snakenext = 0;
        }else{
        
        if (key == 39 && SnakeDir != 3){
            Snakenext = 1;
        }else{
        
        if (key == 40 && SnakeDir != 0){
            Snakenext = 2;
        }else{
            
        if(key == 37 && SnakeDir != 1){
            Snakenext = 3;
        } } } }
        
    }
   
    var checkBlock = function(x, y, _x, _y){
        return (x == _x && y == _y) ? true : false;
    }
    var mainLoop = function(){       
            var _x = snake[0].x;
            var _y = snake[0].y;
			SnakeDir = Snakenext;
            switch(SnakeDir){
                case 0: _y--; break;
                case 1: _x++; break;
                case 2: _y++; break;
                case 3: _x--; break;
            }
            snake.pop();
            snake.unshift({x: _x, y: _y});
            if(wall == 1){
                if (snake[0].x < 0 || snake[0].x == snakeBoard.width / 10 || snake[0].y < 0 || snake[0].y == snakeBoard.height / 10){
                    snakeScreen.style.display = "none";
                    return;
                }
            }

            if(checkBlock(snake[0].x, snake[0].y, block.x, block.y)){
                snake[snake.length] = {x: snake[0].x, y: snake[0].y};
                score += 1;
                scoreValue.innerHTML = String(score);
              
                addFood();
                activeDot(block.x, block.y);
            }
            towDimension.beginPath();
            towDimension.fillStyle = "#000000";
            towDimension.fillRect(0, 0, snakeBoard.width, snakeBoard.height);
            for(var i = 0; i < snake.length; i++){
                activeDot(snake[i].x, snake[i].y);
            }


            activeDot(block.x, block.y);	

            setTimeout(mainLoop, snakeSpeed);
    }
    var newGame = function(){
        
        snakeScreen.style.display = "block";
        snakeScreen.focus();     
        snake = [];
        for(var i = 4; i >= 0; i--){
            snake.push({x: i, y: 15});
        } 
        Snakenext = 1; 
        score = 0;
        addFood();
     scoreValue.innerHTML = String(score);      
        snakeBoard.onkeydown = function(evt) {
            evt = evt || window.event;
            changeDir(evt.keyCode);
        }
        mainLoop();
                
    }
    

        
