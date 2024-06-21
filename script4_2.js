// Онлайн запись
document.getElementById("openFormButton").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "block";
});

document.querySelector(".close").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "none";
});



document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('surveyForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Предотвращаем отправку формы

        const selectedDate = document.getElementById('date').value;
        const selectedTime = document.getElementById('time').value;

        // Получаем выбранные услуги
        const selectedServices = [];
        const checkboxes = document.querySelectorAll('input[name="services[]"]:checked');
        checkboxes.forEach(function(checkbox) {
            selectedServices.push(checkbox.value);
        });

        let servicesMessage = "Выбранные услуги: " + selectedServices.join(', ');

        alert("Вы записались на " + selectedDate + ", время встречи: " + selectedTime + ". \n" + servicesMessage);

        // Опционально: скрываем форму после отправки
        const overlay = document.getElementById('overlay');
        overlay.style.display = 'none';
    });
        const navLinks = document.querySelectorAll('.nav-link');
        const smoothScrollLinks = document.querySelectorAll('.smooth-scroll');
    
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
    
                if (targetSection) {
                    e.preventDefault();
                    window.scrollTo({
                        top: targetSection.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    
        smoothScrollLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetUrl = this.getAttribute('href');
    
                // Добавляем класс для анимации перед переходом на другую страницу
                document.body.classList.add('page-transition');
    
                // Задержка перед переходом на другую страницу
                setTimeout(() => {
                    window.location.href = targetUrl;
                }, 800); // Измените значение времени задержки по вашему усмотрению
            });
        });
    });
