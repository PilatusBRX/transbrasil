<?php include_once 'header.php';  ?>


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

<section class="map">
    <div class="text">
        <h2>onde nos localizar</h2>               
    </div>
    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59180.98246341443!2d-47.93107673973649!3d-22.018536130385847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b87726bb9dd181%3A0xd9d7d71505999bc!2zU8OjbyBDYXJsb3MsIFNQ!5e0!3m2!1spt-BR!2sbr!4v1522555103827" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</section>
    

<?php include_once 'footer.php';  ?>