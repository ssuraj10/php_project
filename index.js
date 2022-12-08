

    var canvas;
    var towDimension;
    var snake;
    var SnakeDir;
	 var Snakenext;
    var snakeSpeed;
    var food = {x: 0, y: 0};
    var score;
    var wall;
    var snakeScreen;
    var button_newgame_menu;
    var scoreValue;

    window.onload = function(){       
        canvas = document.getElementById("snake");
        towDimension = canvas.getContext("2d");
        scoreValue = document.getElementById("score_value");
            snakeScreen = document.getElementById("snake");
            button_newgame_menu = document.getElementById("newgame_menu");           
        button_newgame_menu.onclick = function(){newGame();};
        setSnakeSpeed(150);
        setWall(1);
    }
    var addFood = function(){
        food.x = Math.floor(Math.random() * ((canvas.width / 10) - 1));
        food.y = Math.floor(Math.random() * ((canvas.height / 10) - 1));
        for(var i = 0; i < snake.length; i++){
            if(checkBlock(food.x, food.y, snake[i].x, snake[i].y)){
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
    
    var altScore = function(score_val){
        scoreValue.innerHTML = String(score_val);
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
                if (snake[0].x < 0 || snake[0].x == canvas.width / 10 || snake[0].y < 0 || snake[0].y == canvas.height / 10){
                    snakeScreen.style.display = "none";
                    return;
                }
            }else{
                for(var i = 0, x = snake.length; i < x; i++){
                    if(snake[i].x < 0){
                        snake[i].x = snake[i].x + (canvas.width / 10);
                    }
                    if(snake[i].x == canvas.width / 10){
                        snake[i].x = snake[i].x - (canvas.width / 10);
                    }
                    if(snake[i].y < 0){
                        snake[i].y = snake[i].y + (canvas.height / 10);
                    }
                    if(snake[i].y == canvas.height / 10){
                        snake[i].y = snake[i].y - (canvas.height / 10);
                    }
                }
            }
            for(var i = 1; i < snake.length; i++){
                if (snake[0].x == snake[i].x && snake[0].y == snake[i].y){
                    snakeScreen.style.display = "none";
                    return;
                }
            }
            if(checkBlock(snake[0].x, snake[0].y, food.x, food.y)){
                snake[snake.length] = {x: snake[0].x, y: snake[0].y};
                score += 1;
                altScore(score);
                addFood();
                activeDot(food.x, food.y);
            }
            towDimension.beginPath();
            towDimension.fillStyle = "#000000";
            towDimension.fillRect(0, 0, canvas.width, canvas.height);
            for(var i = 0; i < snake.length; i++){
                activeDot(snake[i].x, snake[i].y);
            }


            activeDot(food.x, food.y);	

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
        altScore(score);       
        addFood();
        canvas.onkeydown = function(evt) {
            evt = evt || window.event;
            changeDir(evt.keyCode);
        }
        mainLoop();
                
    }
    var setSnakeSpeed = function(speed_value){
        snakeSpeed = speed_value;
    }

    var setWall = function(wall_value){
        wall = wall_value;
        if(wall == 0){snakeScreen.style.borderColor = "#606060";}
        if(wall == 1){snakeScreen.style.borderColor = "#FFFFFF";}
    }
    

        
