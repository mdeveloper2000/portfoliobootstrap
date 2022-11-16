<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfólio - Index</title>
    </head>
    
    <body>
        
        <?php ?>
        
        <div class="container">
            <div class="row bg-primary mt-1">
                <h1 class="text-end text-light fw-bold pb-0 pt-2">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <a href="/" style="text-decoration: none;" class="text-light fw-bold">
                        Portfólio
                    </a>
                </h1>
                <h6 class="text-end text-light fw-bold pb-1">Portfólio/Currículo</h6>
            </div>
            
            <div class="row mt-1">
                <div class="col-3">
                    <div class="card" style="position: relative;">
                        <img src="assets/profiles/background.jpg" class="card-img-top" alt="imagem de fundo" height="250" />
                        <img src="assets/profiles/photo.jpg" alt="avatar/foto" style="position: absolute; margin-top: 42%; margin-left: 50%; transform: translate(-50%,-50%);" width="150" height="150" class="rounded-circle" />
                        <div class="card-body text-center">
                            <h5 class="card-title" id="nome"></h5>
                        </div>
                        <ul class="list-group list-group-flush bg-light">
                            <li class="list-group-item"><br />
                                <h6 class="text-center">Buscando oportunidades em:</h6>
                                <div id="vagas"></div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="text-center">Skills</h6>
                                <div id="skills"></div>                                
                            </li>                            
                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Formação técnica, graduação, pós-graduação, etc.">
                            <button class="nav-link active" id="formacao-tab" data-bs-toggle="tab" data-bs-target="#formacao" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fa-solid fa-graduation-cap"></i> Formação</i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Principais cursos finalizados ou em andamento">
                            <button class="nav-link" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="fa-solid fa-book-open-reader"></i> Cursos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Pricipais projetos desenvolvidos ou em desenvolvimento">
                            <button class="nav-link" id="projetos-tab" data-bs-toggle="tab" data-bs-target="#projetos" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="fa-solid fa-diagram-project"></i> Projetos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Livros e artigos escritos (publicados ou não)">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#livros" type="button" role="tab" aria-controls="books" aria-selected="false">
                                <i class="fa-solid fa-book"></i> Livros
                            </button>
                        </li>
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Experiência profissional">
                            <button class="nav-link" id="experiencia-tab" data-bs-toggle="tab" data-bs-target="#experiencia" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="fa-solid fa-building"></i> Experiência                         
                            </button>
                        </li>
                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Informações pessoais, sites, redes sociais, etc.">
                            <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#informacoes" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="fa-solid fa-circle-info"></i> Informações
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="formacao" role="tabpanel" aria-labelledby="formacao-tab"></div>
                        <div class="tab-pane fade" id="cursos" role="tabpanel" aria-labelledby="cursos-tab"></div>
                        <div class="tab-pane fade" id="projetos" role="tabpanel" aria-labelledby="projetos-tab"></div>
                        <div class="tab-pane fade show" id="livros" role="tabpanel" aria-labelledby="livros-tab"></div>
                        <div class="tab-pane fade show" id="experiencia" role="tabpanel" aria-labelledby="experiencia-tab"></div>
                        <div class="tab-pane fade show" id="informacoes" role="tabpanel" aria-labelledby="informacoes-tab"></div>                        
                    </div>
                </div>
                <div class="col-1">
                    <div class="card mb-5 mt-5">
                        <img src="assets/propaganda/1.jpg" class="card-img-top" alt="Propaganda item 1" />
                    </div>
                    <div class="card mb-5 mt-5">
                        <img src="assets/propaganda/2.jpg" class="card-img-top" alt="Propaganda item 2" />
                    </div>
                    <div class="card mb-5 mt-5">
                        <img src="assets/propaganda/3.jpg" class="card-img-top" alt="Propaganda item 3" />
                    </div>
                    <div class="card mb-5 mt-5">
                        <img src="assets/propaganda/4.jpg" class="card-img-top" alt="Propaganda item 4" />
                    </div>
                    <div class="card mb-5 mt-5">
                        <img src="assets/propaganda/5.jpg" class="card-img-top" alt="Propaganda item 5" />
                    </div>
                </div>
            </div>            
        </div>
        
        <style>
            #informacoes a {
                text-decoration: none;
            }
        </style>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="assets/js/portfolio.js"></script>
        <script src="assets/js/vagas.js"></script>
        <script src="assets/js/skills.js"></script>
        <script src="assets/js/formacao.js"></script>
        <script src="assets/js/cursos.js"></script>
        <script src="assets/js/projetos.js"></script>
        <script src="assets/js/livros.js"></script>
        <script src="assets/js/experiencia.js"></script>
        <script src="assets/js/informacoes.js"></script>
        
    </body>

</html>