<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicóloga Stefany O. Pantaroto</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar bg top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-people-roof"></i> Stefany O. Pantaroto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#treatment">Tratamento</a></li>
                    <li class="nav-item"><a class="nav-link" href="#my-work">Meu trabalho</a></li>
                    <li class="nav-item"><a class="nav-link" href="#approach">Abordagem</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-me">Sobre mim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#questions">Dúvidas frequentes</a></li>
                </ul>
                <!-- Botão de Agendar -->
                <a id="agendar-header" class="btn btn-success ms-auto d-none d-lg-block"
                    href="https://api.whatsapp.com/send/?phone=5547992090476&amp;text=Ol%C3%A1%2C+gostaria+de+agendar+uma+consulta+com+a+Psic%C3%B3loga+Stefany+O.+Pantaroto.&amp;type=phone_number&amp;app_absent=0">
                    <i class="fab fa-whatsapp me-2"></i> Agendar
                </a>
            </div>
        </div>
    </nav>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texto e Vídeo -->
                <div class="col-lg-6 text-center text-lg-start text-light">
                    <h1>Deixe para trás o julgamento e as respostas prontas: <br>
                        <span class="text-highlight">comece uma nova jornada</span>
                    </h1>
                    <button class="btn btn-primary btn-lg">Terapia Cognitivo-Comportamental</button>

                    <!-- Vídeo -->
                    <div class="video-container mt-3">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/xsDnEj2Hx4Q?si=aRTQR_-ZoJb3rfro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <button class="btn btn-whatsapp mt-4">
                        <i class="fab fa-whatsapp"></i> Agendar Atendimento!
                    </button>
                </div>

                <!-- Imagem -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img src="img/3.jpg" alt="Psicóloga" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="treatment-benefits" class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Benefícios do Tratamento</h2>
        <p class="text-center text-muted" data-aos="fade-up">
            A terapia baseada em evidências ajuda no enfrentamento de diversos desafios psicológicos, promovendo mais qualidade de vida.
        </p>

        <div class="accordion mt-4" id="treatmentAccordion">
            <!-- Card 1 -->
            <div class="accordion-item" data-aos="fade-up">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fas fa-brain me-2"></i> Desafios no Enfrentamento
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#treatmentAccordion">
                    <div class="accordion-body">
                        Com técnicas comprovadas, enfrente condições como pânico, depressão, TDAH, bipolaridade e transtornos alimentares com mais leveza e confiança.
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="accordion-item" data-aos="fade-up">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fas fa-heartbeat me-2"></i> Ansiedade que Atrapalha
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#treatmentAccordion">
                    <div class="accordion-body">
                        Reduza o impacto da ansiedade no seu dia a dia, fortalecendo sua capacidade de se relacionar com colegas, amigos, familiares e parceiros de forma mais equilibrada.
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="accordion-item" data-aos="fade-up">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fas fa-user-shield me-2"></i> Autoconhecimento e Segurança
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#treatmentAccordion">
                    <div class="accordion-body">
                        A psicoterapia auxilia no desenvolvimento do autoconhecimento e no fortalecimento emocional, permitindo que você tome decisões mais conscientes e seguras.
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="accordion-item" data-aos="fade-up">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="fas fa-hands-helping me-2"></i> Relacionamentos mais Saudáveis
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#treatmentAccordion">
                    <div class="accordion-body">
                        Aprenda a lidar melhor com conflitos e a melhorar seus relacionamentos interpessoais, aumentando a empatia e a comunicação assertiva.
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="https://api.whatsapp.com/send/?phone=5547992090476" class="btn btn-success">
                <i class="fab fa-whatsapp"></i> Agendar Atendimento
            </a>
        </div>
    </div>
