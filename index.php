

<?php include_once 'header.php';  ?>

<!--BANNER-->
  <div class="banner">
        <div id="carouselExampleIndicators" class="carousel  carousel-fade " data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

    <div class="carousel-inner">
            <div class="carousel-item active">
                    <img src="img/slide/slide-1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3 class="animated fadeInLeft">MUDANÇA PARA TODO O BRASIL</h3>
                        <p class="animated fadeInUp">Para transportar fretes e encomendas dos mais diferentes tamanhos e pesos para várias regiões<br> a Transcotempo oferece um
                        sistema eficaz entregas capaz de acolher as principais cidades.</p>
                        <a href="servicos.html" class="btn btn-primary animated fadeInUp" >conheça os serviços</a> 
                        <button type="button" class="btn btn-secondary animated fadeInUp" data-toggle="modal" data-target="#exampleModalCenter">
                        entre em contato
                        </button>      
                    </div>
            </div>

            <div class="carousel-item">
                    <img src="img/slide/slide-3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3 class="animated fadeInDown">TRANSPORTE DE
                        FRETES FRACIONADOS</h3>
                        <p class="animated fadeInUp">A TransBrasil é especializada no serviços de mudança para todo o Brasil,
                        contamos com profissionais empenhados e<br> comprometidos com os nossos clientes.
                        Venha para a Transcotempo e tenha os melhores serviços.</p>
                        <a href="servicos.html" class="btn btn-primary animated fadeInUp" >conheça os serviços</a> 
                        <button type="button" class="btn btn-secondary animated fadeInUp" data-toggle="modal" data-target="#exampleModalCenter">
                        entre em contato
                        </button>  
                    </div>
            </div>

            <div class="carousel-item">
                <img src="img/slide/slide-4.jpg" alt="...">
                <div class="carousel-caption">
                        <h3 class="animated fadeInRight">TRANSPORTADORA DE
                        CARGAS FECHADAS</h3>
                        <p class="animated fadeInRight">Se sua carga é de grande volume ou peso o produto mais recomendado é o transporte de carga fechada,<br> nesta circunstância o que se contrata é o veículo específico para o serviço ou como costuma-se chamar fretamento.</p>
                        <a href="servicos.html" class="btn btn-primary animated fadeInUp" >conheça os serviços</a> 
                        <button type="button" class="btn btn-secondary animated fadeInUp" data-toggle="modal" data-target="#exampleModalCenter">
                        entre em contato
                        </button> 
                </div>
            </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <img src="img/icons/arrow-right.png" alt="">
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <img src="img/icons/arrow-left.png" alt="">
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</div><!--end of banner/slider-->
      
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2>Formulário de contato</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="mail.php" method="POST">
                   <input type="text" name="nome" placeholder="Nome" required="required">
                   <input type="email" name="email" placeholder="E-mail" required="required">
                   <input type="text" name="assunto" placeholder="Assunto">
                   <textarea name="msg" placeholder="Mensagem"required="required"></textarea> </textarea>
                   <input type="submit" value="Enviar">

               </form>
            </div>           
            </div>
        </div>
</div><!--end of modal-->

<section class="presentation">
    <div class="container">
        <div class="text">
            <h2>serviço de trasporte para todo o Brasil</h2>
            <p>Serviço de transporte e agenciamento de carga especializado para sua empresa crescer. Soluções em transportes integradas para clientes que desejam gastar menos tempo com a sua encomenda.</p> 
        </div>  
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row">
        <div class="service">
            <img class="img-fluid" src="img/service/img-1.jpg" alt="">
            <h3>fretes fracionados</h3>
            <p>A TransBrasil oferece o serviço de transporte de carga fracionada em Curitiba exatamente para este cliente que não tem carga suficiente para preencher todo o veículo, então nada mais justo que somente pagar pelo espaço utilizado, este serviço oferece uma grande diminuição de custo no contrato do transporte de cargas.</p>
        </div>
        <div class="service">
            <img class="img-fluid" src="img/service/img-2.jpg" alt="">
            <h3>cargas fechadas</h3>
            <p>A TransBrasil disponibiliza um caminhão especialmente para conduzir a carga fechada Curitiba de um cliente.  independente do volume que estará sendo conduzido, o custo dos produtos é praticamente o mesmo. Ele é decidido muito mais pela rota que será feita e pelo tempo que será consumido para carga e descarga.</p>
        </div>
        <div class="service">
            <img class="img-fluid" src="img/service/img-3.jpg" alt="">
            <h3>mudanças</h3>
            <p>As mudanças em Curitiba exigem uma atenção especial, afinal durante o percurso é realizado o transporte dos mais variados itens, caracterizando uma carga mista e de muita responsabilidade.</p>
        </div>
        <div class="service">
            <img class="img-fluid" src="img/service/img-4.jpg" alt="">
            <h3>transporte dedicado</h3>
            <p>O transporte dedicado , como o próprio nome já diz, é o serviço no qual dedica um veículo a uma determinada empresa. Além dela poder utilizar esse veículo para transportar somente suas cargas, sem precisar compartilhá-lo com outras organizações.</p>
        </div>
        </div>
    </div>
