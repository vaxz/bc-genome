<?php

/* bcGenMainBundle:Main:searchGenesForm.html.twig */
class __TwigTemplate_efa9e008cba4f29b889242088400843c34b875d5fea4406ef5d9a5782a400d4b extends Twig_Template
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
        $__internal_3b76d97ed2bd2df9dd9fc1f8d708cf2ff4b5a1da21bb2b9dd05a4f6b77b2775b = $this->env->getExtension("native_profiler");
        $__internal_3b76d97ed2bd2df9dd9fc1f8d708cf2ff4b5a1da21bb2b9dd05a4f6b77b2775b->enter($__internal_3b76d97ed2bd2df9dd9fc1f8d708cf2ff4b5a1da21bb2b9dd05a4f6b77b2775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:searchGenesForm.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("bc_gen_main_locus_display");
        echo "\" method=\"GET\" >
  <p>Research of a gene list</p>
  ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "
  <button type=\"Submit\">Search</button>
  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_3b76d97ed2bd2df9dd9fc1f8d708cf2ff4b5a1da21bb2b9dd05a4f6b77b2775b->leave($__internal_3b76d97ed2bd2df9dd9fc1f8d708cf2ff4b5a1da21bb2b9dd05a4f6b77b2775b_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:searchGenesForm.html.twig";
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
