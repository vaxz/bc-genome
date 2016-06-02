<?php

/* bcGenMainBundle:Main:form_searchGenes.html.twig */
class __TwigTemplate_7a8257e2e182103c8fa5c3877cb8c7b9609a662ec8c242f6db3026583072b825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32e7e47e05939f49b68889204ef1a3f7310cff81f6b47c5c41c9c15f9ac9be7c = $this->env->getExtension("native_profiler");
        $__internal_32e7e47e05939f49b68889204ef1a3f7310cff81f6b47c5c41c9c15f9ac9be7c->enter($__internal_32e7e47e05939f49b68889204ef1a3f7310cff81f6b47c5c41c9c15f9ac9be7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:form_searchGenes.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("bc_gen_main_locus_display");
        echo "\" method=\"GET\">
\t<p>Research of a gene list</p>
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
\t<button type=\"Submit\">Search</button>
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_32e7e47e05939f49b68889204ef1a3f7310cff81f6b47c5c41c9c15f9ac9be7c->leave($__internal_32e7e47e05939f49b68889204ef1a3f7310cff81f6b47c5c41c9c15f9ac9be7c_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:form_searchGenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 3,  22 => 1,);
    }
}
/* <form action="{{ path('bc_gen_main_locus_display') }}" method="GET">*/
/* 	<p>Research of a gene list</p>*/
/* 	{{ form_widget( form.search ) }}*/
/* 	<button type="Submit">Search</button>*/
/* 	{{ form_widget(form) }}*/
/* </form>*/
