<?php

/* base.html.twig */
class __TwigTemplate_b44a4a98c820e93b7490d9070efd8518d8c6c187a56bf990769fb9c65bc66032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0276041e80c34052de7b552198394a0548d80f3461d36d1981f6011714808fa = $this->env->getExtension("native_profiler");
        $__internal_a0276041e80c34052de7b552198394a0548d80f3461d36d1981f6011714808fa->enter($__internal_a0276041e80c34052de7b552198394a0548d80f3461d36d1981f6011714808fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a0276041e80c34052de7b552198394a0548d80f3461d36d1981f6011714808fa->leave($__internal_a0276041e80c34052de7b552198394a0548d80f3461d36d1981f6011714808fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17fd7f9e9004a519b92e51ab9174980372611d76a828159eaefb420568d958a7 = $this->env->getExtension("native_profiler");
        $__internal_17fd7f9e9004a519b92e51ab9174980372611d76a828159eaefb420568d958a7->enter($__internal_17fd7f9e9004a519b92e51ab9174980372611d76a828159eaefb420568d958a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17fd7f9e9004a519b92e51ab9174980372611d76a828159eaefb420568d958a7->leave($__internal_17fd7f9e9004a519b92e51ab9174980372611d76a828159eaefb420568d958a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95a63e32c032f4fc501fb4939fd0459ecce887ae5bca6eb210a69039ec39f297 = $this->env->getExtension("native_profiler");
        $__internal_95a63e32c032f4fc501fb4939fd0459ecce887ae5bca6eb210a69039ec39f297->enter($__internal_95a63e32c032f4fc501fb4939fd0459ecce887ae5bca6eb210a69039ec39f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95a63e32c032f4fc501fb4939fd0459ecce887ae5bca6eb210a69039ec39f297->leave($__internal_95a63e32c032f4fc501fb4939fd0459ecce887ae5bca6eb210a69039ec39f297_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_38cc548caf74eb7159f9de142bd536228f199a4f6399c21ccf8dd9eafa16a980 = $this->env->getExtension("native_profiler");
        $__internal_38cc548caf74eb7159f9de142bd536228f199a4f6399c21ccf8dd9eafa16a980->enter($__internal_38cc548caf74eb7159f9de142bd536228f199a4f6399c21ccf8dd9eafa16a980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38cc548caf74eb7159f9de142bd536228f199a4f6399c21ccf8dd9eafa16a980->leave($__internal_38cc548caf74eb7159f9de142bd536228f199a4f6399c21ccf8dd9eafa16a980_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_638d3b20ba3f4773631a7de738ad731d30a9552c694fe854e7605412930c62db = $this->env->getExtension("native_profiler");
        $__internal_638d3b20ba3f4773631a7de738ad731d30a9552c694fe854e7605412930c62db->enter($__internal_638d3b20ba3f4773631a7de738ad731d30a9552c694fe854e7605412930c62db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_638d3b20ba3f4773631a7de738ad731d30a9552c694fe854e7605412930c62db->leave($__internal_638d3b20ba3f4773631a7de738ad731d30a9552c694fe854e7605412930c62db_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
