    document.addEventListener("DOMContentLoaded", function() {

    
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

    let isMoved = false;

    function moveElement() {
        var element = document.getElementById("moveableElement");

        if (!element.classList.contains("enlarged")) {
            element.classList.add("enlarged");
            element.style.transition = "all 0.5s";
            element.style.transform = "translate(-50%, -50%) scale(1.5)";
            element.style.top = "50%";
            element.style.left = "50%";
        } else {
            element.classList.remove("enlarged");
            element.style.transition = "all 0.5s";
            element.style.transform = "translate(-50%, -50%) scale(1)";
            element.style.top = "";
            element.style.left = "";
        }
    }

    document.getElementById("openFormButton").addEventListener("click", function() {
        document.getElementById("overlay").style.display = "block";
    });
    
    document.getElementById("closeFormButton").addEventListener("click", function() {
        document.getElementById("overlay").style.display = "none";
    });
    
    document.getElementById("surveyForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Предотвращаем отправку формы (для примера)
        document.getElementById("overlay").style.display = "none";
    });
    
});    
