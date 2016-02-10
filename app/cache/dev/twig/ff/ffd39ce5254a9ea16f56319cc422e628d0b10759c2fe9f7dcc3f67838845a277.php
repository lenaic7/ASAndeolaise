<?php

/* ASAChampionnatBundle::layout.html.twig */
class __TwigTemplate_fca32937e97182d11096c6b8035b24dc4ab78a0275600f0aae873a5ec85da228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'left' => array($this, 'block_left'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c04bbe3e018705b20e0b99e33fa8fd65d35cdd6f8fe43dd0ad55ef740485f4b0 = $this->env->getExtension("native_profiler");
        $__internal_c04bbe3e018705b20e0b99e33fa8fd65d35cdd6f8fe43dd0ad55ef740485f4b0->enter($__internal_c04bbe3e018705b20e0b99e33fa8fd65d35cdd6f8fe43dd0ad55ef740485f4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div id='header_top'>
                Bienvenue sur le site de l'A.S. Andéolaise
            </div>
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/images/logo_asa.PNG"), "html", null, true);
        echo "\" /> 
            ";
        // line 25
        echo twig_include($this->env, $context, "ASAChampionnatBundle:Default:menu.html.twig");
        echo "
        </header>
        <section id=\"global\">
            <section id=\"left\" class=\"col-lg-8\">
                ";
        // line 29
        $this->displayBlock('left', $context, $blocks);
        // line 30
        echo "            </section>
            <section id=\"right\" class=\"col-lg-4\">
                ";
        // line 32
        $this->displayBlock('right', $context, $blocks);
        // line 38
        echo "        </section>
        <footer>
            ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ASAChampionnatBundle:Default:sponsor"));
        // line 42
        echo " 
        </footer>

    </body>
</html>
";
        // line 47
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_c04bbe3e018705b20e0b99e33fa8fd65d35cdd6f8fe43dd0ad55ef740485f4b0->leave($__internal_c04bbe3e018705b20e0b99e33fa8fd65d35cdd6f8fe43dd0ad55ef740485f4b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e2d92149242ba6c3ed8b880e1b9dbb334c6ae1c259324979127f3a4ad07123e = $this->env->getExtension("native_profiler");
        $__internal_0e2d92149242ba6c3ed8b880e1b9dbb334c6ae1c259324979127f3a4ad07123e->enter($__internal_0e2d92149242ba6c3ed8b880e1b9dbb334c6ae1c259324979127f3a4ad07123e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AS.Andéolaise";
        
        $__internal_0e2d92149242ba6c3ed8b880e1b9dbb334c6ae1c259324979127f3a4ad07123e->leave($__internal_0e2d92149242ba6c3ed8b880e1b9dbb334c6ae1c259324979127f3a4ad07123e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_031457586886def1b5da5a9962c82c5816a1a25ae30a9a7940082b447d3d0811 = $this->env->getExtension("native_profiler");
        $__internal_031457586886def1b5da5a9962c82c5816a1a25ae30a9a7940082b447d3d0811->enter($__internal_031457586886def1b5da5a9962c82c5816a1a25ae30a9a7940082b447d3d0811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  
            <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_031457586886def1b5da5a9962c82c5816a1a25ae30a9a7940082b447d3d0811->leave($__internal_031457586886def1b5da5a9962c82c5816a1a25ae30a9a7940082b447d3d0811_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5fe54675b18270e11297c183a9662130e7b97f17b769ce35d896496726ec08e = $this->env->getExtension("native_profiler");
        $__internal_b5fe54675b18270e11297c183a9662130e7b97f17b769ce35d896496726ec08e->enter($__internal_b5fe54675b18270e11297c183a9662130e7b97f17b769ce35d896496726ec08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/sliderNews.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_b5fe54675b18270e11297c183a9662130e7b97f17b769ce35d896496726ec08e->leave($__internal_b5fe54675b18270e11297c183a9662130e7b97f17b769ce35d896496726ec08e_prof);

    }

    // line 29
    public function block_left($context, array $blocks = array())
    {
        $__internal_e9ed450526e8a5e777d1db2d0c7231fcfcd3cf901f4ae2ee2d5b6e8bb76570fe = $this->env->getExtension("native_profiler");
        $__internal_e9ed450526e8a5e777d1db2d0c7231fcfcd3cf901f4ae2ee2d5b6e8bb76570fe->enter($__internal_e9ed450526e8a5e777d1db2d0c7231fcfcd3cf901f4ae2ee2d5b6e8bb76570fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        echo " ";
        
        $__internal_e9ed450526e8a5e777d1db2d0c7231fcfcd3cf901f4ae2ee2d5b6e8bb76570fe->leave($__internal_e9ed450526e8a5e777d1db2d0c7231fcfcd3cf901f4ae2ee2d5b6e8bb76570fe_prof);

    }

    // line 32
    public function block_right($context, array $blocks = array())
    {
        $__internal_4906474cbbb22adcd415b8214b8b5270b9c80bab463a0c571a5e68b73cd5e9a3 = $this->env->getExtension("native_profiler");
        $__internal_4906474cbbb22adcd415b8214b8b5270b9c80bab463a0c571a5e68b73cd5e9a3->enter($__internal_4906474cbbb22adcd415b8214b8b5270b9c80bab463a0c571a5e68b73cd5e9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 33
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ASAChampionnatBundle:Default:listEvenements"));
        // line 35
        echo "
                </section>
            ";
        
        $__internal_4906474cbbb22adcd415b8214b8b5270b9c80bab463a0c571a5e68b73cd5e9a3->leave($__internal_4906474cbbb22adcd415b8214b8b5270b9c80bab463a0c571a5e68b73cd5e9a3_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 35,  173 => 33,  167 => 32,  155 => 29,  146 => 15,  142 => 14,  138 => 13,  134 => 12,  131 => 11,  125 => 10,  116 => 8,  112 => 7,  104 => 6,  92 => 5,  85 => 47,  78 => 42,  76 => 40,  72 => 38,  70 => 32,  66 => 30,  64 => 29,  57 => 25,  53 => 24,  42 => 17,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}AS.Andéolaise{% endblock %}</title>*/
/*         {% block javascripts %}  */
/*             <script src="{{ asset('bundles/asachampionnat/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('bundles/asachampionnat/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/menu.css') }}" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/style.css') }}" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/sliderNews.css') }}" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/bootstrap.min.css') }}" type="text/css" media="all" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div id='header_top'>*/
/*                 Bienvenue sur le site de l'A.S. Andéolaise*/
/*             </div>*/
/*             <img src="{{ asset('bundles/asachampionnat/images/logo_asa.PNG') }}" /> */
/*             {{ include('ASAChampionnatBundle:Default:menu.html.twig') }}*/
/*         </header>*/
/*         <section id="global">*/
/*             <section id="left" class="col-lg-8">*/
/*                 {% block left %} {% endblock %}*/
/*             </section>*/
/*             <section id="right" class="col-lg-4">*/
/*                 {% block right %}*/
/*                     {{ render(controller(*/
/*         'ASAChampionnatBundle:Default:listEvenements'*/
/*     )) }}*/
/*                 </section>*/
/*             {% endblock %}*/
/*         </section>*/
/*         <footer>*/
/*             {{ render(controller(*/
/*         'ASAChampionnatBundle:Default:sponsor'*/
/*     )) }} */
/*         </footer>*/
/* */
/*     </body>*/
/* </html>*/
/* {{ tinymce_init() }}*/
