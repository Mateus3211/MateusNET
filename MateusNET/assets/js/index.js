
        function toggleHero() {
            const hero = document.getElementById('hero');
            const vpnContent = document.getElementById('vpnContent');
            const services = document.getElementById('services');
            
            // Esconde a seção Hero com uma transição suave
            hero.style.transition = 'opacity 1s ease, transform 1s ease';
            hero.style.opacity = '0';
            hero.style.transform = 'translateY(-20px)';
            
            // Mostra a seção VPN e de serviços após um pequeno atraso
            setTimeout(() => {
                vpnContent.classList.add('visible');
                services.classList.add('visible');
            }, 1000); // Atraso de 1 segundo para a transição do hero

            // Para um efeito suave, também podemos esconder a seção Hero depois de ocultar
            setTimeout(() => {
                hero.style.display = 'none';
            }, 1500); // Garantir que o Hero tenha tempo para sumir suavemente
        }

        function showSection(section) {
            // Esconde todas as seções
            const sections = document.querySelectorAll('section');
            sections.forEach(sec => sec.classList.remove('visible'));

            // Exibe a seção desejada
            const target = document.getElementById(section + 'Content');
            if (target) target.classList.add('visible');
        }
    