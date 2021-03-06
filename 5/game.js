 <script>

      let randomNumber = Math.floor(Math.random() * 100) + 1;
      var count = 1;

      const guesses = document.querySelector('.guesses');
      const lastResult = document.querySelector('.lastResult');
      const lowOrHi = document.querySelector('.lowOrHi');

      const guessSubmit = document.querySelector('.guessSubmit');
      const guessField = document.querySelector('.guessField');

      function guess() {
        let userNumber = Number(guessField.value);
        guesses.textContent += userNumber + ' ';

        if(userNumber === randomNumber)
        {
            lastResult.style.backgroundColor = 'green';
            lastResult.textContent = 'Congratulations';
            lowOrHi.textContent = 'You Win';
            gameOver();
        }
        else if(count === 10)
        {
            lastResult.textContent = 'GAME OVER';
            lowOrHi.textContent = '';
            gameOver();
        }
        else
        {
          lastResult.style.backgroundColor = 'red';
          lastResult.textContent = 'Wrong';
          if(userNumber > randomNumber)   lowOrHi.textContent = 'think lower';
          else if(userNumber < randomNumber)  lowOrHi.textContent = 'think higher';
        }
        count++;
        guessField.value = '';
      }

      guessSubmit.addEventListener('click', guess);


     function gameOver()
      {
        guessField.disabled = true;
        guessSubmit.disabled = true;
        resetButton = document.createElement('button');
        resetButton.textContent = 'Start new game';
        document.body.appendChild(resetButton);
        resetButton.addEventListener('click', reset);
      }

      function reset() 
      {
        count = 1;        
        resetButton.parentNode.removeChild(resetButton);
        guesses.textContent = '';
        lastResult.textContent = '';
        lowOrHi.textContent = '';
        guessField.disabled = false;
         guessSubmit.disabled = false;
        guessField.value = '';
        lastResult.style.backgroundColor = 'white';
        randomNumber = Math.floor(Math.random() * 100) + 1;
      }

 </script>