</section>


    <section id="approach">
        <h2 class="m-4 text-center">O que é Prática Baseada em Evidências (PBE)?</h2>
        <p class="text-center text-muted" data-aos="fade-up">
            É uma abrodagem que combina evidências científicas com a experiência clínica e as preferências do paciente. É uma forma de melhorar a qualidade da assistência à saúde
        </p>
        <div data-aos="fade-left" class="cards-container">
            <div class="pbe-card">
                <i class="fas fa-user-check"></i>
                <h4>Escolha do Psicólogo</h4>
                <p>A prática é baseada na melhor evidência científica disponível.</p>
            </div>
            <div class="pbe-card">
                <i class="fas fa-layer-group"></i>
                <h4>Diversas Abordagens</h4>
                <p>Não se limita a um único método, combinamos diferentes abordagens eficazes.</p>
            </div>
            <div class="pbe-card">
                <i class="fas fa-lightbulb"></i>
                <h4>Baseado em Evidências</h4>
                <p>Utilizamos pesquisas científicas para decidir os melhores protocolos para cada paciente.</p>
            </div>
            <div class="pbe-card">
                <i class="fas fa-cogs"></i>
                <h4>Adaptação ao Paciente</h4>
                <p>Protocolos são ajustados conforme a necessidade e realidade do paciente.</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://api.whatsapp.com/send/?phone=5567998837552" class="btn btn-success">
                <i class="fab fa-whatsapp"></i> Agendar Atendimento
            </a>
        </div>
    </section>
    <section id="my-work" class="py-5">
        <div class="container">
            <h2 class="m-4 text-center" data-aos="fade-up">Atendimentos Online</h2>

            <p class="text-center text-muted" data-aos="fade-up">
                A Psicoterapia Online tem se mostrado eficaz no tratamento de depressão, ansiedade, fobias, transtorno do pânico e muito mais.
            </p>

            <div class="row justify-content-center mt-4">
                <div class="col-md-4" data-aos="fade-right">
                    <div class="work-card">
                        <i class="fas fa-user-md"></i>
                        <h4>Baseado em Evidências</h4>
                        <p>Estudos comprovam que o atendimento online é viável para diversos transtornos psicológicos.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="work-card">
                        <i class="fas fa-comments"></i>
                        <h4>Conforto e Segurança</h4>
                        <p>A sessão online proporciona mais liberdade para falar sem julgamentos ou constrangimentos.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-left">
                    <div class="work-card">
                        <i class="fas fa-laptop"></i>
                        <h4>Atendimento Flexível</h4>
                        <p>Se adapte ao seu tempo e disponibilidade, sem deslocamentos ou imprevistos.</p>
                    </div>
                </div>
            </div>

            <h3 class="m-4 text-center" data-aos="fade-up">Como Funciona?</h3>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <span class="timeline-icon"><i class="fas fa-phone"></i></span>
                    <div class="timeline-content">
                        <h4>1º Passo: Contato Inicial</h4>
                        <p>Entre em contato pelo Instagram ou WhatsApp. Eu enviarei áudios explicando o processo.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-left">
                    <span class="timeline-icon"><i class="fas fa-file-contract"></i></span>
                    <div class="timeline-content">
                        <h4>2º Passo: Confirmação</h4>
                        <p>Após confirmar o horário e valores, será criado um contrato e combinaremos os detalhes.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-right">
                    <span class="timeline-icon"><i class="fas fa-video"></i></span>
                    <div class="timeline-content">
                        <h4>3º Passo: Sessão Online</h4>
                        <p>Baixe o Google Meet ou acesse pelo computador no dia e horário agendado.</p>
                    </div>
                </div>
            </div>

            <h3 class="text-center fw-bold mt-5" data-aos="fade-up">Alguns Detalhes Importantes</h3>

            <ul class="details-list" data-aos="fade-up">
                <li><i class="fas fa-check-circle"></i> Os atendimentos são fixos, sem necessidade de remarcar.</li>
                <li><i class="fas fa-exclamation-circle"></i> Caso precise faltar, avise com pelo menos 12h de antecedência.</li>
                <li><i class="fas fa-money-bill-wave"></i> Faltas sem aviso prévio serão cobradas normalmente.</li>
            </ul>

            <div class="text-center mt-4">
                <a href="https://api.whatsapp.com/send/?phone=5547992090476" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Agendar Atendimento
                </a>
            </div>
        </div>
    </section>


    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 - Todos os direitos reservados. CRP: 1409140-9 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>