</section>

<section class="showcase">
    <div class="container">
        <div class="text">
            <h2 class="text-center">SERVIÇO DE TRANSPORTE NO BRASIL</h2>
            <p>Serviço de transporte e agenciamento de carga especializado para sua empresa crescer. Soluções em transportes integradas para clientes que desejam gastar menos tempo com a sua encomenda.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#budget">
            faça o orçamento
            </button>
        </div>
        
    </div>

<!-- Modal -->
<div class="modal fade" id="budget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2>Orçamento</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="budget.php" method="POST">
                   <input type="text" name="nome" placeholder="Nome" required="required">
                   <input type="email" name="email" placeholder="E-mail" required="required">                  
                   <textarea name="msg" placeholder="Investimento previsto em R$" required="required"></textarea> </textarea>
                   <input type="submit" value="Enviar">

               </form>
            </div>           
            </div>
        </div>
   </div><!--end of modal-->
</section>

<section class="company">
    <div class="container">
        <div class="text-info">
            <h2>conheça nossa empresa </h2>
            <p>Com o intuito de proporcionar um transporte adequado a todo e qualquer tipo de carga a Transcotempo caracteriza-se como uma das principais empresas de transporte e agênciamento de cargas do Brasil. Com sua sede em São Carlos - SP,  realiza a otimização na movimentação de cargas por todo o território nacional, atendendo clientes de pequeno, médio e grande porte.</p>            
            <div class="button">
                <a class="btn btn-secondary" href="empresa.html">saiba mais</a>
                <a class="btn btn-danger" href="servicos.html">nossos serviços</a> 
            </div>
              
        </div>
        <div class="thumb">
            <img class="img-fluid" src="img/service/img-2.jpg" alt="">
        </div>
    </div>
</section>

<section class="company-values">    
     <div class="text">           
        <h2 class="text-center">nossos valores</h2>           
     </div> 

 <div class="container"> 
        
     <div class="icon-info vision">
        <img src="img/icons/eye-open.svg" alt="">
        <h3>Visão</h3>
        <p>Destacar-se em meio ao segmento de atuação, tornando-se referência entre as empresas de transporte e agênciamento pela qualidade. </p>
     </div> 

     <div class="icon-info diamond">
        <img src="img/icons/diamond.svg" alt="">
        <h3>Valores</h3>
        <p>Transparência, agilidade, integridade e comprometimento por meio de todas as ações desenvolvidas, prezando sempre pela melhoria contínua. </p>
    </div> 

    <div class="icon-info loss">
        <img src="img/icons/loss.svg" alt="">
        <h3>Missão</h3>
        <p>Promover através de recursos necessários o transporte e agênciamento adequado dos mais variados bens, zelando pela integridade e qualidade.</p>
    </div> 

 </div> 
</section>

<section class="testimonials">
    
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <h2>O QUE PENSAM SOBRE A TRANSBRASIL</h2>
             <div class="carousel-inner">
                 
                  <div class="carousel-item active">
                        <img src="img/person/testimonial-1.png" alt="">
                        <p class="animated fadeInRight">Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna.”</p>
                        <h4 class="animated fadeInUp">Eduarda Nascimento</h4>
                  </div>

                  <div class="carousel-item">
                        <img src="img/person/testimonial-2.png" alt="">
                        <p class="animated fadeInUp">Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna.”</p>
                        <h4 class="animated fadeInUp">Sérgio Mello</h4>
                  </div>

                  <div class="carousel-item">
                        <img src="img/person/testimonial-3.png" alt="">
                        <p class="animated fadeInRight">Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna.”</p>
                        <h4 class="animated fadeInUp">António Ayo</h4>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

</section>

<section class="contact-us">			
    <div class="text">
        <h2>entre em contato conosco</h2>				
    </div>       
    <div class="container">		
        		       
        <form action="mail.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required="required">
            <input type="email" name="email" placeholder="E-mail" required="required">			
            <input type="text" name="assunto" placeholder="Assunto">
            <textarea  name="msg" placeholder="Mensagem" required="required"></textarea>
            <button type="submit" class="btn btn-labeled btn-warning">
                <span class="btn-label"><i class="fas fa-paper-plane"></i></span>Enviar
            </button>
            
        </form>
       
  </div><!--container-->	
</section>

<?php include_once 'footer.php';  ?>