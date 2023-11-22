            let timerInterval;
            let seconds = 0;
            let minutes = 0;
            let hours = 0;

            function updateTimer() {
                seconds++;
                if (seconds === 60) {
                    seconds = 0;
                    minutes++;
                    if (minutes === 60) {
                        minutes = 0;
                        hours++;
                    }
                }

                const formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                document.getElementById('timer').textContent = formattedTime;
            }

            document.getElementById('startBtn').addEventListener('click', function () {
                timerInterval = setInterval(updateTimer, 1000);
            });

            document.getElementById('stopBtn').addEventListener('click', function () {
                clearInterval(timerInterval);
            });

            let timerInterval2;
            let seconds2 = 0;
            let minutes2 = 0;
            let hours2 = 0;

            function updateTimer2() {
                seconds2++;
                if (seconds2 === 60) {
                    seconds2 = 0;
                    minutes2++;
                    if (minutes2 === 60) {
                        minutes2 = 0;
                        hours2++;
                    }
                }

                const formattedTime2 = `${String(hours2).padStart(2, '0')}:${String(minutes2).padStart(2, '0')}:${String(seconds2).padStart(2, '0')}`;
                document.getElementById('timer2').textContent = formattedTime2;
            }

            function startTimer2() {
                timerInterval2 = setInterval(updateTimer2, 1000);
            }

            function stopTimer2() {
                clearInterval(timerInterval2);
            }

            function resetTimer2() {
                stopTimer2();
                seconds2 = 0;
                minutes2 = 0;
                hours2 = 0;
                updateTimer2();
            }

            document.getElementById('startBtn2').addEventListener('click', startTimer2);
            document.getElementById('stopBtn2').addEventListener('click', stopTimer2);
            document.getElementById('resetBtn2').addEventListener('click', resetTimer2);

            // Inicialize o cronômetro 2 quando a página carregar
            window.onload = function () {
                updateTimer2();
            };
