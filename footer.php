 </main>
<footer>
    <div class="container">
        <div class="logo-rodape">
            <a href="index.html">
                <img src="<?php bloginfo('template_url'); ?>/images/logo1.png" alt="">
            </a>
            <p><?php echo date('Y'); ?> - Todos os direitos reservados <a href="mailto:<?php bloginfo('admin_email');
            ?>"><?php bloginfo('admin_email');
            ?></a></p>
        </div>
     </div>
</footer>
</div>
<script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>
<script>
    $(function(){
        //$('.menu-responsivo').hide();
        $('.toggle').click(function(){
            $('.layout').toggleClass('ativo');
            $('.menu-responsivo').toggleClass('ativo');
            $(this).toggleClass('ativo');
        });
        new WOW().init();
    });
</script>
    </body>
</html>