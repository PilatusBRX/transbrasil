<?php include_once 'header.php';  ?>

<section class="services our-services">
    <div class="text">
        <h2>nossos serviços</h2>               
    </div> 
    <div class="container">
        <div class="row">
        <div class="service">
            <img class="img-fluid" src="img/service/img-1.jpg" alt="">
            <h3>fretes fracionados</h3>
            <p>A TransBrasil oferece o serviço de transporte de carga fracionada em Curitiba exatamente para este cliente que não tem carga suficiente para preencher todo o veículo, então nada mais justo que somente pagar pelo espaço utilizado, este serviço oferece uma grande diminuição de custo no contrato do transporte de cargas.</p>
            <p>Nada mais é que um carregamento de quantidade pequena que não preenche todo o veículo que fará o transporte. Pelo caso dessa carga não preencher o veículo, é realizada muitas coletas de cargas compatíveis para o mesmo carregamento e caminho.</p>

            <p>A TransBrasil oferece o serviço de transporte de carga fracionada exatamente para este cliente que não tem carga suficiente para preencher todo o veículo, então nada mais justo que somente pagar pelo espaço utilizado, este serviço oferece uma grande diminuição de custo no contrato do transporte de cargas.</p>
        </div>
        <div class="service">
            <img class="img-fluid" src="img/service/img-2.jpg" alt="">
            <h3>cargas fechadas</h3>
            <p>A TransBrasil disponibiliza um caminhão especialmente para conduzir a carga fechada Curitiba de um cliente.  independente do volume que estará sendo conduzido, o custo dos produtos é praticamente o mesmo. Ele é decidido muito mais pela rota que será feita e pelo tempo que será consumido para carga e descarga.</p>
            <p>A TransBrasil disponibiliza um caminhão especialmente para conduzir a carga fechadas de um cliente. Dessa maneira, independente do volume que estará sendo conduzido, o custo para o dono dos itens e produtos é praticamente o mesmo. Ele é decidido muito mais pela rota que será feita e pelo tempo que será consumido para carga e descarga do caminhão.</p>

            <p>Apesar disto, no momento em que o peso do produto for menor, facilitando a carga e a descarga, o preço final pode ser mais acolhedor, já que o veículo utilizado irá sentir um menor desgaste e beber pouco combustível.</p>
        </div>

        <div class="service">
            <img class="img-fluid" src="img/service/img-3.jpg" alt="">
            <h3>mudanças</h3>
            <p>As mudanças exigem uma atenção especial, afinal durante o percurso é realizado o transporte dos mais variados itens, caracterizando uma carga mista e de muita responsabilidade.</p>
            <p>A TransBrasil possui equipes treinadas e especializadas que proporcionam aos nossos clientes segurança e tranquilidade no transporte de seus bens materiais, transportamos objetos e móveis especiais.</p>

            <p>Prestamos serviços de mudanças em Curitiba com responsabilidade, segurança e qualidade.Contamos com os melhores profissionais e especializados que atendem com total prontidão e eficiência. Venha para a Transportadora em Curitiba Transcotempo e mude com segurança, rapidez e qualidade.</p>
        </div>
        <div class="service">
            <img class="img-fluid" src="img/service/img-4.jpg" alt="">
            <h3>transporte dedicado</h3>
            <p>O transporte dedicado , como o próprio nome já diz, é o serviço no qual dedica um veículo a uma determinada empresa. Além dela poder utilizar esse veículo para transportar somente suas cargas, sem precisar compartilhá-lo com outras organizações.</p>
            <p>O transporte dedicado resolve essa dificuldade, permitindo que a empresa transporte somente as suas cargas, o que evita que elas entrem em contato com mercadorias de outra classe e percam as suas qualidades originais. No transporte dedicado, a transportadora em Curitiba Transcotempo também possui a capacidade de transportar mais cargas num único veículo, o que diminui o número de caminhões necessários para transportar um grande pedido.</p>
        </div>
         <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#budget-services">
            faça o orçamento
        </button>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="budget-services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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


<?php include_once 'footer.php';  ?>