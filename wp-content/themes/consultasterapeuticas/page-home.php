<?php
// Template Name: Home 
?>

<?php get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- <h1>Essa é a Home</h1> -->

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 pt-5 mt-4 texto-intro">
                    <h1>Consultas Terapêuticas<br>on-line e gratuitas</h1>
                    <p>Atendimento psicológico, em formato de Consultas Terapêuticas, para pessoas que estejam atravessando situações de crises, momentos difíceis, sofrimentos, inseguranças, ansiedades e angústias.</p>
                    <p>Atendimento gratuito, on-line, uma a cinco consultas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="coletivo" id="coletivo">
        <div class="container">
            <div class="row text-center"> 
                <div class="col-sm-8 mx-auto pt-5 mb-4">
                    <h2 class="mb-4">O Coletivo</h2>
                    <p>O Coletivo se inspirou nas <span>Consultas Terapêuticas de Donald Woods Winnicott</span>, a partir de sua longa e rica experiência como pediatra, psicanalista e psiquiatra. Trata-se de um dispositivo terapêutico de grande potência, nas situações de crises, no qual o analista oferece uma hospedagem, um  espaço terapêutico, onde <span>um encontro e uma comunicação verdadeira e significativa</span> possa ocorrer, elaborando seus sofrimentos e <span>dando continuidade a sua linha de vida</span>.</p>
                    <p class="call mt-3 mb-4">Se você precisa de ajuda, clique no botão e inscreva-se para solicitar uma consulta.</p>
                </div>
                <div class="col-sm-8 mx-auto mb-5">
                    <a class="btn-form" href="">Solicitar Consulta</a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <!-- repeater posts 6 últimas postagens -->
        <a href="" class="btn">Ver Todos os Posts</a>
    </section>

    <section class="nosso-objetivo pt-5 pb-5" id="nosso-objetivo">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <h2 class="mb-3">Nosso Objetivo</h2>
                    <p>Oferecer Consultas Terapêuticas on-line às pessoas, que estejam atravessando situações de crise: momentos difíceis da sua vida, sofrimentos psicológicos, inseguranças, medos, ansiedades e angústias, visando acolher, oferecer continência e suporte psicológico para que as pessoas possam elaborar seus sofrimentos e dar continuidade a sua linha de vida.</p>
                </div>
            </div>
        </div>    
    </section>

    <section class="nossa-historia pt-5 pb-5" id="nossa-historia">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <h2 class="mb-3">Nossa História</h2>
                    <h3 class="mb-3">O Início</h3>
                    <p class="mb-1">O projeto foi elaborado, dirigido e realizado por um grupo de psicanalistas do Espaço Potencial Winnicott do Instituto Sedes Sapientiae e integrou-se aos Projetos da Clínica deste Instituto, durante o período da Pandemia. Agora em 2023, não está mais vinculado ao ISS, funciona como um Coletivo independente.</p>
                    <p class="mb-1">Visou, inicialmente, oferecer suporte psicológico aos profissionais da Saúde, que atuavam na linha de frente no início  da Pandemia. Logo percebemos a necessidade de ampliar o projeto para a população em geral. A demanda vinha de vários cantos do Brasil.</p>
                    <p class="mb-3">O projeto, certamente, nos ajudou a processar e amenizar as nossas angústias, visto que não nos paralisamos e nossa ação confirmou ser eficaz nesta situação que se apresentou.</p>

                    <h3 class="mb-3">O Resultado</h3>
                    <p class="mb-1">Com o passar do tempo, nosso trabalho foi se tornando conhecido e reconhecido pelo bom atendimento prestado às pessoas que nos procuraram e os próprios pacientes passaram a divulgar nosso serviço entre seus pares. A divulgação “boca a boca" e nas mídias incrementaram muito os encaminhamentos.</p>
                    <p class="mb-1">Nas crises se revelam potencialidades. A resiliência ou a vulnerabilidade, permitem a superação ou podem levar à regressões profundas, necessitando que o sujeito busque ajudas pontuais ou tratamentos prolongados.</p>
                    <p class="mb-3">As Consultas Terapêuticas têm se mostrado potentes e adequadas aos tratamentos deste tipo e podem ser uma possibilidade de experimentação de um contato terapêutico que desperte o indivíduo para novas experiências terapêuticas.</p>

                    <h3 class="mb-3">A continuidade</h3>
                    <p class="mb-1">Observamos que a Pandemia fez eclodir questões graves que estavam latentes na população e também provocou novos sofrimentos.</p>
                    <p class="mb-3">Atendemos classes populares que dificilmente chegariam a ter um atendimento psicológico. Nosso grupo se envolveu nesta empreitada com garra e disponibilidade, aperfeiçoando a técnica, fazendo pesquisas e desenvolvendo um trabalho pujante, ético e acolhedor.</p>
                </div>
            </div>
        </div> 
    </section>

    <section class="profissionais" id="nossa-historia">
        <h2>Profissionais Envolvidos</h2>
        <p>Psicanalistas possuem um profundo conhecimento da teoria e prática winnicottiana.</p>
        <p>São representantes desse coletivo: Afrânio de Matos Ferreira (afraniodematos@gmail.com)  e Angela May (angela@may.psc.br).</p>
        <p>Atualmente fazem parte do projeto:</p>

        <!-- repeater profissionais -->

        <p>Se você precisa de ajuda, clique no botão e inscreva-se para solicitar uma consulta.</p>
        <a href="" class="btn">Solicitar Consulta</a>

    </section>

    <section class="parceiros" id="parceiros">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiros.png" alt="Parceiros">
        </div>
        <div>
            <h2>Parceiros</h2>
            <p>Pessoas, empresas e instituições que acreditam na importância do projeto e colaboram para sua manutenção e continuidade:</p>
        </div>

        <!-- carrossel parceiros -->

    </section>

    <section class="instagram" id="instagram">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Ícone Instagram">
        <h2>Instagram</h2>
        <a href="https://www.instagram.com/consultasterapeuticas/" target="_blank">@consultasterapeuticas</a>

        <!-- carrossel posts instagram -->

    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>