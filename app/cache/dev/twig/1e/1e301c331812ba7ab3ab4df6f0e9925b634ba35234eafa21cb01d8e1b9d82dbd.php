<?php

/* ASAChampionnatBundle:Default:index.html.twig */
class __TwigTemplate_e135beefce4fea7ed6301ed4e3f193d0f5c2b175482cd45c255d3a22cf9c004b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASAChampionnatBundle::layout.html.twig", "ASAChampionnatBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'left' => array($this, 'block_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASAChampionnatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7936c069e70b297c4f8a57f589d719c948ff149ddeaea2f4cda5ba407a2ad293 = $this->env->getExtension("native_profiler");
        $__internal_7936c069e70b297c4f8a57f589d719c948ff149ddeaea2f4cda5ba407a2ad293->enter($__internal_7936c069e70b297c4f8a57f589d719c948ff149ddeaea2f4cda5ba407a2ad293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7936c069e70b297c4f8a57f589d719c948ff149ddeaea2f4cda5ba407a2ad293->leave($__internal_7936c069e70b297c4f8a57f589d719c948ff149ddeaea2f4cda5ba407a2ad293_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b5ced183e4868bcdad6dcb2da1b46c7a1cc8f635924395c6f66d654921a02ae = $this->env->getExtension("native_profiler");
        $__internal_8b5ced183e4868bcdad6dcb2da1b46c7a1cc8f635924395c6f66d654921a02ae->enter($__internal_8b5ced183e4868bcdad6dcb2da1b46c7a1cc8f635924395c6f66d654921a02ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/js/sliderNews.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_8b5ced183e4868bcdad6dcb2da1b46c7a1cc8f635924395c6f66d654921a02ae->leave($__internal_8b5ced183e4868bcdad6dcb2da1b46c7a1cc8f635924395c6f66d654921a02ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_446e813d7c51634355528b565c56862c620dca5e960a20606758cdc502c1cbb6 = $this->env->getExtension("native_profiler");
        $__internal_446e813d7c51634355528b565c56862c620dca5e960a20606758cdc502c1cbb6->enter($__internal_446e813d7c51634355528b565c56862c620dca5e960a20606758cdc502c1cbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Bienvenue !
";
        
        $__internal_446e813d7c51634355528b565c56862c620dca5e960a20606758cdc502c1cbb6->leave($__internal_446e813d7c51634355528b565c56862c620dca5e960a20606758cdc502c1cbb6_prof);

    }

    // line 11
    public function block_left($context, array $blocks = array())
    {
        $__internal_5db2ed5d76eb3044e81997f29bb27b1877af577fbf6af815a5df44f7e6126e91 = $this->env->getExtension("native_profiler");
        $__internal_5db2ed5d76eb3044e81997f29bb27b1877af577fbf6af815a5df44f7e6126e91->enter($__internal_5db2ed5d76eb3044e81997f29bb27b1877af577fbf6af815a5df44f7e6126e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        
        $__internal_5db2ed5d76eb3044e81997f29bb27b1877af577fbf6af815a5df44f7e6126e91->leave($__internal_5db2ed5d76eb3044e81997f29bb27b1877af577fbf6af815a5df44f7e6126e91_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  62 => 8,  56 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'ASAChampionnatBundle::layout.html.twig' %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/asachampionnat/js/sliderNews.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - Bienvenue !*/
/* {% endblock %}*/
/* */
/* {% block left %}*/
/* {% endblock %}*/
