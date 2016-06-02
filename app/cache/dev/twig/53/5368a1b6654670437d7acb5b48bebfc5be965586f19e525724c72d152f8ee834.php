<?php

/* bcGenMainBundle:Main:form_searchGene.html.twig */
class __TwigTemplate_de23e85312849efc7d862bfe0133ac7ebaaf378919fccf71bc4a51f8f86366e8 extends Twig_Template
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
        $__internal_826dae9de38f2c432b8d192a2879c113b79e185d49483fb59272495ab53574ad = $this->env->getExtension("native_profiler");
        $__internal_826dae9de38f2c432b8d192a2879c113b79e185d49483fb59272495ab53574ad->enter($__internal_826dae9de38f2c432b8d192a2879c113b79e185d49483fb59272495ab53574ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:form_searchGene.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("bc_gen_main_detailed_display");
        echo "\" method=\"POST\">
\t<p>Research of one gene</p>
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
        
        $__internal_826dae9de38f2c432b8d192a2879c113b79e185d49483fb59272495ab53574ad->leave($__internal_826dae9de38f2c432b8d192a2879c113b79e185d49483fb59272495ab53574ad_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:form_searchGene.html.twig";
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
/* <form action="{{ path('bc_gen_main_detailed_display') }}" method="POST">*/
/* 	<p>Research of one gene</p>*/
/* 	{{ form_widget( form.search ) }}*/
/* 	<button type="Submit">Search</button>*/
/* 	{{ form_widget(form) }}*/
/* </form>*/
