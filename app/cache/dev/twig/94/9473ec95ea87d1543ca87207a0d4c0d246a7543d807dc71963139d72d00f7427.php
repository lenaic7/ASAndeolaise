<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dbc1a7d2ae5527fe3b42fe81d4452588e2c69e884200798e99ebf743617c098e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_600481c2a9ce06212dee5d3eca0721968cc11d8d98c485acfe8a4fdfb0cdb64d = $this->env->getExtension("native_profiler");
        $__internal_600481c2a9ce06212dee5d3eca0721968cc11d8d98c485acfe8a4fdfb0cdb64d->enter($__internal_600481c2a9ce06212dee5d3eca0721968cc11d8d98c485acfe8a4fdfb0cdb64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600481c2a9ce06212dee5d3eca0721968cc11d8d98c485acfe8a4fdfb0cdb64d->leave($__internal_600481c2a9ce06212dee5d3eca0721968cc11d8d98c485acfe8a4fdfb0cdb64d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1dc2adc108864650cb8fdfe5187c4475aa89c9b4c9a0351c3bf9d4cf133ce92 = $this->env->getExtension("native_profiler");
        $__internal_d1dc2adc108864650cb8fdfe5187c4475aa89c9b4c9a0351c3bf9d4cf133ce92->enter($__internal_d1dc2adc108864650cb8fdfe5187c4475aa89c9b4c9a0351c3bf9d4cf133ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1dc2adc108864650cb8fdfe5187c4475aa89c9b4c9a0351c3bf9d4cf133ce92->leave($__internal_d1dc2adc108864650cb8fdfe5187c4475aa89c9b4c9a0351c3bf9d4cf133ce92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_681c668e97ad44a0874c4030dcf084c27b843df2debe5405e1a27a181903fe9d = $this->env->getExtension("native_profiler");
        $__internal_681c668e97ad44a0874c4030dcf084c27b843df2debe5405e1a27a181903fe9d->enter($__internal_681c668e97ad44a0874c4030dcf084c27b843df2debe5405e1a27a181903fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_681c668e97ad44a0874c4030dcf084c27b843df2debe5405e1a27a181903fe9d->leave($__internal_681c668e97ad44a0874c4030dcf084c27b843df2debe5405e1a27a181903fe9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1479fa762e647dbf4370a0b37bf4e4ecf46889f685ca9d80767d254db029932a = $this->env->getExtension("native_profiler");
        $__internal_1479fa762e647dbf4370a0b37bf4e4ecf46889f685ca9d80767d254db029932a->enter($__internal_1479fa762e647dbf4370a0b37bf4e4ecf46889f685ca9d80767d254db029932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1479fa762e647dbf4370a0b37bf4e4ecf46889f685ca9d80767d254db029932a->leave($__internal_1479fa762e647dbf4370a0b37bf4e4ecf46889f685ca9d80767d254db029932a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
